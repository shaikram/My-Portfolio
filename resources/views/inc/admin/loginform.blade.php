<div class="content">
      <center>
        @if (isset(Auth::user()->email))
          <script type="text/javascript">
            window.location = "succeslogin";
          </script>
        @endif
        @if ($message = Session::get('error'))
          <div class="alert alert-danger">
            <strong>{{ $message }}</strong>
          </div>
        @endif
        @if (count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
      <form class="login_form" action="{{ url('checklogin') }}" method="post">
        {{ csrf_field() }}
        <img src="web_image/admin.png" width="100px" height="auto">
        <h2>Login to your account</h2>
        <input class="username" type="email" placeholder="Email" name="email" required>
        <input class="password" type="password" placeholder="Password" name="password" required>
        <input class="submit" type="submit" name="login" value="LOG IN">
      </form>
      </center>
    </div>
