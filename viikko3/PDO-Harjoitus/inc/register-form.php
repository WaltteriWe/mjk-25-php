<?php
global $DBH;
global $SITE_URL;
require_once __DIR__ . "/../config/config.php";
require_once __DIR__ . '/../db/dbConnect.php';
?>
<section id="register-form">
    <h2>Register</h2>
    <form action="">
        <div class="form-control">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username"/>
        </div>
        <div class="form-control">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password"/>
        </div>
        <button type="submit">Register
        </button>
    </form>
</section>