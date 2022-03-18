<?php
header('Location: index.php');
    
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include('../../inc/connect.php');

    $name = test_input($_REQUEST['name']);
    $about = test_input($_REQUEST['about']);
    $adress = test_input($_REQUEST['adress']);
    $url = test_input($_REQUEST['url']);

    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            $sql = "INSERT INTO mosques(`name`,`about`,`adress`,`url`)
                    VALUES('".$name."', '".$about."', '".$adress."','".$url."') ";
            mysqli_query($link,$sql);
            $last_article = $link->insert_id;
            move_uploaded_file($_FILES["photo"]["tmp_name"], "../../../assets/img/mosques/" . $last_article . '.jpg');
            echo "Your file was uploaded successfully.";
        } else{
            echo "Error: Rasmni yuklashga ruxsat berilmagan!"; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}
else {
    echo 'false';
}
?>