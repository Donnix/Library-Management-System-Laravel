<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   
    protected $fillable =[
'id_buku','nama_buku','nama_penerbit','pengarang'
    ];
}
