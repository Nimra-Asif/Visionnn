<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tailor->name }}'s Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    @if($tailor->image_path)
                        <img src="{{ asset($tailor->image_path) }}" class="card-img-top" alt="{{ $tailor->name }}">
                    @else
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="{{ $tailor->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $tailor->name }}</h5>
                        <p class="card-text">Shop Address: {{ $tailor->shop_address }}</p>
                        <p class="card-text">Shop Timing: {{ $tailor->shop_timing }}</p>
                        <p class="card-text">Experience: {{ $tailor->experience }}</p>
                        <p class="card-text">Contact Number: {{ $tailor->number }}</p>
                        @if($tailor->alternate_number)
                            <p class="card-text">Alternate Number: {{ $tailor->alternate_number }}</p>
                        @endif

                        <!-- Display Designs Images -->
                        @if(!empty($tailor->designs))
                            <div class="mt-3">
                                <h6>Designs:</h6>
                                <div class="row">
                                     @foreach(json_decode($tailor->designs) as $design)
                                            @php
                                        // Remove 'public/designs/' from the beginning of the path
                                    $designPath = str_replace('public/designs/', '', $design);
                                          @endphp
                                            <div class="col-4 mb-2">
                                                <img src="{{ asset('storage/designs/' . $designPath) }}" class="img-fluid" alt="Design Image">
                                            </div>
                                     @endforeach
                                </div>


                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <h3>Packages</h3>
                <div class="row">
                    @forelse($packages as $package)
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    @foreach($package->details as $detail)
                                        <h5 class="card-title">{{ $detail['item_name'] }}</h5>
                                        <p class="card-text">Price: {{ $detail['item_price'] }}</p>
                                        <p class="card-text">Delivery Days: {{ $detail['item_delivery_days'] }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No packages available.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
