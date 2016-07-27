<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Team;
use App\Blog;
use DB;

class DashboardController extends Controller
{
   public function index() {

   	$userCount=DB::table('admins')->count();
   	$postCount=DB::table('blog')->count();
   	$teammemberCount=DB::table('teammember')->count();
   	$userAdminstator = DB::table('admins')->where('user_type', '=', '1')->count();
   	$teamList=Team::orderBy('id', 'desc')->take(8)->get();
   	$bloglist=Blog::orderBy('id', 'desc')->take(4)->get();

   	return view('admin.dashboard',compact('userCount','postCount','teammemberCount','userAdminstator','teamList','bloglist'));

   }
}
