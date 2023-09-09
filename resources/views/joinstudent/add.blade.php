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
                <h6 class="float-left mb-1">Add Student Details</h6>
                <div class="float-right">
                  <a href="{{ route('Student_index') }}" class="btn btn-sm btn-primary"><i class="bx bx-left-arrow-alt"></i> Back</a>
                </div>
              </div>
              <div class="card-body">
                <form method="post" id="add_course_form" enctype="multipart/form-data">
                  @csrf

                  <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Student Name <span class="text-danger">*</span> </label>
                        <input type="text" placeholder="Student Name" autocomplete="off" name="student_name" id="student_name" class="form-control" required>
                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Contact No.<span class="text-danger">*</span> </label>
                        <input type="number" placeholder="Contact No." autocomplete="off" name="phone" id="phone" class="form-control" required>
                      </div>
                    </div>

                    

                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Student Email<span class="text-danger">*</span> </label>
                        <input type="email" placeholder="Student Email" autocomplete="off" name="email" id="email" class="form-control" required>
                      </div>
                    </div>

                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Amount<span class="text-danger">*</span> </label>
                        <input type="number" placeholder="Pay Amount" autocomplete="off" name="amount" id="amount" class="form-control" required>
                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Coching Name<span class="text-danger">*</span> </label>

                     <select data-placeholder="Coching Name" name="coching_name" id="coching_name" class="form-control select2" >
                          <option value="">--Select--</option>
                         @foreach($coching as $cochings)
                         <option value="{{ $cochings->id }}">{{ $cochings->cooching_name }}</option>
                         @endforeach
                        </select>

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
        url: "{{route('join_student.add')}}",
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

              window.location.href = "{{ route('Student_index') }}";
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