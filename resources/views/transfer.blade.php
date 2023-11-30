@extends('layout')

@section('content')
    <div class="cards-container">
        <div class="wrapper">
            <h1 style="font-size: 60px;"> Payment Methods </h1>
            <p style="justify-content: center; font-size: 20px; text-align: center; font-family:'Lucida Sans',
            'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                Elevate your payment experience with our app, offering a diverse range of options for seamless transactions.
                Easily settle domestic bills or navigate international payments, all within a user-friendly interface.
                <b>Click on the app icon</b> to seamlessly access respective payment websites for added convenience.
            </p>

            <div class="cards-container" style="70%">
                <div class="cards" style="background-color: rgb(255, 255, 255); text-align: center; height: 450px;">
                    <h1 style="color: rgb(71, 45, 45);"> TnG Ewallet </h1>
                    <a href="https://www.touchngo.com.my/" target="_blank">
                        <img src="images/tng-ewallet.png" style="width: 100px; height: auto; margin-left: 10px; margin-right: 10px;">
                    </a>
                    <h4 style="justify-content: center; margin: 15px; color: rgb(78, 53, 53); font-family: 'Arial';">
                        A mobile wallet that allows users to make secure and convenient payments, including online and
                        offline transactions. TNG eWallet supports various features such as fund transfer, bill payments,
                        and QR code payments.
                    </h4>
                </div>

                <div class="cards" style="background-color: rgb(255, 255, 255); text-align: center; height: 450px;">
                    <h1 style="color: rgb(71, 45, 45);"> MoneyMatch </h1>
                    <a href="https://transfer.moneymatch.co/" target="_blank">
                        <img src="images/moneymatch.png" style="width: 100px; height: auto; margin-left: 10px; margin-right: 10px;">
                    </a>
                    <h4 style="justify-content: center; margin: 15px; color: rgb(78, 53, 53); font-family: 'Arial';">
                        MoneyMatch is a digital cross-border money transfer platform. It provides users with a cost-effective and
                        efficient way to send money internationally, offering competitive exchange rates and low transaction fees.
                    </h4>
                </div>

                <div class="cards" style="background-color: rgb(255, 255, 255); text-align: center; height: 450px;">
                    <h1 style="color: rgb(71, 45, 45);"> PayPal </h1>
                    <a href="https://www.paypal.com/my/home" target="_blank">
                        <img src="images/paypal.png" style="width: 100px; height: auto; margin-left: 10px; margin-right: 10px;">
                    </a>
                    <h4 style="justify-content: center; margin: 15px; color: rgb(78, 53, 53); font-family: 'Arial';">
                        PayPal is a widely used online payment platform that allows users to make secure transactions over the internet.
                        Users can link their credit/debit cards or bank accounts to their PayPal account for easy and secure online payments.
                    </h4>
                </div>

                <div class="cards" style="background-color: rgb(255, 255, 255); text-align: center; height: 450px;">
                    <h1 style="color: rgb(71, 45, 45);"> Wise </h1>
                    <a href="https://wise.com/my/" target="_blank">
                        <img src="images/wise.png" style="width: 100px; height: auto; margin-left: 10px; margin-right: 10px;">
                    </a>
                    <h4 style="justify-content: center; margin: 15px; color: rgb(78, 53, 53); font-family: 'Arial';">
                        Wise is an international money transfer service that enables users to send money abroad at real exchange rates with low,
                        transparent fees. It's known for providing a cheaper alternative to traditional banks for international transfers.
                    </h4>
                </div>
                <div class="cards" style="background-color: rgb(255, 255, 255); text-align: center; height: 450px;">
                    <h1 style="color: rgb(71, 45, 45);"> Google Wallet (Google Pay)</h1>
                    <a href="https://wallet.google/" target="_blank">
                        <img src="images/google_wallet.png" style="width: 100px; height: auto; margin-left: 10px; margin-right: 10px;">
                    </a>
                    <h4 style="justify-content: center; margin: 15px; color: rgb(78, 53, 53); font-family: 'Arial';">
                        Google Pay is a digital wallet platform developed by Google. It allows users to make payments with their Android devices,
                        store loyalty cards, and send money to others. Google Pay also supports online and in-app purchases.
                    </h4>
                </div>

                <div class="cards" style="background-color: rgb(255, 255, 255); text-align: center; height: 450px;">
                    <h1 style="color: rgb(71, 45, 45);"> Maybank2u </h1>
                    <a href="https://www.maybank2u.com.my/home/m2u/common/login.do" target="_blank">
                        <img src="images/maybank.png" style="width: 100px; height: auto; margin-left: 10px; margin-right: 10px;">
                    </a>
                    <h4 style="justify-content: center; margin: 15px; color: rgb(78, 53, 53); font-family: 'Arial';">
                        Maybank is one of the largest banks in Malaysia. Users can make online payments and transfers through Maybank's digital
                        banking services. Maybank offers a range of financial products and services, including online banking and mobile banking.
                    </h4>
                </div>

                <div class="cards" style="background-color: rgb(255, 255, 255); text-align: center; height: 450px;">
                    <h1 style="color: rgb(71, 45, 45);"> ApplePay </h1>
                    <a href="https://www.apple.com/my/apple-pay/" target="_blank">
                        <img src="images/apple-pay.png" style="width: 100px; height: auto; margin-left: 10px; margin-right: 10px;">
                    </a>
                    <h4 style="justify-content: center; margin: 15px; color: rgb(78, 53, 53); font-family: 'Arial';">
                        Apple Pay is a mobile payment and digital wallet service by Apple Inc. Users can securely store their credit and debit
                        cards on their Apple devices and make contactless payments in stores, in apps, and on the web.
                    </h4>
                </div>

                <div class="cards" style="background-color: rgb(255, 255, 255); text-align: center; height: 450px;">
                    <h1 style="color: rgb(71, 45, 45);"> BigPay </h1>
                    <a href="https://bigpayme.com/" target="_blank">
                        <img src="images/big-pay.jpeg" style="width: 100px; height: auto; margin-left: 10px; margin-right: 10px;">
                    </a>
                    <h4 style="justify-content: center; margin: 15px; color: rgb(78, 53, 53); font-family: 'Arial';">
                        BigPay is a mobile wallet and prepaid card service that offers users the ability to make payments, send money, and
                        manage their finances. It provides a convenient way to pay for expenses and make online transactions.
                    </h4>
                </div>
            </div>
        </div>
    </div>

@endsection

