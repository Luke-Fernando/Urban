<?php
require_once __DIR__ . '/../helpers/Upload.php';
class HomeModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function load_jobs($data = [])
    {
        $jobs = null;
        if ($data["stat"] == "all") {
            $jobs = $this->load_all_jobs($data);
        } else if ($data["stat"] == "saved") {
            $jobs = $this->load_saved_jobs($data);
        }
        return $jobs;
    }

    public function load_all_jobs($data = [])
    {
        extract($data);
        $status_resultset = $this->search("SELECT * FROM `status` WHERE `status` = ?;", ["available"]);
        $status_data = $status_resultset->fetch_assoc();
        $status_id = $status_data['id'];
        $job_resultset = $this->search("SELECT * FROM `job` WHERE `status_id` = ? ORDER BY `datetime_added` DESC LIMIT ? OFFSET ?;", [$status_id, $limit, $offset]);
        $job_resultset_num = $job_resultset->num_rows;
        $jobs = [];
        for ($i = 0; $i < $job_resultset_num; $i++) {
            $job_data = $job_resultset->fetch_assoc();
            // array_push($jobs, $job_data);
            $payment_type_resultset = $this->search("SELECT * FROM `payment_type` WHERE `id` = ?;", [$job_data['payment_type_id']]);
            $payment_type_data = $payment_type_resultset->fetch_assoc();
            // 
            $payment_type = $payment_type_data['payment_type'];
            // 
            $application_resultset = $this->search("SELECT * FROM `job_has_application` WHERE `job_id` = ?;", [$job_data['id']]);
            $application_num = $application_resultset->num_rows;
            // 
            $total_applications = $application_num;
            // 
            $user_has_skill_resultset = $this->search("SELECT * FROM `job_has_skill` WHERE `job_id` = ?;", [$job_data['id']]);
            $user_has_skill_num = $user_has_skill_resultset->num_rows;
            // 
            $skills = [];
            // 
            for ($j = 0; $j < $user_has_skill_num; $j++) {
                $user_has_skill_data = $user_has_skill_resultset->fetch_assoc();
                $skill_resultset = $this->search("SELECT * FROM `skill` WHERE `id` = ?;", [$user_has_skill_data['skill_id']]);
                $skill_data = $skill_resultset->fetch_assoc();
                array_push($skills, [
                    'skill_id' => $user_has_skill_data['skill_id'],
                    'skill' => $skill_data['skill'],
                ]);
            }
            $user_resultset = $this->search("SELECT * FROM `user` WHERE `username` = ?;", [$job_data['username']]);
            $user_data = $user_resultset->fetch_assoc();
            // 
            $first_name = $user_data['first_name'];
            $last_name = $user_data['last_name'];
            //
            $user_review_resultset = $this->search("SELECT * FROM `review` WHERE `username` = ?;", [$job_data['username']]);
            $user_review_num = $user_review_resultset->num_rows;
            // 
            $user_review = 0;
            // 
            if ($user_review_num > 0) {
                $user_review_total = 0;
                for ($j = 0; $j < $user_review_num; $j++) {
                    $user_review_data = $user_review_resultset->fetch_assoc();
                    $user_review_total += $user_review_data['star'];
                }
                $user_review = round($user_review_total / $user_review_num);
            }
            $saved_job_resultset = $this->search("SELECT * FROM `saved_job` WHERE `job_id` = ? AND `username` = ?;", [$job_data['id'], $username]);
            $saved_job_num = $saved_job_resultset->num_rows;
            $saved = false;
            if ($saved_job_num == 1) {
                $saved = true;
            }
            $job_data = [
                'id' => $job_data['id'],
                'date' => $job_data['datetime_added'],
                'title' => $job_data['title'],
                'payment_type' => $payment_type,
                'budget' => $job_data['budget'],
                'description' => $job_data['description'],
                'total_applications' => $total_applications,
                'skills' => $skills,
                'author' => $first_name . ' ' . $last_name,
                'username' => $username,
                'review' => $user_review,
                'saved' => $saved
            ];

            array_push($jobs, $job_data);
        }

        return $jobs;
    }

    public function load_saved_jobs($data = [])
    {
        extract($data);
        $status_resultset = $this->search("SELECT * FROM `status` WHERE `status` = ?;", ["available"]);
        $status_data = $status_resultset->fetch_assoc();
        $status_id = $status_data['id'];
        $job_resultset = $this->search("SELECT * FROM `job` WHERE `status_id` = ? ORDER BY `datetime_added` DESC;", [$status_id]);
        $job_resultset_num = $job_resultset->num_rows;
        $jobs = [];
        $saved_jobs = [];
        $saved_job_resultset = $this->search("SELECT * FROM `saved_job` WHERE `username` = ? LIMIT ? OFFSET ?;", [$username, $limit, $offset]);
        $saved_job_num = $saved_job_resultset->num_rows;
        if ($saved_job_num > 0) {
            for ($i = 0; $i < $saved_job_num; $i++) {
                $saved_job_data = $saved_job_resultset->fetch_assoc();
                array_push($saved_jobs, $saved_job_data['job_id']);
            }
        }
        for ($i = 0; $i < $job_resultset_num; $i++) {
            $job_data = $job_resultset->fetch_assoc();
            if (in_array($job_data['id'], $saved_jobs)) {
                //
                $payment_type_resultset = $this->search("SELECT * FROM `payment_type` WHERE `id` = ?;", [$job_data['payment_type_id']]);
                $payment_type_data = $payment_type_resultset->fetch_assoc();
                // 
                $payment_type = $payment_type_data['payment_type'];
                // 
                $application_resultset = $this->search("SELECT * FROM `job_has_application` WHERE `job_id` = ?;", [$job_data['id']]);
                $application_num = $application_resultset->num_rows;
                // 
                $total_applications = $application_num;
                // 
                $user_has_skill_resultset = $this->search("SELECT * FROM `job_has_skill` WHERE `job_id` = ?;", [$job_data['id']]);
                $user_has_skill_num = $user_has_skill_resultset->num_rows;
                // 
                $skills = [];
                // 
                for ($j = 0; $j < $user_has_skill_num; $j++) {
                    $user_has_skill_data = $user_has_skill_resultset->fetch_assoc();
                    $skill_resultset = $this->search("SELECT * FROM `skill` WHERE `id` = ?;", [$user_has_skill_data['skill_id']]);
                    $skill_data = $skill_resultset->fetch_assoc();
                    array_push($skills, [
                        'skill_id' => $user_has_skill_data['skill_id'],
                        'skill' => $skill_data['skill'],
                    ]);
                }
                $user_resultset = $this->search("SELECT * FROM `user` WHERE `username` = ?;", [$job_data['username']]);
                $user_data = $user_resultset->fetch_assoc();
                // 
                $first_name = $user_data['first_name'];
                $last_name = $user_data['last_name'];
                //
                $user_review_resultset = $this->search("SELECT * FROM `review` WHERE `username` = ?;", [$job_data['username']]);
                $user_review_num = $user_review_resultset->num_rows;
                // 
                $user_review = 0;
                // 
                if ($user_review_num > 0) {
                    $user_review_total = 0;
                    for ($j = 0; $j < $user_review_num; $j++) {
                        $user_review_data = $user_review_resultset->fetch_assoc();
                        $user_review_total += $user_review_data['star'];
                    }
                    $user_review = round($user_review_total / $user_review_num);
                }
                $saved_job_resultset = $this->search("SELECT * FROM `saved_job` WHERE `job_id` = ? AND `username` = ?;", [$job_data['id'], $username]);
                $saved_job_num = $saved_job_resultset->num_rows;
                $saved = false;
                if ($saved_job_num == 1) {
                    $saved = true;
                }
                $job_data = [
                    'id' => $job_data['id'],
                    'date' => $job_data['datetime_added'],
                    'title' => $job_data['title'],
                    'payment_type' => $payment_type,
                    'budget' => $job_data['budget'],
                    'description' => $job_data['description'],
                    'total_applications' => $total_applications,
                    'skills' => $skills,
                    'author' => $first_name . ' ' . $last_name,
                    'username' => $username,
                    'review' => $user_review,
                    'saved' => $saved
                ];

                array_push($jobs, $job_data);
                //
            }
        }

        return $jobs;
    }

    public function save_jobs($data = [])
    {
        $response = [
            'status' => 'success',
            'message' => null
        ];
        extract($data);
        $saved_job_resultset = $this->search("SELECT * FROM `saved_job` WHERE `job_id` = ? AND `username` = ?;", [$job_id, $username]);
        $saved_job_num = $saved_job_resultset->num_rows;
        if ($saved_job_num == 1) {
            $this->iud("DELETE FROM `saved_job` WHERE `job_id` = ? AND `username` = ?;", [$job_id, $username]);
            $response['message'] = "success";
        } else if ($saved_job_num == 0) {
            $this->iud("INSERT INTO `saved_job` (`job_id`, `username`) VALUES (?, ?);", [$job_id, $username]);
            $response['message'] = "success";
        }
        echo json_encode($response);
    }
}
