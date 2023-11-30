<!DOCTYPE html>

<title> WeShare </title>
<link rel="stylesheet" href="/app.css">

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

    {{-- @auth
        <a class="element" href="/user-profile">Profile</a>
    @else
        <a class="element" href="/login">Profile</a>
    @endauth --}}
    @auth
        <a class="element" href="{{ route('user-profile', ['user'=> auth()->user()]) }}">Profile</a>

    @else
        <a class="element" href="/login">Profile</a>
    @endauth

</div>

<body>
    <div class="account-details">
        <a class="btn btn-primary" href="/tracker/{{$trip}}/details">Back</a>
        <h1 style="text-align: center; text-xl font-semibold text-gray-900 dark:text-white"> {{ $expense->name }} </h1>
        <form method="POST" action='{{  route('expense.edit', ['expense' => $expense, 'trip' => $trip]) }}'>
            @csrf
            @method('PUT')
            <input type="hidden" name="trip_id" value="{{ $trip }}">
            <div class="form-group flex">
                <label for="name"> Expenses Name:</label>
                <input type="text" id="name" name="name" value="{{ $expense->name }}">
            </div>
            <br>
            <div class="form-group flex">
                <label for="category">Category:</label>
                    <select id="category" name="category" style="width: 80%; height: 30px; font-size: 16px">
                        <option value="{{ $expense->category }}"> {{ $expense->category }} </option>
                        <option value="Accommodation">Accommodation</option>
                        <option value="Transport">Transport</option>
                        <option value="Food">Food</option>
                        <option value="Beverage">Beverage</option>
                        <option value="Entertainment">Entertainment</option>
                        <option value="Others">Others</option>
                        <option value="Beverage">Beverage</option>
                        <option value="Data Plan">Data Plan</option>
                    </select>
            </div>
            <br>
            <div class="form-group flex">
                <label for="description">Description:</label>
                <input type="text" id="description" name="description" value="{{ $expense -> description }}">
            </div>
            <br>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="text" id="amount" name="amount" value="{{ $expense->amount }}">
            </div>
            <br>
            <button type="submit" class="add-button">Update</button>
        </form>
    </div>
</body>

<!-- Footer -->
<div class="footer-bottom">
    <p>&copy; 2023 WeShare. All rights reserved.</p>
</div>


</html>

