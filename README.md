# Paystack SDK Sandbox
This project's intent is to be a bank of example usage of the [Paystack PHP SDK](https://github.com/matscode/paystack-php-sdk) and maybe serve as a boilerplate for your next payment solution. But, hey, you might have to fork and do some refactoring/restructuring in that case.

### Setup
Copy `.env.example` to `.env` and set your paystack secret
```dotenv
# In /.env
# ...
PAYSTACK_SECRET=sk_test_f0d14cd8743d5075b8af59d78dac2022b108a671
# ...
```
Install required packages
```bash
composer install # install composer packages
```
Start server
```bash
php -S 0.0.0.0:8000 # run with php built-in server
```

## Built using FlightPHP
This sandbox example is built using FlightPHP: a fast, simple, extensible framework for PHP. Flight enables you to quickly and easily build RESTful web applications.

If you probably need help navigating your way around FlightPHP framework, which I think you wouldn't. Head to the official [FlightPHP documentation](https://flightphp.com/).
