<?php
/*
 * author       Thanh Pham
 * charge.php   example page for charging credit cards via stripe API
 */
  if (!isset($_POST['access'])) die('No direct access');

  require_once(dirname(__FILE__) . '/config.php');

  $input = sanitize_input($_POST);   //clean input
  $token = $input['stripeToken'];

  try {
      $customer = Stripe_Customer::create(array(
        'email' => $input['stripeEmail'],
        'card'  => $token
      ));
  }
  catch (Exception $e) {
    echo "Sorry, could not process your order. Please contact support.";
    exit;
  }

  //charge 50 for testing
  $charge = Stripe_Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 10000,
      'currency' => 'usd'
  ));

  echo '<h1>Successfully charged $100.00!</h1>';

  function sanitize_input($input) {
    $input['access']       = filter_var(trim($input['access']),      FILTER_SANITIZE_STRING);
    $input['stripeToken']  = filter_var(trim($input['stripeToken']), FILTER_SANITIZE_STRING);
    $input['stripeEmail']  = filter_var(trim($input['stripeEmail']), FILTER_SANITIZE_EMAIL);

    if (!filter_var($input['stripeEmail'], FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.\n";
    }

    return $input;
  }