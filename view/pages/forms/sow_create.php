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
                    <form action="../../app/sow_module.php" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Select Assembly :</label>
                                <div class="input-group date" data-target-input="nearest">
                                    <select type="text" class="form-control" id="sow_assembly" name="sow_assembly" required="yes">
                                        <option value="">select assembly</option>
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
                                        <div class="input-group-text"><i class="fas fa-school"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Type in State and LGA-->
                            <div class="form-group" id="type-state">
                                <label>Sunday School Classname </label>
                                <div class="input-group date" data-target-input="nearest">
                                    <input type="text" class="form-control" id="sow_class_name" name="sow_class_name"/>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-chalkboard-teacher"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" id="select-lga">
                                <label>Class Description</label>
                                <div class="input-group date">
                                    <input type="text" class="form-control" id="sow_class_description" name="sow_class_description"/>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-microscope"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <button type="submit" name="create_sow_class" value="<?php echo base64_encode('create_sow_class_form'); ?>" class="btn btn-info btn-block">Create New Sunday School Class</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-footer">
                        This form is used to add new Sunday School Class
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>