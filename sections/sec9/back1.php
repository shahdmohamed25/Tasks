<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Problem Solutions</title>
</head>
<body>
    <section>
        <h2>Student List</h2>
        <?php
        $studentIds = [100, 101, 102];
        $studentNames = ["Ahmed", "Mona", "Youssef"];
        $studentGrades = [80, 88, 86];

        echo "<ul>";
        for ($i = 0; $i < count($studentIds); $i++) {
            echo "<li>Student-{$studentIds[$i]} = Name: {$studentNames[$i]}, Grade: {$studentGrades[$i]}</li>";
        }
        echo "</ul>";
        ?>
    </section>
 <hr><hr>
 <?php
    $IsLoggedIn = false; // Change this to false to test the other condition
    $UserName = "John";

    echo "<div style='text-align: center; margin-top: 30%;'>";
    if ($IsLoggedIn) {
        echo "Hi, $UserName";
    } else {
        echo "Hello Stranger?!!";
    }
    echo "</div>";
    ?>
    <hr><hr>   <?php
      function fib($i) {
        if ($i <= 1) return 1;
        return fib($i - 1) + fib($i - 2);
      }

      echo fib(5);
    ?>
    <hr><hr>
    <h1>Dynamic Script Example</h1>
    <?php
    $userRole = "admin";

    if ($userRole === "admin") {
        $script = "alert('Welcome, Admin! You have full access.');";
    } elseif ($userRole === "user") {
        $script = "alert('Welcome, User! You have limited access.');";
    } else {
        $script = "alert('Welcome, Guest! Please log in for more features.');";
    }
    ?>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        <?php echo $script; ?>
    });
    </script>
</body>
</html>