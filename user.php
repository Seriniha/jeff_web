<!DOCTYPE html>
<html>
<head>
    <title>User Account Page</title>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        label.required::after {
            content: " *";
            color: red;
        }

        label.optional::after {
            content: " (optional)";
            color: #555;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box; /* Include padding and borders within width */
        }

        .blue-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            cursor: pointer;
        }

        .yellow-button {
            background-color: #ffcc00;
            color: #000;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            cursor: pointer;
        }

        .white-button {
            background-color: #fff;
            color: #000;
            border: 1px solid #ccc;
            padding: 10px 15px;
            border-radius: 3px;
            cursor: pointer;
        }

        .picture-box {
            float: right;
            margin-left: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="picture-box">
            <img src="bgimage/null.jpg" alt="User Image" width="100" height="100">
        </div>
        <h1>User Account Page</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="first_name" class="required">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="middle_name" class="optional">Middle Name:</label>
                <input type="text" id="middle_name" name="middle_name">
            </div>
            <div class="form-group">
                <label for="last_name" class="required">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <!-- Other form fields (suffix, department, designation, etc.) go here -->

            <div class="form-group">
                <label for="username" class="required">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password" class="required">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password" class="required">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>

            <div class="form-group">
                <label for="user_type" class="required">User Type:</label>
                <input type="text" id="user_type" name="user_type" required>
            </div>
            <div class="form-group">
                <label for="user_status" class="required">User Status:</label>
                <input type="text" id="user_status" name="user_status" required>
            </div>
            <div class="form-group">
                <label for="employee_number" class="required">Employee Number:</label>
                <input type="text" id="employee_number" name="employee_number" required>
            </div>

            <div class="form-group">
                <button type="submit" class="blue-button" name="update">Update</button>
                <button type="submit" class="yellow-button" name="delete">Delete</button>
                <button type="button" class="white-button" name="cancel">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>
