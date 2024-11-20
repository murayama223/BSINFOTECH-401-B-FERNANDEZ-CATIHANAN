<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffee Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header text-dark fs-3 fw-bold">
                {{ $coffee->name }}
            </div>
            <div class="card-body">
                <p><strong>Price:</strong> {{ $coffee->price }}</p>
                <p><strong>Quantity:</strong> {{ $coffee->quantity }}</p>
                <p><strong>Weight:</strong> {{ $coffee->weight }}</p>
                <div class="d-flex gap-3">
                    <a href="{{ route('coffee.edit', $coffee->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('coffee.destroy', $coffee->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
                <a href="{{ route('coffee.index') }}" class="btn btn-secondary mt-3 d-block text-center">Back</a>
            </div>
        </div>
    </div>
</body>
</html>
