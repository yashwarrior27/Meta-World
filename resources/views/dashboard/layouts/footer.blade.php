<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/datatable.js')}}"></script>
<script src="{{asset('assets/js/toastr.js')}}"></script>
<script src="{{asset('assets/js/web3.js')}}"></script>
<script src="{{asset('assets/js/app.js?').time()}}"></script>
@if (Session::has('success'))
<script>
    toastr.success("{{Session::get('success')}}");
</script>
@endif
@if (Session::has('error'))
<script>
    toastr.error("{{Session::get('error')}}");
</script>
@endif
<script type="text/javascript">
    $(document).ready(function(){
      $(".navbar-toggler").click(function(){
        $(".navbar-toggler").toggleClass("active");
      });
      $(".navbar-toggler").click(function(){
        $(".main-right").toggleClass("active");
      });
    });
    </script>
    </html>
