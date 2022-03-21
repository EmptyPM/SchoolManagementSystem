<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>/">Dashboard</a></li>
    <li class="breadcrumb-item active"><?php

                                        echo isset($edit_data) ? "Edit" : "Add";

                                        ?> Marks</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-plus"></i>

        <?php

        echo isset($edit_data) ? "Edit" : "Add";

        ?> Marks
    </div>
    <div class="card-block">
        <form method="POST" action="<?= base_url() ?>/marks/<?php echo isset($edit_data) ? "edit/" . $edit_data->id : "add"; ?> ">
            <div class="row">
                <div class="col-6">
                    <label for="name">Select the exam: </label>
                    <select type="text" required="required" name="type" class="form-control">
                        <option>Wood item</option>
                        <option>Glass item</option>
                        <option>Concrete item</option>
                        <option>Stationary item</option>
                        <option>Iorn item</option>
                    </select>
                </div>
                <div class="col-6">
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
                </div>

            </div>
            <div class="container mt-5"><button class="btn btn-primary form-control">Submit</button></div>
        </form>

    </div>
</div>