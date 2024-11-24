<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-2">
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
                    <form action="../../app/assembly_module.php" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Assembly Name :</label>
                                <div class="input-group date" id="assemblyname" data-target-input="nearest">
                                    <input type="text" class="form-control" value="<?php if (!empty($assembly_details['assembly_name'])) {
                                                                                        echo $assembly_details['assembly_name'];
                                                                                    } else {
                                                                                        echo "";
                                                                                    } ?>" name="assemblyname" required="yes" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-synagogue"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Assembly Address - Full Address:</label>
                                <div class="input-group date" id="assemblyaddress" data-target-input="nearest">
                                    <input type="text" class="form-control" name="assemblyaddress" required="yes" value="<?php if (!empty($assembly_details['assembly_address'])) {
                                                                                                                                echo $assembly_details['assembly_address'];
                                                                                                                            } else {
                                                                                                                                echo "";
                                                                                                                            } ?>" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-map-signs"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Assembly Address - Country :</label>
                                <div class="input-group date" data-target-input="nearest">
                                    <select type="text" class="form-control" id="assembly_country" name="assembly_country" required="yes" onchange="switch_location();">
                                        <option value="<?php if (!empty($assembly_details['assembly_country'])) {
                                                            echo $assembly_details['assembly_country'];
                                                        } else {
                                                            echo "";
                                                        } ?>"><?php if (!empty($assembly_details['assembly_country'])) {
                                                                    echo $assembly_details['assembly_country'];
                                                                } else {
                                                                    echo "";
                                                                } ?></option>
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
                            <!-- Type in State and LGA-->
                            <div class="form-group" id="type-state" style="display: none ;">
                                <label>Assembly Address - Enter State / Province :</label>
                                <div class="input-group date" data-target-input="nearest">
                                    <input type="text" class="form-control" name="assembly_state" id="assembly_state-text" value="<?php if (!empty($assembly_details['assembly_state'])) {
                                                                                                                                        echo $assembly_details['assembly_state'];
                                                                                                                                    } else {
                                                                                                                                        echo "";
                                                                                                                                    } ?>" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-route"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" id="type-lga" style="display: none ;">
                                <label>Assembly Address - Enter LGA :</label>
                                <div class="input-group date" id="assemblyaddress" data-target-input="nearest">
                                    <input type="text" class="form-control" id="assembly_lga-text" name="assembly_lga" value="<?php if (!empty($assembly_details['assembly_lga'])) {
                                                                                                                                    echo $assembly_details['assembly_lga'];
                                                                                                                                } else {
                                                                                                                                    echo "";
                                                                                                                                } ?>" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-thumbtack"></i></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Selectbox in State and LGA-->

                            <div class="form-group" id="select-state" style="display: none ;">
                                <label>Assembly Address - Select State :</label>
                                <div class="input-group date">
                                    <select type="text" class="form-control" name="assembly_state" id="assembly_state-select" onchange="fetchlga()">
                                        <option value="<?php if (!empty($assembly_details['assembly_state'])) {
                                                            echo $assembly_details['assembly_state'];
                                                        } else {
                                                            echo "";
                                                        } ?>"><?php if (!empty($assembly_details['assembly_state'])) {
                                                                    echo $assembly_details['assembly_state'];
                                                                } else {
                                                                    echo "";
                                                                } ?></option>
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

                            <div class="form-group" id="select-lga" style="display: none ;">
                                <label>Assembly Address - Select LGA :</label>
                                <div class="input-group date">
                                    <select type="text" class="form-control" id="assembly_lga-select" name="assembly_lga">
                                        <option value="<?php if (!empty($assembly_details['assembly_lga'])) {
                                                            echo $assembly_details['assembly_lga'];
                                                        } else {
                                                            echo "";
                                                        } ?>"><?php if (!empty($assembly_details['assembly_lga'])) {
                                                                    echo $assembly_details['assembly_lga'];
                                                                } else {
                                                                    echo "";
                                                                } ?></option>


                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-thumbtack"></i></div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Year Established:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="month" name="year_established" class="form-control float-right" required="yes" value="<?php if (!empty($assembly_details['assembly_year'])) {
                                                                                                                                            echo $assembly_details['assembly_year'];
                                                                                                                                        } else {
                                                                                                                                            echo "";
                                                                                                                                        } ?>">
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-6">
                                    <button type="submit" name="modify_assembly" value="<?php echo base64_encode('modify_assembly_form'); ?>" class="btn btn-info btn-block">Modify Assembly Details</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#modal-danger">Delete Assembly Details</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-footer">
                        This form is used to modify selected assembly
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modal-danger">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Assembly Record for <?php echo $assembly_details['assembly_name']; ?> </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>You are about to delete all information for <?php echo $assembly_details['assembly_name']; ?> </p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <form action="../../app/assembly_module.php" method="post">
                        <button type="submit" name="delete_assembly" value="<?php echo base64_encode('delete_assembly_form'); ?>" class="btn btn-outline-light">Proceed to Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>