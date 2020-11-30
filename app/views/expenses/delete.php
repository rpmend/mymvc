<?php require APPROOT . '/views/inc/header.php'; ?>

<h1>Are you sure you want to delete this expense?</h1>

<form action="<?php echo URLROOT . '/expenses/delete/' . $data['expense'][0]['id']; ?>" method="post">

        <div>
            <label for="description">Description</label>
            <input type="text" name="description" value="<?php echo $data['expense'][0]['description'] ?>" disabled>
        </div>

        <div>
            <label for="category">Category</label>
            <input type="text" name="category" value="<?php echo $data['expense'][0]['category'] ?>" disabled>
        </div>

        <div>
            <label for="amount">Amount</label>
            <input type="text" name="amount" value="<?php echo $data['expense'][0]['amount'] ?>" disabled>
        </div>

        <div>
            <label for="duedate">Due date</label>
            <input type="text" name="duedate" value="<?php echo $data['expense'][0]['duedate'] ?>" disabled>
        </div>

        <div>
            <input type="submit" value="Delete">
        </div>

        <a style="text-decoration: underline;" class="" href="<?php echo URLROOT . '/expenses/index/'; ?>">Back</a>

    </form>

<?php require APPROOT . '/views/inc/footer.php'; ?>