<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;
use Session;

class AdminController extends Controller
{
    public function index(){
       
        return csrf_token();
    }

    public function sendResponse($data, $message, $status = 200) 
    {
        $response = [
            'data' => $data,
            'message' => $message
        ];

        return response()->json($response, $status);
    }

    public function sendError($errorData, $message, $status = 500)
    {
        $response = [];
        $response['message'] = $message;
        if (!empty($errorData)) {
            $response['data'] = $errorData;
        }

        return response()->json($response, $status);
    }


    public function loginCheck(Request $request)
    {
        
        $login = $request->login;
        $password = $request->password;

        $validator = Validator::make($request->all(), [
            'login' => 'required',
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            return $this->sendError($validator->errors(), 'Validation Error', 422);
        }
        $token = md5(uniqid(). rand(1000000, 9999999));
        if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
            if (User::where('email', $login)->exists()) {
                $loginCheck = User::select('*')->where('email', $login)->first();
                $hashedPassword = $loginCheck->password;
                
                if (Hash::check($request->password, $hashedPassword)){
             
                    $result = User::where('email', $login)->update([
                        'remember_token' => $token
                    ]);
                    $userDetails = [
                        'email' => $login,
                        'name' => $loginCheck->first_name,
                        'token' => $token,
                        'profile_complete' => $loginCheck->profile_complete
                    ];

                    return response()->json(['status' => true, 'message' => 'Login successful', 'data' => $userDetails]);
                } else {
                    return response()->json(['status' => false, 'message' => 'Invalid Email/Password']);
                }
            } else {
                return response()->json(['status' => false, 'message' => 'Email not found. Please register first!']);
            }
        } elseif (is_string($login)) {
            $phoneNumber = preg_replace('/[^0-9]/', '', $login);
            if (strlen($phoneNumber) >= 10) {
                if (User::where('phone', $login)->exists()) {
                    $loginCheck = User::select('*')->where('phone', $login)->first();
                    $hashedPassword = $loginCheck->password;
                    
                    if (Hash::check($request->password, $hashedPassword)){
                 
                        $result = User::where('phone', $login)->update([
                            'remember_token' => $token
                        ]);
                        $userDetails = [
                            'email' => $loginCheck->email,
                            'name' => $loginCheck->first_name,
                            'token' => $token,
                            'profile_complete' => $loginCheck->profile_complete
                        ];
    
    
                        return response()->json(['status' => true, 'message' => 'Login successful', 'data' => $userDetails]);
                    } else {
                        return response()->json(['status' => false, 'message' => 'Invalid Phone Number / Password']);
                    }
                } else {
                    return response()->json(['status' => false, 'message' => 'Invalid Phone Number or Password']);
                }
            } else {
                if (User::where('username', $login)->exists()) {
                    $loginCheck = User::select('*')->where('username', $login)->first();
                    $hashedPassword = $loginCheck->password;
                    
                    if (Hash::check($request->password, $hashedPassword)){
                 
                        $result = User::where('username', $login)->update([
                            'remember_token' => $token
                        ]);
                        $userDetails = [
                            'email' => $loginCheck->email,
                            'name' => $loginCheck->first_name,
                            'token' => $token,
                            'profile_complete' => $loginCheck->profile_complete
                        ];
    
    
                        return response()->json(['status' => true, 'message' => 'Login successful', 'data' => $userDetails]);
                    } else {
                        return response()->json(['status' => false, 'message' => 'Invalid Username / Password']);
                    }
                } else {
                    return response()->json(['status' => false, 'message' => 'Invalid Uername or Password']);
                }
            } 
        } else {
            return response()->json(['status' => false, 'message' => 'Please enter a valid phone number or email']);
        }
    }
    
// Register
    public function Register(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            return $this->sendError($validator->errors(), 'Validation Error', 422);
        }

        $first_name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $username = $request->username;
        $password = $request->password;

        if(User::where('email', $email)->exists()){
            return response()->json(['status'=>false, 'message'=>"Email already registered"]);
        } elseif (User::where('phone', $phone)->exists()){
            return response()->json(['status'=>false, 'message'=>"Phone number already registered"]);
        } elseif (User::where('username', $username)->exists()) {
            return response()->json(['status'=>false, 'message'=>"Username already taken"]);
        } else {

            $result = User::insert([
                'first_name' => $first_name,
                'email' => $email,
                'phone' => $phone,
                'username' => $username,
                'password' => bcrypt($password),
                'is_active' => 1,
                'created_at' => date('Y-m-d')
            ]);
            
            if($result = true){
                return response()->json(['status'=>true, 'message'=>"Registration Successful"]);
            } else {
                return response()->json(['status'=>false, 'message'=>"Registeration failed"]);
            }
        }
    }

    //logout 
    public function logout($id){

        if(User::where('id', $id)->exists()){
            
            $result = User::where('id', $id)->update([
                    'remember_token' => null
            ]);

            if($result == true){
                return response()->json(['status'=>true, 'message'=>"Logged out"]);
            } else {
                return response()->json(['status'=>false, 'message'=>"Failed to log out"]);
            }
        }

    }
    
    //update profile
    public function updateProfile(Request $request, $user_id){
        $validator = Validator::make($request->all(), [
            
             'address1' => 'required',
             'city' => 'required',
             'state' => 'required',
             'country' => 'required',
             'pincode' => 'required'
         ]);
   
         if ($validator->fails()) {
             $msg = $validator->messages()->first();
   
             return response()->json(['response_code' => false, 'message' => $msg]);
        }
        
        if(User::where('id', $user_id)->exists()){
         
        $TokenCheck = User::where('id', $user_id)->first();
        $DB_token = $TokenCheck->remember_token;
        if($DB_token != null){
             $UserCheck = User::select('*')->where('id', $user_id)->first();
   
            if($UserCheck != null) {
                $first_name = $request->first_name ? $request->first_name:$UserCheck->first_name;
                $last_name = $request->last_name  ? $request->last_name:$UserCheck->last_name;
                $address1 = $request->address1  ? $request->address1:$UserCheck->address1;
                $address2 = $request->address2  ? $request->address2:$UserCheck->address2;
                $city = $request->city  ? $request->city:$UserCheck->city;
                $district = $request->district ? $request->district:$UserCheck->district;
                $state = $request->state ? $request->state:$UserCheck->state;
                $country = $request->country ? $request->country:$UserCheck->country;
                $pincode = $request->pincode ? $request->pincode:$UserCheck->phone;
                $about = $request->about ? $request->about:$UserCheck->about;
                $job = $request->job ? $request->job:$UserCheck->job;
                $company = $request->company ? $request->company:$UserCheck->company;
                $twitter_link = $request->twitter_link ? $request->twitter_link:$UserCheck->twitter_link;
                $facebook_link = $request->facebook_link ? $request->facebook_link:$UserCheck->facebook_link;
                $instagram_link = $request->instagram_link ? $request->instagram_link:$UserCheck->instagram_link;
                $linkedlin_link = $request->linkedlin_link ? $request->linkedlin_link:$UserCheck->linkedlin_link;
                 
                 $update = User::where('id', $user_id)->update([
                             'first_name' => $first_name,
                             'last_name' => $last_name,
                             'address1' => $address1,
                             'address2' => $address2,
                             'city' => $city,
                             'district' => $district,
                             'state' => $state,
                             'country' => $country,
                             'pincode' => $pincode,
                             'about' => $about,
                             'job' => $job,
                             'company' => $company,
                             'twitter_link' => $twitter_link,
                             'facebook_link' => $facebook_link,
                             'instagram_link' => $instagram_link,
                             'linkedlin_link' => $linkedlin_link,
                             'profile_complete' => 1
                     ]);
                     
                     $userData = [
                        'username' => $UserCheck->username,
                        'email' => $UserCheck->email,
                        'profile_complete' => 1
                     ];

               if($update == true){
                    return response()->json(['status' => true, 'message'=> "Updated user details successfully", 'data' => $userData]);
               } else {
                   return response()->json(['status' => false, 'message'=> "Failed to update"]);
               }
            } else {
                return response()->json(['status' => false, 'message' => "No such user exists"]);
            }
        } else {
            return response()->json(['status'=>false,'message'=>'Invalid token']);
        }
        
        } else {
            return response()->json(['status'=>false, 'message'=>"No such user"]);
        }
    }

     //Update profile pic
     public function UpdateProfilePic(Request $request, $user_id){

        if(User::where('id', $user_id)->exists()){
           
            $TokenCheck = User::where('id', $user_id)->first();
            $DB_token = $TokenCheck->remember_token;
            if($DB_token != null){
                
                $userDetails = User::select('profile_pic', 'profile_path')->where('id', $user_id)->first();
                $profile_pic = $userDetails->profile_pic;
                $profile_path = $userDetails->profile_path;

                if ($request->hasFile('profic_pic')) {
                    $image = $request->file('profile_pic');
                    $filename = $image->getClientOriginalName();
                    $path = $image->storeAs('uploads', $filename, 'public'); // Adjust the storage path as needed
    
                    $fileModel = User::where('id', $user_id)->update([
                        'profile_pic' => $filename,
                        'profile_path' => $path,
                    ]);

                    if($fileModel == true){
                        return response()->json(['status'=>true, 'message'=> "Updated profile picture"]);
                    } else {
                        return response()->json(['status'=>false, 'message'=> "Error updating profile picture"]);
                    }
                } else {
                    $fileModel = User::where('id', $userr_id)->update([
                        'profile_pic' => $profile_pic,
                        'profile_path' => $profile_path,
                    ]);
                }

            } else {
                return response()->json(['status'=>false, 'message'=>"Unauthorized Access!!"]);
            }
        } else {
            return response()->json(['status'=>false, 'message'=>"No such warrior"]);
        }

    }

    // Delete profile pic
    public function RemoveProfilePic(Request $request, $user_id){

        if(User::where('id', $user_id)->exists()){
          
            $TokenCheck = User::where('id', $user_id)->first();
            $DB_token = $TokenCheck->remember_token;
            if($DB_token != null){
                
                $userDetails = User::where('id', $user_id)->update([
                    $profile_pic = null,
                    $profile_path = null
                ]);

                if($userDetails == true){
                    return response()->json(['status'=>true, 'message'=>"Removed profile picture"]);
                } else {
                    return response()->json(['status'=>false, 'message'=>"Failed to remove profile picture"]);
                }
            } else {
                return response()->json(['status'=>false, 'message'=>"Unauthorized Access!!"]);
            }
        } else {
            return response()->json(['status'=>false, 'message'=>"No such warrior"]);
        }
    }

     //Change Password
     public function changePassword(Request $request, $user_id){
        if(User::where('id', $user_id)->exists()){

            $TokenCheck = User::where('id', $user_id)->first();
            $DB_token = $TokenCheck->remember_token;
            if($DB_token != null){

                $current_password = $request->current_password;
                $new_password = $request->new_password;
                $confirm_password = $request->confirm_password;
                
                $user_password = User::select('password')->where('id', $user_id)->first();
                if (Hash::check($current_password, $user_password->password)) {

                    if(strcmp($new_password, $confirm_password) === 0){

                        $update = User::where('id', $user_id)->update([
                            'password' => Hash::make($new_password)
                        ]);
                        
                        if ($update == true) {
                            return response()->json(['status'=>true, 'message'=>"Password changed successfully."]);
                        } else {
                            return response()->json(['status'=>false, 'message'=> "Failed to change password"]);
                        }

                    } else {
                        return response()->json(['status'=>false, 'message'=> "New password and re-enter password doesn't match"]);
                    }
                } else {
                    return response()->json(['status'=>false, 'message'=>"Current password is incorrect!"]);
                }
                
            } else {
                return response()->json(['status'=>true, 'message'=>"Unauthorized Access!!"]);
            }
        } else {
            return response()->json(['status'=>true, 'message'=>"No such warrior"]);
        }
    }

    //Profile view
    public function profileView(Request $request, $user_id){
        if(User::where('id', $user_id)->exists()){
           
            $TokenCheck = User::where('id', $user_id)->first();
            $DB_token = $TokenCheck->remember_token;
            
            if($DB_token != null){
                $profileData = User::where('id',$user_id)
                                        ->select('first_name', 'last_name', 'email', 'phone','username',
                                        'address1', 'address2', 'city','district','state','country','pincode','job','company',
                                        'about','twitter_link','facebook_link','instagram_link','linkedlin_link')
                                        ->get();

                $profileImage = User::select('id', 'profile_pic')->where('id', $user_id)->get();

                if($profileImage[0]->profile_pic != null){
                    $Image = $this->downloadFile( $profileImage['id']);
               
                    $ImageUrl = url('/api/downloadImage/' . $profileImage['id']);
                
                    $profilePic = [
                        'id' => $profileImage['id'],
                        'file_name' => $profileImage['file_name'],
                        'download_link' => $ImageUrl,
                        ];
                
                    $profileData[0]['profile_pic'] = $profilePic;
                } else {
                    $profileData[0]['profile_pic'] = null ;
                } 

                if($profileData == true){
                    return response()->json(['status'=>true, 'message'=> "Profile details retreived", 'data' => $profileData]);
                } else {
                    return response()->json(['status'=>false, 'message'=> "failed to retreive"]);
                }
            } else {
                return response()->json(['status'=>false, 'message'=>"Invalid token"]);
            }
        } else {
            return response()->json(['status'=>false, 'message'=>"No such warrior"]);
        }
    }

    //Download image
    public function downloadFile($fileId)
    {
        $fileDetails = User::find($fileId);
    
        if (!$fileDetails) {
            
            $content = "File not found";
            return $content;
        }
    
        $filePath = storage_path("app/public/{$fileDetails->profile_path}");
    
        return response()->download($filePath, $fileDetails->profile_pic);
    }
    public function forgotPassword(Request $request){
      
        $email = $request->email;
        $password = $request->password;
        $c_password = $request->c_password;
        
        if(User::where('email', $email)->exists()){
          
            if($password === $c_password){
            
                $result = User::where('email', $email)->update([
                    "password" => Hash::make($password)
                ]);
            return redirect('/');
        } else {
            return redirect('/reset_password');
        }
        return redirect('/reset_password');
    }
  }
}
