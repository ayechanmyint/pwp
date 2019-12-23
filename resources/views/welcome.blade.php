<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
<!--         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <!-- Styles -->
<!--         <link rel="stylesheet" href="css/app.css"> -->

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>
    <body>
        <div id="app">
            <heading> </heading>

            <tabs>
                <tab name="Home" selected="true">
                   <home> </home>
                </tab>

                <tab name="About us" >
                   <about> </about>
                </tab>

                <tab name="Contact us another">
                    <contact> </contact>
                </tab>
            </tabs>

            <page-foot> </page-foot>
        </div>
    <script src="/js/app.js"></script>
    </body>
</html>
