<?php
  if ($_SERVER['REQUEST_METHOD'] !== 'POST')
  {
    
      echo '<script> alert("Phải Post dữ liệu");</script>';
      header( "refresh:0;url=ketquathi.php" );
      die;
  }
  if (!isset($_FILES["fileupload"]))
  {
      echo '<script> alert("Dữ liệu không đúng cấu trúc");</script>';
      header( "refresh:0;url=ketquathi.php" );
      die;
  }

  if ($_FILES["fileupload"]['error'] != 0)
  {
    echo '<script> alert("Dữ liệu upload bị lỗi");</script>';
    header( "refresh:0;url=ketquathi.php" );
    die;
  }
  $target_dir    = "../uploads/";
  $target_file   = $target_dir . basename($_FILES["fileupload"]["name"]);

  $allowUpload   = true;

  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

  $maxfilesize   = 8000000;

  $allowtypes    = array('xlsx', 'csv');


  if(isset($_POST["submit"])) {
      $check = filesize($_FILES["fileupload"]["tmp_name"]);
      if($check !== false)
      {
          $allowUpload = true;
      }
      else
      {
          echo '<script> alert("Không phải file excel - csv");</script>';
          header( "refresh:0;url=ketquathi.php" );
          $allowUpload = false;
      }
  }
  if (file_exists($target_file))
  {
      echo '<script> alert("Tên file đã tồn tại trên server, không được ghi đè");</script>';
      header( "refresh:0;url=ketquathi.php" );
      $allowUpload = false;
  }
  if ($_FILES["fileupload"]["size"] > $maxfilesize)
  {
      echo '<script> alert("Không được upload file lớn hơn $maxfilesize (bytes).");</script>';
      header( "refresh:0;url=ketquathi.php" );
      $allowUpload = false;
  }

  if (!in_array($imageFileType,$allowtypes ))
  {

      echo '<script> alert("Chỉ được upload các định dạng xlsx và csv !");</script>';
      header( "refresh:0;url=ketquathi.php" );
      $allowUpload = false;
  }


  if ($allowUpload)
  {
      if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file))
      {
          header('location: ketquathi.php');
          echo '<script> alert("File '. basename( $_FILES["fileupload"]["name"]).
          " Đã upload thành công.";

          echo "File lưu tại " . $target_file;
          echo '");</script>';
          include("../class/class-lms.php");
          $p = new lms();
          $file = $_FILES["fileupload"]["name"];
          $p->themxoasua("INSERT INTO fileketquathi(Filetailieu) VALUES('$file')");
          header( "refresh:0;url=ketquathi.php" );
      }
      else
      {
        echo '<script> alert("Có lỗi xảy ra khi upload file.");</script>';
        header( "refresh:0;url=ketquathi.php" );
      }
  }
  else
  {
      echo '<script> alert("Không upload được file, có thể do file lớn, kiểu file không đúng ... Kiểm tra lại file.");</script>';
      header( "refresh:0;url=ketquathi.php" );
  }
?>