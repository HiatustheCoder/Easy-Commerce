
<?php
/*
 * File: catalog.php
 * Location: app/views/
 *
 * Purpose:
 * Displays the furniture product catalog.
 *
 * Architecture:
 * VIEW layer (Modular MVC)
 *
 * Responsibilities:
 * 1. Display available furniture products.
 * 2. Provide navigation to the shopping cart.
 * 3. Eventually display products retrieved from MySQL.
 *
 * Week 2:
 * Create a placeholder page for our application
 * infrastructure assignment.
 *
 * Future Development:
 * ProductController.php will retrieve product data
 * through the Product model and pass it to this view.
 */
?>

<!-- Main catalog page -->
<section class="catalog">

    <h2>Furniture Catalog</h2>

    <p>
        Welcome to our furniture store!
        Browse individual furniture pieces, complete room sets,
        and build-your-own furniture collections.
    </p>

    <!-- Placeholder until our product database is connected -->
    <div class="product-list">
        <h3>Products Coming Soon</h3>

        <p>
            Our furniture catalog is currently under construction.
            Products will be loaded from our MySQL database.
        </p>
    </div>

    <!-- Navigation to our shopping cart -->
    <a href="/index.php?page=cart">View Shopping Cart</a>

</section>
