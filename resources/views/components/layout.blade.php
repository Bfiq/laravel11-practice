<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$metaTitle ?? 'default'}}</title>{{--Se trabaja como los noNull de Flutter--}}
</head>
<body>
    {{-- @include('partials.navigation') --}}
    <x-navigation />
    {{ $slot }} {{--Igual a children de react--}}

    @isset($dataExtra) {{--Similar a las plantillas de jinja con Django--}}
        <div id="dataExtra">
            <h3>Datos extra</h3>
            <p>{{$dataExtra}}</p>
        </div>
    @endisset
</body>
</html>