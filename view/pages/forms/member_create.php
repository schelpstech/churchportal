<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title"></h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="bs-stepper">
                    <div class="bs-stepper-header" role="tablist">
                        <div class="step" data-target="#passport-part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="passport-part" id="passport-part-trigger">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label">Passport Capture</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#biodata-part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="biodata-part" id="biodata-part-trigger">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">Bio-data</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#contact-part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="contact-part" id="contact-part-trigger">
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label">Contact Details</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#church-part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="church-part" id="church-part-trigger">
                                <span class="bs-stepper-circle">4</span>
                                <span class="bs-stepper-label">Church Membership Data</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#preview-part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="preview-part" id="preview-part-trigger">
                                <span class="bs-stepper-circle">5</span>
                                <span class="bs-stepper-label">Preview Form</span>
                            </button>
                        </div>
                    </div>
                    <form  action="../../app/membership_module.php" method="post"  enctype='multipart/form-data'>
                        <div class="bs-stepper-content">

                            <div id="passport-part" class="content" role="tabpanel" aria-labelledby="passport-part-trigger">
                                <div class="row">
                                    <div class="col-md-12" style="align-items: centre;">
                                        <p><img id="output" width="200" /></p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Passport:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="file" class="form-control" id="file" name="passport" required="yes" tabindex="0" required="yes" onchange="loadFile(event)" max-size="1000" accept="image/png, image/jpg, image/jpeg" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-camera"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" style="float: right;" hidden class="btn btn-lg  btn-warning" onclick="stepper.next()" id="next_biodata_button"><strong>Next :: Biodata Information </strong></button>
                            </div>
                            <div id="biodata-part" class="content" role="tabpanel" aria-labelledby="biodata-part-trigger">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Surname:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="text" class="form-control" id="surname" name="surname" required="yes" tabindex="1" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-users"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> First Name:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="text" class="form-control" id="firstname" name="firstname" required="yes" tabindex="2" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-user-circle"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Other Name:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="text" class="form-control" id="othername" name="othername" required="yes" tabindex="3" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-user-plus"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Gender:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" class="form-control" id="gender" name="gender" required="yes" tabindex="4">
                                                    <option value="">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fas fa-restroom"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Date of Birth:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="date" class="form-control" id="dateofbirth" name="dateofbirth" required="yes" tabindex="5" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Marital Status:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" class="form-control" id="marital_status" name="marital_status" required="yes" tabindex="6">
                                                    <option value="">Select Marital Status</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Widow">Widow</option>
                                                    <option value="Widower">Widower</option>
                                                    <option value="Separated">Separated</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-handshake"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Language Preferences:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" name="language[]" id="language" required="yes" class="select2" multiple="multiple" style="width: 100%;" tabindex="7">
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
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-comment"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Nationality:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" class="form-control" id="nationality" name="nationality" required="yes" onchange="switch_state();" tabindex="8">
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
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-map-marker-alt"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group" id="type-state_of_origin" style="display: none ;">
                                            <label><small><strong> Enter State of Origin :</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="text" class="form-control" id="state_of_origin-text" tabindex="9" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fas fa-route"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" id="select-state_of_origin" style="display: none ;">
                                            <label><small><strong> Select State of Origin :</strong></small></label>
                                            <div class="input-group date">
                                                <select type="text" class="form-control" id="state_of_origin-select" tabindex="9">
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
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fas fa-route"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <button style="float: left;" class="btn btn-warning btn-lg" onclick="stepper.previous()"><strong> Previous </strong></button>
                                <a style="float: right;" class="btn btn-app btn-warning" onclick="validate_biodata()" id="validator_button"><i class="far fa-question-circle"></i> Validate</a>
                                <button type="button" style="float: right;" class="btn btn-lg  btn-warning" hidden onclick="stepper.next()" id="next_button"><strong>Next :: Contact Information </strong></button>
                            </div>
                            <div id="contact-part" class="content" role="tabpanel" aria-labelledby="contact-part-trigger">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Phone number:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="tel" class="form-control" id="phonenumber" name="phonenumber" required="yes" tabindex="10" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-mobile"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Alternate Phonenumber:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="tel" class="form-control" id="alt_phonenumber" name="alt_phonenumber" tabindex="11" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-phone"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Email Address:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="email" class="form-control" id="emailaddress" name="emailaddress" tabindex="12" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><small><strong> Nearest Bus Stop:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="text" class="form-control" id="nearest_busstop" name="nearest_busstop" required="yes" tabindex="13" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-bus-alt"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><small><strong> Address:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="text" class="form-control" id="full_address" name="full_address" required="yes" tabindex="14" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-compass"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><small><strong> Town / Area</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="text" class="form-control" id="town" name="town" tabindex="15" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-map-marked"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong> Country of Residence:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" class="form-control" id="residence_country" name="residence_country" required="yes" onchange="switch_residence();" tabindex="16">
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
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-map-marker-alt"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group" id="type-residence_state" style="display: none ;">
                                            <label><small><strong> Enter State of Residence:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="text" class="form-control" id="residence_state-text" tabindex="17" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fas fa-route"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" id="select-residence_state" style="display: none ;">
                                            <label><small><strong> Select State of Residence :</strong></small></label>
                                            <div class="input-group date">
                                                <select type="text" class="form-control" id="residence_state-select" onchange="fetch_residence_lga()" tabindex="17">
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
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fas fa-route"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group" id="select-residence_lga" style="display: none ;">
                                            <label>Select LGA of Residence :</label>
                                            <div class="input-group date">
                                                <select type="text" class="form-control" id="residence_lga-select" tabindex="18">
                                                    <option value="">Select</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fas fa-thumbtack"></i></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group" id="type-residence_lga" style="display: none ;">
                                            <label>Enter LGA of Residence :</label>
                                            <div class="input-group date" id="assemblyaddress" data-target-input="nearest">
                                                <input type="text" class="form-control" id="residence_lga-text" tabindex="18" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fas fa-thumbtack"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br><br>

                                <button style="float: left;" class="btn btn-warning btn-lg" onclick="stepper.previous()"><strong>Previous</strong></button>
                                <a style="float: right;" class="btn btn-app btn-warning" onclick="validate_contact()" id="validator_contact_button"><i class="far fa-question-circle"></i> Validate</a>
                                <button type="button" style="float: right;" class="btn btn-lg  btn-warning" hidden onclick="stepper.next()" id="next_contact_button"><strong>Next :: Church Data </strong></button>
                            </div>
                            <div id="church-part" class="content" role="tabpanel" aria-labelledby="church-part-trigger">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><small><strong> Year Joined:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="input" class="form-control" id="year_joined" name="year_joined" required="yes" tabindex="10">
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
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-bus-alt"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong>Current Membership Status:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" class="form-control" id="member_status" name="member_status" required="yes" tabindex="11">
                                                    <option value="">Select Status</option>
                                                    <option value="Member">Member</option>
                                                    <option value="Worker">Worker</option>
                                                    <option value="Minister">Minister</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-compass"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label><small><strong> Current Assembly</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" class="form-control" id="current_assembly" name="current_assembly" tabindex="12" onchange="fetch_sow()">
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
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-map-marked"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><small><strong>Occupation:</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" class="form-control" id="occupation" name="occupation" required="yes" tabindex="11">
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
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fas fa-tools"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label><small><strong> Department</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" class="form-control" id="department" name="department" tabindex="12">
                                                    <option value="">Select Department</option>
                                                    <option value="10">Children</option>
                                                    <option value="14">Men</option>
                                                    <option value="17">Teenager</option>
                                                    <option value="13">Women</option>
                                                    <option value="2">Youth</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-map-marked"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><small><strong> Sunday School Class</strong></small></label>
                                            <div class="input-group date" data-target-input="nearest">
                                                <select type="text" class="form-control" id="sunday_school" name="sunday_school" required="yes" tabindex="10">
                                                    <option value="">Select</option>

                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-chalkboard-teacher"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <button style="float: left;" class="btn btn-warning btn-lg" onclick="stepper.previous()"><strong> Previous </strong></button>
                                <a style="float: right;" class="btn btn-app btn-warning" onclick="validate_church()" id="validator_church_button"><i class="far fa-question-circle"></i> Validate</a>
                                <button type="button" style="float: right;" class="btn btn-lg  btn-info" hidden onclick="stepper.next()" id="next_preview_button"><strong>Next :: Preview Form </strong></button>
                            </div>

                            <div id="preview-part" class="content" role="tabpanel" aria-labelledby="preview-part-trigger">
                                <div class="row">
                                    <div class="col-md-12" style="align-items: centre;">
                                        <p><img id="passport" width="100" /></p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_surname" class="col-sm-4 col-form-label"><small>Surname</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_surname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_firstname" class="col-sm-4 col-form-label"><small>Firstname</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_firstname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_othername" class="col-sm-4 col-form-label"><small>Othername</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_othername">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_gender" class="col-sm-4 col-form-label"><small>Gender</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_gender">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_dob" class="col-sm-4 col-form-label"><small>Date of Birth</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_dob">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_marital" class="col-sm-4 col-form-label"><small>Marital Status</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_marital">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group row">
                                            <label for="preview_language" class="col-sm-3 col-form-label"><small>Language</small></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" disabled id="preview_language">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <label for="preview_nation" class="col-sm-4 col-form-label"><small>Nationality</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_nation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_origin" class="col-sm-4 col-form-label"><small>State of Origin</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_origin">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_phone" class="col-sm-4 col-form-label"><small>Phone number</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_alt_phone" class="col-sm-4 col-form-label"><small>Alt - Phone</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_alt_phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_email" class="col-sm-4 col-form-label"><small>Email Address</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_email">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label for="preview_address" class="col-sm-2 col-form-label"><small>Address</small></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" disabled id="preview_address">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_bstop" class="col-sm-4 col-form-label"><small>Nearest B/Stop</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_bstop">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_lga" class="col-sm-4 col-form-label"><small>Residence - LGA </small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_lga">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_state" class="col-sm-4 col-form-label"><small>Residence - State </small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_state">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_country" class="col-sm-4 col-form-label"><small>Residence - Country</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_country">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_year_joined" class="col-sm-4 col-form-label"><small>Year Joined</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_year_joined">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_mem_status" class="col-sm-4 col-form-label"><small>Membership Status</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_mem_status">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_assembly" class="col-sm-4 col-form-label"><small>Current Assembly</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_assembly">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_occupation" class="col-sm-4 col-form-label"><small>Occupation</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_occupation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_department" class="col-sm-4 col-form-label"><small>Department</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_department">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="preview_sow" class="col-sm-4 col-form-label"><small>Sunday School</small></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" disabled id="preview_sow">
                                            </div>
                                        </div>
                                    </div>
                                
                                   <button style="float: left;" class="btn btn-warning btn-lg" onclick="stepper.previous()"><strong> Previous </strong></button>
                                
                                <button  style="float: right;" type="submit"  name="create_new_member" value="<?php echo base64_encode('create_new_member_form');?>"  style="float: right;" class="btn btn-lg  btn-success" onclick="stepper.next()" id="next_button"><strong>Submit Membership Form </strong></button>

                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="card-footer" style="text-align: center;">
                This form enrols new members into the database of the church
            </div>
        </div>

    </div>
</div>