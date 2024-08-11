<?php

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
        $response['message'] = "success";
        echo json_encode($response);
    }
}
