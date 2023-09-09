<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <meta name="author" content="">
    <title>List Course GTS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    
@include('layout.header')

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">

     <section class="list-group-navigation">
        <div class="row mt-2">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <h6 class="float-left"></h6>
                    <div class="float-right">
                      <a href="{{ route('list.coching.add') }}" class="btn btn-sm btn-primary"><i class="bx bx-plus"></i>Add</a>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered w-100" id="Ins-course-table">
                        <thead>
                          <tr>
                            <th>Coching Name</th>   
                            <th> Category</th>                         
                           <th> Trainin & Practice</th>
                           <th> Taught by</th>
                           <th>Duration</th>
                           <th>Course Thumbnail</th>
                           <th> Highlight</th>
                           <th>Regular Price</th>
                           <th> Sales Price</th>
                           <th>Brochure</th>
                           <th>Outline</th>
                          <th>Status</th>
                          <th>Action</th>
                          </tr>
                        </thead>                                   
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

       
<!-- users list ends -->
    </div> </div> </div>
<!-- <div class="buy-now" style="right: 60px;"><button type="button" class="btn btn-danger" id="add_Country_detail">+</button></div> -->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
     <!-- Earning Swiper Starts -->


    

@include('layout.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

  </body>
  <!-- END: Body-->
  <script>


    $(document).ready(function(){
       

      
    InsListTable();
    function InsListTable() {
      $('#Ins-course-table').DataTable().clear().destroy();

      $("#Ins-course-table").DataTable({
        serverSide: true,
        processing: true,
        searching: true,
        order: [],
        ajax: {
            url: "{{ route('coching_listtable_Table') }}",
            type: "GET",
            data: {}
        }, 
             "columns": [
          { data: 'cooching_name' },
          { data: 'category_id'},
          { data: 'traning_practice'},
          { data: 'taughtby'},
          {data: 'duration'},
          { data: 'course_img'},
          {data: 'highlight_id'},
          {data:'regular_price'},
          {data: 'sale_price'},
          {data: 'brochure'},
          {data:'outline'},
          { data: 'Is_active'},
          { data: 'actions'},
        ]
      });
    }


     $(document).on('click', '.deactivate-btn', function() {
        let id = $(this).data('id');
       
        $.confirm({
            title: 'Confirm!',
            type: 'red',
            content: 'Are you sure want to deactivate this Detail ?',
            buttons: {
              yes: function() {
                  $.get("{{ route('coching_deactivate') }}", {
                      id
                  }, function(data) {
                        if (data.error == false) {
                          Toast.fire({icon: 'success',title: data.message });
                          $('#Ins-course-table').DataTable().ajax.reload();
                      } else {
                        Toast.fire({icon: 'error',title: data.message });
                      }
                  }, 'json');
              },
              no: function() {}
            }
        });
    });

      $(document).on('click', '.activate-btn', function() {
        let id = $(this).data('id');
        $.confirm({
            title: 'Confirm!',
            type: 'red',
            content: 'Are you sure want to activate this Detail ?',
            buttons: {
              yes: function() {
                  $.get("{{ route('coching_activate') }}", {
                      id
                  }, function(data) {
                    if (data.error == false) {
                          Toast.fire({icon: 'success',title: data.message });
                          $('#Ins-course-table').DataTable().ajax.reload();
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