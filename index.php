<?php 
    echo "<h1>Hello Josh</h1>"; 
    $websiteTitle ="Josh's website";

    // Define the header component
    function renderHeader($title) {
        echo "<header>";
        echo "<h1>$title</h1>";
        echo "</header>";
    }

    // Define the footer component
    function renderFooter() {
        echo "<footer>";
        echo "&copy; Copyright " . date("Y"). " All rights reserved";
        echo "</footer>";
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
            // Render the header component
            renderHeader("Josh's Website"); 
        ?>

        <!-- Main content of the website -->
        <div>
            <p>Welcome to the website. Here is some content.</p>
        </div>

        <?php 
            // Render the footer component
            renderFooter(); 
        ?>
    </body>
</html>

