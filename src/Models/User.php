<?php

namespace Duan1\Nhom6\Models;

use Duan1\Nhom6\Model;

class User extends Model {
    protected $table = 'users';
    protected $columns = [
        'name',
        'password',
        'email',
        'phone',
        'address',
        'avatar',
        'nationality',
        'id_role',
        'id_status',
    ];

    public function allUser()
    {
        $sql = "SELECT * 
        FROM users
        JOIN account_status ON account_status.id = users.id_status
        JOIN role ON users.id_role = role.id
        ORDER BY users.id DESC";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

    public function findUser($data, $password)
    {
        if (filter_var($data, FILTER_VALIDATE_EMAIL)) {
            $sql = "SELECT * FROM users WHERE email = '$data' AND password = '$password' LIMIT 1";
        } else {
            $sql = "SELECT * FROM users WHERE phone = '$data' AND password = '$password' LIMIT 1";
        }

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetch();
    }

    public function checkExistAccount($type, $data) {
        $sql = "SELECT * FROM users WHERE $type = '$data'";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetch();
    }
    public function checkAvailable($type, $data) {
        $sql = "SELECT id FROM users WHERE $type = '$data'";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetch();
    }

    public function login()
    {
        if (isset($_POST['login'])) {
            $data = (new User())->findUser($_POST['phone_email'], $_POST['password']);
            if ($data != '') {
                if (filter_var($data, FILTER_VALIDATE_EMAIL)) {
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['name'] = $data['name'];
                    $_SESSION['avatar'] = $data['avatar'];

                } else {
                    $_SESSION['phone'] = $data['phone'];
                    $_SESSION['name'] = $data['name'];
                    $_SESSION['avatar'] = $data['avatar'];

                }

                (new Model())->alert('success', 'Logged in successfully');

            } else {
                (new Model())->alert('error', 'Login failed');
            }
        }
    }

    public function register()
    {
        if (isset($_POST['register'])) {
            
            // Given password
            $password = $_POST['password'];

            // Validate password strength
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);

            if ((!filter_var($_POST['email_phoneNumber'], FILTER_VALIDATE_EMAIL)) && (!preg_match('/^[0-9]{10}+$/', $_POST['email_phoneNumber']))){

                (new Model)->alert('error', 'Please enter email or phone number');

            } elseif (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
                
                (new Model)->alert('error', 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.');
                
            } elseif ($_POST['password'] != $_POST['confirm_password']) {

                (new Model)->alert('error', 'Confirmation password is inconsistent');

            } elseif (!empty((new User())->checkExistAccount('email' ,$_POST['email_phoneNumber']))) {
                
                (new Model)->alert('error', 'The Email was registered! Please use another email.');

            } elseif (!empty((new User())->checkExistAccount('phone' ,$_POST['email_phoneNumber']))) {

                (new Model())->alert('error', 'The Phone number was registered! Please use another Phone number.');

            }
            
            else {
                $email = null;
                $phone = null;

                if(filter_var($_POST['email_phoneNumber'], FILTER_VALIDATE_EMAIL)) {
                    
                    $email = $_POST['email_phoneNumber'];
                    
                } else {
                    
                    $phone = $_POST['email_phoneNumber'];
                    
                }
                $data = [
                    'name' => $_POST['name'],
                    'email' => $email,
                    'phone' => $phone,
                    'address' => null,
                    'password' => $password,
                    'avatar' => '/uploads/person-circle.svg',
                    'nationality' => null,
                    'id_role' => 1,
                    'id_status' => 1
                ];
                
                (new User())->insert($data);
    
                $_SESSION['email'] = $data['email'];
                $_SESSION['phone'] = $data['phone'];
                $_SESSION['avatar'] = $data['avatar'];
                $_SESSION['name'] = $data['name'];
    
    
                header('Location: /');
    
                (new Model)->alert('success', 'Sign Up Success');
            }

        }
    }
}