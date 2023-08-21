<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="padding: 4px;">
    <h1>New Admission received for {{ $getadmission->upcommingclasses?->courses?->title }}. </h1>
    <p>
    <h4>Admission details are as follows : </h4><br>
    <ul>
        <li><b>Name :</b>{{ ucfirst($getadmission->name) }}</li>
        <li><b>Email :</b>{{ $getadmission->email }}</li>
        <li><b>Phone Number:</b>{{ $getadmission->phone_number }}</li>
        <li><b>Address :</b>{{ ucfirst($getadmission->address) }}</li>
        <li><b>Course:</b>{{ ucfirst($getadmission->upcommingclasses->courses->title) }}</li>
        <li><b>Academic Level :</b>{{ ucfirst($getadmission->academic_level) }}</li>
        <li><b>Payment Method:</b>{{ ucfirst($getadmission->paymentmethods->title) }}</li>
        <li><b>Amount:</b>Rs.{{ $getadmission->payment_amount }}</li>
    </ul>
    </p>
    <p>You can check out the admission details by loggin into the system. <br>
        Click the below button to check the admission details: <br>

        <a href="https://kitwosd.com">
            <button
                style="background-color: #d29e5d; color:#000000; padding:5px; border-radius:5px; border-color:#feffac"><b>Plan
                    Edukit System</b></button>
        </a>
        <br>
        Incase the above button is not working you can click the following link : https://kitwosd.com
    </p>
</body>

</html>
