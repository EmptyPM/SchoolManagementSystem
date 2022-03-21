<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>/">Dashboard</a></li>
    <li class="breadcrumb-item active"><?php

                                        echo isset($edit_data) ? "Edit" : "Add";

                                        ?> Property</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-plus"></i>

        <?php

        echo isset($edit_data) ? "Edit" : "Add";

        ?> Property
    </div>
    <div class="card-block">
        <form method="POST" action="<?= base_url() ?>/property/<?php echo isset($edit_data) ? "edit/" . $edit_data->id : "add"; ?> ">
            <div class="row">

                <div class="col-6">
                    <label for="title">Title: </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->title . '"'; ?> type="text" required="required" name="title" class="form-control">
                </div>
                <div class="col-6">
                    <label for="value">Value (LKR): </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->value . '"'; ?> type="number" required="required" name="value" class="form-control">
                </div>
                <div class="col-12">
                    <label for="name">Type: </label>
                    <select type="text" required="required" name="type" class="form-control">
                        <option>Wood item</option>
                        <option>Glass item</option>
                        <option>Concrete item</option>
                        <option>Stationary item</option>
                        <option>Iorn item</option>
                    </select>
                </div>

            </div>
            <div class="container mt-5"><button class="btn btn-primary form-control">Submit</button></div>
        </form>

    </div>
</div>