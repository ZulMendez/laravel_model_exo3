<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $membres = Membre::all();
        $hommes = Membre::where('genre', 'Homme')->get();
        $femmes = Membre::where('genre', 'Femme')->get();
        $hommesCondit = DB::table('membres')->whereBetween('age', [18, 24])->where('genre', 'Homme')->get();
        $femmesCondit = DB::table('membres')->whereBetween('age', [18, 24])->where('genre', 'Femme')->get();
        $horsCondit = DB::table('membres')->whereNotBetween('age', [18, 24])->get();
        return view ('home', compact('membres', 'hommes', 'femmes', 'hommesCondit', 'femmesCondit', 'horsCondit'));
    }
}
