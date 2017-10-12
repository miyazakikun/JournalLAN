<input type="hidden" name="role" value="{{$role}}">
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
            toastr.error('Data Error', 'Data Email Wajib Diisi!')
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
