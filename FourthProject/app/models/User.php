<?php
/**
 * User class
 */
class User 
{
    use Model;

    protected $table = 'users';
    
    protected $allowedColumns = [
        'image',
        'username',
        'email',
        'password',
        'date',
    ];

    public function validate($data) 
    {
        $this->errors = [];

        if (empty($data['email']))
        {
            $this->errors['email'] = "Email is required";
        } 
        else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL))
        {
            $this->errors['email'] = "Email is not valid";
        }
        if (empty($data['username']))
        {
            $this->errors['username'] = "A username is required";
        } 
        else if (!preg_match("/^[a-zA-Z]+$/", $data['username']))
        {
            $this->errors['username'] = "Username can only have latters with no spaces";
        }
        if (empty($data['password']))
        {
            $this->errors['password'] = "Password is required";
        }
        if (empty($data['terms']))
        {
            $this->errors['terms'] = "Please accept the terms and conditions";
        }
        
        if (empty($this->errors))
        {
            return true;
        }

        return false;
    }

    public function create_table() 
    {
        $query = "
            CREATE TABLE IF NOT EXISTS users
            (
                id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
                username VARCHAR(50) NOT NULL,
                email VARCHAR(100) NOT NULL,
                password VARCHAR(255) NOT NULL,
                date DATETIME DEFAULT NULL,

                KEY username (username),
                KEY email (email)
            )
        ";

        $this->query($query);
    }
}
