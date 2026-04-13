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
            }
            nav {
                background-color: #333;
                padding: 1em;
            }
            nav a {
                color: white;
                text-decoration: none;
                margin-right: 1em;
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

        </style>

       
    </head>
    <body>

        <nav>
            <a href="/">Home</a> | 
            <a href="/about">About</a> | 
            <a href="/contact">Contact</a>
        </nav>
        
        {{ $slot }}
        



    </body>
</html>