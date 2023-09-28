<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    .payrol_form_group1 div span {
        float:left;
        width:180px;
        margin-top:5px;
        margin-left:20px;
    }    
    .payrol_form_group1 div {
        float:left;
        margin-bottom:10px;
    }
    .input_box1 {
        clear:none;
        width:230px;
    }
    .payrol_form_group div span {
        float:left;
        width:180px;
        margin-top:5px;
        margin-left:20px;
    }
    .payrol_form_group div {
        float:left;
        clear:both;
        margin-bottom:10px;
    }
    .input_box {
        clear:none;
        width:230px;
    }
    .deduction_form_group div {
        float:left;
        clear:both;
        margin-bottom:10px;
    }
    .deduction_form_group div span {
        float:left;
        width:180px;
        margin-top:5px;
        margin-left:20px;
    }
    .deduction_box {
        clear:none;
        width:230px;
    }
    .page_border {
        width:100%;
        float:left;
        margin-top:40px;
        padding:40px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    }
</style>
</head>
    <body>
        <?php
            function empty_inputbox(){
                $employee_no ="";
                $employee_no="";
                $department="";
                $firstname="";
                $mname="";
                $surname="";
                $civil_status="";
                $designation="";
                $qualified_dependents="";
                $paydate="";
                $emp_status="";
                //decleration of variables where inputs are stored
                $basic_rate_hour="";
                $basic_num_hours_cutoff="";
                $hono_rate_hour="";
                $hono_num_hours_cutoff="";
                $other_rate_hour="";
                $other_num_hours_cutoff="";
                $sss_contri=0.00;
                $philH_contri=0.00;
                $pagibig_contri=100.00;
                $tax_contri=0.00;
                $sss_loan="";
                $pagibig_loan="";
                $fs_deposit="";
                $fs_loan="";
                $salary_loan="";
                $other_loans="";
            }
            //decleration of variables with fix data value for employee info
            $employee_no="053103";
            $department="Department of Computer Engineer";
            $firstname="Jeffrey";
            $mname="Alpajora";
            $surname="Paderanga";
            $civil_status="In a Relationship";
            $designation="President";
            $qualified_dependents="ME";
            $paydate="May 31, 2023";
            $emp_status="Job Order";
            //decleration of variables where inputs are stored
            $basic_rate_hour="";
            $basic_num_hours_cutoff="";
            $hono_rate_hour="";
            $hono_num_hours_cutoff="";
            $other_rate_hour="";
            $other_num_hours_cutoff="";
            $sss_contri=0.00;
            $philH_contri=0.00;
            $pagibig_contri=100.00;
            $tax_contri=0.00;
            $sss_loan="";
            $pagibig_loan="";
            $fs_deposit="";
            $fs_loan="";
            $salary_loan="";
            $other_loans="";

            //declarion of variables that will the results of the given formula
            $basic_income_cutoff="";
            $hono_income_cutoff="";
            $other_income_cutoff="";
            $gross_income="";
            $net_income="";
            $total_deduct="";

            //getting input from textbox and place it inside the variable by calling the name of the inputs
            if($_SERVER["REQUEST_METHOD"]=="POST") {

                // to press Calculate Gross Income button
                if(isset($_POST["calculate_gross_income"])){
                    $basic_rate_hour=$_POST["basic_rate_hour"];
                    $basic_num_hours_cutoff=$_POST["basic_num_hours_cutoff"];
                    $hono_rate_hour=$_POST["hono_rate_hour"];
                    $hono_num_hours_cutoff=$_POST["hono_num_hours_cutoff"];
                    $other_rate_hour=$_POST["other_rate_hour"];
                    $other_num_hours_cutoff=$_POST["other_num_hours_cutoff"];
                    $sss_loan=$_POST["sss_loan"];
                    $pagibig_loan=$_POST["pagibig_loan"];
                    $fs_deposit=$_POST["fs_deposit"];
                    $fs_loan=$_POST["fs_loan"];
                    $salary_loan=$_POST["salary_loan"];
                    $other_loans=$_POST["other_loans"];
                    $qualified_dependents=$_POST["qualified_dependents"];

                    $basic_income_cutoff = $basic_rate_hour * $basic_num_hours_cutoff;
                    $hono_income_cutoff = $hono_rate_hour * $hono_num_hours_cutoff;
                    $other_income_cutoff = $other_rate_hour * $other_num_hours_cutoff;
                    $gross_income = $basic_income_cutoff + $hono_income_cutoff + $other_income_cut;
    off;

            //sss contribution
            if($gross_income>= 1000 && $gross_income<=1249){
            $sss_contri=73.70;
            } else if($gross_income>=1250 && $gross_income<=1749){
            $sss_contri=110.50;
            } else if($gross_income>=1750 && $gross_income<=2249){
            $sss_contri=147.30;
            } else if($gross_income>=2250 && $gross_income<=2749.99){
            $sss_contri=184.20;
            } else if($gross_income>=2750 && $gross_income<=3249.99){
            $sss_contri=221.00;
            } else if($gross_income>=3250 && $gross_income<=3749.99){
            $sss_contri=257.80;
            } else if($gross_income>=3750 && $gross_income<=4249.99){
            $sss_contri=294.70;
            } else if($gross_income>=4250 && $gross_income<=4749.99){
            $sss_contri=331.50;
            } else if($gross_income>=4750 && $gross_income<=5249.99){
            $sss_contri=368.30;
            } else if($gross_income>=5250 && $gross_income<=5749.99){
            $sss_contri=405.20;
            } else if($gross_income>=5750 && $gross_income<=6249.99){
            $sss_contri=442.00;
            } else if($gross_income>=6250 && $gross_income<=6749.99){
            $sss_contri=478.80;
            } else if($gross_income>=6750 && $gross_income<=7249.99){
            $sss_contri=515.70;
            } else if($gross_income>=7250 && $gross_income<=7749.99){
            $sss_contri=552.50;
            } else if($gross_income>=7750 && $gross_income<=8249.99){
            $sss_contri=589.30;
            } else if($gross_income>=8250 && $gross_income<=8749.99){
            $sss_contri=626.20;
            } else if($gross_income>=8750 && $gross_income<=9249.99){
            $sss_contri=663.00;
            } else if($gross_income>=9250 && $gross_income<=9749.99){
            $sss_contri=699.80;
            } else if($gross_income>=9750 && $gross_income<=10249.99){
            $sss_contri=736.70;
            } else if($gross_income>=10250 && $gross_income<=10749.99){
            $sss_contri=773.50;
            } else if($gross_income>=10750 && $gross_income<=11249.99){
            $sss_contri=810.30;
            } else if ($gross_income>=11250 && $gross_income<=11749.99){
            $sss_contri=847.20;
            } else if($gross_income>=11750 && $gross_income<=12249.99){
            $sss_contri=884.00;
            } else if($gross_income>=12250 && $gross_income<=12749.99){
            $sss_contri=920.80;
            } else if($gross_income>=12750 && $gross_income<=13249.99){
            $sss_contri=957.70;
            } else if($gross_income>=13250 && $gross_income<=13749.99){
            $sss_contri=994.50;
            } else if($gross_income>=13750 && $gross_income<=14249.99){
            $sss_contri=1031.30;
            } else if($gross_income>=14250 && $gross_income<=14749.99){
            $sss_contri=1068.20;
            } else if($gross_income>=14750 && $gross_income<=15249.99){
            $sss_contri=1105.00;
            } else if($gross_income>=15250 && $gross_income<=15749.99){
            $sss_contri=1141.80;
            } else{
            $sss_contri=1178.70;
            }

            //philhealth contribution based from the given PhilHealth Table
            if($gross_income<=8999.99 && $gross_income>=0){
            $philH_contri=100.00;
            } else if($gross_income>=9000 && $gross_income<=9999.99){
            $philH_contri=112.50;
            } else if($gross_income>=10000 && $gross_income<=10999.99){
            $philH_contri=125.00;
            } else if($gross_income>=11000 && $gross_income<=11999.99){
            $philH_contri=137.50;
            } else if($gross_income>=12000 && $gross_income<=12999.99){
            $philH_contri=150.00;
            } else if($gross_income>=13000 && $gross_income<=13999.99){
            $philH_contri=162.50;
            } else if($gross_income>=14000 && $gross_income<=14999.99){
            $philH_contri=175.00;
            } else if($gross_income>=15000 && $gross_income<=15999.99){
            $philH_contri=187.50;
            } else if($gross_income>=16000 && $gross_income<=16999.99){
            $philH_contri=200.00;
            } else if($gross_income>=17000 && $gross_income<=17999.99){
            $philH_contri=212.50;
            } else if($gross_income>=18000 && $gross_income<=18999.99){
            $philH_contri=225.00;
            } else if($gross_income>=19000 && $gross_income<=19999.99){
            $philH_contri=237.50;
            } else if($gross_income>=20000 && $gross_income<=20999.99){
            $philH_contri=250.00;
            } else if($gross_income>=21000 && $gross_income<=21999.99){
            $philH_contri=262.50;
            } else if($gross_income>=22000 && $gross_income<=22999.99){
            $philH_contri=275.00;
            } else if($gross_income>=23000 && $gross_income<=23999.99){
            $philH_contri=287.50;
            } else if($gross_income>=24000 && $gross_income<=24999.99){
            $philH_contri=300.00;
            } else if ($gross_income>=25000 && $gross_income<=25999.99){
            $philH_contri=312.50;
            } else if($gross_income>=26000 && $gross_income<=26999.99){
            $philH_contri=325.00;
            } else if($gross_income>=27000 && $gross_income<=27999.99){
            $philH_contri=337.50;
            } else if($gross_income>=28000 && $gross_income<=28999.99){
            $philH_contri=350.00;
            } else if ($gross_income>=29000 && $gross_income<=29999.99){
            $philH_contri=362.50;
            } else if ($gross_income>=30000 && $gross_income<=30999.99){
            $philH_contri=375.00;
            } else if($gross_income>=31000 && $gross_income<=31999.99){
            $philH_contri=387.50;
            } else if($gross_income>=32000 && $gross_income<=32999.99){
            $philH_contri=400.00;
            } else if($gross_income>=33000 && $gross_income<=33999.99){
            $philH_contri=412.50;
            } else if($gross_income>=34000 && $gross_income<=34999.99){
            $philH_contri=425.00;
            } else{
            $philH_contri=437.50;
            }

            //tax computation
            //example ( net income - from the table data) * .25 + tax from table base from net income range

            switch(strtolower($qualified_dependents)){

            //for zero exemption
            case "z":
            if($gross_income<=833 && $gross_income>=0){
            $tax_contri=((($gross_income-0)*.05) + 0);
            } else if($gross_income>=834 && $gross_income<=2500){
            $tax_contri=((($gross_income-833)*.10) + 41.67);
            } else if($gross_income>=2501 && $gross_income<=5833){
            $tax_contri=((($gross_income-2500)*.15) + 208.33);
            } else if($gross_income>=5834 && $gross_income<=11667){
            $tax_contri=((($gross_income-5833)*.20) + 708.33);
            } else if($gross_income>=11668 && $gross_income<=20833){
            $tax_contri=((($gross_income-11667)*.25) + 1875);
            } else if($gross_income>=20834 && $gross_income<=41667){
            $tax_contri=((($gross_income-20834)*.30) + 4166.67);
            } else{
            $tax_contri=((($gross_income-41667)*.32) + 10416.67);
            }
            //$tax_contri=100;
            break;

                //for single or married with one qualified dependents
                case "s":
                case "me":
                if($gross_income<=50 && $gross_income>=0){
                $tax_contri=(($gross_income-0) + 0);
                } else if($gross_income>=4167 && $gross_income<=5000){
                $tax_contri=((($gross_income-0)*.05) + 0);
                } else if($gross_income>=5001 && $gross_income<=6667){
                $tax_contri=((($gross_income-5000)*.10) + 41.67);
                } else if($gross_income>=6668 && $gross_income<=10000){
                $tax_contri=((($gross_income-6667)*.15) + 208.33);
                } else if($gross_income>=10001 && $gross_income<=15833){
                $tax_contri=((($gross_income-10000)*.20) + 708.33);
                } else if($gross_income>=15834 && $gross_income<=25000){
                $tax_contri=((($gross_income-15833)*.25) + 1875);
                } else if($gross_income>=25001 && $gross_income<=45833){
                $tax_contri=((($gross_income-25000)*.30) + 4166.67);
                } else{
                $tax_contri=((($gross_income-45833)*.32) + 10416.67);
                }
                //$tax_contri=100;
                break;
   
                //for single or married with qualified dependents
                case "me1":
                case "s1":
                if($gross_income<=75 && $gross_income>=6250){
                $tax_contri=(($gross_income-0) + 0);
                } else if($gross_income>=6251 && $gross_income<=7083){
                $tax_contri=((($gross_income-6250)*.05) + 0);
                } else if($gross_income>=7084 && $gross_income<=8750){
                $tax_contri=((($gross_income-7083)*.10) + 41.67);
                } else if($gross_income>=8751 && $gross_income<=12083){
                $tax_contri=((($gross_income-8750)*.15) + 208.33);
                } else if($gross_income>=12084 && $gross_income<=17917){
                $tax_contri=((($gross_income-12083)*.20) + 708.33);
                } else if($gross_income>=17918 && $gross_income<=27083){
                $tax_contri=((($gross_income-17917)*.25) + 1875);
                } else if($gross_income>=27084 && $gross_income<=47917){
                $tax_contri=((($gross_income-27083)*.30) + 4166.67);
                } else{
                $tax_contri=((($gross_income-47917)*.32) + 10416.67);
                }
                //$tax_contri=100;
                break;

                //for single or married with qualified dependents
                case "me2":
                case "s2":
                if($gross_income<=100 && $gross_income>=8333){
                $tax_contri=(($gross_income-0) + 0);
                } else if($gross_income>=8334 && $gross_income<=9167){
                $tax_contri=((($gross_income-8333)*.05) + 0);
                } else if($gross_income>=9168 && $gross_income<=10833){
                $tax_contri=((($gross_income-9167)*.10) + 41.67);
                } else if($gross_income>=10834 && $gross_income<=14167){
                $tax_contri=((($gross_income-10833)*.15) + 208.33);
                } else if($gross_income>=14168 && $gross_income<=20000){
                $tax_contri=((($gross_income-14167)*.20) + 708.33);
                } else if($gross_income>=20001 && $gross_income<=29167){
                $tax_contri=((($gross_income-20000)*.25) + 1875);
                } else if($gross_income>=29168 && $gross_income<=50000){
                $tax_contri=((($gross_income-29167)*.30) + 4166.67);
                } else{
                $tax_contri=((($gross_income-50000)*.32) + 10416.67);
                }
                //$tax_contri=100;
                break;

                //for single or married with qualified dependents
                case "me3":
                case "s3":
                if($gross_income<=125 && $gross_income>=10417){
                $tax_contri=(($gross_income-0) + 0);
                } else if($gross_income>=10418 && $gross_income<=11250){
                $tax_contri=((($gross_income-10417)*.05) + 0);
                } else if($gross_income>=11251 && $gross_income<=12917){
                $tax_contri=((($gross_income-11250)*.10) + 41.67);
                } else if($gross_income>=12918 && $gross_income<=16250){
                $tax_contri=((($gross_income-12917)*.15) + 208.33);
                } else if($gross_income>=16251 && $gross_income<=22083){
                $tax_contri=((($gross_income-16250)*.20) + 708.33);
                } else if($gross_income>=22084 && $gross_income<=31250){
                $tax_contri=((($gross_income-22084)*.25) + 1875);
                } else if($gross_income>=31251 && $gross_income<=52083){
                $tax_contri=((($gross_income-31250)*.30) + 4166.67);
                } else{
                $tax_contri=((($gross_income-52083)*.32) + 10416.67);
                }
                //$tax_contri=100;
                break;

                //for single or married with qualified dependents
                case "me4":
                case "s4":
                if($gross_income<=150 && $gross_income>=12500){
                $tax_contri=(($gross_income-0) + 0);
                } else if($gross_income>=12501 && $gross_income<=13333){
                $tax_contri=((($gross_income-12500)*.05) + 0);
                } else if($gross_income>=13334 && $gross_income<=15000){
                $tax_contri=((($gross_income-13333)*.10) + 41.67);
                } else if($gross_income>=15001 && $gross_income<=18333){
                $tax_contri=((($gross_income-15001)*.15) + 208.33);
                } else if($gross_income>=18334 && $gross_income<=24167){
                $tax_contri=((($gross_income-18333)*.20) + 708.33);
                } else if($gross_income>=24168 && $gross_income<=33333){
                $tax_contri=((($gross_income-24167)*.25) + 1875);
                } else if($gross_income>=33334 && $gross_income<=54167){
                $tax_contri=((($gross_income-33333)*.30) + 4166.67);
                } else{
                $tax_contri=((($gross_income-54167)*.32) + 10416.67);
                }
                //$tax_contri=100;
                break;

                default:
                    $tax_contri=0;
                }

                // to press Calculate Net Income button
                }else if(isset($_POST["calculate_net_income"])){
                $basic_rate_hour=$_POST["basic_rate_hour"];
                $basic_num_hours_cutoff=$_POST["basic_num_hours_cutoff"];
                $hono_rate_hour=$_POST["hono_rate_hour"];
                $hono_num_hours_cutoff=$_POST["hono_num_hours_cutoff"];
                $other_rate_hour=$_POST["other_rate_hour"];
                $other_num_hours_cutoff=$_POST["other_num_hours_cutoff"];
                $sss_loan=$_POST["sss_loan"];
                $pagibig_loan=$_POST["pagibig_loan"];
                $fs_deposit=$_POST["fs_deposit"];
                $fs_loan=$_POST["fs_loan"];
                $salary_loan=$_POST["salary_loan"];
                $other_loans=$_POST["other_loans"];
                $qualified_dependents=$_POST["qualified_dependents"];

                $basic_income_cutoff = $basic_rate_hour * $basic_num_hours_cutoff;
                $hono_income_cutoff = $hono_rate_hour * $hono_num_hours_cutoff;
                $other_income_cutoff = $other_rate_hour * $other_num_hours_cutoff;
                $gross_income = $basic_income_cutoff + $hono_income_cutoff + $other_income_cut;
    off;

                //sss contribution
                if($gross_income>= 1000 && $gross_income<=1249){
                $sss_contri=73.70;
                } else if($gross_income>=1250 && $gross_income<=1749){
                $sss_contri=110.50;
                } else if($gross_income>=1750 && $gross_income<=2249){
                $sss_contri=147.30;
                } else if($gross_income>=2250 && $gross_income<=2749.99){
                $sss_contri=184.20;
                } else if($gross_income>=2750 && $gross_income<=3249.99){
                $sss_contri=221.00;
                } else if($gross_income>=3250 && $gross_income<=3749.99){
                $sss_contri=257.80;
                } else if($gross_income>=3750 && $gross_income<=4249.99){
                $sss_contri=294.70;
                } else if($gross_income>=4250 && $gross_income<=4749.99){
                $sss_contri=331.50;
                } else if($gross_income>=4750 && $gross_income<=5249.99){
                $sss_contri=368.30;
                } else if($gross_income>=5250 && $gross_income<=5749.99){
                $sss_contri=405.20;
                } else if($gross_income>=5750 && $gross_income<=6249.99){
                $sss_contri=442.00;
                } else if($gross_income>=6250 && $gross_income<=6749.99){
                $sss_contri=478.80;
                } else if($gross_income>=6750 && $gross_income<=7249.99){
                $sss_contri=515.70;
                } else if($gross_income>=7250 && $gross_income<=7749.99){
                $sss_contri=552.50;
                } else if($gross_income>=7750 && $gross_income<=8249.99){
                $sss_contri=589.30;
                } else if($gross_income>=8250 && $gross_income<=8749.99){
                $sss_contri=626.20;
                } else if($gross_income>=8750 && $gross_income<=9249.99){
                $sss_contri=663.00;
                } else if($gross_income>=9250 && $gross_income<=9749.99){
                $sss_contri=699.80;
                } else if($gross_income>=9750 && $gross_income<=10249.99){
                $sss_contri=736.70;
                } else if($gross_income>=10250 && $gross_income<=10749.99){
                $sss_contri=773.50;
                } else if($gross_income>=10750 && $gross_income<=11249.99){
                $sss_contri=810.30;
                } else if ($gross_income>=11250 && $gross_income<=11749.99){
                $sss_contri=847.20;
                } else if($gross_income>=11750 && $gross_income<=12249.99){
                $sss_contri=884.00;
                } else if($gross_income>=12250 && $gross_income<=12749.99){
                $sss_contri=920.80;
                } else if($gross_income>=12750 && $gross_income<=13249.99){
                $sss_contri=957.70;
                } else if($gross_income>=13250 && $gross_income<=13749.99){
                $sss_contri=994.50;
                } else if($gross_income>=13750 && $gross_income<=14249.99){
                $sss_contri=1031.30;
                } else if($gross_income>=14250 && $gross_income<=14749.99){
                $sss_contri=1068.20;
                } else if($gross_income>=14750 && $gross_income<=15249.99){
                $sss_contri=1105.00;
                } else if($gross_income>=15250 && $gross_income<=15749.99){
                $sss_contri=1141.80;
                } else{
                $sss_contri=1178.70;
                }

                //philhealth contribution based from the given PhilHealth Table
                if($gross_income<=8999.99 && $gross_income>=0){
                $philH_contri=100.00;
                } else if($gross_income>=9000 && $gross_income<=9999.99){
                $philH_contri=112.50;
                } else if($gross_income>=10000 && $gross_income<=10999.99){
                $philH_contri=125.00;
                } else if($gross_income>=11000 && $gross_income<=11999.99){
                $philH_contri=137.50;
                } else if($gross_income>=12000 && $gross_income<=12999.99){
                $philH_contri=150.00;
                } else if($gross_income>=13000 && $gross_income<=13999.99){
                $philH_contri=162.50;
                } else if($gross_income>=14000 && $gross_income<=14999.99){
                $philH_contri=175.00;
                } else if($gross_income>=15000 && $gross_income<=15999.99){
                $philH_contri=187.50;
                } else if($gross_income>=16000 && $gross_income<=16999.99){
                $philH_contri=200.00;
                } else if($gross_income>=17000 && $gross_income<=17999.99){
                $philH_contri=212.50;
                } else if($gross_income>=18000 && $gross_income<=18999.99){
                $philH_contri=225.00;
                } else if($gross_income>=19000 && $gross_income<=19999.99){
                $philH_contri=237.50;
                } else if($gross_income>=20000 && $gross_income<=20999.99){
                $philH_contri=250.00;
                } else if($gross_income>=21000 && $gross_income<=21999.99){
                $philH_contri=262.50;
                } else if($gross_income>=22000 && $gross_income<=22999.99){
                $philH_contri=275.00;
                } else if($gross_income>=23000 && $gross_income<=23999.99){
                $philH_contri=287.50;
                } else if($gross_income>=24000 && $gross_income<=24999.99){
                $philH_contri=300.00;
                } else if ($gross_income>=25000 && $gross_income<=25999.99){
                $philH_contri=312.50;
                } else if($gross_income>=26000 && $gross_income<=26999.99){
                $philH_contri=325.00;
                } else if($gross_income>=27000 && $gross_income<=27999.99){
                $philH_contri=337.50;
                } else if($gross_income>=28000 && $gross_income<=28999.99){
                $philH_contri=350.00;
                } else if ($gross_income>=29000 && $gross_income<=29999.99){
                $philH_contri=362.50;
                } else if ($gross_income>=30000 && $gross_income<=30999.99){
                $philH_contri=375.00;
                } else if($gross_income>=31000 && $gross_income<=31999.99){
                $philH_contri=387.50;
                } else if($gross_income>=32000 && $gross_income<=32999.99){
                $philH_contri=400.00;
                } else if($gross_income>=33000 && $gross_income<=33999.99){
                $philH_contri=412.50;
                } else if($gross_income>=34000 && $gross_income<=34999.99){
                $philH_contri=425.00;
                } else{
                $philH_contri=437.50;
                }

                //tax computation
                //example ( net income - from the table data) * .25 + tax from table base from net income range

                switch(strtolower($qualified_dependents)){

                //for zero exemption
                case "z":
                if($gross_income<=833 && $gross_income>=0){
                $tax_contri=((($gross_income-0)*.05) + 0);
                } else if($gross_income>=834 && $gross_income<=2500){
                $tax_contri=((($gross_income-833)*.10) + 41.67);
                } else if($gross_income>=2501 && $gross_income<=5833){
                $tax_contri=((($gross_income-2500)*.15) + 208.33);
                } else if($gross_income>=5834 && $gross_income<=11667){
                $tax_contri=((($gross_income-5833)*.20) + 708.33);
                } else if($gross_income>=11668 && $gross_income<=20833){
                $tax_contri=((($gross_income-11667)*.25) + 1875);
                } else if($gross_income>=20834 && $gross_income<=41667){
                $tax_contri=((($gross_income-20834)*.30) + 4166.67);
                } else{
                $tax_contri=((($gross_income-41667)*.32) + 10416.67);
                }
                //$tax_contri=100;
                break;

                //for single or married with one qualified dependents
                case "s":
                case "me":
                if($gross_income<=50 && $gross_income>=0){
                $tax_contri=(($gross_income-0) + 0);
                } else if($gross_income>=4167 && $gross_income<=5000){
                $tax_contri=((($gross_income-0)*.05) + 0);
                } else if($gross_income>=5001 && $gross_income<=6667){
                $tax_contri=((($gross_income-5000)*.10) + 41.67);
                } else if($gross_income>=6668 && $gross_income<=10000){
                $tax_contri=((($gross_income-6667)*.15) + 208.33);
                } else if($gross_income>=10001 && $gross_income<=15833){
                $tax_contri=((($gross_income-10000)*.20) + 708.33);
                } else if($gross_income>=15834 && $gross_income<=25000){
                $tax_contri=((($gross_income-15833)*.25) + 1875);
                } else if($gross_income>=25001 && $gross_income<=45833){
                $tax_contri=((($gross_income-25000)*.30) + 4166.67);
                } else{
                $tax_contri=((($gross_income-45833)*.32) + 10416.67);
                }
                //$tax_contri=100;
                break;

                //for single or married with qualified dependents
                case "me1":
                case "s1":
                if($gross_income<=75 && $gross_income>=6250){
                $tax_contri=(($gross_income-0) + 0);
                } else if($gross_income>=6251 && $gross_income<=7083){
                $tax_contri=((($gross_income-6250)*.05) + 0);
                } else if($gross_income>=7084 && $gross_income<=8750){
                $tax_contri=((($gross_income-7083)*.10) + 41.67);
                } else if($gross_income>=8751 && $gross_income<=12083){
                $tax_contri=((($gross_income-8750)*.15) + 208.33);
                } else if($gross_income>=12084 && $gross_income<=17917){
                $tax_contri=((($gross_income-12083)*.20) + 708.33);
                } else if($gross_income>=17918 && $gross_income<=27083){
                $tax_contri=((($gross_income-17917)*.25) + 1875);
                } else if($gross_income>=27084 && $gross_income<=47917){
                $tax_contri=((($gross_income-27083)*.30) + 4166.67);
                } else{
                $tax_contri=((($gross_income-47917)*.32) + 10416.67);
                }
                //$tax_contri=100;
                break;
   
                //for single or married with qualified dependents
                case "me2":
                case "s2":
                if($gross_income<=100 && $gross_income>=8333){
                $tax_contri=(($gross_income-0) + 0);
                } else if($gross_income>=8334 && $gross_income<=9167){
                $tax_contri=((($gross_income-8333)*.05) + 0);
                } else if($gross_income>=9168 && $gross_income<=10833){
                $tax_contri=((($gross_income-9167)*.10) + 41.67);
                } else if($gross_income>=10834 && $gross_income<=14167){
                $tax_contri=((($gross_income-10833)*.15) + 208.33);
                } else if($gross_income>=14168 && $gross_income<=20000){
                $tax_contri=((($gross_income-14167)*.20) + 708.33);
                } else if($gross_income>=20001 && $gross_income<=29167){
                $tax_contri=((($gross_income-20000)*.25) + 1875);
                } else if($gross_income>=29168 && $gross_income<=50000){
                $tax_contri=((($gross_income-29167)*.30) + 4166.67);
                } else{
                $tax_contri=((($gross_income-50000)*.32) + 10416.67);
                }
                //$tax_contri=100;
                break;

                //for single or married with qualified dependents
                case "me3":
                case "s3":
                if($gross_income<=125 && $gross_income>=10417){
                $tax_contri=(($gross_income-0) + 0);
                } else if($gross_income>=10418 && $gross_income<=11250){
                $tax_contri=((($gross_income-10417)*.05) + 0);
                } else if($gross_income>=11251 && $gross_income<=12917){
                $tax_contri=((($gross_income-11250)*.10) + 41.67);
                } else if($gross_income>=12918 && $gross_income<=16250){
                $tax_contri=((($gross_income-12917)*.15) + 208.33);
                } else if($gross_income>=16251 && $gross_income<=22083){
                $tax_contri=((($gross_income-16250)*.20) + 708.33);
                } else if($gross_income>=22084 && $gross_income<=31250){
                $tax_contri=((($gross_income-22084)*.25) + 1875);
                } else if($gross_income>=31251 && $gross_income<=52083){
                $tax_contri=((($gross_income-31250)*.30) + 4166.67);
                } else{
                $tax_contri=((($gross_income-52083)*.32) + 10416.67);
                }
                //$tax_contri=100;
                break;
   
                //for single or married with qualified dependents
                case "me4":
                case "s4":
                if($gross_income<=150 && $gross_income>=12500){
                $tax_contri=(($gross_income-0) + 0);
                } else if($gross_income>=12501 && $gross_income<=13333){
                $tax_contri=((($gross_income-12500)*.05) + 0);
                } else if($gross_income>=13334 && $gross_income<=15000){
                $tax_contri=((($gross_income-13333)*.10) + 41.67);
                } else if($gross_income>=15001 && $gross_income<=18333){
                $tax_contri=((($gross_income-15001)*.15) + 208.33);
                } else if($gross_income>=18334 && $gross_income<=24167){
                $tax_contri=((($gross_income-18333)*.20) + 708.33);
                } else if($gross_income>=24168 && $gross_income<=33333){
                $tax_contri=((($gross_income-24167)*.25) + 1875);
                } else if($gross_income>=33334 && $gross_income<=54167){
                $tax_contri=((($gross_income-33333)*.30) + 4166.67);
                } else{
                $tax_contri=((($gross_income-54167)*.32) + 10416.67);
                }
                //$tax_contri=100;
                break;

                default:
                    $tax_contri=0;
                }

                $total_deduct = $sss_contri + $philH_contri + $pagibig_contri + $tax_contri +$sss_loan+$pagibig_loan + $fs_deposit + $fs_loan + $salary_loan + $other_loans;
                $net_income = $gross_income - $total_deduct;

            // to press NEW button
            } else if(isset($_POST["new"])){
                empty_inputbox();
                // $employee_no="";
                //$department="";
                // $firstname="";
                // $mname="";
                // $surname="";
                //$civil_status="";
                //$designation="";
                // $qualified_dependents="";
                // $paydate="";
                // $emp_status="";

                //decleration of variables where inputs are stored
                // $basic_rate_hour="";
                // $basic_num_hours_cutoff="";
                // $hono_rate_hour="";
                // $hono_num_hours_cutoff="";
                // $other_rate_hour="";
                // $other_num_hours_cutoff="";
                // $sss_contri=0.00;
                // $philH_contri=0.00;
                // $pagibig_contri=100.00;
                // $tax_contri=0.00;
                // $sss_loan="";
                // $pagibig_loan="";
                // $fs_deposit="";
                // $fs_loan="";
                // $salary_loan="";
                // $other_loans="";

            // to press Print Preview Payslip button
            } else if(isset($_POST["print_preview"])){
            echo "PRINT PREVIEW";

            // to press Print Payslip button
            } else if(isset($_POST["print_payslip"])){
            echo "PRINT PAYSLIP";
   
            // to press Cancel button
            } else if(isset($_POST["cancel"])){
            empty_inputbox();

                // to press Close button
                } else if(isset($_POST["close"])){
                echo "CLOSE";
            }
        }
    ?>

    <div class="container">
        <div class="page_border">
            <h1 class="text-center" style="padding-top:10px; padding-bottom:10px; fontweight:bold;">Seriniha Incorporated Payroll Application</h1>
        <h5 style="padding-top:10px; font-weight:bold;">EMPLOYEE BASIC INFO:</h5>
        <form action="payroll_with_conditional_statements.php" method="POST">
            <div class="payrol_form_group1">
                <div style="float:left; width:50%;">
                    <div style="margin-left:100px; margin-top:10px;">
                        <img src="bgimage/null.jpg" class="imgthumbnail" style="width:250px;" alt="user profile">
                        <input type="file" style="margintop:10px; text:center;" name="file">
                    </div>

                    <div>
                        <span style="margin-top:20px;">Employee Number:</span>
                        <input type="text" class="form-control input_box1" style="margintop:20px;" id="employee_no" name="employee_no" value="<?php echo $employee_no;?>">
                    </div>
                    <div>

                        <span>Department:</span>
                        <input type="text" class="formcontrol input_box1" id="department" name="department" value="<?php echo $department;?>" disabled>                        
                    </div>
                    </div>
                    <div class="payrol_form_group1" style="width:50%; margin:right; margintop:36px;">
                    <div>
                        <span>Firstname:</span>
                        <input type="text" class="formcontrol input_box1" id="firstname" name="firstname" value="<?php echo $firstname;?>" disabled>
                    </div>
                    <div>
                        <span>Middle Name:</span>
                        <input type="text" class="formcontrol input_box1" id="mname" name="mname" value="<?php echo $mname;?>" disabled>
                    </div>
                    <div>
                        <span>Surname:</span>
                        <input type="text" class="formcontrol input_box1" id="surname" name="surname" value="<?php echo $surname;?>" disabled>
                    </div>
                    <div>
                        <span>Civil Status:</span>
                        <input type="text" class="formcontrol input_box1" id="civil_status" name="civil_status" value="<?php echo $civil_status;?>"disabled>
                    </div>
                    <div>
                        <span>Designation:</span>
                        <input type="text" class="formcontrol input_box1" id="designation" name="designation" value="<?php echo $designation;?>" disabled>
                    </div>
                    <div>
                        <span>Qualified Dependents Status:</span>

                        <input type="text" class="formcontrol input_box1" id="qualified_dependents" name="qualified_dependents" value="<?php echo $qualified_dependents;?>">
                    </div>
                    <div>
                        <span>Paydate:</span>
                        <input type="text" class="formcontrol input_box1" id="paydate" name="paydate" value="<?php echo $paydate;?>" disabled>
                    </div>
                    <div>
                        <span>Employee Status:</span>
                        <input type="text" class="formcontrol input_box1" id="emp_status" name="emp_status" value="<?php echo $emp_status;?>" disabled>
                    </div>
                </div>
            </div>

                    <div>
                        <div class="payrol_form_group">
                        <div style="float:left; width:50%;">
                        <div>
                <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">BASIC INCOME:</h5>
                    </div>
                        <div>
                            <span>Rate / Hour:</span>
                            <input type="text" class="formcontrol input_box" id="basic_rate_hour" name="basic_rate_hour" value="<?php echo $basic_rate_hour;?>">
                        </div>
                    <div>
                        <span>No. of Hours / Cut Off:</span>
                        <input type="text" class="formcontrol input_box" id="basic_num_hours_cutoff" name="basic_num_hours_cutoff" value="<?php echo $basic_num_hours_cutoff;?>">
                    </div>
                        <div>
                            <span>Income / Cut Off:</span>
                            <input type="text" class="formcontrol input_box" id="basic_income_cutoff" name="basic_income_cutoff" value="<?php echo $basic_income_cutoff;?>" disabled>
                    </div>
                        <div>

                <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">HONORARIUM INCOME:</h5>
                    </div>
                        <div>
                            <span>Rate / Hour:</span>
                            <input type="text" class="formcontrol input_box" id="hono_rate_hour" name="hono_rate_hour" value="<?php echo $hono_rate_hour;?>">
                        </div>
                        <div>
                            <span>No. of Hours / Cut Off:</span>
                            <input type="text" class="formcontrol input_box" id="hono_num_hours_cutoff" name="hono_num_hours_cutoff" value="<?php echo $hono_num_hours_cutoff;?>">
                    </div>
                        <div>
                            <span>Income / Cut Off:</span>
                            <input type="text" class="formcontrol input_box" id="hono_income_cutoff" name="hono_income_cutoff" value="<?php echo $hono_income_cutoff;?>" disabled>
                    </div>
                        <div>
                <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">OTHER INCOME:</h5>
                    </div>
                        <div>
                            <span>Rate / Hour:</span>
                            <input type="text" class="formcontrol input_box" id="other_rate_hour" name="other_rate_hour" value="<?php echo $other_rate_hour;?>">
                    </div>
                        <div>
                            <span>No. of Hours / Cut Off:</span>
                            <input type="text" class="formcontrol input_box" id="other_num_hours_cutoff" name="other_num_hours_cutoff" value="<?php echo $other_num_hours_cutoff;?>">
                    </div>
                        <div>
                            <span>Income / Cut Off:</span>
                            <input type="text" class="formcontrol input_box" id="other_income_cutoff" name="other_income_cutoff" value="<?php echo $other_income_cutoff;?>" disabled>
                    </div>
                        <div>

                <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">SUMMARY INCOME:</h5>
                    </div>
                        <div>
                            <span>GROSS INCOME:</span>
                            <input type="text" class="formcontrol input_box" id="gross_income" name="gross_income" value="<?php echo $gross_income;?>" disabled>
                    </div>
                        <div>
                            <span>NET INCOME:</span>
                            <input type="text" class="formcontrol input_box" id="net_income" name="net_income" value="<?php echo $net_income;?>" disabled>
                    </div>
                </div>
            </div>
                        <div class="deduction_form_group" style="width:50%; margin:right; float:right;">
                    <div>
                        <div>
                <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">REGULAR DEDUCTIONS:</h5>
                    </div>
                        <div>
                            <span>SSS Contribution:</span>
                            <input type="text" class="formcontrol deduction_box" id="sss_contri" name="sss_contri" value="<?php echo $sss_contri;?>" disabled>
                    </div>
                        <div>
                            <span>PhilHealth Contribution:</span>
                            <input type="text" class="formcontrol deduction_box" id="philH_contri" name="philH_contri" value="<?php echo $philH_contri;?>" disabled>
                    </div>
                        <div>
                            <span>Pagibig Contribution:</span>
                            <input type="text" class="formcontrol deduction_box" id="pagibig_contri" name="pagibig_contri" value="<?php echo $pagibig_contri;?>" disabled>
                    </div>
                        <div>
                            <span>Income Tax Contribution:</span>
                            <input type="text" class="formcontrol deduction_box" id="tax_contri" name="tax_contri" value="<?php echo $tax_contri;?>" disabled>
                    </div>
                        <div>
                <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">OTHER DEDUCTIONS:</h5>
                    </div>
                        <div>
                            <span>SSS Loan:</span>
                            <input type="text" class="formcontrol deduction_box" id="sss_loan" name="sss_loan" value="<?php echo $sss_loan;?>">
                    </div>
                        <div>
                            <span>Pagibig Loan:</span>
                            <input type="text" class="formcontrol deduction_box" id="pagibig_loan" name="pagibig_loan" value="<?php echo $pagibig_loan;?>">
                    </div>
                        <div>
                            <span>Faculty Savings Deposit:</span>
                            <input type="text" class="formcontrol deduction_box" id="fs_deposit" name="fs_deposit" value="<?php echo $fs_deposit;?>">
                    </div>
                        <div>
                            <span>Faculty Savings Loan:</span>
                            <input type="text" class="formcontrol deduction_box" id="fs_loan" name="fs_loan" value="<?php echo $fs_loan;?>">
                    </div>
                        <div>
                            <span>Salary Loan:</span>
                            <input type="text" class="formcontrol deduction_box" id="salary_loan" name="salary_loan" value="<?php echo $salary_loan;?>">
                    </div>
                        <div>
                            <span>Other Loans:</span>
                            <input type="text" class="formcontrol deduction_box" id="other_loans" name="other_loans" value="<?php echo $other_loans;?>">
                    </div>
                        <div>
                <h5 style="padding-top:10px; padding-bottom:10px; fontweight:bold;">DEDUCTION SUMMARY:</h5>
                    </div>
                        <div>
                        <span>Total Deductions:</span>
                        <input type="text" class="formcontrol deduction_box" id="total_deduct" name="total_deduct" value="<?php echo $total_deduct?>" disabled>
                    </div>
                        <div>
                            <div>
                                <button type="submit" name="calculate_gross_income" class="btn btn-primary" style="padding:5px; margin-bottom:5px;">CALCULATE GROSS INCOME</button>
                                <button type="submit" name="calculate_net_income" class="btn btn-primary" style="padding:5px; margin-bottom:5px;">CALCULATE NET INCOME</button>
                                <button type="submit" name="new" class="btn btnwarning" style="padding:5px; margin-bottom:5px; width:100px;">NEW</button>
                                <button type="submit" name="print_preview" class="btn btninfo" style="padding:5px;">PRINT PREVIEW PAYSLIP</button>
                                <button type="submit" name="print_payslip" class="btn btninfo" style="padding:5px; width:117px;">PRINT PAYSLIP</button>
                                <button type="submit" name="cancel" class="btn btndanger" style="padding:5px; width:100px;">CANCEL</button>
                                <button type="submit" name="close" class="btn btndark" style="padding:5px; width:100px;">CLOSE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>