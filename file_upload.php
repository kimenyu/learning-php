<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <h1>Upload Image</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <?php
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if file was uploaded without errors
        if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
            $targetDir = "uploads/";
            $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Check if the file is an actual image
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                // Check file size (you can adjust the file size limit as needed)
                if ($_FILES["fileToUpload"]["size"] > 500000) {
                    echo "Sorry, your file is too large.";
                } else {
                    // Allow only certain file formats (you can adjust this list)
                    if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") {
                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    } else {
                        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
                    }
                }
            } else {
                echo "File is not an image.";
            }
        } else {
            echo "Error uploading file.";
        }
    }
    ?>
</body>
</html>
