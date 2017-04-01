<?php
$target_dir = "uploads/";
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . "upload.jpg";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
    }
}
/*
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}*/
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    //echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
}

$ch = curl_init();

$file_path='uploads/upload.jpg';

    $api_key = "cd0ffd366486fb2b1101e32e971aad84d6e47f66";
    $url = "https://gateway-a.watsonplatform.net/visual-recognition/api/v3/collections/Buildings_0081be/find_similar";
    $url .= "?";
    $url .= "api_key={$api_key}";
    $url .= "&version=2016-05-20";
    $img = "@{$file_path}";


//echo "<br/>";

    //$s = file_get_contents($img);
    $data = array(
        //"images_file" => $img,
        "image_file" => new CURLFile(__DIR__ . '/' . $file_path),
        );
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_VERBOSE,TRUE);
    //curl_setopt($ch, CURLOPT_SAFE_UPLOAD,FALSE);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    // in real life you should use something like:
    // curl_setopt($ch, CURLOPT_POSTFIELDS, 
    //          http_build_query(array('postvar1' => 'value1')));

    // receive server response ...
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = json_decode(curl_exec ($ch),true);
    

    curl_close ($ch);

    
    $score=($server_output['similar_images'][0]['score']);
    if ($score>0.70){
        $name=($server_output['similar_images'][0]['image_file']);
        $name=substr($name, 0,-3);
        $name2=preg_replace("/[^a-zA-Z]+/", "", $name);
        header("Location:waterman.php");
    }else{
        header("Location:redirect.php");
    }
?>