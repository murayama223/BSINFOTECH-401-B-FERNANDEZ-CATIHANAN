<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffee Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #343a40;
            color: white;
            border-radius: 12px 12px 0 0;
            font-size: 1.5rem;
            font-weight: bold;
            padding: 20px;
        }
        .card-body {
            padding: 30px;
        }
        .card-body p {
            font-size: 1.1rem;
            margin-bottom: 15px;
            color: #495057;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .btn-secondary {
            margin-top: 20px;
            display: block;
            width: 100%;
            text-align: center;
        }
        .action-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                {{ $coffee->name }}
            </div>
            <div class="card-body">
                <p><strong>Price:</strong> {{ $coffee->price }}</p>
                <p><strong>Quantity:</strong> {{ $coffee->quantity }}</p>
                <p><strong>Weight:</strong> {{ $coffee->weight }}</p>
                <div class="action-buttons">
                    <a href="{{ route('coffee.edit', $coffee->id) }}" class="btn btn-primary flex-fill">Edit</a>
                    <form action="{{ route('coffee.destroy', $coffee->id)}}" method="POST" class="flex-fill">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-danger w-100">Delete</button>
                    </form>
                </div>
                <a href="{{ route('coffee.index') }}" class="btn btn-secondary mt-3">Back</a>
            </div>
        </div>
    </div>
</body>
</html>
