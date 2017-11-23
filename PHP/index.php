<?php require_once 'header.php'; ?>
<!-- 
    paste all the text in the header.php page in here

-->
    
    <?php 
        // every thing in the php tag - is server side. 
        echo " Hellow world "; // Writes string to the html in the current position.
        $myName = "Rakefet"; // setting a variable
        echo " hellow ".$myName; // using variable, concating strings
    ?>
    
    

    <?php 
        require_once 'footer.php';
    ?>
