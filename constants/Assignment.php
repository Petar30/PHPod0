<!doctype html>
<html>
<head>
    <title>Assignment</title>
</head>
<body>
    <h1> Assignment </h1>
    <?php
        //1  i 2
        global $firstname;
        global $lastname;
        $firstname= "Petar";
        $lastname= "Terzic";
        echo "My first name is: " . $firstname . " and lastname is: " . $lastname;
        echo "<br>";
        //3
        print "i am $firstname $lastname.";
        //4
        function name() {
            $name= "Petar Terzic";
        }
        name();
        //5
        global $Firstname;
        $Firstname= "Marko";
        echo "<br>";
        echo "$firstname is not same as $Firstname.";
        function case_sensitive(){
            echo "<br>";
            $ja= "kako si?";
            echo $GLOBALS ['firstname'] . " asking you " . $ja;
        }
        function case_sensitive1 () {
            $ja1= "sta radis?";
            echo "<br>";
            echo $GLOBALS ['lastname'] . " " . $GLOBALS['Firstname'] . " is asking you " . $ja1;
        }   
        case_sensitive();
        case_sensitive1(); 
        echo "<br>";
        echo "Functions are not case sensitive but variables are.";
        echo "<br>";
        //6
        $tastatura= "Citra";
        function tastatura_fun() {
            $tastatura= "Friends";
            echo $tastatura;
            echo "<br>";
        }
        tastatura_fun();
        echo $tastatura;
        //7
        global $var;
        $var= "globalna variabla";
        function global_var() {
            echo "<br>";
            echo $GLOBALS['var'];
        }
        global_var();
        echo "<br>";
        //8
        function static_var(){
            static $var2= "6";
            $var2= $var2 + 1;
            print $var2;
            echo "<br>";

        }
        static_var();
        static_var();    
        static_var();
        static_var();
        static_var();
        static_var();
        static_var();
        //9 isto kao 8
        //10
        $developer= $firstname . " " . $lastname;
        $autor= "developer";
        echo "Autor of this code is " . $$autor;
        //11
        print "<br>";
        $uplacenasuma= "50";
        $isplacenasuma= "34";
        echo isset($isplacenasuma) ? "Suma je isplacena." : "Suma nije isplacena.";
        echo "<br>";
        echo "Isplaceno je: " . $isplacenasuma . " evra.";
        //12
        define("KONSTANTA", "43");
        print "<br>";
        print "TVOJA MILF KEVA IMA " . KONSTANTA . " godine.";
        //13
        print "<br>";
        print "I AM HERE " . __LINE__ . " CAN U FIND ME?";
        print "<br>";
        print __FILE__ . " I AM HERE VUHUUU";
        print "<hr>";
    ?>
</body>
</html>



        
