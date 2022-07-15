<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            html, body {
                width: 100%;
                height: 100%;
            }
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="{{ asset('assets/css/tree.css') }}"/>
    </head>
    <body>
        <button class="btn btn-outline-info">Hello !</button>
        <div class="container-fluid">
            <div class="card bg-light rounded border mx-auto" style="width: 30rem;">
                <div class="card-header">Repository</div>
                <div class="card-body">
                    <ul class="tree">
                        @foreach($repository as $directory)
                            <li>
                                <details>
                                    <summary class="listree-submenu-heading">{{ $directory->name . ' [' . $directory->id . ']' }}</summary>
                                    @if(count($directory->childs))
                                        @include('manageChild',['childs' => $directory->childs])
                                    @endif
                                </details>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <script>
            listree();
        </script>
    </body>
</html>
