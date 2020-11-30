<?php require APPROOT . '/views/inc/header.php'; ?>

<h1>Add Income</h1>

<form action="<?php echo URLROOT; ?>/incomes/add" method="post">

    <div>
        <label for="description">Description <span title="The name you want to give to that specific income or expense."><i class="far fa-question-circle fa-sm"></i></span></label>
        <input type="text" name="description" placeholder="work at Google" maxlength="45" required>
    </div>

    <div>
        <label for="category">Category <span title="How you want to group diferent types of incomes or expenses. You can put whatever category you want. Just make sure you spell it the exact same way the next time you want to use that same category. Otherwise, a new category will be added."><i class="far fa-question-circle fa-sm" ></i></span></label>
        <input type="text" name="category" placeholder="salary" maxlength="45" required>
    </div>

    <div>
        <label for="amount">Amount <span title="The amount associated with that income or expense."><i class="far fa-question-circle fa-sm"></i></span></label>
        <input type="number" name="amount" placeholder="10000" min="0" max="99999999" step=".01" required>
    </div>

    <div>
        <label for="duedate">Due date <span title="The date on which the payment falls due."><i class="far fa-question-circle fa-sm"></i></span></label>
        <input type="number" name="duedate" placeholder="1" min="1" max="31" step="1" required>
    </div>

    <div>
        <input type="submit" value="Save">
    </div>

    <a style="text-decoration: underline;" class="" href="<?php echo URLROOT . '/incomes/index/'; ?>">Back</a>

</form>

<?php require APPROOT . '/views/inc/footer.php'; ?>