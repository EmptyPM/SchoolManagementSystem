<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>/">Dashboard</a></li>
    <li class="breadcrumb-item active"><?php

                                        echo isset($edit_data) ? "Edit" : "Add";

                                        ?> Exam</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-plus"></i>

        <?php

        echo isset($edit_data) ? "Edit" : "Add";

        echo " Exam";

        ?>
    </div>
    <div class="card-block">
        <form method="POST" action="<?= base_url() ?>/exam/<?php echo isset($edit_data) ? "edit/" . $edit_data->id : "add"; ?> ">

            <div class="row">
                <div class="col-6">
                    <label for="e_date">Date: </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->e_date . '"'; ?> type="date" required="required" name="e_date" class="form-control">
                </div>
                <div class="col-6">
                    <label for="title">Exam title: </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->title . '"'; ?> type="text" required="required" name="title" class="form-control">
                </div>
            </div>


            <div class="container mt-5"><button class="btn btn-primary form-control">Submit</button></div>
        </form>

    </div>
</div>