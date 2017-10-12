@extends('layouts.app')
@section('title','Profile '.Auth::user()->name)
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Profile</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::model($user, ['url' => 'admin/profile/'.$user->id, 'method' => 'post']) !!}
                <div class="form-group col-sm-6 {{ $errors->has('username') ? 'has-error' :'' }}">
                    {!! Form::label('username', 'Username:') !!}
                    {!! Form::text('username', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('username'))
                        @section('scripts')
                            <script type="text/javascript">
                            toastr.error('Data Error', 'Data Username Wajib Diisi!')
                            </script>
                        @endsection
                    @endif
                </div>
                <div class="form-group col-sm-6 {{ $errors->has('name') ? 'has-error' :'' }}">
                    {!! Form::label('name', 'Nama:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('name'))
                        @section('scripts')
                            <script type="text/javascript">
                            toastr.error('Data Error', 'Data Nama Wajib Diisi!')
                            </script>
                        @endsection
                    @endif
                </div>
                <div class="form-group col-sm-6 {{ $errors->has('email') ? 'has-error' :'' }}">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('email'))
                        @section('scripts')
                            <script type="text/javascript">
                            toastr.error('Data Error', 'Data Nama Wajib Diisi!')
                            </script>
                        @endsection
                    @endif
                </div>
                <div class="form-group col-sm-6 {{ $errors->has('password') ? 'has-error' :'' }}">
                    {!! Form::label('password', 'Password:') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                    @if ($errors->has('password'))
                        @section('scripts')
                            <script type="text/javascript">
                            toastr.error('Data Error', 'Data Password Wajib Diisi!')
                            </script>
                        @endsection
                    @endif
                </div>
                <div class="form-group col-sm-12 text-right">
                    <button type="submit" name="button" class="btn btn-danger">Ubah</button>
                </div>
              {!! Form::close() !!}
            </div>
            <!-- /.box-body -->
          </div>

    </div>
  </div>
</section>
@endsection
