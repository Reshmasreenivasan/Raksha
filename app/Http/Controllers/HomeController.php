<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Warrior;
use App\Models\WarriorPost;
use App\Models\WarriorPostImage;
use App\Models\WarriorPostVideo;
use App\Models\WarriorPostReel;

class HomeController extends Controller
{
    public function AddPost(Request $request, $warrior_id){

        if(Warrior::where('id', $warrior_id)->exists()){
            $user_access_token  = $request->token;
            $TokenCheck = Warrior::where('id', $warrior_id)->first();
            $DB_token = $TokenCheck->remember_token;
            if($DB_token == $user_access_token){
                
                $title = $request->title ? $request->title:null;
                $description = $request->description ? $request->description : null;
                $post_type = $request->post_type ? $request->post_type : null;

                $post_id = WarriorPost::insertGetId([
                    'warrior_id' => $warrior_id,
                    'title' => $title,
                    'description' => $description,
                    'post_type' => $post_type,
                    'created_at' => date('Y-m-d')
                ]);

                if($post_id = true){
                    if($post_type === "image"){

                        if ($request->hasFile('image')) {
                            $image = $request->file('image');
                            $filename = $image->getClientOriginalName();
                            $path = $image->storeAs('uploads', $filename, 'public'); // Adjust the storage path as needed
    
                            $fileModel = WarriorPostImage::insert([
                                'warrior_id' => $warrior_id,
                                'warrior_post_id' => $post_id,
                                'profile_pic' => $filename,
                                'profile_path' => $path,
                                'created_at' => date('Y-m-d')
                            ]);
                        
                            if($fileModel == true){
                                return response()->json(['status'=>true, 'message'=> "Succes"]);
                            } else {
                                return response()->json(['status'=>false, 'message'=> "Error updating profile picture"]);
                            }
                        } else {
                           return response()->json(['status'=>false, 'message' => "No images found"]);
                        }
                    } elseif($post_type === "video"){

                        $request->validate([
                            'video' => 'required|mimes:mp4,mov,avi|max:10240', // max:10240 is 10MB
                        ]);
                        
                        $videoPath = $request->file('video')->store('videos', 'public');

                        $video = WarriorPostVideo::insert([
                            'warrior_id' => $warrior_id,
                            'warrior_post_id' => $post_id,
                            'title' => $title,
                            'video_path' => $videoPath,
                            'created_at' => date('Y-m-d')
                        ]);

                        if($video == true){
                            return response()->json(['status'=>true, 'message'=> "Video uploaded"]);
                        } else {
                            return response()->json(['status'=>false, 'message' => "Error in uploading video"]);
                        }
                    } elseif($post_type === "Gif"){

                        $request->validate([
                            'gif' => 'required|mimes:gif|max:10240', // max:10240 is 10MB
                        ]);

                        $gifPath = $request->file('gif')->store('gifs', 'public');

                        $gif = WarriorPostGif::insert([
                            'warrior_id' => $warrior_id,
                            'warrior_post_id' => $post_id,
                            'title' => $title,
                            'gif_path' => $gifPath,
                            'created_at' => date('Y-m-d')
                        ]);

                        if($gif == true){
                            return response()->json(['status'=>true, 'message'=> "GIF uploaded"]);
                        } else {
                            return response()->json(['status'=>false, 'message' => "Failed to upload gif"]);
                        }

                    } elseif($post_type === "Reels"){
                        
                        $request->validate([
                            'file' => 'required|mimes:mp4,avi,mov,wmv',
                        ]);

                        $file = $request->file('file');
                        $filePath = $file->store('reels', 'public');
                    
                        $reels = WarriorPostReel::insert([
                                'warrior_id' => $warrior_id,
                                'warrior_post_id' => $post_id,
                                'title' => $title,
                                'description' => $description,
                                'file_path' => $filePath,
                                'created_at' => date('Y-m-d')
                            ]);

                        if($reels == true) {

                            return response()->json(['status'=>true, 'message'=>"Uploaded reels succesfully"]);
                        } else {
                            return response()->json(['status'=>false, 'message'=>"Failed to upload reels"]);
                        }
                        
                    } elseif ($post_type === "WriteUp"){
                         
                         $writeUp = WarriorPost::insert([
                            'warrior_id' => $warrior_id,
                            'warrior_post_id' => $post_id,
                            'title' => $title,
                            'description' => $description,
                            'created_at' => date('Y-m-d')
                         ]);

                         if($writeUp == true){
                            return response()->json(['status'=>true, 'message'=>"Write up posted successfully"]);
                         } else {
                            return response()->json(['status'=>false, 'message'=>"Failed to create post"]);
                         }
                    } elseif ($post_type === "Mimes") {

                        
                    }
                
                    }

            } else {
                return response()->json(['status'=>false, 'message'=>"Invalid token"]);
            }
        } else {
            return response()->json(['status'=>false, 'message'=>"No such warrior"]);
        }
    }

    //Download video
    public function downloadWarriorVideo(Request $request, $id){

        $video = Video::findOrFail($id);

        $filePath = Storage::disk('public')->path($video->video_path);

        return response()->download($filePath, $video->title . '.mp4');
    }
}
