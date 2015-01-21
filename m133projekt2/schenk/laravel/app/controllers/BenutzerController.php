<?php

//      Ein Controller wird verwendet um das Routing zu organiesieren.
//      In diesem Controller werden die Benutzung der Benutzer Table organisiert.

class BenutzerController extends \BaseController {



    public function createstore()
    {
        // Erstellung der Webseite der Registrierung
        return View::make('benutzer.createstore');
    }

    public function store()
    {
        //  Validation des Inputs der Regristrierung und eintrag in die Entsprechenden Table
        $rules = array(
            'username' => 'required|alpha_num|min:6|unique:benutzer,username',
            'passwd1' => 'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\21-\xFF]).{8,}$/',
            'passwd2' => 'required|same:passwd1',
            'vorname' => 'required|alpha',
            'nachname' => 'required|alpha',
            'email' => 'required|email|unique:benutzer,email'
        );

        $validator = Validator::make(Input::all(), $rules);

        //VALIDIERUNG

        if ($validator->passes()){

            $benutzer = new User;
            $benutzer->username     =Input::get('username');
            $benutzer->password       =Hash::make(Input::get('passwd1'));
            $benutzer->vorname      =Input::get('vorname');
            $benutzer->nachname     =Input::get('nachname');
            $benutzer->email        =Input::get('email');
            $benutzer->save();

            Session::flash('message', 'Neuer Benutzer wurde erstellt');
            return Redirect::to('/');
        } else {
            return Redirect::to('benutzer/createstore')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }
    }

    public function createcheck()
    {
        //  Erstellung der Webseite des Login
        return View::make('benutzer.createcheck');
    }

    public function check()
    {
        //  Überprüfung der eingegebenen Daten mit den Vorhandenen Daten

            $yourBag = new Illuminate\Support\MessageBag;
            $yourBag->add('password', 'Fehler beim Username oder Passwort.');

        $username   =   Input::get('username');
        $password   =   Input::get('password');

        if (Auth::attempt(array('username' => $username, 'password' => $password)))            {
            $id = DB::table('benutzer')->where('username', Input::get('username'))->pluck('id');
            $true = DB::table('antwort')->where('fk_benutzer', $id)->pluck('fk_benutzer');

            Session::put('user', $id);

            //Wenn keine FK User -> Neue Umfrage
            if($true == ''){
                return Redirect::to('umfrage/createumfrag');
            }else{
                return Redirect::action('UmfragController@auswertung');
            }




        } else {
            return Redirect::to('benutzer/createcheck')
                ->withErrors($yourBag)
                ->withInput(Input::except('password'));
        }
    }


}
