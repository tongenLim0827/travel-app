@extends('layout')

@section('content')
    <!-- Page content start -->

    <!-- Intro Section -->
    <div class="main-content">
        <div class="intro-section">
            <h1> Manage your travel expenses easily with WeShare. </h1>
        </div>

        <div class="account-details">
            @auth
                <h1 style="justify-content: center; margin-left: 50px;"> Welcome Back, {{  auth()->user()->name }}! </h1>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout-button">Log Out</button>
                </form>
            @else
                <h1 style="text-align: center; text-xl font-semibold text-gray-900 dark:text-white"> Already have an account? </h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group flex">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                        @error('email')
                            <p style="color: red; font-size: 12px; margin: auto;">{{  $message }}</p>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group flex">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <br>
                    <button type="submit" class="login-button">LOG IN</button>
                </form>
                <a href="/forgot-password" style="margin-left: 150px; margin-top: 40px;"> Forgot Password? </a>
                <a href="/register" style="margin-left: 150px; margin-top: 40px;"> Create Account </a>
            @endauth
        </div>
    <!-- Intro Section End -->
    </div>

    <!-- Benefit Card Content -->
    <div class="main-content">
        <div class="main-title">
            <h2 class="slogan-title">
                Discover, Divide, Delight: WeShare - The Painless Way to Share Travel Expenses.
            </h2>

            <div class="cards-container">
                <div class="cards">
                    <h1 style="color: rgb(71, 45, 45);"> Effortless Expense Management </h1>
                    <h3 style="justify-content: center; margin: 15px; color: rgb(247, 231, 231);">
                        Easily manage and track travel expenses for various activities,
                        ensuring accurate and organized financial records </h3>
                </div>

                <div class="cards">
                    <h1 style="color: rgb(71, 45, 45);"> Seamless Group Collaboration </h1>
                    <h3 style="justify-content: center; margin: 15px; color: rgb(247, 231, 231);">
                        Collaborate with travel companions in real-time, making it simple to
                        coordinate and split expenses. </h3>
                </div>

                <div class="cards">
                    <h1 style="color: rgb(71, 45, 45);"> User-Friendly Interface </h1>
                    <h3 style="justify-content: center; margin: 15px; color: rgb(247, 231, 231);">
                        Intuitive and easy-to-navigate design makes the app accessible for users
                        with varying levels of technological expertise. </h3>
                </div>
            </div>

            <div class="cards-container">
                <div class="cards">
                    <h1 style="color: rgb(71, 45, 45);"> Integrated Payment Options </h1>
                    <h3 style="justify-content: center; margin: 15px; color: rgb(247, 231, 231);">
                        Seamlessly integrate with various payment methods, allowing users to
                        settle debts directly within the app.</h3>
                </div>

                <div class="cards">
                    <h1 style="color: rgb(71, 45, 45);"> Budget Management </h1>
                    <h3 style="justify-content: center; margin: 15px; color: rgb(247, 231, 231);">
                        Set and manage budgets for specific categories or entire trips,
                        helping users stay within their financial limits</h3>
                </div>

                <div class="cards">
                    <h1 style="color: rgb(71, 45, 45);"> Expense History Tracking </h1>
                    <h3 style="justify-content: center; margin: 15px; color: rgb(247, 231, 231);">
                        Maintain a comprehensive history of expenses, facilitating easy reference
                        and historical tracking.</h3>
                </div>
            </div>
        </div>
    <!-- Benefit Card Content End -->
    </div>


    <!-- User review section -->
    <div class="wrapper">
        <h1> Reviews by our user </h1>

        <!-- Review 1 -->
        <div class="centre-card">
            <div class="faq-ques">
                <p> "Effortless Expense Management" </p>
            </div>

            <div class="faq-ans">
                <p>
                    This app has simplified the way I manage expenses with friends and colleagues.
                    The intuitive interface makes it easy to add and split expenses. No more hassle when settling bills,
                    a must-have for anyone who enjoys group activities!
                </p>
            </div>
        </div>

        <!-- Review 2 -->
        <div class="centre-card">
            <div class="faq-ques">
                <p> "Seamless Group Spending" </p>
            </div>

            <div class="faq-ans">
                <p>
                    I've tried various expense-splitting apps, but this one stands out for its seamless group spending features.
                    The ability to split bills accurately and keep everyone in the loop is fantastic. It has made our group outings
                    much more enjoyable without the stress of managing who owes what.
                </p>
            </div>
        </div>

        <!-- Review 3 -->
        <div class="centre-card">
            <div class="faq-ques">
                <p> "Transparent and Reliable" </p>
            </div>

            <div class="faq-ans">
                <p>
                    What I love about this app is its commitment to transparency. It provides clear insights into shared expenses,
                    ensuring everyone is on the same page. The reliability of the calculations and the ease of use make it my go-to
                    choice for splitting bills with friends and family.
                </p>
            </div>
        </div>
    <!-- User review section end -->
    </div>

    <!-- End Page Content -->
@endsection
