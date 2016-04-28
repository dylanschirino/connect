<?php
/**
 * File: login.php
 * User: Dylan Schirino
 * Date: 28/04/16
 * Time: 16:22
 */
?>

<form action="index.php" method="post">
    <div>
        <label for"email">Email</label>
        <input type="email" id="email" name="email">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <button type="submit">Envoyer</button>
    </div>
    <div>
        <input type="hidden" value="a" name="postLogin">
        <input type="hidden" value="r" name="auth">
    </div>
</form>
