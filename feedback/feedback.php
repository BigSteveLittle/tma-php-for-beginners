<?php 
    $title = 'Feedback';
    include './includes/header.php'; 
    $query = 'SELECT * 
                FROM feedback  
                ';
    $output = mysqli_query($connection, $query);
    $feedback = mysqli_fetch_all($output, MYSQLI_ASSOC);
?>
            <h2>Past Feedback</h2>
                <?php if(empty($feedback)): ?>
                    <p class="lead mt3">No feedback Brother...</p>
                <?php endif; ?>
                <!-- Feedback Card. -->
                <?php foreach($feedback as $feed): ?>
                    <div class="card my-3 w-75">
                        <div class="card-body">
                            <small><p class="fst-italic"><?= $feed['feedback-date']; ?></p></small>
                            <p><?php echo $feed['feedback-text']; ?> </p>
                            <h3 class="feed-name text-end"><?= $feed['person-name']; ?></h3>
                            <h4 class="fs-6 text-end"><?= $feed['person-email']; ?> </h4>
                        </div>
                    </div>
                <?php endforeach; ?>
    <?php include './includes/footer.php' ?>