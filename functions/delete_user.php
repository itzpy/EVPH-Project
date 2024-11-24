<?php
function deleteUser($user_id)
{
    // Include database connection
    include "../db/db.php";

    // Check if user_id is valid
    if (!is_numeric($user_id) || $user_id <= 0) {
        return "Invalid User ID.";
    }

    // SQL to delete the user
    $query = "DELETE FROM users WHERE user_id = ?";

    if ($stmt = $conn->prepare($query)) {
        // Bind the user_id parameter
        $stmt->bind_param("i", $user_id);

        // Execute the query
        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                $stmt->close();
                $conn->close();
                return "User deleted successfully.";
            } else {
                $stmt->close();
                $conn->close();
                return "No user found with the provided ID.";
            }
        } else {
            $stmt->close();
            $conn->close();
            return "Error executing query: " . $stmt->error;
        }
    } else {

    }
}
