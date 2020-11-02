<a href="/">Back</a>
<form method="post" action="/register<?php echo $referral ? 'r=' . $referral : null; ?>">
    <div style="display: block;">
        <label for="name">Name</label>
        <input type="text" placeholder="Enter Name" id="name" name="name" required/>
    </div>

    <div style="display: block;">
        <label for="email">E-Mail</label>
        <input type="email" placeholder="Enter Email" id="email" name="email" required/>
    </div>

    <div style="display: block;">
        <label for="password">Password</label>
        <input type="password" placeholder="Enter Password" id="password" name="password" required/>
    </div>

    <div style="display: block;">
        <label for="password_confirmation">Password confirmation</label>
        <input type="password" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation" required/>
    </div>

    <button type="submit">Register</button>
</form>