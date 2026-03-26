<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Specifies the character encoding for the webpage, ensuring proper display of special characters -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ensures the page is responsive and scales correctly on different devices -->
    <title>Visitor Counter</title> <!-- Title of the webpage that appears in the browser's tab -->
    <style>
        /* CSS styling for the webpage */
        body {
            font-family: Arial, sans-serif; /* Sets the font family for the webpage */
            line-height: 1.6; /* Increases line spacing for better readability */
            margin: 0; /* Removes default margins */
            padding: 20px; /* Adds padding around the content */
            background-color: #f4f4f4; /* Sets a light gray background color for the page */
        }
        .container {
            max-width: 600px; /* Limits the width of the content container */
            margin: auto; /* Centers the container on the page */
            background: white; /* Sets a white background for the content container */
            padding: 20px; /* Adds padding inside the container */
            border-radius: 5px; /* Rounds the corners of the container */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Adds a subtle shadow effect to the container */
        }
        h1 {
            color: #333; /* Sets the color of the heading text */
            text-align: center; /* Centers the heading text */
        }
        .counter {
            font-size: 24px; /* Sets the font size for the visitor count text */
            text-align: center; /* Centers the visitor count text */
            margin-top: 20px; /* Adds space above the visitor count section */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Website</h1> <!-- Displays the title of the webpage in an h1 tag -->
        <div class="counter">
            <?php
            $counterFile = 'visitor_count.txt'; /* Defines the file where the visitor count is stored */

            // Read the current count from the file
            if (file_exists($counterFile)) { /* Checks if the visitor count file exists */
                $count = (int)file_get_contents($counterFile); /* Reads the current visitor count from the file and casts it to an integer */
            } else {
                $count = 0; /* If the file doesn't exist, set the count to 0 (first visitor) */
            }

            // Increment the count
            $count++; /* Increases the count by 1 */

            // Save the new count back to the file
            file_put_contents($counterFile, $count); /* Writes the updated count back to the visitor_count.txt file */

            // Display the current visitor count
            echo "<h2>Visitor Count</h2>"; /* Displays a subheading for the visitor count section */
            echo "<p>You are visitor number: $count</p>"; /* Displays the current visitor number to the user */
            ?>
        </div>
    </div>
</body>
</html>