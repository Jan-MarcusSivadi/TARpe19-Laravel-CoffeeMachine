<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\CoffeeMachine;
use Illuminate\Http\Request;

class CoffeeMachineController extends Controller
{
    public function index() {
        
        
        // loo uus kohvimasin, kui seda pole veel loodud (et ei tekiks konflikti kohvimasinate arvuga, sest on ainult vaja ühele kasutajale korraga kohvi teha)
        // if($joogid->isEmpty())
        // {
            //     $data = [
                //         'jooginimi' => 'kohv',
                //         'topsepakis' => 50,
                //         'topsejuua' => 2,
                //     ];
                //     CoffeeMachine::create($data);
                // }
                
        // tagasta kohvimasina vaade koos muutujatega
        $joogid = CoffeeMachine::all();
        $count = CoffeeMachine::count();
        return view('coffeeMachine.index', compact('count', 'joogid'));
    }

    public function decrement(CoffeeMachine $machine)
    {
        $machine->decrement('topsejuua');
        return redirect()->back();
    }

    public function admin()
    {
        // tagasta kohvimasina vaade muutujatega
        $joogid = CoffeeMachine::all();
        return view('coffeeMachine.admin', compact('joogid'));
    }


    public function increment(CoffeeMachine $machine)
    {
        $topsepakis = $machine->topsepakis;
        $topsejuua = $machine->topsejuua;
        if ($topsejuua <= $topsepakis) $machine->increment('topsejuua', $topsepakis);
        return redirect()->back();
    }
}
