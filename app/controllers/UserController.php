<?php
class UserController extends Controller
{
    private $user_model;

    public function __construct()
    {
        parent::__construct();
        $this->user_model = $this->model('UserModel');
    }

    public function profile()
    {
        if ($this->user != null) {
            $user = $this->user;
            $data = [
                'username' => $user['username'],
            ];
            $user_data = $this->user_model->load_profile_data($data);
            $this->view('user/profile/profile', $user_data);
        } else {
            header("Location: /signin");
            exit;
        }
    }

    public function reviews()
    {
        if ($this->user != null) {
            $this->view('user/reviews/reviews', []);
        } else {
            header("Location: /signin");
            exit;
        }
    }

    public function update_profile()
    {
        $response = [
            "status" => "success",
            "message" => null
        ];
        if ($this->user != null) {
            if (isset($_POST["first_name"]) && !empty($_POST["first_name"])) {
                if (isset($_POST["last_name"]) && !empty($_POST["last_name"])) {
                    if (isset($_POST["title"]) && !empty($_POST["title"])) {
                        if (isset($_POST["description"]) && !empty($_POST["description"])) {
                            if (isset($_POST["languages"])) {
                                if (isset($_POST["skills"])) {
                                    $user = $this->user;
                                    $first_name = $_POST["first_name"];
                                    $last_name = $_POST["last_name"];
                                    $title = $_POST["title"];
                                    $description = $_POST["description"];
                                    $languages = $_POST["languages"];
                                    $skills = $_POST["skills"];
                                    $profile_picture = null;
                                    $certification_updated = null;
                                    $certification_added = null;
                                    $portfolio_updated = null;
                                    $portfolio_updated_images = [];
                                    $portfolio_added = null;
                                    $portfolio_added_images = [];
                                    if (isset($_FILES["profile_picture"])) {
                                        $profile_picture = $_FILES["profile_picture"];
                                    }
                                    if (isset($_POST["certification_updated"])) {
                                        $certification_updated = json_decode($_POST["certification_updated"]);
                                    }
                                    if (isset($_POST["certification_added"])) {
                                        $certification_added = json_decode($_POST["certification_added"]);
                                    }
                                    if (isset($_POST["portfolio_updated"])) {
                                        $portfolio_updated = json_decode($_POST["portfolio_updated"]);
                                        foreach ($portfolio_updated as $portfolio) {
                                            $current_image = null;
                                            if (isset($_FILES[$portfolio->id])) {
                                                $current_image = $_FILES[$portfolio->id];
                                            }
                                            $image_data = [
                                                "id" => $portfolio->id,
                                                "image" => $current_image
                                            ];
                                            array_push($portfolio_updated_images, $image_data);
                                        }
                                    }
                                    if (isset($_POST["portfolio_added"])) {
                                        $portfolio_added = json_decode($_POST["portfolio_added"]);
                                        foreach ($portfolio_added as $portfolio) {
                                            $current_image = null;
                                            if (isset($_FILES[$portfolio->id])) {
                                                $current_image = $_FILES[$portfolio->id];
                                            }
                                            $image_data = [
                                                "id" => $portfolio->id,
                                                "image" => $current_image
                                            ];
                                            array_push($portfolio_added_images, $image_data);
                                        }
                                    }

                                    $data = [
                                        "username" => $user['username'],
                                        "first_name" => $first_name,
                                        "last_name" => $last_name,
                                        "title" => $title,
                                        "description" => $description,
                                        "profile_picture" => $profile_picture,
                                        "languages" => $languages,
                                        "skills" => $skills,
                                        "certification_updated" => $certification_updated,
                                        "certification_added" => $certification_added,
                                        "portfolio_updated" => $portfolio_updated,
                                        "portfolio_updated_images" => $portfolio_updated_images,
                                        "portfolio_added" => $portfolio_added,
                                        "portfolio_added_images" => $portfolio_added_images
                                    ];
                                    $this->user_model->update_profile($data);
                                } else {
                                    $response["message"] = "Please select at least one skill";
                                }
                            } else {
                                $response["message"] = "Please select at least one preferred language";
                            }
                        } else {
                            $response["message"] = "Please enter your description";
                        }
                    } else {
                        $response["message"] = "Please enter your title";
                    }
                } else {
                    $response["message"] = "Please enter your last name";
                }
            } else {
                $response["message"] = "Please enter your first name";
            }
            if ($response["message"] != null) {
                echo json_encode($response);
                exit;
            }
        } else {
            header("Location: /signin");
            exit;
        }
    }
}
