<!doctype html>
<html>
<?php
require('../scripts/sanitizeParams.php');

$baseurl = $_SERVER['HTTP_HOST'] . '/v1';
$key_id = $_GET['key'] ?? 'rzp_test_CXy11Sj25CqLBJ';
$secret = 'thisissupersecret';
$public_url = $baseurl;
$private_url = $key_id.':'.$secret.'@'.$baseurl;
$callback_url = 'http://'.$baseurl.'/return/callback?key_id='.$key_id;
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Razorpay - Testing page</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Ubuntu', 'Cantarell', 'Droid Sans', 'Helvetica Neue', sans-serif;
        }
        form {
            margin: 20px auto;
            max-width: 300px;
        }
        input[type=submit] {
            color: #414141;
            border: 1px solid #ccc;
            background-color: #E6E6E6;
            text-decoration: none;
            border-radius: 2px;
            padding: 10px 20px;
            text-transform: uppercase;
            margin: 10px 0;
        }
        input[type=text], select {
            width: 100%;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            outline: none;
            border: 1px solid #ccc;
            border-radius: 2px;
            background: none;
            line-height: 16px;
            padding: 6px 12px;
            background: #fff;
        }
        input[type=checkbox] {
            width: 20px;
            height: 20px;
            margin: 0;
            vertical-align: middle;
            margin-right: 4px;
        }
        table {
            line-height: 36px;
            font-size: 14px;
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
            background: #fafafa;
            padding: 10px 20px;
            white-space: nowrap;
        }
    </style>
</head>
<body>
<script type="application/javascript">
    function disableEmptyInputs(form) {
        var controls = form.elements;
        for (var i=0, iLen=controls.length; i<iLen; i++) {
            controls[i].disabled = controls[i].value == '';
        }
    }
</script>
<form method="post" id="paymentform" action="//<?=$public_url?>/payments" onsubmit="disableEmptyInputs(this)">
    <div style="background: brown; color: #fff; text-align: center; padding: 8px 0">Enter Parameters</div>
    <tr>
    <tr>
        <td colspan="40">Select Method: </td>
        <td>
            <select name="method">
                <option value="netbanking">Net Banking</option>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="40">Select Bank (Netbanking): </td>
        <td>
            <select name="bank">
                <option value="ALLA">Allahabad Bank</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <input type="hidden" value="rzp_test_CXy11Sj25CqLBJ" name="key_id">
        </td>
    </tr>
    <tr>
    <tr>
        <td colspan='40'>Amount:</td>
        <td><input type="text" name="amount" size="25" value="100"></td>
        <td>
            <select name="currency">
                <option value="INR">Indian Paise</option>
            </select>
        </td>
    </tr>
    </tr>
    <tr>
        <td><input type="hidden" name="email" size="25" value="test@razorpay.com"></td>
        <td><input type="hidden" name="contact" size="25" value="9876543210"></td>
    </tr>
    <!--    <tr>-->
    <!--        <td colspan='40'>Account Number:</td>-->
    <!--        <td><input type="text" name="bank_account[account_number]" size="25" value=""></td>-->
    <!--        <td><input type="text" name="bank_account[ifsc]" size="25" value=""></td>-->
    <!--        <td><input type="text" name="bank_account[name]" size="25" value=""></td>-->
    <!--        <td><input type="text" name="bank_account[account_type]" size="25" value="current"></td>-->
    <!--    </tr>-->
    <!--    <tr>-->
    <!--        <td colspan='40'>Token recurring:</td>-->
    <!--        <td><input type="text" name="recurring_token[max_amount]" size="25" value="20000"></td>-->
    <!--        <td><input type="text" name="recurring_token[expire_by]" size="25" value=""></td>-->
    <!--    </tr>-->
    <!--    <tr>-->
    <!--        <td colspan='40'>Aadhaar Number / Aadhaar VID:</td>-->
    <!--        <td><input type="text" name="aadhaar[number]" size="12" value="123456789012"></td>-->
    <!--        <td><input type="text" name="aadhaar[vid]" size="16" value="1234567890123456"></td>-->
    <!--    </tr>-->

    <tr>
        <td colspan="100" align="center">
            <input type="submit" value="  Submit  " >
        </td>
    </tr>
    </table>
    <div style="background: brown; color: #fff; text-align: center; height: 20px"></div>
</form>
<br><br>
<div style="text-align:center">

</body>
</html>
