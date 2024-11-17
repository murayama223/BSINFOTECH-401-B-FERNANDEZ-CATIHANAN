<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Coffee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #e9ecef;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 30px;
            font-size: 2.5rem;
            color: #343a40;
        }
        .btn-success {
            margin-bottom: 20px;
            background-color: #28a745;
            border: none;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .btn-secondary {
            margin-left: 10px;
        }
        .form-group label {
            font-weight: 600;
            color: #495057;
        }
        input {
            border-radius: 8px;
        }
        .form-control:focus {
            border-color: #28a745;
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
        }
        .table th {
            background-color: #28a745;
            color: white;
        }
        tr:hover {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>{{ $coffee->name }}</h1>
        <p><strong>Price:{{ $coffee->price }}</strong></p>
        <p><strong>Quantity:{{ $coffee->quantity }}</strong></p>
        <p><strong>Weight:{{ $coffee->weight }}</strong></p>
    </div>
</body>
</html>
