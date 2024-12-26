<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <style>
    h1,section{
    text-align: center;
    }
    </style>
    
</head>
<body>
    <h1>PHP Tutorial</h1>

    <section>
        <h2>Introduction</h2>
        <?php
        echo "Welcome to the PHP tutorial!";
        ?>
    </section>

    <section>
        <h2>Comments</h2>
        <?php
        echo "This is a single-line comment.";
        echo "This is a multi-line comment.";
        ?>
    </section>

    <section>
        <h2>Variables</h2>
        <?php
        $name = "Fatma";
        $age = 20;
        $isStudent = true;
        echo "Name: $name, Age: $age, Student: $isStudent";
        ?>
    </section>

    <section>
        <h2>Data Types</h2>
        <?php
        $integerVar = 10;
        $floatVar = 3.14;
        $stringVar = "Hello, world!";
        $booleanVar = true;
        $arrayVar = array(1, 2, 3);
        echo "$integerVar, $floatVar, $stringVar, $booleanVar";
        ?>
    </section>

    <section>
        <h2>Operators</h2>
        <?php
        $sum = 12 + 5;
        $difference = 12 - 5;
        $product = 12 * 5;
        $quotient = 12 / 5;
        $remainder = 12 % 3;
        $increment = ++$sum;
        $decrement = --$sum;
        echo "Sum: $sum, Difference: $difference, Product: $product, Quotient: $quotient, Remainder: $remainder";
        ?>
    </section>

    <section>
        <h2>if Statements</h2>
        <?php
        $age = 18;
        if ($age >= 18) {
            echo "You are an adult.";
        } else {
            echo "You are a minor.";
        }
        ?>
    </section>

</body>
</html>