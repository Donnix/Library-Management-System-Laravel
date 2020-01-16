@extends('books.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Form Buku</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('books.create') }}"> Add New Book</a>
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
            <th>ID BUKU</th>
            <th>NAMA BUKU </th>
            <th>NAMA PENERBIT</th>
            <th>PENGARANG</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($books as $book)
        <tr>
        <td>{{ ++$i }}</td>
            <td>{{ $book->id_buku }}</td>
            <td>{{ $book->nama_buku }}</td>
            <td>{{ $book->nama_penerbit }}</td>
            <td>{{ $book->pengarang }}</td>
            <td>


            
                <form action="{{ route('books.destroy',$book->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $books->links() !!}
      
@endsection