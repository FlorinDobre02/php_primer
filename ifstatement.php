    <?php
        $title="IfStatement";
        include 'includes/heater.php'
    ?>
<body>
    <h3 style="color: red">PHP Primer - <?php echo $title?></h3>
    <?php
        // if statement 
        echo '<h3 style="color:blue">If Statement</h3>';
        echo "If Statement";
        $grade=50;
        if($grade>=50){
            echo '<h3 style="color: green"> you have pass</h3>';
        }
        else{
            echo '<h3 style="color: red"> you have failed</h3>';
        }
        $grade="C";
        if($grade=="A"){
            echo '<h2 style="color: green">You are a superstar</h2>';
        }
        elseif($grade=="B"){
            echo "<h2>You did well</h2>";
        }
        else{
            echo "<h2 style='color: red'>You have faild</h2>";
        }
    ?>
    <?php
        require 'includes/footer.php'
    ?>