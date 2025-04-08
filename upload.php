<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate the form data (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($password)){
        echo "All fields are required.";
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


    // Handle multiple file uploads
    $targetDir = "uploads/";
    $uploadedFiles = [];
    
    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $fileName = basename($_FILES["files"]["name"][$key]);
        $uniqueName = uniqid() . "_" . $fileName;
        $targetFile = $targetDir . $uniqueName;
        $uploadedFiles[] = $targetFile;
        
        if (!move_uploaded_file($tmp_name, $targetFile)) {
            echo "File '{$fileName}' upload failed.<br>";
        } else {
            echo "File '{$fileName}' uploaded successfully.<br>";
        }
    }
    
    // Convert array of files to comma-separated string for database
    $filesDorDb = implode(',', $uploadedFiles);

    

    // Include the database connection file
    include 'conect.php';

    // Prepare and bind the SQL statement
    $sql = "INSERT INTO `data` (`name`, `email`, `password`,`file`) VALUES ('$name', '$email', '$hashedPassword', '$filesDorDb')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    

    // Close the statement and connection
    mysqli_close($conn);
}

?>