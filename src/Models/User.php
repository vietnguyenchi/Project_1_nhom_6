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
        'dob',
        'role'
    ];

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

            } elseif (!empty((new Model())->checkExistAccount('email' ,$_POST['email_phoneNumber']))) {
                
                (new Model)->alert('error', 'The Email was registered! Please use another email.');

            } elseif (!empty((new Model())->checkExistAccount('phone' ,$_POST['email_phoneNumber']))) {

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
                    'avatar' => null,
                    'nationality' => null,
                    'dob' => null,
                    'role' => 0
                ];
                
                (new User())->insert($data);
    
                $_SESSION['email'] = $data['email'];
                $_SESSION['phone'] = $data['phone'];
                $_SESSION['name'] = $data['name'];
    
    
                header('Location: /');
    
                (new Model)->alert('success', 'Sign Up Success');
            }

        }
    }
}