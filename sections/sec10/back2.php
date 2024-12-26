<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body >
    <h1>List of your fav fruits</h1>
    <ul>
        <?php
            $fruits = array( "strawberry","Bananas", "Cherries");
            foreach ($fruits as $fruit) {
                echo "<li>$fruit</li>";
            }
        ?>
    </ul>
    <hr><hr>
    <h1>Families & information</h1>
        <?php
            // Function to display family information
            function displayFamilyInfo($name, $year) {
                echo "<div style=\"padding: 10px; border: 1px solid; margin-bottom: 20px;\">";

                echo "<h2>Family is $name.</h2>";

                echo "<p>This one was born in $year.</p>";

                echo "</div>";
            }

            // Array of families 
            $families = array(
                "First family" => 1970,
                "Second family" => 1987,
                "Third family" => 1997,
            );

            foreach ($families as $name => $year) {
                displayFamilyInfo($name, $year);
            }
        ?>
        <hr><hr> <h1>Students and their Grades</h1>
    <?php
        // Function to display a student's grade based on their score
        function displayStudentGrade($name, $score) {
            echo "<div style=\"padding: 10px; border: 1px solid; margin-bottom: 20px;\">";
            
            echo "<h2>Student Name: $name</h2>";

            switch ($score) {
                case ($score >= 90):
                    echo "<p>Grade: A</p>";
                    break;
                case ($score >= 80):
                    echo "<p>Grade: B</p>";
                    break;
                case ($score >= 70):
                    echo "<p>Grade: C</p>";
                    break;
                case ($score >= 60):
                    echo "<p>Grade: D</p>";
                    break;
                default:
                    echo "<p>Grade: F</p>";
                    break;
            }

            echo "</div>";
        }

        // Array of students and their grades
        $students = array(
            "Magy" => 92,
            "Rose" => 84,
            "Ali" => 96,
            "Ahmed" => 78,
            "wessam" => 88
        );

        // Loop through each student and display their grade
        foreach ($students as $name => $score) {
            displayStudentGrade($name, $score);
        }
    ?>
    <hr><hr> <h1>Factorial of Numbers</h1>
    <?php
        // Function to calculate the factorial of a number
        function calculateFactorial($number) {
            $factorial = 1;
            for ($i = 1; $i <= $number; $i++) {
                $factorial *= $i; // Multiply the current value of factorial by $i
            }
            return $factorial;
        }

        // Array of numbers to calculate factorial for
        $numbers = array(10, 6, 3, 4, 9);

        // Loop through each number and calculate/display its factorial
        foreach ($numbers as $number) {
            $factorial = calculateFactorial($number);
            echo "<div style=\"padding: 10px; border: 1px solid; margin-bottom: 20px;\">";
            echo "<h2>Number: $number.</h2>";
            echo "<p>Factorial: $factorial.</p>";
            echo "</div>";
        }
    ?>
</body>
</html>