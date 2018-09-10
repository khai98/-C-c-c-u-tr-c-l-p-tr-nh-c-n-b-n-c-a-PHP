<!DOCTYPE HTML>
<html>
<style>
    #content {
        width: 450px;
        height: 180px;
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
    }
    .label {
        width: 10em;
        padding-right: 1em;
        float: left;
    }
</style>
<body>
<div id="content" style="margin-left: 500px; display: block;">

    <form method="post" action="future_Value_cululator2.php">
        <h1>Future Value Calculator</h1>
        <div>

            <label class="label">Investment Amount:: </label>
            <input class="input" type="text" name="Investment_Amount"></br>

            <label class="label">Yearly Interest Rate: </label>
            <input class="input" type="number" name="Yearly_Interest_Rate"></br>

            <label class="label">Number of Years: </label>
            <input class="input" type="number" name="Number_of_Years"></br>

        </div>
        <div>
            <label class="label">&nbsp;</label>
            <input type="submit" name="Calculate Discount" value=" Calculate ">

        </div>
    </form>
</div>

</body>
</html>