<?php

trait Validations {
    public function validateStringLength($value, $minLength) {
        if (strlen($value) < $minLength) {
            throw new Exception("The string must be at least {$minLength} characters long.");
        }
    }
}

class User {
    use Validations;

    private $username;
    private $email;
    private $password;

    public function __construct($username, $email, $password) {
        $this->setUsername($username);
        $this->setEmail($email);
        $this->setPassword($password);
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        try {
            $this->validateStringLength($username, 3);
            $this->username = $username;
        } catch (Exception $e) {
            throw new Exception("Username Error: " . $e->getMessage());
        }
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        try {
            $this->validateStringLength($password, 3);
            $this->password = $password;
        } catch (Exception $e) {
            throw new Exception("Password Error: " . $e->getMessage());
        }
    }
}

// Test
try {
    $user = new User("Alan", "alan@gmail.com", "Alan");
   


    echo "User: " . $user->getUsername();
    echo "<br>";
    echo "Email: " . $user->getEmail();
    echo "<br>";
    echo "Password: " . $user->getPassword();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>
