<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffee List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <style>
        body {
            background: #6F4F1A

        }
        .container {
            margin-top: 50px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 20px;
        }
        .btn-success {
            margin-bottom: 20px;
        }
        table {
            margin-top: 20px;
        }
        th {
            background-color: #28a745;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .action-buttons {
            display: flex;
            gap: 5px;
        }
        .action-buttons form {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container mt-4" style="background-color: #DEAA79;">
        <div class="d-flex align-items-center mb-4">
            <img src="{{ asset('storage/pictures/coffee.png') }}" alt="Coffee Logo" class="img-fluid" style="max-width: 50px; margin-right: 15px;">

            <h2 class="text-center mb-0">Coffee Ingredients List</h2>
        </div>

        <a href="{{ route('coffee.create') }}" class="btn btn-success mb-3">Add New Coffee</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="background-color: #DEAA79;">Name</th>
                    <th style="background-color: #DEAA79;">Price</th>
                    <th style="background-color: #DEAA79;">Quantity</th>
                    <th style="background-color: #DEAA79;">Weight in grams/milliliters</th>
                    <th style="background-color: #DEAA79;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($coffee as $coffee)
                    <tr>
                        <td>
                            @if ($coffee->picture)
                                <img src="{{ asset('storage/' . $coffee->picture) }}" alt="{{ $coffee->name }}" class="img-fluid rounded" style="max-width: 50px; margin-right: 10px;">
                            @endif
                            {{ $coffee->name }}
                        </td>
                        <td>{{ $coffee->price }}</td>
                        <td>{{ $coffee->quantity }}</td>
                        <td>{{ $coffee->weight }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('coffee.show', $coffee->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('coffee.edit', $coffee->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('coffee.destroy', $coffee->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>


</html>
