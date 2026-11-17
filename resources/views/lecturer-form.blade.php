<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Lecturer</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    @include('navbar')

    <div class="form-wrapper">
        <div class="form-card">
            <div class="form-header">
                <h2>Add New Lecturer</h2>
                <a href="{{ url('/lecturer') }}" class="btn btn-back">&larr; Back</a>
            </div>

            <form action="{{ route('lecturers.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name" placeholder="Nama Dosen" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="nama@kampus.com" required>
                </div>

                <div class="form-group">
                    <label for="faculty">Fakultas</label>
                    <input type="text" id="faculty" name="faculty" placeholder="Nama Fakultas" required>
                </div>

                <div class="form-group checkbox-group">
                    <label class="checkbox-label">
                        <input type="checkbox" name="isActive" value="1">
                        <span>Dosen Aktif</span>
                    </label>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-submit">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>