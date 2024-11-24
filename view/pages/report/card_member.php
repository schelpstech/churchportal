<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 offset-4">
                <div class="card card-secondary card-outline">
                    <div class="card-body box-profile">
                        <h6 class="text-muted text-center"><b>RECONCILIATION BIBLE CHURCH</b></h6>
                        <h4 class="profile-username text-center">
                            <hr>2022 Convention PASS
                            <hr>
                        </h4>
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="../../storage/passport/<?php echo $member_data['passport']; ?>" alt="Member profile picture">
                        </div>
                        <h3 class="profile-username text-center"><?php echo $member_data['lastname'] . " " . $member_data['firstname'] . " " . $member_data['othername'] ?? ""; ?></h3>
                        <p class="text-muted text-center">
                            <?php
                            if (!is_null($member_data['membership_number'])) {
                                echo '<b>Membership Number :: ' . $member_data['membership_number'] . '</b>';
                            } else {
                                echo '<b>Form Number :: ' . $member_data['form_number'] . '</b>';
                            }
                            ?>
                        </p>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Gender</b> <a class="float-right" style="color: black;"><?php echo $member_data['gender']; ?></a>
                            </li>

                            <li class="list-group-item">
                                <b>Department</b> <a class="float-right" style="color: black;"><?php echo $member_data['dept_name']; ?></a>
                            </li>

                            <li class="list-group-item">
                                <b>Assembly</b> <a class="float-right" style="color: black;"><?php echo $member_data['assembly_name']; ?></a>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-outline-secondary btn-block"><b><?php echo $member_data['membership_status']; ?></b></a>
                    </div>

                </div>
            </div>
        </div>

        </div>

    </div>
</section>