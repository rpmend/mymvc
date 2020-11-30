<?php require APPROOT . '/views/inc/header.php'; ?>

<?php if (!empty($data['feedbackArray'][0])) {
    echo $data['feedbackArray'][0];
} ?>

<style>
    .text-container {
    margin: 0 20%;
}

@media only screen and (max-width: 800px) {
    .text-container {
        margin: 0;
    }
}
</style>

<h1>About</h1>
<div class="text-container">
    <h3 style="text-align: center;">Budget! is a free web app that helps you control your personal finances by mapping all your monthly incomes and expenses (like your salary and your bills) and letting you know when something is about to fall due.</h3>
    <br>
    <h2>How does it work?</h2>
    <ol>
        <li>Add your monthly incomes.</li>
        <li>Add your monthly expenses.</li>
        <li>Mark them when the payment is done.</li>
    </ol>
    <p>It's quite simple. Here is how to do it step by step in order to get the best out of the app:</p>
    <p>Once you have registered an account and logged in, go to the <i>Incomes</i> or <i>Expenses</i> page and then click the <i>Add New</i> button.</p>
    <p>To add a new income or expense, just fill up the form. It has only four fields:</p>
    <ul>
        <li>Description: is the name you want to give to that specific income or expense. Ex: "<i>Internet provider</i>".</li>
        <li>Category: is how you want to group diferent types of incomes or expenses. You can put whatever category you want. Just make sure you spell it the exact same way the next time you want to use that same category. Otherwise, a new category will be added. Ex: "<i>Home bills</i>".</li>
        <li>Amount: is the amount associated with that income or expense. Very straight forward. Do not add symbols, though! (<i>"<del>R$ 125.75</del>"</i>) Only numbers. Ex: "<i>125.75</i>".</li>
        <li>Due Date: is the day of the month on which you need to pay that bill (in case of expense) or you expect to recieve your payment (in case of income). Ex: "<i>5</i>".</li>
    </ul>
    <p>Once you click <i>Save</i>, you will be redirected back to the <i>Incomes</i> or the <i>Expenses</i> page (depending on what you chose to add) and you'll see that a new row has been added to the table.</p>
    <p>The row's color will change acording to the situation of the income or expense in relation the it's due date. For instance, if it's past the due date and it hasn't been paid yet, the row will turn red.</p>
    <p>The box at the start of each row tells the system if it's paid or not. By default, when you add a new income or expense, the box will be unchecked, meaning it hasn't been paid yet. You can check 
        the box to tell the system that this payment is done, which will cause the row to turn green. Or you can leave it unchecked and the system will understand that it hasn't been paid yet.</p>        
    <p>So the moral is that as you pay and get paid you should update the system by checking the corresponding boxes.</p>
    <p>At the beginning of each month (or whenever you want), you can reset the payments by clicking the <i>Reset All</i> button, which will uncheck all rows automacally for your convenience.</p>
    <p>This way, you can access the situation of your incomes and expenses and control what's paid and what's not just by looking at the tables.</p>
    <p>Add as many incomes and expenses as you want. Check or uncheck them as you please to better fit your need. Then go back to the <i>Dashboard</i> page to see all the information you have added conveniently mapped in charts and tables for you.</p>
    <p>Should you have any questions or suggestions related to this app, do not hesitate to send it to me through the <a class="btn" href="<?php echo URLROOT . '/pages/contact/'; ?>">contact</a> page.</p>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>