<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else

        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
   <h1>All Posts</h1> <a href="{{ url('addpost') }}">Add post </a>
    @foreach($posts as $post)
    <h3 class="h-color">{{ $post->title}} </h3>
    <p>{{ $post->desc}} </p>
    <img src="{{ asset('upload/'.$post->file) }}" class="imges">
    <a href="{{ url('post/'.$post->id) }}">View Post</a>
    <a href="{{ url('editpost/'.$post->id) }}">Edit</a>
    <a href="{{ url('deletepost/'.$post->id) }}">Delete</a>
    @endforeach

   </body>
</html>
