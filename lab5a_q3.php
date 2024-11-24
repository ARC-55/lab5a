<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>  
</head>
<body>
    <?php
        // Function to calculate the area of a rectangle 
        function calculateArea($width, $height){
            return $width * $height;
        }
        
        // Call the function with sample values
        $width = 4;
        $height = 2;
        $area = calculateArea($width, $height);

        // Display the result
        echo "The area of a rectangle with a width of $width an $height is $area.";
    ?>
</body>
</html>