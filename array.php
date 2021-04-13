    <?php 
        $title="Array";
        include 'includes/heater.php'
    ?>
<body>
    <h1>PHP Primer - <?php echo $title?></h1>

    <?php
        // a variable
        $num=3;

        // a array
        // only one type
        $numbers=array(1,2,3,4,5,6,7,8,9,10);
        echo $numbers[5];
        echo '<p>Array numar is: '.count($numbers).'</p>';

        for($i=0;$i<count($numbers);$i++){
            echo "<p>the $i number is $numbers[$i] </p>";
        }
    ?>
    <?php
        require 'includes/footer.php'
    ?>