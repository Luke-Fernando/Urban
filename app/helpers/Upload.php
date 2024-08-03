<?php
class Upload
{

    public function __construct()
    {
    }

    public function upload_file($file, $target_directory, $custom_file_name, $type)
    {
        // $target_directory = "../assets/images/products/";
        $original_file_name = $file["name"];
        $file_name = $custom_file_name . "." . pathinfo($original_file_name, PATHINFO_EXTENSION);
        $target_file = $target_directory . $file_name;
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_extensions = array("jpg", "jpeg", "png", "svg");
        $type_pass = null;

        if ($type == "image") {
            if (in_array($file_type, $allowed_extensions)) {
                $type_pass = true;
            } else {
                $type_pass = false;
            }
        } else if ($type == "any") {
            $type_pass = true;
        }
        if ($type_pass == true) {
            // if (move_uploaded_file($file["tmp_name"], $target_file)) {
            //     // Database::iud(
            //     //     "INSERT INTO `product_image`(`product_id`,`product_image`) VALUES (?,?)",
            //     //     [$product_id, $custom_file_name]
            //     // );
            // }
            move_uploaded_file($file["tmp_name"], $target_file);
            return $file_name;
        }
    }
}
