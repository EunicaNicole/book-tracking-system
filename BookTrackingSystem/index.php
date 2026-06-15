<?php
include 'connection/dbconn.php';

// Pinalitan natin ng ASC para mag-umpisa sa pinakaunang libro papunta sa pinakabago
$query = "SELECT * FROM books ORDER BY id ASC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Tracking System Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .dashboard-container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-top: 5px solid #00592D;
        }

        h2 {
            color: #00592D;
            border-bottom: 3px solid #FFD700;
            padding-bottom: 10px;
            margin-top: 0;
        }

        .action-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .btn-add {
            background-color: #00592D;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 4px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .btn-add:hover {
            background-color: #FFD700;
            color: #00592D;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #00592D;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .status-available {
            color: #00592D;
            font-weight: bold;
        }

        .status-borrowed {
            color: #d9534f;
            font-weight: bold;
        }

        .action-links a {
            text-decoration: none;
            padding: 6px 10px;
            border-radius: 4px;
            font-size: 13px;
            font-weight: bold;
            margin-right: 5px;
            display: inline-block;
        }

        /* BINAGO ANG KULAY: SPUP Green para sa Borrow */
        .btn-borrow {
            background-color: #00592D;
            color: white;
        }

        .btn-borrow:hover {
            background-color: #003d1f;
        }

        /* BINAGO ANG KULAY: SPUP Gold/Yellow para sa Return */
        .btn-return {
            background-color: #FFD700;
            color: #00592D;
        }

        .btn-return:hover {
            background-color: #e6c200;
        }

        .btn-disabled {
            background-color: #cccccc;
            color: #666666;
            cursor: not-allowed;
        }
    </style>
</head>

<body>

    <div class="dashboard-container">
        <h2>Book Tracking System</h2>

        <div class="action-bar">
            <p>Library Inventory Overview</p>
            <a href="book_add_form.php" class="btn-add">+ Add New Book</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Book Title</th>
                    <th>Genre</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Time Borrowed</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    $counter = 1; // Mag-uumpisa sa 1 ang numbering natin

                    while ($row = mysqli_fetch_assoc($result)) {
                        $statusClass = ($row['status'] == 'Available') ? 'status-available' : 'status-borrowed';
                        $timeBorrowed = ($row['time_borrowed']) ? $row['time_borrowed'] : '--:--:--';

                        echo "<tr>";
                        echo "<td>" . $counter . "</td>"; // Dito lalabas yung 1, 2, 3...
                        echo "<td>" . $row['title'] . "</td>";
                        echo "<td>" . $row['genre'] . "</td>";
                        echo "<td>" . $row['quantity'] . "</td>";
                        echo "<td class='$statusClass'>" . $row['status'] . "</td>";
                        echo "<td>" . $timeBorrowed . "</td>";

                        echo "<td class='action-links'>";

                        if ($row['quantity'] > 0) {
                            echo "<a href='functions/book_borrow.php?id=" . $row['id'] . "' class='btn-borrow'>Borrow</a>";
                        } else {
                            echo "<a href='#' class='btn-disabled' onclick='return false;'>Out of Stock</a>";
                        }

                        echo "<a href='functions/book_return.php?id=" . $row['id'] . "' class='btn-return'>Return</a>";

                        echo "</td>";
                        echo "</tr>";

                        $counter++; // Magpa-plus 1 siya sa susunod na row
                    }
                } else {
                    echo "<tr><td colspan='7' style='text-align:center;'>No books found in the inventory.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>