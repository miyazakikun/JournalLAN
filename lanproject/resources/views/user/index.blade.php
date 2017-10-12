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
              <h3 class="box-title">Data {{$title}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama {{$title}}</th>
                  <th>Username</th>
                  <th>Email {{$title}}</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($data as $user)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->username}}</td>
                      <td>{{$user->email}}</td>
                      <td>
                        {!! Form::open(['route' => ['user.destroy', $user->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                          {{-- <a href="{!! route('user.show', [$role,$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a> --}}
                          <a href="{!! route('user.edit', [$role,$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                          {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

    </div>
  </div>
</section>
@endsection
