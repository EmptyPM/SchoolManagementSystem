<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>/">Dashboard</a></li>
    <li class="breadcrumb-item active"><?php

                                        echo isset($edit_data) ? "Edit" : "Add";

                                        ?> Attendence</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-plus"></i>

        <?php

        echo isset($edit_data) ? "Edit" : "Add";

        $date = date("Y-m-d", strtotime("today"));

        echo " Attendence for : " . $date;

        ?>
    </div>
    <div class="card-block">
        <form method="POST" action="<?= base_url() ?>/attendence/<?php echo isset($edit_data) ? "edit/" . $edit_data->id : "add"; ?> ">

            <?php /* <label>Put a tic-mark for present students: </label>

            <?php
            foreach ($students as $key => $student) {
                if (isset($edit_data) && in_array($student->id, json_decode($edit_data->present_students))) {
                    echo '<br><div class="form-check-inline"><label class="form-check-label"><input checked class="form-check-input" type="checkbox" id="sub_' . $student->id .  '" name="sub_' . $student->id .  '" >' . "   " . $student->full_name .  '</label></div><br>';
                } else {
                    echo '<br><div class="form-check-inline"><label class="form-check-label"><input class="form-check-input" type="checkbox" id="sub_' . $student->id .  '" name="sub_' . $student->id .  '" >' . "   " . $student->full_name .  '</label></div><br>';
                }
            }
            ?>
            <input name="submit" value="submit" hidden> */ ?>

            <div class="row">
                <div class="col-6">
                    <label for="male_count">Male students (Present): </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->male_count . '"'; ?> type="number" required="required" name="male_count" class="form-control">
                </div>
                <div class="col-6">
                    <label for="female_count">Female students (Present): </label>
                    <input <?php if (isset($edit_data)) echo 'value = "' . $edit_data->female_count . '"'; ?> type="number" required="required" name="female_count" class="form-control">
                </div>
            </div>





            <div class="container mt-5"><button class="btn btn-primary form-control">Submit</button></div>
        </form>

    </div>
</div>