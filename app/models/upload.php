<?php
class Upload {
    function upload($POST, $FILES) {
        $DB = new DataBase();
        $_SESSION['error'] = ""; 

        // Allowed file types
        $allowed = ["image/jpeg", "image/png", "image/gif"];

        // Check if the required fields are set
        if (isset($POST['title']) && isset($FILES['file'])) {

            // Check file validity
            if ($FILES['file']['name'] != "" && $FILES['file']['error'] == 0 && in_array($FILES['file']['type'], $allowed)) {

                // Create upload folder if it doesn't exist
                $folder = "uploads/";
                if (!file_exists($folder)) {
                    mkdir($folder, 0777, true);
                }

                // Destination path for uploaded file
                $destination = $folder . $FILES['file']['name'];

                // Move the uploaded file to the destination folder
                if (move_uploaded_file($FILES['file']['tmp_name'], $destination)) {

                    // Prepare the data to insert into the database
                    $arr['title'] = $POST['title'];
                    $arr['description'] = $POST['description'];
                    $arr['image'] = $destination;  // Store the image file path
                    $arr['url_address'] = get_random_string_max(60);
                    $arr['date'] = date("Y-m-d H:i:s");

                    // Insert data into the database
                    $query = "INSERT INTO images (title, description, url_address, date, image) VALUES (:title, :description, :url_address, :date, :image)";
                    $data = $DB->write($query, $arr);

                    // Redirect on success
                    if ($data) {
                        header("Location: " . ROOT . "products");
                        die;
                    } else {
                        echo "Error inserting data into the database.";
                    }

                } else {
                    $_SESSION['error'] = "This file could not be uploaded.";
                }

            } else {
                $_SESSION['error'] = "Invalid file type. Only JPEG, PNG, and GIF are allowed.";
            }

        } else {
            echo "Please provide a title and select a valid file.";
        }
    }
}
