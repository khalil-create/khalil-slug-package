<?php
namespace khalil\slug2\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class SlugController extends Controller{
    public function index(){
        $slug = Str::slug('web developer laravel');
        return view('khalil/slug2::slug', compact('slug'));
    }
}
