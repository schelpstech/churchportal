<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> List of Visitors as at today <?php echo date("d-m-Y") ?> </h3>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Full Name</th>
                                    <th>Gender</th>
                                    <th>Assembly</th>
                                    <th>Age Grade</th>
                                    <th>Modify</th>
                                    <th>View</th>
                                    <th>Print Pass</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                if (!empty($visitors_list)) {
                                    foreach ($visitors_list as $data) {
                                ?>
                                        <tr>
                                            <td><?php echo $count++; ?></td>
                                            <td><?php echo $data['surname'] . " " . $data['firstname'] . " " . $data['othername'] ?? "" ?></td>
                                            <td><?php echo $data['gender']; ?></td>
                                            <td><?php echo $data['assembly_name']; ?></td>
                                            <td><?php echo $data['dept_name']; ?></td>
                                            <td>
                                                <a href="../../app/router.php?pageid=<?php echo base64_encode("modify_visitor"); ?>&visitor_reference=<?php echo base64_encode($data['ref_number'])?>" class="btn btn-app">
                                                    <i class="fas fa-edit"></i> Modify
                                                </a>
                                            </td>
                                            <td>
                                            <a href="../../app/router.php?pageid=<?php echo base64_encode("view_visitor");?>&visitor_reference=<?php echo base64_encode($data['ref_number']) ?>" class="btn btn-app btn-outline-success btn-block">
                                                        <i class="fas fa-thumbs-up"></i> View </a>

                                        </td>
                                        <td>
                                            <a href="../../app/router.php?pageid=<?php echo base64_encode("view_visitor")?>&visitor_reference=<?php echo base64_encode($data['ref_number']) ?>" class="btn btn-app btn-outline-success btn-block">
                                                        <i class="fas fa-print"></i> Print Tag </a>

                                        </td>
                                        </tr>
                                        
                                <?php
                                    }
                                } else {
                                    echo 'No Visitor Registered Yet';
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