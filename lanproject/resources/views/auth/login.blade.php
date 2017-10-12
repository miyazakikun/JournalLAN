<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @include('include.css')
    <title>Login Journal System</title>
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
  <div class="login-logo">
    <a href="{{url('/')}}"><b>Admin</b>Journal System</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
      <div class="form-group has-feedback {{ $errors->has('username') ? ' has-error' : '' }}">
        <input type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}"  required autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        @if ($errors->has('username'))
          @section('scripts')
              <script type="text/javascript">
              toastr.error('Data Error', 'Username Salah/Tidak Terdaftar!')
              </script>
          @endsection
        @endif
      </div>
      <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" name="password" class="form-control" placeholder="Password"  required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
          @section('scripts')
              <script type="text/javascript">
              toastr.error('Data Error', 'Password Salah!')
              </script>
          @endsection
        @endif
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

    @include('include.js')
  </body>
</html>
