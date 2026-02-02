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
     <form method="post" action="{{ route('home.calculate')}}">
        @csrf
        <input type="text" name="a" placeholder="enter first value">
        <select name="operation">
            <option value="plus"> + </option>
            <option value="minus"> - </option>
            <option value="multi"> * </option>
            <option value="divide"> / </option>
            <option value="divide"> % </option>
        </select>
        <input type="text" name="b" placeholder="enter second  value">
        <input type="submit" value="Calculate">

     </form>
     <h3>Caculater Result</h3>
    <table class="table-auto">
  <thead>
    <tr>
      <th>Fisrt Value</th>
      <th>Second Value</th>
      <th>Operation</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
    @foreach($results as $result)
    <tr>
      <td>{{$result->a }}</td>
      <td>{{$result->b }}</td>
      <td>{{$result->operation }}</td>
      <td>{{$result->result }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<ul>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
  <li>Next</li>
</ul>
<img src="{{ asset('images/4.png') }}" style="width: 300px">
    </body>
</html>
