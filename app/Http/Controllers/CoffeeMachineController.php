<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\CoffeeMachine;
use Illuminate\Http\Request;

class CoffeeMachineController extends Controller
{
    public function index() {
        
        $machines = CoffeeMachine::all();

        // loo uus kohvimasin, kui seda pole veel loodud (et ei tekiks konflikti kohvimasinate arvuga, sest on ainult vaja ühele kasutajale korraga kohvi teha)
        if($machines->isEmpty())
        {
            $data = [
                'jooginimi' => 'kohv',
                'topsepakis' => 0,
                'topsejuua' => 0,
            ];
            CoffeeMachine::create($data);
        }

        // tagasta kohvimasina vaade (koos $count muutujaga) 
        $count = CoffeeMachine::count();
        return view('coffeeMachines.index', compact('count', 'machines'));
    }
}
