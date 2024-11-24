<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> List of Registered participant at the World Leaders Conference 2024 as at today <?php echo date("d-m-Y") ?> </h3>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Registration ID</th>
                                    <th>Fullname</th>
                                    <th>Gender</th>
                                    <th>Position</th>
                                    <th>Church</th>
                                    <th>Contact</th>
                                    <th>Remarks</th>
                                    <th>Attendance Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                if (!empty($participant_list)) {
                                    foreach ($participant_list as $data) {
                                ?>
                                        <tr>
                                            <td><?php echo $count++; ?></td>
                                            <td> <strong><?php echo $data['regid'] ?></strong></td>
                                            <td><?php echo $data['title'] . " " . $data['fullname']; ?></td>
                                            <td><?php echo $data['gender']; ?></td>
                                            <td><?php echo $data['position']; ?> <br><?php echo $data['department'] ?? "" ?></td>
                                            <td><?php echo $data['church_name']; ?></td>
                                            <td><?php echo $data['phone']; ?> <br><?php echo $data['email'] ?? "" ?></td>
                                            <td>
                                                <a href="../../app/router.php?pageid=<?php echo base64_encode("modify_member"); ?>&reg_id=<?php echo base64_encode($data['regid']); ?>" class="btn btn-app">
                                                    <i class="fas fa-edit"></i> Remarks
                                                </a>
                                            </td>
                                            <td>

                                                <?php
                                                if (!is_null($data['attendance'])) {
                                                    echo '
                                                        <a href="#" class="btn btn-app btn-outline-success btn-block">
                                                            <i class="fas fa-id-card-alt"></i> Present </a>';
                                                } else {
                                                    echo '
                                                        <a href="#" class="btn btn-app btn-outline-secondary btn-block">
                                                            <i class="fas fa-exclamation-circle"></i> Pending  </a>';
                                                }
                                                ?>

                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo 'No Participant Registered Yet';
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