<?php
    // Check if button 'submit' is clicked.
    if(isset($_POST['submit'])) {
        // $allowed[]: an array of allowable file upload types/extensions.
        $allowed_file_type = array('png', 'jpg', 'jpeg', 'gif');
        // Check if a file was submitted.
        if(!empty($_FILES['upload']['name'])) {
            // If a file was submitted store these variables.
            $file_name = filter_var($_FILES['upload']['name'], FILTER_SANITIZE_SPECIAL_CHARS);
            $file_size = $_FILES['upload']['size'];
            $file_tmp_local = $_FILES['upload']['tmp_name'];
            $target_dir = "./uploads/${file_name}";
            // Get file type/extension.
            $file_type = explode('.', $file_name);
            $file_type = strtolower(end($file_type));
            // Validate the file type.
            if(in_array($file_type, $allowed_file_type)) {
                if($file_size <= 1000000) {
                    move_uploaded_file($file_tmp_local, $target_dir);
                    $message = '<p style="color: green;">Your image has been saved Bro. just saying.</p>';
                }
                else {
                    $message = '<p style="color: red;">Your file is Waaaaaay too big Dude.</p>';
                }
            }
            else {
                $message = '<p style="color: red;">Man, gotta be an image type file.</p>';
            }
            echo htmlspecialchars($file_type);
        }
        // If a file was not submitted post an error message above the form.
        else {
            $message = '<p style="color: red;">Please choose an actual file Brother!</p>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
<?php echo $message ?? null; ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        <p>Select image to upload: </p>
            <input type="file" name="upload" id="upload">
            <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>