<?php

namespace App\Http\Controllers;

use App\Models\Loket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoketController extends Controller
{
    protected $role;
    public function __construct()
    {
        $this->middleware(function($request, $next){
            // dd($request);
            $user = Auth::user();
            $this->roles = $user->role;

            if ($this->role > 1) {
                $this->profile = [$user->Pegawai];
            } else {
                $this->profile = [$user->Admin];
            }

            return $next($request);

        });
    }

    public function getLoket()
    {
        $data = Loket::all();

        return view('laporan.loket', compact('data'));
    }

    
}
