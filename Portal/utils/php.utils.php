<?php
function uploadFile($fileInputName, $prefix = '') {
    // Directory where files will be uploaded
    $uploadDir = '../uploads/';
    
    // Ensure the uploads directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }
    
    if (isset($_FILES[$fileInputName]) && $_FILES[$fileInputName]['error'] === UPLOAD_ERR_OK) {
        $fileTmpName = $_FILES[$fileInputName]['tmp_name'];
        $originalFileName = basename($_FILES[$fileInputName]['name']);
        
        // Generate a unique filename with a prefix and random number
        $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $randomNumber = rand(1000, 9999); // Adjust the range as needed
        $uniqueFileName = $prefix . '_' . $randomNumber . '.' . $fileExtension;
        $uploadFile = $uploadDir . $uniqueFileName;
        
        if (move_uploaded_file($fileTmpName, $uploadFile)) {
            // Return the unique filename to store in the database
            return $uniqueFileName;
        } else {
            // Error moving file
            return false;
        }
    } else {
        // Error in file upload
        return false;
    }
}
?>
