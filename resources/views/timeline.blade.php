<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Raksha</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/custom-style3.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<style>
  .btn-lnktm{ margin-right:15px;}
</style>

</head>

<body class="toggle-sidebar">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo-cong.jpg" alt="">
        <span >Raksha</span>
      </a>
      
    </div><!-- End Logo -->

    <nav class="navbar navbar-expand-lg navbar-white">
      <div class="container wdthmob">
       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse margin-topmuser" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="user-home.html">Home</a>
            </li>
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Work Day
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="projects.html">Work Chart</a></li>
                <li><a class="dropdown-item" href="warrior.html">Warrior Chart</a></li>
                <li><a class="dropdown-item" href="#">T&C</a></li>
                
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="user.html" >
               Work Line
              </a>
              
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link  active" href="timeline.html" >
               Timeline
              </a>
              
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link " href="#" >
               Gallery
              </a>
              
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Events
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                <li><a class="dropdown-item" href="#">Up Coming</a></li>
                <li><a class="dropdown-item" href="#">On Going</a></li>
                <li><a class="dropdown-item" href="#">Completed</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Contact Us
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                <li><a class="dropdown-item" href="#">Contact Us</a></li>
                <li><a class="dropdown-item" href="#">Feedback</a></li>
                <li><a class="dropdown-item" href="#">Help</a></li>
              </ul>
            </li>
          </ul>
         
        </div>
      </div>
    </nav>

   <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item ">

          <a class="nav-link me-3 mob-txt " href="#" >
           <i class="bi bi-search"></i>
          </a>

          

        </li><!-- End search Nav -->
        <li class="nav-item dropdown">

          <a class="nav-link me-3 mob-txt " href="#" >
            Help
          </a>

          

        </li><!-- End Notification Nav -->
        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item d-block">
         
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi "><img src="assets/img/tr3.png" width="18"></i>
            
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <a href="user.html"><i><img src="assets/img/tr1.png"  width="18"></i></a>
            </li>


          </ul>
        </li>

        <!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/plat.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Antony</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Antony</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="index.html">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <!-- End Sidebar-->

  <main id="main" class="main">
<div>
    <div class="user-bg">
      <div class="card p-2">
        <img src="assets/img/bg-pl1.jpg" class="w-100">
      </div>
      <div class="user-profile">
        <div class="row">
          <div class="col-md-12">
            <div class="prof-pic">
              <img src="assets/img/plat.jpg" width="145" class="">
            </div>
            <div class="prf-name">
              <h5>Antony</h5>
              <p class="mb-0 small">Ernakulam</p>
            </div>
          </div>
         
            
          </div>
          
        </div>
        </div>
       
    </div>

   
  </div>

    <div>
      
    </div>

    <div class="border-bottom mb-4 mb-mrgn">
      <div class="row">
        <div class="col-md-3">
          <div class="pagetitle">
            <h1>Timeline</h1>
           
          </div>
        </div>

        <div class="col-md-9">
          <div class="d-md-flex justify-content-md-end">
            <a href="projects.html"><button type="button" class="btn btn-outline-secondary "><i class="bi bi-arrow-left"></i> <span>View Topics</span></button></a>
          
        </div>
        </div>



      </div>

    </div>
    
   <!-- End Page Title -->


   <div class="modal fade" id="verticalycentered" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Upload New File</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-4 col-form-label">Title</label>
              <div class="col-sm-8">
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-4 col-form-label">Description</label>
              <div class="col-sm-8">
                <textarea class="form-control" style="height: 100px"></textarea>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-4 col-form-label">Type</label>
              <div class="col-sm-8">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Image</option>
                  <option value="1">Video</option>
                  <option value="2">Gif</option>
                  <option value="3">Reels</option>
                <option value="4">Write up</option>
                <option value="5">Mimes</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-4 col-form-label">File Upload</label>
              <div class="col-sm-8">
                <input class="form-control" type="file" id="formFile">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success">Submit</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="verticalycentered2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Filter</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            
           

            <div class="row mb-3">
              <label class="col-sm-4 col-form-label">Nation</label>
              <div class="col-sm-8">
                <select class="form-select" aria-label="Default select example">
                  <option selected>India</option>
                  <option value="1">America</option>
                  <option value="2">South Africa</option>
                  <option value="3">UK</option>
                <option value="4">UAE</option>
                <option value="5">Australia</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-4 col-form-label">Size</label>
              <div class="col-sm-8">
                <select class="form-select" aria-label="Default select example">
                  <option selected>0-10 kb</option>
                  <option value="1">10-20 kb</option>
                  <option value="2">20-30 kb</option>
                  <option value="3">30-40 kb</option>
                
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <legend class="col-form-label col-sm-4 pt-0">Soldier</legend>
              <div class="col-sm-8">

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck1">
                  <label class="form-check-label" for="gridCheck1">
                   Soldier
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                  <label class="form-check-label" for="gridCheck2">
                    Captain
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                  <label class="form-check-label" for="gridCheck2">
                    Major
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                  <label class="form-check-label" for="gridCheck2">
                    General
                  </label>
                </div>

              </div>
            </div>

            <div class="row mb-3">
              <label for="inputDate" class="col-sm-4 col-form-label">Date</label>
              <div class="col-sm-8">
                <input type="date" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputTime" class="col-sm-4 col-form-label">Time</label>
              <div class="col-sm-8">
                <input type="time" class="form-control">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-4 col-form-label">Hashtag</label>
              <div class="col-sm-8">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Congress</option>
                  <option value="1">Kerala</option>
                  <option value="2">India</option>
                  <option value="3">rahulgandhi</option>
                
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-4 col-form-label">Save</label>
              <div class="col-sm-8">
                <select class="form-select" aria-label="Default select example">
                  <option >All</option>
                  <option selected>Saved</option>
                  <option value="1">Not Saved</option>

                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-4 col-form-label">Category</label>
              <div class="col-sm-8">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Photos</option>
                  <option value="1">Video</option>
                  <option value="2">Reels</option>
                  <option value="3">Write up</option>
                  <option value="4">Fact check</option>
                  <option value="5">Screen shot</option>
                  <option value="6">Memes</option>
                  <option value="7">AI</option>
                  <option value="8">Images</option>
                
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-4 col-form-label">Post Count</label>
              <div class="col-sm-8">
                <select class="form-select" aria-label="Default select example">
                  <option selected>10</option>
                  <option value="1">20</option>
                  <option value="2">30</option>
                  <option value="3">40</option>
                
                </select>
              </div>
            </div>

           
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success">Submit</button>
        </div>
      </div>
    </div>
  </div>

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-4">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-12 col-md-12">
              <div class="card p-2">
                
               
                <div class="card-title p-2">

                  <div class="row">
                    <div class="col-md-6">Warriors</div>
                    <div class="col-md-6">
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="small" type="button" style="font-size:12px">See All Warrior</a>

                      </div>
                    </div>
                  </div>
                 
                 </div>
                <div class="card-body">
               
                  <ul class="nav nav-pills pb-2 " id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link  btn-lnktm " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"> Platinum</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link btn-lnktm" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Gold</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link btn-lnktm" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Silver</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active btn-lnktm" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Bronze</button>
                    </li>
                   
                  </ul>
                 <div style="height:150px; overflow:hidden;"> <img src="assets/img/img-gall.jpg"  class="card-img-top" alt="..."></div>
                  
                </div>
              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-12 col-md-12">
              <div class="card p-2">
                
               
                <div class="card-title p-2">

                  <div class="row">
                    <div class="col-md-6">Saved</div>
                    <div class="col-md-6">
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="small" type="button" style="font-size:12px">See All Saved</a>

                      </div>
                    </div>
                  </div>
                 
                 </div>
                <div class="card-body">
                  
                 <div style="height:150px; overflow:hidden;"> <img src="assets/img/img-gal3.jpg"  class="card-img-top" alt="..."></div>
                  
                </div>
              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-12 col-md-12">
              <div class="card p-2">
                
               
                <div class="card-title p-2">

                  <div class="row">
                    <div class="col-md-6">Photos</div>
                    <div class="col-md-6">
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="small" type="button" style="font-size:12px">See All Photos</a>

                      </div>
                    </div>
                  </div>
                 
                 </div>
                <div class="card-body">
                 
                 <div style="height:150px; overflow:hidden;"> <img src="assets/img/photo.jpg"  class="card-img-top" alt="..."></div>
                  
                </div>
              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-12 col-md-12">
              <div class="card p-2">
                
               
                <div class="card-title p-2">

                  <div class="row">
                    <div class="col-md-6">Images</div>
                    <div class="col-md-6">
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="small" type="button" style="font-size:12px">See All Images</a>

                      </div>
                    </div>
                  </div>
                 
                 </div>
                <div class="card-body">
                 
                 <div style="height:150px; overflow:hidden;"> <img src="assets/img/images.jpg"  class="card-img-top" alt="..."></div>
                  
                </div>
              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-12 col-md-12">
              <div class="card p-2">
                
               
                <div class="card-title p-2">

                  <div class="row">
                    <div class="col-md-6">AI</div>
                    <div class="col-md-6">
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="small" type="button" style="font-size:12px">See All AI</a>

                      </div>
                    </div>
                  </div>
                 
                 </div>
                <div class="card-body">
                 
                 <div style="height:150px; overflow:hidden;"> <img src="assets/img/ai.jpg"  class="card-img-top" alt="..."></div>
                  
                </div>
              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-12 col-md-12">
              <div class="card p-2">
                
               
                <div class="card-title p-2">

                  <div class="row">
                    <div class="col-md-6">Videos</div>
                    <div class="col-md-6">
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="small" type="button" style="font-size:12px">See All Videos</a>

                      </div>
                    </div>
                  </div>
                 
                 </div>
                <div class="card-body">
                 
                 <div style="height:150px; overflow:hidden;"> <img src="assets/img/video1.jpg"  class="card-img-top" alt="..."></div>
                  
                </div>
              </div>
            </div><!-- End Sales Card -->


            <div class="col-xxl-12 col-md-12">
              <div class="card p-2">
                
               
                <div class="card-title p-2">

                  <div class="row">
                    <div class="col-md-6">Reels</div>
                    <div class="col-md-6">
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="small" type="button" style="font-size:12px">See All Reels</a>

                      </div>
                    </div>
                  </div>
                 
                 </div>
                <div class="card-body">
                 
                 <div style="height:150px; overflow:hidden;"> <img src="assets/img/reel1.jpg"  class="card-img-top" alt="..."></div>
                  
                </div>
              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-12 col-md-12">
              <div class="card p-2">
                
               
                <div class="card-title p-2">

                  <div class="row">
                    <div class="col-md-6">Memes</div>
                    <div class="col-md-6">
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="small" type="button" style="font-size:12px">See All Mimes</a>

                      </div>
                    </div>
                  </div>
                 
                 </div>
                <div class="card-body">
                 
                 <div style="height:150px; overflow:hidden;"> <img src="assets/img/memes.jpg"  class="card-img-top" alt="..."></div>
                  
                </div>
              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-12 col-md-12">
              <div class="card p-2">
                
               
                <div class="card-title p-2">

                  <div class="row">
                    <div class="col-md-6">Write up</div>
                    <div class="col-md-6">
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="small" type="button" style="font-size:12px">See All write up</a>

                      </div>
                    </div>
                  </div>
                 
                 </div>
                <div class="card-body">
                 
                 <div style="height:150px; overflow:hidden;"> <img src="assets/img/write.jpg"  class="card-img-top" alt="..."></div>
                  
                </div>
              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-12 col-md-12">
              <div class="card p-2">
                
               
                <div class="card-title p-2">

                  <div class="row">
                    <div class="col-md-6">Fact Check</div>
                    <div class="col-md-6">
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="small" type="button" style="font-size:12px">See All Fact Check</a>

                      </div>
                    </div>
                  </div>
                 
                 </div>
                <div class="card-body">
                 
                 <div style="height:150px; overflow:hidden;"> <img src="assets/img/fact1.jpg"  class="card-img-top" alt="..."></div>
                  
                </div>
              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-12 col-md-12">
              <div class="card p-2">
                
               
                <div class="card-title p-2">

                  <div class="row">
                    <div class="col-md-6">Screenshot</div>
                    <div class="col-md-6">
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="small" type="button" style="font-size:12px">See All Screen shot</a>

                      </div>
                    </div>
                  </div>
                 
                 </div>
                <div class="card-body">
                 
                 <div style="height:150px; overflow:hidden;"> <img src="assets/img/screen.jpg"  class="card-img-top" alt="..."></div>
                  
                </div>
              </div>
            </div><!-- End Sales Card -->



            <!-- Revenue Card -->
            <!-- End Revenue Card -->

            <!-- Customers Card -->
            <!-- End Customers Card -->

            <!-- Reports -->
            <!-- End Reports -->

            <!-- Recent Sales -->
            <!-- End Recent Sales -->

            <!-- Top Selling -->
            <!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->
        <div class="col-lg-1"></div>

        <div class="col-lg-7">

          <div class="border p-4" style="background-color:#fff ;">

            <div class="row">
<div class="col-md-12">

  <div class="card">

    <div class="card-body">

      <div class="pt-3">
        <div><h5>22 Post</h5></div><!-- End Profile Iamge Icon -->
<div class="pt-2 mb-2">
  <ul class="nav nav-pills " id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active btn-lnktm " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="bi bi-camera"></i> Photos</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link  btn-lnktm " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="bi bi-image"></i> Images</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link  btn-lnktm " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="bi bi-cpu"></i> AI</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link btn-lnktm" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="bi bi-camera-video"></i> Videos</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link btn-lnktm" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="bi bi-camera-reels"></i> Reels</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link btn-lnktm" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="bi bi-card-text"></i> Write up </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link btn-lnktm" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="bi bi-cast"></i> Memes </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link btn-lnktm" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="bi bi-search"></i> Fact check </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link btn-lnktm" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="bi bi-crop"></i> Screen shot </button>
    </li>
  </ul>
</div>
      </div>

     <div class="row border-top border-bottom pt-2 pb-2">

      <div class="col-md-3"><h5>Photos</h5></div>
      <div class="col-md-9">
        <div ><div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-outline-secondary btn-sm me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#verticalycentered2"><i class="bi bi-filter"></i> Filter</button>
          <button class="btn btn-outline-secondary btn-sm" type="button"><i class="bi bi-gear"></i> Manage Post</button>
        </div></div>
      </div>
      
     </div>

      <div class="row pt-2">
        <div class="col-md-6">
          <a class="nav-link nav-icon active list_vw"  href="#">
            <i class="bi bi-list"></i>List View
            
          </a>
        </div>
        <div class="col-md-6">
          <a class="nav-link nav-icon" href="#">
            <i class="bi bi-grid"></i>Grid View
            
          </a>
        </div>
      </div>

    </div>
  </div>

  <div>
    



    <div class="card p-2">
      <div class="filter opt-bg">
        <a class="icon opt-icn" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          

          <li><a class="dropdown-item" href="#">Edit Content</a></li>
          <li><a class="dropdown-item" href="#">Edit Hashtag</a></li>
          <li><a class="dropdown-item" href="#">Change Category</a></li>
          <li><a class="dropdown-item" href="#"> Delete</a>
          </li>
          
         
        </ul>
      </div>

      <div class="filter save-icn d-none d-md-block"  >
        <a class="icon opt-icn p-0" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Saved"  style="font-size:15px ; color: #3db64b;"><i class="bi bi-bookmark-fill" style="color:#5c5ab1 ;"></i></a>
        <a class="icon opt-icn p-2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="chat"  style="font-size:15px ; "> <i class="bi bi-chat-left-dots"></i></a>
      </div>

      <div class="filter" style="margin-right:35px ;" >
        <a class="icon opt-icn" href="#"  style="font-size:13px ;">Post 22</a>
        
      </div>
      <div class="p-2">
        <a class=" d-flex align-items-center pe-0 h-50 dark-lght" href="#" >
        <div class="rounded-circle"  style="border:2px solid #3db64b;"><img src="assets/img/messages-1.jpg" alt="Profile" class="rounded-circle" width="50" style="border:1px solid #fff; ;" > </div>
        <span class=" ps-2">Andrea <i><img src="assets/img/ind.png" width="15" ></i>  <i><img src="assets/img/tr3.png" width="15" style="margin-left: 5px ;" ></i> <br> <small class="light-txt" >Nov.11  (9 am)</small></span>
        
        </a></div>
      
      <img src="assets/img/scl.jpg" class="card-img-top" alt="...">

        <div class="row">
          <div class="col-6">
           
            <div class="pt-2 d-block d-md-none"  >
              <a class="icon opt-icn p-0" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Saved"  style="font-size:15px ; color: #3db64b;"><i class="bi bi-bookmark-fill" style="color:#5c5ab1 ;"></i></a>
              <a class="icon opt-icn p-2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="chat"  style="font-size:15px ; "> <i class="bi bi-chat-left-dots"></i></a>
            </div>
      
          </div>

                 
          <div class="col-6  ">
        
            <div class="d-flex justify-content-end">
             
              <p class="mb-0 pb-0" style="font-size:12px ;">15kb</p></div>
          </div>
        </div>

     
      <div class="card-body">
        <div class="" >
          <div ><p><span style="color:#d4d4d4">Category: </span> Photos</p></div>

        </div>
        <h5 class="card-title">Title</h5>
        <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

        <p class="card-text "><a href="">#congresskerala #rahulgandhi #kerala</a></p>


        <div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
         

            <div class="star-rating">
              <span class="bi bi-star" data-rating="1"></span>
              <span class="bi bi-star" data-rating="2"></span>
              <span class="bi bi-star" data-rating="3"></span>
              <span class="bi bi-star" data-rating="4"></span>
              <span class="bi bi-star" data-rating="5"></span>
              <input type="hidden" name="whatever1" class="rating-value" value="2.56">
            </div>
  
          
          </div>
        </div>
       
      </div>
    </div>

    <div class="card p-2">
      <div class="filter opt-bg">
        <a class="icon opt-icn" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          

          <li><a class="dropdown-item" href="#">Edit Content</a></li>
          <li><a class="dropdown-item" href="#">Edit Hashtag</a></li>
          <li><a class="dropdown-item" href="#">Change Category</a></li>
          <li><a class="dropdown-item" href="#"> Delete</a>
          </li>
          
         
        </ul>
      </div>

      <div class="filter save-icn" >
        <a class="icon opt-icn p-0" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Save"  style="font-size:15px ; "> <i class="bi bi-bookmark"></i></a>
        <a class="icon opt-icn p-2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="chat"  style="font-size:15px ; "> <i class="bi bi-chat-left-dots"></i></a>
        
        
      </div>
      <div class="filter" style="margin-right:35px ;" >
        <a class="icon opt-icn" href="#"  style="font-size:13px ;">Post 21</a>
        
      </div>
      <div class="p-2">
        <a class=" d-flex align-items-center pe-0 h-50 dark-lght" href="#" >
        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" width="50" >
        <span class=" ps-2">Mathew <i><img src="assets/img/ind.png" width="15" ></i> <i><img src="assets/img/tr1.png" width="15" style="margin-left: 5px ;" ></i> <br> <small class="light-txt" >Nov.10 (1.2 pm)</small></span>
        
        </a></div>
      
      <img src="assets/img/pst2.jpg" class="card-img-top" alt="...">
      <div class="d-flex justify-content-md-end"><p class="mb-0 pb-0" style="font-size:12px ;">15kb</p></div>
     
      <div class="card-body">
        <div >
          <div ><p><span style="color:#d4d4d4">Category: </span> Photos</p></div>

        </div>
        <h5 class="card-title">Title</h5>
        <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <p class="card-text "><a href="">#congresskerala #rahulgandhi #kerala</a></p>

        <div class="row">
          <div class="col-md-2 col-sm-4 col-xs-4">
           
          </div>
          <div class="col-md-10  col-sm-8  col-xs-8">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
         

              <div class="star-rating">
                <span class="bi bi-star" data-rating="1"></span>
                <span class="bi bi-star" data-rating="2"></span>
                <span class="bi bi-star" data-rating="3"></span>
                <span class="bi bi-star" data-rating="4"></span>
                <span class="bi bi-star" data-rating="5"></span>
                <input type="hidden" name="whatever1" class="rating-value" value="2.56">
              </div>
    
            
            </div>
          </div>
        </div> 
       
       
        
      </div>
    </div>
  </div>

</div>

            </div>

          </div>



        </div>

        <!-- Right side columns -->
        <!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Work</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Feedback </a>
      </li>
      
    </ul>

      
   
    <div class="copyright">
      &copy; Copyright <strong><span>Raksha</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://qualstarglobalsolutions.com/">Qualstarglobalsolutions</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>