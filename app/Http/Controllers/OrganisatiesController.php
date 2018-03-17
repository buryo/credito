<?php

namespace App\Http\Controllers;

use App\Organisaties;
use App\Users;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrganisatiesController extends Controller
{
    public function index()
    {
        if($user = Auth::user())
        {
            $organisaties = Organisaties::all();
            return view('organisaties', compact('organisaties'));
        }else{
            return view('auth.login');
        }
    }

    public function show($id)
    {
        if($user = Auth::user())
        {
            $organisatie = DB::table('organisaties')->where('naam', $id)->pluck('naam');
            $medewerkers = Users::all()->where('id_organisatie' , $id);

//            dd($organisatie);
            return view('organisaties.organisatie', compact('organisatie', 'medewerkers'));
        }else{
            return view('auth.login');
        }
    }
}
