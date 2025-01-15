<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        /* Styling the overall email */
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.5;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            font-size: 24px;
            color: #4CAF50;
        }

        p {
            font-size: 16px;
            color: #333;
        }

        .email-content {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        .order-details {
            margin-top: 20px;
        }

        .order-details ul {
            list-style-type: none;
            padding: 0;
        }

        .order-details li {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .order-details li strong {
            color: #333;
        }

        .cta-button {
            background-color: #4CAF50;
            color: #fff;
            padding: 12px 20px;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            display: inline-block;
            margin-top: 20px;
        }

        .cta-button:hover {
            background-color: #45a049;
        }

        .footer {
            font-size: 14px;
            color: #777;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div style="max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
        <h1>Order Confirmation</h1>

        <p>Hello {{ $customer->name }},</p>

        <p>Your meal plan order has been successfully created! Here are the details:</p>

        <div class="email-content">
            <div class="order-details">
                <ul>
                    <li><strong>Menu Type:</strong> {{ $mealPlan->menuType->type }}</li>
                    <li><strong>Persons:</strong> {{ $mealPlan->persons }}</li>
                    <li><strong>Delivery Address:</strong> {{ $mealPlan->delivery_address }}</li>
                    <li><strong>Start Date:</strong> {{ $mealPlan->start_date }}</li>
                </ul>
            </div>

        </div>

        <p>Thanks, <br>{{ config('app.name') }}</p>

        <div class="footer">
            If you have any questions, feel free to contact our support team.
        </div>
    </div>
</body>
</html>
