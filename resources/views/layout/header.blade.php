
 

     <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/app-assets/images/logo/GTS.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/vendors.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/charts/apexcharts.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/extensions/swiper.min.css ') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/bootstrap.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/bootstrap-extended.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/colors.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/components.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/themes/dark-layout.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/themes/semi-dark-layout.min.css ') }}">
       <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/core/menu/menu-types/vertical-menu.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/pages/dashboard-ecommerce.min.css ') }}">
    <!-- END: Page CSS-->

    <link rel="stylesheet" href="{{ asset('vendor/uploader/css/fileinput.css') }}" />
    <link href="{{ asset('vendor/uploader/themes/explorer-fas/theme.css') }}" media="all" rel="stylesheet" type="text/css"/>

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css ') }}">
    <!-- END: Custom CSS-->
 
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css ') }}"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">


    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css ') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/plugins/forms/wizard.min.css ') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/animate/animate.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/extensions/sweetalert2.min.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/forms/select/select2.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/pickers/pickadate/pickadate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/pickers/daterange/daterangepicker.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/pages/app-invoice.min.css') }}">
    
  </head>
  <!-- END: Head-->
<style>
    .header-navbar.fixed-top {
    left: 260px;
    position: fixed;
    background-color: #f3ffff;
   
    box-shadow: -8px 12px 18px 0 rgba(25,42,70,.13);
}
.navbar-header{
  margin-bottom: 10px;
}
.select2-container--default .select2-selection--single{
 border:1px solid #aaa6;
}
.table thead th{
  color: #021832 !important
  /*font-size: 0.9rem !important;
  letter-spacing: 0.5px !important;*/
}
@media screen and (max-width: 1280px) and (min-width: 768px) {
.dashboard-earning-swiper, .dashboard-greetings, .dashboard-latest-update, .dashboard-visit {
    max-width: 100%!important;
    -webkit-box-flex: 1;
    -webkit-flex: auto;
    -ms-flex: auto;
    flex: auto;
}
.header-navbar.fixed-top {
     left: 0px; 
    position: fixed;
    background-color: #f3ffff;
    box-shadow: -8px 12px 18px 0 rgb(25 42 70 / 13%);
}
}

    </style>
  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="navbar-collapse" id="navbar-mobile">
            <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
              <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="javascript:void(0);"><i class="ficon bx bx-menu"></i></a></li>
              </ul>
              <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{url('/')}}/{{request()->path()}}" > 
                    <h3><?php if (request()->path() == 'admin/home') {
                                    echo 'Dashboard';
                                }elseif (request()->path() == 'admin/country') {
                                  echo 'Country Master';
                                }
                                elseif (request()->path() == 'admin/specialization') {
                                  echo 'Specialization Master';
                                }

                                 elseif (request()->path() == 'admin/institute') {
                                  echo 'Institute List';
                                }
                                 elseif (request()->path() == 'admin/institute/add') {
                                  echo 'Add Institute List';
                                }
                                elseif (request()->path() == 'admin/edit-ins-list/{id}') {
                                  echo 'Edit Institute List';
                                }
                                elseif (request()->path() == 'admin/courses') {
                                  echo 'Course List';
                                }
                                 elseif (request()->path() == 'admin/course/add') {
                                  echo 'Add Course List';
                                }
                                elseif (request()->path() == 'admin/ccategory') {
                                  echo 'Add Course Category';
                                }
                                elseif (request()->path() == 'admin/chighlight') {
                                  echo 'Course Highlight Master';
                                }
                                elseif (request()->path() == 'admin/listcoaching') {
                                  echo 'List Coching Master';
                                }
                                elseif (request()->path() == 'admin/list/coching/add') {
                                  echo 'Add Coching List';
                                }                                    
                                else{
                                  // echo request()->path();
                                   echo 'Edit Details';
                                } ?>
                    </h3></a>

                    

                </li>



              </ul>
            </div>
            <ul class="nav navbar-nav float-right">
              <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void(0);" data-toggle="dropdown">
                  <div class="user-nav d-sm-flex d-none"><span class="user-name">GTS</span><span class="user-status text-muted">{{auth()->user()->name}}</span></div><span><img class="round" src="{{ asset('public/app-assets/images/logo/GTS.png') }}" alt="avatar" height="40" width="40"></span></a>
              <div class="dropdown-menu dropdown-menu-right pb-0">
                <!-- <div class="dropdown-divider mb-0"></div> -->
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                   <i class="bx bx-power-off mr-50"></i> {{ __('Logout') }}
                </a>
                 <a class="dropdown-item" href="" data-toggle="modal" data-target="#change_password">
                   <i class="bx bx-power-off mr-50"></i> {{ __('Change Password') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </div>

              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- END: Header-->
     <div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="padding: 0.6rem 1rem;">
                <h4 class="modal-title">Reset Password</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
        <div class="container">
        <div class="modal-body pb-0"  >
          <form method="POST" id="reset_form"  style="margin-bottom: 50px;">
                    @csrf
                
        
        <div class="row" style="width: 100%;"></div>
    <div class="row">
         <div class="col-md-1 col-1"></div>
               <div class="col-md-10 col-10">
                     <div class="form-group"><label for="nf-email" class=" form-control-label mb-0"> Old Password<span class="text-danger">*</span></label>
                     <input type="text" class="form-control" name="old_password" placeholder="Old Password" >
                    </div>
               </div>
         <div class="col-md-1 col-1"></div>
     </div>

     <div class="row">
         <div class="col-md-1 col-1"></div>
               <div class="col-md-10 col-10">
                     <div class="form-group"><label for="nf-email" class=" form-control-label mb-0"> New Password<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="new_password" required autocomplete="new-password" placeholder="New Password">

                               
                    </div>
               </div>
         <div class="col-md-1 col-1"></div>
     </div>

     <div class="row">
         <div class="col-md-1 col-1"></div>
               <div class="col-md-10 col-10">
                     <div class="form-group"><label for="nf-email" class=" form-control-label mb-0">Confirm Password<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="confirm_password" required placeholder="Confirm Password">
                    </div>
               </div>
         <div class="col-md-1 col-1"></div>
     </div>
     <br>
     
     
    
    <div class="row">
         <div class="col-md-1 col-1"></div>
               <div class="col-md-5 col-5">
                     <div class="form-group mb-0">
                         <button class="btn btn-danger" id="cancel-btn" class="close" data-dismiss="modal" aria-label="Close" style="width: 100%;">Cancel</button>
                   </div>
               </div>


                <div class="col-md-5 col-5">
                     <div class="form-group mb-0">
                         <button class="btn btn-primary reset-btn" type="button" style="width: 100%;">Reset </button>
                   </div>
               </div>
        <div class="col-md-1 col-1"></div>
     </div>
   
   
    </form>
    </div>
</div>
  </div>
</div>
</div>


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-accordion menu-shadow expanded menu-dark" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand" href="{{url('home')}}">
              <div class="brand-logo">
                
                <svg class="logo" width="26px" height="26px" viewbox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>icon</title>
                  <defs>
                    <lineargradient id="linearGradient-1" x1="50%" y1="0%" x2="50%" y2="100%">
                      <stop stop-color="#5A8DEE" offset="0%"></stop>
                      <stop stop-color="#699AF9" offset="100%"></stop>
                    </lineargradient>
                    <lineargradient id="linearGradient-2" x1="0%" y1="0%" x2="100%" y2="100%">
                      <stop stop-color="#FDAC41" offset="0%"></stop>
                      <stop stop-color="#E38100" offset="100%"></stop>
                    </lineargradient>
                  </defs>
                  <g id="Sprite" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="sprite" transform="translate(-69.000000, -61.000000)">
                      <g id="Group" transform="translate(17.000000, 15.000000)">
                        <g id="icon" transform="translate(52.000000, 46.000000)">
                          <path id="Combined-Shape" d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"></path>
                          <path id="Combined-Shape" d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5378966 4.74673291,13.1939746 4.7846258,12.8556254 L8.55057141,12.8560055 C8.48653249,13.1896162 8.45300462,13.5340745 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.529522,8.45300462 13.180715,8.48740462 12.8430777,8.55306931 L12.8426531,4.78608796 C13.1851829,4.7472336 13.5334422,4.72727273 13.8863636,4.72727273 Z" fill="#4880EA"></path>
                          <path id="Combined-Shape" d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z" fill="url(#linearGradient-1)"></path>
                          <rect id="Rectangle" x="0" y="0" width="7.68181818" height="7.68181818"></rect>
                          <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0" width="7.68181818" height="7.68181818"></rect>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <h2 class="brand-text mb-0" style="margin-top: 0px;">GTS</h2></a></li>
          <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
          </li>
          <li class="nav-item <?php if (request()->path() == 'admin/home') {
                                    echo 'active';
                                } ?>"><a href="{{url('admin/home')}}"><i class="ficon bx 
              bxs-dashboard" data-icon="envelope-pull"></i><span class="menu-title text-truncate" data-i18n="Email">Dashboard</span></a>
          </li>

          <li class=" nav-item"><a href="#"><i class="bx bx-category" data-icon="desktop"></i><span class="menu-title" data-i18n="Masters">Masters</span></a>
            <ul class="menu-content">
              <li class="<?php if (request()->path() == 'admin/country') {
                                    echo 'active';
                                } ?>"><a href="{{url('admin/country')}}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Country">Country Master</span></a>
              </li>
              <li class="<?php if (request()->path() == 'admin/specialization') {
                                    echo 'active';
                                } ?>"><a href="{{url('admin/specialization')}}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Specialization">Specialization Master</span></a>
              </li>
             
          
            </ul>
          </li>

          <li class="nav-item <?php if (request()->path() == 'admin/institute'|| request()->path() == 'admin/institute/add' ) {
                                    echo 'active';
                                } ?>"><a href="{{url('admin/institute')}}"><i class="ficon bx 
              bxs-dashboard" data-icon="envelope-pull"></i><span class="menu-title text-truncate" data-i18n="Email">List Institute</span></a>
          </li>

          <li class="nav-item <?php if (request()->path() == 'admin/courses' || request()->path() == 'admin/course/add') {
                                    echo 'active';
                                } ?>"><a href="{{url('admin/courses')}}"><i class="ficon bx 
              bxs-dashboard" data-icon="envelope-pull"></i><span class="menu-title text-truncate" data-i18n="Email">List Courses</span></a>
          </li>

          <li class="nav-item <?php if (request()->path() == 'admin/listcoaching' || request()->path() == 'admin/listcoaching/add') {
                                    echo 'active';
                                } ?>"><a href="{{url('admin/listcoaching')}}"><i class="ficon bx 
              bxs-dashboard" data-icon="envelope-pull"></i><span class="menu-title text-truncate" data-i18n="Email">List Coaching</span></a>
          </li>

           <li class=" nav-item"><a href="#"><i class="bx bx-category" data-icon="desktop"></i><span class="menu-title" data-i18n="Coaching">Coaching </span></a>
            <ul class="menu-content">
              <li class="<?php if (request()->path() == 'admin/ccategory') {
                                    echo 'active';
                                } ?>"><a href="{{url('admin/ccategory')}}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Country">Course Category</span></a>
              </li>
              <li class="<?php if (request()->path() == 'admin/chighlight') {
                                    echo 'active';
                                } ?>"><a href="{{url('admin/chighlight')}}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Specialization">Course Highlight</span></a>
              </li>
              <li class="<?php if (request()->path() == 'admin/course_outline') {
                                    echo 'active';
                                } ?>"><a href="{{url('admin/course_outline')}}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Specialization">Course Outline</span></a>
              </li>
              <li class="<?php if (request()->path() == 'admin/cstudents') {
                                    echo 'active';
                                } ?>"><a href="{{url('admin/cstudents')}}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Specialization">Join Students</span></a>
              </li>
             
          
            </ul>
          </li>

          <li class="nav-item <?php if (request()->path() == 'admin/enquiry') {
                                    echo 'active';
                                } ?>"><a href="{{url('admin/enquiry')}}"><i class="ficon bx 
              bxs-dashboard" data-icon="envelope-pull"></i><span class="menu-title text-truncate" data-i18n="Email">Enquiry</span></a>
          </li>
         

         
          
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
 $(document).ready(function(){

 $(document).on("click", ".reset-btn",function() {


let myForm = document.getElementById('reset_form');
var formData = new FormData(myForm);
formData.append('_token', '{{ csrf_token() }}');


$(this).attr('disabled', true);

$.ajax({
        type: "post",
        data: formData,
        url: "{{route('pass.reset')}}",
        cache:false,
        contentType: false,
        processData: false,
        success: function(result) {
            $(".reset-btn").attr('disabled', false);
            if (result.error == true) {
                Toast.fire({icon: 'error',title: result.message });
                 $('#change_password').modal('hide');
            }else{
                Toast.fire({icon: 'success',title: result.message });
                 $('#change_password').modal('hide');        
               
                document.getElementById("reset_form").reset();

                window.location.href = "{{ route('logged_out') }}";
            }
        }
    });
});
        
    });
    </script>