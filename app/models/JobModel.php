<?php
require __DIR__ . '/../helpers/Upload.php';
class JobModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function post()
    {
        $category_resultset = $this->search("SELECT * FROM `category`;", []);
        $category_resultset_num = $category_resultset->num_rows;
        $category = [];
        for ($i = 0; $i < $category_resultset_num; $i++) {
            $category_data = $category_resultset->fetch_assoc();
            array_push($category, $category_data);
        }
        $language_resultset = $this->search("SELECT * FROM `language`;", []);
        $language_resultset_num = $language_resultset->num_rows;
        $language = [];
        for ($i = 0; $i < $language_resultset_num; $i++) {
            $language_data = $language_resultset->fetch_assoc();
            array_push($language, $language_data);
        }
        $experience_resultset = $this->search("SELECT * FROM `experience`;", []);
        $experience_resultset_num = $experience_resultset->num_rows;
        $experience = [];
        for ($i = 0; $i < $experience_resultset_num; $i++) {
            $experience_data = $experience_resultset->fetch_assoc();
            array_push($experience, $experience_data);
        }
        $number_of_freelancers_resultset = $this->search("SELECT * FROM `number_of_freelancers`;", []);
        $number_of_freelancers_resultset_num = $number_of_freelancers_resultset->num_rows;
        $number_of_freelancers = [];
        for ($i = 0; $i < $number_of_freelancers_resultset_num; $i++) {
            $number_of_freelancers_data = $number_of_freelancers_resultset->fetch_assoc();
            array_push($number_of_freelancers, $number_of_freelancers_data);
        }
        $payment_type_resultset = $this->search("SELECT * FROM `payment_type`;", []);
        $payment_type_resultset_num = $payment_type_resultset->num_rows;
        $payment_type = [];
        for ($i = 0; $i < $payment_type_resultset_num; $i++) {
            $payment_type_data = $payment_type_resultset->fetch_assoc();
            array_push($payment_type, $payment_type_data);
        }
        $data = [
            'category' => $category,
            'experience' => $experience,
            'language' => $language,
            'number_of_freelancers' => $number_of_freelancers,
            'payment_type' => $payment_type
        ];
        return $data;
    }

    public function post_job($data = [])
    {
        extract($data);
        $response = [
            'status' => 'success',
            'message' => null
        ];
        $status_resultset = $this->search("SELECT * FROM `status` WHERE `status` = ?;", ["available"]);
        $status_data = $status_resultset->fetch_assoc();
        $status_id = $status_data['id'];
        $this->iud(
            "INSERT INTO `job` 
        (`title`, `description`, `category_id`, `sub_category_id`, `experience_id`, `number_of_freelancers_id`, `payment_type_id`, `budget`, `datetime_added`, `username`, `status_id`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);",
            [$title, $description, $category, $sub_category, $experience, $number_of_freelancers, $payment_type, $budget, $datetime_added, $username, $status_id]
        );
        $job_id = mysqli_insert_id($this->connection);
        if (isset($skills)) {
            foreach ($skills as $key) {
                $this->iud("INSERT INTO `job_has_skill` (`job_id`, `skill_id`) VALUES (?, ?);", [$job_id, $key]);
            }
        }
        if (isset($language)) {
            foreach ($language as $key) {
                $this->iud("INSERT INTO `job_has_language` (`job_id`, `language_id`) VALUES (?, ?);", [$job_id, $key]);
            }
        }
        if ($attachment_id != null) {
            $upload = new Upload();
            foreach ($attachment_id as $key) {
                $file = $attachments[$key];
                $custom_file_name = "job-file-" . uniqid();
                $uploaded_file = $upload->upload_file($file, __DIR__ . '/../../public/assets/images/job/', $custom_file_name, "any");
                $file_type_any_resultset = $this->search("SELECT * FROM `file_type` WHERE `file_type` = ?;", ["any"]);
                $file_type_data = $file_type_any_resultset->fetch_assoc();
                $file_type_id = $file_type_data['id'];
                $this->iud("INSERT INTO `file` (`file`, `file_type_id`) VALUES (?, ?);", [$uploaded_file, $file_type_id]);
                $file_id = mysqli_insert_id($this->connection);
                $this->iud("INSERT INTO `job_has_file` (`job_id`, `file_id`) VALUES (?, ?);", [$job_id, $file_id]);
            }
        }
        $response['message'] = "success";
        if ($response['message'] != null) {
            echo json_encode($response);
        }
    }

    public function load_sub_categories($data = [])
    {
        extract($data);
        $sub_category_resultset = $this->search("SELECT * FROM `sub_category` WHERE `category_id` = ?;", [$category]);
        $sub_category_resultset_num = $sub_category_resultset->num_rows;
        $sub_category = [];
        for ($i = 0; $i < $sub_category_resultset_num; $i++) {
            $sub_category_data = $sub_category_resultset->fetch_assoc();
            array_push($sub_category, $sub_category_data);
        }
        return $sub_category;
    }

    public function load_skills($data = [])
    {
        extract($data);
        $skill_resultset = $this->search("SELECT * FROM `skill` WHERE `sub_category_id` = ?;", [$sub_category]);
        $skill_resultset_num = $skill_resultset->num_rows;
        $skill = [];
        for ($i = 0; $i < $skill_resultset_num; $i++) {
            $skill_data = $skill_resultset->fetch_assoc();
            array_push($skill, $skill_data);
        }
        return $skill;
    }

    public function load_job($data = [])
    {
        extract($data);
        $job_resultset = $this->search("SELECT * FROM `job` WHERE `id` = ?;", [$id]);
        $job_resultset_num = $job_resultset->num_rows;
        if ($job_resultset_num > 0) {
            $job_data = $job_resultset->fetch_assoc();
            $status_resultset = $this->search("SELECT * FROM `status` WHERE `status` = ?;", ["available"]);
            $status_data = $status_resultset->fetch_assoc();
            $status_id = $status_data['id'];
            if ($job_data['status_id'] == $status_id) {
                $title = $job_data['title'];
                $date = $job_data['datetime_added'];
                $payment_type_id = $job_data['payment_type_id'];
                $payment_type_resultset = $this->search("SELECT * FROM `payment_type` WHERE `id` = ?;", [$payment_type_id]);
                $payment_type_data = $payment_type_resultset->fetch_assoc();
                $payment_type = $payment_type_data['payment_type'];
                $budget = $job_data['budget'];
                $number_of_freelancers_id = $job_data['number_of_freelancers_id'];
                $number_of_freelancers_resultset = $this->search("SELECT * FROM `number_of_freelancers` WHERE `id` = ?;", [$number_of_freelancers_id]);
                $number_of_freelancers_data = $number_of_freelancers_resultset->fetch_assoc();
                $number_of_freelancers = $number_of_freelancers_data['number_of_freelancers'];
                $experience_id = $job_data['experience_id'];
                $experience_resultset = $this->search("SELECT * FROM `experience` WHERE `id` = ?;", [$experience_id]);
                $experience_data = $experience_resultset->fetch_assoc();
                $experience = $experience_data['experience'];
                $description = $job_data['description'];
                $job_has_file_resultset = $this->search("SELECT * FROM `job_has_file` WHERE `job_id` = ?;", [$id]);
                $files = [];
                $job_has_file_num = $job_has_file_resultset->num_rows;
                for ($i = 0; $i < $job_has_file_num; $i++) {
                    $job_has_file_data = $job_has_file_resultset->fetch_assoc();
                    $file_id = $job_has_file_data['file_id'];
                    $file_resultset = $this->search("SELECT * FROM `file` WHERE `id` = ?;", [$file_id]);
                    $file_data = $file_resultset->fetch_assoc();
                    $file = $file_data['file'];
                    array_push($files, $file);
                }
                $job_has_skill_resultset = $this->search("SELECT * FROM `job_has_skill` WHERE `job_id` = ?;", [$id]);
                $skills = [];
                $job_has_skill_num = $job_has_skill_resultset->num_rows;
                for ($i = 0; $i < $job_has_skill_num; $i++) {
                    $job_has_skill_data = $job_has_skill_resultset->fetch_assoc();
                    $skill_id = $job_has_skill_data['skill_id'];
                    $skill_resultset = $this->search("SELECT * FROM `skill` WHERE `id` = ?;", [$skill_id]);
                    $skill_data = $skill_resultset->fetch_assoc();
                    $skill = $skill_data['skill'];
                    array_push($skills, ["id" => $skill_id, "skill" => $skill]);
                }
                $job_has_application = $this->search("SELECT * FROM `job_has_application` WHERE `job_id` = ?;", [$id]);
                $job_has_application_num = $job_has_application->num_rows;
                $applications = $job_has_application_num;
                $job_has_user_resultset = $this->search("SELECT * FROM `job_has_user` WHERE `job_id` = ?;", [$id]);
                $job_has_user_num = $job_has_user_resultset->num_rows;
                $hired = $job_has_user_num;
                $datetime_viewed = $job_data['datetime_viewed'];
                $datetime_dif = new DateTime($datetime_viewed);
                $formatted_datetime_dif = $datetime_dif->format('Y M d h:i a');
                $formatted_datetime_dif = strtoupper($formatted_datetime_dif);
                $formatted_datetime_dif = str_replace(['AM', 'PM'], ['a.m.', 'p.m.'], $formatted_datetime_dif);
                $job_owner_username = $job_data['username'];
                $job_owner_resultset = $this->search("SELECT * FROM `user` WHERE `username` = ?;", [$job_data['username']]);
                $job_owner_data = $job_owner_resultset->fetch_assoc();
                $job_owner_first_name = $job_owner_data['first_name'];
                $job_owner_last_name = $job_owner_data['last_name'];
                $job_owner_profile_picture_resultset = $this->search("SELECT * FROM `profile_picture` WHERE `username` = ?;", [$job_data['username']]);
                $job_owner_profile_picture_data = $job_owner_profile_picture_resultset->fetch_assoc();
                $job_owner_profile_picture_id = $job_owner_profile_picture_data['file_id'];
                $job_owner_file_resultset = $this->search("SELECT * FROM `file` WHERE `id` = ?;", [$job_owner_profile_picture_id]);
                $job_owner_file_data = $job_owner_file_resultset->fetch_assoc();
                $job_owner_profile_picture = $job_owner_file_data['file'];
                $job_owner_review_resultset = $this->search("SELECT * FROM `user_has_review` WHERE `username` = ?;", [$job_data['username']]);
                $job_owner_review_num = $job_owner_review_resultset->num_rows;
                $job_owner_reviews = [];
                if ($job_owner_review_num > 0) {
                    for ($i = 0; $i < $job_owner_review_num; $i++) {
                        $job_owner_review_data = $job_owner_review_resultset->fetch_assoc();
                        $review_resultset = $this->search("SELECT * FROM `review` WHERE `id` = ?;", [$job_owner_review_data['review_id']]);
                        $review_data = $review_resultset->fetch_assoc();
                        $reviewed_by_resultset = $this->search("SELECT * FROM `user` WHERE `username` = ?;", [$review_data['username']]);
                        $reviewed_by_data = $reviewed_by_resultset->fetch_assoc();
                        $reviewed_by_username = $reviewed_by_data['username'];
                        $reviewed_by_name = $reviewed_by_data['first_name'] . " " . $reviewed_by_data['last_name'];
                        $review_title = $review_data['title'];
                        $review_description = $review_data['description'];
                        $review_star = $review_data['star'];
                        $review_datetime_added_unformatted = $review_data['datetime_added'];
                        $review_datetime_added_object = new DateTime($review_datetime_added_unformatted);
                        $review_datetime_added = $review_datetime_added_object->format('on d M, Y, h.i A');
                        array_push(
                            $job_owner_reviews,
                            [
                                "reviewed_by_username" => $reviewed_by_username,
                                "reviewed_by_name" => $reviewed_by_name,
                                "title" => $review_title,
                                "description" => $review_description,
                                "star" => $review_star,
                                "datetime_added" => $review_datetime_added,
                            ]
                        );
                    }
                }
                // if ($job_owner_review_num > 0) {
                //     for ($i = 0; $i < 3; $i++) {
                //         $job_owner_review_data = $job_owner_review_resultset->fetch_assoc();
                //         $review_title = $job_owner_review_data['title'];
                //         $review_description = $job_owner_review_data['description'];
                //         $review_star = $job_owner_review_data['star'];
                //         $review_datetime_added_unformatted = $job_owner_review_data['datetime_added'];
                //         $review_datetime_added_object = new DateTime($review_datetime_added_unformatted);
                //         $review_datetime_added = $review_datetime_added_object->format('on d M, Y, h.i A');
                //         array_push(
                //             $job_owner_reviews,
                //             [
                //                 "title" => $review_title,
                //                 "description" => $review_description,
                //                 "star" => $review_star,
                //                 "datetime_added" => $review_datetime_added
                //             ]
                //         );
                //     }
                // }
                $total_reviews = $job_owner_review_num;
                $job = [
                    "id" => $id,
                    "title" => $title,
                    "date" => $date,
                    "payment_type" => $payment_type,
                    "budget" => $budget,
                    "number_of_freelancers" => $number_of_freelancers,
                    "experience" => $experience,
                    "description" => $description,
                    "files" => $files,
                    "skills" => $skills,
                    "applications" => $applications,
                    "hired" => $hired,
                    "formatted_datetime_dif" => $formatted_datetime_dif,
                    "job_owner_profile_picture" => $job_owner_profile_picture,
                    "job_owner_name" => $job_owner_first_name . " " . $job_owner_last_name,
                    "job_owner_username" => $job_owner_username,
                    "job_owner_reviews" => $job_owner_reviews,
                    "total_reviews" => $total_reviews
                ];
                return $job;
            } else {
                header("Location: /404");
                exit;
            }
        }
    }
}
