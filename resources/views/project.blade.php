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
        <h1>My project</h1>
    </div>
    <div>
        <table>
            <tr>
                <th>No</th>
                <th>Project</th>
                <th>Semester</th>
                <th>Description</th>
                <th>Time Created</th>
                <th>Is Finish</th>
                
            </tr>
            @foreach ($projects as $pro)
            <tr>

                <td>{{ $pro->id }}</td>
                <td>{{ $pro->title }}</td>
                <td>{{ $pro->semester }}</td>
                <td>
                   {{ $pro ->description}}
                </td>
                <td>{{ $pro->projectStart }}
                </td>
                <td>{{ $pro->isProjectFinished }}
                </td>
            </tr>
            @endforeach

        </table>
    </div>
</body>

</html>