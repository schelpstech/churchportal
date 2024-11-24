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
                                    <select type="text"  class="form-control"  id="sow_assembly" name="sow_assembly" required="yes">
                                        <option value="<?php echo $sow_details['assemblyid'] ?>"><?php echo $sow_details['assembly_name'] ?></option>
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
                                    <input type="text" class="form-control" id="sow_class_name" name="sow_class_name" value="<?php echo $sow_details['classname'] ?>"/>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-chalkboard-teacher"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" id="select-lga">
                                <label>Class Description</label>
                                <div class="input-group date">
                                    <input type="text" class="form-control" id="sow_class_description" name="sow_class_description" value="<?php echo $sow_details['description']?>"/>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-microscope"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    
                                </div>

                                <div class="col-6">
                                <button type="submit" style="float: left;" name="edit_sow_class" value="<?php echo base64_encode('edit_sow_class_form'); ?>" class="btn btn-info btn-block">Modify Sunday School Class Details</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" style="float: left;" class="btn btn-danger btn-block" data-toggle="modal" data-target="#modal-danger">Delete Sunday School Class </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-footer">
                        This form is used to modify Details of a Sunday School Class
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modal-danger">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Assembly Record for <?php echo $sow_details['classname'] ; ?> </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>You are about to delete all information for <?php echo $sow_details['classname'] ; ?> </p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <form action="../../app/sow_module.php" method="post">
                        <button type="submit" name="delete_sow" value="<?php echo base64_encode('delete_sow_form'); ?>" class="btn btn-outline-light">Proceed to Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>