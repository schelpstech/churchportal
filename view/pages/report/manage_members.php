<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> List of Members as at today <?php echo date("d-m-Y") ?> </h3>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Form Number</th>
                                    <th>Surname</th>
                                    <th>Othernames</th>
                                    <th>Gender</th>
                                    <th>Assembly</th>
                                    <th>Membership Status</th>
                                    <th>Modify</th>
                                    <th>Validation Status</th>
                                    <th>Assign</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                if (!empty($member_list)) {
                                    foreach ($member_list as $data) {
                                ?>
                                        <tr>
                                            <td><?php echo $count++; ?></td>
                                            <td style="text-align: center;">
                                                <img class="img-fluid img-box" src="../../storage/passport/<?php echo $data['passport']; ?>" width="50" />
                                                <?php echo '<hr><b>' . $data['form_number'] . '</b>';?>
                                            </td>
                                            <td><?php echo $data['lastname']; ?></td>
                                            <td><?php echo $data['firstname'] . " " . $data['othername'] ?? "" ?></td>
                                            <td><?php echo $data['gender']; ?></td>
                                            <td><?php echo $data['assembly_name']; ?></td>
                                            <td><?php echo $data['membership_status']; ?></td>
                                            <td>
                                                <a href="../../app/router.php?pageid=<?php echo base64_encode("modify_member"); ?>&mem_reference=<?php echo base64_encode($data['form_number']); ?>" class="btn btn-app">
                                                    <i class="fas fa-edit"></i> Modify
                                                </a>
                                            </td>
                                            <td>

                                                <?php
                                                if (!is_null($data['membership_number'])) {
                                                    echo '
                                                        <a href="../../app/router.php?pageid=' . base64_encode("view_member") . '&mem_reference=' . base64_encode($data['form_number']) . '" class="btn btn-app btn-outline-success btn-block">
                                                            <i class="fas fa-id-card-alt"></i> Validated </a>';
                                                } else {
                                                    echo '
                                                        <a href="../../app/router.php?pageid=' . base64_encode("view_member") . '&mem_reference=' . base64_encode($data['form_number']) . '" class="btn btn-app btn-outline-secondary btn-block">
                                                            <i class="fas fa-exclamation-circle"></i> Pending  </a>';
                                                    echo '';
                                                }
                                                ?>

                                            </td>
                                            <td>
                                                        <a href="../../app/router.php?pageid=<?php echo base64_encode("role_assignment")?>&mem_reference=<?php echo base64_encode($data['form_number'])?>" class="btn btn-app btn-outline-success btn-block">
                                                            <i class="fas fa-file-signature"></i> Assign</a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo 'No Member Registered Yet';
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