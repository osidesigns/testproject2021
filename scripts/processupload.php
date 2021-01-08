<?php

    $tmp_filename = $_FILES['uploadedItem']['tmp_name'];
    $sendToPath = '..' . DIRECTORY_SEPARATOR . 'imgs';
    $final_Destination_With_Filename = $sendToPath . DIRECTORY_SEPARATOR . $_FILES['uploadedItem']['name'];
    $success = move_uploaded_file($tmp_filename, $final_Destination_With_Filename);

    if($success){
        echo 'File uploaded successfully.';
    }else{
        echo 'An issue occured with your upload.';
    }