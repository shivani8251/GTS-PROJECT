<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <meta name="author" content="">
    <title>List Institute GTS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    
@include('layout.header')

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row"></div>

        <div class="content-body">
      <div class="users-list-filter px-1 mt-2">
        <form>
            <div class="row border rounded py-1 mb-2" style="padding-bottom: 8px !important;">
                <div class="col-12 col-sm-6 col-lg-4">
                    <label for="users-list-verified">Institute Name</label>
                    <fieldset class="form-group">
                        <input type="text" name="ins_name" id="ins_name" class="form-control" placeholder="Search by Institute Name" style="width: -webkit-fill-available;">
                    </fieldset>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                   
                </div>
              
                <div class="col-12 col-sm-6 col-lg-4 d-flex align-items-center">
                    <button  class="btn btn-primary btn-block glow clear-filter mb-0" id="sort-btn">Search </button>
                </div>
                <div class="col-12 col-sm-6 col-lg-3" id="custom-date-picker" style="display: none;">
                    <fieldset class="form-group position-relative has-icon-left" style="margin-bottom: 0px;">
                        <input type="text" class="form-control daterange" placeholder="Select Date">
                        <div class="form-control-position">
                            <i class='bx bx-calendar-check' style="top: 4px !important;"></i>
                        </div>
                    </fieldset>
                </div>
            </div>
        </form>
    </div>

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
                      <a href="{{ route('ins.add') }}" class="btn btn-sm btn-primary"><i class="bx bx-plus"></i>Add</a>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered w-100" id="Ins-list-table">
                        <thead>
                          <tr>
                            <th>Institute Name</th>
                            <th>Logo</th>
                           <th>Country Name</th>
                           <th>Rank</th>
                           <th>UG & PG Fee</th>
                           <th>UG & PG Type</th>
                           <th>Cost Live</th>
                           <th>Cost Type</th>
                           <th>Accomdation</th>
                           <th>Institute Type</th>
                           <th>Foundation Year</th>
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

      let ins_name = "{{$ins_name}}";
      
      $(document).on('click', '#sort-btn', function() {
       var ins_name = $("#ins_name").val();
        InsListTable(ins_name);
         // urlencode();
    
      });

      function urlencode(page='1')
      {

        var  ins_name = $('#ins_name').val();  
               

        var createUrl = "?page="+page;
      
         if (ins_name != '') {
            createUrl += '&ins_name='+ins_name;
        }


       
    window.location.replace(createUrl);
      }
       

      
    InsListTable(ins_name);
    function InsListTable(ins_name = 'All') {
      alert(ins_name);
      $('#Ins-list-table').DataTable().clear().destroy();

      $("#Ins-list-table").DataTable({
        serverSide: true,
        processing: true,
        searching: true,
        order: [],
        ajax: {
            url: "{{ route('inslisttableTable') }}",
            type: "GET",
            data: {'ins_name': ins_name}
        },
             "columns": [
          { data: 'ins_name' },
          { data: 'ilogo' },
          { data: 'country_id'},
          { data: 'rank'},
        { data: 'ug_pg_fee' },
          { data: 'ug_fee_type' },
          { data: 'cost_live' },
          { data: 'cost_type'},
          { data: 'accommodation'},
         { data: 'type_institute' },
          { data: 'found_year' },
          { data: 'Is_active'},
          { data: 'actions'},
        ]
      });
    }


     $(document).on('click', '.deactivate-list-btn', function() {
        let id = $(this).data('id');
       
        $.confirm({
            title: 'Confirm!',
            type: 'red',
            content: 'Are you sure want to deactivate this Detail ?',
            buttons: {
              yes: function() {
                  $.get("{{ route('Ins_deactivate') }}", {
                      id
                  }, function(data) {
                        if (data.error == false) {
                          Toast.fire({icon: 'success',title: data.message });
                          $('#Ins-list-table').DataTable().ajax.reload();
                      } else {
                        Toast.fire({icon: 'error',title: data.message });
                      }
                  }, 'json');
              },
              no: function() {}
            }
        });
    });

      $(document).on('click', '.activate-list-btn', function() {
        let id = $(this).data('id');
        $.confirm({
            title: 'Confirm!',
            type: 'red',
            content: 'Are you sure want to activate this Detail ?',
            buttons: {
              yes: function() {
                  $.get("{{ route('Ins_activate') }}", {
                      id
                  }, function(data) {
                    if (data.error == false) {
                          Toast.fire({icon: 'success',title: data.message });
                          $('#Ins-list-table').DataTable().ajax.reload();
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