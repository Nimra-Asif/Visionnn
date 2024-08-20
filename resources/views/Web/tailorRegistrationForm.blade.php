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
        <form
            method="POST"
            action="{{ route('tailor.register') }}"
            enctype="multipart/form-data"
        >
            @csrf

            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" required />
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" required />
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" required />
            </div>
            <div>
                <label for="number">Number:</label>
                <input type="number" name="number" required />
            </div>
            <div>
                <label for="shop_address">Shop Address:</label>
                <input type="text" name="shop_address" required />
            </div>
            <div>
                <label for="shop_timing">Shop Timing:</label>
                <input type="text" name="shop_timing" required />
            </div>
            <div>
                <label for="experience">Experience:</label>
                <input type="text" name="experience" required />
            </div>
            <div>
                <label for="alternate_number">Alternate Number:</label>
                <input type="text" name="alternate_number" />
            </div>
            <div>
                <label for="designs">Upload Designs (minimum 5):</label>
                <input type="file" name="designs[]" multiple required />
            </div>
            <button type="submit">Register as Tailor</button>
        </form>
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
