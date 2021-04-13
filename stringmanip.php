    <?php
        $title="StringManipulation";
        include 'includes/heater.php'
    ?>
<body>
    <h1>PHP Primer - <?php echo $title?></h1>
    <?php
        $phrase1="student who came late";
        $phrase2="in class, stand whit Rock";
        $name="florin dobre";
        $combine='standard';
        echo "<h1>$phrase1</h1>";
        echo "<h1>$phrase2</h1>";


        echo $phrase1.", named tiffany ".$phrase2;
        echo "<br/>";
        echo "<hr/>";
        // string transformation
        echo 'Upperrcase first letter: '. ucfirst($name).'<br/>';
        echo 'Upperrcase first letter of each word: '. ucwords($name).'<br/>';
        echo 'Upperr case: '.strtoupper($name).'<br/>';
        $name="FLORIN DOBRE";
        echo 'Lower case: '.strtolower($name).'<br/>';
        echo 'Lower case: '.strtolower("THIS TEXT WAS LOWER CASE").'<br/>';
        echo 'Repeat String: '.str_repeat('a',10).'<br/>';
        echo 'Repeat String: '.strtoupper(str_repeat('a',10)).'<br/>';
        echo "<hr/>";
        echo 'Get a substrating: '.substr($name,3,5).'<br/>';
        echo 'Get position of a char: '.strpos($name,"D").'<br/>';
        echo 'Find Character "R": '.strchr($name,'R').'<br/>';
        echo "<hr/>";
        echo 'Find length of a string (strlen): '.strlen($name).'<br/>';
        echo "<hr/>";
        echo 'Whitout Trim: '."A"." B C D "."E".'<br/>';
        echo 'Trim spaces on both sides '."A".trim(" B C D ")."E".'<br/>';
        echo 'Trim spaces on left side: '."A".ltrim(" B C D ")."E".'<br/>';
        echo 'Trim spaces on rigth side: '."A".rtrim(" B C D ")."E".'<br/>';
        echo "<hr/>";
        echo 'replace string with another: '.str_replace("stand","sit",$combine).'<br/>';
    ?>
    
<?php
    require 'includes/footer.php'
 ?>