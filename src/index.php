<?php

require_once('config.php'); ?>

<form action="charge.php" method="post">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="<?php echo $stripe['publishable_key']; ?>"
            data-name="Test stripe legacy"
            data-description="Access for a month"
            data-amount="5000"
            data-currency="EUR"
            data-locale="auto"></script>
</form>
