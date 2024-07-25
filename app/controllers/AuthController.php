<?php
class AuthController extends Controller
{

    private $auth_model;

    public function __construct()
    {
        parent::__construct();
        $this->auth_model = $this->model('AuthModel');
    }

    private function get_current_datetime()
    {
        date_default_timezone_set('Asia/Colombo');
        $current_datetime = date('Y-m-d H:i:s');
        return $current_datetime;
    }

    private function validate_password($password)
    {
        if (preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$%^&+=!]).{6,12}$/', $password)) {
            return true;
        } else {
            return false;
        }
    }

    public function signin()
    {
        if ($this->user == null) {
            $this->view('auth/signin', []);
        } else {
            header("Location: /home");
            exit;
        }
    }

    public function signup()
    {
        if ($this->user == null) {
            $this->view('auth/signup', []);
        } else {
            header("Location: /home");
            exit;
        }
    }

    public function signin_process()
    {
        $response = [
            'status' => 'success',
            'message' => null
        ];
        if (isset($_POST["email_or_username"]) && !empty($_POST["email_or_username"])) {
            if (filter_var($_POST['email_or_username'], FILTER_VALIDATE_EMAIL)) {
                $email = $_POST['email_or_username'];
                $username = null;
            } else {
                $username = $_POST['email_or_username'];
                $email = null;
            }
            if (isset($_POST['password']) && !empty($_POST['password'])) {
                $password = $_POST['password'];
                $data = [
                    'email' => $email,
                    'username' => $username,
                    'password' => $password,
                ];
                $this->auth_model->signin_process($data);
            } else {
                $response['message'] = "Password is required";
            }
        } else {
            $response['message'] = "Email or username is required";
        }

        if ($response['message'] != null) {
            echo json_encode($response);
        }
    }

    public function signup_process()
    {
        $response = [
            'status' => 'success',
            'message' => null
        ];
        if (isset($_POST['first_name']) && !empty($_POST['first_name'])) {
            if (isset($_POST['last_name']) && !empty($_POST['last_name'])) {
                if (isset($_POST['username']) && !empty($_POST['username'])) {
                    if (isset($_POST['email']) && !empty($_POST['email'])) {
                        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                            if (isset($_POST['password']) && !empty($_POST['password'])) {
                                if ($this->validate_password($_POST['password'])) {
                                    if (isset($_POST['confirm_password']) && !empty($_POST['confirm_password'])) {
                                        if ($_POST['password'] == $_POST['confirm_password']) {
                                            $data = [
                                                'username' => $_POST['username'],
                                                'first_name' => $_POST['first_name'],
                                                'last_name' => $_POST['last_name'],
                                                'email' => $_POST['email'],
                                                'password' => $_POST['password'],
                                                'datetime_joined' => $this->get_current_datetime()
                                            ];
                                            $this->auth_model->signup_process($data);
                                        } else {
                                            $response['message'] = "Password does not match";
                                        }
                                    } else {
                                        $response['message'] = "Please confirm your password";
                                    }
                                } else {
                                    $response['message'] = "Invalid Password";
                                }
                            } else {
                                $response['message'] = "Password is required";
                            }
                        } else {
                            $response['message'] = "Invalid Email";
                        }
                    } else {
                        $response['message'] = "Email is required";
                    }
                } else {
                    $response['message'] = "Username is required";
                }
            } else {
                $response['message'] = "Last name is required";
            }
        } else {
            $response['message'] = "First name is required";
        }

        if ($response['message'] != null) {
            echo json_encode($response);
        }
    }

    public function signout_process()
    {
        // $response = [
        //     'status' => 'success',
        //     'message' => null
        // ];
        $this->auth_model->signout_process();
        // echo json_encode($response);
    }

    public function forgot_password()
    {
        $response = [
            'status' => 'success',
            'message' => null
        ];
        if (isset($_POST["email_or_username"]) && !empty($_POST["email_or_username"])) {
            if (filter_var($_POST['email_or_username'], FILTER_VALIDATE_EMAIL)) {
                $email = $_POST['email_or_username'];
                $username = null;
            } else {
                $username = $_POST['email_or_username'];
                $email = null;
            }
            $data = [
                'email' => $email,
                'username' => $username,
            ];
            $this->auth_model->forgot_password($data);
        } else {
            $response['message'] = "Email or username is required";
        }
        if ($response['message'] != null) {
            echo json_encode($response);
        }
    }
}
