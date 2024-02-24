<?php

class User
{
    private String $name;
    private String $email;
    private String $password;

    function getEmail(): String
    {
        return $this->email;
    }
    function setEmail($email) : void
    {
        $this->email = $email;
    }
    function getName(): String
    {
        return $this->name;
    }

    function setName($name) : void
    {
        $this->name = $name;
    }
    function getPassword() : String
    {
        return $this->password;
    }

    function setPassword($password) : void
    {
        $this->password = $password;
    }


    function __construct(string $name, string $email, string $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
}

class UserRegistrationSystem
{
    private array $users = [];
    function getUsers() : array
    {
        return $this->users;
    }

    function register(string $name, string $email,string $password) : void
    {
        if (!self::isUserExist($email))
        {
            $this->users[] = new User($name,$email,$password);
            echo "Successful registration<br>";
            return;
        }
        echo "User with email $email already exist<br>";
    }
    function isUserExist(string $email) : bool
    {
        foreach ($this->users as $user)
        {
            if ($email === $user->getEmail())
            {
                return true;
            }
        }
        return false;
    }
}
