<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    
    <form action="site.php" method="get">
            <label for="username"> Name: 

            <input type="text" name="name" id="username"> &nbsp
            <input type="submit">
    </form>
    <br>
    <?php
        
        echo "<h1> Guilherme's Site </h1>";
        echo "<hr>";
        echo "<br>";
        echo "<p> This is my site. </p>";
        
        $name = "Guilherme Samuel";

        echo "Hello $name!";
        
        echo "<br>";
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        
        echo strtolower($name);
        echo "<br>";
        echo strtoupper($name);
        echo "<br>";
        echo strlen($name);
        echo "<br>";
        echo $name[0];
        echo "<br>";
        echo str_replace("Samuel", "Segura", $name);
        echo "<br>";
        echo substr($name, 9);
        
        echo "<br>";
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        
        echo 16;
        echo "<br>";
        echo 12 - 9;
        
        echo "<br>";
        echo "<br>";
        echo "<hr>";
        echo "<br>";

        if ($_GET["name"] == "") {
            $_GET["name"] = "Guilherme";
        }         
        
        echo "Hello " . $_GET["name"];

    ?>

    Hello <?php echo $_GET["name"];?>


</body>
</html>