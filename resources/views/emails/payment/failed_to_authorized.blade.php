<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width"></head><body class="body" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; margin: 0; min-width: 100%; padding: 0; width: 100% !important; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; text-align: left; font-size: 14px; background: #EBECEE;">
    <table class="container" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: inherit; vertical-align: top; margin: 0 auto; width: 580px; background: #EBECEE;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px;">
          @include('emails.partials.header', ['message'=>$message, 'custom_branding'=>$custom_branding])
          <!-- Payment Successfull Header -->
          <table class="row" style="border-collapse: collapse; border-spacing: 0; padding: 0px; text-align: left; vertical-align: top; position: relative; width: 100%; display: block;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="center" align="center" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0; text-align: center; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px;">
                <center style="min-width: 580px; width: 100%;">

                  <table class="container" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: inherit; vertical-align: top; margin: 0 auto; width: 580px;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="wrapper center last" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 10px 20px 0px 0px; text-align: center; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; position: relative; padding-right: 0px;">
                        <center style="min-width: 580px; width: 100%;">
                        <table class="twelve columns bluebg" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; background: #39ACE5; margin: 0 auto; width: 580px;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="center" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0px 0px 10px; text-align: center; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px;">
                              <h1 style="color: #f2f2f2; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: bold; line-height: 1.3; margin: 0; padding: 0; text-align: center; word-break: normal; font-size: 32px; margin-top: 40px;">
                              <center style="min-width: 580px; width: 100%;">
                                Payment Successful
                              </center>
                              </h1>
                            </td>
                            <td class="expander" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0 !important; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; visibility: hidden; width: 0px;"></td>
                          </tr></table></center>
                      </td>
                    </tr></table></center>
              </td>
            </tr></table>
          @include('emails.partials.header_image', ['image'=>'payment_green'], ['message'=>$message])
          <!-- Merchant Name -->
          <table class="row" style="border-collapse: collapse; border-spacing: 0; padding: 0px; text-align: left; vertical-align: top; position: relative; width: 100%; display: block;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="center" align="center" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0; text-align: center; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px;">
                <center style="min-width: 580px; width: 100%;">
                  <table class="container" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: inherit; vertical-align: top; margin: 0 auto; width: 580px;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="wrapper last bluebg" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 10px 20px 0px 0px; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; background: #39ACE5; position: relative; padding-right: 0px;">
                        <table class="six columns bluebg" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; background: #39ACE5; margin: 0 auto; width: 280px;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="center" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0px 0px 10px; text-align: center; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px;">
                              <center style="min-width: 280px; width: 100%;">
                                <h3 class="center" style="color: #39ACE5; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: bold; line-height: 1.3; margin: 0; padding: 0; text-align: center; word-break: normal; font-size: 16px; margin-top: 10px;">
                                @if (isset($merchant['website']) === true)
                                <a href="{{$merchant['website']}}" title="{{$merchant['billing_label']}} Website" style="color: #f2f2f2; text-decoration: none; font-size: 22px;">{{$merchant['billing_label']}}</a>
                                @else
                                <span style="color: #f2f2f2; font-size: 22px;">{{$merchant['billing_label']}}</span>
                                @endif
                                </h3>
                              </center>
                            </td>
                            <td class="expander" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0 !important; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; visibility: hidden; width: 0px;"></td>
                          </tr></table></td>
                    </tr></table></center>
              </td>
            </tr></table><!-- Payment Id --><table class="row" style="border-collapse: collapse; border-spacing: 0; padding: 0px; text-align: left; vertical-align: top; position: relative; width: 100%; display: block;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px;">
                <center style="min-width: 580px; width: 100%;">
                  <table class="container" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: inherit; vertical-align: top; margin: 0 auto; width: 580px;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="wrapper last white" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 10px 20px 0px 0px; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; background: #ffffff; background-color: #ffffff; position: relative; padding-right: 0px;">
                        <table class="eleven columns left-text-pad" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; margin: 0 auto; width: 530px;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="darktext" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0px 0px 10px; text-align: left; vertical-align: top; color: #484B4C; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 25px; margin: 0; font-size: 14px;">
<p style="margin: 0; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 25px; padding: 0; text-align: left; font-size: 14px; margin-bottom: 10px;">This payment (earlier marked as failed) has now been converted to authorized.</p>
<p style="margin: 0; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 25px; padding: 0; text-align: left; font-size: 14px; margin-bottom: 10px;">This means that money was deducted from the customer's account. Please capture this payment and process it immediately.</p>
                            </td>
                            <td class="expander" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0 !important; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; visibility: hidden; width: 0px;"></td>
                          </tr></table></td>
                    </tr></table></center>
              </td>
            </tr></table><!-- Payment Id --><table class="row" style="border-collapse: collapse; border-spacing: 0; padding: 0px; text-align: left; vertical-align: top; position: relative; width: 100%; display: block;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="center" align="center" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0; text-align: center; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px;">
                <center style="min-width: 580px; width: 100%;">
                  <table class="container" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: inherit; vertical-align: top; margin: 0 auto; width: 580px;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="wrapper last white" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 10px 20px 0px 0px; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; background: #ffffff; background-color: #ffffff; position: relative; padding-right: 0px;">
                        <table class="six columns" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; margin: 0 auto; width: 280px;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="center darktext" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0px 0px 10px; text-align: center; vertical-align: top; color: #484B4C; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 25px; margin: 0; font-size: 14px;">
                              <center style="min-width: 280px; width: 100%;">
                                Payment Id: {{$payment['public_id']}}
                              </center>
                              <hr class="small" style="background-color: #d9d9d9; border: none; color: #E5E5E5; height: 2px; width: 40%;"></td>
                            <td class="expander" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0 !important; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; visibility: hidden; width: 0px;"></td>
                          </tr></table></td>
                    </tr></table></center>
              </td>
            </tr></table><!-- Payment Details --><table class="row" style="border-collapse: collapse; border-spacing: 0; padding: 0px; text-align: left; vertical-align: top; position: relative; width: 100%; display: block;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="wrapper white" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 10px 20px 0px 0px; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; background: #ffffff; background-color: #ffffff; position: relative;">
                <table class="four columns" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; margin: 0 auto; width: 180px;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="darktext left-text-pad" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0px 0px 10px; text-align: left; vertical-align: top; color: #484B4C; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 25px; margin: 0; font-size: 14px; padding-left: 10px;">
                      Amount
                    </td>
                    <td class="expander" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0 !important; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; visibility: hidden; width: 0px;"></td>
                  </tr></table></td>
              <td class="wrapper white offset-by-five last" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 10px 20px 0px 0px; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; background: #ffffff; background-color: #ffffff; position: relative; padding-left: 250px; padding-right: 0px;">
                <table class="three columns" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; margin: 0 auto; width: 130px;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="right-text-pad darktext" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0px 0px 10px; text-align: right; vertical-align: top; color: #484B4C; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 25px; margin: 0; font-size: 14px; padding-right: 10px;">
                    {{$payment['amount']}}
                    </td>
                    <td class="expander" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0 !important; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; visibility: hidden; width: 0px;"></td>
                  </tr></table></td>
            </tr></table><!-- Customer EMail Details --><table class="row" style="border-collapse: collapse; border-spacing: 0; padding: 0px; text-align: left; vertical-align: top; position: relative; width: 100%; display: block;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="wrapper white" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 10px 20px 0px 0px; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; background: #ffffff; background-color: #ffffff; position: relative;">
                <table class="four columns" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; margin: 0 auto; width: 180px;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="darktext left-text-pad" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0px 0px 10px; text-align: left; vertical-align: top; color: #484B4C; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 25px; margin: 0; font-size: 14px; padding-left: 10px;">
                      Customer Details
                    </td>
                    <td class="expander" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0 !important; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; visibility: hidden; width: 0px;"></td>
                  </tr></table></td>
              <td class="wrapper white offset-by-two last" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 10px 20px 0px 0px; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; background: #ffffff; background-color: #ffffff; position: relative; padding-left: 100px; padding-right: 0px;">
                <table class="six columns" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; margin: 0 auto; width: 280px;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="right-text-pad darktext" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0px 0px 10px; text-align: right; vertical-align: top; color: #484B4C; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 25px; margin: 0; font-size: 14px; padding-right: 10px;">
                      <!-- This is for no linking in gmail -->
                      <a href="" class="darktext" style="color: #484B4C; text-decoration: none; line-height: 25px;">
                        {{$customer['email']}}</a>
                      <br>
                      {{$customer['phone']}}
                    </td>
                    <td class="expander" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0 !important; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; visibility: hidden; width: 0px;"></td>
                  </tr></table></td>
            </tr></table>
@if($payment['orderId'])
          <!-- Order Id (if available) -->
          <table class="row" style="border-collapse: collapse; border-spacing: 0; padding: 0px; text-align: left; vertical-align: top; position: relative; width: 100%; display: block;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="wrapper white" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 10px 20px 0px 0px; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; background: #ffffff; background-color: #ffffff; position: relative;">
                <table class="four columns" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; margin: 0 auto; width: 180px;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="darktext left-text-pad" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0px 0px 10px; text-align: left; vertical-align: top; color: #484B4C; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 25px; margin: 0; font-size: 14px; padding-left: 10px;">
                      Order Id
                    </td>
                    <td class="expander" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0 !important; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; visibility: hidden; width: 0px;"></td>
                  </tr></table></td>
              <td class="wrapper white last" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 10px 20px 0px 0px; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; background: #ffffff; background-color: #ffffff; position: relative; padding-right: 0px;">
                <table class="eight columns" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; margin: 0 auto; width: 380px;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="right-text-pad darktext" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0px 0px 10px; text-align: right; vertical-align: top; color: #484B4C; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 25px; margin: 0; font-size: 14px; padding-right: 10px;">
                      {{$payment['orderId']}}

                    </td>
                    <td class="expander" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0 !important; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; visibility: hidden; width: 0px;"></td>
                  </tr></table></td>
            </tr></table>
@endif
          <!-- Contact Us -->
          <table class="row" style="border-collapse: collapse; border-spacing: 0; padding: 0px; text-align: left; vertical-align: top; position: relative; width: 100%; display: block;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="center" align="center" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0; text-align: center; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px;">
                <center style="min-width: 580px; width: 100%;">
                  <table class="container" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: inherit; vertical-align: top; margin: 0 auto; width: 580px;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="wrapper last white" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 10px 20px 0px 0px; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; background: #ffffff; background-color: #ffffff; position: relative; padding-right: 0px;">
                        <table class="twelve columns" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; margin: 0 auto; width: 580px;"><tr style="padding: 0; text-align: left; vertical-align: top;"><td class="center lighttext" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0px 0px 10px; text-align: center; vertical-align: top; color: #B2B2B2; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 12px; text-decoration: none;">
                              <hr class="wide" style="background-color: #d9d9d9; border: none; color: #E5E5E5; height: 2px; width: 490px;"><center style="min-width: 580px; width: 100%;">
                                You can view the payment details on the <a href="https://dashboard.razorpay.com/#/app/payments/{{$payment['public_id']}}" title="Payment Details" style="color: #2ba6cb; text-decoration: none;">Merchant Dashboard</a>.
                              </center>
                            </td>
                            <td class="expander" style="-moz-hyphens: auto; -webkit-hyphens: auto; border-collapse: collapse !important; hyphens: auto; word-break: break-word; padding: 0 !important; text-align: left; vertical-align: top; color: #222222; font-family: -apple-system,'.SFNSDisplay','Oxygen','Ubuntu','Roboto','Segoe UI','Helvetica Neue','Lucida Grande',sans-serif; font-weight: normal; line-height: 19px; margin: 0; font-size: 14px; visibility: hidden; width: 0px;"></td>
                          </tr></table></td>
                    </tr></table></center>
              </td>
            </tr></table>
          @include('emails.partials.footer', ['message'=>$message])

          @if ($custom_branding)
            <table class="row" style="border-collapse: collapse; border-spacing: 0; padding: 0px; text-align: left; vertical-align: top; position: relative; width: 100%; display: block;">
              <tr style="padding: 0; text-align: left; vertical-align: top;">
                <td class="center" align="center" style="border-collapse: collapse !important; padding: 0; text-align: center; vertical-align: top; margin: 0;">
                  <center style="min-width: 580px; width: 100%;">
                    <table class="container" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: inherit; vertical-align: top; margin: 0 auto; width: 580px;">
                      <tr style="padding: 0; text-align: left; vertical-align: top;">
                        <td class="wrapper last white" style="border-collapse: collapse !important; padding: 10px 20px 0px 0px; text-align: left; vertical-align: top; margin: 0; background: #ffffff; background-color: #ffffff; position: relative; padding-right: 0px;">
                          <table class="twelve columns" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; margin: 0 auto; width: 580px;">
                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                              <td class="center lighttext" style="border-collapse: collapse !important; padding: 0px 0px 10px; text-align: center; vertical-align: top; margin: 0; font-size: 12px;">
                                <center style="min-width: 580px; width: 100%;">
                                  <img src="{{ $email_logo }}" style="height: 32px;" />
                                </center>
                              </td>
                              <td class="expander" style="border-collapse: collapse !important; padding: 0 !important; text-align: left; vertical-align: top; margin: 0; visibility: hidden; width: 0px;">
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </center>
                </td>
              </tr>
            </table>
          @endif
        </td>
      </tr></table></body></html>