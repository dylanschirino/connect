<?php
/**
 * File: register.php
 * User: Dylan Schirino
 * Date: 28/04/16
 * Time: 16:25
 */
?>
<form action="index.php" method="post">
    <div>
        <label for"email">Email</label>
        <input type="email" id="email" name="email">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <label for="pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="pseudo">
        <button type="submit">Envoyer</button>
    </div>
    <div>
        <input type="hidden" value="a" name="postRegister">
        <input type="hidden" value="r" name="auth">
    </div>
</form>