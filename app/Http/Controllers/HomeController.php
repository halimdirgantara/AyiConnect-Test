<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        if(Auth::user()) {
            $user = Auth::user()->first();
            return view('admin.dashboard.index', [
                'user' => $user,
                'domain' => 'ayiconnect-test.test',
            ]);
        } else {
            return redirect()->route('welcome', 'ayiconnect-test.test');
        }

    }
}
