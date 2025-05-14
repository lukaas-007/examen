<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wolf;

class wolfControlller extends Controller
{
    public function overview()
    {
        $wolves = Wolf::orderBy('id', 'desc')->get();

        // instead of displaying the wolf data we want to show it per area
        // (Area: xx, spotted: xx, spotted_dates: [])
        $wolfPerArea = [];
        foreach ($wolves as $wolf) {
            if (!isset($wolfPerArea[$wolf->area])) {
                $wolfPerArea[$wolf->area] = [
                    'area' => $wolf->area,
                    'amount' => 0,
                    'spotted_dates' => [],
                ];
            }

            $wolfPerArea[$wolf->area]['amount'] += $wolf->amount;
            $wolfPerArea[$wolf->area]['spotted_dates'][] = $wolf->created_at->format('Y-m-d');
        }

        return view('overview', [
            'wolves' => $wolves,
            'wolfPerArea' => $wolfPerArea,
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
