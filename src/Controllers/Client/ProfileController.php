<?php

namespace Duan1\Nhom6\Controllers\Client;

use Duan1\Nhom6\Controller;
use Duan1\Nhom6\Model;
use Duan1\Nhom6\Models\User;


class ProfileController extends Controller
{
    
    public function profile() {

        (new User())->login();

        (new User())->register();

        if(isset($_SESSION['email'])) {

            $users = (new User)->checkExistAccount('email', $_SESSION['email']);

        } elseif (isset($_SESSION['phone'])) {
            
            $users = (new User)->checkExistAccount('phone', $_SESSION['phone']);
            
        }

        // update info
        if(isset($_POST['update_info'])) {

            $user = (new User)->findOne($_POST['user_id']);

            $checkEmailExist = (new User)->checkAvailable('email', $_POST['email']);
            $checkPhoneExist = (new User)->checkAvailable('phone', $_POST['phone']);

            if(($_POST['email'] != $user['email']) && ($_POST['email'] != '') && (!empty($checkEmailExist))) {

                (new Model)->alert('error', 'The Email was registered! Please use another email.');

            } elseif (($_POST['phone'] != $user['phone']) && ($_POST['phone'] != '') && (!empty($checkPhoneExist))) {

                (new Model())->alert('error', 'The Phone number was registered! Please use another Phone number.');

            }else {
                if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {                    

                    (new Model)->alert('error', 'Invalid format of email address.');

                } elseif (!preg_match('/^[0-9]{10}+$/', $_POST['phone'])) {
                    
                    (new User)->alert('error', 'Invalid phone number');

                } else {

                    $data = [
                        'name' => $_POST['name'],
                        'password' => $user['password'],
                        'phone' => $_POST['phone'],
                        'email' => $_POST['email'],
                        'nationality' => $_POST['nationality'],
                        'address' => $_POST['address'],
                        'avatar' => $user['avatar'],
                        'id_role' => $user['id_role'],
                        'id_status' => $user['id_status'],
                    ];
        
                    $conditions = [
                        ['id', '=', $_POST['user_id']]
                    ];
        
                    (new User())->update($data, $conditions);

                    $_SESSION['phone'] = $_POST['phone'];
                    $_SESSION['email'] = $_POST['email'];

                    header('Location: /profile');
                    
                    (new Model())->alert('success', 'Update successful');
                }
            }

        }

        // update avatar
        if(isset($_POST['update_ava'])) {

            $user = (new User)->findOne($_POST['user_id']);

            $data = [
                'name' => $user['name'],
                'password' => $user['password'],
                'phone' => $user['phone'],
                'email' => $user['email'],
                'nationality' => $user['nationality'],
                'address' => $user['address'],
                'id_role' => $user['id_role'],
                'id_status' => $user['id_status'],
            ];

            $data['avatar'] = $_POST['avatar_current'];
            $img = $_FILES['avatar_update'] ?? null;
            $flag = false;
            if($img) {
                $pathSaveDB = '/uploads/' . $img['name'];

                $pathUpload = __DIR__ . '/../../../uploads/' . $img['name'];

                if(move_uploaded_file($img['tmp_name'], $pathUpload)) {
                    $data['avatar'] = $pathSaveDB;
                    $flag = true;
                }
            }

            $conditions = [
                ['id', '=', $_POST['user_id']]
            ];

            (new User())->update($data, $conditions);

            if ($flag) {
                $pathFile = __DIR__ .'/../../..'. $_POST['avatar_current'];
                unlink($pathFile);
            }

            header('Location: /profile');

            (new Model())->alert('success', 'Update successful');
        }

        // Update password
        if(isset($_POST['update_pass'])) {

            $user = (new User)->findOne($_POST['user_id']);

            // Given password
            $password = $_POST['new_password'];

            // Validate password strength
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);
            
            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {

                (new Model)->alert('error', 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.');

            } else {
                
                if($_POST['new_password'] != $_POST['confirm_password']) {

                    (new Model)->alert('error', 'Confirmation password is inconsistent');

                } else {

                    $data = [
                        'name' => $user['name'],
                        'password' => $password,
                        'phone' => $user['phone'],
                        'email' => $user['email'],
                        'nationality' => $user['nationality'],
                        'address' => $user['address'],
                        'avatar' => $user['avatar'],
                        'id_role' => $user['id_role'],
                        'id_status' => $user['id_status'],
                    ];

                    $conditions = [
                        ['id', '=', $_POST['user_id']]
                    ];
        
                    (new User())->update($data, $conditions);
        
                    header('Location: /profile');

                    (new Model())->alert('success', 'Update successful');
                }

            }
        } 

        $this->render('profile', ['users' => $users]);
    }

}
