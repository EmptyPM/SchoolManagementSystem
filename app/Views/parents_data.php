<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>/">Dashboard</a></li>
    <li class="breadcrumb-item active"><?php

                                        echo isset($edit_data) ? "Edit" : "Add";

                                        ?> Parent</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-plus"></i>

        <?php

        echo isset($edit_data) ? "Edit" : "Add";

        ?> Parent
    </div>
    <div class="card-block">
        <form method="POST" action="<?= base_url() ?>/parents/<?php echo isset($edit_data) ? "edit/" . $edit_data->id : "add"; ?> ">
            <div class="row">

                <div class="col-6">
                    <label for="username">Username: </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->username . '"'; ?> type="text" required="required" name="username" class="form-control">
                </div>
                <div class="col-6">
                    <label for="password">Password: </label>
                    <input <?php if (isset($edit_data)) echo 'value = "[unchanged]"'; ?> type="text" required="required" name="password" class="form-control">
                </div>
                <div class="col-6">
                    <label for="gender">Gender: </label>
                    <select type="text" required="required" name="gender" class="form-control">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="full_name">Full name: </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->full_name . '"'; ?> type="text" required="required" name="full_name" class="form-control">
                </div>
                <div class="col-6">
                    <label for="name_with_initials">Name with initials: </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->name_with_initials . '"'; ?> type="text" required="required" name="name_with_initials" class="form-control">
                </div>
                <div class="col-6">
                    <label for="email">Email: </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->email . '"'; ?> type="email" required="required" name="email" class="form-control">
                </div>
                <div class="col-6">
                    <label for="phone_number">Phone Number: </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->phone_number . '"'; ?> type="text" required="required" name="phone_number" class="form-control">
                </div>
                <div class="col-6">
                    <label for="dob">DOB: </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->dob . '"'; ?> type="date" required="required" name="dob" class="form-control">
                </div>


            </div>
            <div class="container mt-5"><button class="btn btn-primary form-control">Submit</button></div>
        </form>

    </div>
</div>