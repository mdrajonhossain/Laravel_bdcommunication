@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manual Payment Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .invoice-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .invoice-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .invoice-header h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }
        .invoice-details {
            margin-bottom: 20px;
        }
        .invoice-details p {
            margin: 8px 0;
            color: #666;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group input[type="email"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<center>
<div class="invoice-container">
    <div class="invoice-header">
        <h1>Manual Payment</h1>
    </div>

    <div class="invoice-details">
        <p>Invoice ID: #{{$invoice_view->id}}</p>
        <p>Amount Due: {{$invoice_view->total}} Taka</p>
        <p>Bkash Personal: 01612126669</p>
    </div>

    <form action="/invoice_edit_post_user/{{$invoice_view->id}}" method="post">
        @csrf

        <div class="form-group">
            <label for="transaction_id">Your Bkash Number:</label>
            <input type="text" id="transaction_id" name="payment" value="{{$invoice_view->payment}}" required>
        </div>

        <div class="form-group">
            <button type="submit">Submit Payment</button>
        </div>
    </form>
</div>

</body>
</html>
</center>
@endsection