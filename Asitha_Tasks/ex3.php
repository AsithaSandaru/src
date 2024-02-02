<?php $title = "Exercise 3: Variable, Strings & Operators";
include 'header.php';?>

<section id="plan">
            <div class="tourPlan text-center">
                <div class="row">
                    <div class="col">
                        <h1>EXERCISE 3</h1>
                    </div>
                </div>
                <div class="container text-left">
                    <div class="row tourPlanCards">
                        <div class="col-md-12">
                        <h3>01. Create a file named ex3.php in your exercise folder.
                          Ensure that it uses the same layout as your other pages and that your navigation bar includes a link to this exercise.</h3>
                        <h3>02. Form Creation: Create a simple HTML form to collect the user’s
                            Firstname and Lastname. Use the echo statement to print “Hello [Firstname]
                            [Lastname], You are welcome to my site.” inside an h3 tag.</h3>

<!-----<div class="d-flex justify-content-center mt-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <form method="post" action="">
          <table>
            <tr>
              <td><label for="firstname">First Name:</label></td>
              <td><input type="text" id="firstname" name="firstname" required></td>
            </tr>
            <tr>
              <td><label for="lastname">Last Name:</label></td>
              <td><input type="text" id="lastname" name="lastname" required></td>
            </tr>
            <tr>
              <td></td>
              <td class="text-right"><button type="submit" class="submit-btn">Submit</button></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>----->

<br>
<h3>03. Bootstrap Styling: Apply Bootstrap styles to the form. Make sure to include the Bootstrap CSS link in your tag.</h3>
<div class="d-flex justify-content-center mt-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
          <div class="table-responsive">
            <table class="table">
              <tr>
                <td><label for="firstname">First Name:</label></td>
                <td><input type="text" id="firstname" name="firstname" class="form-control" required></td>
              </tr>
              <tr>
                <td><label for="lastname">Last Name:</label></td>
                <td><input type="text" id="lastname" name="lastname" class="form-control" required></td>
              </tr>
              <tr>
                <td></td>
                <td class="text-right"><button type="submit" class="btn btn-primary">Submit</button></td>
              </tr>
            </table>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php 

if  ($_SERVER["REQUEST_METHOD"]=="POST"){
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  echo "<div style='text-align: center;'><h3>Hello $firstname $lastname, You are welcome to my site.</h3></div>";
}

?>

<br>
<h3>04. HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table 
in Exercise 1. If you wish, you can use the same table.</h3>
                    <!-- Bootstrap Table -->
                    <div class="row justify-content-center">
    <div class="col m-4">
        <table class="table mt-4 text-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col">S.n.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Grade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Smith</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>David</td>
                    <td>5</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<h3>05. String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). 
                        Join them together and print the length of the string.</h3><br>

<?php

$str1 = "Hello";
$str2 = "World";

$joinString = $str1 . $str2;

echo "<div style='text-align: center;'>Joined String: " . $joinString . "<br></div>";

echo "<div style='text-align: center;'>Length of Joined String: " . strlen($joinString). "<br></div>";
?>
<br>
<h3>06. Number Addition: Write a script to add up the numbers: 298, 234, 46. Use 
        variables to store these numbers and an echo statement to output your answer.</h3><br>

<?php

$number1 = 298;
$number2 = 234;
$number3 = 46;

$sum = $number1 + $number2 + $number3;

echo "<div style='text-align: center;'>The sum of $number1, $number2, and $number3 is: $sum <br></div>";
?>

<br>
<h3>07. Browser Detection: Write a PHP script to detect the 
        browser being used to view your pages. Hint: Use predefined variables: $_SERVER.</h3><br>

<?php

function get_browser_type() {
    $user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';

    if (!$user_agent) {
        return NULL;
    }

    $browser_types = [
        'wyzo/'                      => 'Your logged in browser is: Wyzo',
        'arora/'                     => 'Your logged in browser is: Arora',
        'chimera/'                   => 'Your logged in browser is: Chimera',
        'ucbrowser/'                 => 'Your logged in browser is: UC Browser',
        'dillo/'                     => 'Your logged in browser is: Dillo',
        'dooble/'                    => 'Your logged in browser is: Dooble',
        'opera mini/'                => 'Your logged in browser is: Opera mini',
        'opera mobi/'                => 'Your logged in browser is: Opera Mobile',
        'opr/'                       => 'Your logged in browser is: Opera',
        'opera/'                     => 'Your logged in browser is: Opera',
        'msie/'                      => 'Your logged in browser is: Internet Explorer 10-',
        'trident/'                   => 'Your logged in browser is: Internet Explorer 11',
        'america online browser 1.1' => 'Your logged in browser is: America Online Browser 1.1',
        'amigavoyager/'              => 'Your logged in browser is: AmigaVoyager',
        'yabrowser/'                 => 'Your logged in browser is: Yandex Browser',
        'acoo browser'               => 'Your logged in browser is: Acoo Browser',
        'seamonkey/'                 => 'Your logged in browser is: Seamonkey',
        'edge/'                      => 'Your logged in browser is: Microsoft Edge',
        'edgios/'                    => 'Your logged in browser is: Microsoft Edge for iOS',
        'edg/'                       => 'Your logged in browser is: Microsoft Edge (Chromium)',
        'blackberry'                 => 'Your logged in browser is: BlackBerry',
        'chromium/'                  => 'Your logged in browser is: Chromium',
        'crios/'                     => 'Your logged in browser is: Chrome for iOS',
        'chrome/'                    => 'Your logged in browser is: Chrome',
        'firefox/'                   => 'Your logged in browser is: Firefox',
        'fxios/'                     => 'Your logged in browser is: Firefox for iOS',
    ];

    $user_agent = strtolower($user_agent);

    // Find browser
    foreach ($browser_types as $browser_agent => $browser_type) {
        if (strpos($user_agent, $browser_agent) !== false) {
            return $browser_type;
        }
    }

    // Find Android Browsers
    if (preg_match('/android(.*?)version(.*?)mobile safari/', $user_agent)) {
        return 'Android Browser';
    }

    // Find Safari Browsers
    if (preg_match('/(ipad|iphone|macintosh)(.*)version\/(.*?)safari\//', $user_agent)) {
        return 'Safari';
    }

    return NULL;
}

if ($browser = get_browser_type()) {
    echo "<div style='text-align: center;'>$browser</div>";
} else {
    echo 'Browser not detected';
}

?>
<br>
<h3>08. File Modification Time: Write a PHP script in the footer section of your 
        universal footer to display the last modification time of a file. Hint: Use predefined 
        variable $_SERVER, basename function  to get the filename , filetime function to get the 
        last modified time & date function to print the date and time</h3><br>




    </div>
    </div>

<?php include 'footer.php';?>