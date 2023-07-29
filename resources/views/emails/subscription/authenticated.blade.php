<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width">
</head>
<body style="width: 100% !important; min-width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px;"><table style="border-spacing: 0; border-collapse: collapse; padding: 0; vertical-align: top; text-align: left; width: 100%;">
<!-- header --><thead>
<tr style="padding: 0; vertical-align: top; text-align: left;">
<td class="left" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 10%; background: #2b5e9b; color: #fff;"></td>
      <td class="middle header" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; margin: 0; font-size: 14px; line-height: 19px; width: 80%; background: #2b5e9b; color: #fff; text-align: center; padding: 20px 50px;">
        <h4 style="font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; line-height: 1.3; word-break: normal; font-size: 28px; color: #fff; text-align: center;">Subscription Started at {{$merchant['billing_label']}}</h4>
        <p style="font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; font-size: 14px; line-height: 19px; margin-bottom: 10px; text-align: center; color: #bccde0;">Subscription ID: {{$subscription['id']}}</p>
      </td>
      <td class="right" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 10%; background: #2b5e9b; color: #fff;"></td>
    </tr>
<tr style="padding: 0; vertical-align: top; text-align: left;">
<td class="left demarcated" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 10%; background: #2b5e9b; color: #fff; border-bottom: 1px solid #2b5e9b;"></td>
      <td class="middle demarcated" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 80%; border-bottom: 1px solid #eaeaea; padding: 20px;">
        You have been successfully subscribed and a payment of <strong>{{$payment['amount']}}</strong> has been made
@if($options['auto_refund'] === true)
 and will be auto-refunded
@endif
. The card details are securely stored for future payments of this subscription.
      </td>
      <td class="right demarcated" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 10%; background: #2b5e9b; color: #fff; border-bottom: 1px solid #2b5e9b;"></td>
    </tr>
</thead>
<!-- body --><tbody>
<tr style="padding: 0; vertical-align: top; text-align: left;">
<td class="left" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 10%; background: #fafafa;"></td>
      <td class="middle" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 80%; padding: 10px 20px; border-left: 1px solid #eaeaea; border-right: 1px solid #eaeaea;"></td>
      <td class="right" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 10%; background: #fafafa;"></td>
    </tr>
<!-- Plan --><tr style="padding: 0; vertical-align: top; text-align: left;">
<td class="left" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 10%; background: #fafafa;"></td>
      <td class="middle" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 80%; padding: 10px 20px; border-left: 1px solid #eaeaea; border-right: 1px solid #eaeaea;">
        <h6 style="color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; padding: 0; margin: 0; text-align: left; line-height: 1.3; word-break: normal; text-transform: uppercase; font-size: 14px; font-weight: bold; margin-bottom: 10px;">Subscription Plan</h6>
        <p class="title" style="color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; margin-bottom: 10px;">{{$plan_item['name']}}</p>
        <p class="sub-title" style="font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; line-height: 19px; margin-bottom: 10px; font-size: 12px; color: #696969;">{{$plan_item['description']}}</p>
        <p class="sub-title" style="font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; line-height: 19px; margin-bottom: 10px; font-size: 12px; color: #696969;">Amount: {{$plan_item['amount']}}</p>
        <p class="sub-title" style="font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; line-height: 19px; margin-bottom: 10px; font-size: 12px; color: #696969;">Next due on {{$subscription['charge_at']}}</p>
      </td>
      <td class="right" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 10%; background: #fafafa;"></td>
    </tr>
<!-- Payment -->
    @if($options['auto_refund'] === false)
    <tr style="padding: 0; vertical-align: top; text-align: left;">
<td class="left" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 10%; background: #fafafa;"></td>
      <td class="middle" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 80%; padding: 10px 20px; border-left: 1px solid #eaeaea; border-right: 1px solid #eaeaea;">
        <h6 style="color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; padding: 0; margin: 0; text-align: left; line-height: 1.3; word-break: normal; text-transform: uppercase; font-size: 14px; font-weight: bold; margin-bottom: 10px;">Payment Details</h6>
        <p class="title" style="color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; margin-bottom: 10px;"><strong>{{$payment['amount']}}</strong></p>
        <p class="sub-title" style="font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; line-height: 19px; margin-bottom: 10px; font-size: 12px; color: #696969;">Payment ID: {{$payment['public_id']}}</p>
        <p class="sub-title" style="font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; line-height: 19px; margin-bottom: 10px; font-size: 12px; color: #696969;">Paid on {{$payment['captured_at']}}</p>
      </td>
      <td class="right" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 10%; background: #fafafa;"></td>
    </tr>
    @endif
    <!-- Billing Period -->
    @if($options['immediate'] === true)
    <tr style="padding: 0; vertical-align: top; text-align: left;">
<td class="left" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 10%; background: #fafafa;"></td>
      <td class="middle" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 80%; padding: 10px 20px; border-left: 1px solid #eaeaea; border-right: 1px solid #eaeaea;">
        <h6 style="color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; padding: 0; margin: 0; text-align: left; line-height: 1.3; word-break: normal; text-transform: uppercase; font-size: 14px; font-weight: bold; margin-bottom: 10px;">Bill Date</h6>
        <p class="title" style="color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; margin-bottom: 10px;">{{$invoice['billing_start']}}</p>
        <!-- <p class="sub-title">End: {{$invoice['billing_end']}} </p> -->
      </td>
      <td class="right" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 10%; background: #fafafa;"></td>
    </tr>
    @endif
    <!-- Card -->
    <tr style="padding: 0; vertical-align: top; text-align: left;">
<td class="left" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 10%; background: #fafafa;"></td>
      <td class="middle" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 80%; padding: 10px 20px; border-left: 1px solid #eaeaea; border-right: 1px solid #eaeaea;">
        <h6 style="color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; padding: 0; margin: 0; text-align: left; line-height: 1.3; word-break: normal; text-transform: uppercase; font-size: 14px; font-weight: bold; margin-bottom: 10px;">Payment Method</h6>
        <p class="title" style="color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; margin-bottom: 10px;">{{$card['network']}} Card {{$card['number']}}</p>
      </td>
      <td class="right" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 10%; background: #fafafa;"></td>
    </tr>
<!--     <tr>
      <td class="left"></td>
      <td class="middle">
        <p class="title">Please find all details of the payment in the attached invoice</p>
      </td>
      <td class="right"></td>
    </tr> --><tr class="b-demarcate" style="padding: 0; vertical-align: top; text-align: left;">
<td class="left" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 10%; background: #fafafa;"></td>
      <td class="middle" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 80%; padding: 10px 20px; border-left: 1px solid #eaeaea; border-right: 1px solid #eaeaea; border-bottom: 1px solid #eaeaea;">
        <p class="sub-title" style="font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; line-height: 19px; margin-bottom: 10px; font-size: 12px; color: #696969;">You may contact <a href="https://dashboard.razorpay.com/#/app/dashboard#request" style="color: #2ba6cb; text-decoration: none;">here</a>for any query related to this subscription with the subscription ID as {{$subscription['id']}}</p>
      </td>
      <td class="right" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 10%; background: #fafafa;"></td>
    </tr>
</tbody>
<tfoot>
<tr class="b-demarcate" style="padding: 0; vertical-align: top; text-align: left;">
<td class="left" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 10%; background: #fafafa;"></td>
      <td class="middle" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 80%; background: #fafafa; padding: 30px 20px 20px; border-bottom: 1px solid #d6d6d6;">
        <p class="title" style="font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; line-height: 19px; margin-bottom: 10px; text-align: center; font-size: 13px; color: #8b8b8b;"><strong>{{$merchant['billing_label']}}</strong></p>
        <p class="sub-title" style="font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; line-height: 19px; margin-bottom: 10px; text-align: center; font-size: 12px; color: #989898;">{{$merchant['website']}}</p>
      </td>
      <td class="right" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 10%; background: #fafafa;"></td>
    </tr>
<tr style="padding: 0; vertical-align: top; text-align: left;">
<td class="left" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 10%; background: #fafafa;"></td>
      <td class="middle" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 80%; background: #fafafa; padding: 30px 20px 20px;">
        <p class="title" style="font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; line-height: 19px; margin-bottom: 10px; text-align: center; font-size: 13px; color: #8b8b8b;">Powered by <img src="https://cdn.razorpay.com/logo.svg" alt="Razorpay" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; max-width: 100%; clear: both; width: 100px; display: inline-block; float: none; vertical-align: bottom;"></p>
      </td>
      <td class="right" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 19px; width: 10%; background: #fafafa;"></td>
    </tr>
</tfoot>
</table></body>
</html>
