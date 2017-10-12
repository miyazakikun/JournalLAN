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
              <form class="" action="{{url('admin/profile/'.Auth::user()->id)}}" method="post">
                {{csrf_field()}}
                <div class="form-group col-sm-6 {{ $errors->has('author') ? 'has-error' :'' }}">
                    {!! Form::label('author', 'Username:') !!}
                    {!! Form::text('username', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('author'))
                        @section('scripts')
                            <script type="text/javascript">
                            toastr.error('Data Error', 'Data Penulis Wajib Diisi!')
                            </script>
                        @endsection
                    @endif
                </div>
                <div class="form-group col-sm-12 text-right">
                    <button type="submit" name="button" class="btn btn-danger">Edit</button>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>

    </div>
  </div>
</section>
@endsection
