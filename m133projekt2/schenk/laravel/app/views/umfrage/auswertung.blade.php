<?php

// Wichtige Seiten :    http://www.chartjs.org/docs/

//  Siecherstellung das eine Session vorhanden sind.
if (Session::has('user')){
?>

<!DOCTYPE html>
<html>
<head>
    {{ HTML::style('css/look.css');}}
    <script>
        var spider = <?php echo '"Test"' ?> ;
    </script>

<?php

$id = Session::get('user');

$benutzer = DB::table('antwort')->where('fk_benutzer', $id)->lists('WERT');
$username = DB::table('benutzer')->where('id', $id)->pluck('username');
$andere = array_unique(DB::table('antwort')->where('fk_benutzer', '!=', $id)->lists('fk_benutzer'));

$antwortenProBenutzer = array();

$alleFragen = Frage::all();

$alleFragenAlsArray = Array();

foreach($alleFragen as $f) {
    $alleFragenAlsArray[$f->Id] = $f->Frag;
}
foreach($andere as $a) {
    $antwortenProBenutzer[$a] = DB::table('antwort')->where('fk_benutzer', $a)->lists('WERT');
}

$alleAngaben = Array();

//Zuständig für Prozentabweichung von Fremdbenutzer
foreach($andere as $k){
    $D = 0;
    for($i = 0; $i < 12; $i++){
        if($benutzer[$i] == $antwortenProBenutzer[$k][$i]){
            $D+=1;
        }
    }
    $alleAngaben[$k] = $D;
}
//Sortieren nach Grösse ASC
arsort($alleAngaben);
$keys =array_keys($alleAngaben);

$spieder= array(
    '0'           =>  ($benutzer[0]+$benutzer[1])/2,
    '1'         =>  ($benutzer[2]+$benutzer[3])/2,
    '2'  =>  ($benutzer[4]+$benutzer[5])/2,
    '3'     =>  ($benutzer[6]+$benutzer[7])/2,
    '4'          =>  ($benutzer[8]+$benutzer[9])/2,
    '5'       =>  ($benutzer[10]+$benutzer[11])/2

);
?>
    <title>Umfrage</title>

    {{HTML::script('js/Chart.js-master/Chart.js') }}



</head>
<body>
<div class="header">

<h1>Auswertung</h1>


    {{Form::open(array('action' => 'UmfragController@abmelden'))}}
    {{Form::submit('Abmelden')}}
    {{Form::close()}}

    </div>
<div class="main">
    <br/><!--SpiderDiagramm Definieren & Generieren -->
    <div id="radar">
        Aktueller Benutzer: <br/>
        {{$username}}<br/>
        <canvas id="diagramm" width="400" height="400"></canvas><!--Zwei Fragen = 1 Thema -->
    <script>
        var data = {
        labels: ["Kontakt", "Angebot", "Leistung", "Support", "Image", "Zufriedenheit"],
        datasets: [
            {
                label: "Benutzer",
                fillColor:  "rgba(220, 220,220,0.2)",
                strokeColor:    "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor:   "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke:   "rgba(220,220,220,1)",
                data:   [{{$spieder[0]}}, {{$spieder[1]}}, {{$spieder[2]}}, {{$spieder[3]}}, {{$spieder[4]}}, {{$spieder[5]}}]
            }

        ]
    };

    window.onload= function(){
        window.mydiagramm = new Chart(document.getElementById("diagramm").getContext("2d")).Radar(data, {
            scaleOverride: true,
            scaleSteps: 100,
            scaleStepWidth: 1,
            scaleStartValue: 0,
            angleLineColor : "rgba(0,0,0,1)",
            scaleLineColor: "rgba(0,0,0,1)",
        });
    }


    </script>
    </div>
<table class="table">

    <tr>
        <th>Nr.</th>
        <th>Username</th>
        <th>%</th>
        <th>Uebereinstimmung</th>
    </tr>
<?php $zähler=0 ?>
@foreach($alleAngaben as $aa)
    <tr>
        <td>{{$keys[$zähler]}}</td>
        <td>{{DB::table('benutzer')->where('id', $keys[$zähler])->pluck('username')}}</td>
        <td>{{($aa/12)*100}}</td>
        <td><div class="balken" style="width:<?php echo ($aa/12)*100;  ?>px;"> </div></td>
    </tr>
<?php $zähler++ ?>
@endforeach
</table>
    <br/>
</div>



</body>
</html>


<?php
    }else{
        ?>
<html>
<head>
    <title>ERROR EINLOGEN</title>
</head>
    <body>
        <div class="main">
    <h1>Sie müssen sich Regristrieren und anmelden bevor sie die Umfrage oeffnen koennen.</h1>
        {{HTML::link('')}}
        </div>
    </body>
</html>
<?php
    }
?>
