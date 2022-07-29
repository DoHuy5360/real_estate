<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body{
                background-color: #F3F4F6; 
            }
            .frame__password--forgot{
                width: 450px;
                display: flex;
                flex-direction: column;
                height: fit-content;
                gap: 15px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                justify-content: center
            }
            .frame__password--forgot a{
                width: fit-content;
                align-self: center;
            }
            .frame__provide--information{
                padding: 20px;
                display: flex;
                flex-direction: column;
                gap: 15px;
                border-radius: 10px;
                background-color: white;
                box-shadow: 0 4px 6px -1px #0000001a, 0 2px 4px -2px #0000001a;
            }
            #input__email--provide{
                height: 40px;
                border-radius: 5px;
                outline: none;
                border: 1px solid #d6d6d6;
                font-size: 20px;
                padding: 5px;
                background-color: #E8F0FE;
            }
            .frame__provide--information button{
                width: fit-content;
                align-self: center;
                background-color: #1F2937;
                border-radius: 5px;
                border: unset;
                color: white;
                padding: 10px 20px;
                cursor: pointer;
            }
            .frame__provide--information button:hover{
                background-color: #374151;
            }
        </style>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
