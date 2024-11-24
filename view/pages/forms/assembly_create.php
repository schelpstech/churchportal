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
                                    <input type="text" class="form-control" name="assemblyname" required="yes" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-synagogue"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Assembly Address - Full Address:</label>
                                <div class="input-group date" id="assemblyaddress" data-target-input="nearest">
                                    <input type="text" class="form-control" name="assemblyaddress" required="yes" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-map-signs"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Assembly Address - Country :</label>
                                <div class="input-group date" data-target-input="nearest">
                                    <select type="text" class="form-control" id="assembly_country" name="assembly_country" required="yes" onchange="switch_location();">
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
                                    <input type="text" class="form-control" id="assembly_state-text" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-route"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" id="type-lga" style="display: none ;">
                                <label>Assembly Address - Enter LGA :</label>
                                <div class="input-group date" id="assemblyaddress" data-target-input="nearest">
                                    <input type="text" class="form-control" id="assembly_lga-text" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-thumbtack"></i></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Selectbox in State and LGA-->

                            <div class="form-group" id="select-state" style="display: none ;">
                                <label>Assembly Address - Select State :</label>
                                <div class="input-group date">
                                    <select type="text" class="form-control" id="assembly_state-select" onchange="fetchlga()">
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
                                    <select type="text" class="form-control" id="assembly_lga-select">

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
                                    <input type="month" name="year_established" class="form-control float-right" required="yes">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <button type="submit" name="create_assembly" value="<?php echo base64_encode('assembly_creator_form'); ?>" class="btn btn-info btn-block">Create New Assembly</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-footer">
                        This form is used to add new assembly
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>