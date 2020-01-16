@extends('penerbits.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Penerbit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('penerbits.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Penerbit:</strong>
                {{ $penerbit->id }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Penerbit:</strong>
                {{ $penerbit->nama_penerbit }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>alamat Penerbit:</strong>
                {{ $penerbit->alamat_penerbit }}
            </div>
        </div>
    </div>
@endsection