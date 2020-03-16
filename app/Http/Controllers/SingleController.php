<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SingleController extends Controller
{
    public function first()
    {
        $hand = [];
        while(count($hand) !== 5) {
            $number = rand(1, 40);
            if (!in_array($number, $hand)) {
                $hand[] = $number;
            }
        }

        $data['hand'] = $hand;
                
        return view('single', $data);
    }
    
    public function draw(Request $request)
    {
        $hand = $request->hand;
        while(count($hand) !== 6) {
            $number = rand(1, 40);
            if (!in_array($number, $hand)) {
                $hand[] = $number;
            }
        }
        
        $data['hand'] = $hand;
        $data['discarded'] = $request->discarded;
                
        return view('single', $data);
    }
    
    public function discard(Request $request)
    {
        $number = $request->number;
        
    }
}
