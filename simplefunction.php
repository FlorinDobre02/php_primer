    <?php
        $title="SimpleFunction";
        include 'includes/heater.php'
    ?>
<body>
    <h1>PHP Primer - <?php echo $title?></h1>
    <?php
        function writeMesage(){
            echo "You are relly a nice person";
         }
        writeMesage();
        echo "<hr/>";
        writeMesage();
        writeMesage();
        writeMesage();
        writeMesage();

        // function whith param

        function addFunction($num1,$num2){
            $sum=$num1+$num2;
            //$num2++;
            print "The sum of $num1 and $num2 is $sum </br>";
            return $sum;
        }

        // pass by reference
        function changeNum(&$num){
            $num+=10;
            print "Num is: $num</br>";
        }

        function returnProduct($num1, $num2){
            $prog=$num1*$num2;
            return $prog;
        }

        addFunction(3,4);
        // echo "$num2</br>";
        addFunction('10',"12");
        $sum=addFunction(10,12);
        print "variabila sum este: $sum</br>";
        print "<hr>";
        $num=23;
        changeNum($num);
        addFunction("12",$num);

        $returnValue=returnProduct(10,12);
        print "Return of the function is: $returnValue</br>";
        
    ?>
    
    <?php
        require 'includes/footer.php'
    ?>