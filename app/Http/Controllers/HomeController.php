<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function Home () {
        return view('Home');
    }
    function Admin()
    {
        return view('Admin.Index');
    }
     function AddProduct()
    {
        return view('Admin.Add-Product');
    }
     function EditProduct()
    {
        return view('Admin.Edit-Product');
    }
     function DeleteProduct()
    {
        return view('Admin.Delete-Product');
    }
    function CategoryAdmin(){
        return view('Admin.Category');
    }
     function UsersAdmin(){
        return view('Admin.Users');
    }
}
