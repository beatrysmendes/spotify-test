<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    @for ($i = 0; $i < 10; $i++)
        @if($i < 5)
            <span>Contador = {{ $i }} </span>
        @else
            <span style="color: red">Contador = {{ $i }} </span>
        @endif
    @endfor
</body>
</html>