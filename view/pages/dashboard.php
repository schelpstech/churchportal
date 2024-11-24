<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?php echo $number_assembly_class; ?></h3>
                <p>Enlisted Assembly</p>
            </div>
            <div class="icon">
                <i class="fa fa-synagogue"></i>
            </div>
            <a href="../../app/router.php?pageid=<?php echo base64_encode('manage_assembly'); ?>" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3><?php echo $number_member_class; ?></h3>
                <p>Registered Members</p>
            </div>
            <div class="icon">
                <i class="far fa-id-card"></i>
            </div>
            <a href="../../app/router.php?pageid=<?php echo base64_encode('manage_member'); ?>" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?php echo intval($number_unvalidated_user); ?></h3>
                <p>validated Members</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-check"></i>
            </div>
            <a href="../../app/router.php?pageid=<?php echo base64_encode('manage_member'); ?>" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?php echo $number_sow_class; ?></h3>
                <p>School of Wisdom</p>
            </div>
            <div class="icon">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <a href="../../app/router.php?pageid=<?php echo base64_encode('manage_sow'); ?>" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header border-0">
                <h3 class="card-title">Newly Enrolled</h3>
                <div class="card-tools">
                    <a href="#" class="btn btn-tool btn-sm">
                        <i class="fas fa-download"></i>
                    </a>
                    <a href="#" class="btn btn-tool btn-sm">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>Passport</th>
                            <th>Fullname</th>
                            <th>Gender</th>
                            <th>Assembly</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if (!empty($latest_members)) {
                            foreach ($latest_members as $data) {
                        ?>
                                <tr>
                                    <td>
                                        <img src="../../storage/passport/<?php echo $data['passport']; ?>" class="img-circle img-size-32 mr-2">
                                        <span class="badge bg-danger">NEW</span>
                                    </td>
                                    <td>
                                        <?php echo $data['lastname'] . " " . $data['firstname'] . " " . $data['othername'] ?? "" ?>
                                    </td>
                                    <td>
                                        <?php echo $data['gender']; ?>
                                    </td>
                                    <td>
                                        <?php echo $data['assembly_name']; ?>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo '<td>No Member Registered Yet</td>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-header border-0">
                <h3 class="card-title">Registration by Department - Overview</h3>
                <div class="card-tools">
                    <a href="#" class="btn btn-sm btn-tool">
                        <i class="fas fa-download"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-tool">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <?php
                if (!empty($department_report)) {
                    foreach ($department_report as $data) {
                ?>
                        <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                            <p class="text-success text-xl">
                                <i class="ion ion-ios-refresh-empty"></i>
                            </p>
                            <h5 class="d-flex flex-column text-right">
                                <span class="font-weight-bold">
                                    <i class="ion ion-android-arrow-up text-success"></i> <?php echo $data['total']; ?>
                                </span>
                                <span class="text-muted"><?php echo $data['department']; ?></span>
                            </h5>
                        </div>
                <?php
                    }
                } else {
                    echo '
                        <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                            <p class="text-warning text-xl">
                                <i class="ion ion-ios-cart-outline"></i>
                            </p>
                            <p class="d-flex flex-column text-right">
                                <span class="font-weight-bold">
                                    <i class="on ion-android-arrow-down text-danger"></i> 0.0
                                </span>
                                <span class="text-muted">No Member Registered Yet</span>
                            </p>
                        </div>
                        ';
                }
                ?>
            </div>
        </div>

        <div class="card">
            <div class="card-header border-0">
                <h3 class="card-title">Registration by Region - Overview</h3>
                <div class="card-tools">
                    <a href="#" class="btn btn-sm btn-tool">
                        <i class="fas fa-download"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-tool">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <?php
                if (!empty($regional_report)) {
                    foreach ($regional_report as $data) {
                ?>
                        <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                            <p class="text-success text-xl">
                                <i class="ion ion-ios-refresh-empty"></i>
                            </p>
                            <h5 class="d-flex flex-column text-right">
                                <span class="font-weight-bold">
                                    <i class="ion ion-android-arrow-up text-success"></i> <?php echo $data['total']; ?>
                                </span>
                                <span class="text-muted"><?php echo $data['region']; ?></span>
                            </h5>
                        </div>
                <?php
                    }
                } else {
                    echo '
                        <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                            <p class="text-warning text-xl">
                                <i class="ion ion-ios-cart-outline"></i>
                            </p>
                            <p class="d-flex flex-column text-right">
                                <span class="font-weight-bold">
                                    <i class="on ion-android-arrow-down text-danger"></i> 0.0
                                </span>
                                <span class="text-muted">No Member Registered Yet</span>
                            </p>
                        </div>
                        ';
                }
                ?>
            </div>
        </div>

    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header border-0">
                <h3 class="card-title">Registration by Assembly - Overview</h3>
                <div class="card-tools">
                    <a href="#" class="btn btn-sm btn-tool">
                        <i class="fas fa-download"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-tool">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <?php
                if (!empty($assembly_report)) {
                    foreach ($assembly_report as $data) {
                ?>
                        <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                            <p class="text-success text-xl">
                                <i class="ion ion-ios-refresh-empty"></i>
                            </p>
                            <h5 class="d-flex flex-column text-right">
                                <span class="font-weight-bold">
                                    <i class="ion ion-android-arrow-up text-success"></i> <?php echo $data['total']; ?>
                                </span>
                                <span class="text-muted"><?php echo $data['assembly']; ?></span>
                            </h5>
                        </div>
                <?php
                    }
                } else {
                    echo '
                        <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                            <p class="text-warning text-xl">
                                <i class="ion ion-ios-cart-outline"></i>
                            </p>
                            <p class="d-flex flex-column text-right">
                                <span class="font-weight-bold">
                                    <i class="on ion-android-arrow-down text-danger"></i> 0.0
                                </span>
                                <span class="text-muted">No Member Registered Yet</span>
                            </p>
                        </div>
                        ';
                }
                ?>
            </div>
        </div>
    </div>


</div>