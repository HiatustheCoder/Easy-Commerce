
<?php
/*
 * File: footer.php
 * Location: app/views/layouts/
 *
 * Purpose:
 * This file closes the HTML structure opened in header.php.
 *
 * Architecture:
 * VIEW layer (Modular MVC)
 *
 * Responsibilities:
 * 1. Close the main content section.
 * 2. Display a consistent footer across all pages.
 * 3. Load our shared JavaScript file.
 * 4. Close the HTML document.
 *
 * This avoids repeating footer code in every view.
 */
?>

    <!-- Closes the main content area opened in header.php -->
    </main>

    <!-- Shared footer displayed across the application -->
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Furniture E-Commerce Store.</p>
    </footer>

    <!-- Loads JavaScript for future interactive features -->
    <script src="/ecommerce-store/public/assets/js/script.js"></script>

</body>
</html>
