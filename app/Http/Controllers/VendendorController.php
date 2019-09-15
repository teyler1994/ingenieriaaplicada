<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;

class VendendorController extends Controller
{
    public function index(){

    	$vendedor = Vendedor::find(1);
    	return $vendedor;
    }
}
