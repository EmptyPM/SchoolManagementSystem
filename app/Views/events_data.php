<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>/">Dashboard</a></li>
    <li class="breadcrumb-item active"><?php

                                        echo isset($edit_data) ? "Edit" : "Add";

                                        ?> Event</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-plus"></i>

        <?php

        echo isset($edit_data) ? "Edit" : "Add";

        ?> Event
    </div>
    <div class="card-block">
        <form method="POST" action="<?= base_url() ?>/event/<?php echo isset($edit_data) ? "edit/" . $edit_data->id : "add"; ?> ">
            <div class="row">

                <div class="col-6">
                    <label for="title">Title: </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->title . '"'; ?> type="text" required="required" name="title" class="form-control">
                </div>
                <div class="col-6">
                    <label for="venue">Venue: </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->venue . '"'; ?> type="text" required="required" name="venue" class="form-control">
                </div>
                <div class="col-6">
                    <label for="date">Date: </label>
                    <input type="datetime-local" <?php if (isset($edit_data)) echo 'value = "' . substr(date("Y-m-d\TH:i:sP'", strtotime($edit_data->date)), 0, 16)   . '"'; ?> required="required" name="date" class="form-control">
                </div>

            </div>
            <div class="container mt-5"><button class="btn btn-primary form-control">Submit</button></div>
        </form>

    </div>
</div>