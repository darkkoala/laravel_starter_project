@props([
    'title' => 'Learning Laravel'
])


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                margin: 0;
                padding: 0;
                color: lightgray;
            }
            nav {
                background-color: #333;
                padding: 1em;
            }
            nav a {
                color: white;
                text-decoration: none;
                margin-right: 1em;
                 margin-left: 1em;
            }
            nav a:hover {
                text-decoration: underline;
            }

            .card {
                background-color: #a8c6e4;
                padding: 1rem;
                text-align: center;
            }

            .max-width-400 {
                max-width: 400px;
                margin: 0 auto;
            }

            div { padding-top: 1rem; }

            h1 { 
                color: white;
                font-size: 2rem;
                font-weight: bold;
             }

             h2 { 
                color: white;
                font-size: 1rem;
                font-weight: bold;
             }



        </style>

        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

       
    </head>
    <body class="bg-gray-700 p-6 max-wl-xl mx-auto">

        <nav>
            <a href="/">Home</a> | 
            <a href="/about">About</a> | 
            <a href="/contact">Contact</a> | 
            <a href="/ideas">Ideas</a>
        </nav>
        
        {{ $slot }}
        



    </body>
</html>