<!DOCTYPE html>

<title> WeShare </title>
<link rel="stylesheet" href="/app.css">
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">

<!-- Navigation bar (sit on top) -->
<div class="header-top">
    <img src="images/WeShare_logo.png">
    <a class="brand-name" href="/">WeShare</a>

    <a class="element" href="/guide">Guide</a>
    <a class="element" href="/tracker">Tracker</a>
    <a class="element" href="/transfer">Transfer</a>
    <a class="element" href="/frequently-asked-questions">FAQ</a>
    <a class="element" href="/user-profile">Profile</a>
</div>

<body>
    @yield('content')
</body>

<!-- Footer -->
<div class="footer-bottom">
    <p>&copy; 2023 WeShare. All rights reserved.</p>
</div>


</html>
