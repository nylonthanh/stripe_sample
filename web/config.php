<?php
/*
 * author       Thanh Pham
 * config.php   config for stripe
 */

require_once('../lib/Stripe.php');

//test keys
$stripe = array(
    "secret_key"      => "",
    "publishable_key" => "");

Stripe::setApiKey($stripe['secret_key']);
