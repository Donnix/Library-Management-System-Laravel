@extends('books.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Book</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('books.store') }}" method="POST">
    @csrf
  
     <div class="row">

     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID BUKU</strong>
                <input type="text" name="id_buku" class="form-control" placeholder=" Masukan ID BUKU">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Buku</strong>
                <input type="text" name="nama_buku" class="form-control" placeholder="Masukan Nama Buku">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Penebit</strong>
                <select class="form-control" name="nama_penerbit" id="nama_penerbit">
                @foreach($penerbits as $penerbit)
                <option value="{{$penerbit->nama_penerbit}}">{{$penerbit->nama_penerbit}}</option>
                @endforeach
                </select>
            </div>
        </div>
      
      
       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pengarang</strong>
                <input type="text" name="pengarang" class="form-control" placeholder="Masukan Pengarang">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection