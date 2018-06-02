<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Thinker - VUEjs</title>

        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
           
        </style>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <div id="app">
                        <think></think>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.js"></script> --}}
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
