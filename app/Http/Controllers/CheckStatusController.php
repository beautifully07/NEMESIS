<?php

namespace App\Http\Controllers;

use App\Models\CheckStatus;
use Illuminate\Http\Request;

class CheckStatusController extends Controller
{
    public function index()
    {
        $checkstatus = CheckStatus::all();
        $data = ([
            "title" => "data",
            "checkstatus" => $checkstatus
        ]);
        return view('check-status.index', $data);
    }
}
