    <?php 
        $title="Index";
        include 'includes/heater.php'
    ?>
<!-- basic html -->
    <h2>Hello HTML pag! </h2>
    <br/>
    <hr/>
    <h3>Salutare!</h3>
    <?php 
        echo '<h2>Hello php</h2>';
        echo '<br/>';
        echo 'second line';
        echo '<br/>';
        $name='Florin Dobre';
        $age=44;
        // echo variabile

        echo $name;
        echo '<h2>My name is :'.$name.' </h1>';
        echo '<h2>My age is :'.$age.' </h1>';

        echo "<h2>My name is: $name</h1>"
    
    ?>
    <button type="button" class="btn btn-dark">CLICK ME!</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-success">Success</button>
    <a href="https://www.herohu.com"-target="_blank" class="btn btn-danger">Heroku.com</a>
    <?php
        require 'includes/footer.php'
    ?>
   