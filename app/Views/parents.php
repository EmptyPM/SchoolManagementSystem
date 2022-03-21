<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
    <li class="breadcrumb-item active">Parents</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Parents<a class="ml-3 btn btn-primary" href="<?= base_url() ?>/parents/add">Add new</a>
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
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?= "TC-" . $row->id ?></td>
                            <td><?= $row->full_name ?></td>
                            <td><?= $row->email ?></td>
                            <td><?= $row->phone_number ?></td>
                            <td>
                                <a class="btn btn-primary" href="<?= base_url() ?>/parents/edit/<?= $row->id ?>">Edit</a>
                                <a class="btn btn-danger" href="<?= base_url() ?>/parents/delete/<?= $row->id ?>">Delete</a>
                            </td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>