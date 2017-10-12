<!-- Title Field -->
<div class="form-group col-sm-6 {{ $errors->has('author') ? 'has-error' :'' }}">
    {!! Form::label('author', 'Penulis:') !!}
    {!! Form::text('author', null, ['class' => 'form-control']) !!}
    @if ($errors->has('author'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data Penulis Wajib Diisi!')
            </script>
        @endsection
    @endif
</div>
<div class="form-group col-sm-6 {{ $errors->has('title') ? 'has-error' :'' }}">
    {!! Form::label('title', 'Judul:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    @if ($errors->has('title'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data Judul Wajib Diisi!')
            </script>
        @endsection
    @endif
</div>
<div class="form-group col-sm-6 {{ $errors->has('tglterbit') ? 'has-error' :'' }}">
    {!! Form::label('tglterbit', 'Tanggal Terbit:') !!}
    {!! Form::date('tglterbit', null, ['class' => 'form-control']) !!}
    @if ($errors->has('tglterbit'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data Tanggal Terbit Wajib Diisi!')
            </script>
        @endsection
    @endif
</div>
<div class="form-group col-sm-6 {{ $errors->has('file') ? 'has-error' :'' }}">
    {!! Form::label('file', 'File Journal:') !!}
    {!! Form::file('file', ['class' => 'form-control']) !!}
    @if ($errors->has('file'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data File Journal Wajib Diisi!')
            </script>
        @endsection
    @endif
</div>
<div class="form-group col-sm-12 {{ $errors->has('keywords') ? 'has-error' :'' }}">
    {!! Form::label('Keywords', 'Keywords:') !!}
    {!! Form::text('keywords', null, ['class' => 'form-control']) !!}
    @if ($errors->has('keywords'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data Keyword Wajib Diisi!')
            </script>
        @endsection
    @endif
</div>
<div class="form-group col-sm-12 {{ $errors->has('abstract') ? 'has-error' :'' }}">
    <div class="box-body pad">
        {!! Form::label('abstract', 'Abstract:') !!}
        {!! Form::textarea('abstract', null,['id' => 'editor1','rows'=>'10','cols'=>'80']) !!}
        @if ($errors->has('abstract'))
            @section('scripts')
                <script type="text/javascript">
                toastr.error('Data Error', 'Data Abstract Wajib Diisi!')
                </script>
            @endsection
        @endif
    </div>
</div>
<div class="form-group col-sm-12 {{ $errors->has('references') ? 'has-error' :'' }}">
    <div class="box-body pad">
        {!! Form::label('references', 'Refrensi:') !!}
        {!! Form::textarea('references', null,['id' => 'editor2','rows'=>'10','cols'=>'80']) !!}
        @if ($errors->has('references'))
            @section('scripts')
                <script type="text/javascript">
                toastr.error('Data Error', 'Data Refrensi Wajib Diisi!')
                </script>
            @endsection
        @endif
    </div>
</div>
