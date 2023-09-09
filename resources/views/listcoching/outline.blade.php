<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <meta name="author" content="The Vestra">
    <title>Add Course List GTS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    
@include('layout.header')
<style type="text/css">
  

</style>

    <!-- BEGIN: Content-->
   <div class="app-content content mt-2">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
      <!-- Dashboard Ecommerce Starts -->          
      <section class="list-group-navigation mt-2">
        <div class="row">
          <div class="col-12">

     <div class="card collapse-icon accordion-icon-rotate">
        <div class="card-header">
                <h6 class="float-left mb-1">Add Course Outline</h6>
                <div class="float-right">
                  <a href="{{ route('listcoaching') }}" class="btn btn-sm btn-primary"><i class="bx bx-left-arrow-alt"></i> Back</a>
                </div>
              </div>
        <div class="card-content">
          <div class="card-body">
            <div class="accordion" id="cardAccordion">

               @foreach($chapter as $C)

              <div class="card">
                <div class="card-header" id="heading{{ $C->id  }}" data-toggle="collapse" data-target="#collapse{{ $C->id  }}"
                  aria-expanded="false" aria-controls="collapse{{ $C->id  }}" role="button">
                  <span class="collapsed collapse-title">{{ $C->Chapter_name  }}</span>
                </div>
                <div id="collapse{{ $C->id }}" class="collapse pt-1" aria-labelledby="heading{{ $C->id  }}" data-parent="#cardAccordion">

                  <div class="card-body">

                   @php
                    $i =1;
                   @endphp
                  
                  @foreach($topics as $t)
                  @if( $C->id == $t->chepter_id)
                    
                 {{  $i. "."  . $t->topic_name; }} <br>
                 @endif
                  @php
                    $i++;
                @endphp
                    @endforeach
                 

                  </div>
                </div>
              </div>

             @endforeach  
              
            

            </div>
          </div>
        </div>

        <div class="col-lg-12 mt-1">
                      <div class="form-group float-right">
                        <button type="submit" id="submit-btn" class="btn btn-success submit_btn" data-toggle="modal" data-target="#add_outline">Add Chapter</button> &nbsp;  &nbsp;
                        <button type="submit" id="submit-btn" class="btn btn-success submit_btn" data-toggle="modal" data-target="#add_topic">Add Topic</button>
                      </div>
                    </div>

      </div>

          </div>
        </div>
      </section>

    </div>
  </div>
</div>

 <div class="modal fade" id="add_outline" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="padding: 0.6rem 1rem;">
                <h4 class="modal-title">Add Chapter Outline</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
        <div class="container">
        <div class="modal-body pb-0"  >
           <form action="#" method="post" id="upload_outline" style="margin-bottom: 50px;">
            @csrf
        <input type="hidden" name="id" id="id" value="{{$data->iid}}">
        <div class="row" style="width: 100%;"></div>
    <div class="row">
         <div class="col-md-1 col-1"></div>
               <div class="col-md-10 col-10">
                     <div class="form-group"><label for="nf-email" class=" form-control-label mb-0">Chapter Name<span class="text-danger">*</span></label>
                     <input type="text" id="chapter_name" name="chapter_name" placeholder="Chapter Name"  class="form-control" required>
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
                         <button class="btn btn-primary save-chapter-btn" type="button" style="width: 100%;">Save</button>
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


 <div class="modal fade" id="add_topic" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="padding: 0.6rem 1rem;">
                <h4 class="modal-title">Add Course Outline</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
        <div class="container">
        <div class="modal-body pb-0"  >
           <form action="#" method="post" id="upload_chapter_form" style="margin-bottom: 50px;">
            @csrf
        <input type="hidden" name="id" id="id" value="{{$data->iid}}">
        <div class="row" style="width: 100%;"></div>
    <div class="row">
         <div class="col-md-1 col-1"></div>
               <div class="col-md-10 col-10">
                     <div class="form-group"><label for="nf-email" class=" form-control-label mb-0">Chapter Name<span class="text-danger">*</span></label>
                      <select data-placeholder="Chapter Name" name="chapter" id="chapter" class="form-control select2" >
                          <option value="">--Select--</option>
                       
                           @foreach($chapter as $C)

                            <option value="{{$C->id}}">{{$C->Chapter_name}}</option>
                         
                          @endforeach

                        </select>
                    </div>
               </div>
         <div class="col-md-1 col-1"></div>
     </div>

     <div class="row">
         <div class="col-md-1 col-1"></div>
               <div class="col-md-10 col-10">
                     <div class="form-group"><label for="nf-email" class=" form-control-label mb-0">Topic Name<span class="text-danger">*</span></label>
                     <input type="text" id="topic_name" name="topic_name" placeholder="Topic Name (Under Chapter)"  class="form-control" required>
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
                         <button class="btn btn-primary add-btn" type="button" style="width: 100%;">Save</button>
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



@include('layout.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

  </body>
  <!-- END: Body-->

<script>
    $(document).ready(function(){

            $(document).on("click", ".save-chapter-btn",function() {


let myForm = document.getElementById('upload_outline');
var formData = new FormData(myForm);
formData.append('_token', '{{ csrf_token() }}');


$(this).attr('disabled', true);

$.ajax({
        type: "post",
        data: formData,
        url: "{{route('add.outline')}}",
        cache:false,
        contentType: false,
        processData: false,

          success: function(result) {
            $(".save-chapter-btn").attr('disabled', false);
            if (result.error == true) {
                Toast.fire({icon: 'error',title: result.message });
                 $('#add_outline').modal('hide');
            }else{
                Toast.fire({icon: 'success',title: result.message });
                 $('#add_outline').modal('hide');
                  
               location.reload();
             
            }
        }

     
    });
});

            $(document).on("click", ".add-btn",function() {


let myForm = document.getElementById('upload_chapter_form');
var formData = new FormData(myForm);
formData.append('_token', '{{ csrf_token() }}');


$(this).attr('disabled', true);

$.ajax({
        type: "post",
        data: formData,
        url: "{{route('add.outline.topic')}}",
        cache:false,
        contentType: false,
        processData: false,

          success: function(result) {
            $(".save-chapter-btn").attr('disabled', false);
            if (result.error == true) {
                Toast.fire({icon: 'error',title: result.message });
                 $('#add_outline').modal('hide');
            }else{
                Toast.fire({icon: 'success',title: result.message });
                 $('#add_outline').modal('hide');
                  
               location.reload();
             
            }
        }

     
    });
});

      });
</script>

</html>