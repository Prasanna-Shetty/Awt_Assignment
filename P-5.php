<body> 
<center>
<h4>1. Addition  2. Subtraction  3. Multiplication  4. Division </h4>

<form method="post">
<input type="text" name="num1" placeholder="Enter First Number" value="" /> <br/> <br/>
<input type="text" name="num2" placeholder="Enter second Number" value="" /> <br/> <br/>
<input type="text" name="option" placeholder="Choose option eg:1" value="" /> <br/> <br/>
<input type="submit" name="submit" value="submit" /> <br/> <br/>
</form>    

<?php
if (isset($_POST['submit'])){
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $ch = $_POST['option'];
    switch($ch){
        case 1: $r=$a+ $b;
        echo "Addition of two number is: ".$r;
        break;

        case 2: $r=$a- $b;
        echo "Subtraction of two number is: ".$r;
        break;

        case 3: $r=$a* $b;
        echo "Multiplication of two number is: ".$r;
        break;

        case 4: $r=$a / $b;
        echo "Division of two number is: ".$r;
        break;

        default : echo ("Invalid option");
    }
    return 0;
}
 ?>
 </center>
</body>
