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
                    <form action="../../app/title_manager.php" method="post">
                        <div class="card-body">
                            <!-- Selectbox Title-->
                            <div class="form-group">
                                <label>Select Title :</label>
                                <div class="input-group date">
                                    <select type="text" class="form-control" name="selected_title">
                                        <option value="<?php echo $minister_title['titleid'] ?>"><?php echo $minister_title['title'] ?></option>    
                                        <option value="">Select Title</option>
                                        <?php
                                        if (!empty($title_list)) {
                                            foreach ($title_list as $data) {
                                        ?>
                                                <option value="<?php echo $data['titleid'] ?>"><?php echo $data['title'] ?></option>
                                        <?php
                                            }
                                        } else {
                                            echo '<option>NO TITLE</option>';
                                        }
                                        ?>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-route"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Selectbox MInister-->
                            <div class="form-group">
                                <label>Select Minister :</label>
                                <div class="input-group date">
                                    <select type="text" class="form-control" name="selected_minister">
                                        <option value="<?php echo $minister_title['form_number'] ?>"><?php echo ucfirst($minister_title['lastname'] . ' ' . $minister_title['firstname'] . ' ' . $minister_title['othername']) ?></option>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-route"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" name="delete_title" value="<?php echo base64_encode('delete_title_form'); ?>" class="btn btn-danger btn-block">Delete Ministers Title</button>
                                </div>
                                <div class="col-6">
                                    <button type="submit" name="modify_title" value="<?php echo base64_encode('modify_title_form'); ?>" class="btn btn-info btn-block">Modify Ministers Title</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-footer">
                        This form is used to add new Title to a minister
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>