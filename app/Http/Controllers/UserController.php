<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        Paginator::useBootstrap();
        $users = User::paginate(5)->withQueryString();
        return view('user-index', compact('users'));
    }
}
