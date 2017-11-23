<?php require_once 'header.php'; ?>

<?php 
        // reading form (post / get ):
    
        // on post - the is sent on the request
        // works only on the same url
        if(isset($_POST['username'])&&isset($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($password == '1234')
                echo "seccess!";
            else
                echo "fail";

            // sets a session for the specific user
            if (!isset($_SESSION['username']))
                $_SESSION['username'] = $username;
        }
    
        // on get, the url will include the date:
        // can work with seperate urls
        if(isset($_GET['username'])&&isset($_GET['password'])){
            $username = $_GET['username'];
            $password = $_GET['password'];
            if ($password == '12')
                echo "seccess!";
            else
                echo "fail";
        }
    
        
    ?>
    
    <form method="post" action="index.php">
        <input name="username" type="text" placeholder="user name">
        <input name="password" type="password" placeholder="password">
        <button>submit</button>
    </form>
    
    <form method="get" action="index.php">
        <input name="username" type="text" placeholder="user name">
        <input name="password" type="password" placeholder="password">
        <button>submit</button>
    </form>

 <?php 
        require_once 'footer.php';
?>

