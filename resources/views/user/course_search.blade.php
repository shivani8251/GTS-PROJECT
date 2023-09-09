@include('user.userlayout.header')
<title>Courses || GTS Overseas</title>
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
                                <h1>Course Search</h1>
                                <nav aria-label="breadcrumb" class="breadcrumb-row style-1">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('/home')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Course Search</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section class="content-inner-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 m-b30 sidebod">
                                    <aside class="side-bar sticky-top">
                                        <div class="m-b20">
                                            <h5>Search by Universities</h5>
                                      <input type="text" name="univercity_name" id="univercity_name" placeholder="Search by Universities" style="width: -webkit-fill-available;">
                                        </div>
                                          <div class="m-b20 boxchi">
                                            <h5>Types Of:</h5>
                                            <input type="checkbox" class="acd" value="Public"> <label>Public</label> <input type="checkbox" class="acd" value="Private"> <label>Private</label>
                                            <input type="checkbox" class="acd" value="Scholarship"> <label>Scholarship</label>
                                            <input type="hidden" id="filter_by">
                                        </div>
                                        <div class="m-b20">
                                            <h5>Level of Interest</h5>
                                            <select name="interest" class="seletopt" id="interest"> Select Level of Interest
                                                <option>Select Level Of interest</option>
                                                <option>High School</option>
                                                <option>Short Courses and Summer Schools</option>
                                                <option>Under Graduate Diploma or Certificate</option>
                                                <option>Post Graduate Diploma or Certificate</option>
                                                <option>Bachleors / UG Degree</option>
                                                <option>Masters / PG Degree</option>
                                                <option>Doctoral Degree / PhD</option>
                                                <option>Professioal Training / License</option>
                                                <option>Internships</option>
                                                <input type="hidden" id="interestt">
                                            </select>
                                        </div>
                                        <div class="m-b20">
                                            <h5>Area of Specialisation</h5>
                                            <select name="sortby" class="seletopt" id="specialization" name="specialization"> 
                                                <option>Area of Specialisation</option>
                                                @foreach($special as $specialization)
                                                <option value="{{$specialization->id}}">{{$specialization->spname}}</option>
                                                @endforeach
                                                 <input type="hidden" id="special">
                                            </select>
                                        </div>
                                    
                                        <div class="selet-opt-btn m-b20" style="justify-content: space-between;">
                                            <button class="btn btn-outline-primary" id="sort-btn">Apply Filter <i class="fa fa-filter"></i></button>&nbsp;
                                            <button class="btn btn-outline-primary">Reset Filter <i class="fa fa-filter"></i></button>
                                        </div>
                                     
                                        <h5>Courses</h5>
                                        <div class="upper-box m-b20">  
                                             <div class="boxcheck m-b20" id="resetdata">
                                                        @foreach($course as $C)
                                                     <input type="checkbox" name="Course" class="Course" value="{{ $C->id  }}" >
                                                      <b style="margin-left: 17px;">{{ $C->course  }} </b></i><br>
                                                        @endforeach
                                                    <input type="hidden" id="permissions">
                                            </div>
                                        </div>
                                        <div class="selet-opt-btn" style="justify-content: space-between;">
                                            <button class="btn btn-outline-primary" id="search-btn">Apply Filter <i class="fa fa-filter"></i></button>&nbsp;
                                            <button class="btn btn-outline-primary" id="resetfilter">Reset Filter <i class="fa fa-filter"></i></button>
                                        </div>
                                    </aside>
                                </div>
                                <div class="col-xl-9 col-lg-8" style="padding-left: 22px;">
                                    <div class="row" style="justify-content: space-between;">
                                        <select name="sortby" id="sortby" style="margin-left: 18px;"> Sort by
                                            <option value="0">Sort by</option>
                                            <option value="Rank_High_to_low">The Rank - High to Low </option>
                                            <option value="Tuition_Fee_Low_to_High">Tuition Fee - Low to High</option>
                                            <option value="Tuition_Fee_High_to_Low">Tuition Fee - High to Low</option>
                                        </select>
                                        <p>Total Country : <span>{{ $course_count }}</span> | Total Institutions: <span>{{ $ins_count }}</span></p>
                                    </div>
                                    <div class="row">
                                          @foreach($ins_list as $ins_lists)
                                        <div class="col-lg-12 icon-bx-wraper style-5 col-md-10 wow fadeInUp m-b30" data-wow-duration="2s" data-wow-delay="0.1s">
                                            <div class=" box-hover ">
                                                <div class=""  style="display: flex;">
                                                    
                                                    <div class="icon-content po">
                                                        <h4 class="dlab-title m-b15">{{ $ins_lists->ins_name  }}</h4>
                                                        <h5 class=" c-ourse"><i class="flag-icon flag-icon-gb flag-icon-squared"><img src="{{ asset('public/public/upload/flag/'.$ins_lists->flag) }} "></i> {{ $ins_lists->name}} </i></h5>
                                                        <p class="m-b20"><i class="fa fa-star"></i> National Ranking :{{ $ins_lists->rank  }}</p>
                                                        
                                                        <!-- <a class="btn btn-outline-primary" href="services-3" style="width: 160px;"><span>Apply Now&ensp;</span><i class="fa fa-angle-right"></i></a> -->
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row course-des">
                                                <div class="gradient descrip">
                                                    <div class="btn btn-outline-primary"><i class="fa fa-flag"></i></div> &ensp; 
                                                    <div class="">
                                                        <h6>FOUNDED IN </h6>
                                                        <h5>{{ $ins_lists->found_year  }}</h5>
                                                    </div>
                                                </div>
                                                <div class="gradient descrip">
                                                    <div class="btn btn-outline-primary"><i class="fa fa-university"></i></div> &ensp; 
                                                    <div class="">
                                                        <h6>Institution Type </h6>
                                                        <h5>{{ $ins_lists->type_institute  }}</h5>
                                                    </div>
                                                </div>
                                                <div class="gradient descrip">
                                                    <div class="btn btn-outline-primary"><i class="fa fa-money"></i></div> &ensp; 
                                                    <div class="">
                                                        <h6>Estimated Cost</h6>
                                                        <h5>{{ $ins_lists->cost_live  }} {{ $ins_lists->cost_type  }}/Yr</h5>
                                                    </div>
                                                </div>
                                                <div class="gradient descrip">
                                                    <div class="btn btn-outline-primary"><i class="fa fa-flag"></i></div> &ensp; 
                                                    <div class="">
                                                        <h6>Ranking </h6>
                                                        <h5>{{ $ins_lists->rank  }}</h5>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            
                                            <div class="row">
                                                @foreach($course as $courses)
                                                @if($courses->intakes == $ins_lists->id)
                                                <div class="col-lg-5 wow fadeIn row carda" style=" margin-left:initial;" data-wow-duration="2s" data-wow-delay="0.2s">
                                                   <h5>{{ $courses->course }}</h5> 
                                                    <table class="cou" style="border-spacing: 10px;">
                                                        <tr>
                                                            <th>Length</th>
                                                            <th>Tuition Fee</th>
                                                            <th>Course Type</th>
                                                        </tr>
                                                        <tr>
                                                            <td>{{ $courses->duration }}</td>
                                                            <td> {{ $courses->tuition_fee }} INR</td>
                                                            <td>{{ $courses->c_type }}</td>
                                                        </tr>
                                                    </table>
                                                    <a class="btn btn-outline-primary" style="width: 160px;" data-toggle="modal" data-target="#exampleModal{{ $courses->id }}">Apply Now&ensp;</span><i class="fa fa-angle-right"></i></a>

                                                     <div class="modal fade coursemodal" id="exampleModal{{ $courses->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 999999;">


                                                          <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Apply Now</h5>
                                                                <button type="button" id="dataclose" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body">
                                                                <form class="" method="POST" id="contact" action="">
                                                       
                            
                                                                      <div class="row">

                                                                        

                                                                         <div class="col-sm-12">
                                                                            <div class="input-group"><input type="text" name="name" id="name" required="" class="form-control" placeholder="Full Name"/>
                                                                                </div>
                                                                         </div>
                                                                         <div class="col-sm-12">
                                                                            <div class="input-group"><input type="text" name="email" id="email" required="" class="form-control" placeholder="Email Address"/></div>
                                                                         </div>
                                                                         <div class="col-sm-12">
                                                                            <div class="input-group"><input type="text" name="phone" id="phone" required="" class="form-control" placeholder="Phone No."/></div>
                                                                         </div>

                                                                        
                                                                         <div class="col-sm-12">
                                                                            <div class="input-group"><textarea class="form-control" required="" placeholder="Message" name="message" id="message"></textarea></div>
                                                                         </div>
                                                                          <div class="col-sm-12">
                                                                        <label>For Applying Courses:- {{ $courses->course }}
                                                                            <input type="hidden" name="cname" id="cname" value="{{ $courses->course }}">
                                                                        <input type="hidden" name="uname" id="uname" value="{{ $ins_lists->ins_name }}">
                                                                    </label>
                                                                        
                                                                        </div>
                                                                         <div class="col-sm-12"><button type="submit" class="btn btn-corner gradient btn-block submit_button btn-primary" style="width: 150px;">Apply Now</button></div>
                                                                      </div>
                                                                     </form>
                                                              </div>
                                                              <!-- <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" id="dataclose" data-dismiss="modal" style="width: 150px;">Close</button>
                                                   
                                                              </div> -->
                                                            </div>
                                                          </div>


                                                        </div>
                                                </div>
                                                <div class="col-1"></div>
                                                @endif
                                           @endforeach
                                                
                                             
                                            </div><br>
                                          

                                            

                                        </div>
                                        @endforeach
                                      
                                        
                                    </div>

                                         @if($total_page > 1)
        <div class="col-12">
          <ul class="pagination-custom">

            @if($current_page == 1)
              <li style="pointer-events: none; cursor: default;">
                <a class="prev-btn active" style="font-size: 10px;" href="javascript:void(0);" data-value="{{$current_page}}" aria-label="Previous">
                  Prev
                </a>
              </li>
            @else
              <li>
                <a class="prev-btn" style="font-size: 10px;" href="javascript:void(0);" data-value="{{$current_page}}" aria-label="Previous">
                  Prev
                </a>
              </li>
            @endif

            @for ($i = 1; $i <= $total_page; $i++)
              @if($current_page == $i)
                <li>
                  <a href="javascript:void(0);" class="active page-btn" data-value="{{$i}}">{{$i}}</a>
                </li>
              @else
                <li>
                  <a href="javascript:void(0);" class="page-btn" data-value="{{$i}}">{{$i}}</a>
                </li>
              @endif
            @endfor

            @if($total_page <= $current_page)
              <li style="pointer-events: none; cursor: default;">
                <a href="javascript:void(0);" style="font-size: 10px;" class="active next-btn" data-value="{{$current_page}}" aria-label="Next">
                  Next
                </a>
              </li>
            @else
              <li>
                <a href="javascript:void(0);" style="font-size: 10px;" class="next-btn" data-value="{{$current_page}}" aria-label="Next">
                  Next
                </a>
              </li>
            @endif

          </ul>
        </div>
      @endif

                                </div>
                            </div>
                        </div>
 @include('user.userlayout.footer')

<script>

     $(document).on("click", "#dataclose",function() {
       
        document.getElementById("contact").reset();
        
    });
 

     $(document).on('click', '#search-btn', function() {
        // var cid = $('#permissions').val();
         urlencode();
    
      });

     $(document).on('click', '#sort-btn', function() {
       
         urlencode();
    
      });

       $(function() {
    var inters = [];
    $("#inters").change(function() {         
      if ($('option:selected', this).text())
      {
        inters.push($(this).val());
    }
      
        $("#interest").val(inters);
       });
     });

     $(document).on('click', '#resetfilter', function() {
     
        location.href = '/course_search';
    
      });

      $(document).on("change", ".acd", function() {
             filter_bychange();
     
    });

      function filter_bychange() {
      var filter_by = [];
      $(".acd").each(function() {
        if ($(this).prop("checked")) {
          filter_by.push($(this).val());
        }
      });
      $("#filter_by").val(filter_by.join(","));
    }

    $(function() {
    var specialization = [];
    $("#specialization").change(function() {         
      if ($('option:selected', this).text())
      {
        specialization.push($(this).val());
    }
      
        $("#special").val(specialization);
       });
     });

      

     $(document).on("change", ".Course", function() {
             handlechange();
     
    });



     function handlechange() {
      var headings = [];
      $(".Course").each(function() {
        if ($(this).prop("checked")) {
          headings.push($(this).val());
        }
      });
      $("#permissions").val(headings.join(", "));
    }


     $('#sortby').change(function() {
        if($('option:selected', this).text()>0)
        {            
           urlencode();
        }
        });

    
     function urlencode(page='1')
      {

        var  sortby = $('#sortby').val();  

          var  univercity_name = $('#univercity_name').val(); 

           var specialization = $('#special').val();   

          var filter_by = $('#filter_by').val(); 

          var interest = $('#interestt').val(); 

        var Course = $('#permissions').val();

        var createUrl = "?page="+page;

        if (Course != '') {
            createUrl += '&Course='+Course;
        }

        if (univercity_name != '') {
            createUrl += '&univercity_name='+univercity_name;
        }

         if (specialization != '') {
            createUrl += '&specialization='+specialization;
        }

        if (filter_by != '') {
            createUrl += '&filter_by='+filter_by;
        }

         if (interest != '') {
            createUrl += '&interest='+interest;
        }
         if (sortby != '') {
            createUrl += '&sortby='+sortby;
        }
       
    window.location.replace(createUrl);
      }

      $(document).on("click", ".page-btn", function() {
        var page = $(this).attr('data-value');
        urlencode(page);
      });

      $(document).on("click", ".prev-btn", function() {
        var pageVal = $(this).attr('data-value');
        var page = parseInt(pageVal)-1;
        urlencode(page);
      });

      $(document).on("click", ".next-btn", function() {
        var pageVal = $(this).attr('data-value');
        var page = parseInt(pageVal)+1;
        urlencode(page);
      });


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
                                       $('.coursemodal').modal('hide');
                                    
                                  }else{
                                       document.getElementById("contact").reset();
                                      $(".submit_button").attr('enable', false);
                                       Toast.fire({icon: 'success',title:  result.message });
                                        $('.coursemodal').modal('hide');
                                      
                                    
                                  }
                              }
                          });
      });


</script>

    <style>
    .pagination-custom {
    text-align: center;
    margin-right: -5px;
}

.pagination-custom > li {
    display: inline-block;
    margin-right: 5px;
}

.pagination-custom a {
    display: block;
    width: 37px;
    height: 37px;
    border: 2px solid;
    font-family: "Poppins", sans-serif;
    font-weight: 500;
    line-height: 34px;
    text-align: center;
}

.pagination-custom a, .pagination-custom a:focus, .pagination-custom a:active {
    color: #0d0d0d;
    border-color: #F67281;
    background-color: transparent;
}

.pagination-custom a:hover {
    color: #ffffff;
    border-color: #ea5d1a;
    background: #ea5d1a;
}

.pagination-custom a.active {
    cursor: auto;
    pointer-events: none;
}

.pagination-custom a.active, .pagination-custom a.active:focus, .pagination-custom a.active:active, .pagination-custom a.active:hover {
    color: #ffffff;
    border-color: #ea5d1a;
    background: #ea5d1a;
}
 .pagination-custom {
    margin-bottom: 40px;
}


</style>