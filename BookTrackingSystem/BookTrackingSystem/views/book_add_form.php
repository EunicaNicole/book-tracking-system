<!DOCTYPE html>
<html>

<head>
    <title>Add New Book</title>
</head>

<body>

    <h2>Add New Book</h2>

    <form action="../functions/book_add.php" method="POST">

        <label>Book Title:</label><br>
        <input type="text" name="title" required>
        <br><br>

        <label>Genre:</label><br>
        <select name="genre">
            <option value="Engineering">Engineering</option>
            <option value="IT">Information Technology</option>
            <option value="Nursing">Nursing</option>
            <option value="General Education">General Education</option>
        </select>
        <br><br>

        <label>Quantity:</label><br>
        <input type="number" name="quantity" min="1" required>
        <br><br>

        <button type="submit" name="submit">
            Save Book
        </button>

        <a href="../index.php">Cancel</a>

    </form>

</body>

</html>