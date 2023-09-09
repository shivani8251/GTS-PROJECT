@include('user.userlayout.header')
<title>Universities || GTS Overseas</title>
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
                                <h1>Universities Search</h1>
                                <nav aria-label="breadcrumb" class="breadcrumb-row style-1">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('/home')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Universities Search</li>
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
                                            <h5>Area of Accommodation</h5>
                                            <select name="special" class="seletopt" id="special"> Area of Specialisation
                                                <option>Area of Accommodation</option>
                                                <option>Rent</option>
                                                 <option>Flat</option>
                                                 <input type="hidden" id="specialisation">
                                            </select>
                                           
                                        </div>
                                    
                                        <div class="selet-opt-btn m-b20" style="justify-content: space-between;">
                                            <button class="btn btn-outline-primary" id="sort-btn">Apply Filter <i class="fa fa-filter"></i></button>&nbsp;
                                            <button class="btn btn-outline-primary">Reset Filter <i class="fa fa-filter"></i></button>
                                        </div>
                                      
                                        <h5>Countries</h5>
                                        <div class="upper-box m-b20">
                                            <div class="boxcheck m-b20" id="resetdata">
                                                        @foreach($country as $C)
                                                     <input type="checkbox"  name="country" class="contry" value="{{ $C->id }} "><i class="flag-icon flag-icon-gb flag-icon-squared"><img src="{{ asset('public/public/upload/flag/'.$C->flag) }}" style="max-width: 204%;"></i>&nbsp; <b style="margin-left: 17px;">{{ $C->name  }} </b></i><br>
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
                                <div class="col-xl-9 col-lg-8">
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

                                        @foreach($univercity as $u)
                                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s">
                                            <div class="icon-bx-wraper style-5 box-hover text-center m-b30" style="height:630px;">
                                                <div class="icon-bx">
                                                    <!-- <span class="icon-cell"><i class="flaticon-office"></i></span> -->
                                                    <img src="{{ asset('public/public/upload/ins_list/'.$u->ilogo) }}" alt="" style="height: 9em;z-index: 9999999;" />

                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="dlab-title m-b15">{{ $u->ins_name  }}</h4>
                                                    <h5><i class="flag-icon flag-icon-gb flag-icon-squared"><img src="{{ asset('public/public/upload/flag/'.$u->flag) }}"></i> {{ $u->country_name  }} </i></h5>
                                                    <p class="m-b20"><i class="fa fa-star"></i> National Ranking : {{ $u->rank  }}</p>
                                                   <!--  <div class="" style="display: flex;">
                                                        <p> Ranking : <b>6</b></p>&emsp;
                                                        <p> Qs Ranking : <b>86</b></p>
                                                    </div> -->
                                                 <!--    <p> Average Annual UG Fee: <b>21630 GBP</b></p> -->
                                                    <p> Average Annual UG $ PG Fee: <b>{{ $u->ug_pg_fee  }} {{ $u->ug_fee_type  }}</b></p>
                                                    <p> Annual Cost of living: <b>{{ $u->cost_live  }} {{ $u->cost_type  }}</b></p>

                                                    <p> Found Year: <b>{{ $u->found_year  }} </b></p>

                                                    <p> Type of Institute: <b>{{ $u->type_institute  }} </b></p>

                                                    

                                                      <a class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal{{ $u->id  }}" style="width: 160px;"><span>Apply Now&ensp;</span><i class="fa fa-angle-right"></i></a>

                                                    <div class="modal fade univercitymodal" id="exampleModal{{ $u->id  }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 999999;">


                                                          <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Apply Now</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body">
                                                                <form class="" method="POST" id="contact" action="">
                                                       
                            
                               <div class="row">

                                <div class="col-sm-12">
                                    <label>For Applying University</label>
                                    <div class="input-group"><input type="text" name="uname" id="uname" required="" class="form-control" value="{{ $u->ins_name  }}" />
                                        </div>
                                 </div>

                                 <div class="col-sm-6">
                                    <div class="input-group"><input type="text" name="name" id="name" required="" class="form-control" placeholder="Full Name"/>
                                        </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="input-group"><input type="text" name="email" id="email" required="" class="form-control" placeholder="Email Address"/></div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="input-group"><input type="text" name="phone" id="phone" required="" class="form-control" placeholder="Phone No."/></div>
                                 </div>
                                
                                
                                 <div class="col-sm-12">
                                    <div class="input-group"><textarea class="form-control" required="" placeholder="Message"></textarea></div>
                                 </div>
                                 <div class="col-sm-12"><button type="submit" class="btn btn-corner gradient btn-block submit_button btn-primary" style="width: 150px;">Apply Now</button></div>
                              </div>
                           </form>
                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width: 150px;">Close</button>
                                                   
                                                              </div>
                                                            </div>
                                                          </div>


                                                        </div>
                                                </div>
                                            </div>
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
                    </section>
                
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
         // var specialisation = $('#specialisation').val();
         // alert(specialisation);
         urlencode();
    
      });

     $(document).on('click', '#resetfilter', function() {
     
        location.href = '/search_univercity';
    
      });

      

     $(document).on("change", ".contry", function() {
             handlechange();
     
    });

     $(document).on("change", ".acd", function() {
             filter_bychange();
     
    });

 

     


    $(function() {
    var special = [];
    $("#special").change(function() {         
      if ($('option:selected', this).text())
      {
        special.push($(this).val());
    }
      
        $("#specialisation").val(special);
       });
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

   

     function handlechange() {
      var headings = [];
      $(".contry").each(function() {
        if ($(this).prop("checked")) {
          headings.push($(this).val());
        }
      });
      $("#permissions").val(headings.join(","));
    }

    

     $('#sortby').change(function() {
        if($(this).val() != '0')
        {            
           urlencode();
        }
        });

    
    function urlencode(page='1')
      {
         var  sortby = $('#sortby').val();              

        var  univercity_name = $('#univercity_name').val();

         var specialisation = $('#specialisation').val();

        var country = $('#permissions').val(); 

        var filter_by = $('#filter_by').val(); 

        var Specialisation = $('#Specialisation').val();

        var createUrl = "?page="+page;
        

        if (country != '') {
            createUrl += '&country='+country;
        }

        if (filter_by != '') {
            createUrl += '&filter_by='+filter_by;
        }

         if (specialisation != '') {
            createUrl += '&specialisation='+specialisation;
        }

         if (univercity_name != '') {
            createUrl += '&univercity_name='+univercity_name;
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
                                       $('.univercitymodal').modal('hide');
                                    
                                  }else{
                                       document.getElementById("contact").reset();
                                      $(".submit_button").attr('enable', false);
                                       Toast.fire({icon: 'success',title:  result.message });
                                        $('.univercitymodal').modal('hide');
                                      
                                    
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