@include('user.userlayout.header')
<title>GTS Overseas</title>

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
   .acc-wraper{
      margin: 30px auto;
      /* width:70%; */
   }
   .accordion{
      display:flex;
      flex-wrap:nowrap;
      overflow:hidden;
      width:100%;
      height:350px;
      /* opacity: 0.7; */
   }
   .accordion > div{
      width:50%;
      flex-grow:1;
      flex-shrink:1;
      overflow:hidden;
      transition:all .5s ease;
      border:5px solid aliceblue;
      /* border-radius:50px; */
      position:relative;
      content-visibility: hidden;
      background-size: cover;
   }
   .accordion > div:hover{
      flex-shrink:0;
      content-visibility: auto;
   }
   .accordion div img{
      width:100%;
      height:100%;
      /* object-fit: cover; */
      opacity: 0.7;
   }
   .frontbg{
      background: #ffffff5c;
      width: auto;
      height: -webkit-fill-available;
      transition: all .5s ease;
      padding: 10%;
      text-align: center;
   }
   .frontbg .card-img-top{
      border-left: 10px solid red;
      border-radius: 0;
      width: 100%;
      border-top: 10px solid red;
      border-right: 10px solid red;
   }
   .frontbg .card ul li{
      list-style: none;
      display: block;
   }
   .frontbg .flediv{
      display: flex;
   }
   .frontbg .flediv .card{
      margin: 0 10px;
   }
   /* .nameonimg{
      position: absolute;
      top: 20%;
      left: 30%;
   } */
   /* .accordion :nth-child(1){
      background-image: url('https://image.freepik.com/free-photo/lake-mountains_1204-507.jpg');
      object-fit: cover;
      opacity: 0.7;
   } */
</style>
   <body>
      <div id="__next">
         <div class="page-wraper">
            <div class="page-content bg-white" id="top">
               <!-- <div class="banner-three bg-primary" style="background-image:url(images/background/bg5.png), url(images/background/bg6.png), var(--gradient-sec)"> -->
               <div class="banner-lay banner-three" style="background-image: linear-gradient(30deg,#100072 0%,#0064E100 48%);"> 
                  <div class="embed-responsive embed-responsive-16by9">
                     <video src="./public/user-assets/next/static/media/homervideorr.mp4" width="100%" height="100%" class="elementor-background-video-embed">
                  <!-- <iframe src="https://player.vimeo.com/video/692995568?h=bc5f16206f&amp;muted=1&amp;autoplay=1&amp;loop=1&amp;transparent=0&amp;background=1&amp;app_id=58479" width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" title="GTS Video - Landing Page" data-ready="true" class="elementor-background-video-embed"></iframe> -->
               </div>
                  <div class="container posi-abso">
                     <div class="banner-inner">
                        <div class="row align-items-center">
                           <div class="col-md-6">
                              <div class="banner-content text-white">
                                 <!-- <h6 class="sub-title text-yellow">We Are Product Designer From India</h6> -->
                                 <h1 class="wow fadeInUp m-b20">Giving wings to your dreams.</h1>
                                 <!-- <p class="wow fadeInUp m-b30">Morbi sed lacus nec risus finibus feugiat et fermentum nibh. Pellentesque vitae ante at elit fringilla ac at purus.</p> -->
                                 <a class="wow fadeInUp  btn btn-corner gradient btn-primary" href="about-us-3.html">Learn More</a>
                              

                              </div>
                           </div>
                           <div class="col-md-6">
                        
                           </div>
                        </div>
                     </div>
                  </div>
               </div> 
               
               <!-- Blog -->
              <section class="content-inner-2" style="background-image: url(public/user-assets/images/background/bg16.png); background-size: cover; background-position: top center; background-repeat: no-repeat;">
                  <div class="container">
                     <div class="section-head style-3 text-center mb-4">
                        <h2 class="title">Top Universities & Courses</h2>
                        <div class="dlab-separator style-2 bg-primary"></div>
                     </div>

                     <div class="acc-wraper">
                        <div class="accordion">
                           <div style="background-image: url(https://img.freepik.com/free-photo/toronto-city-skyline-ontario-canada_131985-273.jpg?w=1060)">
                              {{-- <img src="https://image.freepik.com/free-photo/lake-mountains_1204-507.jpg" alt=""> --}}
                              <div class="frontbg">
                                 <h4 class="nameonimg">Canada</h4>
                                 <div class="flediv">
                                    <div class="card" style="width:300px">
                                      <img class="card-img-top" src="http://gtsoverseas.programmics.tech/public/user-assets/images/studyabroad/studydesti2.png" alt="Card image" style="width:100%">
                                      <div class="card-body">
                                        <h4 class="card-title">John Doe</h4>
                                        <ul>
                                           <li>Course Name</li>
                                           <li>Course Name</li>
                                        </ul>
                                        {{-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                        <a href="#" class="btn btn-primary">See Profile</a> --}}
                                      </div>
                                    </div>
                                    <div class="card" style="width:300px">
                                       <img class="card-img-top" src="http://gtsoverseas.programmics.tech/public/user-assets/images/studyabroad/studydesti2.png" alt="Card image" style="width:100%">
                                       <div class="card-body">
                                         <h4 class="card-title">John Doe</h4>
                                         <ul>
                                            <li>Course Name</li>
                                            <li>Course Name</li>
                                         </ul>
                                         {{-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                         <a href="#" class="btn btn-primary">See Profile</a> --}}
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div style="background-image: url(https://img.freepik.com/free-photo/statue-liberty-new-york-city-skyline-usa_268835-777.jpg?t=st=1653975621~exp=1653976221~hmac=929455d162528e86ff66c3cb71e62bb2b59d785ce77f00591446e7c3e49aa4a4&w=996)">
                              {{-- <img src="https://image.freepik.com/free-photo/sunlight-forest_1004-9.jpg" alt=""> --}}
                              {{-- <h4 class="nameonimg">USA</h4> --}}
                              <div class="frontbg">
                                 <h4 class="nameonimg">USA</h4>
                                 <div class="flediv">
                                    <div class="card" style="width:300px">
                                    <img class="card-img-top" src="http://gtsoverseas.programmics.tech/public/user-assets/images/studyabroad/studydesti2.png" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                       <h4 class="card-title">John Doe</h4>
                                       <ul>
                                          <li>Course Name</li>
                                          <li>Course Name</li>
                                       </ul>
                                       {{-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                       <a href="#" class="btn btn-primary">See Profile</a> --}}
                                    </div>
                                    </div>
                                    <div class="card" style="width:300px">
                                       <img class="card-img-top" src="http://gtsoverseas.programmics.tech/public/user-assets/images/studyabroad/studydesti2.png" alt="Card image" style="width:100%">
                                       <div class="card-body">
                                       <h4 class="card-title">John Doe</h4>
                                       <ul>
                                          <li>Course Name</li>
                                          <li>Course Name</li>
                                       </ul>
                                       {{-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                       <a href="#" class="btn btn-primary">See Profile</a> --}}
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div style="background-image: url(https://img.freepik.com/free-photo/panoramic-view-big-ben-london-sunset-uk_268835-1401.jpg?t=st=1653975127~exp=1653975727~hmac=8576804258b9e46fe67c6c3cd483de539a1dec09173ffafb33efae37e7d5d5d7&w=1380)">
                              {{-- <img src="https://image.freepik.com/free-photo/beautiful-green-park_1417-1443.jpg" alt=""> --}}
                              {{-- <h4 class="nameonimg">UK</h4> --}}
                              <div class="frontbg">
                                 <h4 class="nameonimg">UK</h4>
                                 <div class="flediv">
                                    <div class="card" style="width:300px">
                                    <img class="card-img-top" src="http://gtsoverseas.programmics.tech/public/user-assets/images/studyabroad/studydesti2.png" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                       <h4 class="card-title">John Doe</h4>
                                       <ul>
                                          <li>Course Name</li>
                                          <li>Course Name</li>
                                       </ul>
                                       {{-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                       <a href="#" class="btn btn-primary">See Profile</a> --}}
                                    </div>
                                    </div>
                                    <div class="card" style="width:300px">
                                       <img class="card-img-top" src="http://gtsoverseas.programmics.tech/public/user-assets/images/studyabroad/studydesti2.png" alt="Card image" style="width:100%">
                                       <div class="card-body">
                                       <h4 class="card-title">John Doe</h4>
                                       <ul>
                                          <li>Course Name</li>
                                          <li>Course Name</li>
                                       </ul>
                                       {{-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                       <a href="#" class="btn btn-primary">See Profile</a> --}}
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div style="background-image: url(https://img.freepik.com/free-photo/beautiful-wide-shot-eiffel-tower-paris-surrounded-by-water-with-ships-colorful-sky_181624-5118.jpg?size=626&ext=jpg)">
                              {{-- <img src="https://image.freepik.com/free-photo/waterfall-that-is-layer-thailand_1150-15650.jpg" alt=""> --}}
                              {{-- <h4 class="nameonimg">Europe</h4> --}}
                              <div class="frontbg">
                                 <h4 class="nameonimg">Europe</h4>
                                 <div class="flediv">
                                    <div class="card" style="width:300px">
                                    <img class="card-img-top" src="http://gtsoverseas.programmics.tech/public/user-assets/images/studyabroad/studydesti2.png" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                       <h4 class="card-title">John Doe</h4>
                                       <ul>
                                          <li>Course Name</li>
                                          <li>Course Name</li>
                                       </ul>
                                       {{-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                       <a href="#" class="btn btn-primary">See Profile</a> --}}
                                    </div>
                                    </div>
                                    <div class="card" style="width:300px">
                                       <img class="card-img-top" src="http://gtsoverseas.programmics.tech/public/user-assets/images/studyabroad/studydesti2.png" alt="Card image" style="width:100%">
                                       <div class="card-body">
                                       <h4 class="card-title">John Doe</h4>
                                       <ul>
                                          <li>Course Name</li>
                                          <li>Course Name</li>
                                       </ul>
                                       {{-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                       <a href="#" class="btn btn-primary">See Profile</a> --}}
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div style="background-image: url(https://img.freepik.com/free-photo/sydney-opera-house-near-beautiful-sea-clear-blue-sky_181624-8472.jpg?t=st=1653978709~exp=1653979309~hmac=6f17e712c0f24a7008d234bb245962f14d3b6f7a15659518b853ed0ba63084a3&w=996)">
                              {{-- <img src="https://image.freepik.com/free-photo/sunrise-bali-jungle_1385-1644.jpg" alt=""> --}}
                              {{-- <h4 class="nameonimg">Australia</h4> --}}
                              <div class="frontbg">
                                 <h4 class="nameonimg">Australia</h4>
                                 <div class="flediv">
                                    <div class="card" style="width:300px">
                                    <img class="card-img-top" src="http://gtsoverseas.programmics.tech/public/user-assets/images/studyabroad/studydesti2.png" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                       <h4 class="card-title">John Doe</h4>
                                       <ul>
                                          <li>Course Name</li>
                                          <li>Course Name</li>
                                       </ul>
                                       {{-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                       <a href="#" class="btn btn-primary">See Profile</a> --}}
                                    </div>
                                    </div>
                                    <div class="card" style="width:300px">
                                       <img class="card-img-top" src="http://gtsoverseas.programmics.tech/public/user-assets/images/studyabroad/studydesti2.png" alt="Card image" style="width:100%">
                                       <div class="card-body">
                                       <h4 class="card-title">John Doe</h4>
                                       <ul>
                                          <li>Course Name</li>
                                          <li>Course Name</li>
                                       </ul>
                                       {{-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                       <a href="#" class="btn btn-primary">See Profile</a> --}}
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div style="background-image: url(https://img.freepik.com/free-photo/cityscape-frankfurt-covered-modern-buildings-during-sunset-germany_181624-12287.jpg?t=st=1653978766~exp=1653979366~hmac=fc853b46f464e1490863f7cda036a75ac8a52f31a76ec438dbfe6f7b4d9e9f47&w=996)">
                              {{-- <img src="https://image.freepik.com/free-photo/grass-with-sunlight-countryside-suburban_53876-42989.jpg" alt=""> --}}
                              {{-- <h4 class="nameonimg">New Zealand</h4> --}}
                              <div class="frontbg">
                                 <h4 class="nameonimg">New Zealand</h4>
                                 <div class="flediv">
                                    <div class="card" style="width:300px">
                                    <img class="card-img-top" src="http://gtsoverseas.programmics.tech/public/user-assets/images/studyabroad/studydesti2.png" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                       <h4 class="card-title">John Doe</h4>
                                       <ul>
                                          <li>Course Name</li>
                                          <li>Course Name</li>
                                       </ul>
                                       {{-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                       <a href="#" class="btn btn-primary">See Profile</a> --}}
                                    </div>
                                    </div>
                                    <div class="card" style="width:300px">
                                       <img class="card-img-top" src="http://gtsoverseas.programmics.tech/public/user-assets/images/studyabroad/studydesti2.png" alt="Card image" style="width:100%">
                                       <div class="card-body">
                                       <h4 class="card-title">John Doe</h4>
                                       <ul>
                                          <li>Course Name</li>
                                          <li>Course Name</li>
                                       </ul>
                                       {{-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                       <a href="#" class="btn btn-primary">See Profile</a> --}}
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  
                     
                     {{-- <div class="tabs effect-3">
                       <?php
                        $tab_id=1;
                       ?>
                        @foreach($country as $C)
                        
                                <input type="radio" id="tab-{{$tab_id}}" name="tab-effect-3" 
                                <?php if($tab_id==1){ echo 'checked="checked"'; }?>
                                 >
                                <span>{{$C->name}}</span>
                                <?php  $tab_id++; ?>
                                @endforeach 
                         
                                <div class="line ease"></div>

                                <!-- tab-content -->
                                <div class="tab-content">
                                 <?php
                                 $tab_id=1;
                                ?>
                                 @foreach($country as $C)
                                 <section id="tab-item-{{$tab_id}}">
                                    <div class="blog-carousel2 owl-carousel owl-none">
                                 @foreach($university as $u)
                                    @if($C->id == $u->country_id)
                                 
                                      
                                          <div class="item">
                                             <div class="dlab-blog style-2 m-b10">
                                                <div class="dlab-media text-center rounded-md">
                                                   <a><img src="{{ asset('public/public/upload/ins_list/'.$u->ilogo) }}" style="width:25%;" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                   <h4 class="dlab-title"><a href="">{{ $u->ins_name}}</a></h4>
                                                   <!-- <p class="m-b20">Nunc convallis sagittis dui eu dictum. Cras sodales id ipsum ac aliquam. Phasellus justo quam.</p> -->
                                                   <div class="" style="display: inline-flex;">   
                                                      <img src="{{ asset('public/user-assets/images/popular.svg') }}">&emsp;<b>Top Courses</b>
                                                      <div class="dlab-meta mb-0">
                                                      </div>
                                               
                                                   </div>
                                                   <ul>
                                                      @foreach($cours as $courses)
                                                      @if($u->id == $courses->intakes)
                                                      <li>{{ $courses->course}}</li>
                                                      @endif
                                                      @endforeach  
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                        
                                      
                                   
                                    @endif
                                    @endforeach  
                                    <?php  $tab_id++; ?>
                                 </div>
                                 </section>
                                    @endforeach  
                                    
                                </div>
                       
                            </div> --}}

                     
                  </div>
               </section>

             
               
               <section class="content-inner bg-white">
                  <div class="container">
                     <div class="section-head style-3 text-center">
                        <h2 class="title">Why Choose GTS</h2>
                        <div class="dlab-separator style-2 bg-primary"></div>
                     </div>
                     <div class="row align-items-center about-wraper-2">
                        <div class="col-lg-4">
                           <div class="row">
                              <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                 <div class="icon-bx-wraper left m-b50 icon-up">
                                    <div class="icon-bx-sm radius gradient-sec shadow-primary m-b20"><a href="#" class="icon-cell text-white"><i class="flaticon-idea"></i></a></div>
                                    <div class="icon-content">
                                       <h4 class="dlab-tilte text-capitalize">Free Admission </h4>
                                       <p>Get free consultation about course & country.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                                 <div class="icon-bx-wraper left m-b50 icon-up">
                                    <div class="icon-bx-sm radius gradient-sec shadow-primary m-b20"><a href="#" class="icon-cell text-white"><i class="flaticon-vector"></i></a></div>
                                    <div class="icon-content">
                                       <h4 class="dlab-tilte text-capitalize">University Selection</h4>
                                       <p>Choose the best universities.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                                 <div class="icon-bx-wraper left m-b50 icon-up">
                                    <div class="icon-bx-sm radius gradient-sec shadow-primary m-b20"><a href="#" class="icon-cell text-white"><i class="flaticon-vector"></i></a></div>
                                    <div class="icon-content">
                                       <h4 class="dlab-tilte text-capitalize">Easy Application Submission</h4>
                                       <p>Our application team will process your application .</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 wow zoomIn" data-wow-duration="2s" data-wow-delay="0.2s">
                           <div class="dz-media text-center m-b30"><img src="{{ asset('public/user-assets/images/about/img7.png') }}" class="move-1" alt=""/></div>
                        </div>
                        <div class="col-lg-4">
                           <div class="row">
                              <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                 <div class="icon-bx-wraper left m-b50 icon-up">
                                    <div class="icon-bx-sm radius gradient-sec shadow-primary m-b20"><a href="#" class="icon-cell text-white"><i class="flaticon-coding"></i></a></div>
                                    <div class="icon-content">
                                       <h4 class="dlab-tilte text-capitalize">Language Preparation</h4>
                                       <p>Learn from certified IELTS/PTE trainers and secure a high score.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                                 <div class="icon-bx-wraper left m-b50 icon-up">
                                    <div class="icon-bx-sm radius gradient-sec shadow-primary m-b20"><a href="#" class="icon-cell text-white"><i class="flaticon-rocket"></i></a></div>
                                    <div class="icon-content">
                                       <h4 class="dlab-tilte text-capitalize">Visa Assistance</h4>
                                       <p>Our expert visa counsellors will guide you through the visa application process.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                                 <div class="icon-bx-wraper left m-b50 icon-up">
                                    <div class="icon-bx-sm radius gradient-sec shadow-primary m-b20"><a href="#" class="icon-cell text-white"><i class="flaticon-rocket"></i></a></div>
                                    <div class="icon-content">
                                       <h4 class="dlab-tilte text-capitalize">Post Landing Support</h4>
                                       <p>Get Acomodation & Pick Up service.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
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
                                    <div class="icon-bx-wraper style-5 box-hover m-b30" style="height:350px;">
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


               <section class="content-inner ">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-6 m-b30">
                           <div class="dz-media"><img src="{{ asset('public/user-assets/images/about/img6.png') }}" class="move-2" alt=""/></div>
                        </div>
                        <div class="col-lg-6">
                           <div class="section-head style-3 mb-4">
                              <h2 class="title">About Us</h2>
                              <div class="dlab-separator style-2 bg-primary"></div>
                           </div>
                           <p>GTS Global is a free and independent overseas career consultancy – we are a one stop solution to all your travel needs including study abroad, visit abroad and settle abroad. We will take care of all your travel needs including visa documents, ticket and visa preparation. Our well-experienced concierge team has years of expertise to make your travel memorable. Our expert panel of counselor, advisors and visa officers will be at your disposal all the time. </p>
                           
                           <div class="row">
                              <div class="col-sm-3 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                 <div class="dlab-content-bx style-2 text-center" style="height: 136px;">
                                    <div class="icon-content"> 
                                       <h2 class="m-b0 text-primary counter m-r5">5</h2>
                                       <!-- <h2 class="counter m-b0"><span>count</span></h2> -->
                                       <span class="title">+YEARS OF EXPERIENCE</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-3 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                                 <div class="dlab-content-bx style-2 text-center" style="height: 136px;">
                                    <div class="icon-content">
                                       <h2 class="m-b0 text-primary counter m-r5">1500</h2>
                                       <!-- <h2 class="counter m-b0"><span>count</span></h2> -->
                                       <span class="title">+UNIVERSITY COURSES</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-3 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                                 <div class="dlab-content-bx style-2 text-center" style="height: 136px;">
                                    <div class="icon-content">
                                       <h2 class="m-b0 text-primary counter m-r5">2000</h2>
                                       <!-- <h2 class="counter m-b0"><span>count</span></h2> -->
                                       <span class="title">+STUDENTS COUNSELLED</span>
                                    </div>
                                 </div>
                              </div>
                               <div class="col-sm-3 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                                 <div class="dlab-content-bx style-2 text-center" style="height: 136px;">
                                    <div class="icon-content">
                                       <h2 class="m-b0 text-primary counter m-r5">99</h2>
                                       <!-- <h2 class="counter m-b0"><span>count</span></h2> -->
                                       <span class="title">% VISA SUCCESS RATE</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
        
              <!--  <section class="content-inner-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s" style="background-image:url(public/user-assets/images/background/bg12.png), var(--gradient-sec);background-size:cover, 200%;background-repeat:no-repeat">
                  <div class="container">
                     <div class="row align-items-center subscribe-wraper-1">
                        <div class="col-lg-7 col-md-6">
                           <h2 class="text-white title m-b30">Please contact us for free counseling</h2>
                        </div>
                        <div class="col-lg-5 col-md-6">
                           <div class="dlab-subscribe style-3 max-w500">
                              <form class="dzSubscribe" action="script/mailchamp.html" method="post">
                                 <div class="dzSubscribeMsg"></div>
                                 <div class="form-group m-b30">
                                    <div class="input-group mb-0">
                                       <input type="email" name="dzEmail" required="" class="form-control" placeholder="Email Address"/>
                                       <div class="input-group-addon"><button name="submit" value="Submit" type="submit" class="btn btn-corner gradient shadow btn-primary">Subscribe Now</button></div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </section> -->


            
               <section class="content-inner-1 bg-gray" style="background-image:url(public/user-assets/images/background/bg3.png)">
                  <div class="container">
                     <div class="section-head style-3 text-center">
                        <h2 class="title">What Our Clients Say’s</h2>
                        <div class="dlab-separator style-2 bg-primary"></div>
                     </div>
                     <div class="blog-carousel2 owl-carousel owl-none">
                        <div class="item">
                           <div class="dlab-blog style-2 m-b10">
                              
                              <div class="dlab-info">
                                 <div class="testimonial-2">
                                    <center><div class="testimonial-pic"><img src="{{ asset('public/user-assets/images/testimonials/testimonial1.jpg') }}" alt=""/></div></center>
                                    <div class="testimonial-text">
                                       <p>I took the services of GTS Gloabal for my admission in the fashion designing course. I wanted to do a bachelor of fashion designing from a reputed university in Canada. I got admission in some of the good institutes in Canada but later decided to go to Singapore as I was more inclined to make a career back in my own country. Fortunately, I had highly experienced counsellors to support me from GTS Gloabal who made my whole process a cake walk I got admission in JCU I would highly recommend everyone willing to study abroad to take an opportunity to explore their career opportunities with them. GTS coaching has highly experienced mentors who guide you for your overseas entrance courses – IELTS / PTE / TOEFL I took SAT and scored high. Highly recommended</p>
                                       <strong class="testimonial-name">Shambhavi Srivastava</strong>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="dlab-blog style-2 m-b10">
                              
                              <div class="dlab-info">
                                 <div class="testimonial-2">
                                 <center><div class="testimonial-pic"><img src="{{ asset('public/user-assets/images/testimonials/testimonial2.jpg') }}" alt=""/></div></center>
                                    <div class="testimonial-text">
                                       <p>GTS Gloabal helped me with preparation for my IELTS and with their guidance, I was able to clear my academic IELTS in the first attempt. I had achieved more than the requirements, which was only possible with their guidance. They planned everything for my admission into one of the world’s most renowned universities. With the guidance from their  highly experienced mentors and counselors, today I am very successful in my career path and I would like to give them huge credit in shaping my career. Highly recommended for overseas careers.</p>
                                       <strong class="testimonial-name">Akanksha Vaish</strong>
                                    </div>
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
                           <div class="dlab-media"><img src="{{ asset('public/user-assets/images/about/img8.png') }}" class="move-1" alt=""/></div>
                        </div>
                       @include('user.userlayout.form')
                     </div>
                  </div>
               </section>

              

               



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