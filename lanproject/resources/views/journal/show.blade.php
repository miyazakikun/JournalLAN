@extends('layouts.app')
@if ($data->status == 'proses')
  @php
    $title = 'Journal Sedang Dalam Proses Pengecekan';
  @endphp
@elseif ($data->status == 'lolos')
  @php
    $title = 'Journal Sedang Dalam Pengecekan Ahli Untuk Dipublikasikan';
  @endphp
@elseif ($data->status == 'tidaklolos')
  @php
    $title = 'Journal Tidak Lolos Karna Tidak Memenuhi Sarat';
  @endphp
@else
  @php
    $title = 'Jounal Lolos Tetapi dengan Revisi';
  @endphp
@endif
@section('title','journals')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">{{$data->title}}
                <small class="text-muted">({{$title}})</small>
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <div class="form-group">
                  {!! Form::label('title', 'Title:') !!}
                  <p>{!! $data->title !!}</p>
              </div>

              <div class="form-group">
                  {!! Form::label('Author', 'Author:') !!}
                  <p>{!! $data->author !!}</p>
              </div>

              <div class="form-group">
                  {!! Form::label('Abstract', 'Abstract:') !!}
                  <p>{!! $data->abstract !!}</p>
              </div>

              <div class="form-group">
                  {!! Form::label('Keywords', 'Keywords:') !!}
                  <p>{!! $data->keywords !!}</p>
              </div>

              <div class="form-group">
                  {!! Form::label('file', 'File Journal:') !!}
                  <p>
                    <a href="{{asset('file/journal/'.$data->file)}}" download class="btn btn-default">Download Journal</a>
                    <iframe src="{{asset('file/journal/'.$data->file)}}" width="100%" height="500"></iframe>
                  </p>
              </div>

              <div class="form-group">
                  {!! Form::label('created_at', 'Dibuat Tanggal:') !!}
                  <p>{!! $data->created_at !!}</p>
              </div>
            </div>
            <!-- /.box-body -->
          </div>

    </div>
  </div>
</section>
@endsection
