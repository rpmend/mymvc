<?php require APPROOT . '/views/inc/header.php'; ?>

<h1>Are you sure you want to delete this income?</h1>

<form action="<?php echo URLROOT . '/incomes/delete/' . $data['income'][0]['id']; ?>" method="post">

    <div>
        <label for="description">Description</label>
        <input type="text" name="description" value="<?php echo $data['income'][0]['description']; ?>" disabled>
    </div>

    <div>
        <label for="category">Category</label>
        <input type="text" name="category" value="<?php echo $data['income'][0]['category']; ?>" disabled>
    </div>

    <div>
        <label for="amount">Amount</label>
        <input type="text" name="amount" value="<?php echo $data['income'][0]['amount']; ?>" disabled>
    </div>

    <div>
        <label for="duedate">Due date</label>
        <input type="text" name="duedate" value="<?php echo $data['income'][0]['duedate']; ?>" disabled>
    </div>

    <div>
        <input type="submit" value="Delete">
    </div>

    <a style="text-decoration: underline;" class="" href="<?php echo URLROOT . '/incomes/index/'; ?>">Back</a>

</form>

<?php require APPROOT . '/views/inc/footer.php'; ?>