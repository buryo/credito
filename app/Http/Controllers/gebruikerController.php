<?php

namespace App\Http\Controllers;

use App\Organisaties;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class gebruikerController extends Controller
{
    public function indexPage($organisatie)
    {
        $organisatie = DB::table('organisaties')->where('naam', $organisatie)->first();

        return view('gebruikers.medewerkerAanmaken', compact('organisatie'));
    }

    public function getUser($id)
    {
        $medewerker = User::find($id);
        return view('gebruikers.gebruiker', compact('medewerker'));
    }

    public function store(Request $request)
    {
        $this->validate(\request(), [
            'id_organisatie' => 'required',
            'name' => 'required',
            'tussenvoegsel' => 'max:255',
            'achternaam' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);

        User::create([
            'id_organisatie' => $request['id_organisatie'],
            'name' => $request['name'],
            'tussenvoegsel' => $request['tussenvoegsel'],
            'achternaam' => $request['achternaam'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);

        $gebruiker = $request;
        return view('gebruikers.greetings', compact('gebruiker'));

    }

    public function getAllUsers($organisatie){
        $medewerkers = DB::table('users')->where('id_organisatie', $organisatie)->get();
        return view('gebruikers.gebruiker-zoeken', compact('medewerkers'));
    }

    public function delete(Request $request)
    {
        $checkedCheckboxes = $request->checkbox;

        DB::table('users')->whereIn('id', $checkedCheckboxes)->delete();

        return back();
    }

    public function updateUser(Request $request, $id)
    {
        $data = $request->validate([
            'id_organisatie' => 'required|max:255',
            'name' => 'required|max:255',
            'tussenvoegsel' => 'max:255',
            'achternaam' => 'required|max:255',
            'email' => 'required|max:255'
        ]);

        User::where('id', $id)->update(array(
            'id_organisatie' => $data['id_organisatie'],
            'name' => $data['name'],
            'tussenvoegsel' => $data['tussenvoegsel'],
            'achternaam' => $data['achternaam'],
            'email' => $data['email']
        ));

        return back();
    }
}
