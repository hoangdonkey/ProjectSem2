<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Causes;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CauseController extends Controller
{
    public function causelist()
    {
        $causes = DB::table('causes')
            ->orderBy('cause_id', 'desc')
            ->get();
        return view('causes', ['causes' => $causes]);
    }

    public function cause($cause_id)
    {
        $causes = Causes::where('cause_id', '=', $cause_id)
            ->get()
            ->first();
        $users  = User::where('id', '=', 1)
            ->get()
            ->first();
        return view('causes-single', ['causes' => $causes, 'user' => $users]);
    }
}
