
<html>
    <head>
        <title>Umfrage</title>
        {{ HTML::style('css/look.css');}}
    </head>
    <body>
        <div class="header">
            <h1>Umfrage</h1>
            
        </div>
        <div class="main">
            <h2>Index</h2>
            <?php Session::flush(); ?>
            <a href="{{ URL::to('benutzer/createstore') }}">Regristrieren</a>
            <a href="{{ URL::to('benutzer/createcheck') }}">Login</a>
           
        </div>
    </body>
</html>