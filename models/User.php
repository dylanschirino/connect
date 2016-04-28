<?php
/**
 * File: User.php
 * User: Dylan Schirino
 * Date: 28/04/16
 * Time: 16:38
 */
namespace Models;

class User extends Model
{
    protected $table = 'users';

    public function check($credentials)
    {
        $sql = 'SELECT * FROM users WHERE email=:email AND password=:password';
        $pdoSt = $this->cn->prepare($sql);
        $pdoSt->execute([
            ':email' => $credentials['email'],
            ':password' => $credentials['password']
        ]);

        return $pdoSt->fetchAll();
    }
}