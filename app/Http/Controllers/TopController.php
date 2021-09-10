<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{
    public function index()
    {
        $causes = DB::table('causes')
            ->orderBy('cause_id', 'desc')
            ->limit(4)
            ->get();
        return view('index', ['causes' => $causes]);
    }
}
