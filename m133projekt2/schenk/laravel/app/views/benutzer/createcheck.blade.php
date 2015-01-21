<!DOCTYPE html>
<html>
<head>
    <title>Umfrage</title>
{{ HTML::style('css/look.css');}}
</head>
<body>
<div class="header">
<h1>Login</h1>
</div>
<div class="main">


<h2>Registration</h2>
    
    <!-- Hier werden die Fehler des Login ausgegeben -->
    {{ HTML::ul($errors->all()) }}
    
            {{Form::open(array('url' => 'benutzer/check'))}}
            <table id="login">
                <tr>
                    <td>
                        {{Form::label('username', 'Username')}}
                    </td>
                    <td>
                        {{Form::text('username')}}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{Form::label('password', 'Passwort')}}
                    </td>
                    <td>
                        {{Form::password('password')}}
                    </td>
                </tr>
                
            </table>
    {{Form::submit('Registrieren')}}
            {{Form::close()}}

</div>
</body>
</html>