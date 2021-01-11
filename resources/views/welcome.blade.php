<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Paystack SDK Sandbox</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <style>
        body {
            font-family: 'Work Sans', 'sans-serif';
        }
    </style>
</head>
<body class="bg-dark text-white">
<section class="position-absolute h-100 w-100 d-flex justify-content-center align-items-center">
    <section class="container">
        <h1 class="text-center mb-5 font-weight-bold">Paystack SDK Sandbox</h1>

        <section class="row justify-content-center">
            <section class="col-md-4 mb-4">
                <a href="https://github.com/matscode/paystack-php-sdk" class="d-block p-4 rounded h-100 shadow-lg card-link">
                    <h5 class="font-weight-bold">Documentation</h5>

                    <p class="font-weight-light text-secondary">
                        Read the documentation for <em>Paystack PHP SDK</em>
                        <br>
                        <small class="text-warning">
                            Under Construction!!
                        </small>
                    </p>
                </a>
            </section>

            <section class="col-md-4 mb-4">
                <a href="#" class="d-block p-4 rounded h-100 shadow-lg card-link">
                    <h5 class="font-weight-bold">Demo</h5>

                    <p class="font-weight-light text-secondary">
                        Example usage of <em>Paystack PHP SDK</em>
                        <br>
                        <small class="text-warning">
                            Work in Progress!!
                        </small>
                    </p>
                </a>
            </section>

            <section class="col-md-4 mb-4">
                <a href="#" class="d-block p-4 rounded h-100 shadow-lg card-link">
                    <h5 class="font-weight-bold">Paystack JS SDK</h5>

                    <p class="font-weight-light text-secondary">
                        A related Paystack SDK but for NodeJS!
                        <br>
                        <small class="text-warning">
                            Coming Soon!!
                        </small>
                    </p>
                </a>
            </section>
        </section>
    </section>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>
</html>
