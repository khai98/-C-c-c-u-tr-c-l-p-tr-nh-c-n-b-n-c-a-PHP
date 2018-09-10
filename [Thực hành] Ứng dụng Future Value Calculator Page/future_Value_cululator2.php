<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')

    $InvestmentAmount = $_POST["Investment_Amount"];
    $YearlyInterestRate = $_POST["Yearly_Interest_Rate"];
    $NumberofYears = $_POST["Number_of_Years"];

    $discountAmount = displayDiscount($InvestmentAmount, $YearlyInterestRate);

function displayDiscount($InvestmentAmount, $YearlyInterestRate)
{
    $discountAmounts = $InvestmentAmount + ($InvestmentAmount * $YearlyInterestRate * 0.01);
    return $discountAmounts;
}

?>


<!DOCTYPE HTML>
<html>
<style>
    #content {
        width: 450px;
        height: 200px;
        padding: 0px 20px 20px;
        background: white;
        border: 2px solid navy;
    }

    h1 {
        color: darkblue;
    }

    .input {
        margin-bottom: .5em;
        width: 15em;
        padding-right: 1em;
        float: left;
    }
</style>
<body>
<div id="content" style="margin-left: 500px; display: block;">
    <form method="post" action="future_Value_cululator2.php">
        <h1>Product Discount Calculator</h1>
        <div>

            <label class="input">Investment Amount: <?php echo $InvestmentAmount ?> </label></br>
            <label class="input">Yearly Interest Rate: <?php echo "%" . $discountAmount ?></label></br>
            <label class="input">Number of Years: <?php echo $NumberofYears. "%" ?> </label></br>
            <label class="input">Future Value: $INF</label> </br>
        </div>
    </form>
</div>

</body>
</html>