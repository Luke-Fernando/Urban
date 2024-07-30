<?php
class JobModel extends Model
{
    public function __construct()
    {
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
