<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['user_id'];
    $reservationTime = $_POST['time'];
    $numPeople = $_POST['num_people'];
    
    function makeReservation($userId, $reservationTime, $numPeople) {
        global $conn;
        $sql = "INSERT INTO reservations (user_id, time, num_people) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isi", $userId, $reservationTime, $numPeople);
        
        if ($stmt->execute()) {
            echo "Reservation made successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }

    makeReservation($userId, $reservationTime, $numPeople);
}
?>
