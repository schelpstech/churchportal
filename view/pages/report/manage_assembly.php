<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> Assembly List as at today <?php echo date("d-m-Y") ?> </h3>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Assembly Name</th>
                                    <th>Address</th>
                                    <th>Year Established</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                if (!empty($assembly_list)) {
                                    foreach ($assembly_list as $data) {
                                ?>
                                        <tr>
                                            <td><?php echo $count++; ?></td>
                                            <td><?php echo $data['assembly_name']; ?></td>
                                            <td><?php echo $data['assembly_address'] . ", " . $data['assembly_lga'] . ", " . $data['assembly_state'] . ", " . $data['assembly_country']; ?></td>
                                            <td><?php echo $data['assembly_year']; ?></td>
                                            <td>
                                                <a href="../../app/router.php?pageid=<?php echo base64_encode("modify_assembly"); ?>&assembly_reference=<?php echo base64_encode($data['assembly_id']); ?>" class="btn btn-app">
                                                    <i class="fas fa-edit"></i> Modify
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo '<option>select country</option>';
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