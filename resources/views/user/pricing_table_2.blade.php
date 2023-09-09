@include('user.userlayout.header')
<title>Coaching Offers || GTS Overseas</title>

    <body>
        <div id="__next">
            <div class="page-wraper">
                <div class="page-content bg-white">
                    <div class="dlab-bnr-inr style-1 bg-primary" style="background-image: url(public/user-assets/images/banner/bnr2.png), var(--gradient-sec); background-size: cover, 200%;">
                        <div class="container">
                            <div class="dlab-bnr-inr-entry">
                                <h1>GTS Live Offerings</h1>
                                <nav aria-label="breadcrumb" class="breadcrumb-row style-1">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('/home')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">GTS Live Offerings</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section class="content-inner">
                        <div class="container">

                            <div class="section-head style-3 text-center mb-4">
                                <h2 class="title">Offerings</h2>
                                <div class="dlab-separator style-2 bg-primary"></div>
                            </div>
                            <div class="mainp m-b40">
                                <ul>
                                    <li>
                                        <img src="{{ asset('public/user-assets/images/studyabroad/howwork1.png') }}">&nbsp; Live Classes 
                                    </li>
                                    <li>
                                        <img src="{{ asset('public/user-assets/images/studyabroad/howwork4.png') }}">&nbsp; Offline Classes 
                                    </li>
                                    <li>
                                        <img src="{{ asset('public/user-assets/images/studyabroad/howwork3.png') }}">&nbsp; Weekend Classes 
                                    </li>
                                    <li>
                                        <img src="{{ asset('public/user-assets/images/studyabroad/howwork4.png') }}">&nbsp; Late Night Classes 
                                    </li>
                                    <li>
                                        <img src="{{ asset('public/user-assets/images/studyabroad/howwork4.png') }}">&nbsp; Private Tutoring 
                                    </li>
                                </ul>
                            </div>

                            <div class="section-head style-3 text-center mb-4">
                                <h2 class="title">Courses Offered</h2>
                                <div class="dlab-separator style-2 bg-primary"></div>
                            </div>
                            <div class="tabs effect-3">
                                 <?php
                        $tab_id=1;
                       ?>
                        @foreach($category as $cat)
                                <!-- tab-title -->
                                <input type="radio" id="tab-{{$tab_id}}" name="tab-effect-3" 
                                <?php if($tab_id==1){ echo 'checked="checked"'; }?>
                                 >
                                <span>{{$cat->course_category_name}}</span>

                                <?php  $tab_id++; ?>
                                @endforeach 



                                <div class="line ease"></div>

                                <!-- tab-content -->
                            <div class="tab-content">
                                <?php
                                 $tab_id=1;
                                ?>
                         @foreach($category as $cat)
                                  

                                
                                    <section id="tab-item-{{$tab_id}}">
                                        <!-- <h1>One</h1> -->

                                        <div class="pricingtable-row">
                                            <div class="row">
                                         @foreach($coching as $coching_list)
                                          @if($cat->id == $coching_list->category_id)
                                               
                                                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                                                    <div class="pricingtable-wrapper style-1 m-b30" style="height: 400px;">
                                                        <div class="pricingtable-inner">
                                                            <div class="pricingtable-head">
                                                                <div class="pricingtable-title"><h3>{{ $coching_list->cooching_name}}</h3></div>
                                                          
                                                            </div>
                                                            <div class="pricingtable-price">
                                                                <h2 class="pricingtable-bx">Rs {{ $coching_list->sale_price}} <small class="pricingtable-type"><br> <del>Rs {{ $coching_list->regular_price}}</del> </small></h2>
                                                            </div>
                                                            <p>{{ $coching_list->short_desc}}</p>

                                                            <ul class="pricingtable-features">
                                                                 @foreach($highlight as $highlights)
                                                                 @if($coching_list->highlight_id == $highlights->id)
                                                                <li>{{ $highlights->highlight_name}}</li>
                                                                @endif
                                                                @endforeach
                                                            </ul>

                                                            <div class="pricingtable-footer"><a href="{{route('/course_detail',$coching_list->id)}}" class="btn btn-corner btn-outline-primary">View More</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                               @endif
                                    @endforeach 
                                         
                                            </div>
                                        </div>

                                    </section>
                                       
                                    <?php  $tab_id++; ?>
                                    @endforeach  
                                    
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="content-inner">
                        <div class="container">
                            <div class="section-head style-3 text-center mb-4">
                                <h2 class="title">Video Testimonials</h2>
                                <div class="dlab-separator style-2 bg-primary"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 wow fadeInUp">
                                  <iframe width="100%" height="300" src="https://www.youtube.com/embed/aS3NP7FdzuE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    {{-- <div class="icon-bx-wraper style-5 box-hover text-center m-b30">
                                        <div class="icon-bx">
                                            <img src="{{ asset('public/user-assets/images/studyabroad/howwork1.png') }}" alt=""/>
                                            <!-- <span class="icon-cell"><i class="flaticon-office"></i></span> -->
                                        </div>
                                        <div class="icon-content">
                                            <h6 class="sub-title text-primary m-b10">Step 1</h6>
                                            <!-- <h4 class="dlab-title m-b15">Enroll for the course</h4> -->
                                            <p class="m-b20">Enroll for the course.</p>
                                            <!-- <a class="btn btn-outline-primary" href="services-3"><i class="fa fa-angle-right"></i></a> -->
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp">
                                  <iframe width="100%" height="300" src="https://www.youtube.com/embed/aS3NP7FdzuE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    {{-- <div class="icon-bx-wraper style-5 box-hover text-center m-b30">
                                    <div class="icon-bx">
                                            <img src="{{ asset('public/user-assets/images/studyabroad/howwork2.png') }}" alt=""/>
                                            <!-- <span class="icon-cell"><i class="flaticon-office"></i></span> -->
                                        </div>
                                        <div class="icon-content">
                                            <h6 class="sub-title text-primary m-b10">Step 2</h6>
                                            <!-- <h4 class="dlab-title m-b15">Access to the live classes and tons of Offerings</h4> -->
                                            <p class="m-b20">Access to the live classes and tons of Offerings.</p>
                                            <!-- <a class="btn btn-outline-primary" href="services-3"><i class="fa fa-angle-right"></i></a> -->
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp">
                                  <iframe width="100%" height="300" src="https://www.youtube.com/embed/aS3NP7FdzuE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    {{-- <div class="icon-bx-wraper style-5 box-hover text-center m-b30">
                                    <div class="icon-bx">
                                            <img src="{{ asset('public/user-assets/images/studyabroad/howwork3.png') }}" alt=""/>
                                            <!-- <span class="icon-cell"><i class="flaticon-office"></i></span> -->
                                        </div>
                                        <div class="icon-content">
                                            <h6 class="sub-title text-primary m-b10">Step 3</h6>
                                            <!-- <h4 class="dlab-title m-b15">Secure great marks in your exam</h4> -->
                                            <p class="m-b20">Secure great marks in your exam.</p>
                                            <!-- <a class="btn btn-outline-primary" href="services-3"><i class="fa fa-angle-right"></i></a> -->
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="content-inner clearfix mt-3" aria-label="Question Accordions">
  <div class="container">
  
      <div class="section-head style-3 text-center mb-4">
                                <h2 class="title">FAQs</h2>
                                <div class="dlab-separator style-2 bg-primary"></div>
                            </div>
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
            <h3 class="panel-title">
              <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
              I don't know anything about IELTS, Will i get an overview of the course?
              </a>
            </h3>
          </div>
          <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
            <div class="panel-body px-3 mb-4">
              <p>Yes you will get an overview of IELTS course completely before starting the course. </p>
              <!-- <ul>
                <li>Light speed deployment on the most secure and stable cloud infrastructure available on the market.</li>
                <li>Scalability – pay for what you need today and add-on options as you grow.</li>
                <li>All of the bells and whistles of other enterprise CMS options but without the design limitations - this CMS simply lets you realize your creative visions.</li>
                <li>Amazing support backed by a team of Solodev pros – here when you need them.</li>
              </ul> -->
            </div>
          </div>
        </div>
        
        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
            <h3 class="panel-title">
              <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
              I am working and can only take night classes?
              </a>
            </h3>
          </div>
          <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
            <div class="panel-body px-3 mb-4">
              <p>We have night classes available specially for working professionals. </p>
            </div>
          </div>
        </div>
        
        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
            <h3 class="panel-title">
              <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                Will i get the recording of class if i miss it by chance? 
              </a>
            </h3>
          </div>
          <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
            <div class="panel-body px-3 mb-4">
              <p>Yes you will get the recordings if you miss the class. </p>
            </div>
          </div>
        </div>
        
        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
            <h3 class="panel-title">
              <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
              What is the duration of German Language A1 course for beginners? 
              </a>
            </h3>
          </div>
          <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
            <div class="panel-body px-3 mb-4">
              <p>For a beginner it will be for 1-2 months. </p>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading4">
            <h3 class="panel-title">
              <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
              How many IELTS mock test can i give ?  
              </a>
            </h3>
          </div>
          <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
            <div class="panel-body px-3 mb-4">
              <p>You will get 5 mock tests including in your IELTS Course. </p>
            </div>
          </div>
        </div>
      </div>
  
  </div>
</section>
                
                 
                
                </div>
                
             @include('user.userlayout.footer')

             <style>
                 h2 {
    font-family: Arial, Verdana;
    font-weight: 800;
    font-size: 2.5rem;
    color: #091f2f;
    text-transform: uppercase;
}
.content-inner .panel-default > .panel-heading {
    border: 0;
    background: #f4f4f4;
    padding: 0;
}
.content-inner .panel-default .panel-title a {
    display: block;
    font-style: italic;
    font-size: 1.5rem;
}
.content-inner .panel-default .panel-title a:after {
    font-family: 'FontAwesome';
    font-style: normal;
    font-size: 3rem;
    content: "\f106";
    color: #1f7de2;
    float: right;
    margin-top: -12px;
}
.content-inner .panel-default .panel-title a.collapsed:after {
    content: "\f107";
}
.content-inner .panel-default .panel-body {
    font-size: 1.2rem;
}
             </style>