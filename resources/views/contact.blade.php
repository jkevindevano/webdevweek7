<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>My Project</title>
</head>

<body>
    @include('navbar')
    <div>
        <h1>My contact</h1>
        <h2>Hello my name is Kevin</h2>
        <p>Contact me at +62 85877312500</p>
    </div>

</body>

</html>