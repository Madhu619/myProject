<?php 
include ("config.php");
$is_form_submitted =  (isset($_POST['submit']))?true:false;

    if($is_form_submitted)
    {
        //defines variables
        $name=$_FILES['file']['name'];
        $type=$_FILES['file']['type'];
        $size=$_FILES['file']['size'];
        $tmp_name=$_FILES['file']['tmp_name'];
        $target_path="videos/";


        $allowedTypes   = array("video/wmv","video/avi",
         "video/mpeg","video/mpg","video/mp4");
        $is_valid_type  = (in_array($_FILES['file']['type'],                           $allowedTypes))?true:false;
       if ( $is_valid_type&& ($_FILES["file"]["size"] < 20000000000))
      {
        if ($_FILES["file"]["error"] > 0)
        {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
        }
        else
        {
        echo "Upload:&nbsp; " . $_FILES["file"]["name"] . "<br>";
        echo "Type:&nbsp; " . $_FILES["file"]["type"] . "<br>";
        echo "Size:&nbsp; " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "Temp file:&nbsp; " . $_FILES["file"]["tmp_name"] . "<br>";
        mysql_query("INSERT INTO video(name, size)
        VALUES('$name','$size',)");

        if (file_exists("images/" . $_FILES["file"]["name"]))
          {
          echo $_FILES["file"]["name"] . " already exists. ";
          }
        else
          {
          move_uploaded_file($_FILES["file"]["tmp_name"],
          "videos/" . $_FILES["file"]["name"]);
          echo "Stored in: " . "videos/" . $_FILES["file"]["name"];
          }
        }
      }
    else
    {
      echo "Invalid file";
    }

    }
?> 


<?php

$vid_url = "videos/";
    $result = mysql_query("SELECT * FROM `vids` WHERE 1");
    while($row = mysql_fetch_assoc($result))
    {
        echo 

        <div name="video">
        <video width="100%" height="100%" controls>
        <source src=".$vid_url.$row."type="video/mp4">
     Error: Video Not working
        </object>
        </video> 
        </div>'; 

    } 
?>
