<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        Log::info('log data', ['fruit' => 'apple']);
        Log::info('log data', ['fruit' => 'orange']);

        return view('dashboard');
    }
}
