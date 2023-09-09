<style>
  
   .owl-carousel .owl-item img {
      display: block;
      width: auto;
   }
   li{
      list-style: disc;
   }
   ul{
      padding-left: 20px;
   }
   .swal2-container 
   {
      z-index: 999999999;
   }
   
</style>
@include('user.userlayout.header')
  <title>Course Finder</title>
    <body>
        <div id="__next">
            <div class="page-wraper">
                <div class="page-content bg-white">
                    <div class="dlab-bnr-inr style-1 bg-primary" style="background-image: url(public/user-assets/images/banner/bnr2.png), var(--gradient-sec); background-size: cover, 200%;">
                        <div class="container">
                            <div class="dlab-bnr-inr-entry">
                                <h1>Course Finder</h1>
                                <nav aria-label="breadcrumb" class="breadcrumb-row style-1">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('/home')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Course Finder</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                
                    <section class="content-inner">
                        <div class="container">
                            <div class="section-head style-3 text-center mb-4">
                                <h2 class="title">How It Works</h2>
                                <div class="dlab-separator style-2 bg-primary"></div>
                            </div>
                            <div class="row" style="justify-content: center;">
                               <div class="col-lg-4 col-md-6 wow fadeInUp">
                                    <div class="icon-bx-wraper binashadow style-5 box-hover text-center m-b30">
                                        <div class="icon-bx">

                                            <img src="{{ asset('public/user-assets/images/studyabroad/Free-Consultation-vector.png') }}" alt=""/>
                                            <!-- <span class="icon-cell"><i class="flaticon-office"></i></span> -->
                                        </div>
                                        <div class="icon-content">
                                            <h6 class="sub-title text-primary m-b10">Step 1</h6>
                                            <h4 class="dlab-title m-b15">Free Consultation </h4>
                                           {{--  <p class="m-b20">Complete a short survey and get matched to programs and schools.</p> --}}
                                            <!-- <a class="btn btn-outline-primary" href="services-3"><i class="fa fa-angle-right"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                                  <div class="col-lg-4 col-md-6 wow fadeInUp">
                                    <div class="icon-bx-wraper binashadow style-5 box-hover text-center m-b30">
                                    <div class="icon-bx">
                                           
                                            <img src="{{ asset('public/user-assets/images/studyabroad/howwork1.png') }}" alt=""/>
                                            <!-- <span class="icon-cell"><i class="flaticon-office"></i></span> -->
                                        </div>
                                        <div class="icon-content">
                                            <h6 class="sub-title text-primary m-b10">Step 2</h6>
                                            <h4 class="dlab-title m-b15">Start your Application </h4>
                                            {{-- <p class="m-b20">The schools review your application and an acceptance letter is issued.</p> --}}
                                            <!-- <a class="btn btn-outline-primary" href="services-3"><i class="fa fa-angle-right"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                                
                            

                                 <div class="col-lg-4 col-md-6 wow fadeInUp">
                                    <div class="icon-bx-wraper binashadow style-5 box-hover text-center m-b30">
                                    <div class="icon-bx">
                                            <img src="{{ asset('public/user-assets/images/studyabroad/Preparation.png') }}" alt=""/>
                                            <!-- <span class="icon-cell"><i class="flaticon-office"></i></span> -->
                                        </div>
                                        <div class="icon-content">
                                            <h6 class="sub-title text-primary m-b10">Step 3</h6>
                                            <h4 class="dlab-title m-b15">IELTS/PTE  Preparation</h4>
                                            {{-- <p class="m-b20">The schools review your application and an acceptance letter is issued.</p> --}}
                                            <!-- <a class="btn btn-outline-primary" href="services-3"><i class="fa fa-angle-right"></i></a> -->
                                        </div>
                                    </div>
                                 </div>

                                <div class="col-lg-4 col-md-6 wow fadeInUp">
                                    <div class="icon-bx-wraper binashadow style-5 box-hover text-center m-b30">
                                    <div class="icon-bx">
                                            {{-- <img src="{{ asset('public/user-assets/images/studyabroad/howwork5.png') }}" alt=""/> --}}
                                             <img src="{{ asset('public/user-assets/images/studyabroad/howwork3.png') }}" alt=""/>
                                            <!-- <span class="icon-cell"><i class="flaticon-office"></i></span> -->
                                        </div>
                                        <div class="icon-content">
                                            <h6 class="sub-title text-primary m-b10">Step 4</h6>
                                            <h4 class="dlab-title m-b15">Get Accepted </h4>
                                            {{-- <p class="m-b20">The schools review your application and an acceptance letter is issued.</p> --}}
                                            <!-- <a class="btn btn-outline-primary" href="services-3"><i class="fa fa-angle-right"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                                
                               <div class="col-lg-4 col-md-4 wow fadeInUp">
                                    <div class="icon-bx-wraper binashadow style-5 box-hover text-center m-b30">
                                    <div class="icon-bx">
                                            <img src="{{ asset('public/user-assets/images/studyabroad/howwork4.png') }}" alt=""/>
                                            <!-- <span class="icon-cell"><i class="flaticon-office"></i></span> -->
                                        </div>
                                        <div class="icon-content">
                                            <h6 class="sub-title text-primary m-b10">Step 5</h6>
                                            <h4 class="dlab-title m-b15">Secure your Visa </h4>
                                            {{-- <p class="m-b20">The schools review your application and an acceptance letter is issued.</p> --}}
                                            <!-- <a class="btn btn-outline-primary" href="services-3"><i class="fa fa-angle-right"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 wow fadeInUp">
                                    <div class="icon-bx-wraper binashadow style-5 box-hover text-center m-b30">
                                    <div class="icon-bx">
                                            <img src="{{ asset('public/user-assets/images/studyabroad/howwork5.png') }}" alt=""/>
                                            <!-- <span class="icon-cell"><i class="flaticon-office"></i></span> -->
                                        </div>
                                        <div class="icon-content">
                                            <h6 class="sub-title text-primary m-b10">Step 6</h6>
                                            <h4 class="dlab-title m-b15">Start Your Journey</h4>
                                            {{-- <p class="m-b20">The schools review your application and an acceptance letter is issued.</p> --}}
                                            <!-- <a class="btn btn-outline-primary" href="services-3"><i class="fa fa-angle-right"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </section>

                     <section class="content-inner">
                        <div class="container">
                            <div class="section-head style-3 text-center mb-4">
                                <h2 class="title">Top Universities</h2>
                                <div class="dlab-separator style-2 bg-primary"></div>
                            </div>
                            <div class="row">
                                <div class="blog-carousel2 owl-carousel owl-none">

                                    @foreach($university as $universities)

                                     <div class="item wow fadeInUp" >
                                    <div class="icon-bx-wraper style-5 box-hover m-b30 m-t30" style="height:350px;">
                                        <div class="m-b15">
                                        <!-- <div class="icon-bx"> --> 
                                            <img src="{{ asset('public/public/upload/ins_list/'.$universities->ilogo) }}" style="height: 60%;" alt="">
                                            <!-- <span class="icon-cell"><i class="flaticon-office"></i></span> -->
                                        <!-- </div> -->
                                        </div>
                                        <div class="icon-content">
                                            <!-- <h6 class="sub-title text-primary m-b10">Step 1</h6> -->
                                            <h4 class="dlab-title m-b15">{{ $universities->ins_name}}</h4>
                                            <p class="m-b20"> <ul>
                                                     
                                                       @foreach($cours as $courses)
                                                      @if($universities->id == $courses->intakes)
                                                      <li>{{ $courses->course}}</li>
                                                      @endif
                                                      @endforeach  
                                                    
                                                   </ul>
                                               </p>
                                      
                                        </div>
                                    </div>
                                </div>

                             @endforeach

                        </div>
                         </div>
                         <a href="/search_univercity" class="input-group-addon"><button name="submit" value="Submit" type="submit" class="float-right btn btn-corner gradient shadow btn-primary">View More</button>
                                 </a>
                            </div>
                    </section>

                    <section class="content-inner">
                        <div class="container">
                            <div class="section-head style-3 text-center mb-4">
                                <h2 class="title">Featured Study Destinations</h2>
                                <div class="dlab-separator style-2 bg-primary"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 wow fadeInUp" >
                                    <div class="icon-bx-wraper style-5 box-hover m-b30" style="height:380px;">
                                        <div class="m-b15">
                                        <!-- <div class="icon-bx"> --> 
                                            <img src="{{ asset('public/user-assets/images/studyabroad/studydesti1.png') }}" alt=""/>
                                            <!-- <span class="icon-cell"><i class="flaticon-office"></i></span> -->
                                        <!-- </div> -->
                                        </div>
                                        <div class="icon-content">
                                            <!-- <h6 class="sub-title text-primary m-b10">Step 1</h6> -->
                                            <h4 class="dlab-title m-b15">Explore Canada</h4>
                                            <p class="m-b20">Quality education at low cost. Work during study, post-study work permits, ad pro-immigration policies. Diverse, safe, and inclusive.</p>
                                            <!-- <a class="btn btn-outline-primary" href="services-3"><i class="fa fa-angle-right"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow fadeInUp">
                                    <div class="icon-bx-wraper style-5 box-hover m-b30" style="height:380px;">
                                        <div class="m-b15">
                                        <!-- <div class="icon-bx"> -->
                                            <img src="{{ asset('public/user-assets/images/studyabroad/studydesti2.png') }}" alt=""/>
                                            <!-- <span class="icon-cell"><i class="flaticon-office"></i></span> -->
                                        <!-- </div> -->
                                        </div>
                                        <div class="icon-content">
                                            <!-- <h6 class="sub-title text-primary m-b10">Step 1</h6> -->
                                            <h4 class="dlab-title m-b15">Explore the United Kingdom</h4>
                                            <p class="m-b20">World-class universities in the heart of Europe. Shorter study duratio to fast-track your career and reduce costs. Options to work during study and after graduation.</p>
                                          <!--   <a class="btn btn-outline-primary" href="services-3"><i class="fa fa-angle-right"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow fadeInUp">
                                    <div class="icon-bx-wraper style-5 box-hover m-b30" style="height:380px;">
                                        <div class="m-b15">
                                        <!-- <div class="icon-bx"> -->
                                            <img src="{{ asset('public/user-assets/images/studyabroad/studydesti3.png') }}" alt=""/>
                                            <!-- <span class="icon-cell"><i class="flaticon-office"></i></span> -->
                                        <!-- </div> -->
                                        </div>
                                        <div class="icon-content">
                                            <!-- <h6 class="sub-title text-primary m-b10">Step 1</h6> -->
                                            <h4 class="dlab-title m-b15">Explore the United Kingdom</h4>
                                            <p class="m-b20">World-class universities in the heart of Europe. Shorter study duratio to fast-track your career and reduce costs. Options to work during study and after graduation.</p>
                                          <!--   <a class="btn btn-outline-primary" href="services-3"><i class="fa fa-angle-right"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow fadeInUp">
                                    <div class="icon-bx-wraper style-5 box-hover m-b30" style="height:380px;">
                                        <div class="m-b15">
                                        <!-- <div class="icon-bx"> -->
                                            <img src="{{ asset('public/user-assets/images/studyabroad/studydesti4.png') }}" alt=""/>
                                            <!-- <span class="icon-cell"><i class="flaticon-office"></i></span> -->
                                        <!-- </div> -->
                                        </div>
                                        <div class="icon-content">
                                            <!-- <h6 class="sub-title text-primary m-b10">Step 1</h6> -->
                                            <h4 class="dlab-title m-b15">Explore the United Kingdom</h4>
                                            <p class="m-b20">World-class universities in the heart of Europe. Shorter study duratio to fast-track your career and reduce costs. Options to work during study and after graduation.</p>
                                           <!--  <a class="btn btn-outline-primary" href="services-3"><i class="fa fa-angle-right"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </section>

                    
                   
                

                    <section class="content-inner-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s" style="background-image:url(images/background/bg12.png), var(--gradient-sec);background-size:cover, 200%;background-repeat:no-repeat">
                  <div class="container">
                     <div class="row align-items-center subscribe-wraper-1">
                        <div class="col-lg-7 col-md-6">
                           <h2 class="text-white title m-b30">Schedule a Free Counselling Session with Our Study Abroad Expert</h2>
                        </div>
                        <div class="col-lg-5 col-md-6">
                           <div class="dlab-subscribe style-3 max-w500">
                              <form class="dzSubscribe" action="script/mailchamp.html" method="post">
                                 <div class="dzSubscribeMsg"></div>
                                 <div class="form-group m-b30">
                                    <div class="input-group mb-0">
                                       <!-- <input type="email" name="dzEmail" required="" class="form-control" placeholder="Email Address"/> -->
                                       <div class="input-group-addon"><button name="submit" value="Submit" type="submit" class="btn btn-corner gradient shadow btn-primary">Enquire Now</button></div>
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
                            <div class="section-head style-3 text-center mb-4">
                                <h2 class="title">Top Courses</h2>
                                <div class="dlab-separator style-2 bg-primary"></div>
                            </div>
                            <div class="row">
                                <div class="blog-carousel2 owl-carousel owl-none">

                                    @foreach($cours as $courses)

                                     <div class="item wow fadeInUp" >
                                    <div class="icon-bx-wraper style-5 box-hover m-b30 m-t30" style="height:350px;">
                                        <center>
                                         @foreach($university as $universities)
                                              @if($universities->id == $courses->intakes)
                                                 <div class="m-b15">
                                               
                                                    <img src="{{ asset('public/public/upload/ins_list/'.$universities->ilogo) }}" style="height: 60%;" alt="">
                                               
                                                </div>
                                        <div class="icon-content ">
                                            <h4 class="dlab-title">{{ $universities->ins_name}}</h4>
                                                <h5 class="dlab-title m-b20 r">at</h5>
                                            <h4 class="dlab-title m-b15">{{ $courses->course}}</h4>
                                            
                                                    
                                         
                                        </div>
                                         @endif
                                       @endforeach 
                                        </center>
                                    </div>
                                </div>

                             @endforeach

                        </div>
                         </div>
                                  <a href="/course_search" class="input-group-addon"><button name="submit" value="Submit" type="submit" class="float-right btn btn-corner gradient shadow btn-primary">View More</button>
                                 </a>
                            </div>
                    </section>

                    <section class="content-inner">
                  <div class="container">
                     <div class="section-head style-3 text-center">
                        <h2 class="title">Our Blog & News</h2>
                        <div class="dlab-separator style-2 bg-primary"></div>
                     </div>
                     <div class="row">
                        <div class="col-xl-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                           <div class="dlab-blog blog-half m-b30"> 
                              <div class="dlab-media"><img src="{{ asset('public/user-assets/images/blog/default/thum1.jpg') }}" alt=""/></div>
                              <div class="dlab-info">
                                 <h5 class="dlab-title"><a href="blog-details-3.html">Vestibulum massa arcu, consectetu  pellentesque scelerisque.</a></h5>
                                 <p>Sed quis sagittis velit. Aliquam velit eros, bibendum ut massa et, consequat laoreet erat nam ac imperdiet.</p>
                                 <div class="dlab-meta">
                                    <ul>
                                       <li class="post-date"><i class="flaticon-clock m-r10"></i>7 March, 2020</li>
                                   <!-- <li class="post-comment"><a href="#"><i class="flaticon-speech-bubble"></i><span>15</span></a></li> -->
                                      <!--  <li class="post-share">
                                          <i class="flaticon-share"></i>
                                          <ul>
                                             <li><a class="fa fa-facebook" href="#"></a></li>
                                             <li><a class="fa fa-twitter" href="#"></a></li>
                                             <li><a class="fa fa-linkedin" href="#"></a></li>
                                          </ul>
                                       </li> -->
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                               <div class="dlab-blog blog-half m-b30">
                                  <div class="dlab-media"><img src="{{ asset('public/user-assets/images/blog/default/thum2.jpg') }}" alt=""/></div>
                                  <div class="dlab-info">
                                     <h5 class="dlab-title"><a href="blog-details-3.html">Quisque egestas iaculis felis eget placerat ut pulvinar mi.</a></h5>
                                     <p>Sed quis sagittis velit. Aliquam velit eros, bibendum ut massa et, consequat laoreet erat nam ac imperdiet.</p>
                                     <div class="dlab-meta">
                                        <ul>
                                           <li class="post-date"><i class="flaticon-clock m-r10"></i>7 March, 2020</li>
                                         <!--    <li class="post-comment"><a href="#"><i class="flaticon-speech-bubble"></i><span>15</span></a></li> -->
                                    <!--    <li class="post-share">
                                              <i class="flaticon-share"></i>
                                              <ul>
                                                 <li><a class="fa fa-facebook" href="#"></a></li>
                                                 <li><a class="fa fa-twitter" href="#"></a></li>
                                                 <li><a class="fa fa-linkedin" href="#"></a></li>
                                              </ul>
                                           </li> -->
                                        </ul>
                                     </div>
                                    </div>
                                  </div> 
                            </div> 
                             <div class="col-xl-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                               <div class="dlab-blog blog-half m-b30">
                                  <div class="dlab-media"><img src="{{ asset('public/user-assets/images/blog/default/thum2.jpg') }}" alt=""/></div>
                                  <div class="dlab-info">
                                     <h5 class="dlab-title"><a href="blog-details-3.html">Quisque egestas iaculis felis eget placerat ut pulvinar mi.</a></h5>
                                     <p>Sed quis sagittis velit. Aliquam velit eros, bibendum ut massa et, consequat laoreet erat nam ac imperdiet.</p>
                                     <div class="dlab-meta">
                                        <ul>
                                           <li class="post-date"><i class="flaticon-clock m-r10"></i>7 March, 2020</li>
                                          <!--   <li class="post-comment"><a href="#"><i class="flaticon-speech-bubble"></i><span>15</span></a></li> -->
                                     <!--   <li class="post-share">
                                              <i class="flaticon-share"></i>
                                              <ul>
                                                 <li><a class="fa fa-facebook" href="#"></a></li>
                                                 <li><a class="fa fa-twitter" href="#"></a></li>
                                                 <li><a class="fa fa-linkedin" href="#"></a></li>
                                              </ul>
                                           </li> -->
                                        </ul>
                                     </div>
                                    </div>
                                  </div> 
                            </div>
                             <div class="col-xl-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                               <div class="dlab-blog blog-half m-b30">
                                  <div class="dlab-media"><img src="{{ asset('public/user-assets/images/blog/default/thum2.jpg') }}" alt=""/></div>
                                  <div class="dlab-info">
                                     <h5 class="dlab-title"><a href="blog-details-3.html">Quisque egestas iaculis felis eget placerat ut pulvinar mi.</a></h5>
                                     <p>Sed quis sagittis velit. Aliquam velit eros, bibendum ut massa et, consequat laoreet erat nam ac imperdiet.</p>
                                     <div class="dlab-meta">
                                        <ul>
                                           <li class="post-date"><i class="flaticon-clock m-r10"></i>7 March, 2020</li>
                                            <!-- <li class="post-comment"><a href="#"><i class="flaticon-speech-bubble"></i><span>15</span></a></li> -->
                                      <!--  <li class="post-share">
                                              <i class="flaticon-share"></i> -->
                                           <!--    <ul>
                                                 <li><a class="fa fa-facebook" href="#"></a></li>
                                                 <li><a class="fa fa-twitter" href="#"></a></li>
                                                 <li><a class="fa fa-linkedin" href="#"></a></li>
                                              </ul> -->
                                          <!--  </li> -->
                                        </ul>
                                     </div>
                                    </div>
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