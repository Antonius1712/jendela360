<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>I-SSURANCE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    </head>
    <body>
        <center>
            <table style="width: 794px; margin: 0 auto; text-align: left; font-family: Calibri, sans-serif; text-align:justify; font-size:11;" class="email-table">

                @yield('content')

                @if(!isset($noFooter))
                <hr style="display: block;height: 1px;border: 0;border-top: 1px solid #ccc;margin: 1em 0;padding: 0;">

                <tr>
                    <td>
                        <span style="font-family: Calibri, sans-serif; text-align:justify; font-size: 14px; line-height: 18px; color: #333; margin: 20px 0 30px;">
                            catatan :
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span style="font-family: Calibri, sans-serif; text-align:justify; font-size: 14px; line-height: 18px; color: #333; margin: 20px 0 30px;">
                            email ini Testing Saja!!!!!
                        </span>
                    </td>
                </tr>
                @endif
            </table>
        </center>
    </body>
</html>
