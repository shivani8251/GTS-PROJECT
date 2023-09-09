@include('user.userlayout.header')
<title>Contact-Us || GTS Overseas</title>
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
                                <h1>Contact Us</h1>
                                <nav aria-label="breadcrumb" class="breadcrumb-row style-1">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('/home')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="content-inner">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <div class="dlab-media"><img src="{{ asset('public/user-assets/images/about/img3.png') }} " class="move-3" alt="" /></div>
                                </div>
                                  @include('user.userlayout.form')
                            </div>
                        </div>
                    </div>
                </div>
              @include('user.userlayout.footer')

              <script>

      


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
                    
                  }else{
                       document.getElementById("contact").reset();
                      $(".submit_button").attr('enable', false);
                       Toast.fire({icon: 'success',title:  result.message });
                      
                    
                  }
              }
          });
      });


 
</script>