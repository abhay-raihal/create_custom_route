<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
</head>
<body class="body" style="width: 100% !important; min-width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; color: rgba(0,0,0,0.87); font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; padding: 0; margin: 0; text-align: left; font-size: 14px; line-height: 20px; background: #EBECEE;">
<div class="container" style="width: 100%;">
    <div class="header" style="min-width: 580px; background-color: #528FF0; color: #fff; padding-top: 20px; text-align: center;">
        <div style="font-size: 24px; margin-bottom: 15px; font-weight: bold;">Vendor Payments Invoices</div>
        <div>{{ $created_on }}</div>
        <div class="title" style="width: 580px; background-color: #F9F9F9; color: rgba(0,0,0,0.87); margin: 30px auto 0; padding: 15px 0;">
            <p style="margin: 0 0 10px;">
                Hi {{$consumer_info}},
            </p>
            <p style="margin: 10px 0 0;">
                Attached files for <b>Vendor Payments Report</b> is ready for download!
            </p>

            <p style="margin: 10px 0 0;">
                This email contains additional files associated with the Vendor Payment report. You will receive a separate email containing the CSV/XLS report.
            </p>

        </div>
    </div>
    <div class="body" style="width: 580px; background-color: #fff; margin: 0 auto;">
        <div class="content" style="padding: 0 20px; border-bottom: 8px solid #528FF0;">
            <div class="details" style="padding: 20px 0;">
                <table style="border-spacing: 0px;">
                    <tr>
                        <td style="margin-bottom: 5px;">
                  <span style="color: rgba(0,0,0,0.54);font-size: 12px;font-weight: bold;line-height: 15px;">
                    File Details
                  </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="margin-top: 5px;">
                            <span style="color: rgba(0,0,0,0.54);">Name:</span> {{$file_name}}
                        </td>
                    </tr>
                    <tr>
                        <td style="margin-top: 5px;">
                            <span style="color: rgba(0,0,0,0.54);">Created on:</span> {{$created_on}}
                        </td>
                    </tr>
                    <tr>
                        <td style="margin-top: 5px;">
                            <span style="color: rgba(0,0,0,0.54);">Requested on:</span> {{$requested_on}}
                        </td>
                    </tr>
                    <tr>
                        <td style="margin-top: 5px;">
                            <span style="color: rgba(0,0,0,0.54);">Generated on:</span> {{$generated_on}}
                        </td>
                    </tr>
                    <tr>
                        <td style="margin-top: 5px;">
                            <span style="color: rgba(0,0,0,0.54);">Generated by:</span> {{$generated_by}}
                        </td>
                    </tr>

                </table>
            </div>
            <div class="download" style="border-top: 1px solid rgba(0,0,0,0.2);display: table; width: 100%; table-layout: fixed;">
                <p style="display: table-cell; color: rgba(0,0,0,0.54); line-height: 17px; padding: 20px 0;">
                    Please find the Invoices ZIP attached to this email
                </p>
            </div>
        </div>
    </div>
    <div class="footer" style="color: #58666E; width: 580px; margin: 0 auto; padding: 20px 0; text-align: center; font-size: 14px; background:none;">
        <p style="margin-top: 0px;">If you have any queries, please reach out to us at support@razorpay.com</p>
        <div>
            <a href="https://facebook.com/razorpay" style="margin:5px; text-decoration: none;">
                <img src="<?php echo $message->embed(public_path() . '/img/facebook.png'); ?>" height=20/>
            </a>
            <a href="https://twitter.com/razorpay" style="margin:5px; text-decoration: none;">
                <img src="<?php echo $message->embed(public_path() . '/img/twitter.png'); ?>" height=20/>
            </a>
            <a href="https://github.com/razorpay" style="margin:5px; text-decoration: none;">
                <img src="<?php echo $message->embed(public_path() . '/img/github.png'); ?>" height=20/>
            </a>
        </div>
        <p>
            Powered by
            <img style="display: inline-block; vertical-align: top;" src="<?php echo $message->embed(public_path() . '/img/logo_black.png'); ?>" height="18" />
        </p>
    </div>
</div>
</body>
</html>
