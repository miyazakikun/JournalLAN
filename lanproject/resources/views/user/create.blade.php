@extends('layouts.app')
@if ($role == 'authors')
  @php
    $title = 'Authors';
  @endphp
@elseif ($role == 'reviewers')
  @php
    $title = 'Reviewers';
  @endphp
@else
  @php
    $title = 'Admin Checkers';
  @endphp
@endif
@section('title','User '.$title)
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Create User {{$title}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::open(['route' => ['user.store', $role],'enctype'=>'multipart/form-data','files' => true]) !!}
                @include('user.form')
                <div class="form-group col-sm-12 text-right">
                    <button type="submit" name="button" class="btn btn-success">Tambah</button>
                </div>
              {!! Form::close() !!}
            </div>
            <!-- /.box-body -->
          </div>

    </div>
  </div>
</section>
@endsection
