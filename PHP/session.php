<?php require_once 'header.php'; ?>

    <h2>
        <?php  
            echo 'Wellcome ';
            if(isset($_SESSION['username']))
                echo $_SESSION['username']; 
            else
                echo 'anonimus';
        ?>
    </h2>
    <?php 
        require_once 'footer.php';
    ?>
