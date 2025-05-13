<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wolf;

class wolfControlller extends Controller
{
    public function overview()
    {
        // Fetch all wolves from the database
        $wolves = Wolf::all();

        return view('overview', [
            'wolves' => $wolves,
        ]);
    }
}
