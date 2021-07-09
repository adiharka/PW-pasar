<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        $role = Auth::user()->role;
        if($role == "admin"){
            return redirect()->to('admin');
            return view('indexToko');
        } 
        else if($role == "user"){
            return redirect()->to('user');
            return view('index');
        } else {
            return redirect()->to('logout');
            return view('login');
        }
    }
}