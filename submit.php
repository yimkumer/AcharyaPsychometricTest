<?php
include('./includes/connect.php');

            $op1 = $_POST['op1'];
            $op2 = $_POST['op2'];
            $op3 = $_POST['op3'];
            $op4 = $_POST['op4'];
            $op5 = $_POST['op5'];
            $op6 = $_POST['op6'];
            $op7 = $_POST['op7'];
            $op8 = $_POST['op8'];
            $op9 = $_POST['op9'];
            $op10 = $_POST['op10'];
            $op11 = $_POST['op11'];
            $op12 = $_POST['op12'];
            $op13 = $_POST['op13'];
            $op14 = $_POST['op14'];
            $op15 = $_POST['op15'];
            $op16 = $_POST['op16'];
            $op17 = $_POST['op17'];
            $op18 = $_POST['op18'];
            $op19 = $_POST['op19'];
            $op20 = $_POST['op20'];
            $op21 = $_POST['op21'];
            $op22 = $_POST['op22'];
            $op23 = $_POST['op23'];
            $op24 = $_POST['op24'];
            $op25 = $_POST['op25'];
            $op26 = $_POST['op26'];
            $op27 = $_POST['op27'];
            $op28 = $_POST['op28'];
            $op29 = $_POST['op29'];
            $op30 = $_POST['op30'];
            $op31 = $_POST['op31'];
            $op32 = $_POST['op32'];
            $op33 = $_POST['op33'];
            $op34 = $_POST['op34'];
            $op35 = $_POST['op35'];
            $op36 = $_POST['op36'];
            $op37 = $_POST['op37'];
            $op38 = $_POST['op38'];
            $op39 = $_POST['op39'];
            $op40 = $_POST['op40'];
            $op41 = $_POST['op41'];
            $op42 = $_POST['op42'];
            $op43 = $_POST['op43'];
            $op44 = $_POST['op44'];
            $op45 = $_POST['op45'];
            $op46 = $_POST['op46'];
            $op47 = $_POST['op47'];
            $op48 = $_POST['op48'];
            $op49 = $_POST['op49'];
            $op50 = $_POST['op50'];
            $op51 = $_POST['op51'];
            $op52 = $_POST['op52'];
            $op53 = $_POST['op53'];
            $op54 = $_POST['op54'];
            $op55 = $_POST['op55'];
            $op56 = $_POST['op56'];
            $op57 = $_POST['op57'];
            $op58 = $_POST['op58'];
            $op59 = $_POST['op59'];
            $op60 = $_POST['op60'];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    function get_data()
    {
        global $s0, $s1, $s2, $s3, $res, $answer;


        $answer = array(

            'op1' => $_POST['op1'],
            'op2' => $_POST['op2'],
            'op3' => $_POST['op3'],
            'op4' => $_POST['op4'],
            'op5' => $_POST['op5'],
            'op6' => $_POST['op6'],
            'op7' => $_POST['op7'],
            'op8' => $_POST['op8'],
            'op9' => $_POST['op9'],
            'op10' => $_POST['op10'],
            'op11' => $_POST['op11'],
            'op12' => $_POST['op12'],
            'op13' => $_POST['op13'],
            'op14' => $_POST['op14'],
            'op15' => $_POST['op15'],
            'op16' => $_POST['op16'],
            'op17' => $_POST['op17'],
            'op18' => $_POST['op18'],
            'op19' => $_POST['op19'],
            'op20' => $_POST['op20'],
            'op21' => $_POST['op21'],
            'op22' => $_POST['op22'],
            'op23' => $_POST['op23'],
            'op24' => $_POST['op24'],
            'op25' => $_POST['op25'],
            'op26' => $_POST['op26'],
            'op27' => $_POST['op27'],
            'op28' => $_POST['op28'],
            'op29' => $_POST['op29'],
            'op30' => $_POST['op30'],
            'op31' => $_POST['op31'],
            'op32' => $_POST['op32'],
            'op33' => $_POST['op33'],
            'op34' => $_POST['op34'],
            'op35' => $_POST['op35'],
            'op36' => $_POST['op36'],
            'op37' => $_POST['op37'],
            'op38' => $_POST['op38'],
            'op39' => $_POST['op39'],
            'op40' => $_POST['op40'],
            'op41' => $_POST['op41'],
            'op42' => $_POST['op42'],
            'op43' => $_POST['op43'],
            'op44' => $_POST['op44'],
            'op45' => $_POST['op45'],
            'op46' => $_POST['op46'],
            'op47' => $_POST['op47'],
            'op48' => $_POST['op48'],
            'op49' => $_POST['op49'],
            'op50' => $_POST['op50'],
            'op51' => $_POST['op51'],
            'op52' => $_POST['op52'],
            'op53' => $_POST['op53'],
            'op54' => $_POST['op54'],
            'op55' => $_POST['op55'],
            'op56' => $_POST['op56'],
            'op57' => $_POST['op57'],
            'op58' => $_POST['op58'],
            'op59' => $_POST['op59'],
            'op60' => $_POST['op60'],

        );
        $array_data[] = $answer;
        $json_data = json_encode($array_data);
        //FOR FIRST EXTROVERT - INTROVERT
        for ($i = 1; $i <= 30; $i++) {
            // Define the first letter to count
            $firstLetterToCount = "E";

            // Initialize the counter
            $count = 0;

            // Loop through the $_POST array to count the radio buttons with the specified first letter
            foreach ($_POST as $answer => $value) {
                if (substr($value, 0, 1) === $firstLetterToCount) {
                    $count++;
                }
            }

            // Display an if-else statement based on the count
            if ($count > 7) {
                // echo "Extrovert ";
                $s0 = 'E';
                break;
            } else {
                // echo "Introvert";
                $s0 = 'I';
                break;
            }

            // Add a line break between each element
            echo "<br>";
        }

        //FOR FIRST SENSING - INTUITION
        for ($i = 31; $i <= 60; $i++) {
            // Define the first letter to count
            $firstLetterToCount = "S";

            // Initialize the counter
            $count = 0;

            // Loop through the $_POST array to count the radio buttons with the specified first letter
            foreach ($_POST as $answer => $value) {
                if (substr($value, 0, 1) === $firstLetterToCount) {
                    $count++;
                }
            }

            // Display an if-else statement based on the count
            if ($count > 7) {
                // echo "Sensing ";
                $s1 = 'S';
                break;
            } else {
                // echo "Intuition";
                $s1 = 'I';
                break;
            }

            // Add a line break between each element
            echo "<br>";
        }

        //FOR FIRST thinking - FEELING
        for ($i = 61; $i <= 90; $i++) {
            // Define the first letter to count
            $firstLetterToCount = "T";

            // Initialize the counter
            $count = 0;

            // Loop through the $_POST array to count the radio buttons with the specified first letter
            foreach ($_POST as $answer => $value) {
                if (substr($value, 0, 1) === $firstLetterToCount) {
                    $count++;
                }
            }

            // Display an if-else statement based on the count
            if ($count > 7) {
                // echo "THINKING ";
                $s2 = 'T';
                break;
            } else {
                // echo "FEELING";
                $s2 = 'F';
                break;
            }

            // Add a line break between each element
            echo "<br>";
        }

        //FOR FIRST JUDGING - PERCEPTION
        for ($i = 91; $i <= 120; $i++) {
            // Define the first letter to count
            $firstLetterToCount = "J";

            // Initialize the counter
            $count = 0;

            // Loop through the $_POST array to count the radio buttons with the specified first letter
            foreach ($_POST as $answer => $value) {
                if (substr($value, 0, 1) === $firstLetterToCount) {
                    $count++;
                }
            }

            // Display an if-else statement based on the count
            if ($count > 7) {
                // echo "JUDGING ";
                $s3 = 'J';
                break;
            } else {
                // echo "PERCEPTION";
                $s3 = 'P';
                break;
            }

            // Add a line break between each element
            echo "<br>";
        }
        $res = $s0 . $s1 . $s2 . $s3;
        // echo $res;

        return $json_data;
    }

    $sname = $_POST['sname'];
    $grade = $_POST['grade'];
    $stream = $_POST['stream'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $phno = $_POST['phno'];
    $json = get_data();

    $sql = "insert into student_info values(null,'$sname','$grade','$stream','$email','$country','$phno','$json','$res' )";
    mysqli_query($conn, $sql);

    // $sql = "select * from test_result where code='ISTJ'";
    // $res = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_array($res);
    


}



?>
<?php include('./includes/header.php');  ?>

<div style="display:flex;align-items:center;flex-direction:column;justify-content:center;height:100vh;width:100%;">
<h1>Your submissions are submitted</h1>
<h4>You'll get the results through the E-mail in a shortwhile.</h4>
</div>

<?php include('./includes/footer.php');  ?>