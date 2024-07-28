<?php
require __DIR__ . "/../helpers/Mail.php";

class AuthModel extends Model
{

    public function __construct()
    {
    }

    public function manage_cookie($cookie_name, $cookie_value, $expire_time)
    {
        setcookie($cookie_name, $cookie_value, [
            'expires' => $expire_time,
            'path' => '/',
            'samesite' => 'Lax',
        ]);
    }

    public function signin_process($data = [])
    {
        $response = [
            'status' => 'success',
            'message' => null
        ];
        extract($data);
        $users_resultset;
        if ($email == null) {
            $users_resultset = $this->search("SELECT * FROM `user` WHERE `username` = ? AND `password` = ?;", [$username, $password]);
        } else if ($email != null) {
            $users_resultset = $this->search("SELECT * FROM `user` WHERE `email` = ? AND `password` = ?;", [$email, $password]);
        }
        $users_resultset_num = $users_resultset->num_rows;
        if ($users_resultset_num == 1) {
            $users_data = $users_resultset->fetch_assoc();
            $_SESSION['user'] = $users_data;
            $coockie_preference = $_COOKIE['cookies'];
            if ($coockie_preference == "true") {
                $this->manage_cookie("user", $users_data['username'], time() + (60 * 60 * 24 * 30));
                $this->manage_cookie("password", $users_data['password'], time() + (60 * 60 * 24 * 30));
            }
            $response['message'] = "success";
        } else if ($users_resultset_num == 0) {
            $response['message'] = "Invalid username or password";
        } else {
            $response['message'] = "Something went wrong";
        }

        if ($response['message'] != null) {
            echo json_encode($response);
        }
    }

    public function signup_process($data = [])
    {
        $response = [
            'status' => 'success',
            'message' => null
        ];
        extract($data);
        $users_resultset_username = $this->search("SELECT * FROM `user` WHERE `username` = ?;", [$username]);
        $users_resultset_num_username = $users_resultset_username->num_rows;
        if ($users_resultset_num_username != 0) {
            $response['message'] = "Username already in use";
        } else if ($users_resultset_num_username == 0) {
            $users_resultset_email = $this->search("SELECT * FROM `user` WHERE `email` = ?;", [$email]);
            $users_resultset_num_email = $users_resultset_email->num_rows;
            if ($users_resultset_num_email != 0) {
                $response['message'] = "Email already in use";
            } else if ($users_resultset_num_email == 0) {
                $this->iud("INSERT INTO `user` (`username`, `first_name`, `last_name`, `email`, `password`, `datetime_joined`) 
                VALUES (?, ?, ?, ?, ?, ?);", [$username, $first_name, $last_name, $email, $password, $datetime_joined]);
                $this->iud("INSERT INTO `profile_picture` (`username`, `profile_picture`) VALUES (?, ?);", [$username, "user.svg"]);

                $response['message'] = "success";
            }
        }

        if ($response['message'] != null) {
            echo json_encode($response);
        }
    }

    public function signout_process()
    {
        session_destroy();
        $this->manage_cookie("user", null, time() - (60 * 60 * 24 * 30));
        $this->manage_cookie("password", null, time() - (60 * 60 * 24 * 30));
        header("Location: /home");
    }

    private function generate_reset_token()
    {
        $reset_code = uniqid(true) . uniqid(true) . uniqid(true);
        $token = substr($reset_code, 0, 20);
        return $token;
    }

    public function forgot_password($data = [])
    {
        $response = [
            'status' => 'success',
            'message' => null
        ];
        extract($data);
        if ($email == null) {
            $users_resultset = $this->search("SELECT * FROM `user` WHERE `username` = ?;", [$username]);
        } else if ($email != null) {
            $users_resultset = $this->search("SELECT * FROM `user` WHERE `email` = ?;", [$email]);
        }
        $users_resultset_num = $users_resultset->num_rows;
        if ($users_resultset_num == 1) {
            $users_data = $users_resultset->fetch_assoc();
            $user_email = $users_data['email'];
            $mail = new Mail();
            $reset_token = $this->generate_reset_token();
            $this->iud("INSERT INTO `reset_token` (`username`, `reset_token`) VALUES (?, ?);", [$username, $reset_token]);
            $mail->send_mail($user_email, $users_data['first_name'], "Requested a password reset", [
                "name" => $users_data['first_name'],
                "username" => $username,
                "reset_token" => $reset_token,
            ], "reset_token");
            $response['message'] = "success";
        } else {
            $response['message'] = "Invalid email or username";
        }
        if ($response['message'] != null) {
            echo json_encode($response);
        }
    }

    public function reset_password($data = [])
    {
        $response = [
            'status' => 'success',
            'message' => null
        ];
        extract($data);
        $reset_token_resultset = $this->search("SELECT * FROM `reset_token` WHERE `username` = ? AND `reset_token` = ?;", [$username, $reset_token]);
        $reset_token_resultset_num = $reset_token_resultset->num_rows;
        if ($reset_token_resultset_num == 1) {
            $this->iud("UPDATE `users` SET `password` = ? WHERE `username` = ?;", [$password, $username]);
            $this->iud("DELETE FROM `reset_token` WHERE `username` = ?;", [$username]);
            $response['message'] = "success";
        } else {
            $response['message'] = "Invalid reset token";
        }
        if ($response['message'] != null) {
            echo json_encode($response);
        }
    }
}
