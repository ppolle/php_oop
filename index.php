

<html>
<body>

<?php

class measurements{

    public function measurements(){

        if (!isset($_POST['length']) || !isset($_POST['width'])){
            echo "please input both length and width";
        }  else{
            $length=$_GET["length"];
            $width=$_GET["width"];
            header('location:calculator.php');
        }
    }


}
?>
<form action="index.php" method="POST">
    Length: <input type="text" name="length" />
    Width: <input type="text" name="width" />
    <input type="submit" />
</form>

</body>
</html>