<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    protected $role;
    protected $profile;

    public function __construct()
    {
        $this->middleware(function($request, $next){
            // dd($request);
            $user = Auth::user();
            $this->roles = $user->role;

            if ($this->role > 1) {
                $this->profile = [$user->Admin];
            } else {
                $this->profile = [$user->Loket];
            }

            return $next($request);

        });
    }
    
    public function getHome()
    {
        $role = auth()->user()->fk_role;

        return view('dashboard.home.switcher', [
            'role' => $role
        ]);
    }
}
