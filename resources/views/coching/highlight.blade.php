<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <meta name="author" content="The Vestra">
    <title>Country Master GTS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    
@include('layout.header')

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
        <section class="users-list-wrapper">
            <div class="users-list-table mt-2">
                <div class="card">
                    <div class="card-body">
                        <!-- datatable start -->
                        <div class="table-responsive">
                            <table id="highlight-list-table" class="table table-striped" style="width: 100%;">
                              <thead>
                                  <tr>
                                      <th>Course Highlight Name</th>
                                      <th>Course Highlight Icon</th>
                                      <th>Position</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                              </tbody>
                          </table>
                        <!-- datatable ends -->
                    </div>
                        <!-- datatable ends -->
                    </div>
                </div>
            </div>
        </section>
<!-- users list ends -->
    </div> </div> </div>
<div class="buy-now" style="right: 60px;"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#add_highlight">+</button></div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
     <!-- Earning Swiper Starts -->

 <div class="modal fade" id="add_highlight" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="padding: 0.6rem 1rem;">
                <h4 class="modal-title">Add Course Highlight</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
        <div class="container">
        <div class="modal-body pb-0"  >
           <form action="#" method="post" id="upload_form" enctype="multipart/form-data" style="margin-bottom: 50px;">
            @csrf
        
        <div class="row" style="width: 100%;"></div>
    <div class="row">
         <div class="col-md-1 col-1"></div>
               <div class="col-md-10 col-10">
                     <div class="form-group"><label for="nf-email" class=" form-control-label mb-0">Course Highlight Name<span class="text-danger">*</span></label>
                     <input type="text" id="course_highlight" name="course_highlight" placeholder="Course Highlight Name"  class="form-control" required>
                    </div>
               </div>
         <div class="col-md-1 col-1"></div>
     </div>

     <div class="row">
         <div class="col-md-1 col-1"></div>
               <div class="col-md-10 col-10">
                     <div class="form-group"><label for="nf-email" class=" form-control-label mb-0">Course Highlight Icon<span class="text-danger">*</span></label>
                     <input type="file" id="highlight_icon" name="highlight_icon" class="form-control" required>
                    </div>
               </div>
         <div class="col-md-1 col-1"></div>
     </div>

     <div class="row">
         <div class="col-md-1 col-1"></div>
               <div class="col-md-10 col-10">
                     <div class="form-group"><label for="nf-email" class=" form-control-label mb-0">Course Highlight Position<span class="text-danger">*</span></label>
                     <input type="text" id="highlight_position" name="highlight_position" placeholder="Course Highlight Position" class="form-control" required>
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
                         <button class="btn btn-primary category-btn" type="button" style="width: 100%;">Save</button>
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


<div class="modal fade" id="edit_Highlight" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="padding: 0.6rem 1rem;">
                <h4 class="modal-title">Edit Course Highlight</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
        <div class="container">
        <div class="modal-body pb-0"  >
           <form action="#" method="post" id="upload_edit_form" style="margin-bottom: 50px;">
            @csrf
            <input type="hidden" name="id" id="id">
        <div class="row" style="width: 100%;"></div>
    <div class="row">
         <div class="col-md-1 col-1"></div>
               <div class="col-md-10 col-10">
                    <div class="form-group"><label for="nf-email" class=" form-control-label mb-0">Course Highlight Name<span class="text-danger">*</span></label>
                     <input type="text" id="highlight" name="highlight" placeholder="Course Highlight Name"  class="form-control" required>
                    </div>
               </div>
         <div class="col-md-1 col-1"></div>
     </div>
     
     <div class="row">
         <div class="col-md-1 col-1"></div>
               <div class="col-md-10 col-10">
                      <div class="form-group"><label for="nf-email" class=" form-control-label mb-0">Course Highlight Icon<span class="text-danger">*</span></label>
                     <input type="text" id="icon_highlight_img" class="form-control" >
                     <input type="file" id="icon_highlight" name="icon_highlight" class="form-control" required>
                    </div>
               </div>
         <div class="col-md-1 col-1"></div>
     </div>

     <div class="row">
         <div class="col-md-1 col-1"></div>
               <div class="col-md-10 col-10">
                     <div class="form-group"><label for="nf-email" class=" form-control-label mb-0">Course Highlight Position<span class="text-danger">*</span></label>
                     <input type="text" id="pos_hight" name="pos_hight" placeholder="Course Highlight Position" class="form-control" required>
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
                         <button class="btn btn-primary update-btn" type="button" style="width: 100%;">Update</button>
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
         $(document).on("click", "#cancel-btn",function() {
       
        document.getElementById("upload_form").reset();
        
    });

         $(document).on("click", ".category-btn",function() {


let myForm = document.getElementById('upload_form');
var formData = new FormData(myForm);
formData.append('_token', '{{ csrf_token() }}');


$(this).attr('disabled', true);

$.ajax({
        type: "post",
        data: formData,
        url: "{{route('add.highlight')}}",
        cache:false,
        contentType: false,
        processData: false,
        success: function(result) {
            $(".category-btn").attr('disabled', false);
            if (result.error == true) {
                Toast.fire({icon: 'error',title: result.message });
                 $('#add_highlight').modal('hide');
            }else{
                Toast.fire({icon: 'success',title: result.message });
                 $('#add_highlight').modal('hide');
                categoryListTable();
               
                document.getElementById("upload_form").reset();
            }
        }
    });
});


          $(document).on("click", ".update-btn",function() {


let myForm = document.getElementById('upload_edit_form');
var formData = new FormData(myForm);
formData.append('_token', '{{ csrf_token() }}');


$(this).attr('disabled', true);

$.ajax({
        type: "post",
        data: formData,
        url: "{{route('highlight_edit_data')}}",
        cache:false,
        contentType: false,
        processData: false,
        success: function(result) {
            $(".update-btn").attr('disabled', false);
            if (result.error == true) {
                Toast.fire({icon: 'error',title: result.message });
                 $('#edit_Highlight').modal('hide');
            }else{
                Toast.fire({icon: 'success',title: result.message });
                 $('#edit_Highlight').modal('hide');
                categoryListTable();
               document.getElementById("upload_edit_form").reset();
            }
        }
    });
});





    categoryListTable();
    function categoryListTable() {
      $('#highlight-list-table').DataTable().clear().destroy();

      $("#highlight-list-table").DataTable({
        serverSide: true,
        processing: true,
        searching: true,
        order: [],
        ajax: {
            url: "{{ route('highlightTable') }}",
            type: "GET",
            data: {}
        },
        "columns": [
          { data: 'highlight_name' },
          { data: 'icon' },
          { data: 'posiotion' },
          { data: 'Is_active'},
          { data: 'actions'},
        ]
      });
    }


     $(document).on("click", ".edit_btn", function() {
        
     
        let id = $(this).data("id");

        $.get("{{ route('get_highlight') }}", {id}, function(data) {
          console.log(data);
          if (data != "")
          {
            $("#edit_Highlight  #id").val(data.id);
            $("#edit_Highlight  #highlight").val(data.highlight_name);
             $("#edit_Highlight  #pos_hight").val(data.posiotion);
            $("#edit_Highlight  #icon_highlight_img").val(data.icon);
           
           }
        }, "json");
        $("#edit_Highlight").modal("show");
    });

      $(document).on('click', '.deactivate-project-btn', function() {
        let id = $(this).data('id');
       
        $.confirm({
            title: 'Confirm!',
            type: 'red',
            content: 'Are you sure want to deactivate this Detail ?',
            buttons: {
              yes: function() {
                  $.get("{{ route('highlight_deactivate') }}", {
                      id
                  }, function(data) {
                        if (data.error == false) {
                          Toast.fire({icon: 'success',title: data.message });
                          $('#highlight-list-table').DataTable().ajax.reload();
                      } else {
                        Toast.fire({icon: 'error',title: data.message });
                      }
                  }, 'json');
              },
              no: function() {}
            }
        });
    });

      $(document).on('click', '.activate-project-btn', function() {
        let id = $(this).data('id');
        $.confirm({
            title: 'Confirm!',
            type: 'red',
            content: 'Are you sure want to activate this Detail ?',
            buttons: {
              yes: function() {
                  $.get("{{ route('highlight_activate') }}", {
                      id
                  }, function(data) {
                    if (data.error == false) {
                          Toast.fire({icon: 'success',title: data.message });
                          $('#highlight-list-table').DataTable().ajax.reload();
                      } else {
                        Toast.fire({icon: 'error',title: data.message });
                      }
                  }, 'json');
              },
              no: function() {}
            }
        });
    });


  });


 
</script>
</html>