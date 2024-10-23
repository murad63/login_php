<?php include "header.php";?>
<?php include "dbcon.php"; ?>
    <div class="box1 d-flex flex-row justify-content-between mt-5 mb-3">
        <p class="h3">All Students</p>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Student</button>
    </div>
        
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">First Name</th>
                <th class="text-center">Last Name</th>  
                <th class="text-center">Age</th>
                <th class="text-center">Update</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = "SELECT * FROM `students`";
                $qResult = mysqli_query($connection, $query);

                if(!$qResult){
                    die("Not Success to get result");
                }else{
                    while($row = mysqli_fetch_assoc($qResult)){
                        ?>

                    <tr>
                        <td class="text-center"><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['first_name']; ?></td>
                        <td><?php echo $row['last_name']; ?></td>
                        <td class="text-end"><?php echo $row['age']; ?></td>
                        <td class="text-center"><a href="update.php?id=<?php echo $row['ID']; ?>" name="update" class="btn btn-success">Update</a></td>
                        <td class="text-center"><a href="delete.php?id=<?php echo $row['ID']; ?>" name="delete" class="btn btn-danger">Delete</a></td>
                    </tr>


                    <?php
                    }
                }
            ?>

        </tbody>
    </table>

    <?php 
      if(isset($_GET['message'])){
        echo "<p class='text-center text-danger fw-bold bg-primary fs-5 col-12'>".$_GET['message']."</p>";
      }

      if(isset($_GET['message2'])){
        echo "<p class='text-center text-danger fw-bold bg-primary fs-5 col-12'>".$_GET['message2']."</p>";
      }

      if(isset($_GET['message3'])){
        echo "<p class='text-center text-danger fw-bold bg-primary fs-5 col-12'>".$_GET['message3']."</p>";
      }

      if(isset($_GET['insertMsg'])){
        echo "<p class='text-center text-danger fw-bold bg-primary fs-5 col-12'>".$_GET['insertMsg']."</p>";
      }

      if(isset($_GET['updateMsg'])){
        echo "<p class='text-center text-danger fw-bold bg-primary fs-5 col-12'>".$_GET['updateMsg']."</p>";
      }

      if(isset($_GET['deleteMsg'])){
        echo "<p class='text-center text-danger fw-bold bg-primary fs-5 col-12'>".$_GET['deleteMsg']."</p>";
      }
    ?>

    <!-- Modal -->
<form action="insertData.php" method="POST">

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Fill Up the Form to Add New Student</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" class="form-control">
                </div>
                <div class="form-group">
                <label for="lname">last Name</label>
                <input type="text" name="lname" class="form-control">
              </div>

                <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" class="form-control">
              </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="addStudent" value="Add">
      </div>
    </div>
  </div>
</div>
</form>
</div>

    <?php include "footer.php";?>
    



    