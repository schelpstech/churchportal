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
                    <form action="../../app/sermon_module.php" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label> Sermon Title :</label>
                                <div class="input-group date" id="sermon_title" data-target-input="nearest">
                                    <input type="text" class="form-control" name="sermon_title" value="<?php echo $selected_sermon['title'] ?>" required="yes" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-map-signs"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Sermon Preacher :</label>
                                <div class="input-group date" id="sermon_preacher" data-target-input="nearest">
                                    <input type="text" class="form-control" name="sermon_preacher" value="<?php echo $selected_sermon['preacher'] ?>" required="yes" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Assembly :</label>
                                <div class="input-group date" data-target-input="nearest">
                                    <select type="text" class="form-control" id="sermon_assembly" name="sermon_assembly" required="yes">
                                        <option value="<?php echo $selected_sermon['assembly_id'] ?>"><?php echo $selected_sermon['assembly_name'] ?></option>
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
                                        <div class="input-group-text"><i class="fa fa-map-marker-alt"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Sermon Type :</label>
                                <div class="input-group date" data-target-input="nearest">
                                    <select type="text" class="form-control" id="sermon_type" name="sermon_type" required="yes">
                                        <option value="<?php echo $selected_sermon['sermon_type'] ?>"><?php echo ucwords($selected_sermon['sermon_type']) ?></option>
                                        <option value="">select type</option>
                                        <option value="video">Video Message</option>
                                        <option value="audio">Audio Message</option>

                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-map-marker-alt"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Sermon Date :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="date" name="sermon_date" class="form-control float-right" value="<?php echo $selected_sermon['sermon_date'] ?>" required="yes">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Sermon link :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-globe"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="sermon_url" class="form-control float-right" required="yes" value='<?php echo $selected_sermon['link'] ?>'>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" name="modify_added_sermon" value="<?php echo base64_encode('modify_added_sermon_form'); ?>" class="btn btn-info btn-block">Modify Selected Sermon</button>
                                </div>
                                <div class="col-6">
                                    <button type="submit" name="delete_sermon" value='<?php echo base64_encode('delete_sermon_form'); ?>' class="btn btn-danger btn-block">Delete Selected Sermon</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-footer">
                        This form is used to modify sermon
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>