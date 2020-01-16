@extends('penerbits.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Form Penerbit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('penerbits.create') }}"> Add New Penerbit</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
        <td>NO</td>
            <th>ID PENERBIT</th>
            <th>NAMA PENERBIT</th>
            <th>ALAMAT PENERBIT</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($penerbits as $penerbit)
        <tr>
        <td>{{ ++$i }}</td>
            <td>{{ $penerbit->id }}</td>
            <td>{{ $penerbit->nama_penerbit }}</td>
            <td>{{ $penerbit->alamat_penerbit }}</td>
            <td>
                <form action="{{ route('penerbits.destroy',$penerbit->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('penerbits.show',$penerbit->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('penerbits.edit',$penerbit->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $penerbits->links() !!}
      
@endsection