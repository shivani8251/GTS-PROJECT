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
      <section class="list-group-navigation">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h6 class="float-left mb-1">Add Course List</h6>
                <div class="float-right">
                  <a href="{{ route('courses') }}" class="btn btn-sm btn-primary"><i class="bx bx-left-arrow-alt"></i> Back</a>
                </div>
              </div>
              <div class="card-body">
                <form method="post" id="add_course_form" >
                  @csrf

                  <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Courses Name <span class="text-danger">*</span> </label>
                        <input type="text" placeholder="Courses Name" autocomplete="off" name="courses_name" id="courses_name" class="form-control" required>
                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Courses Duration <span class="text-danger">*</span> </label>
                        <input type="text" placeholder="Courses Name" autocomplete="off" name="courses_duration" id="courses_duration" class="form-control" required>
                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Courses Type <span class="text-danger">*</span> </label>
                          <select name="course_type" id="course_type" class="form-control select2" required>
                            <option value="" disabled selected>Courses Type</option>
                          <option value="Full Time">Full Time</option>
                          <option value="Part Time">Part Time</option>
                        </select>
                      </div>
                    </div>

                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Courses Level <span class="text-danger">*</span> </label>
                          <select name="course_level" id="course_level" class="form-control select2" required>
                            <option value="" disabled selected>Courses Level</option>
                          <option value="High School">High School</option>
                          <option value="Short Courses and Summer Schools">Short Courses and Summer Schools</option>
                          <option value="Under Graduate Diploma or Certificate">Under Graduate Diploma or Certificate</option>
                          <option value="Post Graduate Diploma or Certificate">Post Graduate Diploma or Certificate</option>
                          <option value="Bachelors/UG Degree">Bachelors/UG Degree</option>
                          <option value="Masters/PG Degree">Masters/PG Degree</option>
                          <option value="Doctoral Degree/PhD">Doctoral Degree/PhD</option>
                          <option value="Professional Training / License">Professional Training / License</option>
                          <option value="Internships">Internships</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Total Tuition Fee <span class="text-danger">*</span> </label>
                        <input type="number" placeholder="Total Tuition Fee" autocomplete="off" name="tuition_fee" id="tuition_fee" class="form-control" required>
                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Annual Cost of Living<span class="text-danger">*</span> </label>
                        <input type="number" placeholder="Annual Cost of Living" autocomplete="off" name="cost_live" id="cost_live" class="form-control" required>
                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Application Fee<span class="text-danger">*</span> </label>
                        <input type="number" placeholder="Application Fee" autocomplete="off" name="application_fee" id="application_fee" class="form-control" required>
                      </div>
                    </div>
                  

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Institute Intakes <span class="text-danger">*</span> </label>

                        <select data-placeholder="Institute Intakes" name="intakes" id="intakes" class="form-control select2">
                          <option value="">--Select--</option>
                          @foreach($institute as $I)
                            <option value="{{$I->id}}">{{$I->ins_name}}</option>
                          @endforeach
                        </select>

                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Specialization <span class="text-danger">*</span> </label>

                        <select data-placeholder="Specialization" name="special" id="special" class="form-control select2">
                          <option value="">--Select--</option>
                          @foreach($special as $Specialization)
                            <option value="{{$Specialization->id}}">{{$Specialization->spname}}</option>
                          @endforeach
                        </select>

                      </div>
                    </div>

                   

                                   
                  </div>
                  <div class="row group">
                    <label class="text-warning d-none col-12 mt-1 mb-1" id="warning-msg"></label>
                    <div class="col-lg-12 mt-1">
                      <div class="form-group">
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
        url: "{{route('course.list.add.data')}}",
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

              window.location.href = "{{ route('courses') }}";
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