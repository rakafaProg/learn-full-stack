<?php require_once 'header.php'; ?>
<!-- 
    paste all the text in the header.php page in here

-->
<?php
/* Classes */
    function idValidation($tz) {
        if(strlen($tz)!=9)
            return false;
        else {
            $sum = 0;
            for ($i = 0; $i < strlen($tz); $i++) {
                $temp = intval($tz[$i]);
                $temp *= ($i % 2) + 1;
                if ($temp > 9) 
                    $temp = ($temp % 10) + intval($temp / 10);
                $sum += $temp;
            }
            if ($sum % 10 == 0)
                return true;
            return false;
        }
    }

    class Student {
        private $tz;
        private $first_name;
        private $last_name;
        private $email;

        function __construct($tz, $first_name, $last_name, $email) {
            if(idValidation($tz) == false)
               throw new Exception("Please use valid identification");
            $this->tz = $tz;
            $this->setFirstName($first_name);
            $this->setLastName($last_name);
            $this->setEmail($email);
        }

        function setFirstName ($first_name) {
            $this->first_name = $first_name;
        }

        function getFirstName () {
            return $this->first_name;
        }

        function setLastName ($last_name) {
            $this->last_name = $last_name;
        }

        function getLastName () {
            return $this->last_name;
        }

        function setEmail ($email) {
            $this->email = $email;
        }

        function getEmail () {
            return $this->email;
        }

        function getFullDetails()
        {
            return 'Id: ' . $this->tz . '. Name: ' . $this->first_name . ' ' . $this->last_name . '. Email: ' . $this->email;
        }
    } 

    
    
?>    

<h3>

<?php 
    // Write to files
    if (isset($_POST['name']) && isset($_POST['email'])) {
        $tz = $_POST['tz'];
        $name = $_POST['name'];
        $family = $_POST['family'];
        $email = $_POST['email'];

        try {
            $student2 = new Student($tz, $name, $family, $email);

            $myfile = fopen("details.txt", "a") or die("Unable to open file!");

            fwrite($myfile, $student2->getFullDetails() . "\r\n");
            fclose($myfile);
        }
        catch (Exception $ex) {
            echo $ex->getMessage();
        }
        

    }
?>
    <div class='container'>
        <h2>Leave details</h2>
        <form class="form-inline" action="classes.php" method="post" novalidate>
            <div class="form-group">
                <label for="tz">Certification</label>
                <input type="text" class="form-control" id="tz" name="tz" placeholder="cetification">
            </div>
            <div class="form-group">
                <label for="exampleInputName2">Name</label>
                <input type="text" class="form-control" id="exampleInputName2" name="name" placeholder="name">
            </div>
            <div class="form-group">
                <label for="familyNameInput">Family</label>
                <input type="text" class="form-control" id="familyNameInput" name="family" placeholder="family">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail2">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail2" name="email" placeholder="jane.doe@example.com">
            </div>
            <button type="submit" class="btn btn-default">Send</button>
        </form>
    </div>


<?php 
    try {
        $student1 = new Student('200962439', 'Rakefet', 'Ifrach', 'rakkafa@gmail.com');
        echo $student1->getFullDetails();
    }
    catch (Exception $ex) {
        echo $ex->getMessage();
    }
    
?>
</h3>



    

<?php 
    require_once 'footer.php';
?>
