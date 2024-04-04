<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'qituvchilar</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>
<body>
    <div class="container my-5">
        <h2 style="text-align: center; color: blue;">Teachers ro'yhati</h2>
    </div>
    <br>
    <div class="form-group">
        <a class="btn btn-primary" href="{{ route('get_teacher') }}" role="button">Teacher yaratish</a>
        <a class="btn btn-primary" href="{{ route('Admin') }}" role="button">Orqaga qaytish</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Rasmi</th>
                    <th>FIO</th>
                    <th>Kasbi</th>
                </tr>
            </thead>
            @foreach ($teachers as $teacher)
                <tbody>
                    <tr>
                        <th>{{ $teacher['id'] }}</th>
                        <th>{{ $teacher['image'] }}</th>
                        <th>{{ $teacher['full_name'] }}</th>
                        <th>{{ $teacher['job'] }}</th>
                        <td>
                            <a class='btn btn-primary btn-sm' href="">Tahrirlash</a>
                            <a class='btn btn-danger btn-sm' href="">O'chirish</a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>