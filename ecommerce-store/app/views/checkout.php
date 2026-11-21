
<?php
/*
 * File: checkout.php
 * Location: app/views/
 *
 * Purpose:
 * Displays the checkout page for our furniture store.
 *
 * Architecture:
 * VIEW layer (Modular MVC)
 *
 * Responsibilities:
 * 1. Display the customer's final order summary.
 * 2. Show the total cost before confirming the order.
 * 3. Eventually process the checkout request.
 * 4. Display an order confirmation.
 *
 * Week 2:
 * Establish the checkout page structure.
 *
 * Future Development:
 * CheckoutController.php will process checkout requests.
 * Order.php will manage order records in MySQL.
 *
 * Course Requirements:
 * - Complete checkout.
 * - Clear the shopping cart.
 * - Return the customer to the catalog.
 *
 * Note:
 * No real payments will be processed at this stage.
 */
?>

<!-- Main checkout page -->
<section class="checkout">

    <h2>Checkout</h2>

    <p>
        Review your furniture order before completing
        your purchase.
    </p>

    <!-- Placeholder for the final order summary -->
    <div class="checkout-summary">
        <h3>Order Summary</h3>

        <p>
            Your order information will appear here
            once the shopping cart functionality
            has been implemented.
        </p>
    </div>

    <!-- Placeholder for checkout functionality -->
    <div class="checkout-actions">
        <h3>Checkout Under Construction</h3>

        <p>
            Order processing and confirmation will
            be implemented during a future phase.
        </p>

        <!-- Return to the shopping cart -->
        <a href="/index.php?page=cart">Return to Cart</a>
    </div>

</section>
