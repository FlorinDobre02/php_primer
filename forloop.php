    <?php
        $title="FotLoop";
        include 'includes/heater.php'
    ?>
<body>
    <h1>PHP Primer - <?php echo $title?></h1>
    <?php
        // for loop
        for($count=0;$count<10;$count++){
            echo '<p>Hello world!</p>';
        }
        
        for($count=0;$count<10;$count++){
            echo "<p>The count is: $count</p>";
        }
    ?>

    <?php
        require 'includes/footer.php'
    ?>