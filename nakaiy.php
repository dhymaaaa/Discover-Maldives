<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>Nakaiy</title>
</head>

<body>
    <?php include('layout/nav.php'); ?>
    <div class="main_content nakaiy_calendar">
        <h1 class="page_title">Nakaiy-Monsoon Calender</h1>
        <div class="nakaiy">
            <div class="all_nakaiy">
                <div class="current_nakiy card">
                    <?php
                    include('db_connection.php');
                    $date = date('Y-m-d', time());
                    $date_escaped = mysqli_real_escape_string($con, $date);
                    $query = mysqli_query($con, "SELECT * FROM nakaiy WHERE `start_date` < STR_TO_DATE('$date_escaped', '%Y-%m-%d') AND `end_date` > STR_TO_DATE('$date_escaped', '%Y-%m-%d')");
                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                        <div class="card-body">
                            <h3 class="card-title">Current nakaiy: <?php echo $row['name']; ?></h3>
                            <?php
                            echo "<span class='nakaiy-name'>" . $row['description'] . '</span><br>';
                            $end_date = $row['end_date'];
                            $end_date_timestamp = strtotime($end_date);
                            $current_date_timestamp = strtotime($date);
                            $days_left = ($end_date_timestamp - $current_date_timestamp) / 86400;
                            ?>
                            <p class='nakaiy-days-left'>Days left in the monsoon: <?php echo $days_left; ?></p>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="calendar_legend_container">
                    <div class="calendar">
                        <div class="months">
                            <span>January</span>
                            <span>February</span>
                            <span>March</span>
                            <span>April</span>
                            <span>May</span>
                            <span>June</span>
                            <span>July</span>
                            <span>August</span>
                            <span>September</span>
                            <span>October</span>
                            <span>November</span>
                            <span>December</span>
                        </div>
                        <?php
                        $query = mysqli_query($con, "SELECT * FROM nakaiy");
                        $all_rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
                        function getNakaiyForDate($date, $all_rows)
                        {
                            foreach ($all_rows as $nakaiy) {
                                $start_date = strtotime($nakaiy['start_date']);
                                $end_date = strtotime($nakaiy['end_date']);
                                if (date("m-d", $date) >= date("m-d", $start_date) && date("m-d", $date) <= date("m-d", $end_date))
                                    return $nakaiy;
                            }
                            return $all_rows[1];
                        }
                        $cols = 14;
                        $daysOfMonth = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
                        $months = ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec"];
                        $col = 1;
                        echo "<table class='nakaiy-table'><tbody>";
                        foreach ($daysOfMonth as $index => $days) {
                            for ($i = 1; $i <= $days; $i++) {
                                $thisDate = strtotime("$i-$months[$index]");
                                $thisNakaiy = getNakaiyForDate($thisDate, $all_rows);
                                if ($col == 1) echo "<tr>";
                                echo "<td style=background-color:{$thisNakaiy['color']}>$i</td>";
                                $col++;
                                if ($col > $cols) {
                                    echo "</tr>";
                                    $col = 1;
                                };
                            }
                        }
                        echo "</tbody></table>";
                        ?>
                    </div>
                    <div class="legend">
                        <?php
                        $query = mysqli_query($con, "SELECT color, name FROM nakaiy ORDER BY start_date");
                        while ($row = mysqli_fetch_assoc($query)) {
                            echo "<div class='legend-item'><span style='background-color: " . $row['color'] . "'></span>" . $row['name'] . "</div>";
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php include('layout/footer.php'); ?>
    <script src="script.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const legendItems = document.querySelectorAll('.legend-item');
            console.log(legendItems)

            legendItems.forEach(item => {
                item.addEventListener('mouseover', function() {
                    console.log(item)
                    const color = item.querySelector('span').style.backgroundColor;
                    highlightCells(color);
                });

                item.addEventListener('mouseout', function() {
                    clearHighlightedCells();
                });
            });

            function highlightCells(color) {
                const cells = document.querySelectorAll('.nakaiy-table td');
                cells.forEach(cell => {
                    if (cell.style.backgroundColor === color) {
                        cell.classList.add('highlight');
                    }
                });
            }

            function clearHighlightedCells() {
                const cells = document.querySelectorAll('.nakaiy-table td');
                cells.forEach(cell => {
                    cell.classList.remove('highlight');
                });
            }
        });
    </script>
</body>

</html>