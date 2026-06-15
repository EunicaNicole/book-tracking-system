<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6; 
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            border-top: 5px solid #00592D; 
        }
        h2 {
            color: #00592D; 
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #FFD700; 
            padding-bottom: 10px;
        }
        label {
            font-weight: bold;
            color: #00592D; 
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; 
            font-size: 14px;
        }
        input:focus, select:focus {
            outline: none;
            border-color: #00592D;
            box-shadow: 0 0 5px rgba(0, 89, 45, 0.3);
        }
        button[type="submit"] {
            background-color: #00592D; 
            color: #ffffff;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-bottom: 15px;
        }
        button[type="submit"]:hover {
            background-color: #FFD700; 
            color: #00592D; 
        }
        a.cancel-link {
            display: block;
            text-align: center;
            color: #666;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }
        a.cancel-link:hover {
            color: #d9534f; 
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Add New Book</h2>

        <form action="../functions/book_add.php" method="POST">
            <label for="title">Book Title:</label>
            <input type="text" id="title" name="title" placeholder="Enter book title" required>

            <label for="genre">Department / Genre:</label>
            <select id="genre" name="genre">
                <option value="Engineering">Engineering</option>
                <option value="IT">Information Technology</option>
                <option value="Nursing">Nursing</option>
                <option value="General Education">General Education</option>
            </select>

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" value="1" required>

            <button type="submit" name="submit">Save Book</button>

            <a href="../index.php" class="cancel-link">Cancel</a>
        </form>
    </div>

</body>
</html>