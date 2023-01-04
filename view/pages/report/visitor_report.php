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
                                        <label><small><strong> Surname:</strong></small> </label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <h5><?php echo $selected_visitor['surname'] ?? ""; ?></h5>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> First Name:</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <h5><?php echo $selected_visitor['firstname'] ?? ""; ?></h5>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Other Name:</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <h5><?php echo $selected_visitor['othername'] ?? ""; ?></h5>

                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Gender:</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <h5><?php echo $selected_visitor['gender'] ?? ""; ?></h5>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Marital Status:</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <h5><?php echo $selected_visitor['marital_status'] ?? ""; ?></h5>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong>Occupation:</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <h5><?php echo $selected_visitor['occupation'] ?? ""; ?></h5>

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
                                            <h5><?php echo $selected_visitor['phone'] ?? ""; ?></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Alternate Phonenumber:</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <h5><?php echo $selected_visitor['phone_alt'] ?? ""; ?></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Email Address:</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <h5><?php echo $selected_visitor['email'] ?? ""; ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Nearest Bus Stop:</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <h5><?php echo $selected_visitor['landmark'] ?? ""; ?></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Address:</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <h5><?php echo $selected_visitor['address'] ?? ""; ?></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Town / Area</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <h5><?php echo $selected_visitor['town'] ?? ""; ?></h5>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Country of Residence:</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <h5><?php echo $selected_visitor['country'] ?? ""; ?></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group" id="type-residence_state">
                                        <label><small><strong>State of Residence:</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <h5><?php echo $selected_visitor['state'] ?? ""; ?></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">

                                    <div class="form-group" id="type-residence_lga">
                                        <label><small><strong> LGA of Residence :</small></strong> </label>
                                        <div class="input-group date" id="assemblyaddress" data-target-input="nearest">
                                            <h5><?php echo $selected_visitor['lga'] ?? ""; ?></h5>
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
                                            <h5><?php echo $selected_visitor['invited_by'] ?? ""; ?></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Service Date:</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <h5><?php echo $selected_visitor['date'] ?? ""; ?></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Department</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <h5><?php echo $selected_visitor['dept_name'] ?? ""; ?></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Select Assembly</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <h5><?php echo $selected_visitor['assembly_name'] ?? ""; ?></h5>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><small><strong> Service Type</strong></small></label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <h5><?php echo $selected_visitor['service'] ?? ""; ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>