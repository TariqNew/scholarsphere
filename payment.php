<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Method</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        .title {
            text-align: center;
            margin-bottom: 30px;
        }

        .title h4 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .title span {
            color: #6064b6;
        }

        form input {
            display: none;
        }

        .category {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .category label {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
            position: relative;
        }

        .category label:hover {
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
            transform: translateY(-3px);
        }

        .category .imgContainer {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }

        .category .imgContainer img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            border-radius: 5px;
        }

        .category .name {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .check {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 18px;
            color: #6064b6;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        #visa:checked ~ .category .visaMethod .check,
        #mastercard:checked ~ .category .mastercardMethod .check,
        #paypal:checked ~ .category .paypalMethod .check,
        #AMEX:checked ~ .category .amexMethod .check {
            opacity: 1;
        }

        #visa:checked ~ .category .visaMethod,
        #mastercard:checked ~ .category .mastercardMethod,
        #paypal:checked ~ .category .paypalMethod,
        #AMEX:checked ~ .category .amexMethod {
            box-shadow: 0px 0px 10px #6064b6;
        }

        /* Media Query for Smaller Screens */
        @media (max-width: 600px) {
            .category {
                grid-template-columns: 1fr;
            }

            .container {
                margin: 20px;
                padding: 15px;
            }

            .title h4 {
                font-size: 20px;
            }

            .category label {
                padding: 15px;
            }

            .category .imgContainer {
                width: 40px;
                height: 40px;
            }

            .category .name {
                font-size: 16px;
            }

            .check {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">
            <h4>Select a <span>Payment</span> Method</h4>
        </div>

        <form action="#">
            <input type="radio" name="payment" id="visa">
            <input type="radio" name="payment" id="mastercard">
            <input type="radio" name="payment" id="paypal">
            <input type="radio" name="payment" id="AMEX">

            <div class="category">
                <label for="visa" class="visaMethod">
                    <div class="imgContainer visa">
                        <img src="https://i.ibb.co/vjQCN4y/Visa-Card.png" alt="Visa">
                    </div>
                    <span class="name">VISA</span>
                    <span class="check"><i class="fa-solid fa-circle-check"></i></span>
                </label>

                <label for="mastercard" class="mastercardMethod">
                    <div class="imgContainer mastercard">
                        <img src="https://i.ibb.co/vdbBkgT/mastercard.jpg" alt="MasterCard">
                    </div>
                    <span class="name">MasterCard</span>
                    <span class="check"><i class="fa-solid fa-circle-check"></i></span>
                </label>

                <label for="paypal" class="paypalMethod">
                    <div class="imgContainer paypal">
                        <img src="https://i.ibb.co/5vWb3vd/paypal.png" alt="PayPal">
                    </div>
                    <span class="name">PayPal</span>
                    <span class="check"><i class="fa-solid fa-circle-check"></i></span>
                </label>

                <label for="AMEX" class="amexMethod">
                    <div class="imgContainer amex">
                        <img src="https://i.ibb.co/WzPfTRz/amex.png" alt="American Express">
                    </div>
                    <span class="name">AMEX</span>
                    <span class="check"><i class="fa-solid fa-circle-check"></i></span>
                </label>
            </div>
        </form>
    </div>
</body>
</html>
