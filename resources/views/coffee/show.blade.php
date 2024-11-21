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
            background-color: #6F4F1A;
            font-family: 'Arial', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm rounded-lg">

            <div class="card-header text-center text-white fs-3 fw-bold" style="background-color: #DEAA79;">
                {{ $coffee->name }}
            </div>

            <div class="card-body" style="background-color: #DEAA79;">

                @if ($coffee->picture)
                    <div class="mb-4 text-center">
                        <img src="{{ asset('storage/' . $coffee->picture) }}" alt="{{ $coffee->name }}" class="img-fluid rounded" style="max-width: 300px;">
                    </div>
                @endif

                <div class="row mb-3">
                    <div class="col-md-4">
                        <p><strong>Price:</strong></p>
                        <p>{{ $coffee->price }} PHP</p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Quantity:</strong></p>
                        <p>{{ $coffee->quantity }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Weight:</strong></p>
                        <p>{{ $coffee->weight }}</p>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('coffee.edit', $coffee->id) }}" class="btn btn-primary btn-lg">Edit</a>
                    <form action="{{ route('coffee.destroy', $coffee->id)}}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-lg">Delete</button>
                    </form>
                </div>
                <a href="{{ route('coffee.index') }}" class="btn btn-secondary btn-lg mt-3 d-block text-center">Back to List</a>
            </div>
        </div>
    </div>
</body>
</html>
