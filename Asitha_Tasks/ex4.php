<?php 
    $title ="Exercise 4: Control flow and loops";
    include 'header.php'; 
?>

        <section id="plan">
            <div class="tourPlan">
                <div class="row">
                    <div class="col text-center">
                    <h1>EXERCISE 4</h1>
                    </div>
                </div>
                <h3>01. Create a file (ex4.php): Create a file named ex4.php in your exercise folder. Ensure that it uses the 
                    ame layout as your other pages and that your navigation bar includes a link to this exercise.</h3>

                <br>
                <h3>02. If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she 
                    is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input).</h3>
              
                    <<div class="row justify-content-center">
    <div class="col-md-4">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" name="age" min="1" required>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary">Check Eligibility</button>
            </div>
        </form>
    </div>
</div>


<?php
            if (isset($_POST['name']) && isset($_POST['age'])) {
                $name = $_POST['name'];
                $age = $_POST['age'];

                if ($age >= 18) {
                    echo "<div class='text-center'><h5 class='mt-3 text-success'>Congratulations, {$name}! You are eligible for voting.</h5></div>";
                } else {
                    echo "<div class='text-center'><h4 class='mt-3 text-danger'>Sorry, {$name}. You are not yet eligible for voting. You must be at least 18 years old to vote.</h4></div>";
                }
            }
            ?>

                <br>
                <h3>03. Switch Case: Write a PHP script that gets the current month and prints one of the following responses, 
                    depending on whether it's August or not: </h3> <br>
                    <div style="text-align: center;">
    <ul style="list-style-position: inside; padding-center: 0; text-align: center;">
        <li style="margin-right: 225px;">It's August, so it's still holiday.</li>
        <li>Not August, this is Month-name so I don't have any holidays</li>
    </ul>
</div>

                    <?php

$currentMonth = date('F');

if ($currentMonth === 'August') {
    echo "It's August, so it's still holiday.";
} else {
   
    switch ($currentMonth) {
        case 'January':
            echo "Not August, this is $currentMonth so I don't have any holidays";
            break;
        case 'February':
            echo "<div class='text-center text-danger'>Not August, this is $currentMonth so I don't have any holidays</div>";
            break;
        case 'March':
            echo "Not August, this is $currentMonth so I don't have any holidays";
            break;
        case 'April':
            echo "Not August, this is $currentMonth so I don't have any holidays";
            break;
        case 'May':
            echo "Not August, this is $currentMonth so I don't have any holidays";
            break;
        case 'June':
            echo "Not August, this is $currentMonth so I don't have any holidays";
            break;
        case 'July':
            echo "Not August, this is $currentMonth so I don't have any holidays";
            break;
        case 'September':
            echo "Not August, this is $currentMonth so I don't have any holidays";
            break;
        case 'October':
            echo "Not August, this is $currentMonth so I don't have any holidays";
            break;
        case 'November':
            echo "Not August, this is $currentMonth so I don't have any holidays";
            break;
        case 'December':
            echo "Not August, this is $currentMonth so I don't have any holidays";
            break;
        default:
            echo "Unable to determine the current month.";
    }
}
?>



                <br>

                <h3>04. For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h3>
                <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label for="number">Enter a number:</label>
                        <input type="number" class="form-control" id="number" name="multiplicationNumber" min="1" required>
                    </div>
                    <div class="text-right">
                    <button type="submit" class="btn btn-primary">Generate</button></div>
                </form>

                <?php
                    if (isset($_POST['multiplicationNumber'])) {
                        $multiplicationNum = $_POST['multiplicationNumber'];
                        echo '<div class=text-center>';
                        for ($i = 1; $i <= 12; $i++) {
                            echo "<p>$multiplicationNum x $i = " . $multiplicationNum * $i . "</p>";
                        }
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
    </div>
                <br>

                <h3>05. While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input).</h3>
                <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
          <label for="number">Enter a number:</label>
          <input type="number" class="form-control" id="number" name="number" min="1" required>
        </div>
        <div class="text-right">
        <button type="submit" class="btn btn-primary">Generate</button></div><br>
      </form>
    </div>
    </div>
  <?php
    if (isset($_POST['number'])) {
      $number = $_POST['number'];
      $i = 1;
      echo '<div class=text-center>';
      while ($i <= $number) {
        echo $i."<br>";
        $i++;
      }
      echo "</div>";
    }
  ?>
</div>


                <br>

                <h3>06. Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript").</h3>
                <br>
                <?php
                    
                    $myarray= array("HTML", "CSS", "PHP", "JavaScript");
                    foreach ($myarray as $value) {
                        echo '<div class=text-center>';
                        echo $value . "<br>";
                    }
                    echo "</div>";
                ?>
             <br>
    
<?php include 'footer.php'; ?>