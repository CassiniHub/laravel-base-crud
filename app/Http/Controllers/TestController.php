<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ospiti;

class TestController extends Controller
{
    public function home() {
        $ospiti = Ospiti::all();

        return view('pages.home', compact(
            'ospiti'
        ));
    }

    public function ospite($id) {
        $ospite = Ospiti::findOrFail($id);

        return view('pages.ospite', compact(
            'ospite'
        ));
    }

    public function createOspite() {
        return view('pages.createOspite');
    }

    public function storeOspite(Request $request) {
        dd($request -> all());
    }
}
