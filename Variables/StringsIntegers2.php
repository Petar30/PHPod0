<!doctype html>
<html>
<head>
    <title>
        Variables and Constants
    </title>
</head>
<body>

    <!-- Sample 1 --> 
        <h1> Define Strings</h1>
        <?php   
            $name="John Smith";
            $message="This is a String Message";
            echo $name . ":" . $message . "<br>";
            echo "$name: $message";

        ?>
    <hr>
        <h1>Define Intergers</h1>
        <?php 
            $version=7.6;
            echo "PHP version is $version"
        ?>
    <!-- Sample 2 --> 
        <hr>
        <h1>Combine String and Intergers</h1>
            <?php 
            echo "$name: $message<br>";
            echo " My name is:$name<br>";
            $language="PHP";
            echo "$language version is $version";   
            ?>  

</body>
</html>

