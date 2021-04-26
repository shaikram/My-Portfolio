@if (session('email') !== NULL)
    @extends('layout.app')
    @section('title')
    Portfolio | Shaikram Abdulguro Jr
    @endsection
    @section('links')
      @include('inc/admin/adminlinks')
    @endsection
    @section('content')
        @include('inc/admin/portfolio')
    @endsection
    @section('scripts')
      @include('inc/admin/scripts')
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
