@include('layout.header')

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
</style>
   <body>
      <div id="__next">
         <div class="page-wraper">
            <div class="page-content bg-white" id="top">
               <!-- <div class="banner-three bg-primary" style="background-image:url(images/background/bg5.png), url(images/background/bg6.png), var(--gradient-sec)"> -->
               <div class="banner-lay banner-three" style="background-image: linear-gradient(30deg,#100072 0%,#0064E100 48%);">   
                  <iframe src="https://player.vimeo.com/video/641560984?h=2c0b134490&amp;muted=1&amp;autoplay=1&amp;loop=1&amp;transparent=0&amp;background=1&amp;app_id=122963" width="inherit" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" title="GTS Video - Landing Page" data-ready="true" class="elementor-background-video-embed"></iframe>
                  <div class="container posi-abso">
                     <div class="banner-inner">
                        <div class="row align-items-center">
                           <div class="col-md-6">
                              <div class="banner-content text-white">
                                 <h6 class="sub-title text-yellow">We Are Product Designer From India</h6>
                                 <h1 class="wow fadeInUp m-b20">We Design Interfaces That Users Love</h1>
                                 <p class="wow fadeInUp m-b30">Morbi sed lacus nec risus finibus feugiat et fermentum nibh. Pellentesque vitae ante at elit fringilla ac at purus.</p>
                                 <a class="wow fadeInUp  btn btn-corner gradient btn-primary" href="about-us-3.html">Learn More</a>
                                 <!-- <h6 data-wow-delay="0.5s" data-wow-duration="3s" class="wow fadeInUp sub-title text-yellow">We Are Product Designer From India</h6>
                                 <h1 data-wow-delay="1s" data-wow-duration="3s" class="wow fadeInUp m-b20">We Design Interfaces That Users Love</h1>
                                 <p data-wow-delay="1.5s" data-wow-duration="3s" class="wow fadeInUp m-b30">Morbi sed lacus nec risus finibus feugiat et fermentum nibh. Pellentesque vitae ante at elit fringilla ac at purus.</p>
                                 <a data-wow-delay="2s" data-wow-duration="3s" class="wow fadeInUp  btn btn-corner gradient btn-primary" href="about-us-3.html">Learn More</a> -->

                              </div>
                           </div>
                           <div class="col-md-6">
                              <!-- <div class="dz-media wow fadeIn" data-wow-delay="1s" data-wow-duration="3s"><img src="images/main-slider/slider3/pic1.png" class="move-1" alt=""/></div> -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               <!-- Blog -->
               <section class="content-inner-2" style="background-image: url(../xhtml/images/background/bg16.png); background-size: cover; background-position: top center; background-repeat: no-repeat;">
                  <div class="container">
                     <div class="section-head style-3 text-center mb-4">
                        <h2 class="title">Top Universities & Top Courses</h2>
                        <div class="dlab-separator style-2 bg-primary"></div>
                     </div>

                     <div class="tabs effect-3">
                                <!-- tab-title -->
                                <input type="radio" id="tab-1" name="tab-effect-3" checked="checked">
                                <span>USA</span>

                                <input type="radio" id="tab-2" name="tab-effect-3">
                                <span>Canada</span>

                                <input type="radio" id="tab-3" name="tab-effect-3">
                                <span>Australia</span>

                                <input type="radio" id="tab-4" name="tab-effect-3">
                                <span>Country name</span>
                                
                                <div class="line ease"></div>

                                <!-- tab-content -->
                                <div class="tab-content">
                                    <section id="tab-item-1">
                                       <div class="blog-carousel2 owl-carousel owl-none">
                                          <div class="item">
                                             <div class="dlab-blog style-2 m-b10">
                                                <div class="dlab-media text-center rounded-md">
                                                   <a href="xhtml/blog-details-1.html"><img src="./../samartheme/images/logo/liverpool.png" style="width:25%;" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                   <h4 class="dlab-title"><a href="xhtml/blog-details-1.html">Universities Name</a></h4>
                                                   <!-- <p class="m-b20">Nunc convallis sagittis dui eu dictum. Cras sodales id ipsum ac aliquam. Phasellus justo quam.</p> -->
                                                   <div class="" style="display: inline-flex;">   
                                                      <img src="images/popular.svg">&emsp;<b>Top Courses</b>
                                                      <div class="dlab-meta mb-0">
                                                      </div>
                                                   
                                                      <!-- <ul>
                                                         <li class="post-date">25 March 2021</li>
                                                         <li class="post-author"><i class="las la-user-circle"></i> By <a href="javascript:void(0);">Johne Doe</a></li>
                                                         <li class="post-comment"><i class="las la-comment"></i> <a href="javascript:void(0);">Comments<span>15</span></a></li>
                                                      </ul> -->
                                                   </div>
                                                   <ul>
                                                      <li>Masters in management</li>
                                                      <li>MBA</li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="item">
                                             <div class="dlab-blog style-2 m-b10">
                                                <div class="dlab-media text-center rounded-md">
                                                   <a href="xhtml/blog-details-1.html"><img src="./../samartheme/images/logo/logo-blue2.png" style="width:auto;" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                   <h4 class="dlab-title"><a href="xhtml/blog-details-1.html">Universities Name</a></h4>
                                                   <!-- <p class="m-b20">Nunc convallis sagittis dui eu dictum. Cras sodales id ipsum ac aliquam. Phasellus justo quam.</p> -->
                                                   <div class="" style="display: inline-flex;">   
                                                      <img src="images/popular.svg">&emsp;<b>Top Courses</b>
                                                      <div class="dlab-meta mb-0">
                                                      </div>
                                                   
                                                      <!-- <ul>
                                                         <li class="post-date">25 March 2021</li>
                                                         <li class="post-author"><i class="las la-user-circle"></i> By <a href="javascript:void(0);">Johne Doe</a></li>
                                                         <li class="post-comment"><i class="las la-comment"></i> <a href="javascript:void(0);">Comments<span>15</span></a></li>
                                                      </ul> -->
                                                   </div>
                                                   <ul>
                                                      <li>Masters in management</li>
                                                      <li>MBA</li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="item">
                                             <div class="dlab-blog style-2 m-b10">
                                                <div class="dlab-media text-center rounded-md">
                                                   <a href="xhtml/blog-details-1.html"><img src="./../samartheme/images/logo/logo-blue2.png" alt="" style="width: auto;"></a>
                                                </div>
                                                <div class="dlab-info">
                                                   <h4 class="dlab-title"><a href="xhtml/blog-details-1.html">Universities Name</a></h4>
                                                   <!-- <p class="m-b20">Nunc convallis sagittis dui eu dictum. Cras sodales id ipsum ac aliquam. Phasellus justo quam.</p> -->
                                                   <div class="" style="display: inline-flex;">   
                                                      <img src="images/popular.svg">&emsp;<b>Top Courses</b>
                                                      <div class="dlab-meta mb-0">
                                                      </div>
                                                   
                                                      <!-- <ul>
                                                         <li class="post-date">25 March 2021</li>
                                                         <li class="post-author"><i class="las la-user-circle"></i> By <a href="javascript:void(0);">Johne Doe</a></li>
                                                         <li class="post-comment"><i class="las la-comment"></i> <a href="javascript:void(0);">Comments<span>15</span></a></li>
                                                      </ul> -->
                                                   </div>
                                                   <ul>
                                                      <li>Masters in management</li>
                                                      <li>MBA</li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </section>
                                    <section id="tab-item-2">
                                       <div class="blog-carousel2 owl-carousel owl-none">
                                          <div class="item">
                                             <div class="dlab-blog style-2 m-b10">
                                                <div class="dlab-media text-center rounded-md">
                                                   <a href="xhtml/blog-details-1.html"><img src="./../samartheme/images/logo/liverpool.png" style="width:25%;" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                   <h4 class="dlab-title"><a href="xhtml/blog-details-1.html">Universities Name</a></h4>
                                                   <!-- <p class="m-b20">Nunc convallis sagittis dui eu dictum. Cras sodales id ipsum ac aliquam. Phasellus justo quam.</p> -->
                                                   <div class="" style="display: inline-flex;">   
                                                      <img src="images/popular.svg">&emsp;<b>Top Courses</b>
                                                      <div class="dlab-meta mb-0">
                                                      </div>
                                                   
                                                      <!-- <ul>
                                                         <li class="post-date">25 March 2021</li>
                                                         <li class="post-author"><i class="las la-user-circle"></i> By <a href="javascript:void(0);">Johne Doe</a></li>
                                                         <li class="post-comment"><i class="las la-comment"></i> <a href="javascript:void(0);">Comments<span>15</span></a></li>
                                                      </ul> -->
                                                   </div>
                                                   <ul>
                                                      <li>Masters in management</li>
                                                      <li>MBA</li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="item">
                                             <div class="dlab-blog style-2 m-b10">
                                                <div class="dlab-media text-center rounded-md">
                                                   <a href="xhtml/blog-details-1.html"><img src="./../samartheme/images/logo/logo-blue2.png" style="width:auto;" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                   <h4 class="dlab-title"><a href="xhtml/blog-details-1.html">Universities Name</a></h4>
                                                   <!-- <p class="m-b20">Nunc convallis sagittis dui eu dictum. Cras sodales id ipsum ac aliquam. Phasellus justo quam.</p> -->
                                                   <div class="" style="display: inline-flex;">   
                                                      <img src="images/popular.svg">&emsp;<b>Top Courses</b>
                                                      <div class="dlab-meta mb-0">
                                                      </div>
                                                   
                                                      <!-- <ul>
                                                         <li class="post-date">25 March 2021</li>
                                                         <li class="post-author"><i class="las la-user-circle"></i> By <a href="javascript:void(0);">Johne Doe</a></li>
                                                         <li class="post-comment"><i class="las la-comment"></i> <a href="javascript:void(0);">Comments<span>15</span></a></li>
                                                      </ul> -->
                                                   </div>
                                                   <ul>
                                                      <li>Masters in management</li>
                                                      <li>MBA</li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="item">
                                             <div class="dlab-blog style-2 m-b10">
                                                <div class="dlab-media text-center rounded-md">
                                                   <a href="xhtml/blog-details-1.html"><img src="./../samartheme/images/logo/logo-blue2.png" alt="" style="width: auto;"></a>
                                                </div>
                                                <div class="dlab-info">
                                                   <h4 class="dlab-title"><a href="xhtml/blog-details-1.html">Universities Name</a></h4>
                                                   <!-- <p class="m-b20">Nunc convallis sagittis dui eu dictum. Cras sodales id ipsum ac aliquam. Phasellus justo quam.</p> -->
                                                   <div class="" style="display: inline-flex;">   
                                                      <img src="images/popular.svg">&emsp;<b>Top Courses</b>
                                                      <div class="dlab-meta mb-0">
                                                      </div>
                                                   
                                                      <!-- <ul>
                                                         <li class="post-date">25 March 2021</li>
                                                         <li class="post-author"><i class="las la-user-circle"></i> By <a href="javascript:void(0);">Johne Doe</a></li>
                                                         <li class="post-comment"><i class="las la-comment"></i> <a href="javascript:void(0);">Comments<span>15</span></a></li>
                                                      </ul> -->
                                                   </div>
                                                   <ul>
                                                      <li>Masters in management</li>
                                                      <li>MBA</li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </section>
                                    <section id="tab-item-3">
                                        <div class="blog-carousel2 owl-carousel owl-none">
                                          <div class="item">
                                             <div class="dlab-blog style-2 m-b10">
                                                <div class="dlab-media text-center rounded-md">
                                                   <a href="xhtml/blog-details-1.html"><img src="./../samartheme/images/logo/liverpool.png" style="width:25%;" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                   <h4 class="dlab-title"><a href="xhtml/blog-details-1.html">Universities Name</a></h4>
                                                   <!-- <p class="m-b20">Nunc convallis sagittis dui eu dictum. Cras sodales id ipsum ac aliquam. Phasellus justo quam.</p> -->
                                                   <div class="" style="display: inline-flex;">   
                                                      <img src="images/popular.svg">&emsp;<b>Top Courses</b>
                                                      <div class="dlab-meta mb-0">
                                                      </div>
                                                   
                                                      <!-- <ul>
                                                         <li class="post-date">25 March 2021</li>
                                                         <li class="post-author"><i class="las la-user-circle"></i> By <a href="javascript:void(0);">Johne Doe</a></li>
                                                         <li class="post-comment"><i class="las la-comment"></i> <a href="javascript:void(0);">Comments<span>15</span></a></li>
                                                      </ul> -->
                                                   </div>
                                                   <ul>
                                                      <li>Masters in management</li>
                                                      <li>MBA</li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="item">
                                             <div class="dlab-blog style-2 m-b10">
                                                <div class="dlab-media text-center rounded-md">
                                                   <a href="xhtml/blog-details-1.html"><img src="./../samartheme/images/logo/logo-blue2.png" style="width:auto;" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                   <h4 class="dlab-title"><a href="xhtml/blog-details-1.html">Universities Name</a></h4>
                                                   <!-- <p class="m-b20">Nunc convallis sagittis dui eu dictum. Cras sodales id ipsum ac aliquam. Phasellus justo quam.</p> -->
                                                   <div class="" style="display: inline-flex;">   
                                                      <img src="images/popular.svg">&emsp;<b>Top Courses</b>
                                                      <div class="dlab-meta mb-0">
                                                      </div>
                                                   
                                                      <!-- <ul>
                                                         <li class="post-date">25 March 2021</li>
                                                         <li class="post-author"><i class="las la-user-circle"></i> By <a href="javascript:void(0);">Johne Doe</a></li>
                                                         <li class="post-comment"><i class="las la-comment"></i> <a href="javascript:void(0);">Comments<span>15</span></a></li>
                                                      </ul> -->
                                                   </div>
                                                   <ul>
                                                      <li>Masters in management</li>
                                                      <li>MBA</li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="item">
                                             <div class="dlab-blog style-2 m-b10">
                                                <div class="dlab-media text-center rounded-md">
                                                   <a href="xhtml/blog-details-1.html"><img src="./../samartheme/images/logo/logo-blue2.png" alt="" style="width: auto;"></a>
                                                </div>
                                                <div class="dlab-info">
                                                   <h4 class="dlab-title"><a href="xhtml/blog-details-1.html">Universities Name</a></h4>
                                                   <!-- <p class="m-b20">Nunc convallis sagittis dui eu dictum. Cras sodales id ipsum ac aliquam. Phasellus justo quam.</p> -->
                                                   <div class="" style="display: inline-flex;">   
                                                      <img src="images/popular.svg">&emsp;<b>Top Courses</b>
                                                      <div class="dlab-meta mb-0">
                                                      </div>
                                                   
                                                      <!-- <ul>
                                                         <li class="post-date">25 March 2021</li>
                                                         <li class="post-author"><i class="las la-user-circle"></i> By <a href="javascript:void(0);">Johne Doe</a></li>
                                                         <li class="post-comment"><i class="las la-comment"></i> <a href="javascript:void(0);">Comments<span>15</span></a></li>
                                                      </ul> -->
                                                   </div>
                                                   <ul>
                                                      <li>Masters in management</li>
                                                      <li>MBA</li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </section>
                                    <section id="tab-item-4">
                                    <div class="blog-carousel2 owl-carousel owl-none">
                                          <div class="item">
                                             <div class="dlab-blog style-2 m-b10">
                                                <div class="dlab-media text-center rounded-md">
                                                   <a href="xhtml/blog-details-1.html"><img src="./../samartheme/images/logo/liverpool.png" style="width:25%;" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                   <h4 class="dlab-title"><a href="xhtml/blog-details-1.html">Universities Name</a></h4>
                                                   <!-- <p class="m-b20">Nunc convallis sagittis dui eu dictum. Cras sodales id ipsum ac aliquam. Phasellus justo quam.</p> -->
                                                   <div class="" style="display: inline-flex;">   
                                                      <img src="images/popular.svg">&emsp;<b>Top Courses</b>
                                                      <div class="dlab-meta mb-0">
                                                      </div>
                                                   
                                                      <!-- <ul>
                                                         <li class="post-date">25 March 2021</li>
                                                         <li class="post-author"><i class="las la-user-circle"></i> By <a href="javascript:void(0);">Johne Doe</a></li>
                                                         <li class="post-comment"><i class="las la-comment"></i> <a href="javascript:void(0);">Comments<span>15</span></a></li>
                                                      </ul> -->
                                                   </div>
                                                   <ul>
                                                      <li>Masters in management</li>
                                                      <li>MBA</li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="item">
                                             <div class="dlab-blog style-2 m-b10">
                                                <div class="dlab-media text-center rounded-md">
                                                   <a href="xhtml/blog-details-1.html"><img src="./../samartheme/images/logo/logo-blue2.png" style="width:auto;" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                   <h4 class="dlab-title"><a href="xhtml/blog-details-1.html">Universities Name</a></h4>
                                                   <!-- <p class="m-b20">Nunc convallis sagittis dui eu dictum. Cras sodales id ipsum ac aliquam. Phasellus justo quam.</p> -->
                                                   <div class="" style="display: inline-flex;">   
                                                      <img src="images/popular.svg">&emsp;<b>Top Courses</b>
                                                      <div class="dlab-meta mb-0">
                                                      </div>
                                                   
                                                      <!-- <ul>
                                                         <li class="post-date">25 March 2021</li>
                                                         <li class="post-author"><i class="las la-user-circle"></i> By <a href="javascript:void(0);">Johne Doe</a></li>
                                                         <li class="post-comment"><i class="las la-comment"></i> <a href="javascript:void(0);">Comments<span>15</span></a></li>
                                                      </ul> -->
                                                   </div>
                                                   <ul>
                                                      <li>Masters in management</li>
                                                      <li>MBA</li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="item">
                                             <div class="dlab-blog style-2 m-b10">
                                                <div class="dlab-media text-center rounded-md">
                                                   <a href="xhtml/blog-details-1.html"><img src="./../samartheme/images/logo/logo-blue2.png" alt="" style="width: auto;"></a>
                                                </div>
                                                <div class="dlab-info">
                                                   <h4 class="dlab-title"><a href="xhtml/blog-details-1.html">Universities Name</a></h4>
                                                   <!-- <p class="m-b20">Nunc convallis sagittis dui eu dictum. Cras sodales id ipsum ac aliquam. Phasellus justo quam.</p> -->
                                                   <div class="" style="display: inline-flex;">   
                                                      <img src="images/popular.svg">&emsp;<b>Top Courses</b>
                                                      <div class="dlab-meta mb-0">
                                                      </div>
                                                   
                                                      <!-- <ul>
                                                         <li class="post-date">25 March 2021</li>
                                                         <li class="post-author"><i class="las la-user-circle"></i> By <a href="javascript:void(0);">Johne Doe</a></li>
                                                         <li class="post-comment"><i class="las la-comment"></i> <a href="javascript:void(0);">Comments<span>15</span></a></li>
                                                      </ul> -->
                                                   </div>
                                                   <ul>
                                                      <li>Masters in management</li>
                                                      <li>MBA</li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </section>
                                    
                                </div>
                            </div>

                     
                  </div>
               </section>

               <!-- Blog -->
               <!-- <section class="content-inner-2" style="background-image: url(../xhtml/images/background/bg16.png); background-size: cover; background-position: top center; background-repeat: no-repeat;">
                  <div class="container">
                     <div class="section-head style-1 text-center">
                        <h6 class="sub-title text-primary m-b15">Our Blog</h6>
                        <h2 class="title">Latest News & Blog</h2>
                     </div>
                     <div class="blog-carousel2 owl-carousel owl-none">
                        <div class="item">
                           <div class="dlab-blog style-2 m-b10">
                              <div class="dlab-media rounded-md">
                                 <a href="xhtml/blog-details-1.html"><img src="../xhtml/images/blog/blog-grid/pic1.jpg" alt=""></a>
                              </div>
                              <div class="dlab-info">
                                 <h4 class="dlab-title"><a href="xhtml/blog-details-1.html">Maecenas maximus augue eget libero dictum.</a></h4>
                                 <p class="m-b20">Nunc convallis sagittis dui eu dictum. Cras sodales id ipsum ac aliquam. Phasellus justo quam.</p>
                                 <div class="dlab-meta mb-0">
                                    <ul>
                                       <li class="post-date">25 March 2021</li>
                                       <li class="post-author"><i class="las la-user-circle"></i> By <a href="javascript:void(0);">Johne Doe</a></li>
                                       <li class="post-comment"><i class="las la-comment"></i> <a href="javascript:void(0);">Comments<span>15</span></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="dlab-blog style-2 m-b10">
                              <div class="dlab-media rounded-md">
                                 <a href="xhtml/blog-details-1.html"><img src="../xhtml/images/blog/blog-grid/pic2.jpg" alt=""></a>
                              </div>
                              <div class="dlab-info">
                                 <h4 class="dlab-title"><a href="xhtml/blog-details-1.html">Maecenas maximus augue eget libero dictum.</a></h4>
                                 <p class="m-b20">Nunc convallis sagittis dui eu dictum. Cras sodales id ipsum ac aliquam. Phasellus justo quam.</p>
                                 <div class="dlab-meta mb-0">
                                    <ul>
                                       <li class="post-date">28 June 2021</li>
                                       <li class="post-author"><i class="las la-user-circle"></i> By <a href="javascript:void(0);">Johne Doe</a></li>
                                       <li class="post-comment"><i class="las la-comment"></i> <a href="javascript:void(0);">Comments<span>15</span></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="dlab-blog style-2 m-b10">
                              <div class="dlab-media rounded-md">
                                 <a href="xhtml/blog-details-1.html"><img src="../xhtml/images/blog/blog-grid/pic3.jpg" alt=""></a>
                              </div>
                              <div class="dlab-info">
                                 <h4 class="dlab-title"><a href="xhtml/blog-details-1.html">Maecenas maximus augue eget libero dictum.</a></h4>
                                 <p class="m-b20">Nunc convallis sagittis dui eu dictum. Cras sodales id ipsum ac aliquam. Phasellus justo quam.</p>
                                 <div class="dlab-meta mb-0">
                                    <ul>
                                       <li class="post-date">28 June 2021</li>
                                       <li class="post-author"><i class="las la-user-circle"></i> By <a href="javascript:void(0);">Johne Doe</a></li>
                                       <li class="post-comment"><i class="las la-comment"></i> <a href="javascript:void(0);">Comments<span>15</span></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section> -->

               <!-- <section class="content-inner">
                  <div class="container">
                     <div class="section-head style-3 text-center mb-4">
                        <h2 class="title">Our Speciallization</h2>
                        <div class="dlab-separator style-2 bg-primary"></div>
                     </div>
                     <div class="row">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                           <div class="icon-bx-wraper style-5 box-hover text-center m-b30">
                              <div class="icon-bx"><span class="icon-cell"><i class="flaticon-office"></i></span></div>
                              <div class="icon-content">
                                 <h4 class="dlab-title m-b15">Strategy & Research</h4>
                                 <p class="m-b20">Mauris ut felis malesuada eros varius tristique a at orci. Nulla vulputate, leo sit amet rhoncus suscipit, enim ex venenatis ipsum, et porttitor.</p>
                                 <a class="btn btn-outline-primary" href="services-3.html"><i class="fa fa-angle-right"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                           <div class="icon-bx-wraper style-5 box-hover text-center m-b30 active">
                              <div class="icon-bx"><span class="icon-cell"><i class="flaticon-coding"></i></span></div>
                              <div class="icon-content">
                                 <h4 class="dlab-title m-b15">Web Development</h4>
                                 <p class="m-b20">Mauris ut felis malesuada eros varius tristique a at orci. Nulla vulputate, leo sit amet rhoncus suscipit, enim ex venenatis ipsum, et porttitor.</p>
                                 <a class="btn btn-outline-primary" href="services-3.html"><i class="fa fa-angle-right"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                           <div class="icon-bx-wraper style-5 box-hover text-center m-b30">
                              <div class="icon-bx"><span class="icon-cell"><i class="flaticon-laptop"></i></span></div>
                              <div class="icon-content">
                                 <h4 class="dlab-title m-b15">Web Solution</h4>
                                 <p class="m-b20">Mauris ut felis malesuada eros varius tristique a at orci. Nulla vulputate, leo sit amet rhoncus suscipit, enim ex venenatis ipsum, et porttitor.</p>
                                 <a class="btn btn-outline-primary" href="services-3.html"><i class="fa fa-angle-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section> -->
               
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
                                       <h4 class="dlab-tilte text-capitalize">Expert Advice</h4>
                                       <p>Praesent tincidunt congue est ut hendrerit. Pellentesque et eros sit amet ipsum venenatis.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                                 <div class="icon-bx-wraper left m-b50 icon-up">
                                    <div class="icon-bx-sm radius gradient-sec shadow-primary m-b20"><a href="#" class="icon-cell text-white"><i class="flaticon-vector"></i></a></div>
                                    <div class="icon-content">
                                       <h4 class="dlab-tilte text-capitalize">Study Abroad</h4>
                                       <p>Praesent tincidunt congue est ut hendrerit. Pellentesque et eros sit amet ipsum venenatis.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 wow zoomIn" data-wow-duration="2s" data-wow-delay="0.2s">
                           <div class="dz-media text-center m-b30"><img src="./../samartheme/images/about/img7.png" class="move-1" alt=""/></div>
                        </div>
                        <div class="col-lg-4">
                           <div class="row">
                              <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                 <div class="icon-bx-wraper left m-b50 icon-up">
                                    <div class="icon-bx-sm radius gradient-sec shadow-primary m-b20"><a href="#" class="icon-cell text-white"><i class="flaticon-coding"></i></a></div>
                                    <div class="icon-content">
                                       <h4 class="dlab-tilte text-capitalize">Test Preparation</h4>
                                       <p>Praesent tincidunt congue est ut hendrerit. Pellentesque et eros sit amet ipsum venenatis.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                                 <div class="icon-bx-wraper left m-b50 icon-up">
                                    <div class="icon-bx-sm radius gradient-sec shadow-primary m-b20"><a href="#" class="icon-cell text-white"><i class="flaticon-rocket"></i></a></div>
                                    <div class="icon-content">
                                       <h4 class="dlab-tilte text-capitalize">Immigration</h4>
                                       <p>Praesent tincidunt congue est ut hendrerit. Pellentesque et eros sit amet ipsum venenatis.</p>
                                    </div>
                                 </div>
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
                           <div class="dz-media"><img src="./../samartheme/images/about/img6.png" class="move-2" alt=""/></div>
                        </div>
                        <div class="col-lg-6">
                           <div class="section-head style-3 mb-4">
                              <h2 class="title">Why Our Agency</h2>
                              <div class="dlab-separator style-2 bg-primary"></div>
                           </div>
                           <p>In dictum aliquam turpis lacinia iaculis. Fusce vel malesuada magna. Nulla vel maximus risus. Donec volutpat metus lacinia risus accumsan, ac bibendum libero efficitur. Pellentesque nec nisi sit amet magna tempus hendrerit ut a odio.</p>
                           <p class="m-b30">Praesent rhoncus commodo tortor, id pulvinar nisl blandit at. Nulla facilisi. Quisque turpis ante, vehicula condimentum arcu.</p>
                           <div class="row">
                              <div class="col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                 <div class="dlab-content-bx style-2 text-center">
                                    <div class="icon-content"> 
                                       <h2 class="m-b0 text-primary counter m-r5">48</h2>
                                       <!-- <h2 class="counter m-b0"><span>count</span></h2> -->
                                       <span class="title">Satisfied Clients</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                                 <div class="dlab-content-bx style-2 text-center">
                                    <div class="icon-content">
                                       <h2 class="m-b0 text-primary counter m-r5">50</h2>
                                       <!-- <h2 class="counter m-b0"><span>count</span></h2> -->
                                       <span class="title">Project Lunched</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                                 <div class="dlab-content-bx style-2 text-center">
                                    <div class="icon-content">
                                       <h2 class="m-b0 text-primary counter m-r5">20</h2>
                                       <!-- <h2 class="counter m-b0"><span>count</span></h2> -->
                                       <span class="title">Years Completed</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- <section class="content-inner bg-gray">
                  <div class="container">
                     <div class="section-head style-3 text-center">
                        <h2 class="title">Our Portfolio</h2>
                        <div class="dlab-separator style-2 bg-primary"></div>
                     </div>
                     <div class="site-filters style-3 clearfix center m-b40">
                        <ul class="filters">
                           <li class="btn active"><a active="all">All</a></li>
                           <li class="btn "><a active="web_design">Web Design</a></li>
                           <li class="btn "><a active="web_development">Web Development</a></li>
                           <li class="btn "><a active="branding">Branding</a></li>
                           <li class="btn "><a active="mobile_app">Mobile App</a></li>
                           <li class="btn "><a active="seo">SEO</a></li>
                        </ul>
                     </div>
                     <div>
                        <div class="clearfix">
                           <ul id="masonry" class="row" data-column-width="3"></ul>
                        </div>
                     </div>
                  </div>
               </section> -->
               <section class="content-inner-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s" style="background-image:url(images/background/bg12.png), var(--gradient-sec);background-size:cover, 200%;background-repeat:no-repeat">
                  <div class="container">
                     <div class="row align-items-center subscribe-wraper-1">
                        <div class="col-lg-7 col-md-6">
                           <h2 class="text-white title m-b30">Subscribe To Our Newsletter For Latest Update Of New Products</h2>
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
               </section>
               <!-- <section class="content-inner-1 bg-gray">
                  <div class="container">
                     <div class="section-head style-3 text-center mb-4">
                        <h2 class="title">Our Expertise</h2>
                        <div class="dlab-separator style-2 bg-primary"></div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="slick-slider team-carousel2 owl owl-carousel owl-none owl-theme owl-dots-primary-full slick-initialized" dir="ltr">
                              <div class="slick-list blog-carousel2 owl-carousel ">
                                 <div class="slick-track" style="width:700%; left:-100%;">
                                    <div data-index="-4" tabindex="-1" class="item slick-slide slick-cloned" aria-hidden="true" style="width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic1.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">John Doe</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="-3" tabindex="-1" class="item slick-slide slick-cloned" aria-hidden="true" style="width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.0s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic2.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Emily Smith</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="-2" tabindex="-1" class="item slick-slide slick-cloned" aria-hidden="true" style="width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.1s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="images/team/small/pic3.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Blake Run</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="-1" tabindex="-1" class="item slick-slide slick-cloned" aria-hidden="true" style="width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.2s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="images/team/small/pic4.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Jenna Smith</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="0" class="item slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline:none;width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="images/team/small/pic1.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">John Doe</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="1" class="item slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline:none;width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="images/team/small/pic2.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Emily Smith</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="2" class="item slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline:none;width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic3.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Blake Run</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="3" class="item slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline:none;width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic4.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Jenna Smith</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="4" class="item slick-slide" tabindex="-1" aria-hidden="true" style="outline:none;width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic1.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">John Doe</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="5" class="item slick-slide" tabindex="-1" aria-hidden="true" style="outline:none;width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic2.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Emily Smith</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="6" class="item slick-slide" tabindex="-1" aria-hidden="true" style="outline:none;width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.7s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic3.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Blake Run</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="7" class="item slick-slide" tabindex="-1" aria-hidden="true" style="outline:none;width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic4.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Jenna Smith</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="8" class="item slick-slide" tabindex="-1" aria-hidden="true" style="outline:none;width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic1.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">John Doe</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="9" class="item slick-slide" tabindex="-1" aria-hidden="true" style="outline:none;width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.0s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic2.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Emily Smith</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="10" class="item slick-slide" tabindex="-1" aria-hidden="true" style="outline:none;width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.1s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic3.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Blake Run</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="11" class="item slick-slide" tabindex="-1" aria-hidden="true" style="outline:none;width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.2s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic4.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Jenna Smith</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="12" tabindex="-1" class="item slick-slide slick-cloned" aria-hidden="true" style="width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic1.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">John Doe</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="13" tabindex="-1" class="item slick-slide slick-cloned" aria-hidden="true" style="width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic2.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Emily Smith</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="14" tabindex="-1" class="item slick-slide slick-cloned" aria-hidden="true" style="width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic3.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Blake Run</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="15" tabindex="-1" class="item slick-slide slick-cloned" aria-hidden="true" style="width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic4.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Jenna Smith</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="16" tabindex="-1" class="item slick-slide slick-cloned" aria-hidden="true" style="width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic1.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">John Doe</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="17" tabindex="-1" class="item slick-slide slick-cloned" aria-hidden="true" style="width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic2.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Emily Smith</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="18" tabindex="-1" class="item slick-slide slick-cloned" aria-hidden="true" style="width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.7s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic3.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Blake Run</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="19" tabindex="-1" class="item slick-slide slick-cloned" aria-hidden="true" style="width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic4.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Jenna Smith</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="20" tabindex="-1" class="item slick-slide slick-cloned" aria-hidden="true" style="width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic1.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">John Doe</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="21" tabindex="-1" class="item slick-slide slick-cloned" aria-hidden="true" style="width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.0s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic2.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Emily Smith</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="22" tabindex="-1" class="item slick-slide slick-cloned" aria-hidden="true" style="width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.1s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic3.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Blake Run</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="23" tabindex="-1" class="item slick-slide slick-cloned" aria-hidden="true" style="width:3.5714285714285716%">
                                       <div>
                                          <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.2s" tabindex="-1" style="width:100%;display:inline-block">
                                             <div class="dlab-team style-2 m-b10">
                                                <div class="dlab-media"><img src="./../samartheme/images/team/small/pic4.jpg" alt=""/></div>
                                                <div class="dlab-content">
                                                   <div class="clearfix">
                                                      <h3 class="dlab-name"><a href="team-3.html">Jenna Smith</a></h3>
                                                      <span class="dlab-position">Senior Designer</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                               <ul style="display:block" class="slick-dots">
                                 <li class="slick-active"><button>1</button></li>
                                 <li class=""><button>2</button></li>
                                 <li class=""><button>3</button></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </section> -->
               <!-- <section class="content-inner">
                  <div class="container">
                     <div class="pricingtable-row">
                        <div class="row">
                           <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                              <div class="pricingtable-wrapper style-1 m-b30">
                                 <div class="pricingtable-inner">
                                    <div class="pricingtable-head">
                                       <div class="pricingtable-title">
                                          <h3>Basic Plan</h3>
                                       </div>
                                       <div class="icon-cell"><img src="./../samartheme/images/pricingtable/icon1.png" alt=""/></div>
                                    </div>
                                    <div class="pricingtable-price">
                                       <h2 class="pricingtable-bx">$49<small class="pricingtable-type">/Month</small></h2>
                                    </div>
                                    <ul class="pricingtable-features">
                                       <li>Graphic Design </li>
                                       <li>Web Design</li>
                                       <li>UI/UX</li>
                                       <li>HTML/CSS</li>
                                       <li>SEO Marketing</li>
                                       <li>Business Analysis</li>
                                    </ul>
                                    <div class="pricingtable-footer"><a href="pricing-table-3.html" class="btn btn-corner btn-outline-primary">Start Now</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                              <div class="pricingtable-wrapper style-1 m-b30 active">
                                 <div class="pricingtable-inner">
                                    <div class="pricingtable-head">
                                       <div class="pricingtable-title">
                                          <h3>Standart Plan</h3>
                                       </div>
                                       <div class="icon-cell"><img src="./../samartheme/images/pricingtable/icon2.png" alt=""/></div>
                                    </div>
                                    <div class="pricingtable-price">
                                       <h2 class="pricingtable-bx">$99<small class="pricingtable-type">/Month</small></h2>
                                    </div>
                                    <ul class="pricingtable-features">
                                       <li>Graphic Design </li>
                                       <li>Web Design</li>
                                       <li>UI/UX</li>
                                       <li>HTML/CSS</li>
                                       <li>SEO Marketing</li>
                                       <li>Business Analysis</li>
                                    </ul>
                                    <div class="pricingtable-footer"><a href="pricing-table-3.html" class="btn btn-corner btn-outline-primary">Start Now</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                              <div class="pricingtable-wrapper style-1 m-b30">
                                 <div class="pricingtable-inner">
                                    <div class="pricingtable-head">
                                       <div class="pricingtable-title">
                                          <h3>Premium Plan</h3>
                                       </div>
                                       <div class="icon-cell"><img src="./../samartheme/images/pricingtable/icon3.png" alt=""/></div>
                                    </div>
                                    <div class="pricingtable-price">
                                       <h2 class="pricingtable-bx">$149<small class="pricingtable-type">/Month</small></h2>
                                    </div>
                                    <ul class="pricingtable-features">
                                       <li>Graphic Design </li>
                                       <li>Web Design</li>
                                       <li>UI/UX</li>
                                       <li>HTML/CSS</li>
                                       <li>SEO Marketing</li>
                                       <li>Business Analysis</li>
                                    </ul>
                                    <div class="pricingtable-footer"><a href="pricing-table-3.html" class="btn btn-corner btn-outline-primary">Start Now</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section> -->
               <section class="content-inner-1 bg-gray" style="background-image:url(./../samartheme/images/background/bg3.png)">
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
                                    <center><div class="testimonial-pic quote-right"><img src="./../samartheme/images/testimonials/pic3.jpg" alt=""/></div></center>
                                    <div class="testimonial-text">
                                       <p>Nullam et velit mollis, dictum eros a, vehicula turpis. Aenean feugiat congue faucibus. Nullam dapibus ex ex, vulputate gravida nisi mattis in. Duis maximus odio sed turpis vehicula auctor sit amet ut urna. Nam non libero ut ex fermentum consectetur et in dolor. 
                                          Morbi tempor gravida diam nec lacinia. Suspendisse vehicula ultricies arcu.</p>
                                       <strong class="testimonial-name">Cak Dikin</strong>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="dlab-blog style-2 m-b10">
                              
                              <div class="dlab-info">
                                 <div class="testimonial-2">
                                 <center><div class="testimonial-pic quote-right"><img src="./../samartheme/images/testimonials/pic3.jpg" alt=""/></div></center>
                                    <div class="testimonial-text">
                                       <p>Nullam et velit mollis, dictum eros a, vehicula turpis. Aenean feugiat congue faucibus. Nullam dapibus ex ex, vulputate gravida nisi mattis in. Duis maximus odio sed turpis vehicula auctor sit amet ut urna. Nam non libero ut ex fermentum consectetur et in dolor. 
                                          Morbi tempor gravida diam nec lacinia. Suspendisse vehicula ultricies arcu.</p>
                                       <strong class="testimonial-name">Cak Dikin</strong>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="dlab-blog style-2 m-b10">
                              
                              <div class="dlab-info">
                                 <div class="testimonial-2">
                                    <center><div class="testimonial-pic quote-right"><img src="./../samartheme/images/testimonials/pic3.jpg" alt=""/></div></center>
                                    <div class="testimonial-text">
                                       <p>Nullam et velit mollis, dictum eros a, vehicula turpis. Aenean feugiat congue faucibus. Nullam dapibus ex ex, vulputate gravida nisi mattis in. Duis maximus odio sed turpis vehicula auctor sit amet ut urna. Nam non libero ut ex fermentum consectetur et in dolor. 
                                          Morbi tempor gravida diam nec lacinia. Suspendisse vehicula ultricies arcu.</p>
                                       <strong class="testimonial-name">Cak Dikin</strong>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- <div class="slick-slider testimonials-carousel2 owl-carousel owl-theme owl-none owl-theme owl-dots-primary-full wow fadeIn slick-initialized" dir="ltr">
                        <div class="slick-list">
                           <div class="slick-track" style="width:900%;left:-100%">
                              <div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:11.11111111111111%">
                                 <div>
                                    <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                       <div class="testimonial-2">
                                          <div class="testimonial-pic quote-right"><img src="./../samartheme/images/testimonials/pic3.jpg" alt=""/></div>
                                          <div class="testimonial-text">
                                             <p>Nullam et velit mollis, dictum eros a, vehicula turpis. Aenean feugiat congue faucibus. Nullam dapibus ex ex, vulputate gravida nisi mattis in. Duis maximus odio sed turpis vehicula auctor sit amet ut urna. Nam non libero ut ex fermentum consectetur et in dolor. 
                                                Morbi tempor gravida diam nec lacinia. Suspendisse vehicula ultricies arcu.</p>
                                             <strong class="testimonial-name">Cak Dikin</strong>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline:none;width:11.11111111111111%">
                                 <div>
                                    <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                       <div class="testimonial-2">
                                          <div class="testimonial-pic quote-right"><img src="./../samartheme/images/testimonials/pic1.jpg" alt=""/></div>
                                          <div class="testimonial-text">
                                             <p>Nullam et velit mollis, dictum eros a, vehicula turpis. Aenean feugiat congue faucibus. Nullam dapibus ex ex, vulputate gravida nisi mattis in. Duis maximus odio sed turpis vehicula auctor sit amet ut urna. Nam non libero ut ex fermentum consectetur et in dolor. Morbi tempor gravida diam nec lacinia. Suspendisse vehicula ultricies arcu.</p>
                                             <strong class="testimonial-name">Cak Dikin</strong>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline:none;width:11.11111111111111%">
                                 <div>
                                    <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                       <div class="testimonial-2">
                                          <div class="testimonial-pic quote-right"><img src="./../samartheme/images/testimonials/pic3.jpg" alt=""/></div>
                                          <div class="testimonial-text">
                                             <p>Nullam et velit mollis, dictum eros a, vehicula turpis. Aenean feugiat congue faucibus. Nullam dapibus ex ex, vulputate gravida nisi mattis in. Duis maximus odio sed turpis vehicula auctor sit amet ut urna. Nam non libero ut ex fermentum consectetur et in dolor. Morbi tempor gravida diam nec lacinia. Suspendisse vehicula ultricies arcu.</p>
                                             <strong class="testimonial-name">Cak Dikin</strong>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div data-index="2" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline:none;width:11.11111111111111%">
                                 <div>
                                    <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                       <div class="testimonial-2">
                                          <div class="testimonial-pic quote-right"><img src="./../samartheme/images/testimonials/pic1.jpg" alt=""/></div>
                                          <div class="testimonial-text">
                                             <p>Nullam et velit mollis, dictum eros a, vehicula turpis. Aenean feugiat congue faucibus. Nullam dapibus ex ex, vulputate gravida nisi mattis in. Duis maximus odio sed turpis vehicula auctor sit amet ut urna. Nam non libero ut ex fermentum consectetur et in dolor. Morbi tempor gravida diam nec lacinia. Suspendisse vehicula ultricies arcu.</p>
                                             <strong class="testimonial-name">Cak Dikin</strong>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div data-index="3" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline:none;width:11.11111111111111%">
                                 <div>
                                    <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                       <div class="testimonial-2">
                                          <div class="testimonial-pic quote-right"><img src="./../samartheme/images/testimonials/pic3.jpg" alt=""/></div>
                                          <div class="testimonial-text">
                                             <p>Nullam et velit mollis, dictum eros a, vehicula turpis. Aenean feugiat congue faucibus. Nullam dapibus ex ex, vulputate gravida nisi mattis in. Duis maximus odio sed turpis vehicula auctor sit amet ut urna. Nam non libero ut ex fermentum consectetur et in dolor. Morbi tempor gravida diam nec lacinia. Suspendisse vehicula ultricies arcu.</p>
                                             <strong class="testimonial-name">Cak Dikin</strong>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div data-index="4" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:11.11111111111111%">
                                 <div>
                                    <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                       <div class="testimonial-2">
                                          <div class="testimonial-pic quote-right"><img src="./../samartheme/images/testimonials/pic1.jpg" alt=""/></div>
                                          <div class="testimonial-text">
                                             <p>Nullam et velit mollis, dictum eros a, vehicula turpis. Aenean feugiat congue faucibus. Nullam dapibus ex ex, vulputate gravida nisi mattis in. Duis maximus odio sed turpis vehicula auctor sit amet ut urna. Nam non libero ut ex fermentum consectetur et in dolor. Morbi tempor gravida diam nec lacinia. Suspendisse vehicula ultricies arcu.</p>
                                             <strong class="testimonial-name">Cak Dikin</strong>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div data-index="5" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:11.11111111111111%">
                                 <div>
                                    <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                       <div class="testimonial-2">
                                          <div class="testimonial-pic quote-right"><img src="./../samartheme/images/testimonials/pic3.jpg" alt=""/></div>
                                          <div class="testimonial-text">
                                             <p>Nullam et velit mollis, dictum eros a, vehicula turpis. Aenean feugiat congue faucibus. Nullam dapibus ex ex, vulputate gravida nisi mattis in. Duis maximus odio sed turpis vehicula auctor sit amet ut urna. Nam non libero ut ex fermentum consectetur et in dolor. Morbi tempor gravida diam nec lacinia. Suspendisse vehicula ultricies arcu.</p>
                                             <strong class="testimonial-name">Cak Dikin</strong>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div data-index="6" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:11.11111111111111%">
                                 <div>
                                    <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                       <div class="testimonial-2">
                                          <div class="testimonial-pic quote-right"><img src="./../samartheme/images/testimonials/pic1.jpg" alt=""/></div>
                                          <div class="testimonial-text">
                                             <p>Nullam et velit mollis, dictum eros a, vehicula turpis. Aenean feugiat congue faucibus. Nullam dapibus ex ex, vulputate gravida nisi mattis in. Duis maximus odio sed turpis vehicula auctor sit amet ut urna. Nam non libero ut ex fermentum consectetur et in dolor. Morbi tempor gravida diam nec lacinia. Suspendisse vehicula ultricies arcu.</p>
                                             <strong class="testimonial-name">Cak Dikin</strong>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div data-index="7" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:11.11111111111111%">
                                 <div>
                                    <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                       <div class="testimonial-2">
                                          <div class="testimonial-pic quote-right"><img src="./../samartheme/images/testimonials/pic3.jpg" alt=""/></div>
                                          <div class="testimonial-text">
                                             <p>Nullam et velit mollis, dictum eros a, vehicula turpis. Aenean feugiat congue faucibus. Nullam dapibus ex ex, vulputate gravida nisi mattis in. Duis maximus odio sed turpis vehicula auctor sit amet ut urna. Nam non libero ut ex fermentum consectetur et in dolor. Morbi tempor gravida diam nec lacinia. Suspendisse vehicula ultricies arcu.</p>
                                             <strong class="testimonial-name">Cak Dikin</strong>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <ul style="display:block" class="slick-dots">
                           <li class="slick-active"><button>1</button></li>
                           <li class=""><button>2</button></li>
                           <li class=""><button>3</button></li>
                           <li class=""><button>4</button></li>
                        </ul>
                     </div> -->
                  </div>
               </section>
               
               <!-- <div class="p-tb50 bg-gray">
                  <div class="container">
                     <div class="clients-carousel owl-none owl-carousel">
                        <div class="slick-slider slick-initialized" dir="ltr">
                           <div class="slick-list">
                              <div class="slick-track" style="width:333.33333333333337%;left:-100.00000000000001%">
                                 <div data-index="-6" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:5%">
                                    <div>
                                       <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                          <div class="clients-logo"><img class="logo-main" src="./../samartheme/images/logo/logo-blue2.png" alt=""/><img class="logo-hover" src="./../samartheme/images/logo/logo-light2.png" alt=""/></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-index="-5" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:5%">
                                    <div>
                                       <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                          <div class="clients-logo"><img class="logo-main" src="./../samartheme/images/logo/logo-blue3.png" alt=""/><img class="logo-hover" src="./../samartheme/images/logo/logo-light3.png" alt=""/></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-index="-4" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:5%">
                                    <div>
                                       <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                          <div class="clients-logo"><img class="logo-main" src="./../samartheme/images/logo/logo-blue6.png" alt=""/><img class="logo-hover" src="./../samartheme/images/logo/logo-light6.png" alt=""/></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-index="-3" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:5%">
                                    <div>
                                       <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                          <div class="clients-logo"><img class="logo-main" src="./../samartheme/images/logo/logo-blue4.png" alt=""/><img class="logo-hover" src="./../samartheme/images/logo/logo-light4.png" alt=""/></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-index="-2" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:5%">
                                    <div>
                                       <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                          <div class="clients-logo"><img class="logo-main" src="./../samartheme/images/logo/logo-blue5.png" alt=""/><img class="logo-hover" src="./../samartheme/images/logo/logo-light5.png" alt=""/></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:5%">
                                    <div>
                                       <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                          <div class="clients-logo"><img class="logo-main" src="./../samartheme/images/logo/logo-blue6.png" alt=""/><img class="logo-hover" src="./../samartheme/images/logo/logo-light6.png" alt=""/></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline:none;width:5%">
                                    <div>
                                       <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                          <div class="clients-logo"><img class="logo-main" src="./../samartheme/images/logo/logo-blue1.png" alt=""/><img class="logo-hover" src="./../samartheme/images/logo/logo-light1.png" alt=""/></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-index="1" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline:none;width:5%">
                                    <div>
                                       <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                          <div class="clients-logo"><img class="logo-main" src="./../samartheme/images/logo/logo-blue2.png" alt=""/><img class="logo-hover" src="./../samartheme/images/logo/logo-light2.png" alt=""/></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline:none;width:5%">
                                    <div>
                                       <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                          <div class="clients-logo"><img class="logo-main" src="./../samartheme/images/logo/logo-blue3.png" alt=""/><img class="logo-hover" src="./../samartheme/images/logo/logo-light3.png" alt=""/></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-index="3" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline:none;width:5%">
                                    <div>
                                       <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                          <div class="clients-logo"><img class="logo-main" src="./../samartheme/images/logo/logo-blue6.png" alt=""/><img class="logo-hover" src="./../samartheme/images/logo/logo-light6.png" alt=""/></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-index="4" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline:none;width:5%">
                                    <div>
                                       <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                          <div class="clients-logo"><img class="logo-main" src="./../samartheme/images/logo/logo-blue4.png" alt=""/><img class="logo-hover" src="./../samartheme/images/logo/logo-light4.png" alt=""/></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-index="5" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline:none;width:5%">
                                    <div>
                                       <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                          <div class="clients-logo"><img class="logo-main" src="./../samartheme/images/logo/logo-blue5.png" alt=""/><img class="logo-hover" src="./../samartheme/images/logo/logo-light5.png" alt=""/></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-index="6" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline:none;width:5%">
                                    <div>
                                       <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                          <div class="clients-logo"><img class="logo-main" src="./../samartheme/images/logo/logo-blue6.png" alt=""/><img class="logo-hover" src="./../samartheme/images/logo/logo-light6.png" alt=""/></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-index="7" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:5%">
                                    <div>
                                       <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                          <div class="clients-logo"><img class="logo-main" src="./../samartheme/images/logo/logo-blue1.png" alt=""/><img class="logo-hover" src="./../samartheme/images/logo/logo-light1.png" alt=""/></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-index="8" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:5%">
                                    <div>
                                       <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                          <div class="clients-logo"><img class="logo-main" src="./../samartheme/images/logo/logo-blue2.png" alt=""/><img class="logo-hover" src="./../samartheme/images/logo/logo-light2.png" alt=""/></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-index="9" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:5%">
                                    <div>
                                       <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                          <div class="clients-logo"><img class="logo-main" src="./../samartheme/images/logo/logo-blue3.png" alt=""/><img class="logo-hover" src="./../samartheme/images/logo/logo-light3.png" alt=""/></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-index="10" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:5%">
                                    <div>
                                       <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                          <div class="clients-logo"><img class="logo-main" src="./../samartheme/images/logo/logo-blue6.png" alt=""/><img class="logo-hover" src="./../samartheme/images/logo/logo-light6.png" alt=""/></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-index="11" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:5%">
                                    <div>
                                       <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                          <div class="clients-logo"><img class="logo-main" src="./../samartheme/images/logo/logo-blue4.png" alt=""/><img class="logo-hover" src="./../samartheme/images/logo/logo-light4.png" alt=""/></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-index="12" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:5%">
                                    <div>
                                       <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                          <div class="clients-logo"><img class="logo-main" src="./../samartheme/images/logo/logo-blue5.png" alt=""/><img class="logo-hover" src="./../samartheme/images/logo/logo-light5.png" alt=""/></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-index="13" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width:5%">
                                    <div>
                                       <div class="item" tabindex="-1" style="width:100%;display:inline-block">
                                          <div class="clients-logo"><img class="logo-main" src="./../samartheme/images/logo/logo-blue6.png" alt=""/><img class="logo-hover" src="./../samartheme/images/logo/logo-light6.png" alt=""/></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
               <section class="content-inner">
                  <div class="container">
                     <div class="row align-items-center">
                        <div class="col-lg-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                           <div class="dlab-media"><img src="./../samartheme/images/about/img8.png" class="move-1" alt=""/></div>
                        </div>
                        <div class="col-lg-6 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                           <form class="dlab-form style-1 dzForm" method="POST" action="script/contact.html">
                              <div class="section-head style-3">
                                 <h2 class="title m-t10">Get In Touch With Us</h2>
                                 <div class="dlab-separator style-2 bg-primary"></div>
                              </div>
                              <div class="dzFormMsg"></div>
                              <input type="hidden" class="form-control" name="dzToDo" value="Contact"/><input type="hidden" class="form-control" name="reCaptchaEnable" value="0"/>
                              <div class="row">
                                 <div class="col-sm-12">
                                    <div class="input-group"><input type="text" name="dzName" required="" class="form-control" placeholder="Full Name"/></div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="input-group"><input type="text" name="dzEmail" required="" class="form-control" placeholder="Email Address"/></div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="input-group"><input type="text" name="dzOther[phone]" required="" class="form-control" placeholder="Phone No."/></div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="input-group"><input type="text" name="dzOther[project_title]" required="" class="form-control" placeholder="Project Title"/></div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="input-group">
                                       <select name="dzOther[choose_service]" class="form-control" required="">
                                          <option>Choose Service</option>
                                          <option value="1">Web Development</option>
                                          <option value="2">Web Design</option>
                                          <option value="3">Strategy & Research</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="input-group"><textarea class="form-control" required="" placeholder="Message"></textarea></div>
                                 </div>
                                 <div class="col-sm-12"><button type="submit" class="btn btn-corner gradient btn-block btn-primary">Submit Now</button></div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </section>
 @include('layout.footer')
