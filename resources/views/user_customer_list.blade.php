<!DOCTYPE html>
<html>
<head>
    <title>User-Customer List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>User Customer List</h1>

    <table class="table">
        <thead>
        <tr>
            <th>User Name</th>
            <th>Mobile</th>
            <th>Age</th>
            <th>Email</th>
            <th>Customer Name</th>
            <th>Address</th>
        </tr>
        </thead>
        <tbody>
        @foreach($userCustomers as $userCustomer)
            <tr>
                <td>{{ $userCustomer->user->name }}</td>
                <td>{{ $userCustomer->user->mobile }}</td>
                <td>{{ $userCustomer->user->age }}</td>
                <td>{{ $userCustomer->user->email }}</td>
                <td>{{ $userCustomer->customer->customer_name }}</td>
                <td>{{ $userCustomer->customer->address }}</td>
                <td>{{ $userCustomer->customer->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
