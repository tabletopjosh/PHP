<?php 
    $websiteTitle = "Josh's website";

    // Define the header component
    function renderHeader($title) {
        echo "<header>";
        echo "<h1>$title</h1>";
        echo "</header>";
    }

    // Define the footer component
    function renderFooter($year) {
        echo "<footer>";
        echo "&copy; Copyright $year All rights reserved";
        echo "</footer>";
    }

    // Define the parent component
    function renderParentComponent($title) {
        $currentYear = date("Y");
        
        // Pass props to the child components
        renderHeader($title);
        echo "<div>";
        echo "<p>Welcome to the website. Here is some content.</p>";
        echo "</div>";
        renderFooter($currentYear);
    }
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $websiteTitle ?></title>
    </head>
    <body>
        <?php 
            // Render the parent component, which in turn renders child components
            renderParentComponent($websiteTitle); 
        ?>
    </body>
</html>
