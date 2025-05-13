<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wolf;

class wolfControlller extends Controller
{
    public function overview()
    {
        $wolves = Wolf::orderBy('id', 'desc')->get();

        return view('overview', [
            'wolves' => $wolves,
        ]);
    }

    public function add() {
        $wolf = new Wolf();
        $wolf->amount = request('amount');
        $wolf->area = request('area');

        $wolf->save();
    
        return redirect()->route('overview')->with('success', 'Wolf added successfully!');
    }
}
