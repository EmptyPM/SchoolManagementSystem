<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>/">Dashboard</a></li>
    <li class="breadcrumb-item active"><?php

                                        echo isset($edit_data) ? "Edit" : "Add";

                                        ?> Teacher</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-plus"></i>

        <?php

        echo isset($edit_data) ? "Edit" : "Add";

        ?> Teacher
    </div>
    <div class="card-block">
        <form method="POST" action="<?= base_url() ?>/teacher/<?php echo isset($edit_data) ? "edit/" . $edit_data->id : "add"; ?> ">
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
                    <label for="name">Title: </label>
                    <select type="text" required="required" name="name" class="form-control">
                        <option>Mr.</option>
                        <option>Ms.</option>
                        <option>Mrs.</option>
                        <option>Rev.</option>
                        <option>Ven.</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="name">name: </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->name . '"'; ?> type="text" required="required" name="name" class="form-control">
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
                <div class="col-6">
                    <label for="nic">NIC: </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->nic . '"'; ?> type="text" required="required" name="nic" class="form-control">
                </div>
                <div class="col-6">
                    <label for="subject">Subject: </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->subject . '"'; ?> type="text" required="required" name="subject" class="form-control">
                </div>
                <div class="col-6">
                    <label for="service_grade">Grade: </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->service_grade . '"'; ?> type="text" required="required" name="service_grade" class="form-control">
                </div>
                <div class="col-6">
                    <label for="curr_appointed_date">Current Appointed Date: </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->curr_appointed_date . '"'; ?> type="date" required="required" name="curr_appointed_date" class="form-control">
                </div>
                <div class="col-6">
                    <label for="first_appointed_date">First Appointed Date: </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->first_appointed_date . '"'; ?> type="date" required="required" name="first_appointed_date" class="form-control">
                </div>
                <div class="col-6">
                    <label for="grade">educational qulifications: </label>
                    <textarea type="text" required="required" name="edu_qulifications" class="form-control"><?php if (isset($edit_data)) echo $edit_data->edu_qulifications; ?></textarea>
                </div>
                <div class="col-6">
                    <label for="grade">proffessional qulifications: </label>
                    <textarea type="text" required="required" name="prof_qulifications" class="form-control"><?php if (isset($edit_data)) echo $edit_data->prof_qulifications; ?></textarea>
                </div>
            </div>
            <div class="container mt-5"><button class="btn btn-primary form-control">Submit</button></div>
        </form>

    </div>
</div>