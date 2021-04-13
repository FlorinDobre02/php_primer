    <?php
        $title="DoWileLoop";
        include 'includes/heater.php'
    ?>
<body>
    <h1>PHP Primer - <?php echo $title?></h1>
    <?php
        // while loop
        $code=0;
        while($code<10)
            {
                echo "<p>Am ajuns la:  $code</p>";
                $code++;
            }
        // do wile loop
        $code=0;
        do{
            echo "<p>Cu Do suntem la: $code</p>";
            $code++;
        }
        while($code<12)
    ?>
    
    <?php
    require 'includes/footer.php'
    ?>