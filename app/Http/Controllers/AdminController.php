<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
	    $this->middleware('role:' . config('app.admin_role'));
    }

    public function show()
    {
        $auth = auth()->user();
        if($auth->has_role(config('app.admin_role'))){
            return redirect()->route('dashboard.search.index');
        }elseif($auth->has_role(2)){
            return redirect()->route('dashboard.users.index');
        }elseif($auth->has_role(3)){
            return redirect()->route('dashboard.search.index');
        }elseif($auth->has_role(4)){
            return redirect()->route('dashboard.person.create');
        }elseif($auth->has_role(5)){
            return redirect()->route('dependence.user_dependence.index');
        }elseif($auth->has_role(6)){
            return redirect()->route('dependence.search_dependence.index');
        }
        return view('home');
    }
}
