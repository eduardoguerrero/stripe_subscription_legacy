<?php
require_once('../vendor/autoload.php');

$stripe = [
    "secret_key" => "sk_test_51LGbvGGvNovx19DmEuAioxleq3yUWch5fBhSN5hPr72mB1p9Cy86Y7e0r9gaq0geBSOb70caQyCzPVbLvReLmwWF00GUYYyqxI",
    "publishable_key" => "pk_test_51LGbvGGvNovx19Dm5PyjwpQhSxFXf3fQPuUNKCGvRPWvll5fZCSADj2cssrpugqm5GTBGd4DnwxSE50pcLVDJxut00w4cFHAjC",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
