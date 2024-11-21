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
        body {
            background-color: #6F4F1A;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            background-color: #DEAA79;
        }
        h1 {
            margin-bottom: 30px;
            font-size: 2.5rem;
            color: #343a40;
        }
        .btn-success {
            margin-right: 10px;
            background-color: #28a745;
            border: none;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
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
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow border-0 rounded">
            <!-- Card Header -->
            <div class="card-header text-white text-center fs-4 fw-bold" style="background-color: #DEAA79;">
                Edit Coffee
            </div>

            <div class="card-body" style="background-color: #DEAA79;">
                <!-- Form -->
                <form action="{{ route('coffee.update', $coffee->id)}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $coffee->name }}" required>
                    </div>

                    <!-- Price -->
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" name="price" class="form-control" value="{{ $coffee->price }}" required>
                    </div>

                    <!-- Quantity -->
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" name="quantity" class="form-control" value="{{ $coffee->quantity }}" required>
                    </div>

                    <!-- Weight -->
                    <div class="mb-3">
                        <label for="weight" class="form-label">Weight (grams/milliliters)</label>
                        <input type="number" name="weight" class="form-control" value="{{ $coffee->weight }}" required>
                    </div>

                    <!-- Picture Upload -->
                    <div class="mb-3">
                        <label for="picture" class="form-label">Upload Picture</label>
                        <input type="file" name="picture" class="form-control">
                        @if ($coffee->picture)
                            <div class="mt-3 text-center">
                                <p>Current Picture:</p>
                                <img src="{{ asset('storage/' . $coffee->picture) }}" alt="Coffee Image" class="img-thumbnail" style="max-width: 200px;">
                            </div>
                        @endif
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-flex justify-content-end gap-3 mt-4">
                        <button type="submit" class="btn btn-success px-4">Save</button>
                        <a href="{{ route('coffee.index') }}" class="btn btn-secondary px-4">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
