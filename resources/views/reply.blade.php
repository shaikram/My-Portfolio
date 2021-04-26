@if (session('email') !== NULL)
    @extends('layout.app')
    @section('title')
      Messages | Shaikram Abdulguro Jr
    @endsection
    @section('links')
      @include('inc/admin/adminlinks')
    @endsection
    @section('content')
      @include('inc/admin/read')
    @endsection
    @section('scripts')
      @include('inc/admin/scripts')
      <script src={{ asset("js/sendmail.js") }} type="text/javascript"></script>
    @endsection
@elseif (session('email') == NULL)
  <script type="text/javascript">
      window.location = "logout";
  </script>
@else
  <script type="text/javascript">
      window.location = "logout";
  </script>
@endif
