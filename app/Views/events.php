<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
    <li class="breadcrumb-item active">Events</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Events<a class="ml-3 btn btn-primary" href="<?= base_url() ?>/event/add">Add new</a>
    </div>
    <div class="card-block">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Venue</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?= "EV-" . $row->id ?></td>
                            <td><?= $row->title ?></td>
                            <td><?= $row->date ?></td>
                            <td><?= $row->venue ?></td>
                            <td>
                                <a class="btn btn-primary" href="<?= base_url() ?>/event/edit/<?= $row->id ?>">Edit</a>
                                <a class="btn btn-danger" href="<?= base_url() ?>/event/delete/<?= $row->id ?>">Delete</a>
                            </td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>