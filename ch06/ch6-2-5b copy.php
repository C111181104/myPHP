<?php
    function welcome(?string $name = null) {
        if (is_null($name)) {
            echo "welcome!<br/>";
        }   else {
            echo "welcome $name!<br/>";
        }
    }
    ?>
    <?php
        welcome("劉桓均");
        welcome(null);
        welcome();
    ?>  
