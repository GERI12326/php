<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Bootcamp</title>
</head>

<body>
    <!-- <?php 
    // $name = "Joe";
    // $surName = "Doe";
    // $age = 23;
    // $sentence = "My name is " .$name . " " . $surName. ", and i am ". $age." years old.<br>";
    // echo$sentence;
    // echo gettype($age)."<br>"; 
    // echo gettype($sentence);
    
    // function printName() 
    // {
    //     global $name,$surName, $fullName;
    //     $fullName = $name.' '.$surName;
    //     $GLOBALS['fullName'] = $GLOBALS['name'].' '.$GLOBALS['surName'];
    //     return $GLOBALS['fullName'];
    // }
    // echo printName(). "<br>";
    // echo $fullName;
    // echo '<br>';//it insert a line break
    // var_dump( $GLOBALS );

    // function lapCounter() {
    //     static $lap = 1;
    //     echo $lap."<br>";
    //     $lap++;
    // }
    // lapCounter();
    // lapCounter();
    // lapCounter();
    ?> -->
    <!-- <p>POST METHOD</p>
    <form action="index.php" method="POST">
        Name:<input type="text" name="name" />
        Age:<input type="text" name="age" />
        <input type="submit" name="submit" />
    </form> -->
    <!-- <p>GET METHOD</p>
    <form action="index.php" method="GET">
        Name:<input type="text" name="name" />
        Age:<input type="text" name="age" />
        <input type="submit" name="submit" />
    </form <?php 
        // if(isset($_POST['submit'])) {
        //     if($_POST["name"]|| $_POST["age"]){
        //         echo "Welcome ". $_POST["name"]. "<br>";
        //         echo "You are ".$_POST["age"]. " years old.";
        //     }
        // }
        //  if(isset($_GET['submit'])) {
        //     if($_GET["name"]|| $_GET["age"]){
        //         echo "Welcome ". $_GET["name"]. "<br>";
        //         echo "You are ".$_GET["age"]. " years old.";
        //     }
        // }
        ?>  -->
    <?php 
        //     function capFirstString($str){
        //         $cap =  ucfirst($str);
        //         echo $cap;
        //     }
        // capFirstString("Hello World")

            // $date = date("l");

            // if($date == "Thursday"){
            //     echo "It's Thursday, weekend is around the corner... :-)";
            // }
            // else
            //     echo "Don't watch the clock; do what it does, keep on going!" ;
                // $today = date("N");
                //     if ($today == 4)
                //     echo "It's Thursday, let's get the week started.";
                //     elseif ($today == 2)
                //     echo "It's Tuesday, a perfect day to learn conditional statements";


                    $session = "John";
                    $user = ($session == "John")? $session : "not logged in";
                    echo $user.'<br>';
                    function confirm(){
                    echo "affirmative";
                    }
                    function deny(){
                    echo "negative";
                    }
                    //is 10 bigger than 5?
                    (10 < 5) ? confirm() : deny()
        ?>

</body>

</html>