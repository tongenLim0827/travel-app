<!DOCTYPE html>

<title> WeShare </title>
<link rel="stylesheet" href="/app.css">
<link rel="stylesheet" href="../bootstrap">

<!-- Navigation bar (sit on top) -->
<div class="header-top">
    <img src="images/WeShare_logo.png">
    <a class="brand-name" href="/">WeShare</a>
    <a class="element" href="/guide">Guide</a>

    @auth
        <a class="element" href="/tracker">Tracker</a>
    @else
        <a class="element" href="/login">Tracker</a>
    @endauth

    <a class="element" href="/transfer">Transfer</a>
    <a class="element" href="/frequently-asked-questions">FAQ</a>

    @auth
        <a class="element" href="/user-profile">Profile</a>
    @else
        <a class="element" href="/login">Profile</a>
    @endauth

</div>

<body>
    @yield('content')
</body>

<!-- Footer -->
<div class="footer-bottom">
    <p>&copy; 2023 WeShare. All rights reserved.</p>
</div>


</html>
