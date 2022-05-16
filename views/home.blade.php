@extends('layouts.default')

@section('content')
    <section class="position-absolute h-100 w-100 d-flex justify-content-center align-items-center">
        <section class="container">
            <h1 class="text-center mb-5 font-weight-bold">Paystack SDK Sandbox</h1>

            <section class="row justify-content-center">
                <section class="col-md-4 mb-4">
                    <a href="https://matscode.github.io/paystack-php-sdk "
                       class="d-block p-4 rounded h-100 shadow-lg card-link">
                        <h5 class="font-weight-bold">Documentation</h5>

                        <p class="font-weight-light text-secondary">
                            Read the documentation for <em>Paystack PHP SDK</em>
                        </p>
                    </a>
                </section>

                <section class="col-md-4 mb-4">
                    <a href="/paystack" class="d-block p-4 rounded h-100 shadow-lg card-link">
                        <h5 class="font-weight-bold">Demo</h5>

                        <p class="font-weight-light text-secondary">
                            Example usage of <em>Paystack PHP SDK</em>
                            <br>
                            <small class="text-warning">
                                Continuous work
                            </small>
                        </p>
                    </a>
                </section>

                <section class="col-md-4 mb-4">
                    <a href="#" class="d-block p-4 rounded h-100 shadow-lg card-link">
                        <h5 class="font-weight-bold">Paystack JS SDK</h5>

                        <p class="font-weight-light text-secondary">
                            A related Paystack SDK, but for NodeJS!
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
@endsection
