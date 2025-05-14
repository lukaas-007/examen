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
        $wolfPerArea = [];
        foreach ($wolves as $wolf) {
            if (!isset($wolfPerArea[$wolf->area])) {
                // We dont set all the wolf data here, 
                //just the area becouse we check for the other data after this
                $wolfPerArea[$wolf->area] = [
                    'area' => $wolf->area,
                    'amount' => 0,
                    'spotted_dates' => [],
                ];
            }

            $wolfPerArea[$wolf->area]['amount'] += $wolf->amount;
            $wolfPerArea[$wolf->area]['spotted_dates'][] = [
                'date' => $wolf->created_at->format('Y-m-d'),
                'amount' => $wolf->amount
            ];
        }

        return view('overview', [
            'wolves' => $wolves,
            'wolfPerArea' => $wolfPerArea,
        ]);
    }

    public function show() {
        $allWolves = Wolf::all();

        $wolfPerArea = [];

        foreach ($allWolves as $wolf) {
            if (isset($wolfPerArea[$wolf->area])) {
                $wolfPerArea[$wolf->area]['amount'] += $wolf->amount;
            } else {
                $wolfPerArea[$wolf->area] = [
                    'area' => $wolf->area,
                    'amount' => $wolf->amount,
                ];
            }
        }

        return view('add_wolf', [
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
