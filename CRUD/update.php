<?php
    include 'header.php';
    include 'dbcon.php';
?>

    <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        
        }
        
        $query = "SELECT * FROM `students` where `ID`='$id'";
        $qResult = mysqli_query($connection, $query);

        if(!$qResult){
            die("Not Success to get result".mysqli_error());
        }else{
            $row = mysqli_fetch_assoc($qResult);
        }

        
                        
    ?>

    <?php
    if(isset($_POST['update'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];

        $id = $_GET['newID'];

        $query = "UPDATE `students` SET `first_name` = '$fname', `last_name` = '$lname', `age` = '$age' WHERE `students`.`ID` = '$id' ";

        $qResult = mysqli_query($connection, $query);

        if(!$qResult){
            die("Not Success to get result".mysqli_error());
        }else{
            header('location: index.php?updateMsg=Data Update is Successful');
        }
    }
    ?>

    <form action="update.php?newID=<?php echo $id; ?>" method="POST">
        <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" class="form-control" value="<?php echo $row['first_name']; ?>">
                </div>
        <div class="form-group">
                <label for="lname">last Name</label>
                <input type="text" name="lname" class="form-control" value="<?php echo $row['last_name']; ?>">
              </div>

        <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" class="form-control" value="<?php echo $row['age']; ?>">
              </div>
              <input type="submit" class="btn btn-success" name="update" value="Update">
    
    </form>


<?php
    include 'footer.php';
?>