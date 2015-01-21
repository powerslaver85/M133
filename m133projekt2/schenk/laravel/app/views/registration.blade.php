
<html>
<head>
    <title>FantasyFragen</title>
</head>
<body>
    <div id="Nav_Tit">
        <h1>Fantasy-Fragen</h1>
            
     </div>
        <div id="main">
            <h2>Registration</h2>
            
            {{Form::open(array('url' => 'besa'))}}
            <table>
                <tr>
                    <td>
                        {{$errors->first('username', '<span class="error">:message</span>') }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <span href="Darf nur aus mindestens 6 Aplhanummerischen Zeichen bestehen">
                        {{Form::label('username', 'Username')}}
                        </span>
                    </td>
                    <td>
                        {{Form::text('username')}}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{$errors->first('passwd1', '<span class="error">:message</span>') }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <span title="Darf nur aus mindestens 8 Ascii Zeichen zwischen Ascii 33 - 126.">
                        {{Form::label('passwd1', 'Passwort')}}
                        </span>
                    </td>
                    <td>
                        {{Form::password('passwd1')}}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{$errors->first('passwd2', '<span class="error">:message</span>') }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <span href="Muss identisch mit dem oberigen Passwort sein.">
                        {{Form::label('passwd2', 'Passwort wiederholung')}}
                        </span>
                    </td>
                    <td>
                        {{Form::password('passwd2')}}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{$errors->first('vorname', '<span class="error">:message</span>') }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{Form::label('vorname', 'Vorame')}}
                    </td>
                    <td>
                        {{Form::text('vorname')}}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{$errors->first('nachname', '<span class="error">:message</span>') }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{Form::label('nachname', 'Nachname')}}
                    </td>
                    <td>
                        {{Form::text('nachname')}}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{$errors->first('email', '<span class="error">:message</span>') }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{Form::label('email', 'Email')}}
                    </td>
                    <td>
                        {{Form::email('email')}}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{Form::submit('Registrieren')}}
                    </td>
                </tr>
            </table>
            {{Form::close()}}
        </div>
    </body>
</html>