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
            action="{{ route('packages.store') }}"
            id="packageForm"
        >
            @csrf
            <input type="hidden" name="tailor_id" value="{{ Auth::id() }}">
            <div id="fieldContainer">
                <div class="fieldSet">
                    <label for="item_name[]">Item Name:</label>
                    <input type="text" name="item_name[]" required />

                    <label for="item_price[]">Item Price:</label>
                    <input
                        type="number"
                        name="item_price[]"
                        step="0.01"
                        required
                    />

                    <label for="item_delivery_days[]"
                        >Item Delivery Days:</label
                    >
                    <input
                        type="text"
                        name="item_delivery_days[]"
                        min="1"
                        required
                    />
                </div>
            </div>
            <button type="button" onclick="addFieldSet()">
                Add More Items
            </button>
            <button type="submit">Submit Package</button>
        </form>

        <script>
            function addFieldSet() {
                const container = document.getElementById("fieldContainer");
                const newFieldSet = document
                    .querySelector(".fieldSet")
                    .cloneNode(true);
                newFieldSet
                    .querySelectorAll("input")
                    .forEach((input) => (input.value = "")); // Clear fields in the new set
                container.appendChild(newFieldSet);
            }
        </script>

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
