<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loket;
use Illuminate\View\View;

class LoketController extends Controller
{
    public function index(): view
    {
        $lokets = Loket::latest('created_at')->paginate(7);

        return View ('back.admin.loket', compact('lokets'));
    }

}
