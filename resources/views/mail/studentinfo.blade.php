<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="padding: 4px;">
    <h1>Congratulation on your enrollment for {{ $getadmission->upcommingclasses?->courses?->title }}. </h1>
    <p>
    <h4>your admission details are as follows : </h4><br>
    <ul>
        <li><b>Name :</b>{{ $getadmission->name }}</li>
        <li><b>Email :</b>{{ $getadmission->email }}</li>
        <li><b>Phone Number:</b>{{ $getadmission->phone_number }}</li>
        <li><b>Address :</b>{{ ucfirst($getadmission->address) }}</li>
        <li><b>Course:</b>{{ ucfirst($getadmission->upcommingclasses->courses->title) }}</li>
        <li><b>Academic Level :</b>{{ ucfirst($getadmission->academic_level) }}</li>
        <li><b>Payment Method:</b>{{ ucfirst($getadmission->paymentmethods->title) }}</li>
        <li><b>Amount:</b>Rs.{{ $getadmission->payment_amount }}</li>
    </ul>
    </p>
    <p>If you have any doubt related to your admission contact us in 9876543210/098765432.</p>
</body>

</html>
