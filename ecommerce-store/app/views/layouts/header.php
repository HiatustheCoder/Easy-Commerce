
<?php
/*
 * File: header.php
 * Location: app/views/layouts/
 *
 * Purpose:
 * This file defines the shared header for our furniture
 * e-commerce application.
 *
 * Rather than repeating the same HTML and navigation
 * across multiple pages, we create it once and reuse it.
 *
 * Architecture:
 * VIEW layer (Modular MVC)
 *
 * This file is responsible for:
 * 1. Setting up the HTML document.
 * 2. Connecting our CSS stylesheet.
 * 3. Displaying the store's title.
 * 4. Providing navigation between application pages.
 * 5. Opening the main content area.
 *
 * The footer.php file will close the main content area
 * and finish the HTML document.
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Defines character encoding for the webpage -->
    <meta charset="UTF-8">

    <!-- Allows the website to adjust to different screen sizes -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title displayed in the browser tab -->
    <title>Furniture E-Commerce Store</title>

    <!-- Loads our shared CSS stylesheet -->
    <link rel="stylesheet" href="/ecommerce-store/public/assets/css/style.css">
</head>

<body>

    <!-- Shared website header displayed on every page -->
    <header>
        <h1>Furniture E-Commerce Store</h1>

        <!--
            Navigation:
            These links direct customers to different pages.

            index.php acts as our application's entry point.
            The page parameter will help determine which
            view or controller should be loaded.
        -->
        <nav>
            <a href="/ecommerce-store/public/index.php">Home</a>
            <a href="/ecommerce-store/public/index.php?page=catalog">Catalog</a>
            <a href="/ecommerce-store/public/index.php?page=cart">Cart</a>
            <a href="/ecommerce-store/public/index.php?page=checkout">Checkout</a>
        </nav>
    </header>

    <!--
        Main Content:
        Each application view will display its unique
        content inside this section.

        This element will be closed in footer.php.
    -->
    <main>
