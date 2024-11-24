<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> Sermon Repository as at today <?php echo date("d-m-Y") ?> </h3>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Sermon Title</th>
                                    <th>Preacher</th>
                                    <th>Assembly Name</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                if (!empty($sermon_list)) {
                                    foreach ($sermon_list as $data) {
                                ?>
                                        <tr>
                                            <td><?php echo $count++; ?></td>
                                            <td><?php echo ucwords ($data['title']); ?></td>
                                            <td><?php echo ucwords($data['preacher'])  ?></td>
                                            <td><?php echo ucwords($data['assembly_name'])  ?></td>
                                            <td><?php echo strtoupper($data['sermon_type']); ?></td>
                                            <td><?php echo $data['sermon_date']; ?></td>
                                            <td>
                                                <a href="../../app/router.php?pageid=<?php echo base64_encode("modify_sermon"); ?>&sermon_reference=<?php echo base64_encode($data['sermon_id']); ?>" class="btn btn-app">
                                                    <i class="fas fa-edit"></i> Modify
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo '<option>No Sermon Yet</option>';
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>