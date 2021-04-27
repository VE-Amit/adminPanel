<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct(){
        $users = User::all();
        $subs = Subscription::all();
        $categories = Category::all();
        $companies = Company::all();
        view()->share('users',$users);
        view()->share('subs',$subs);
        view()->share('categories',$categories);
        view()->share('companies', $companies);
    }
    public function dashboard(){
        // dd(Auth::User()->role_id);
        return view('admin.dashboard');
    }
}
