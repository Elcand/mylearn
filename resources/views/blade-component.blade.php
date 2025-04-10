<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>halo</h3>
    {{-- <x-alert style="color: red; border: 1px solid green;" text='Test alert!' /> --}}

    @php
        $languages = ['Php', 'Javascript', 'Java', 'Dart', 'C', 'C++'];
    @endphp

    {{-- @foreach ($languages as $language)
        <x-alert :text="$language" />
    @endforeach --}}

    <x-button style="padding: 10px; background: red; color:white;" class="some-class" />
    <x-button style="padding: 10px; background: blue; color:white;" class="some-class" />
</body>

</html>
