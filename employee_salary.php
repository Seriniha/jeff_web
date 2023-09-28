<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee_Salary</title>
</head>
<body style="background:cyan">
<article>
<header style="text-align:center">
        <h1 style="font-style:bold; fontfamily:cursive; color:red">EMPLOYEE SALARY COMPUTATION DETAILS</h1>
        <?php
    //personal information entry
        $employee_number='';
        $position='';
        $department='';
        $firstname='';
        $middlename='';
        $surname='';
        $tax_exempt_var='';
    //sss contributions
        $employee_sss_contri='';
        $employer_sss_contri='';
        $total_sss_contri='';
    //pagibig contribution
        $pagibig='';
    //philhealth contributions
        $employee_philhealth_contri='';
        $employer_philhealth_contri='';
        $total_philhealth_contri='';
    //tax input in amount
        $tax='';
    //input data for computation of employee salary
        $rate_per_hour='';
        $hours_per_day='';
        $days_per_week='';
        $weeks_per_month='';
    //for formulation of formula needed
        $deduction='';
        $gross_income='';
        $monthly_net_income='';

        if($_SERVER['REQUEST_METHOD']=='POST'){
                $employee_number=$_POST['employee_number'];
                $firstname=$_POST['firstname'];
                $middlename=$_POST['middlename'];
                $surname=$_POST['surname'];
                $position=$_POST['position'];
                $department=$_POST['department'];
                $tax_exempt_var=$_POST['tax_exempt_var'];
                $pagibig=$_POST['pagibig'];
                $rate_per_hour=$_POST['rate_per_hour'];
                $hours_per_day=$_POST['hours_per_day'];
                $days_per_week=$_POST['days_per_week'];
                $weeks_per_month=$_POST['weeks_per_month'];
                $employee_sss_contri=$_POST['employee_sss_contri'];
                $employer_sss_contri=$_POST['employer_sss_contri'];
                $employee_philhealth_contri=$_POST['employee_philhealth_contri'];
                $employer_philhealth_contri=$_POST['employer_philhealth_contri'];
                $total_sss_contri=($employee_sss_contri+$employer_sss_contri);
                $total_philhealth_contri=($employer_philhealth_contri+$employee_philhealth_contri);
                $gross_income=(($rate_per_hour*$hours_per_day)*$days_per_week)*$weeks_per_month;
                $tax = $gross_income*.20;
                $deduction=$pagibig+$total_sss_contri+$total_philhealth_contri+$tax;
                $monthly_net_income=$gross_income-$deduction;
            }
        ?>
    <form action="employee_salary.php" method="POST">
            <span style="margin-left:57px">Employee Number:</span> <input type="text"
                name="employee_number" value="<?php echo $employee_number;?>"/>
        <br/>
        <span style="margin-left:126px" "padding-top:3px">Position:</span>
                <input type="text" name="position" value="<?php echo $position;?>"/>
        <br>
            <span style="margin-left:113px" "padding-top:3px">Firstname:</span>
                <input type="text" name="firstname" value="<?php echo $firstname;?>"/>
        <br>
            <span style="margin-left:90px" "padding-top:3px">Middle Name:</span>
                <input type="text" name="middlename" value="<?php echo $middlename;?>"/>
        <br>
            <span style="margin-left:121px" "padding-top:3px">Surname:</span>
                <input type="text" name="surname" value="<?php echo $surname;?>"/>
        <br>
            <span style="margin-left:103px" "padding-top:3px">Department:</span>
                <input type="text" name="department" value="<?php echo $department;?>"/>
        <br>
            <span style="margin-left:78px" "padding-top:3px">Tax Exemption:</span>
                <input type="text" name="tax_exempt_var" value="<?php echo $tax_exempt_var;?>"/>
        <br>
        <br>
            <span style="margin-left:-50px" ><font size="5px" color="dark orange">
                    SSS Contribution</font></span>
        <br>
            <span style="margin-left:35px" "padding-top:3px">Employer SSS Contribution:</span>
                <input type="text" name="employer_sss_contri" value="<?php echo $employer_sss_contri;?>"/>
        <br>
            <span style="margin-left:35px" "padding-top:3px">Employee SSS Contribution:</span>
                <input type="text" name="employee_sss_contri" value="<?php echo $employee_sss_contri;?>" />
        <br>
            <span style="margin-left:65px" "padding-top:3px">Total SSS Contribution:</span>
                <input type="text" name="total_sss_contri" value="<?php echo $total_sss_contri;?>" disabled/>
        <br>
        <br>
            <span style="margin-left:-50px" ><font size="5px" color="dark orange">
                    Pagibig Contribution</font></span>
        <br/>
            <span style="margin-left:80px" "padding-top:3px">Pagibig Contribution:</span>
                <input type="text" name="pagibig" value="<?php echo $pagibig;?>"/>
        <br>
        <br>
            <span style="margin-left:-85px"><font size="5px" color="dark orange">
                    Philhealth Contribution</font></span><br>
            <span style="margin-left:-5px" "padding-top:3px">Employee Philhealth Contribution:</span>
                <input type="text" name="employee_philhealth_contri" value="<?php echo $employee_philhealth_contri;?>" /></br>
            <span style="margin-left:-4px" "padding-top:3px">Employer Philhealth Contribution:</span>
                <input type="text" name="employer_philhealth_contri" value="<?php echo $employer_philhealth_contri;?>" /><br>
            <span style="margin-left:25px" "padding-top:3px">Total Philhealth Contribution:</span>
                <input type="text" name="total_philhealth_contri" value="<?php echo $total_philhealth_contri;?>" disabled/><br>
        <br>
            <span style="margin-left:38px" "padding-top:3px">Computed Income Tax:</span>
                <input type="text" name="tax" value="<?php echo $tax;?>" disabled />
        <br>
            <span style="margin-left:81px" "padding-top:3px">Total Deduction:</span>
                <input type="text" name="deduction" value="<?php echo $deduction;?>" disabled />
        <br>
            <span style="margin-left:94px" "padding-top:3px">Rate Per Hour:</span>
                <input type="text" name="rate_per_hour" value="<?php echo $rate_per_hour;?>"/>
        <br>
            <span style="margin-left:-33px" "padding-top:3px">Number of working hours per day:</span>
                <input type="text" name="hours_per_day" value="<?php echo $hours_per_day;?>"/>
        <br>
            <span style="margin-left:-38px" "padding-top:3px">Number of working days per week:</span>
                <input type="text" name="days_per_week" value="<?php echo $days_per_week;?>"/>
        <br>
            <span style="margin-left:-55px" "padding-top:3px">Number of working weeks per month:</span>
                <input type="text" name="weeks_per_month" value="<?php echo $weeks_per_month;?>"/>
        <br>
            <span style="margin-left:27px" "padding-top:3px">Employee Gross Income:</span>
                <input type="text" name="gross_income" value="<?php echo $gross_income;?>"disabled />
        <br>
            <span style="margin-left:-18px" "padding-top:3px">Employee Monthly Net Income:</span>
                <input type="text" name="monthly_net_income" value="<?php echo$monthly_net_income;?>" disabled />
        <br>
            <span style="margin-left:70px">Calculate Button:</span>
                <input type="submit" name="calculate_salary" value="submit"/>
        </form>
    </header>
</article>
</body>
</html>
