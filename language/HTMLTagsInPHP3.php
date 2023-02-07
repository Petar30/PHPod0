<!doctype html>
<html>
<head>
    <title>PHP and HTML</title>
</head>
<body>
    <h1>Embed PHP in HTML</h1>

    <!-- Sample 1 -->
    <?php echo "Hello World" ?>

    <!-- Sample 2 -->
    <?php 
        print"<p> Sample 2: this text is printed from php!</p>";
?>

<?= "<hr>" ?>
    
    
<p>
    <?php 
        echo "Sample 2: this is test printed fgrom php";
    ?>

</P>

    <!-- Sample 3 --> 
    <!--<p style="color: red;">  Sample 3: This is red text!</p>-->

    <p <?= 'style="color: red;"'?>>Sample 3: This is red text!</p>
</body>
</html> 
