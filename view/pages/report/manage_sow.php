<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> Sunday School Classes List as at today <?php echo date("d-m-Y") ?> </h3>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Sunday School Name</th>
                                    <th>Description</th>
                                    <th>Assembly</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                if (!empty($sow_list)) {
                                    foreach ($sow_list as $data) {
                                ?>
                                        <tr>
                                            <td><?php echo $count++; ?></td>
                                            <td><?php echo $data['classname']; ?></td>
                                            <td><?php echo $data['description'] ?></td>
                                            <td><?php echo $data['assembly_name']; ?></td>
                                            <td>
                                                <a href="../../app/router.php?pageid=<?php echo base64_encode("modify_sow"); ?>&sow_reference=<?php echo base64_encode($data['classid']); ?>" class="btn btn-app">
                                                    <i class="fas fa-edit"></i> Modify
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo 'No Class Created Yet';
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