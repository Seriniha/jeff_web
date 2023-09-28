<!DOCTYPE html>
<html>
<head>
    <title>Seriniha's | Employee Payroll</title>
    <link rel="stylesheet" type="text/css" href="css/"/>
</head>
<style>
body {
    font-family: Consolas, sans-serif;
    background-color: #f5f5f5;
    text-align: center;
    margin: 0;
    padding: 0;
}

.container {
    width: 75%;
    display: flex;
    justify-content: space-between;
    padding: 20px;
    margin: 0 auto;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
}

/* columns */
.left-column,
.right-column {
    width: 50%;
    padding: 20px;
    background-color: #f9f9f9;
    text-align: left;
}

/* text box */
input[type="text"] {
    width: 90%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
}

input[type="text"]:read-only {
    background-color: #dcdcdc;
}

.column input[type="text"] {
    width: 100%;
}

/* buttons */
.search-btn,
.blue-btn,
.green-btn,
.new-btn {
    background-color: #007dfa;
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 3px;
    cursor: pointer;
    font-weight: bold;
    margin-bottom: 10px;
}

.search-btn:hover,
.blue-btn:hover,
.green-btn:hover,
.new-btn:hover {
    background-color: #005cb8;
}

.green-btn {
    background-color: #00d0bc;
}

.green-btn:hover {
    background-color: #00af9e;
}

.new-btn {
    background-color: #ffcc00;
}

.new-btn:hover {
    background-color: #cea500;
}

/* picture */
.pic {
    width: 200px;
    height: 200px;
    border: 3px solid rgb(0, 0, 0);
    overflow: hidden;
    box-shadow: 0 0 5px;
    margin-bottom: 30px;
    display: inline-block;
}

/* label */
label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

h1 {
    font-family: sans-serif;
}
</style>
<body>
    <h1>EMPLOYEE BASIC INFO</h1>
    <div class="container">
        <div class="left-column">
            <h2>Employee Basic Info:</h2>
            <form action="" method="post">
                <div class="pic">
                    <img src="bgimage/null.jpg" width="200px" height="200px">
                </div>
                <div class="form-group">
                    <label for="employee_number">Employee Number:</label>
                    <input type="text" id="employee_number" name="employee_number" required>
                </div>
                <div class="form-group">
                    <label for="search-button">Search Employee:</label>
                    <button type="submit" class="search-btn">Search</button>
                </div>
                <div class="form-group">
                    <label for="department">Department:</label>
                    <input type="text" id="department" name="department" readonly>
                </div>
                <h2>Basic Income:</h2>
                    <div class="form-group">
                        <label for="rate_per_hour">Rate / Hour:</label>
                        <input type="text" id="rate_per_hour" name="rate_per_hour" required>
                    </div>
                    <div class="form-group">
                        <label for="hours_per_cutoff">No. of Hours / Cut Off:</label>
                        <input type="text" id="hours_per_cutoff" name="hours_per_cutoff" required>
                    </div>
                    <div class="form-group">
                        <label for="income_per_cutoff">Income / Cut Off:</label>
                        <input type="text" id="income_per_cutoff" name="income_per_cutoff" readonly>
                    </div>
                <h2>Honorarium Income:</h2>
                    <div class="form-group">
                        <label for="rate_per_hour">Rate / Hour:</label>
                        <input type="text" id="rate_per_hour" name="rate_per_hour" required>
                    </div>
                    <div class="form-group">
                        <label for="hours_per_cutoff">No. of Hours / Cut Off:</label>
                        <input type="text" id="hours_per_cutoff" name="hours_per_cutoff" required>
                    </div>
                    <div class="form-group">
                        <label for="income_per_cutoff">Income / Cut Off:</label>
                        <input type="text" id="income_per_cutoff" name="income_per_cutoff" readonly>
                    </div>
                    <h2>Other Income:</h2>
                    <div class="form-group">
                        <label for="rate_per_hour">Rate / Hour:</label>
                        <input type="text" id="rate_per_hour" name="rate_per_hour" required>
                    </div>
                    <div class="form-group">
                        <label for="hours_per_cutoff">No. of Hours / Cut Off:</label>
                        <input type="text" id="hours_per_cutoff" name="hours_per_cutoff" required>
                    </div>
                    <div class="form-group">
                        <label for="income_per_cutoff">Income / Cut Off:</label>
                        <input type="text" id="income_per_cutoff" name="income_per_cutoff" readonly>
                    </div>
                <h2>Summary Income:</h2>
                    <div class="form-group">
                        <label for="gross_incom">Gross Income:</label>
                        <input type="text" id="gross_income" name="gross_income" required>
                    </div>
                    <div class="form-group">
                        <label for="net_income">Net Income:</label>
                        <input type="text" id="net_income" name="net_income" readonly>
                    </div>
            </form>
        </div>
        <div class="right-column">
            <form action="" method="post">
                <br><br></br></br>
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" id="first_name" name="first_name" readonly>
                </div>
                <div class="form-group">
                    <label for="middle_name">Middle Name:</label>
                    <input type="text" id="middle_name" name="middle_name" readonly>
                </div>
                <div class="form-group">
                    <label for="surname">Surname:</label>
                    <input type="text" id="surname" name="surname" readonly>
                </div>
                <div class="form-group">
                    <label for="civil_status">Civil Status:</label>
                    <input type="text" id="civil_status" name="civil_status" readonly>
                </div>
                <div class="form-group">
                    <label for="qualified_dependents">Qualified Dependents:</label>
                    <input type="text" id="qualified_dependents" name="qualified_dependents" readonly>
                </div>
                <div class="form-group">
                    <label for="paydate">Paydate:</label>
                    <input type="text" id="paydate" name="paydate" required>
                </div>
                <div class="form-group">
                    <label for="employee_status">Employee Status:</label>
                    <input type="text" id="employee_status" name="employee_status" readonly>
                </div>
                <div class="form-group">
                    <label for="designation">Designation:</label>
                    <input type="text" id="designation" name="designation" readonly>
                </div>
                <h2>Regular Deductions:</h2>
                    <div class="form-group">
                        <label for="sss_contribution">SSS Contribution:</label>
                        <input type="text" id="sss_contribution" name="sss_contribution" readonly>
                    </div>
                    <div class="form-group">
                        <label for="philhealth_contribution">Philhealth Contribution:</label>
                        <input type="text" id="philhealth_contribution" name="philhealth_contribution" readonly>
                    </div>
                    <div class="form-group">
                        <label for="pagibig_contribution">Pag-IBIG Contribution:</label>
                        <input type="text" id="pagibig_contribution" name="pagibig_contribution" readonly>
                    </div>
                    <div class="form-group">
                        <label for="income_tax_contribution">Income Tax Contribution:</label>
                        <input type="text" id="income_tax_contribution" name="income_tax_contribution" readonly>
                    </div>
                <h2>Other Deductions:</h2>
                    <div class="form-group">
                        <label for="sss_loan">SSS Loan:</label>
                        <input type="text" id="sss_loan" name="sss_loan" required>
                    </div>
                    <div class="form-group">
                        <label for="pagibig_loan">Philhealth Contribution:</label>
                        <input type="text" id="pagibig_loan" name="pagibig_loan" required>
                    </div>
                    <div class="form-group">
                        <label for="faculty_savings_deposit">Faculty Savings Deposit:</label>
                        <input type="text" id="faculty_savings_deposit" name="faculty_savings_deposit" required>
                    </div>
                    <div class="form-group">
                        <label for="faculty_savings_loan">Faculty Savings Loan:</label>
                        <input type="text" id="faculty_savings_loan" name="faculty_savings_loan" required>
                    </div>
                    <div class="form-group">
                        <label for="salary_loan">Salary Loan:</label>
                        <input type="text" id="salary_loan" name="salary_loan" required>
                    </div>
                    <div class="form-group">
                        <label for="other_loan">Other Loan:</label>
                        <input type="text" id="other_loan" name="other_loan" required>
                    </div>
                <h2>Deduction Summary:</h2>
                    <div class="form-group">
                        <label for="total_deductions">Total Deductions:</label>
                        <input type="text" id="total_deductions" name="total_deductions" readonly>
                    </div>
            </form>
            <div>
                <button type="button" class="blue-btn">GROSS INCOME</button>
                <button type="button" class="blue-btn">NET INCOME</button>
                <button type="button" class="green-btn">SAVE</button>
                <button type="button" class="green-btn">UPDATE</button>
                <button type="button" class="new-btn">NEW</button>
            </div>
        </div>
    </div>
</body>
</html>
