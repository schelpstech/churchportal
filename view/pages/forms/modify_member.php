<section class="content">
    <div class="container-fluid">
        <div class="col-md-10 offset-1">
            <div class="row">
                <div class="col-md-4">

                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="../../storage/passport/<?php echo $member_data['passport']; ?>" alt="User profile picture">
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
                                <li class="list-group-item">
                                    <b>Assembly</b> <a class="float-right" style="color: black;"><?php echo $member_data['assembly_name']; ?></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary btn-block"><b><?php echo $member_data['membership_status']; ?></b></a>
                        </div>

                    </div>

                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#passport" data-toggle="tab">Modify Passport</a></li>
                                <li class="nav-item"><a class="nav-link" href="#bio-data" data-toggle="tab">Modify Bio-Data</a></li>
                                <li class="nav-item"><a class="nav-link" href="#contact" data-toggle="tab">Modify Contact</a></li>
                                <li class="nav-item"><a class="nav-link" href="#church_data" data-toggle="tab">Modify Church Data</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="passport">
                                    <form class="form-horizontal" action="../../app/membership_module.php" method="post" enctype='multipart/form-data'>
                                        <div class="form-group row">
                                            <div class="col-md-12" style="align-items: centre;">
                                                <p><img id="output" width="200" /></p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><strong> Change Passport:</strong></label>
                                                    <div class="input-group date" data-target-input="nearest">
                                                        <input type="file" class="form-control" id="file" name="passport" required="yes" tabindex="0" required="yes" onchange="loadFile(event)" max-size="1000" accept="image/png, image/jpg, image/jpeg" />
                                                        <div class="input-group-append">
                                                            <div class="input-group-text"><i class="fa fa-camera"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" name="modify_member_passport" value="<?php echo base64_encode('modify_member_passport_form'); ?>" class="btn-lg btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="bio-data">
                                    <form class="form-horizontal" action="../../app/membership_module.php" method="post" enctype='multipart/form-data'>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Surname </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="surname" required="yes" value="<?php echo $member_data['lastname']; ?>" tabindex="1">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-3 col-form-label">Firstname</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="firstname" required="yes" value="<?php echo $member_data['firstname']; ?>" tabindex="2">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-3 col-form-label">Othername</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="othername" required="yes" value="<?php echo $member_data['othername']; ?>" tabindex="3">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-3 col-form-label">Gender</label>
                                            <div class="col-sm-8">
                                                <select type="text" class="form-control" name="gender" required="yes" tabindex="4">
                                                    <option value="<?php echo $member_data['gender']; ?>"><?php echo $member_data['gender']; ?></option>
                                                    <option value="">Select</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-3 col-form-label">Date of Birth</label>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control" name="dateofbirth" required="yes" value="<?php echo $member_data['dateofbirth']; ?>" tabindex="5">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-3 col-form-label">Marital Status</label>
                                            <div class="col-sm-8">
                                                <select type="text" class="form-control" name="marital_status" required="yes" tabindex="6">
                                                    <option value="<?php echo $member_data['marital_status']; ?>"><?php echo $member_data['marital_status']; ?></option>
                                                    <option value="">Select Marital Status</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Widow">Widow</option>
                                                    <option value="Widower">Widower</option>
                                                    <option value="Separated">Separated</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-3 col-form-label">Language</label>
                                            <div class="col-sm-8">
                                                <select type="text" name="language[]" id="language" required="yes" class="select2" multiple="multiple" tabindex="7">
                                                    <option selected value="<?php echo $member_data['language']; ?>"><?php echo $member_data['language']; ?></option>
                                                    <option value="">Select Language</option>
                                                    <?php
                                                    if (!empty($language_list)) {
                                                        foreach ($language_list as $data) {
                                                    ?>
                                                            <option value="<?php echo $data['language'] ?>"><?php echo $data['language'] ?></option>
                                                    <?php
                                                        }
                                                    } else {
                                                        echo '<option>select language</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-3 col-form-label">Nationality</label>
                                            <div class="col-sm-8">
                                                <select type="text" class="form-control" id="nationality" name="nationality" required="yes" onchange="switch_state();" tabindex="8">
                                                    <option value="<?php echo $member_data['nationality']; ?>"><?php echo $member_data['nationality']; ?></option>
                                                    <option value="">select country</option>
                                                    <?php
                                                    if (!empty($country_list)) {
                                                        foreach ($country_list as $data) {
                                                    ?>
                                                            <option value="<?php echo $data['country'] ?>"><?php echo $data['country'] ?></option>
                                                    <?php
                                                        }
                                                    } else {
                                                        echo '<option>select country</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row" id="type-state_of_origin" style="display: none ;">
                                            <label for="inputName2" class="col-sm-3 col-form-label">State of Origin</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="state_of_origin" id="state_of_origin-text" tabindex="9" />
                                            </div>
                                        </div>
                                        <div class="form-group row" id="select-state_of_origin" style="display: none ;">
                                            <label for="inputName2" class="col-sm-3 col-form-label">State of Origin</label>
                                            <div class="col-sm-8">
                                                <select type="text" class="form-control" name="state_of_origin" id="state_of_origin-select" tabindex="9">
                                                    <option value="">select state</option>
                                                    <?php
                                                    if (!empty($state_list)) {
                                                        foreach ($state_list as $data) {
                                                    ?>
                                                            <option value="<?php echo $data['state'] ?>"><?php echo $data['state'] ?></option>
                                                    <?php
                                                        }
                                                    } else {
                                                        echo '<option>select state</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class=" offset-3 col-sm-6" style="float: right;">
                                                <button type="submit" name="modify_member_biodata" value="<?php echo base64_encode('modify_member_biodata_form'); ?>" class="btn btn-primary btn-block">Modify Bio-data</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane" id="contact">
                                    <form class="form-horizontal" action="../../app/membership_module.php" method="post" enctype='multipart/form-data'>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Phonenumber </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="phonenumber" required="yes" value="<?php echo $member_data['phone']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-3 col-form-label">Alternate Phonenumber</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="alt_phonenumber" value="<?php echo $member_data['phone_alt']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-3 col-form-label">Email Address</label>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control" name="emailaddress" value="<?php echo $member_data['email_address']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-3 col-form-label">Nearest Bus Stop</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="nearest_busstop" value="<?php echo $member_data['landmark']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-3 col-form-label">Full Address</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="full_address" value="<?php echo $member_data['address']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-3 col-form-label">Area</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="town" value="<?php echo $member_data['area']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-3 col-form-label">Country of Residence</label>
                                            <div class="col-sm-8">
                                                <select type="text" class="form-control" id="residence_country" name="residence_country" required="yes" onchange="switch_residence();" tabindex="16">
                                                    <option value="<?php echo $member_data['residence_country']; ?>"><?php echo $member_data['residence_country']; ?></option>
                                                    <option value="">select country</option>
                                                    <?php
                                                    if (!empty($country_list)) {
                                                        foreach ($country_list as $data) {
                                                    ?>
                                                            <option value="<?php echo $data['country'] ?>"><?php echo $data['country'] ?></option>
                                                    <?php
                                                        }
                                                    } else {
                                                        echo '<option>select country</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row" id="type-residence_state" style="display: none ;">
                                            <label for="inputExperience" class="col-sm-3 col-form-label">Enter State of Residence</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="residence_state" id="residence_state-text" value="<?php echo $member_data['residence_state']; ?>" tabindex="17" />
                                            </div>
                                        </div>
                                        <div class="form-group row" id="select-residence_state" style="display: none ;">
                                            <label for="inputExperience" class="col-sm-3 col-form-label">Select State of Residence </label>
                                            <div class="col-sm-8">
                                                <select type="text" class="form-control" name="residence_state" id="residence_state-select" onchange="fetch_residence_lga()" tabindex="17">
                                                    <option value="<?php echo $member_data['residence_state']; ?>"><?php echo $member_data['residence_state']; ?></option>
                                                    <option value="">select state</option>
                                                    <?php
                                                    if (!empty($state_list)) {
                                                        foreach ($state_list as $data) {
                                                    ?>
                                                            <option value="<?php echo $data['state'] ?>"><?php echo $data['state'] ?></option>
                                                    <?php
                                                        }
                                                    } else {
                                                        echo '<option>select state</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row" id="select-residence_lga" style="display: none ;">
                                            <label for="inputExperience" class="col-sm-3 col-form-label">Select LGA of Residence</label>
                                            <div class="col-sm-8">
                                                <select type="text" class="form-control" name="residence_lga" id="residence_lga-select" tabindex="18">
                                                    <option value="<?php echo $member_data['residence_lga']; ?>"><?php echo $member_data['residence_lga']; ?></option>
                                                    <option value="">Select</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row" id="type-residence_lga" style="display: none ;">
                                            <label for="inputExperience" class="col-sm-3 col-form-label">Enter LGA of Residence</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="residence_lga" id="residence_lga-text" value="<?php echo $member_data['residence_lga']; ?>" tabindex="18" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class=" offset-3 col-sm-6" style="float: right;">
                                                <button type="submit" name="modify_member_contact" value="<?php echo base64_encode('modify_member_contact_form'); ?>" class="btn btn-primary btn-block">Modify Contact Information</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane" id="church_data">
                                <form class="form-horizontal" action="../../app/membership_module.php" method="post" enctype='multipart/form-data'>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Membership Year </label>
                                            <div class="col-sm-8">
                                                <select type="input" class="form-control" id="year_joined" name="year_joined" required="yes" tabindex="10">
                                                    <option value="<?php echo $member_data['year_joined']; ?>"><?php echo $member_data['year_joined']; ?></option>
                                                    <option value="">Select Year Joined</option>
                                                    <?php
                                                    $i = 1994;
                                                    $y = date("Y");
                                                    while ($i < $y) {
                                                        $i = $i + 1;
                                                    ?>
                                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-3 col-form-label">Membership Status</label>
                                            <div class="col-sm-8">
                                                <select type="text" class="form-control" id="member_status" name="member_status" required="yes" tabindex="11">
                                                    <option value="<?php echo $member_data['membership_status']; ?>"><?php echo $member_data['membership_status']; ?></option>
                                                    <option value="">Select Status</option>
                                                    <option value="Member">Member</option>
                                                    <option value="Worker">Worker</option>
                                                    <option value="Minister">Minister</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-3 col-form-label">Current Assembly</label>
                                            <div class="col-sm-8">
                                                <select type="text" class="form-control" id="current_assembly" name="current_assembly" tabindex="12" onchange="fetch_sow()">
                                                    <option value="<?php echo $member_data['assembly_id']; ?>"><?php echo $member_data['assembly_name']; ?></option>
                                                    <option value="">Select Assembly</option>
                                                    <?php
                                                    if (!empty($assembly_list)) {
                                                        foreach ($assembly_list as $data) {
                                                    ?>
                                                            <option value="<?php echo $data['assembly_id'] ?>"><?php echo $data['assembly_name'] ?></option>
                                                    <?php
                                                        }
                                                    } else {
                                                        echo '<option>select assembly</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-3 col-form-label">Occupation</label>
                                            <div class="col-sm-8">
                                                <select type="text" class="form-control" id="occupation" name="occupation" required="yes" tabindex="11">
                                                    <option value="<?php echo $member_data['occup_id']; ?>"><?php echo $member_data['occupation']; ?></option>
                                                    <option value="">Select Status</option>
                                                    <?php
                                                    if (!empty($occupation_list)) {
                                                        foreach ($occupation_list as $data) {
                                                    ?>
                                                            <option value="<?php echo $data['occup_id'] ?>"><?php echo $data['occupation'] ?></option>
                                                    <?php
                                                        }
                                                    } else {
                                                        echo '<option>select Occupation</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-3 col-form-label">Department</label>
                                            <div class="col-sm-8">
                                                <select type="text" class="form-control" id="department" name="department" tabindex="12">
                                                    <option value="<?php echo $member_data['department_id']; ?>"><?php echo $member_data['dept_name']; ?></option>
                                                    <option value="">Select Department</option>
                                                    <option value="10">Children</option>
                                                    <option value="14">Men</option>
                                                    <option value="17">Teenager</option>
                                                    <option value="13">Women</option>
                                                    <option value="2">Youth</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-3 col-form-label">Sunday School</label>
                                            <div class="col-sm-8">
                                                <select type="text" class="form-control" id="sunday_school" name="sunday_school" required="yes" tabindex="10">
                                                    <option value="<?php echo $member_data['classid']; ?>"><?php echo $member_data['classname']; ?></option>
                                                    <option value="">Select</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class=" offset-3 col-sm-6" style="float: right;">
                                                <button type="submit" name="modify_member_church_data" value="<?php echo base64_encode('modify_member_church_data_form'); ?>" class="btn btn-primary btn-block">Modify Church Data</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>