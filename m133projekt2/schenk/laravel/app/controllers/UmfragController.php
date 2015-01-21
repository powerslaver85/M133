<?php


class UmfragController extends \BaseController {

    //  Erstellung der Umfrage Webseite
    public function createumfrag(){
        if(Session::has('user')){
            return View::make('umfrage.umfrage');
        } else {
            return Redirect::to("/");
        }
}

    //  Validation und Eintrag der Webseite in die Antwort Table
public function umfrag(){
    if(Session::has('user')){

        $rules = array(
        '1' => 'required',
        '2' => 'required',
        '3' => 'required',
        '4' => 'required',
        '5' => 'required',
        '6' => 'required',
        '7' => 'required',
        '8' => 'required',
        '9' => 'required',
        '10' => 'required',
        '11' => 'required',
        '12' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);


        //Erstellt Umfrage
        if ($validator->passes()){
            $session = Session::get('user');
            for($i=1; $i<13; $i++){
                DB::table('antwort')->insert(
                    array('WERT' => Input::get($i), 'fk_frage' => $i, 'fk_benutzer' => $session)
                );
            }
            return Redirect::to('umfrage/auswertung');
        } else {
            return Redirect::to('umfrage/createumfrag')->withErrors($validator);
        }

    } else {
        return Redirect::to("/");
    }
}

    //  Erstellung der Auswertungs Webseite
public function auswertung(){
    if(Session::has('user')){
        return View::make('umfrage.auswertung');
    } else {
        return Redirect::to("/");
    }
}

    // Eine Function mit dem man sich Abmelden kann.
public function abmelden(){
    if(Session::has('user')){
        Session::forget('user');
        return Redirect::to('/');
    } else {
        return Redirect::to("/");
    }
}
}
