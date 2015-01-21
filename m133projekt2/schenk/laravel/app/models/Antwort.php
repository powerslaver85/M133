<?php

//      Hierbei handelt es sich um ein Eloquent Model hiermit wird eine Table verbunden. 
//      Die entsprechende Datenbank ist die Antwort Tabelle

class Antwort extends Eloquent{
    protected  $table = 'antwort';
    public $timestamps = false;
}

