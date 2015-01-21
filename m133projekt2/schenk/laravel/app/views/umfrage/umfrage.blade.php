<?php
//   Sicherstellung das eine Session vorhanden ist.
if (Session::has('user')){
?>

<!DOCTYPE html>
<html>
<head>
    <title>Umfrage</title>
    {{ HTML::style('css/look.css');}}
</head>
<body>
<div class="header">
    <h1>Umfrage</h1>
    {{Form::open(array('action' => 'UmfragController@abmelden'))}}
    {{Form::submit('Abmelden')}}
    {{Form::close()}}
</div>
<div class="main">
{{ HTML::ul($errors->all()) }}

{{Form::open(array('action' => 'UmfragController@umfrag'))}}
<table id="umfrage">
    <tr>
        <th>Frage</th>
        <th>Sehr gut</th>
        <th>Gut</th>
        <th>Schlecht</th>
        <th>Sehr schlecht</th>
        <th>Keine Angabe</th>
    </tr>
@for ($i=1; $i<13; $i++)
    <tr>
        <td>{{Frage::find($i)->Frag}}</td>
        <td>{{Form::radio($i, '100')}}</td>
        <td>{{Form::radio($i, '75')}}</td>
        <td>{{Form::radio($i, '25')}}</td>
        <td>{{Form::radio($i, '0')}}</td>
        <td>{{Form::radio($i, '50')}}</td>
    </tr>
@endfor
</table>
{{Form::submit('Senden')}}
{{Form::close()}}
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
    <div class="main">
    <body>
    <h1>Sie müssen sich Regristrieren und anmelden bevor sie die Umfrage oeffnen koennen.</h1>
        {{HTML::link('')}}
    </div>
    </body>
</html>
<?php
    }
?>
