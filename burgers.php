<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kashimo's Shop</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/burgers.css"> <!-- Make sure to include the correct CSS file -->
    <script src="js/burgers.js"></script>
</head>
<style>
    body {
    background-image: url('bgimage/whiteviolet1.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<body>
<div class="container page_border"> 
    <h1 style="text-align:center; margin-top:10px; font-size:70px; font-family:Algerian; color:black">Kashimo's Burger</h1>
    <div class="vertical-rectangle"></div>
    <div style="float:left" >
        <div class="pic_group">
            <div class="pic_option">
                <h1 style="text-align:center; margin-top:10px; font-size:30px; font-family:Algerian; color:black">Burger Menu</h1>
                <div class="collapsible-tab" onclick="toggleOptions()">
                        <div class="icon">&#9776;</div> <!-- Three parallel lines icon -->
                        More Shops
                </div>
                <!-- Hidden options column -->
                <div class="options-column" id="optionsColumn">
                    <ul class="options-list">
                        <li class="options-list-item"><a href="pastries.php">Pastry</a></li>
                        <li class="options-list-item"><a href="peripherals.php">Peripherals</a></li>
                        <li class="options-list-item"><a href="soda.php">Soda</a></li>
                        <li class="options-list-item"><a href="appliances.php">Appliances</a></li>
                        <li class="options-list-item"><a href="admin.php">Home</a></li>
                    </ul>
                </div>
                <div class="row">
                    <script>
                        const burgerItems = [
                            { name: "Burger1", price: 109 },
                            { name: "Burger2", price: 49 },
                            { name: "Burger3", price: 119 },
                            { name: "Burger4", price: 129 },
                            { name: "Burger5", price: 89 },
                            { name: "Burger6", price: 149 },
                            { name: "Burger7", price: 109 },
                            { name: "Burger8", price: 99 },
                            { name: "Burger9", price: 209 },
                            { name: "Burger10", price: 89 },
                            { name: "Burger11", price: 79 },
                            { name: "Burger12", price: 49 },
                            { name: "Burger13", price: 109 },
                            { name: "Burger14", price: 109 },
                            { name: "Burger15", price: 109 },
                            { name: "Burger16", price: 109 },
                            { name: "Burger17", price: 99 },
                            { name: "Burger18", price: 119 },
                            { name: "Burger19", price: 69 },
                            { name: "Burger20", price: 99 }
                        ];

                        for (let i = 0; i < burgerItems.length; i++) {
                            const item = burgerItems[i];
                            document.write(`
                                <div class="col-md-3">
                                    <div>
                                        <img src="burger_images/${i + 1}.png" data-toggle="tooltip" data-placement="center" title="burger" width="170" height="180" alt="${item.name}">
                                        <div>
                                            <input type="checkbox" name="check_${i + 1}" id="check_${i + 1}" data-name="${item.name}" data-price="${item.price}">
                                            <label for="check_${i + 1}">${item.name} (P${item.price})</label>
                                        </div>
                                    </div>
                                </div>
                            `);
                        }

                        // Event listener for checkbox click
                        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
                        checkboxes.forEach((checkbox) => {
                            checkbox.addEventListener("click", () => {
                                // Check if the checkbox is checked
                                if (checkbox.checked) {
                                    const itemName = checkbox.getAttribute("data-name");
                                    const itemPrice = checkbox.getAttribute("data-price");

                                    // Update the "Name of Item" and "Price" input fields
                                    document.getElementById("item_name").value = itemName;
                                    document.getElementById("price").value = itemPrice;
                                } else {
                                    // Clear the "Name of Item" and "Price" input fields if the checkbox is unchecked
                                    document.getElementById("item_name").value = "";
                                    document.getElementById("price").value = "";
                                }
                            });
                        });
                    </script>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-6">
    <!-- Left Column: Order Details -->
        <h2>Order Details</h2>
        <div class="form-group">
            <label for="item_name">Name of Item:</label>
            <input type="text" class="form-control" id="item_name" name="item_name">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="text" class="form-control" id="quantity" name="quantity">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="form-group">
            <label for="discount">Discount Amount:</label>
            <input type="text" class="form-control" id="discount" name="discount" readonly>
        </div>
        <div class="form-group">
            <label for="discounted_amount">Discounted Amount:</label>
            <input type="text" class="form-control" id="discounted_amount" name="discounted_amount" readonly>
        </div>
        <div class="form-group">
            <label for="total_quantity">Total Quantity:</label>
            <input type="text" class="form-control" id="total_quantity" name="total_quantity" readonly>
        </div>
        <div class="form-group">
            <label for="total_discount_given">Total Discount Given:</label>
            <input type="text" class="form-control" id="total_discount_given" name="total_discount_given" readonly>
        </div>
        <div class="form-group">
            <label for="total_discounted_amount">Total Discounted Amount:</label>
            <input type="text" class="form-control" id="total_discounted_amount" name="total_discounted_amount" readonly>
        </div>
        <div class="form-group">
            <label for="cash_given">Cash Given:</label>
            <input type="text" class="form-control" id="cash_given" name="cash_given">
        </div>
        <div class="form-group">
            <label for="change">Change:</label>
            <input type="text" class="form-control" id="change" name="change" readonly>
        </div>
    </div>

    <div class="col-md-6">
    <!-- Right Column: Calculator for Order Details -->
    <h2>Calculator</h2>

    <!-- Discount Options: Radio Buttons -->
    <div class="form-group">
        <label>Discount Options:</label>
        <div>
            <label>
                <input type="radio" name="discount_option" value="senior_citizen"> Senior Citizen
            </label>
        </div>
        <div>
            <label>
                <input type="radio" name="discount_option" value="with_disc_card"> With Discount Card
            </label>
        </div>
        <div>
            <label>
                <input type="radio" name="discount_option" value="employee_disc"> Employee Discount
            </label>
        </div>
        <div>
            <label>
                <input type="radio" name="discount_option" value="no_discount" checked> No Discount
            </label>
        </div>
    </div>
    <!-- Add a Discount input field -->
    <div class="form-group">
        <label for="discount_percentage">Discount Percentage (%):</label>
        <input type="number" class="form-control" id="discount_percentage" name="discount_percentage" min="0" max="100" value="0" disabled>
    </div>
    <div>
            <button class="btn btn-primary" onclick="calculateChange()">Calculate Change</button>
            <button class="btn btn-danger" onclick="clearCalculator()">NEW</button>
            <button class="btn btn-warning" onclick="saveData()">SAVE</button>
            <button class="btn btn-dark" onclick="updateData()">UPDATE</button>
        </div>
    <!-- Calculator: Enter and Arithmetic Buttons -->
    <div>
        <!-- Calculator Display -->
        <input type="text" id="calculatorInput" class="form-control" disabled>
    </div>
    <div>
        <!-- Arithmetic Calculator -->
        <div>
            <button class="btn btn-secondary" onclick="addToCalculator('7')">7</button>
            <button class="btn btn-secondary" onclick="addToCalculator('8')">8</button>
            <button class="btn btn-secondary" onclick="addToCalculator('9')">9</button>
            <button class="btn btn-secondary" onclick="addToCalculator('+')">+</button>
        </div>
        <div>
            <button class="btn btn-secondary" onclick="addToCalculator('4')">4</button>
            <button class="btn btn-secondary" onclick="addToCalculator('5')">5</button>
            <button class="btn btn-secondary" onclick="addToCalculator('6')">6</button>
            <button class="btn btn-secondary" onclick="addToCalculator('-')">-</button>
        </div>
        <div>
            <button class="btn btn-secondary" onclick="addToCalculator('1')">1</button>
            <button class="btn btn-secondary" onclick="addToCalculator('2')">2</button>
            <button class="btn btn-secondary" onclick="addToCalculator('3')">3</button>
            <button class="btn btn-secondary" onclick="addToCalculator('*')">*</button>
        </div>
        <div>
            <button class="btn btn-secondary" onclick="addToCalculator('0')">0</button>
            <button class="btn btn-secondary" onclick="addToCalculator('/')">/</button>
            <button class="btn btn-secondary" onclick="clearCalculator()">C</button>
            <button class="btn btn-success" onclick="calculate()">=</button>
        </div>
        <div>
            <!-- Enter Button -->
            <button id="enterButton" class="btn btn-primary">Enter</button>
        </div>
        
    </div>
</div>

    </div>
</div>

</body>
</html>