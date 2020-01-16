@extends('navbar.nav')
 
@section('isi')

<form action="" method="post">
    <table>
    <tr>
        <td> Nama Sekolah</td>
    </tr>
    <tr>
        <td><input type="text" name="namasekolah" placeholder="Input Nama" value="{{data->namasekolah}}"></td>
    </tr>
    <tr>
        <td> Alamat</td>
    </tr>
    <tr>
        <td><input type="text" name="alamat" placeholder="Input alamat" value="{{data->alamat}}"></td>
    </tr>
    <tr>
        <td> Jenjang</td>
    </tr>
    <tr>
        <td><input type="text" name="jenjang" placeholder="Input jenjang" value="{{data->jenjang}}"></td>
    </tr>

   
    

    <td>
    <input type="submit" name="save">
    </td>
    </table>    
    
    
    </form>
    @endsection