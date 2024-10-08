<?php
require_once __DIR__ . '/../helpers/Upload.php';
class UserModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function load_profile_data($data = [])
    {
        extract($data);
        $user_resultset = $this->search("SELECT * FROM `user` WHERE `username` = ?;", [$username]);
        $user_data = $user_resultset->fetch_assoc();
        $first_name = $user_data['first_name'];
        $last_name = $user_data['last_name'];
        $title = $user_data['title'];
        $description = $user_data['description'];
        $user_profile_picture_resultset = $this->search("SELECT * FROM `profile_picture` WHERE `username` = ?;", [$username]);
        $user_profile_picture_data = $user_profile_picture_resultset->fetch_assoc();
        $profile_picture_resultset = $this->search("SELECT * FROM `file` WHERE `id` = ?;", [$user_profile_picture_data['file_id']]);
        $profile_picture_data = $profile_picture_resultset->fetch_assoc();
        $profile_picture = $profile_picture_data['file'];
        $user_has_language_resultset = $this->search("SELECT * FROM `user_has_language` WHERE `username` = ?;", [$username]);
        $user_has_language_num = $user_has_language_resultset->num_rows;
        $user_languages = [];
        for ($i = 0; $i < $user_has_language_num; $i++) {
            $user_has_language_data = $user_has_language_resultset->fetch_assoc();
            $language_id = $user_has_language_data['language_id'];
            $language_resultset = $this->search("SELECT * FROM `language` WHERE `id` = ?;", [$language_id]);
            $language_data = $language_resultset->fetch_assoc();
            array_push($user_languages, $language_data);
        }
        $languages_resultset = $this->search("SELECT * FROM `language`;", []);
        $languages_resultset_num = $languages_resultset->num_rows;
        $languages = [];
        for ($i = 0; $i < $languages_resultset_num; $i++) {
            $language_data = $languages_resultset->fetch_assoc();
            array_push($languages, $language_data);
        }
        $user_has_badge_resultset = $this->search("SELECT * FROM `user_has_badge` WHERE `username` = ?;", [$username]);
        $user_has_badge_num = $user_has_badge_resultset->num_rows;
        $badges = [];
        for ($i = 0; $i < $user_has_badge_num; $i++) {
            $user_has_badge_data = $user_has_badge_resultset->fetch_assoc();
            $badge_id = $user_has_badge_data['badge_id'];
            $badge_resultset = $this->search("SELECT * FROM `badge` WHERE `id` = ?;", [$badge_id]);
            $badge_data = $badge_resultset->fetch_assoc();
            $badge = $badge_data['badge'];
            $badge_file_id = $badge_data['file_id'];
            $file_resultset = $this->search("SELECT * FROM `file` WHERE `id` = ?;", [$badge_file_id]);
            $file_data = $file_resultset->fetch_assoc();
            $badge_file = $file_data['file'];
            array_push($badges, [
                "id" => $badge_id,
                "badge" => $badge,
                "badge_file" => $badge_file
            ]);
        }
        $user_has_skill_resultset = $this->search("SELECT * FROM `user_has_skill` WHERE `username` = ?;", [$username]);
        $user_has_skill_num = $user_has_skill_resultset->num_rows;
        $user_skills = [];
        for ($i = 0; $i < $user_has_skill_num; $i++) {
            $user_has_skill_data = $user_has_skill_resultset->fetch_assoc();
            $skill_id = $user_has_skill_data['skill_id'];
            $skill_resultset = $this->search("SELECT * FROM `skill` WHERE `id` = ?;", [$skill_id]);
            $skill_data = $skill_resultset->fetch_assoc();
            array_push($user_skills, $skill_data);
        }
        $skill_resultset = $this->search("SELECT * FROM `skill`;", []);
        $skill_resultset_num = $skill_resultset->num_rows;
        $skills = [];
        for ($i = 0; $i < $skill_resultset_num; $i++) {
            $skill_data = $skill_resultset->fetch_assoc();
            array_push($skills, $skill_data);
        }
        $portfolio_resultset = $this->search("SELECT * FROM `portfolio` WHERE `username` = ?;", [$username]);
        $portfolio_num = $portfolio_resultset->num_rows;
        $portfolios = [];
        for ($i = 0; $i < $portfolio_num; $i++) {
            $portfolio_data = $portfolio_resultset->fetch_assoc();
            $portfolio_id = $portfolio_data['id'];
            $portfolio_title = $portfolio_data['title'];
            $portfolio_link = $portfolio_data['link'];
            $portfolio_file_id = $portfolio_data['file_id'];
            $file_resultset = $this->search("SELECT * FROM `file` WHERE `id` = ?;", [$portfolio_file_id]);
            $file_data = $file_resultset->fetch_assoc();
            $portfolio_file = $file_data['file'];
            array_push($portfolios, [
                "id" => $portfolio_id,
                "title" => $portfolio_title,
                "link" => $portfolio_link,
                "file" => $portfolio_file
            ]);
        }
        $certification_resultset = $this->search("SELECT * FROM `certification` WHERE `username` = ?;", [$username]);
        $certification_num = $certification_resultset->num_rows;
        $certifications = [];
        for ($i = 0; $i < $certification_num; $i++) {
            $certification_data = $certification_resultset->fetch_assoc();
            $certification_id = $certification_data['id'];
            $certification_title = $certification_data['title'];
            $certification_description = $certification_data['description'];
            $certification_date = $certification_data['issued_date'];
            $certification_link = $certification_data['link'];
            $certification_provider = $certification_data['provider'];
            array_push($certifications, [
                "id" => $certification_id,
                "title" => $certification_title,
                "provider" => $certification_provider,
                "description" => $certification_description,
                "date" => $certification_date,
                "link" => $certification_link
            ]);
        }

        $data = [
            "username" => $username,
            "first_name" => $first_name,
            "last_name" => $last_name,
            "title" => $title,
            "description" => $description,
            "profile_picture" => $profile_picture,
            "user_languages" => $user_languages,
            "languages" => $languages,
            "badges" => $badges,
            "user_skills" => $user_skills,
            "skills" => $skills,
            "portfolios" => $portfolios,
            "certifications" => $certifications
        ];
        return $data;
    }

    public function update_profile($data)
    {
        $response = [
            "status" => "success",
            "message" => null
        ];
        extract($data);
        $this->iud(
            "UPDATE `user` SET `first_name` = ?, `last_name` = ?, `title` = ?, `description` = ? WHERE `username` = ?;",
            [$first_name, $last_name, $title, $description, $username]
        );
        if (isset($skills)) {
            $user_skills_resultset = $this->search("SELECT * FROM `user_has_skill` WHERE `username` = ?;", [$username]);
            $user_skills_num = $user_skills_resultset->num_rows;
            for ($i = 0; $i < $user_skills_num; $i++) {
                $user_skill_data = $user_skills_resultset->fetch_assoc();
                $user_skill_id = $user_skill_data['skill_id'];
                if (!in_array($user_skill_id, $skills)) {
                    $this->iud("DELETE FROM `user_has_skill` WHERE `username` = ? AND `skill_id` = ?;", [$username, $user_skill_id]);
                }
            }
            foreach ($skills as $skill) {
                $skill_resultset = $this->search("SELECT * FROM `user_has_skill` WHERE `username` = ? AND `skill_id` = ?;", [$username, $skill]);
                $skill_num = $skill_resultset->num_rows;
                if ($skill_num == 0) {
                    $this->iud("INSERT INTO `user_has_skill` (`username`, `skill_id`) VALUES (?, ?);", [$username, $skill]);
                }
            }
        }
        if (isset($languages)) {
            $user_languages_resultset = $this->search("SELECT * FROM `user_has_language` WHERE `username` = ?;", [$username]);
            $user_languages_num = $user_languages_resultset->num_rows;
            for ($i = 0; $i < $user_languages_num; $i++) {
                $user_language_data = $user_languages_resultset->fetch_assoc();
                $user_language_id = $user_language_data['language_id'];
                if (!in_array($user_language_id, $languages)) {
                    $this->iud("DELETE FROM `user_has_language` WHERE `username` = ? AND `language_id` = ?;", [$username, $user_language_id]);
                }
            }
            foreach ($languages as $language) {
                $language_resultset = $this->search("SELECT * FROM `user_has_language` WHERE `username` = ? AND `language_id` = ?;", [$username, $language]);
                $language_num = $language_resultset->num_rows;
                if ($language_num == 0) {
                    $this->iud("INSERT INTO `user_has_language` (`username`, `language_id`) VALUES (?, ?);", [$username, $language]);
                }
            }
        }

        if (isset($portfolio_updated)) {
            $all_portfolio_resultset = $this->search("SELECT * FROM `portfolio` WHERE `username` = ?;", [$username]);
            $all_portfolio_num = $all_portfolio_resultset->num_rows;
            for ($i = 0; $i < $all_portfolio_num; $i++) {
                $all_portfolio_data = $all_portfolio_resultset->fetch_assoc();
                $all_portfolio_id = $all_portfolio_data['id'];
                $in_array = false;
                foreach ($portfolio_updated as $portfolio) {
                    if ($all_portfolio_id == $portfolio->id) {
                        $in_array = true;
                    }
                }
                if (!$in_array) {
                    $this->iud("DELETE FROM `portfolio` WHERE `username` = ? AND `id` = ?;", [$username, $all_portfolio_id]);
                }
            }
            foreach ($portfolio_updated as $portfolio) {
                if (isset($portfolio->title) && !empty($portfolio->title)) {
                    if (isset($portfolio->link) && !empty($portfolio->link)) {
                        $id = $portfolio->id;
                        $image_id = $portfolio->image_id;
                        $portfolio_title = $portfolio->title;
                        $portfolio_link = $portfolio->link;
                        if (isset($_FILES[$image_id]) && !empty($_FILES[$image_id])) {
                            $portfolio_image = $_FILES[$image_id];
                            $upload = new Upload();
                            $custom_file_name = $id . "-" . uniqid();
                            $uploaded_file = $upload->upload_file($portfolio_image, __DIR__ . '/../../public/assets/images/portfolios/', $custom_file_name, "image");
                            if ($uploaded_file != false) {
                                $file_type_resultset = $this->search("SELECT * FROM `file_type` WHERE `file_type` = ?;", ["image"]);
                                $file_type_data = $file_type_resultset->fetch_assoc();
                                $file_type_id = $file_type_data['id'];
                                $this->iud("INSERT INTO `file` (`file`, `file_type_id`) VALUES (?, ?);", [$uploaded_file, $file_type_id]);
                                $file_id = mysqli_insert_id($this->connection);
                                $this->iud(
                                    "UPDATE `portfolio` SET `title` = ?, `link` = ?, `file_id` = ? WHERE `username` = ? AND `id` = ?;",
                                    [$portfolio_title, $portfolio_link, $file_id, $username, $id]
                                );
                            } else {
                                echo "Invalid file type";
                            }
                        } else {
                            $this->iud(
                                "UPDATE `portfolio` SET `title` = ?, `link` = ? WHERE `username` = ? AND `id` = ?;",
                                [$portfolio_title, $portfolio_link, $username, $id]
                            );
                        }
                    } else {
                        $response['message'] = "Link is required for portfolio";
                    }
                } else {
                    $response['message'] = "Title is required for portfolio";
                }
            }
        }

        if (isset($portfolio_added)) {
            foreach ($portfolio_added as $portfolio) {
                if (isset($portfolio->title) && !empty($portfolio->title)) {
                    if (isset($portfolio->link) && !empty($portfolio->link)) {
                        $id = $portfolio->id;
                        if (isset($_FILES[$id]) && !empty($_FILES[$id])) {
                            $portfolio_title = $portfolio->title;
                            $portfolio_link = $portfolio->link;
                            $portfolio_image = $_FILES[$id];
                            $upload = new Upload();
                            $custom_file_name = $id . "-" . uniqid();
                            $uploaded_file = $upload->upload_file($portfolio_image, __DIR__ . '/../../public/assets/images/portfolios/', $custom_file_name, "image");
                            if ($uploaded_file != false) {
                                $file_type_resultset = $this->search("SELECT * FROM `file_type` WHERE `file_type` = ?;", ["image"]);
                                $file_type_data = $file_type_resultset->fetch_assoc();
                                $file_type_id = $file_type_data['id'];
                                $this->iud("INSERT INTO `file` (`file`, `file_type_id`) VALUES (?, ?);", [$uploaded_file, $file_type_id]);
                                $file_id = mysqli_insert_id($this->connection);
                                $this->iud(
                                    "INSERT INTO `portfolio` (`username`, `title`, `link`, `file_id`) VALUES (?, ?, ?, ?);",
                                    [$username, $portfolio_title, $portfolio_link, $file_id]
                                );
                            } else {
                                echo "Invalid file type";
                            }
                        } else {
                            $response['message'] = "Image is required for portfolio";
                        }
                    } else {
                        $response['message'] = "Link is required for portfolio";
                    }
                } else {
                    $response['message'] = "Title is required for portfolio";
                }
            }
        }

        if (isset($certification_updated)) {
            //
            $all_certification_resultset = $this->search("SELECT * FROM `certification` WHERE `username` = ?;", [$username]);
            $all_certification_num = $all_certification_resultset->num_rows;
            for ($i = 0; $i < $all_certification_num; $i++) {
                $all_certification_data = $all_certification_resultset->fetch_assoc();
                $all_certification_id = $all_certification_data['id'];
                $in_array = false;
                foreach ($certification_updated as $certification) {
                    if ($all_certification_id == $certification->id) {
                        $in_array = true;
                    }
                }
                if (!$in_array) {
                    $this->iud("DELETE FROM `certification` WHERE `username` = ? AND `id` = ?;", [$username, $all_certification_id]);
                }
            }
            //
            foreach ($certification_updated as $certification) {
                if (isset($certification->title) && !empty($certification->title)) {
                    if (isset($certification->date) && !empty($certification->date)) {
                        if (isset($certification->provider) && !empty($certification->provider)) {
                            if (isset($certification->description) && !empty($certification->description)) {
                                if (isset($certification->link) && !empty($certification->link)) {
                                    $certification_title = $certification->title;
                                    $certification_date = $certification->date;
                                    $certification_provider = $certification->provider;
                                    $certification_description = $certification->description;
                                    $certification_link = $certification->link;
                                    $this->iud(
                                        "UPDATE `certification` SET `title` = ?, `description` = ?, `issued_date` = ?, `link` = ?, `provider` = ? WHERE `username` = ? AND `id` = ?;",
                                        [$certification_title, $certification_description, $certification_date, $certification_link, $certification_provider, $username, $certification->id]
                                    );
                                } else {
                                    $response['message'] = "Link is required for certification";
                                }
                            } else {
                                $response['message'] = "Please add your certification description";
                            }
                        } else {
                            $response['message'] = "Please add your certification provider";
                        }
                    } else {
                        $response['message'] = "Date is required for certification";
                    }
                } else {
                    $response['message'] = "Title is required for certification";
                }
            }
        }

        if (isset($certification_added)) {
            foreach ($certification_added as $certification) {
                if (isset($certification->title) && !empty($certification->title)) {
                    if (isset($certification->date) && !empty($certification->date)) {
                        if (isset($certification->provider) && !empty($certification->provider)) {
                            if (isset($certification->description) && !empty($certification->description)) {
                                if (isset($certification->link) && !empty($certification->link)) {
                                    $certification_title = $certification->title;
                                    $certification_date = $certification->date;
                                    $date_time = new DateTime($certification_date);
                                    $formatted_date = $date_time->format('Y-m-d');
                                    $certification_provider = $certification->provider;
                                    $certification_description = $certification->description;
                                    $certification_link = $certification->link;
                                    $this->iud(
                                        "INSERT INTO `certification` (`username`, `title`, `description`, `issued_date`, `link`, `provider`) 
                                        VALUES (?, ?, ?, ?, ?, ?);",
                                        [$username, $certification_title, $certification_description, $formatted_date, $certification_link, $certification_provider]
                                    );
                                } else {
                                    $response['message'] = "Link is required for certification";
                                }
                            } else {
                                $response['message'] = "Please add your certification description";
                            }
                        } else {
                            $response['message'] = "Please add your certification provider";
                        }
                    } else {
                        $response['message'] = "Date is required for certification";
                    }
                } else {
                    $response['message'] = "Title is required for certification";
                }
            }
        }

        if ($response['message'] == null) {
            $response['message'] = "success";
        }
        echo json_encode($response);
    }
}
