<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else

        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
   <form action="" method="post" enctype="multipart/form-data">
    @csrf
       <input type="text" name="title" placeholder="enter title">
       <input type="email" name="title" placeholder="enter title">
       <textarea name="desc">
           
       </textarea> 
       <input type="checkbox" name="">
       <input type="radio" name="">
       <input type="password" name="">
       <input type="date" name="">
       <input type="time" name="">
       <input type="month" name="">
       <input type="color" name="">
       <input type="button" name="" value="This is button">
       <input type="file" name="file">
       <input type="submit" title="Submit">
    </form>

    </body>
</html>
