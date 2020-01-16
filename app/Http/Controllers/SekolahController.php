<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public  function index(){
$data=DB::table('sekolah')->first();
return view(sekolah/index)
->wtih(da)

    }
}
