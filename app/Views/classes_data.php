<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>/">Dashboard</a></li>
    <li class="breadcrumb-item active"><?php

                                        echo isset($edit_data) ? "Edit" : "Add";

                                        ?> Class</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-plus"></i>

        <?php

        echo isset($edit_data) ? "Edit" : "Add";

        ?> Class
    </div>
    <div class="card-block">
        <form method="POST" action="<?= base_url() ?>/classes/<?php echo isset($edit_data) ? "edit/" . $edit_data->id : "add"; ?> ">
            <div class="row">

                <div class="col-6">
                    <label for="title">Title: </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->title . '"'; ?> type="text" required="required" name="title" class="form-control">
                </div>
                <div class="col-6">
                    <label>Select subjects: </label>

                    <?php
                    foreach ($subjects as $key => $subject) {
                        echo '<br><div class="form-check-inline"><label class="form-check-label"><input class="form-check-input" type="checkbox" id="sub_' . $subject->id .  '" name="sub_' . $subject->id .  '" >' . "   " . $subject->title .  '</label></div><br>';
                    }
                    ?>
                </div>
            </div>
            <div class="container mt-5"><button class="btn btn-primary form-control">Submit</button></div>
        </form>

    </div>
</div>