<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yangi O'qituvchi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Yangi O'qituvchi</h2>
<div>
    </div>
        <form action="{{url('create')}}" method="POST">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Rasm image</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="image" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">FIO</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="full_name" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Kasbi</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="job" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Joylash</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="{{url('Admin_teachers')}}" role="button">
                        Bekor qilish</a>
                </div>
            </div>
        </div>
        </form>
</body>
</html>