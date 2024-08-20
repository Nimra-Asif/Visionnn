<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container mt-5">
            <!-- Display Validation Errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form
                method="POST"
                action="{{ route('tailor.register') }}"
                enctype="multipart/form-data"
            >
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="{{ old('name') }}"
                        required
                    />
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="{{ old('email') }}"
                        required
                    />
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        required
                    />
                </div>

                <div class="mb-3">
                    <label for="number" class="form-label">Number:</label>
                    <input
                        type="number"
                        name="number"
                        class="form-control"
                        value="{{ old('number') }}"
                        required
                    />
                </div>

                <div class="mb-3">
                    <label for="shop_address" class="form-label">Shop Address:</label>
                    <input
                        type="text"
                        name="shop_address"
                        class="form-control"
                        value="{{ old('shop_address') }}"
                        required
                    />
                </div>

                <div class="mb-3">
                    <label for="shop_timing" class="form-label">Shop Timing:</label>
                    <input
                        type="text"
                        name="shop_timing"
                        class="form-control"
                        value="{{ old('shop_timing') }}"
                        required
                    />
                </div>

                <div class="mb-3">
                    <label for="experience" class="form-label">Experience:</label>
                    <input
                        type="text"
                        name="experience"
                        class="form-control"
                        value="{{ old('experience') }}"
                        required
                    />
                </div>

                <div class="mb-3">
                    <label for="alternate_number" class="form-label">Alternate Number:</label>
                    <input
                        type="text"
                        name="alternate_number"
                        class="form-control"
                        value="{{ old('alternate_number') }}"
                    />
                </div>

                <div class="mb-3">
                    <label for="designs" class="form-label">Upload Designs (minimum 5):</label>
                    <input
                        type="file"
                        name="designs[]"
                        class="form-control"
                        multiple
                        required
                    />
                </div>

                <button type="submit" class="btn btn-primary">Register as Tailor</button>
            </form>
        </div>

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
