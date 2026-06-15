<?php
include 'connection/dbconn.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Book Tracking System</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
        }

        th {
            background: #f2f2f2;
        }

        a {
            text-decoration: none;
        }

        .btn {
            padding: 6px 12px;
            border-radius: 4px;
            color: white;
        }

        .borrow {
            background: green;
        }

        .return {
            background: orange;
        }

        .add {
            background: blue;
            color: white;
            padding: 8px 12px;
        }
    </style>

</head>

<body>

    <h1>Book Tracking System</h1>

    <form method="GET">

        <input type="text" name="search" placeholder="Search book..."
            value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">

        <button type="submit">
            Search
        </button>

        <a href="views/book_add_form.php" class="add">
            Add New Book
        </a>

    </form>

    <br>

    <table>

        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Quantity</th>
            <th>Status</th>
            <th>Date Added</th>
            <th>Time Borrowed</th>
            <th>Action</th>
        </tr>

        <?php

        if (isset($_GET['search']) && $_GET['search'] != '') {
            $search = mysqli_real_escape_string(
                $conn,
                $_GET['search']
            );

            $query = "
        SELECT *
        FROM books
        WHERE title LIKE '%$search%'
    ";
        } else {
            $query = "SELECT * FROM books";
        }

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>

                <tr>

                    <td>
                        <?php echo $row['id']; ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row['title']); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row['genre']); ?>
                    </td>

                    <td>
                        <?php echo $row['quantity']; ?>
                    </td>

                    <td>
                        <?php echo $row['status']; ?>
                    </td>

                    <td>
                        <?php echo $row['date_added']; ?>
                    </td>

                    <td>
                        <?php
                        echo $row['time_borrowed']
                            ? $row['time_borrowed']
                            : "-";
                        ?>
                    </td>

                    <td>

                        <?php if ($row['quantity'] > 0) { ?>

                            <a class="btn borrow" href="functions/book_borrow.php?id=<?php echo $row['id']; ?>">
                                Borrow
                            </a>

                        <?php } ?>

                        <a class="btn return" href="functions/book_return.php?id=<?php echo $row['id']; ?>">
                            Return
                        </a>

                    </td>

                </tr>

                <?php
            }
        } else {
            echo "
    <tr>
        <td colspan='8'>
            No books found.
        </td>
    </tr>";
        }
        ?>

    </table>

</body>

</html>