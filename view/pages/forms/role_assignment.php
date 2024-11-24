<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-3">
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
                                <label>Selected Member:</label>
                                <div class="input-group date" data-target-input="nearest">
                                    <select type="text" class="form-control" name="selected_minister" required="yes">
                                        <option value="<?php echo $member_data['form_number'] ?>"><?php echo ucfirst($member_data['title']. ' ' .$member_data['lastname'] . ' ' . $member_data['firstname'] . ' ' . $member_data['othername']) ?></option>
                                        
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-map-marker-alt"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Select Role Type:</label>
                                <div class="input-group date" data-target-input="nearest">
                                    <select type="text" class="form-control" id="role_type" name="role_type" required="yes" onchange="switch_assignment_details()">
                                        <option value="">select </option>
                                        <option value="1">National</option>
                                        <option value="2">Regional</option>
                                        <option value="3">Assembly</option>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-map-marker-alt"></i></div>
                                    </div>
                                </div>
                            </div>

                            

                            <div class="form-group" id="region_role_box" style="display: none;">
                                <label>Select Region :</label>
                                <div class="input-group date" data-target-input="nearest">
                                    <select type="text" class="form-control" name="region_role" id="region_role">
                                        <option value="">select </option>
                                        <?php
                                        if (!empty($region_list)) {
                                            foreach ($region_list as $data) {
                                        ?>
                                                <option value="<?php echo $data['region_id'] ?>"><?php echo $data['region_name'] ?></option>
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
                            <div class="form-group" id="assembly_role_box" style="display: none;">
                                <label>Select Assembly:</label>
                                <div class="input-group date" data-target-input="nearest">
                                    <select type="text" class="form-control" name="assembly_name" id="assembly_role">
                                        <option value="">select </option>
                                        <?php
                                        if (!empty($assembly_list)) {
                                            foreach ($assembly_list as $data) {
                                        ?>
                                                <option value="<?php echo $data['assembly_id'] ?>"><?php echo $data['assembly_name'] ?></option>
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

                            

                            <div class="form-group" id="national_role_box" style="display: none;">
                                <label>Select Role (National):</label>
                                <div class="input-group date" data-target-input="nearest">
                                    <select type="text" class="form-control" id="selected_national_role" name="role_type" >
                                        <option value="">select </option>
                                        <option value="1">General Overseer</option>
                                        <option value="2">Deputy General Overseer</option>
                                        <option value="2">Assistant General Overseer</option>
                                        <option value="3">Governing Council Member</option>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-map-marker-alt"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" id="region_role_box1" style="display: none;">
                                <label>Select Role (Regional):</label>
                                <div class="input-group date" data-target-input="nearest">
                                    <select type="text" class="form-control" id="selected_assembly_role" name="role_type">
                                        <option value="">select </option>
                                        <option value="1">Regional Overseer</option>
                                        <option value="2">Assistant Regional Overseer</option>
                                        <option value="3">Regional Head of Department</option>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-map-marker-alt"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" id="assembly_role_box1" style="display: none;">
                                <label>Select Role (Assembly):</label>
                                <div class="input-group date" data-target-input="nearest">
                                    <select type="text" class="form-control" id="selected_assembly_role" name="assembly_role">
                                        <option value="">select role</option>
                                        <option value="">Head Pastor</option>
                                        <option value="">Assistant Head Pastor</option>
                                        <option value="">Associate Minister</option>
                                        <option value="3">Assembly Head of Department</option>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-map-marker-alt"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <button type="submit" name="create_assembly" value="<?php echo base64_encode('assembly_creator_form'); ?>" class="btn btn-info btn-block">Assign Role</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-footer">
                        This form is used to assign role to minister in assembly
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>