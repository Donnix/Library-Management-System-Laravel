@extends('navbar.nav')
 
@section('isi')

<form action="" method="post">
    <table>
    <tr>
        <td> NIP</td>
    </tr>
    <tr>
        <td><input type="text" name="NIP" placeholder="Input NIP"></td>
    </tr>
  
    <tr>
        <td> Nama</td>
    </tr>
    <tr>
        <td><input type="text" name="nama" placeholder="Input Nama"></td>
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

    <tr>
            <td>    
         Alamat
            </td>
        <td>
        <textarea rows="4" cols="50" name="alamat"  placeholder="Masukan Alamat" >
</textarea>
        </tr>
    <td>
    <input type="submit" name="save">
    </td>
    </table>    
    
    
    </form>
    @endsection