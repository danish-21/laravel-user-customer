<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
<h1>Create User</h1>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<form method="POST" action="{{ route('users.store') }}">
    @csrf

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required><br>

    <label for="mobile">Mobile:</label>
    <input type="text" name="mobile" id="mobile" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>

    <label for="age">Age:</label>
    <input type="number" name="age" id="age" required><br>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <button type="submit">Create User</button>
</form>
</body>
</html>
