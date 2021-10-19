<!DOCTYPE html>
<html lang="en">
<head>
    <base href="">
    <meta charset="utf-8" />
    <link href="css/pdf.css" rel="stylesheet">
</head>
<body>
    <div id="main-container" >
        <p id="heading-text" style="margin-bottom:0;">PAPUA NEW GUINEA INTERNAL REVENUE COMMISSION</p>
        <h2 class="purple-title" style="margin-bottom:0;">Payment Receipt</h2>
        <p class="normal-text">Thank you for your payment to the <span class="bold">Internal Revenue Commission.</span> This receipt is available anytime from your myIRC account.</p>
        <h3 class="purple-title" style="margin-bottom:0;">Receipt to:</h3>
        <div class="blue-box m-tb-20">
            <div class="left" style="margin-top: 30px;">
                <p class="bold normal-text">Given Name(s):</p>
                <p class="bold normal-text">Surname:</p>
                <p class="bold normal-text">Billing name:</p>
                <p class="bold normal-text">Address (Line 1):</p>
                <p class="bold normal-text">Address (Line 2):</p>
                <p class="bold normal-text">City/Town:</p>
                <p class="bold normal-text">Province/State/Region:</p>
                <p class="bold normal-text">Postal Code/ZIP:</p>
                <p class="bold normal-text">Country:</p>
            </div>
            <div class="right" style="margin-top: 30px;">
                @foreach ($data['receipt_to'] as $item)
                    <p class="normal-text">{{ $item }}</p>
                @endforeach
            </div>
        </div>
        <div class="blue-box m-tb-20">
            <div class="right">
                <p class="purple-title bold underline" >Confirmation sent to:</p>
                <p class="link-text">{{ $data['email_to'] }}</p>
            </div>
            <div class="left">
                QR
            </div>
        </div>
        <h3 class="purple-title" style="margin-bottom:0;">Your payment breakdown:</h3>
        <table id="maintable">
            <thead style="border-bottom: 2px solid #2782f9;">
                <tr>
                    <th>Transaction ID</th>
                    <th>TIN <span class="bold">Amount </span></th>
                    <th>Comment</th>
                    <th>Type</th>
                    <th>Year <span class="bold">Month </span></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['payment'] as $payment)
                    <tr>
                        <td style="height: 50px;">{{ $payment['transaction_id'] }}</td>
                        <td>{{ $payment['tin'] }} <span class="bold">{{ $payment['amount'] }}</span></td>
                        <td>{{ $payment['comment'] }}</td>
                        <td>{{ $payment['type'] }}</td>
                        <td>{{ $payment['year'] }} <span class="bold">{{ $payment['month'] }}</span></td>
                    </tr>
                    <tr class="border-bottom-blue">
                        <td style="height: 50px;"><span class="bold" style="margin-top:10px;">Assessment Number:</span></td>
                        <td colspan="4">{{ $payment['assessment_number'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div id="total-table">
            <div class="left">
                <p class="bold normal-text">Total:</p>
            </div>
            <div class="right">
                <p class="bold normal-text">3000</p>
            </div>
        </div>
        <h4 class="purple-title" style="margin-bottom:0;">Access to your information:</h4>
        <div>
            <p class="info-text" style="margin:0;">Did you know that your payment history and downloadable receipts are available 24/7 from your myIRC account. Your myIRC account also allows you to make direct contact with officers from the Internal Revenue Commission</p>
            <a class="info-text link-text underline" href="#">https://irc.gov.pg/myirc</a>
        </div>
        <h4 class="purple-title" style="margin-bottom:0;">Support Centre:</h4>
        <div>
            <p class="info-text" style="margin:0;">You can contact an officer from the Internal Revenue Commission by using the myIRC Support Centre, accessible 24/7. Get your questions answered quickly, without the hassle.</p>
            <a class="info-text link-text underline" href="#">https://irc.gov.pg/support-centre</a>
        </div>
    </div>
    <div id="sidebar">
        <h1 style="text-align:center;">image</h1>
        <p class="normal-text" style="text-align:center;">PAPUA NEW GUINEA INTERNAL REVENUE COMMISSION</p>
        <p class="normal-text" style="font-style: italic; text-align:center;" >Building the Foundation of a Robust, Modern and Efficient Tax Administration</p>
        <div class="sidebar-inputs">
            <p class="normal-text bold">Date of payment:</p>
            <div class="fake-input">TEST</div>
        </div>
        <div class="sidebar-inputs">
            <p class="normal-text bold">Total amount paid:</p>
            <div class="fake-input"> TEST</div>
        </div>
        <div class="sidebar-inputs">
            <p class="normal-text bold">Payment ID:</p>
            <div class="fake-input"> TEST</div>
        </div>
        <div class="sidebar-inputs">
            <p class="normal-text bold">Bank Approval:</p>
            <div class="fake-input"> TEST</div>
        </div>
        <div class="sidebar-inputs">
            <p class="normal-text bold">Payment Type:</p>
            <div class="fake-input"> TEST</div>
        </div>
        <div class="sidebar-inputs">
            <p class="normal-text bold">Status:</p>
            <div class="fake-input"> TEST</div>
        </div>
        <p class="normal-text" style="text-align:center;">Page 1 of 1</p>
        <div class="sidebar-inputs">
            <div class="sidebar-info">
                <p class="purple-title bold">Website</p>
                <a class="info-text link-text underline" href="#">irc.gov.pg</a>
                <p class="purple-title bold">My iRC</p>
                <a class="info-text link-text underline" href="#">irc.gov.pg/myirc</a>
                <p class="purple-title bold" >Postal:</p>
                <p>P.O Box 777</p>
                <p>Port Moresby, NCD</p>
                <p>Papua New Guinea</p>
            </div>
        </div>
    </div>
</body>
</html>
