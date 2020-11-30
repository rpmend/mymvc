<?php require APPROOT . '/views/inc/header.php'; ?>

<?php $today = (int)date("d"); ?>

<style>
    a#add-new {
        display: block;
        padding-bottom: .5rem;
    }

    .categories-wrapper {
        padding: 1rem 0;
        text-align: center;
    }

    .categories-wrapper a {
        text-decoration: underline;
        color: #2196f3;
        margin: 0 .5rem;
    }

    .table-wrapper {
        width: 100%;
    }

    #table {
        width: 100%;
    }

    td,
    th {
        text-align: center;
    }

    @media only screen and (max-width: 800px) {
        .table-wrapper {
            overflow-x: scroll;
        }

        #table {
            min-width: 480px;
        }
    }
</style>

<h1>Expenses</h1>

<div class="categories-wrapper">
    <?php if (!empty($data['categories'])) { ?>
        <a href="<?php echo URLROOT . '/expenses' ?>">All</a>
    <?php } ?>
    <?php foreach ($data['categories'] as $category) { ?>
        <a href="#" onclick="filterTable('<?php echo $category['category']; ?>')"><?php echo $category['category']; ?></a>
    <?php } ?>
</div>

<div class="table-wrapper">
    <a id="add-new" class="btn" href="<?php echo URLROOT . '/expenses/add/'; ?>">Add New</a>
    <a class="btn" href="<?php echo URLROOT . '/expenses/resetAll/'; ?>">Reset All</a> <span title="Unchecks all boxes. You should do this at the beginning of each month or when ever you want to restart your payments."><i class="far fa-question-circle fa-sm"></i></span>
    <table id="table">
        <thead>
            <tr>
                <th>Paid <span title="Check the boxes when the payment is done."><i class="far fa-question-circle fa-sm"></i></span></th>
                <th>Due date</th>
                <th>Description</th>
                <th>Category</th>
                <th style="text-align: right; width: 5vw; padding-right: 5vw;">Amount</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['expenses'] as $expense) { ?>
                <tr <?php if ($expense['paid'] == 0 && $expense['duedate'] < $today) { ?>style="background-color: #ffcdd2;" <?php }
                                                                                                                        if ($expense['paid'] == 0 && $expense['duedate'] == $today) { ?> style="background-color: #ffe082;" <?php }
                                                                                                                                                                                                                        if ($expense['paid'] == 1) { ?> style="background-color: #c8e6c9;" <?php } ?>>
                    <td>
                        <a href="<?php echo URLROOT . '/expenses/updatePaid/' . $expense['id']; ?>">
                            <?php if ($expense['paid'] == 0) { ?>
                                <i class="far fa-square"></i>
                            <?php } else { ?>
                                <i class="far fa-check-square"></i>
                            <?php } ?>
                        </a>
                    </td>
                    <td><?php echo $expense['duedate']; ?></td>
                    <td><?php echo $expense['description']; ?></td>
                    <td><?php echo $expense['category']; ?></td>
                    <td style="text-align: right; width: 5vw; padding-right: 5vw;"><?php echo number_format($expense['amount'], 2) ?></td>
                    <td><a href="<?php echo URLROOT . '/expenses/edit/' . $expense['id']; ?>"><span title="Edit expense"><i class="fas fa-edit"></i></span></a></td>
                    <td><a href="<?php echo URLROOT . '/expenses/delete/' . $expense['id']; ?>"><span title="Delete expense"><i class="fas fa-trash-alt"></i></span></a></td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>