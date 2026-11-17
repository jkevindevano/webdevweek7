<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Lecturer</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    @include('navbar')

    <div class="form-wrapper">
        <div class="form-card">
            <div class="form-header">
                <h2>Edit Lecturer</h2>
                <a href="{{ url('/lecturer') }}" class="btn btn-back">&larr; Back</a>
            </div>

            <form action="{{ route('lecturers.update', $lecturer) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name" value="{{ $lecturer->name }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ $lecturer->email }}" required>
                </div>

                <div class="form-group">
                    <label for="faculty">Fakultas</label>
                    <input type="text" id="faculty" name="faculty" value="{{ $lecturer->faculty }}" required>
                </div>

                <div class="form-group checkbox-group">
                    <label class="checkbox-label">
                        <input type="checkbox" name="isActive" value="1" {{ $lecturer->isActive ? 'checked' : '' }}>
                        <span>Dosen Aktif</span>
                    </label>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-submit">Update Data</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>