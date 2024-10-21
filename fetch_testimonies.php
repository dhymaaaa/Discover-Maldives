<?php
include('db_connection.php');

$result = mysqli_query($con, "SELECT concern FROM feedback");

$testimonies = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $testimonies[] = $row['concern'];
    }
} else {
    echo 'No testimonies found.';
}

?>