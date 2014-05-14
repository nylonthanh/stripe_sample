<?php require_once('./config.php'); ?>

<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
      data-key="<?php echo $stripe['publishable_key']; ?>"
      data-name="Thanh Test Co "
      data-amount="5000"
      data-description="Guitar Lesson Monthly subscription"
      data-image="http://1.bp.blogspot.com/-M8YCnJfdFqM/TcuNzpl2I0I/AAAAAAAAAA0/4ge7Ym9CU1Y/s1600/classical+guitar.jpg"
      data-label="Buy some music"
      data-shipping-address="true"
      data-billing-address="true"
      >
  </script>
</form>
