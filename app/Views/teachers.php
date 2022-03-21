<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
    <li class="breadcrumb-item active">Teachers</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Teachers<a class="ml-3 btn btn-primary" href="<?= base_url() ?>/teacher/add">Add new</a>
    </div>
    <div class="card-block">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Edu. Qulifcations</th>
                        <th>Prof. Qulifcations</th>
                        <th>Subject</th>
                        <th>Grade</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?= "TC-" . $row->id ?></td>
                            <td><?= $row->name ?></td>
                            <td><?= $row->email ?></td>
                            <td><?= $row->phone_number ?></td>
                            <td><?= $row->edu_qulifications ?></td>
                            <td><?= $row->prof_qulifications ?></td>
                            <td><?= $row->subject ?></td>
                            <td><?= $row->service_grade ?></td>
                            <td>
                                <a class="btn btn-primary" href="<?= base_url() ?>/teacher/edit/<?= $row->id ?>">Edit</a>
                                <a class="btn btn-danger" href="<?= base_url() ?>/teacher/delete/<?= $row->id ?>">Delete</a>
                            </td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>