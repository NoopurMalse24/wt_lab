<!DOCTYPE html>
<html>
<head>
    <title>String Transformations</title>
</head>
<body>
    <h2>PHP String Transformations</h2>

    <?php
    // Sample string
    $originalString = "hello world, this is a php test";

    // a) Transform to UPPERCASE
    $uppercase = strtoupper($originalString);

    // b) Transform to lowercase
    $lowercase = strtolower($originalString);

    // c) Make only the first character uppercase
    $ucFirst = ucfirst($originalString);

    // d) Make the first character of every word uppercase
    $ucWords = ucwords($originalString);
    ?>

    <p><strong>Original String:</strong> <?php echo $originalString; ?></p>
    <p><strong>a) Uppercase:</strong> <?php echo $uppercase; ?></p>
    <p><strong>b) Lowercase:</strong> <?php echo $lowercase; ?></p>
    <p><strong>c) First character uppercase:</strong> <?php echo $ucFirst; ?></p>
    <p><strong>d) First character of all words uppercase:</strong> <?php echo $ucWords; ?></p>

</body>
</html>
