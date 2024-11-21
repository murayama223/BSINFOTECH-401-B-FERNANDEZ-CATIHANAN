<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Coffee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <style>
        body{
            background-color: #6F4F1A;
        }
    </style>
</head>
<body>
    <div class="container mt-5 p-5 rounded shadow" style="background-color: #DEAA79;">
        <!-- Page Header -->
        <div class="text-center mb-4">
            <h1 class="fs-3 fw-bold">Edit Coffee</h1>
        </div>

        <!-- Form -->
        <form action="{{ route('coffee.update', $coffee->id)}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $coffee->name }}" required>
            </div>

            <!-- Price -->
            <div class="mb-3">
                <label for="price" class="form-label fw-semibold">Price</label>
                <input type="number" name="price" class="form-control" value="{{ $coffee->price }}" required>
            </div>

            <!-- Quantity -->
            <div class="mb-3">
                <label for="quantity" class="form-label fw-semibold">Quantity</label>
                <input type="number" name="quantity" class="form-control" value="{{ $coffee->quantity }}" required>
            </div>

            <!-- Weight -->
            <div class="mb-3">
                <label for="weight" class="form-label fw-semibold">Weight (grams/milliliters)</label>
                <input type="number" name="weight" class="form-control" value="{{ $coffee->weight }}" required>
            </div>

            <!-- Picture Upload -->
            <div class="mb-3">
                <label for="picture" class="form-label fw-semibold">Upload Picture</label>
                <input type="file" name="picture" class="form-control">
                @if ($coffee->picture)
                    <div class="mt-3 text-center">
                        <p>Current Picture:</p>
                        <img src="{{ asset('storage/' . $coffee->picture) }}" alt="Coffee Image" class="img-thumbnail" style="max-width: 200px;">
                    </div>
                @endif
            </div>

            <!-- Action Buttons -->
            <div class="d-flex justify-content-end gap-3">
                <button type="submit" class="btn btn-success px-4">Save</button>
                <a href="{{ route('coffee.index') }}" class="btn btn-secondary px-4">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
