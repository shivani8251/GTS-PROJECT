@include('user.userlayout.header')
<title>Course Details || GTS Overseas</title>
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
                <div class="dlab-bnr-inr style-1 bg-primary" style="background-image: url(public/user-assets/images/banner/bnr2.png), var(--gradient-sec); background-size: cover, 200%;">
                    <div class="container">
                        <div class="dlab-bnr-inr-entry">
                            <h1>{{$coching->cooching_name}}</h1>
                            <nav aria-label="breadcrumb" class="breadcrumb-row style-1">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('/home')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('/home')}}">Courses</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Course Details</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="content-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 m-b40">
                                <div class="dlab-blog blog-single style-3">
                                  
                                    <div class="dlab-media rounded-md shadow m-b40"><img src="{{ asset('public/public/upload/cooching_name/'.$coching->course_img) }}" alt="" /></div>
                                    
                                    <div class="tabs effect-3-course">
                                        <!-- tab-title -->
                                        <input type="radio" id="tab-1" name="tab-effect-3" checked="checked">
                                        <span>Course Outlines</span>

                                        <input type="radio" id="tab-12" name="tab-effect-3">
                                        <span>Course Chapters</span>

                                        <input type="radio" id="tab-13" name="tab-effect-3">
                                        <span>Similar Cochings</span>

                                           <!--  <input type="radio" id="tab-14" name="tab-effect-3">
                                            <span>About</span> -->
                                            
                                            <!-- <input type="radio" id="tab-5" name="tab-effect-3">
                                                <span>Language Course</span> -->
                                                
                                                <div class="line ease"></div>

                                                <!-- tab-content -->
                                                <div class="tab-content">
                                                    <section id="tab-item-1">
                                                        <!-- <h1>One</h1> -->
                                                        <div class="section-head style-3 text-center mb-4">
                                                            <h2 class="title">Why Choose</h2>
                                                            <div class="dlab-separator style-2 bg-primary"></div>
                                                        </div>
                                                        <div class="row">

                                                            @foreach($highlight as $highlights)

                                                            <div class="col-lg-4 col-md-6 col-4 wow fadeInUp">
                                                                <div class="icon-bx-wraper text-center m-b30">
                                                                 <div class="icon-bx">
                                                                    <img src="{{ asset('public/public/upload/Highlight/'.$highlights->icon) }}" alt=""/>
                                                                    
                                                                </div>
                                                                <div class="icon-content">
                                                                    <!-- <h6 class="sub-title text-primary m-b10">Step 1</h6> -->
                                                                    <h4 class="dlab-title m-b15">{{ $highlights->highlight_name}}</h4>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        @endforeach

                                                       
                                                        <div class="col-lg-12 col-md-12 col-12 wow fadeInUp">
                                                    
                                                            <p>{{ $coching->long_desc}}</p>
                                                        </div>

                                                         <div class="col-lg-4 col-md-4 col-4 wow fadeInUp">
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-4 wow fadeInUp">
                                                        <div class="input-group-addon text-center">
                                                           <a href="{{ asset('public/public/upload/brochure/'.$coching->brochure) }}" download=""> <button name="submit" value="Submit" type="submit" class="btn btn-corner gradient shadow btn-primary"   style="width: -webkit-fill-available;">Download Brochure</button>
                                                           </a>
                                                        </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-4 wow fadeInUp">
                                                        </div>

                                                         
                                                        
                                                        
                                                    </div>                                                    
                                                </section>
                                                <section id="tab-item-2" class="content-inner clearfix" aria-label="Question Accordions">
                                                    <!-- <h1>Two</h1> -->
                                                    <div class="section-head style-3 text-center mb-4">
                                                        <h2 class="title">Course Chapters</h2>
                                                        <div class="dlab-separator style-2 bg-primary"></div>
                                                    </div>

                                                    @foreach($chapter as $chapters)
                                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                        <div class="panel panel-default" style="    box-shadow: 0 0 10px 4px rgb(31 66 135 / 10%);">
                                                          <div class="panel-heading p-3 mb-3" role="tab" id="heading{{$chapters->id}}">
                                                            <h3 class="panel-title">
                                                              <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$chapters->id}}" aria-expanded="true" aria-controls="collapse0" style="font-size: 1.25rem !important;color: #fff !important;">
                                                                 {{ $chapters->Chapter_name }}
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div id="collapse{{$chapters->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$chapters->id}}">
                                                        <div class="panel-body px-3 mb-4">
                                                          <ul>
                                                           @foreach($topic as $topics)
                                                           @if( $chapters->id == $topics->chepter_id)
                                                           <li>{{ $topics->topic_name }}.</li>
                                                           @endif
                                                           @endforeach
                                                       </ul>
                                                   </div>
                                               </div>
                                           </div>
                                           
                                           
                                       </div>

                                       @endforeach
                                   </section>
                                   <section id="tab-item-3">
                                    <!-- <h1>Three</h1> -->

                                    <div class="pricingtable-row">
                                        <div class="row">

                                            @foreach($coch_list as $coch_lists)

                                            @if($coch_lists->id == $coching->id)
                                            
                                            @else
                                            <div class="col-lg-6 wow fadeIn row carda" style="margin-right: auto;" data-wow-duration="2s" data-wow-delay="0.2s">
                                               <div class="col-md-4 lr10" style="border-radius:8px;">
                                                   <img src="{{ asset('public/public/upload/cooching_name/'.$coch_lists->course_img) }}">
                                                   <!-- <img src="images/coursedetails/pl.jpg"> -->
                                               </div>
                                               
                                               <div class="col-md-8 widthless">
                                                <b>{{$coch_lists->cooching_name}}</b><br>
                                                <!--  <img src="{{ asset('public/user-assets/images/coursedetails/calender-icon.svg') }}"> -->
                                                <b>Taught By:- </b>{{$coch_lists->taughtby}} </br>
                                                
                                            </div>
                                            <a class="btn btn-outline-primary mt-10" href="{{route('/course_detail',$coch_lists->id)}}" style="width: 180px; padding:12px 14px;" >View More</a>

                                            



                                            


                                            <div class="col-12">
                                                <hr>
                                                <b>Duration:-{{$coch_lists->duration}}</b>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach


                                    </div>
                                </div>

                            </section>
                            <section id="tab-item-4">
                                <!-- <h1>Four</h1> -->

                                <div class="row">
                                    <table>
                                        <tr><td> Course Type </td> <td>&ensp; : &ensp;</td> <td> <b>IELTS Foudation</b> </td></tr>
                                        <tr><td> Taught by</td> <td>&ensp; : &ensp;</td> <td> <b>Ravjot Kaur</b> </td></tr>
                                        <tr><td> Hails form</td> <td>&ensp;  : &ensp;</td> <td> <b>Delhi</b> </td></tr>
                                        <tr><td> Key Traits</td> <td>&ensp;  : &ensp;</td> <td> <b>Humoros, Caring & Empathetic</b> </td></tr>
                                    </table>
                                    <div class="row">
                                        <div class="col-lg-6 wow fadeIn row carda" style="margin-right: auto;" data-wow-duration="2s" data-wow-delay="0.2s">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/HAYYzA8lIKo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <div class="col-12">
                                                <hr>
                                                <b>Band Score : 7</b>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeIn row carda" style="margin-right: auto;" data-wow-duration="2s" data-wow-delay="0.2s">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/HAYYzA8lIKo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <div class="col-12">
                                                <hr>
                                                <b>Band Score : 7</b>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeIn row carda" style="margin-right: auto;" data-wow-duration="2s" data-wow-delay="0.2s">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/HAYYzA8lIKo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <div class="col-12">
                                                <hr>
                                                <b>Band Score : 7</b>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeIn row carda" style="margin-right: auto;" data-wow-duration="2s" data-wow-delay="0.2s">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/HAYYzA8lIKo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <div class="col-12">
                                                <hr>
                                                <b>Band Score : 7</b>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeIn row carda" style="margin-right: auto;" data-wow-duration="2s" data-wow-delay="0.2s">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/HAYYzA8lIKo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <div class="col-12">
                                                <hr>
                                                <b>Band Score : 7</b>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeIn row carda" style="margin-right: auto;" data-wow-duration="2s" data-wow-delay="0.2s">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/HAYYzA8lIKo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <div class="col-12">
                                                <hr>
                                                <b>Band Score : 7</b>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                            </section>
                            
                        </div>
                    </div>
                    
                </div>
                
            </div>
            <div class="col-xl-4 col-lg-4 m-b30">
                <aside class="side-bar sticky-top">
                    <div class="widget style-1">
                    </div>
                    <div class="widget style-1">
                        <p class="titlepkbl"><b>Coching</b> | <span>{{$coching->cooching_name}}</span></p>
                        <hr>
                        <p class="titlepkbl">Taught by <b><span>{{$coching->taughtby}}</span></b> </p>
                        <hr>
                        <div class="" style="display: flex; align-items: end;"><img src="{{ asset('public/user-assets/images/coursedetails/date_time.svg') }}" class="pr-2"><p>{{$coching->duration}} Course </p></div>
                        <div class="" style="display: flex; align-items: flex-start;"><img src="{{ asset('public/user-assets/images/coursedetails/Fess.png') }}" class="pr-2"><p style="margin-top: 15px;"> Fees - {{$coching->sale_price}} /-</p></div>
                        <div class="m-b15" style="display: flex; align-items: flex-start;"><img src="{{ asset('public/user-assets/images/coursedetails/zoom.svg') }}" class="pr-2"><p style="margin-top: 15px;">{{$coching->short_desc}}</p></div>
                        <div class="input-group-addon text-center"><button name="submit" value="Submit" type="submit" class="btn btn-corner gradient shadow btn-primary"  data-toggle="modal" data-target="#exampleModal" style="width: -webkit-fill-available;">Confirm Seat Rs {{$coching->sale_price}}</button></div>

                    </aside>
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
            <div class="panel panel-default" style="    box-shadow: 0 0 10px 4px rgb(31 66 135 / 10%);">
              <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0" style="font-size: 1.25rem !important;color: #fff !important;">
                    What are the benefits of Solodev CMS?
                </a>
            </h3>
        </div>
        <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
            <div class="panel-body px-3 mb-4">
              <p>With Solodev CMS, you and your visitors will benefit from a finely-tuned technology stack that drives the highest levels of site performance, speed and engagement - and contributes more to your bottom line. Our users fell in love with:</p>
              <ul>
                <li>Light speed deployment on the most secure and stable cloud infrastructure available on the market.</li>
                <li>Scalability – pay for what you need today and add-on options as you grow.</li>
                <li>All of the bells and whistles of other enterprise CMS options but without the design limitations - this CMS simply lets you realize your creative visions.</li>
                <li>Amazing support backed by a team of Solodev pros – here when you need them.</li>
            </ul>
        </div>
    </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
    <h3 class="panel-title">
      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1" style="font-size: 1.25rem !important;color: #fff !important;">
        How easy is it to build a website with Solodev CMS?
    </a>
</h3>
</div>
<div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
    <div class="panel-body px-3 mb-4">
      <p>Building a website is extremely easy. With a working knowledge of HTML and CSS you will be able to have a site up and running in no time.</p>
  </div>
</div>
</div>



<div class="panel panel-default">
  <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
    <h3 class="panel-title">
      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2" style="font-size: 1.25rem !important;color: #fff !important;">
        What is the uptime for Solodev CMS?
    </a>
</h3>
</div>
<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
    <div class="panel-body px-3 mb-4">
      <p>Using Amazon AWS technology which is an industry leader for reliability you will be able to experience an uptime in the vicinity of 99.95%.</p>
  </div>
</div>
</div>

<div class="panel panel-default">
  <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
    <h3 class="panel-title">
      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3" style="font-size: 1.25rem !important;color: #fff !important;">
        Can Solodev CMS handle multiple websites for my company?
    </a>
</h3>
</div>
<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
    <div class="panel-body px-3 mb-4">
      <p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
  </div>
</div>
</div>
</div>

</div>
</section>
<div class="modal fade univercitymodal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 999999;">


  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <form class="" method="POST" id="join_student" action="">
     
        
     <div class="row">

        <div class="col-sm-12">
          
            <div class="input-group"><input type="text" name="student_name" id="student_name" required="" placeholder="Student Name" class="form-control"/>
            </div>
        </div>

        
        <div class="col-sm-6">
            <div class="input-group"><input type="text" name="email" id="email" required="" class="form-control" placeholder="Email Address"/></div>
        </div>
        <div class="col-sm-6">
            <div class="input-group"><input type="number" name="phone" id="phone" required="" class="form-control" placeholder="Phone No."/></div>
        </div>
        
        
        <div class="col-sm-12">
            <div class="input-group"><textarea class="form-control" required="" placeholder="Message" id="message" name="message"></textarea></div>
        </div>
        <div class="col-sm-3">
        </div>
         <div class="col-sm-6">
             <label>for applying Coching:- {{$coching->cooching_name}}</label>
        </div>
         <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
        </div>
         <div class="col-sm-6">
             <label>Amount Pay:- {{$coching->sale_price}} </label>
        </div>
         <div class="col-sm-3">
        </div>
           
       
        <input type="hidden" name="classes" id="classes" value="{{$coching->cooching_name}}">
        <input type="hidden" name="amount" id="amount" value="{{$coching->sale_price}}">
        
        <div class="col-sm-12"><button type="submit" class="btn btn-corner gradient btn-block submit_button btn-primary" style="width: 160px; margin-left: 145px;">Apply Now</button></div>
        
    </div>
</form>
</div>

</div>
</div>


</div>

</div>
@include('user.userlayout.footer')

<script>

    
 
   $(document).on("click", ".submit_button",function() {

       let myForm = document.getElementById('join_student');
       var formData = new FormData(myForm);
       formData.append('_token', '{{ csrf_token() }}');


       $(this).attr('disabled', true);

       $.ajax({
          type: "post",
          data: formData,
          url: "{{route('join_student.form')}}",
          cache:false,
          contentType: false,
          processData: false,
          success: function(result) {
              $(".submit_button").attr('disabled', false);
              if (result.error == true) {
                 Toast.fire({icon: 'error',title: result.message });
                 $('.univercitymodal').modal('hide');
                 
             }else{
                 document.getElementById("join_student").reset();
                 $(".submit_button").attr('enable', false);
                 Toast.fire({icon: 'success',title:  result.message });
                 $('.univercitymodal').modal('hide');
                 
                 
             }
         }
     });
   });

</script>

<style>

   h2 {
    font-family: Arial, Verdana;
    font-weight: 800;
    color: #091f2f;
    text-transform: uppercase;
}
.content-inner .panel-default > .panel-heading {
 width: 100%;
 border-radius: 8px;
 padding: 24px 36px 24px 30px;
 transition: all .5s;
 background-image: var(--gradient);
 background-size: 200%;
 color: #fff !important;
 display: block;
 position: relative;
 box-shadow: 0 0 10px 4px rgb(31 66 135 / 10%);
 font-family: Source Sans Pro,sans-serif;
 font-weight: 700;
 font-size: 1.25rem !important;"
}

/*.content-inner .panel-default .panel-title a:after {
    font-family: 'FontAwesome';
    font-style: normal;
    font-size: 3rem;
    content: "\f106";
    color: #1f7de2;
    float: right;
    margin-top: -12px;
}*/

.content-inner .panel-default .panel-title a:after {
    font-family: 'FontAwesome';
    font-style: normal;
    font-size: 2rem;
    content: "\f106";
    color: #f01a6e;
    float: right;
    margin-top: -5px;
    background-color: white;
    padding: 0px 10px;
    border-radius: 7px;
}
.content-inner .panel-default .panel-title a.collapsed:after {
    content: "\f107";
}
.content-inner .panel-default .panel-body {
    font-size: 1.2rem;
}
</style>