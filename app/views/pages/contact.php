<?php require APPROOT . '/views/inc/header.php'; ?>

<?php if (!empty($data['feedbackArray'])) { echo $data['feedbackArray'];} ?>

<h1>Contact</h1>
<form action="<?php echo URLROOT; ?>/pages/contact" method="post">    

    <div>
        <label for="name">Name (optional)</label>
        <input type="text" name="name" maxlength="45">
    </div>

    <div>
        <label for="email">Email (optional)</label>
        <input type="email" name="email" maxlength="45">
    </div>

    <div>
        <label for="subject">Subject (optional)</label>
        <input type="text" name="subject" maxlength="45">
    </div>

    <div>
        <label for="message">Message</label>
        <textarea name="message" id="" maxlength="1000" required></textarea>
    </div>

    <div>
        <input type="submit" value="Submit">
    </div>

</form>

<?php require APPROOT . '/views/inc/footer.php'; ?>