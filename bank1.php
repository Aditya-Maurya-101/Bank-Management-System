<?php

$name = $_POST['name'];
$operation = $_POST['operation'];
$amount = isset($_POST['amount']) ? $_POST['amount'] : 0;

$balance = 5000;

echo "
<!DOCTYPE html>
<html>
<head>
    <title>Bank Result</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='style.css'>
</head>
<body>

<div class='container'>

    <h2>🏦 Transaction Details</h2>

    <div class='detail-box'>
        <strong>Account Holder:</strong> $name
    </div>

    <div class='detail-box'>
        <strong>Initial Balance:</strong> ₹$balance
    </div>
";

if($operation == "Deposit")
{
    $balance += $amount;

    echo "
    <div class='detail-box'>
        <strong>Operation:</strong> Deposit
    </div>

    <div class='detail-box'>
        <strong>Deposited Amount:</strong> ₹$amount
    </div>

    <div class='balance-box'>
        Current Balance : ₹$balance
    </div>
    ";
}
elseif($operation == "Withdraw")
{
    if($amount <= $balance)
    {
        $balance -= $amount;

        echo "
        <div class='detail-box'>
            <strong>Operation:</strong> Withdraw
        </div>

        <div class='detail-box'>
            <strong>Withdraw Amount:</strong> ₹$amount
        </div>

        <div class='balance-box'>
            Current Balance : ₹$balance
        </div>
        ";
    }
    else
    {
        echo "
        <div class='error-box'>
            ❌ Insufficient Balance!
        </div>
        ";
    }
}
else
{
    echo "
    <div class='detail-box'>
        <strong>Operation:</strong> Check Balance
    </div>

    <div class='balance-box'>
        Current Balance : ₹$balance
    </div>
    ";
}

echo "

<form action='bank.html'>
    <input type='submit' value='⬅ Back To Home'>
</form>

</div>

</body>
</html>
";

?>