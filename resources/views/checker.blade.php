<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    @include('navbar')
    <h1>Blade Checkerboard</h1>
    <table>
        @for ($i = 0; $i < 8 ; $i++)
        <tr>
            @for ($j = 0; $j < 8 ; $j++)
                @if(($i+$j)% 2==0)
                    <td class="white"></td>
                @else
                    <td class="black"></td>
                @endif
            @endfor
        </tr>
        @endfor
    </table>
    
</body>
</html>