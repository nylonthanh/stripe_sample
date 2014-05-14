<?php
/*
 * author       Thanh Pham
 * config.php   config for stripe
 */

require_once('../lib/Stripe.php');

//test keys
$stripe = array(
    "secret_key"      => "sk_test_gxykOxtXXsFKxkLAmqgUU80a",
    "publishable_key" => "pk_test_CuBdi04WSlDa1dzp5E7HN9Uc");

Stripe::setApiKey($stripe['secret_key']);