<?php
if ($_FILES["file"]["type"] == "image/png")
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br /> Please tell Phildo what has happened.";
    }
  else
    {
    //echo "Upload: " . $_FILES["file"]["name"] . "<br />";
   // echo "Type: " . $_FILES["file"]["type"] . "<br />";
   // echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"http://www.kingpongdb.com:8000/success.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "pname=".$_POST["name"]);
	move_uploaded_file($_FILES["file"]["tmp_name"], "upload/".$_POST["name"].substr($_FILES["file"]["name"], -4));
     //echo "Image saved: <br /><img src = \"upload/".$_POST["name"].substr($_FILES["file"]["name"], -4)."\" />";
     curl_exec ($ch);
	curl_close ($ch);
    }
  }
else
  {
  echo "Invalid file- please use png.";
  }
  
?>