<?php 
    // HOME PAGE & FEEDBACK FORM.
    
    // 1. Page header and opening includes.
    $title = 'Leave Feedback';
    include './includes/header.php';
    // 2. 'inputs & errors': set all PHP inputs to empty.
    $inputName = $inputEmail = $inputBody = '';
    $errorName = $errorEmail = $errorBody = '';
    // 3. 'form submit': listen and check for form submission.
    if(isset($_POST['submit'])) {
        // Validate input-name.
        if(empty($_POST['input-name'])) {
            $errorName = 'Hey Bro. Need ya name.';
        }
        else {
            $inputName = filter_input(INPUT_POST, 'input-name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
        // Validate input-email.
        if(empty($_POST['input-email'])) {
            $errorEmail = 'Maaate! Need an email.';
        }
        else {
            $inputEmail = filter_input(INPUT_POST, 'input-email', FILTER_SANITIZE_EMAIL);
        }
        // Validate input-body.
        if(empty($_POST['input-body'])) {
            $errorBody = 'Whats up Dude, you need feedback if you want to give feedback.';
        }
        else {
            $inputBody = filter_input(INPUT_POST, 'input-body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
        // 3d. 'feedback-db': if all fields are valid add input data to the database.
        if(empty($errorName) && empty($errorEmail) && empty($errorBody)) {
            // 3da. '$query': set query to INSERT data.
            $query = "INSERT INTO 
                        feedback (person_name, person_email, feedback_text)
                        VALUES ('$inputName', '$inputEmail', '$inputBody')";
            // 3d2. 'mysqli_query': check if the query is successful and re-direct to feedback.php or show error.
            if(mysqli_query($connection, $query)) {
                header('Location: feedback.php');
            }
            else {
                echo 'Oooo, error Bro: ' . mysqli_error($connection);
            }
        }
    }
?>
            <h2>Feedback</h2>
                <p class="lead text-center">Leave feedback for RedAndBlackZone</p>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
                    <div class="mb-3">
                        <label for="input-name" class="form-label">Name</label>
                        <input type="text" class="form-control <?php echo $errorName ? 'is-invalid' : null; ?>" id="form-name" name="input-name" placeholder="Enter your name">
                        <div class="invalid-feedback">
                            <?= $errorName ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="input-email" class="form-label">Email</label>
                        <input type="email" class="form-control <?php echo $errorEmail ? 'is-invalid' : null; ?>" id="form-email" name="input-email" placeholder="Enter your email">
                        <div class="invalid-feedback">
                            <?= $errorEmail ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="input-body" class="form-label">Feedback</label>
                        <textarea class="form-control <?php echo $errorBody ? 'is-invalid' : null; ?>" id="form-body" name="input-body" placeholder="Enter your feedback"></textarea>
                        <div class="invalid-feedback">
                            <?= $errorBody ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="submit" class="btn btn-dark w-100">Send</button>
                    </div>
                </form>
<?php include './includes/footer.php' ?>