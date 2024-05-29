<?php 
    // Variables of different data types
    $websiteTitle = "Jake's website"; // String
    $yearFounded = 2021; // Integer
    $isUserLoggedIn = true; // Boolean

    // Custom function to display a welcome message
    function displayWelcomeMessage($isUserLoggedIn) {
        if ($isUserLoggedIn) {
            return "<h1>Welcome back, Josh!</h1>";
        } else {
            return "<h1>Welcome to our website!</h1>";
        }
    }

    // One-dimensional array
    $navigationMenu = ["Home", "About Us", "Services", "Contact"];
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $websiteTitle; ?></title>
    </head>
    <body>
        <?php 
            // Display welcome message
            echo displayWelcomeMessage($isUserLoggedIn); 
        ?>

        <h1>My website</h1>

        <nav>
            <ul>
                <?php
                    // Display navigation menu using the array
                    foreach ($navigationMenu as $menuItem) {
                        echo "<li>$menuItem</li>";
                    }
                ?>
            </ul>
        </nav>

        <?php 
            echo "&copy; Copyright " .  date("Y"). " All rights reserved"; 
            echo "<br>Website founded in $yearFounded";
        ?>
    </body>
</html>
