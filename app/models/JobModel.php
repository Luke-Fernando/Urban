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
        $this->iud("INSERT INTO `job` 
        (`title`, `description`, `category_id`, `sub_category_id`, `experience_id`, `number_of_freelancers_id`, `payment_type_id`, `budget`, `datetime_added`, `username`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);", [$title, $description, $category, $sub_category, $experience, $number_of_freelancers, $payment_type, $budget, $datetime_added, $username]);
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
}
