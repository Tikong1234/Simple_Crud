<?php include 'update_query.php'; ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple crud operation </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="bootstrap-5.3.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
  <body>
    <div class="container my-5">
        <?php 
        
        $sql = "SELECT * FROM `registration` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <form method="POST">
  <div class="form-group">
    <label >Last Name:</label>
    <input type="text" class="form-control" name="lname" value="<?php echo $row['lname'];?>" >    
  </div>
   <div class="form-group">
    <label >First Name:</label>
    <input type="text" class="form-control" value="<?php echo $row['fname'];?>" name="fname" >    
  </div>
   <div class="form-group">
    <label >Middle Name:</label>
    <input type="text" class="form-control" value="<?php echo $row['mname'];?>" name="mname" >    
  </div>
   <div class="form-group">
    <label >Home Address:</label>
    <input type="text" class="form-control" value="<?php echo $row['homeAdd'];?>" name="homeAdd" >    
  </div>
  <div class="form-group">
    <label >Present Address:</label>
    <input type="text" class="form-control" value="<?php echo $row['presentAdd'];?>" name="presentAdd" >    
  </div>
  <div class="form-group">
    <label >Contact:</label>
    <input type="text" class="form-control" value="<?php echo $row['contact'];?>" name="contact" >    
  </div>
  <div class="form-group">
    <label >Sex:</label>
    <input type="text" class="form-control" value="<?php echo $row['sex'];?>" name="sex" >    
  </div>
  <div class="form-group">
    <label >Date Of Birth:</label>
    <input type="text" class="form-control" value="<?php echo $row['dateOfbirth'];?>" name="dateOfbirth" >    
  </div>
  <div class="form-group">
    <label >email:</label>
    <input type="email" class="form-control" value="<?php echo $row['email'];?>" name="email" >    
  </div>
  <div class="form-group">
    <label >Place Of Birth:</label>
    <input type="text" class="form-control" value="<?php echo $row['placeOfbirth'];?>" name="placeOfbirth" >    
  </div>
  <div class="form-group">
    <label >Civil Status:</label>
    <input type="text" class="form-control" value="<?php echo $row['civilstatus'];?>" name="civilstatus" >    
  </div>
  <div class="form-group">
    <label >Elementary:</label>
    <input type="text" class="form-control" value="<?php echo $row['elementary'];?>" name="elementary" >    
  </div>
  <div class="form-group">
    <label >Year Graduated:</label>
    <input type="text" class="form-control" value="<?php echo $row['elemgraduated'];?>" name="elemgraduated" >    
  </div>
  <div class="form-group">
    <label >High School:</label>
    <input type="text" class="form-control" value="<?php echo $row['highschool'];?>" name="highschool" >    
  </div>
  <div class="form-group">
    <label >Year Graduated:</label>
    <input type="text" class="form-control" value="<?php echo $row['highgraduated'];?>" name="highgraduated" >    
  </div>
  <div class="form-group">
    <label >Senior High:</label>
    <input type="text" class="form-control" value="<?php echo $row['shs'];?>" name="shs" >    
  </div>
  <div class="form-group">
    <label >Year Graduated:</label>
    <input type="text" class="form-control" value="<?php echo $row['shsgraduated'];?>" name="shsgraduated" >    
  </div>
  <div class="form-group">
    <label >Track and Strand:</label>
    <input type="text" class="form-control" value="<?php echo $row['track_strand'];?>" name="track_strand" >    
  </div>
  <div class="form-group">
    <label >Course to be enrolled:</label>
    <input type="text" class="form-control" value="<?php echo $row['course'];?>" name="course" >    
  </div>
<br>
  <button type="submit" class="btn btn-success" name="submit">Update</button>
  <button class="btn btn-primary"><a href="index.php" style="color: white;">Back</a></button>
</form>
    </div>

    
  </body>
  <script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
</html>