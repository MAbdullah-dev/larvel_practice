<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>update user data</h2>
        @foreach ($updata as $user)
        <form action="{{ route('updateuser',$user->id) }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name">name</label>
                <input type="text" id="name" class="form-control" name="name" value="{{ $user->name }}">
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" name="email" value="{{ $user->email }}">
            </div>
            <div class="mb-3">
                <label for="city">city</label>
                <select name="city" id="city" class="form-control" name="city" {{ $user->c_id }}>
                    <option></option>
                    <option value="1">lahore</option>
                </select>
            </div>
            <input type="submit" value="update" class="btn btn-primary">
        </form>
        @endforeach
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
