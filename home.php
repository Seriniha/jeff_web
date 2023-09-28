<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seriniha - Home</title>
    <style>
        body {
            background-image: url('bgimage/wavebg.jpg'); /* Replace 'your-background-image.jpg' with your image file path */
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            font-family: Georgia, serif; /* Change to Georgia font */
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            height: 100vh; /* Make the interface centered vertically */
            margin: 0; /* Remove default margin */
        }

        h1 {
            font-size: 36px;
            color: #333;
        }

        form {
            background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background */
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-top: 20px; /* Adjust margin to move the form down */
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #333;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Welcome to Seriniha</h1>
    
    <form action="category.php" method="GET">
        <label for="category">Select a category:</label>
        <select name="category" id="category">
            <option value="burgers">Burgers</option>
            <option value="pastries">Pastries</option>
            <option value="peripherals">Peripherals</option>
            <option value="soda">Soda</option>
            <option value="appliances">Appliances</option>
        </select>
        <button type="submit">Go</button>
    </form>
</body>
</html>
