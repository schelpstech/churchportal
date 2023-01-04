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
                                        <option value="">Select Minister</option>
                                        <?php
                                        if (!empty($minister_list)) {
                                            foreach ($minister_list as $data) {
                                        ?>
                                                <option value="<?php echo $data['form_number'] ?>"><?php echo ucfirst($data['lastname'] . ' ' . $data['firstname'] . ' ' . $data['othername']) ?></option>
                                        <?php
                                            }
                                        } else {
                                            echo '<option>NO MINISTER</option>';
                                        }
                                        ?>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-route"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <button type="submit" name="add_title" value="<?php echo base64_encode('add_title_form'); ?>" class="btn btn-info btn-block">Add Ministers Title</button>
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

<section class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> List of Minister sorted by title </h3>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Form Number</th>
                                    <th>Title</th>
                                    <th>Fullname</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                if (!empty($minister_title_list)) {
                                    foreach ($minister_title_list as $data) {
                                ?>
                                        <tr>
                                            <td><?php echo $count++; ?></td>
                                            <td style="text-align: center;">
                                                <img class="img-fluid img-box" src="../../storage/passport/<?php echo $data['passport']; ?>" width="50" />
                                                <?php echo '<hr><b>' . $data['form_number'] . '</b>';?>
                                            </td>
                                            <td><?php echo $data['title']; ?></td>
                                            <td><?php echo $data['lastname'] . " ". $data['firstname'] . " " . $data['othername'] ?? "" ?></td><td>
                                                <a href="../../app/router.php?pageid=<?php echo base64_encode("modify_title"); ?>&title_reference=<?php echo base64_encode($data['record_id']); ?>" class="btn btn-app">
                                                    <i class="fas fa-edit"></i> Modify
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo 'No Title Assigned Yet';
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>