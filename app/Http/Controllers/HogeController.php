<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;

class HogeController extends Controller {
  public function show() {
    $blogs = Blog::all();
    return view('hoge', ['message' => 'hogehogefugafuga', 'blogs' => json_encode($blogs)]);
  }
}