<section class="content">
    <div class="container-fluid">
        <div class="row">

            <?php
            if (!empty($member_print_data)) {
                foreach ($member_print_data as $member_data) {
            ?>
                    <div class="col-sm-4">
                        <div class="card card-secondary card-outline">
                            <div class="card-body box-profile">
                                <h6 class="text-muted text-center"><b>RECONCILIATION BIBLE CHURCH</b></h6>
                                <h6 class="profile-username text-center">
                                    2022 Convention PASS</h6>
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="../../storage/passport/<?php echo $member_data['passport'] ?>" alt="Member profile picture">
                                </div>
                                <p class="text-muted text-center"><b><small><?php echo $member_data['lastname'] . " " . $member_data['firstname'] . " " . $member_data['othername'] ?? ""; ?></small></b><br>
                                    <?php
                                    if (!is_null($member_data['membership_number'])) {
                                        echo '<b>' . $member_data['membership_number'] . '</b>';
                                    } else {
                                        echo '<b> ' . $member_data['form_number'] . '</b>';
                                    }
                                    ?>
                                </p>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <small><b>Gender</b> <a class="float-right" style="color: black;"><?php echo $member_data['gender']; ?></a><br>
                                            <b>Department</b> <a class="float-right" style="color: black;"><?php echo $member_data['dept_name']; ?></a><br>
                                            <b>Assembly</b> <a class="float-right" style="color: black;"><?php echo $member_data['assembly_name']; ?></a></small>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-outline-secondary btn-block"><b><?php echo $member_data['membership_status']; ?></b></a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo 'No member Found';
            }
            ?>
        </div>

    </div>

    </div>
</section>