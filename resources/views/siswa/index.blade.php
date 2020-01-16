@extends('navbar.nav')
 
@section('isi')

<form action="" method="post">
    <table>
    <tr>
        <td> Nama</td>
    </tr>
    <tr>
        <td><input type="text" name="nama" placeholder="Input Nama"></td>
    </tr>
    <tr>
        <td> Rayon</td>
    </tr>
    <tr>
        <td><input type="text" name="rayon" placeholder="Input Rayon"></td>
    </tr>
    <tr>
        <td> Rombel</td>
    </tr>
    <tr>
        <td><input type="text" name="rombel" placeholder="Input Rombel"></td>
    </tr>

   
    <tr>
        <td>
    Jenis Kelamin
        </td>
    </tr>
    <tr>    
        <td>
        <select name="jk"  >
    <option value="Laki-laki">laki-laki</option>
    <option value="Perempuan" >Perempuan</option>
        </td>
    </tr>

    <td>
    <input type="submit" name="save">
    </td>
    </table>    
    
    
    </form>
    @endsection