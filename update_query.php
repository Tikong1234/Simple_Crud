<?php 
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (isset($_POST['submit'])) {
        // Collect and sanitize user inputs
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
        $shsgraduated = $_POST['shsgraduated'];
        $track_strand = $_POST['track_strand'];
        $course = $_POST['course'];

        // Prepare SQL query to update data if all inputted data is okay
        $sql = "UPDATE `registration` SET `lname` = ?, `fname` = ?, `mname` = ?, `homeAdd` = ?, `presentAdd` = ?, `contact` = ?, `sex` = ?, `dateOfbirth` = ?, `email` = ?, `placeOfbirth` = ?, `civilstatus` = ?, `elementary` = ?, `elemgraduated` = ?, `highschool` = ?, `highgraduated` = ?, `shs` = ?, `shsgraduated` = ?, `track_strand` = ?, `course` = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bind_param("sssssssssssssssssssi", $lname, $fname, $mname, $homeAdd, $presentAdd, $contact, $sex, $dateOfbirth, $email, $placeOfbirth, $civilstatus, $elementary, $elemgraduated, $highschool, $highgraduated, $shs, $shsgraduated, $track_strand, $course, $id);

        // Execute the statement and check for success
        if ($stmt->execute()) {
            echo '<script>
                window.onload = function() {
                    Swal.fire({
                        title: "Success!",
                        text: "Updated successfully.",
                        icon: "success"
                    }).then(() => {
                        window.location.href = "index.php"; // Redirect after confirmation
                    });
                };
            </script>';
        } else {
            echo '<script>
                window.onload = function() {
                    Swal.fire({
                        title: "Error!",
                        text: "Failed to update record: ' . $stmt->error . '",
                        icon: "error"
                    });
                };
            </script>';
        }

        $stmt->close();
    }
} else {
    echo "Invalid request.";
}
?>