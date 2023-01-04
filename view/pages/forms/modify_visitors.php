<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Modify Visitor's Information</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="../../app/visitors_module.php" method="post">
                        <div class="card-body">
                            <hr>
                            <h4>Bio-data</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Surname:</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <input type="text" class="form-control" id="surname" name="surname" required="yes" value="<?php echo $selected_visitor['surname'] ?? ""; ?>" tabindex="1" />
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
                                            <input type="text" class="form-control" id="firstname" name="firstname" required="yes" value="<?php echo $selected_visitor['firstname'] ?? ""; ?>" tabindex="2" />
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
                                            <input type="text" class="form-control" id="othername" name="othername" value="<?php echo $selected_visitor['othername'] ?? ""; ?>" required="yes" tabindex="3" />
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fa fa-user-plus"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Gender:</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <select type="text" class="form-control" id="gender" name="gender" required="yes" tabindex="4">
                                                <option value="<?php echo $selected_visitor['gender'] ?? ""; ?>"><?php echo $selected_visitor['gender'] ?? ""; ?></option>
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
                                        <label><small><strong> Marital Status:</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <select type="text" class="form-control" id="marital_status" name="marital_status" required="yes" tabindex="5">
                                                <option value="<?php echo $selected_visitor['marital_status'] ?? ""; ?>"><?php echo $selected_visitor['marital_status'] ?? ""; ?></option>
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

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong>Occupation:</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <select type="text" class="form-control" id="occupation" name="occupation" required="yes" tabindex="6">
                                                <option value="<?php echo $selected_visitor['occup_id'] ?? ""; ?>"><?php echo $selected_visitor['occupation'] ?? ""; ?></option>
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
                            </div>
                            <hr>
                            <h4>Contact Information</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Phone number:</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <input type="tel" class="form-control" id="phonenumber" name="phonenumber" value="<?php echo $selected_visitor['phone'] ?? ""; ?>" required="yes" tabindex="7" />
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
                                            <input type="tel" class="form-control" id="alt_phonenumber" value="<?php echo $selected_visitor['phone_alt'] ?? ""; ?>" name="alt_phonenumber" tabindex="8" />
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
                                            <input type="email" class="form-control" id="emailaddress" value="<?php echo $selected_visitor['email'] ?? ""; ?>" name="emailaddress" tabindex="9" />
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
                                            <input type="text" class="form-control" id="nearest_busstop" name="nearest_busstop" value="<?php echo $selected_visitor['landmark'] ?? ""; ?>" required="yes" tabindex="10" />
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
                                            <input type="text" class="form-control" id="full_address" name="full_address" value="<?php echo $selected_visitor['address'] ?? ""; ?>" required="yes" tabindex="11" />
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
                                            <input type="text" class="form-control" id="town" name="town" value="<?php echo $selected_visitor['town'] ?? ""; ?>" required="yes" tabindex="12" />
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fa fa-map-marked"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Country of Residence:</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <select type="text" class="form-control" id="residence_country" name="residence_country" required="yes" onchange="switch_residence();" tabindex="13">
                                                <option value="<?php echo $selected_visitor['country'] ?? ""; ?>"><?php echo $selected_visitor['country'] ?? ""; ?></option>
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
                                            <input type="text" class="form-control" id="residence_state-text" name="residence_state" value="<?php echo $selected_visitor['state'] ?? ""; ?>" tabindex="14" />
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-route"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" id="select-residence_state">
                                        <label><small><strong> Select State of Residence :</strong></small></label>
                                        <div class="input-group date">
                                            <select type="text" class="form-control" id="residence_state-select" name="residence_state"  onchange="fetch_residence_lga()" tabindex="14">
                                                <option value="<?php echo $selected_visitor['state'] ?? ""; ?>"><?php echo $selected_visitor['state'] ?? ""; ?></option>
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
                                    <div class="form-group" id="select-residence_lga">
                                        <label><small><strong> Select LGA of Residence :</small></strong> </label>
                                        <div class="input-group date">
                                            <select type="text" class="form-control" id="residence_lga-select"  name="residence_lga" tabindex="15">
                                                <option value="<?php echo $selected_visitor['lga'] ?? ""; ?>"><?php echo $selected_visitor['lga'] ?? ""; ?></option>
                                                <option value="">Select</option>
                                            </select>
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-thumbtack"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group" id="type-residence_lga" style="display: none ;">
                                        <label><small><strong> Enter LGA of Residence :</small></strong> </label>
                                        <div class="input-group date" id="assemblyaddress" data-target-input="nearest">
                                            <input type="text" class="form-control"  name="residence_lga" value="<?php echo $selected_visitor['lga'] ?? ""; ?>" id="residence_lga-text" tabindex="15" />
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-thumbtack"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h4>Official Use Only</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Invited by:</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <input type="text" class="form-control" id="invited_by" name="invited_by" value="<?php echo $selected_visitor['invited_by'] ?? ""; ?>" tabindex="16" />
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fa fa-map-marked"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Service Date:</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <input type="date" class="form-control" id="service_date" name="service_date" value="<?php echo $selected_visitor['date'] ?? ""; ?>" tabindex="17" />
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Department</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <select type="text" class="form-control" id="department" name="department" tabindex="18">
                                                <option value="<?php echo $selected_visitor['dept_id'] ?? ""; ?>"><?php echo $selected_visitor['dept_name'] ?? ""; ?></option>
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

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Select Assembly</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <select type="text" class="form-control" id="current_assembly" name="current_assembly" tabindex="19" required="yes">
                                                <option value="<?php echo $selected_visitor['assembly_id'] ?? ""; ?>"><?php echo $selected_visitor['assembly_name'] ?? ""; ?></option>
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

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Service Type</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <select type="text" class="form-control" id="service_type" name="service_type" tabindex="20">
                                                <option value="<?php echo $selected_visitor['service'] ?? ""; ?>"><?php echo $selected_visitor['service'] ?? ""; ?></option>
                                                <option value="">Select Service Type</option>
                                                <option value="Assembly">Assembly Service</option>
                                                <option value="Regional">Regional Service</option>
                                                <option value="National">National Service</option>
                                                <option value="Mid-Week">Mid-Week Service</option>
                                            </select>
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fa fa-map-marked"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <button type="button" tabindex="21" class="btn btn-info btn-block" onclick="validate_visitors()">Validate Visitor's Information</button>
                                </div>
                            </div>

                            <div class="modal fade" id="modal_submit_form">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-default">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Save Visitor's Information </h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>You are about to modify inputed information to Visitor's Log</p>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" name="visitors_modify" value="<?php echo base64_encode('visitors_modify_form'); ?>" class="btn btn-outline-success">Submit Form</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-footer">
                        This form is used to add new visitor's record
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>