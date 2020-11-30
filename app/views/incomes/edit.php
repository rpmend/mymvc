<?php require APPROOT . '/views/inc/header.php'; ?>

<h1>Edit Income</h1>

<form action="<?php echo URLROOT . '/incomes/edit/' . $data['income'][0]['id']; ?>" method="post">

    <div>
        <label for="description">Description</label>
        <input type="text" name="description" maxlength="45" value="<?php echo $data['income'][0]['description']; ?>" required>
    </div>

    <div>
        <label for="category">Category</label>
        <input type="text" name="category" maxlength="45" value="<?php echo $data['income'][0]['category']; ?>" required>
    </div>

    <div>
        <label for="amount">Amount</label>
        <input type="text" name="amount" min="0" max="99999999" step=".01" value="<?php echo $data['income'][0]['amount']; ?>" required>
    </div>

    <div>
        <label for="duedate">Due date</label>
        <input type="text" name="duedate" min="1" max="31" step="1" value="<?php echo $data['income'][0]['duedate']; ?>" required>
    </div>

    <div>
        <input type="submit" value="Save">
    </div>

    <a style="text-decoration: underline;" class="" href="<?php echo URLROOT . '/incomes/index/'; ?>">Back</a>

</form>

<?php require APPROOT . '/views/inc/footer.php'; ?>