function calculate() {
    const itemPrice = parseFloat(document.getElementById("price").value);
    const quantity = parseInt(document.getElementById("quantity").value);
    const discountPercentage = parseInt(document.getElementById("discount_percentage").value) / 100;

    let totalAmount = itemPrice * quantity;

    // Apply discounts based on user selection
    const discountOption = document.querySelector('input[name="discount_option"]:checked').value;
    if (discountOption === "senior_citizen") {
        totalAmount *= (1 - 0.20); // 20% discount for senior citizen
    } else if (discountOption === "with_disc_card") {
        totalAmount *= (1 - 0.15); // 15% discount for with discount card
    } else if (discountOption === "employee_disc") {
        totalAmount *= (1 - 0.10); // 10% discount for employee discount
    }

    // Update the total amount
    document.getElementById("total_amount").value = totalAmount.toFixed(2);
    }

    // Listen for changes in the discount options and recalculate on change
    document.querySelectorAll('input[name="discount_option"]').forEach(function (radio) {
        radio.addEventListener("change", calculate);
    });

    // Calculate initially
    calculate();
        // Function to calculate change
    function calculateChange() {
        const cashGiven = parseFloat(document.getElementById("cash_given").value);
        const totalPrice = parseFloat(document.getElementById("price").value);
        // You may need to calculate the total price based on the selected items.

        if (!isNaN(cashGiven) && !isNaN(totalPrice)) {
            const change = cashGiven - totalPrice;
            document.getElementById("change").value = change.toFixed(2);
        } else {
            alert("Please enter valid numbers for Cash Given and Total Price.");
        }
    }

    // Function to clear the calculator
    function clearCalculator() {
        document.getElementById("calculatorInput").value = "";
    }

    // Function to save data
    function saveData() {
        // Implement your save data logic here
        alert("Data saved.");
    }

    // Function to update data
    function updateData() {
        // Implement your update data logic here
        alert("Data updated.");
    }
        function toggleOptions() {
            var optionsColumn = document.getElementById("optionsColumn");
            if (optionsColumn.style.display === "block") {
                optionsColumn.style.display = "none";
            } else {
                optionsColumn.style.display = "block";
            }
        }
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
    });
    // Function to enable/disable the discount input field based on the selected radio button
    function updateDiscountInput() {
        const discountInput = document.getElementById("discount_percentage");
        const discountOption = document.querySelector('input[name="discount_option"]:checked').value;

        // Define the discount percentages
        const discountPercentages = {
            "senior_citizen": 20,
            "with_disc_card": 15,
            "employee_disc": 10,
            "no_discount": 0
        };

        // Set the discount percentage based on the selected option
        discountInput.value = discountPercentages[discountOption];
        discountInput.disabled = discountOption === "no_discount"; // Disable if no discount is selected
    }

    // Listen for changes in the discount options and update the discount input
    document.querySelectorAll('input[name="discount_option"]').forEach(function (radio) {
        radio.addEventListener("change", updateDiscountInput);
    });

    // Update the discount input initially
    updateDiscountInput();

    // Function to calculate the total amount
    function calculate() {
        const itemPrice = parseFloat(document.getElementById("price").value);
        const quantity = parseInt(document.getElementById("quantity").value);
        const discountPercentage = parseInt(document.getElementById("discount_percentage").value) / 100;

        let totalAmount = itemPrice * quantity;

        // Apply the discount based on the discount percentage
        totalAmount *= (1 - discountPercentage);

        // Update the total amount
        document.getElementById("total_amount").value = totalAmount.toFixed(2);
    }

    // Listen for changes in item price, quantity, and discount percentage, and recalculate on change
    document.getElementById("price").addEventListener("input", calculate);
    document.getElementById("quantity").addEventListener("input", calculate);
    document.getElementById("discount_percentage").addEventListener("input", calculate);

    // Calculate initially
    calculate();
    
    function toggleOptions() {
        var optionsColumn = document.getElementById("optionsColumn");
        if (optionsColumn.style.display === "none" || optionsColumn.style.display === "") {
            optionsColumn.style.display = "block"; // Show the options column
        } else {
            optionsColumn.style.display = "none"; // Hide the options column
        }
    }