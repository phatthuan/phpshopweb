<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Index(){
        return view('admin.home', [
            'title' => 'Trang quản trị admin'
        ]);
    }
}
