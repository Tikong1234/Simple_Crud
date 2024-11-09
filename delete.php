<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
include "connect.php";

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    // Prepare the delete statement to prevent SQL injection
    $sql = "DELETE FROM `registration` WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo '<script>
                window.onload = function() {
                    Swal.fire({
                        title: "Success!",
                        text: "Record deleted successfully.",
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
                        text: "Failed to delete record: ' . $stmt->error . '",
                        icon: "error"
                    });
                };
              </script>';
    }

    $stmt->close();
}
?>
