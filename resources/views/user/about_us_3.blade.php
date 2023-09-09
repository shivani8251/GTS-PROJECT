@include('user.userlayout.header')
<title>About Us || GTS Overseas</title>
<style>
  
   .swal2-container 
   {
      z-index: 999999999;
   }
</style>
    <body>
        <div id="__next">
            <div class="page-wraper">
                <div class="page-content bg-white">
                    <div class="dlab-bnr-inr style-1 bg-primary" style="background-image: url(public/user-assets/images/banner/bnr2.png), var(--gradient-sec); background-size: cover, 200%; ">
                        <div class="container">
                            <div class="dlab-bnr-inr-entry">
                                <h1>About Us</h1>
                                <nav aria-label="breadcrumb" class="breadcrumb-row style-1">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('/home')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section class="content-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 m-b30">
                                    <div class="dz-media"><img src="{{ asset('public/user-assets/images/about/img6.png') }}" class="move-2" alt="" /></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="section-head style-3 mb-4">
                                        <h2 class="title">Why Gtsoverseas</h2>
                                        <div class="dlab-separator style-2 bg-primary"></div>
                                    </div>
                                    <p>
                                    GTS Overseas is one of the leading and trusted names in study abroad and immigration services.

                                    GTS Overseas is having a bunch of hard working professionals who have expertise in the education sector, immigration and tailor made holiday packages.

                                    GTS Overseas present you the right prospect of getting admission in the desired Institute and courses at the very first stage.GTS Overseas ensures higher chances in foreign Institutions by giving priority to a well prepared and error-free application.We are a one-stop solution for all your study, immigration and travel needs.

                                    We maintain transparency with all our students and clients as our motto is You first!

                                    Quick and smart solutions to any Visa or documentation related issue.

                                    We provide free counseling and admission services.


                                    </p>
                                    <!-- <div class="row">
                                        <div class="col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                            <div class="dlab-content-bx style-2 text-center">
                                                <div class="icon-content">
                                                    <h2 class="counter m-b0"><span>count</span></h2>
                                                    <span class="title">Satisfied Clients</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                                            <div class="dlab-content-bx style-2 text-center">
                                                <div class="icon-content">
                                                    <h2 class="counter m-b0"><span>count</span></h2>
                                                    <span class="title">Project Lunched</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                                            <div class="dlab-content-bx style-2 text-center">
                                                <div class="icon-content">
                                                    <h2 class="counter m-b0"><span>count</span></h2>
                                                    <span class="title">Years Completed</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- <section class="video-wraper-1">
                        <div class="content-inner bg-gray">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                                        <div class="section-head style-3 mb-4">
                                            <h2 class="title">Watch Us How Our Team Work Together</h2>
                                            <div class="dlab-separator style-2 bg-primary"></div>
                                        </div>
                                        <p>
                                            Praesent fermentum nisl at ipsum facilisis viverra. Ut elementum accumsan finibus. Cras placerat lacinia mi, ac dictum ante. Donec libero enim, tincidunt sit amet venenatis id, maximus eu quam.
                                        </p>
                                        <ul class="list-check style-1 primary m-b30">
                                            <li>Suspendisse ullamcorper mollis orci in facilisis.</li>
                                            <li>Etiam orci magna, accumsan varius enim volutpat.</li>
                                            <li>Donec fringilla velit risus, in imperdiet turpis euismod quis.</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                                        <div class="video-bx style-2">
                                            <img src="images/video/pic2.jpg" alt="" />
                                            <div class="video-btn"></div>
                                            <a href="#" class="popup-youtube"><i class="flaticon-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->
                    <section class="content-inner">
                        <div class="container">
                            <div class="section-head style-3 text-center mb-4">
                                <h2 class="title">Our Team</h2>
                                <div class="dlab-separator style-2 bg-primary"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s" data-toggle="modal" data-target="#MahimaModal">
                                    <div class="icon-bx-wraper style-5 box-hover text-center m-b30">
                                        <!-- <div class="icon-bx">
                                            <span class="icon-cell"><i class="flaticon-office"></i></span>
                                        </div> -->
                                        <center><div class="testimonial-pic"><img src="{{ asset('public/user-assets/images/team/mahima.png') }}" alt=""/></div></center>

                                        <div class="icon-content">
                                        <a><h4 class="dlab-title m-b15" >Mahima Kalra</h4></a>
                                            <h5 class="dlab-title m-b15">FOUNDER & DIRECTOR</h4>

                                                 

                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s" data-toggle="modal" data-target="#NaziaModal">
                                    <div class="icon-bx-wraper style-5 box-hover text-center m-b30">
                                        <!-- <div class="icon-bx">
                                            <span class="icon-cell"><i class="flaticon-office"></i></span>
                                        </div> -->
                                        <center><div class="testimonial-pic"><img src="{{ asset('public/user-assets/images/team/Nazia.png') }}" alt=""/></div></center>

                                        <div class="icon-content">
                                        <a><h4 class="dlab-title m-b15" >Nazia Praveen</h4></a>
                                            <h5 class="dlab-title m-b15">FOUNDER & DIRECTOR</h4>

                                               
                                         
                                        </div>
                                    </div>
                                </div>
                                   <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s" data-toggle="modal" data-target="#HaseebModal">
                                    <div class="icon-bx-wraper style-5 box-hover text-center m-b30">
                                        <!-- <div class="icon-bx">
                                            <span class="icon-cell"><i class="flaticon-office"></i></span>
                                        </div> -->
                                        <center><div class="testimonial-pic"><img src="{{ asset('public/user-assets/images/team/Haseeb.png') }}" alt=""/></div></center>

                                        <div class="icon-content">
                                        <a><h4 class="dlab-title m-b15" >Md. Haseeb</h4></a>
                                            <h5 class="dlab-title m-b15">MANAGER ACADEMICS</h4>

                                                 

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <section
                        class="content-inner-3 wow fadeIn"
                        data-wow-duration="2s"
                        data-wow-delay="0.2s" 
                        style="background-image: url(public/user-assets/images/background/bg12.png), var(--gradient-sec); background-size: cover, 200%; background-repeat: no-repeat;">
                        <div class="container">
                            <div class="row align-items-center subscribe-wraper-1">
                                <div class="col-lg-7 col-md-6"><h2 class="text-white title m-b30">Subscribe To Our Newsletter For Latest Update Of New Products</h2></div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="dlab-subscribe style-3 max-w500">
                                        <form class="dzSubscribe" action="https://samartheme3.vercel.app/script/mailchamp.php" method="post">
                                            <div class="dzSubscribeMsg"></div>
                                            <div class="form-group m-b30">
                                                <div class="input-group mb-0">
                                                    <input type="email" name="dzEmail" required="" class="form-control" placeholder="Email Address" />
                                                    <div class="input-group-addon"><button name="submit" value="Submit" type="submit" class="btn btn-corner gradient shadow btn-primary">Subscribe Now</button></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
            
                    <section class="content-inner">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <div class="dlab-media"><img src="{{ asset('public/user-assets/images/about/img8.png') }}" class="move-4" alt="" /></div>
                                </div>
                                @include('user.userlayout.form')
                            </div>
                        </div>
                    </section>
                </div>
  @include('user.userlayout.footer')

  <div class="modal fade univercitymodal" id="MahimaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 999999;">


                                                          <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">FOUNDER & DIRECTOR</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body">
                                                                <h1>Mahima Kalra</h1>
                                                              <p class="m-b20">Mahima Kalra is the Founder and Director of GTS OVERSEAS, an overseas career consultancy firm located in Delhi, Raipur and Allahabad. Her dream was to become a thriving entrepreneur and to provide the best counselling and various services to students seeking overseas career to help them achieve their goals and guide them on the correct career path. She has done her graduation from University of Delhi and further done MBA from Symbiosis.
                                                                Here’s her little secret ” Remember why you started”. 
                                                                Mahima Kalra is very passionate, strong and opinionated about her goals. She plays a significant role in managing tie ups with the universities and ensuring customer satisfaction. She also runs and directs the departments and teams for study abroad, coaching, visa, visit and migrate services.</p>
                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width: 150px;">Close</button>
                                                   
                                                              </div>
                                                            </div>
                                                          </div>


      </div>

        <div class="modal fade univercitymodal" id="NaziaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 999999;">


                                                          <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">FOUNDER & DIRECTOR</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body">
                                                                <h1>Nazia Praveen</h1>
                                                              <p class="m-b20">Nazia Praveen is passionate about serving with pride. She is the Founder and Directors of GTS OVERSEAS.

                                                                Having completed her degree from University of Delhi she has been associated with students and passionate about career consulting with professional experience in pedagogy in St Mary school Sahibabad, she understands the students well. 

                                                                She is also a part of the student advisors committee at GTS Overseas.</p>
                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width: 150px;">Close</button>
                                                   
                                                              </div>
                                                            </div>
                                                          </div>


           </div>

           <div class="modal fade univercitymodal" id="HaseebModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 999999;">


                                                          <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">FOUNDER & DIRECTOR</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body">
                                                                <h1>Md. Haseeb</h1>
                                                              <p class="m-b20">A mentor and a counsellor in Delhi with over a decade of experience and having placed more than 10,000 students till date at various universities of the world. Md Haseeb is the one of the backbones of GTS Overseas. His ‘student centric’ approach, of placing the interest of the student above all other considerations, differentiates him as a counsellor, teacher, mentor and guide.

                                                                His special expertise lies in counselling for abroad studies and guiding students through the complex process of applying for admission to international universities for “any course in any country”.

                                                                He has been awarded ‘Best trainers’ and ‘Trainer of the Year’ award by KIET and NR and continues to be a regular workshop presenter at various career planning and career counselling (CPCC) centers in various schools in Delhi NCR.

                                                                He is a leading advisor for various schools including Allahabad Public school, AIMS pune and RIIM Pune.

                                                                Also, Md. Haseeb is a known name for language training. His courses IELTS / PTE / TOEFL / SAT / ACT are attended by thousands of students who have secured scores far higher than they expected.</p>
                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width: 150px;">Close</button>
                                                   
                                                              </div>
                                                            </div>
                                                          </div>


                                                        </div>


  <script>

      


           $(document).on("click", ".submit_button",function() {

         let myForm = document.getElementById('contact');
         var formData = new FormData(myForm);
         formData.append('_token', '{{ csrf_token() }}');


      $(this).attr('disabled', true);

      $.ajax({
              type: "post",
              data: formData,
              url: "{{route('contact.form')}}",
              cache:false,
              contentType: false,
              processData: false,
              success: function(result) {
                  $(".submit_button").attr('disabled', false);
                  if (result.error == true) {
                       Toast.fire({icon: 'error',title: result.message });
                    
                  }else{
                       document.getElementById("contact").reset();
                      $(".submit_button").attr('enable', false);
                       Toast.fire({icon: 'success',title:  result.message });
                      
                    
                  }
              }
          });
      });


 
</script>