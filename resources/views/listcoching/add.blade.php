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

            <div class="card">
              <div class="card-header">
                <h6 class="float-left mb-1">Add Coching List</h6>
                <div class="float-right">
                  <a href="{{ route('listcoaching') }}" class="btn btn-sm btn-primary"><i class="bx bx-left-arrow-alt"></i> Back</a>
                </div>
              </div>
              <div class="card-body">
                <form method="post" id="add_course_form" enctype="multipart/form-data">
                  @csrf

                  <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Coching Topic Name <span class="text-danger">*</span> </label>
                        <input type="text" placeholder="Coching Topic Name" autocomplete="off" name="cooching_name" id="cooching_name" class="form-control" required>
                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Coching Category<span class="text-danger">*</span> </label>

                        <select data-placeholder="Coching Category" name="category" id="category" class="form-control select2" >
                          <option value="">--Select--</option>
                          @foreach($category as $C)
                            <option value="{{$C->id}}">{{$C->course_category_name}}</option>
                          @endforeach
                        </select>

                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Training And Practice <span class="text-danger">*</span> </label>
                        <input type="text" placeholder="Training And Practice" autocomplete="off" name="traning_practice" id="traning_practice" class="form-control" required>
                      </div>
                    </div>
              

                   

                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Course Duration<span class="text-danger">*</span> </label>
                        <input type="text" placeholder="Course Duration" autocomplete="off" name="duration" id="duration" class="form-control" >
                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Taught By<span class="text-danger">*</span> </label>
                        <input type="text" placeholder="Taught By" autocomplete="off" name="taughtby" id="taughtby" class="form-control" >
                      </div>
                    </div>

                    

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Course thumbnail Image<span class="text-danger">*</span> </label>
                        <input type="file"  name="course_img" id="course_img" class="form-control" required>
                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Coaching Highlight<span class="text-danger">*</span> </label>

                        <select data-placeholder="Coaching Highlight" name="highlight[]" id="highlight[]" class="form-control select2" multiple>
                          <option value="">--Select--</option>
                          @foreach($highlight as $h)
                            <option value="{{$h->id}}">{{$h->highlight_name}}</option>
                          @endforeach
                        </select>

                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Course Regular Price<span class="text-danger">*</span> </label>
                        <input type="number" placeholder="Course Regular Price"  name="regular_price" id="regular_price" class="form-control" >
                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Course Sales Price<span class="text-danger">*</span> </label>
                        <input type="number" placeholder="Course Sales Price"  name="sale_price" id="sale_price" class="form-control" >
                      </div>
                    </div>

                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Short Description<span class="text-danger">*</span> </label>
                        <input type="text" placeholder="Short Description" autocomplete="off" name="short_desc" id="short_desc" class="form-control" required>
                      </div>
                    </div>

                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Brochure Upload<span class="text-danger">*</span> </label>
                        <input type="file" name="brochure" id="brochure" class="form-control">
                      </div>
                    </div>

                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Long Description<span class="text-danger">*</span> </label>
                        <textarea id="long_desc" name="long_desc" rows="2" class="form-control"></textarea>
                      </div>
                    </div>

                  
                  
               
                  </div>
                  <div class="row group">
                    <label class="text-warning d-none col-12 mt-1 mb-1" id="warning-msg"></label>
                    <div class="col-lg-12 mt-1">
                      <div class="form-group float-right">
                        <button type="submit" id="submit-btn" class="btn btn-success submit_btn">Save</button>
                      </div>
                    </div>
                  </div>
                  
                </form>
              </div>
            </div>

          </div>
        </div>
      </section>

    </div>
  </div>
</div>



@include('layout.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

  </body>
  <!-- END: Body-->
<script>
    $(document).ready(function(){

            $(document).on("click", ".submit_btn",function() {


let myForm = document.getElementById('add_course_form');
var formData = new FormData(myForm);
formData.append('_token', '{{ csrf_token() }}');



$(this).attr('disabled', true);

$.ajax({
        type: "post",
        data: formData,
        url: "{{route('coching.list.add')}}",
        cache:false,
        dataType: 'json',
        contentType: false,
        processData: false,
        beforeSend: function() {
            $("#warning-msg").removeClass('d-none');
            $("#warning-msg").text('Data is being saved do not refresh or submit again');
            },
        success: function(result) {
            $(".submit_btn").attr('disabled', false);
            if (result.error == false) {

                 Toast.fire({icon: 'success',title: result.message, closeButton: !0, tapToDismiss: !1,progressBar: true, timeOut: 1000});

              window.location.href = "{{ route('listcoaching') }}";
            }
            else{
                 Toast.fire({icon: 'error',title: result.message,closeButton: !0,tapToDismiss: !1, progressBar: true, timeOut: 1000 });
             
              setTimeout(function() {
              $("#warning-msg").addClass('d-none');
              $('#submit-btn').prop('disabled', false);
            }, 500);
            }
        }
    });
});

      });
</script>
</html>