<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Lecturer</title>
</head>

<body>
    @include('navbar')
    <div>
        <h1>Lecturer</h1>
    </div>
    <div>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Is active</th>
                <th>Faculty</th>
                <th>Action</th>
                
            </tr>
            @foreach ($lecturers as $lec)
            <tr>

                <td>{{ $lec->name }}</td>
                <td>{{ $lec->email }}</td>
                <td>{{ $lec->isActive == 1 ? 'Active' : 'Deactive' }}</td>
                <td>{{ $lec->faculty }}</td>
                <td>
                    <div class="action-buttons">
                        <a href="{{ route('lecturers.edit', $lec) }}" class="btn btn-edit">Edit</a>
                        <form action="{{ route('lecturers.destroy', $lec) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data dosen ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
    <div class="add-container">
        <a href="{{ route('lecturers.create') }}" class="btn btn-add">+ Add New Lecturer</a>
    </div>
</body>

</html>