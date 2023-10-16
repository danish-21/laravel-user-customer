<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<h1>Customer Registration</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('customer.store') }}">
    @csrf

    <label for="customer_name">Customer Name:</label>
    <input type="text" name="customer_name" id="customer_name" required><br>

    <label for="mobile">Mobile:</label>
    <input type="text" name="mobile" id="mobile" required><br>

    <label for="address">Address:</label>
    <input type="text" name="address" id="address" required><br>

    <button type="submit">Register</button>
</form>

</body>
</html>
