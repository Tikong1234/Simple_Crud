<?php 
include 'connect.php';

if (isset($_POST['submit'])) {
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $homeAdd = $_POST['homeAdd'];
    $presentAdd = $_POST['presentAdd'];
    $contact = $_POST['contact'];
    $sex = $_POST['sex'];
    $dateOfbirth = $_POST['dateOfbirth'];
    $email = $_POST['email'];
    $placeOfbirth = $_POST['placeOfbirth'];
    $civilstatus = $_POST['civilstatus'];
    $elementary = $_POST['elementary'];
    $elemgraduated = $_POST['elemgraduated'];
    $highschool = $_POST['highschool'];
    $highgraduated = $_POST['highgraduated'];
    $shs = $_POST['shs'];
    $shsgraduate = $_POST['shsgraduated'];
    $track_strand = $_POST['track_strand'];
    $course = $_POST['course'];

    // Check for existing record
    $sql_check = "SELECT * FROM registration WHERE lname = ? AND fname = ? AND mname = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param('sss', $lname, $fname, $mname);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        echo '<script>
            window.onload = function() {
                Swal.fire({
                    title: "Error!",
                    text: "Name already exists.",
                    icon: "error"
                });
            };
        </script>';
    } else {
        // Insert new record sa database
        $sql_insert = "INSERT INTO registration 
                        (lname, fname, mname, homeAdd, presentAdd, contact, sex, dateOfbirth, email, placeOfbirth, civilstatus, elementary, elemgraduated, highschool, highgraduated, shs, shsgraduated, track_strand, course) 
                       VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param('sssssssssssssssssss', $lname, $fname, $mname, $homeAdd, $presentAdd, $contact, $sex, $dateOfbirth, $email, $placeOfbirth, $civilstatus, $elementary, $elemgraduated, $highschool, $highgraduated, $shs, $shsgraduate, $track_strand, $course);

        if ($stmt_insert->execute()) {
          echo '<script>
          window.onload = function() {
              Swal.fire({
                  title: "Success!",
                  text: "New Record created successfully.",
                  icon: "success"
              }).then(() => {
                  window.location.href = "index.php"; // Redirect after confirmation
              });
          };
        </script>';
        } else {
            echo "<script>
                Swal.fire({
                    title: 'Error!',
                    text: 'Failed to create a new record.',
                    icon: 'error'
                });
            </script>";
        }

        $stmt_insert->close();
    }

    $stmt_check->close();
}
?>