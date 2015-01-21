<?php

//      Hierbei handelt es sich um ein Eloquent Model hiermit wird eine Table verbunden. 
//      Die entsprechende Datenbank ist die Frage Table

class Frage extends Eloquent{
    protected  $table = 'frage';
}

return Frage::all()->toArray();