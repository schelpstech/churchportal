<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <div class="card card-secondary card-outline">
                    <div class="card-body box-profile">
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
                                <b>Date of Birth</b> <a class="float-right" style="color: black;"><?php echo $member_data['dateofbirth']; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Marital Status</b> <a class="float-right" style="color: black;"><?php echo $member_data['marital_status']; ?></a>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-outline-secondary  btn-block"><b><?php echo $member_data['membership_status']; ?></b></a>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Contact</h3>
                    </div>

                    <div class="card-body">
                        <strong><i class="fas fa-mobile mr-1"></i> Phone Numbers</strong>
                        <p class="text-muted">
                            <b>Line I : </b> <a class="float-right" style="color: black;"><?php echo $member_data['phone']; ?></a>
                        </p>
                        <p class="text-muted">
                            <b>Line II : </b> <a class="float-right" style="color: black;"><?php echo $member_data['phone_alt'] ?? "Not Available"; ?></a>
                        </p>
                        <hr>
                        <strong><i class="fas fa-mobile mr-1"></i> Email Address</strong>
                        <p class="text-muted">
                            <?php echo $member_data['email_address'] ?? "Not Available"; ?>
                        </p>
                        <hr>
                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                        <p class="text-muted">
                            <b>Nearest Bus Stop : </b> <a class="float-right" style="color: black;"><?php echo $member_data['landmark']; ?></a>
                        </p>
                        <p class="text-muted">
                            <b>Address : </b> <a class="float-right" style="color: black;"><?php echo $member_data['address']; ?></a>
                        </p>
                        <p class="text-muted">
                            <b>Area : </b> <a class="float-right" style="color: black;"><?php echo $member_data['area'] . ", " . $member_data['residence_lga'] . ", " . $member_data['residence_state'] . ", " . $member_data['residence_country']; ?></a>
                        </p>

                    </div>
                </div>

            </div>

            <div class="col-md-3">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Church Information</h3>
                    </div>
                    <div class="card-body">

                        <p class="text-muted">
                            <b>Assembly : </b> <a class="float-right" style="color: black;"><?php echo $member_data['assembly_name']; ?></a>
                        </p>
                        <p class="text-muted">
                            <b>Year Joined : </b> <a class="float-right" style="color: black;"><?php echo $member_data['year_joined']; ?></a>
                        </p>
                        <p class="text-muted">
                            <b>Sunday School Class : </b> <a class="float-right" style="color: black;"><?php echo $member_data['classname']; ?></a>
                        </p>
                        <p class="text-muted">
                            <b>Departments : </b> <a class="float-right" style="color: black;"><?php echo $member_data['dept_name']; ?></a>
                        </p>
                        <hr>
                        <strong> Additional Information</strong>
                        <hr>
                        <p class="text-muted">
                            <b>Occupation : </b> <a class="float-right" style="color: black;"><?php echo $member_data['occupation']; ?></a>
                        </p>
                        <p class="text-muted">
                            <b>State of Origin : </b> <a class="float-right" style="color: black;"><?php echo $member_data['state_of_origin']; ?></a>
                        </p>
                        <p class="text-muted">
                            <b>Nationality : </b> <a class="float-right" style="color: black;"><?php echo $member_data['nationality']; ?></a>
                        </p>
                        <p class="text-muted">
                            <b>Language : </b> <a class="float-right" style="color: black;"><?php echo $member_data['language']; ?></a>
                        </p>
                    </div>


                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Data Validation</h3>
                    </div>
                    <div class="card-body">
                        <form action="../../app/membership_module.php?hook=<?php echo base64_encode($member_data['year_joined']) ?>" method="post" enctype='multipart/form-data'>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><strong> Data Validation Status:</strong></label>
                                    <div class="input-group date">
                                        <?php
                                        if (!is_null($member_data['membership_number'])) {
                                            echo '<input type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success" disabled>';
                                        } else {
                                            echo '<input type="checkbox" name="my-checkbox" data-bootstrap-switch data-off-color="danger" data-on-color="success" disabled>';
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                            <?php
                            if (!is_null($member_data['membership_number'])) {
                                echo '
                                <a class="btn btn-outline-success  btn-block"><b> Data Validation Successful</b></a>
                                ';
                            } else {
                                echo '
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><strong> Change validation status:</strong></label>
                                    <div class="input-group date">
                                        <select type="text" class="form-control" id="data_validation" name="data_validation" required="yes" tabindex="1">
                                            <option value="">Select validation status</option>
                                            <option value="valid">Data is Valid</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="data_validation" value="'.base64_encode('data_validation_form').'" class="btn btn-outline-secondary  btn-block"><b>Submit Data Validation</b></button>
                                ';
                            }
                            ?>
                        </form>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>