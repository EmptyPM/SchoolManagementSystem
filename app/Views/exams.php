<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
    <li class="breadcrumb-item active">Exams</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Exams
        <a class="ml-3 btn btn-primary" href="<?= base_url() ?>/exam/add">Add new</a>
    </div>
    <div class="card-block">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($rows as $row) {

                    ?>
                        <tr>
                            <td><?= "EX-" . $row->id ?></td>
                            <td><?= $row->e_date ?></td>
                            <td><?= $row->title ?></td>

                            <td>
                                <a class="btn btn-primary" href="<?= base_url() ?>/exam/edit/<?= $row->id ?>">Edit</a>
                                <a class="btn btn-danger" href="<?= base_url() ?>/exam/delete/<?= $row->id ?>">Delete</a>
                            </td>

                        </tr>


                    <?php
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>