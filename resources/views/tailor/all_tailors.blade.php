<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailors List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            @foreach($tailors as $tailor)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        @if($tailor->image_path)
                            <img src="{{ asset($tailor->image_path) }}" class="card-img-top" alt="{{ $tailor->name }}">
                        @else
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="{{ $tailor->name }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $tailor->name }}</h5>
                            <p class="card-text">Shop Address: {{ $tailor->shop_address }}</p>
                            <p class="card-text">Experience: {{ $tailor->experience }}</p>
                            <p class="card-text">Contact Number: {{ $tailor->number }}</p>
                            <a href="{{ route('tailor.show', $tailor->id) }}" class="btn btn-primary">View Profile</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
