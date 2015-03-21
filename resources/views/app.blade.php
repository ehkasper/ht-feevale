<!DOCTYPE html>

<html lang="en" ng-app="FornApp">
    <head>
        <title>HT Feevale</title>
        {!! Html::style('bootstrap/css/bootstrap.css') !!}
    </head>

    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand">HT Feevale</a>
                </div>
            </div>
        </nav>
        
        <div class="container">
            @include('users.alerts')

            @yield('content')
        </div>
    </body>
</html>