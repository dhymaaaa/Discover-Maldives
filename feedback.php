<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        .review {
            background: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .review h3 {
            margin: 0;
            color: #333;
        }

        .review .rating {
            color: #ff9900;
        }

        .review p {
            color: #666;
        }
    </style>
</head>

<body>
    <?php include('layout/nav.php'); ?>

    <div class="main_content testimonials-section">
        <h1 class="page_title">Customer Reviews</h1>
        <?php
        include('db_connection.php');
        $sql = "SELECT fname, lname, rating, concern FROM feedback";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<div class="review">';
                echo '<h3>' . htmlspecialchars($row["fname"]) . ' ' . htmlspecialchars($row["lname"]) . '</h3>';
                echo '<div class="rating">Rating: ' . htmlspecialchars($row["rating"]) . '</div>';
                echo '<p>' . htmlspecialchars($row["concern"]) . '</p>';
                echo '</div>';
            }
        } else {
            echo "<p>No reviews found</p>";
        }
        $con->close();
        ?>
    </div>

    <?php include('layout/footer.php'); ?>
</body>

</html>