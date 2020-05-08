<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class BlogAdminController extends Controller
{
public function index(){
    return view('admin.blogAdmin.create');
}
}
