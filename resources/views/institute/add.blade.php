<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <meta name="author" content="The Vestra">
    <title>Add List Institute GTS</title>
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
                <h6 class="float-left mb-1">Add New Institute</h6>
                <div class="float-right">
                  <a href="{{ route('institute') }}" class="btn btn-sm btn-primary"><i class="bx bx-left-arrow-alt"></i> Back</a>
                </div>
              </div>
              <div class="card-body">
                <form method="post" id="add_institute_form" enctype="multipart/form-data">
                  @csrf

                  <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Institute Name <span class="text-danger">*</span> </label>
                        <input type="text" placeholder="Institute Name" autocomplete="off" name="Institute_name" id="Institute_name" class="form-control" required>
                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Institute Logo<span class="text-danger">*</span></label>
                        <input type="file" name="ilogo" id="ilogo" class="form-control" required>
                       
                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Country <span class="text-danger">*</span> </label>

                        <select data-placeholder="Select Country" name="country_name[]" id="country_name[]" class="form-control select2" multiple>
                          <option value="">--Select--</option>
                          @foreach($country as $C)
                            <option value="{{$C->id}}">{{$C->name}}</option>
                          @endforeach
                        </select>

                      </div>
                    </div>

                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Institute Rank<span class="text-danger">*</span> </label>
                        <input type="number" placeholder="Institute Rank" autocomplete="off" name="rank" id="rank" class="form-control" required>
                      </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-9 col-xs-9">
                      <div class="form-group">
                        <label class="form-control-label">UG And PG Fee <span class="text-danger">*</span> </label>
                        <input type="number" placeholder="UG And PG Fee" autocomplete="off" name="ug_pg_fee" id="ug_pg_fee" class="form-control" required>
                      </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-3">
                      <div class="form-group">
                        <label class="form-control-label">Type <span class="text-danger">*</span> </label>
                        <select name="ug_fee_type" id="ug_fee_type" class="form-control select2" required>
                            <option value="" disabled>Fee Type</option>
                          <option value="INR">INR</option>
                          <option value="GBP">GBP</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-9 col-xs-9">
                      <div class="form-group">
                        <label class="form-control-label">Cost Of Living <span class="text-danger">*</span> </label>
                        <input type="number" placeholder="Cost Of Living" autocomplete="off" name="cost_live" id="cost_live" class="form-control" required>
                      </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-3">
                      <div class="form-group">
                        <label class="form-control-label">Type <span class="text-danger">*</span> </label>
                        <select name="cost_type" id="cost_type" class="form-control select2" required>
                            <option value="" disabled>Cost Type</option>
                          <option value="INR">INR</option>
                          <option value="GBP">GBP</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Accommodation <span class="text-danger">*</span> </label>
                        <select name="accommodation" id="accommodation" class="form-control select2" required>
                            <option value="" disabled>Type of Accommodation</option>
                          <option value="Rent">Rent</option>
                          <option value="Flat">Flat</option>
                        </select>
                      </div>
                    </div>

                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Types Of institute <span class="text-danger">*</span> </label>
                        <select name="type_institute" id="type_institute" class="form-control select2" required>
                            <option value="" disabled>Type of institute</option>
                          <option value="Public">Public</option>
                          <option value="Private">Private</option>
                          <option value="Scholarship">Scholarship</option>
                        </select>
                      </div>
                    </div>

                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label class="form-control-label">Foundation Year <span class="text-danger">*</span> </label>
                        <input type="number" placeholder="Foundation Year" autocomplete="off" name="found_year" id="found_year" class="form-control" required>
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


let myForm = document.getElementById('add_institute_form');
var formData = new FormData(myForm);
formData.append('_token', '{{ csrf_token() }}');



$(this).attr('disabled', true);

$.ajax({
        type: "post",
        data: formData,
        url: "{{route('ins.list.add')}}",
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

              window.location.href = "{{ route('institute') }}";
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