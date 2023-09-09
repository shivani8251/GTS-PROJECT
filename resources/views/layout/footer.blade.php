<!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix mb-0"><span class="float-left d-inline-block"></span><span class="float-right d-sm-inline-block d-none">@<?php echo date('Y'); ?> All Rights Reserved by<a class="text-uppercase" href="https://www.programmics.co.in/" target="_blank">Programmics Technology.</a></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
      </p>
    </footer>
    <!-- END: Footer-->
    <script src="{{ asset('public/app-assets/vendors/js/vendors.min.js ') }}"></script>
    <script src="{{ asset('public/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js ') }}"></script>
    <script src="{{ asset('public/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js ') }}"></script>
    <script src="{{ asset('public/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js ') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('public/app-assets/vendors/js/extensions/swiper.min.js ') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    
    <script src="{{ asset('public/app-assets/js/scripts/configs/vertical-menu-light.min.js ') }}"></script>
    <script src="{{ asset('public/app-assets/js/core/app-menu.min.js ') }}"></script>
    <script src="{{ asset('public/app-assets/js/core/app.min.js ') }}"></script>
    <script src="{{ asset('public/app-assets/js/scripts/components.min.js ') }}"></script>
    <script src="{{ asset('public/app-assets/js/scripts/footer.min.js ') }}"></script>
    <script src="{{ asset('public/app-assets/js/scripts/customizer.min.js ') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    <!-- <script src="{{ asset('public/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script> -->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <!-- <script src="{{ asset('public/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script> -->
    <script src="{{ asset('public/app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('public/app-assets/js/scripts/pages/bootstrap-toast.min.js') }}"></script>

    <script src="{{ asset('public/app-assets/js/scripts/extensions/toastr.min.js') }}"></script>
   
    <script src="{{ asset('public/app-assets/js/scripts/extensions/sweet-alerts.min.js') }}"></script>
    <script src="{{ asset('public/app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>

     <script src="{{ asset('public/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('public/app-assets/js/scripts/forms/select/form-select2.min.js') }}"></script>

    <script src="{{ asset('public/app-assets/vendors/js/pickers/pickadate/picker.js') }}"></script>
    <script src="{{ asset('public/app-assets/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('public/app-assets/vendors/js/pickers/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('public/app-assets/vendors/js/pickers/pickadate/legacy.js') }}"></script>
    <script src="{{ asset('public/app-assets/vendors/js/extensions/moment.min.js') }}"></script>
    
    <script src="{{ asset('public/app-assets/vendors/js/pickers/daterange/daterangepicker.js') }}"></script>
    <script src="{{ asset('public/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.min.js') }}"></script>

    <script src="{{ asset('public/app-assets/js/scripts/pages/app-invoice.min.js') }}"></script>

    <script src="{{ asset('public/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>

    <script src="{{ asset('vendor/uploader/js/fileinput.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/uploader/themes/fas/theme.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/uploader/themes/explorer-fas/theme.js') }}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
     <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script>
     const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
    </script>