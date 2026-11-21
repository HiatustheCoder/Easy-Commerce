
<?php
/*
 * File: cart.php
 * Location: app/views/
 *
 * Purpose:
 * Displays the customer's shopping cart.
 *
 * Architecture:
 * VIEW layer (Modular MVC)
 *
 * Responsibilities:
 * 1. Display products added to the cart.
 * 2. Show product quantities and individual prices.
 * 3. Display subtotal, tax, shipping, and order total.
 * 4. Provide options to update or remove products.
 * 5. Allow customers to continue shopping or check out.
 *
 * Week 2:
 * Establish the shopping cart page structure.
 *
 * Future Development:
 * CartController.php will manage cart operations.
 * Cart.php will calculate totals and manage cart data.
 *
 * Required Calculations:
 * Tax = 5% of product subtotal.
 * Shipping & Handling = 10% of pre-tax subtotal.
 * Order Total = Subtotal + Tax + Shipping.
 */
?>

<!-- Shopping cart content -->
<section class="shopping-cart">

    <h2>Your Shopping Cart</h2>

    <!-- Cart items will be displayed here -->
    <div class="cart-items">
        <h3>Cart Under Construction</h3>

        <p>
            Products added to your cart will appear here,
            including quantities, individual costs,
            and product totals.
        </p>
    </div>

    <!-- Placeholder for order calculations -->
    <div class="cart-summary">
        <h3>Order Summary</h3>

        <p>Subtotal: $0.00</p>
        <p>Tax (5%): $0.00</p>
        <p>Shipping &amp; Handling (10%): $0.00</p>
        <p><strong>Order Total: $0.00</strong></p>
    </div>

    <!-- Navigation controls -->
    <div class="cart-actions">
        <a href="/index.php?page=catalog">Continue Shopping</a>
        <a href="/index.php?page=checkout">Check Out</a>
    </div>

</section>
