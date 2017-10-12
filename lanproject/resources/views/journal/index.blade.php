@extends('layouts.app')
@section('title','journals')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Journal</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Penulis</th>
                  <th>Judul</th>
                  <th>Tanggal Terbit</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                  @endphp
                  @foreach (\App\journal::latest()->get() as $journal)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$journal->author}}</td>
                        <td>{{$journal->title}}</td>
                        <td>{{$journal->tglterbit}}</td>
                        <td>{{$journal->status}}</td>
                        <td>
                          {!! Form::open(['route' => ['journals.destroy', $journal->id], 'method' => 'delete']) !!}
                          <div class='btn-group'>
                            <a href="{!! route('journals.show', [$journal->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{!! route('journals.edit', [$journal->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
