
<?php
/*
 * File: index.php
 * Location: public/
 *
 * Purpose:
 * This is the application's main entry point
 * (Front Controller).
 *
 * Architecture:
 * Modular MVC - Routing
 *
 * Responsibilities:
 * 1. Receive requests from the browser.
 * 2. Determine which page the user requested.
 * 3. Load the appropriate view.
 * 4. Include our shared header and footer.
 *
 * Future Development:
 * Controllers will eventually handle application logic,
 * including retrieving products, managing shopping carts,
 * and processing orders.
 */

// Define the location of our application files.
$basePath = dirname(__DIR__);

// Get the requested page, defaulting to the catalog.
$page = $_GET['page'] ?? 'catalog';

// Define which pages visitors are allowed to access.
// This prevents arbitrary file paths from being loaded.
$allowedPages = ['catalog', 'cart', 'checkout'];

// Reject unsupported page requests.
if (!in_array($page, $allowedPages, true)) {
    http_response_code(404);
    $page = '404';
}

// Load the shared website header.
require $basePath . '/app/views/layouts/header.php';

// Load the requested page if its view exists.
$viewPath = $basePath . '/app/views/' . $page . '.php';

if (is_file($viewPath)) {
    require $viewPath;
} else {
    // Placeholder until all application views are created.
    echo '<h2>Under Construction</h2>';
    echo '<p>This page is currently being developed.</p>';
}

// Load the shared website footer.
require $basePath . '/app/views/layouts/footer.php';
