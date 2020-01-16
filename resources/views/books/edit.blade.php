@extends('books.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Book</h2>
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
  
    <form action="{{ route('books.update',$book->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Buku:</strong>
                    <input type="text" name="id_buku" value="{{ $book->id_buku}}" class="form-control" placeholder="Masukan ID Buku">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Buku :</strong>
                    <input type="text" name="nama_buku" value="{{ $book->nama_buku }}" class="form-control" placeholder="Masukan Nama Buku">
                </div>
            </div>
           

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Penebit</strong>
                <select class="form-control" name="nama_penerbit" id="penerbit">
                    @foreach($penerbits as $penerbit)
                    <option value="{{$penerbit->nama_penerbit}}" @if($book->nama_penerbit == $penerbit->nama_penerbit)selected @endif>{{$penerbit->nama_penerbit}}</option>
                    @endforeach
                </select>
            </div>
        </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pengarang:</strong>
                    <input type="text" name="pengarang" value="{{ $book->pengarang }}" class="form-control" placeholder="Masukan Pengarang">
                </div>
            </div>



            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection