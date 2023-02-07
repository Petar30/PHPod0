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
    <!-- Sample 3 --> 

        <hr> 
        <h1>Add two values</h1>
        <?php 
            $firstvalue= 10;
            $secondvalue= 20;
            $total= $firstvalue - $secondvalue;
            echo "Adding $secondvalue and $firstvalue into one <br>";
            echo "Total: $total";
        ?>
    <!-- Sample 4 --> 
        <hr>
        <h1>Dividing two numbers</h1>
        <?php 
        $mojbroj= 100;
        $tvojbroj= 1000;
        $rezultat= $mojbroj - $tvojbroj;
        echo "Total: $rezultat <BR>";
        echo "kako si"; 
        ?>
</body>
</html>

