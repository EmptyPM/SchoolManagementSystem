<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
    <li class="breadcrumb-item active">Attendence</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Attendence
        <!-- <a class="ml-3 btn btn-primary" href="<?= base_url() ?>/attendence/add">Add new</a> -->
    </div>
    <div class="card-block">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Class</th>
                        <th>Male present count</th>
                        <th>Female present count</th>
                        <th>Total present count</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $number = 1;

                    foreach ($rows as $row) {
                        $present_students  = $row->present_students;

                    ?>
                        <tr>
                            <td><?= $number ?></td>
                            <td><?= $row->a_date ?></td>
                            <td><?= $row->class ?></td>
                            <td><?= $row->male_count ?></td>
                            <td><?= $row->female_count ?></td>
                            <td><?= $row->male_count + $row->female_count ?></td>

                        </tr>
                    <?php
                        $number++;
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>