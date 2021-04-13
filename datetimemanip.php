    <?php
        $title="DataTime";
        include 'includes/heater.php'
    ?>
<body>
    <h1>PHP Primer - <?php echo $title?></h1>
    <div class="row">
        <div class="col-sm">
            <?php
                $datenow=getdate();
                echo "Today's date: </br>";
                echo $datenow['mday'].'</br>';
                echo $datenow['mon'].'</br>';
                echo $datenow['year'].'</br>';
                echo "Today's date is: ".$datenow['mday'].'/'.$datenow['mon'].'/'.$datenow['year'].'</br>';

                // for($i=0;$i<count($datenow);$i++){
                //     echo "<p>$datenow[$i]</p>";
                // }
             ?>   
        </div>
        <div class="col-sm">
            <?php
                echo time().'</br>';
                print date("d/m/y G.i:s",time()).'</br>';
                print date_default_timezone_get().'</br>';
                print "Today is: ".'</br>';
                print date("j of f y,\a\\t g.i a",time()).'</br>';
                print date("d F Y,\a\\t g.i a",time());
                // $datenow= localtime();
                // echo "Today's date: </br>";
                // echo $datenow['mday'].'</br>';
                // echo $datenow['mon'].'</br>';
                // echo $datenow['year'].'</br>';
                // echo "Today's date is: ".$datenow['mday'].'/'.$datenow['mon'].'/'.$datenow['year'].'</br>';
            ?>
        <div>
    <?php
        require 'includes/footer.php'
    ?>