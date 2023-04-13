<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Bootcamp</title>
</head>

<body>
    <?php 
//     1. Create a function which takes two integer parameters - divide them and output the
//      result on the screen.
        
        // function division ($a, $b) {
        //     return $a / $b;
        // }
        // echo division(25,5)

            // 2. Make a function that will accept 3 parameters, which are the grades from Math,
            // Physics and English. then make the calculation and print them on the screen. Make
            // sure that the variables are numbers.
            // E.g. If you put the following grades 3, 4, 5 the result should be:
            // Sum:12
            // Average: 4

            // function grade($grade1,$grade3,$grade4) {
            //     // $sum = ($grade1+$grade3+$grade4);
            //     // echo $sum."<br>";
            //     // $avg = $sum / 3;
            //     // echo $avg;
            //     // or
            //     $sum = 0;
            //     $grades = [$grade1,$grade3,$grade4];
            //     for($i=0; $i<count($grades);$i++){
            //         $sum +=  $grades[$i];
            //     }
            //     echo $sum."<br>";
            //     $avg = $sum / count($grades);
            //     echo $avg;
            // }
            // grade(5,4,5);

                // 3. Create a function that will return the number of minutes, in hours and minutes. The
                // function should accept only one argument.
                // E.g. If we call the function and pass the number of minutes 200 we should get the
                // message "200 minutes = 3 hour(s) and 20 minute(s)."

            // function minutes($minutes) {
            //     $hours = floor($minutes / 60);
            //     $min = $minutes % 60;
            //     echo $minutes. " minutes = ". $hours . " hour(s) and ". $min. " minute(s).";
            // }
            // minutes(200)

?>
    <!--                 Forms
             1. Create a form with input fields for your firstname, lastname and age. Extract the
             values from each input field and display them all in a separate div. Use the POST
             method.
             If the length of your name is larger than 5 characters, change the text color to green.
             Otherwise, change the text-color to red. Now extend with adding a new input field
             "hobbies". -->
    <p> Forms</p>
    <form action="index.php" method="POST">
        firstname:<input type="text" name="firstname" />
        lastname:<input type="text" name="lastname" />
        age:<input type="text" name="age" />
        <input type="submit" name="submit" />
    </form>
    <?php 
        if(isset($_POST['submit'])) {
             if($_POST["firstname"]|| $_POST["lastname"]|| $_POST["age"]){
                echo "<div>".$_POST["firstname"]."<br>".$_POST["lastname"]."<br>".$_POST["age"]."</div>";
            }
         } 
         ?>


</body>