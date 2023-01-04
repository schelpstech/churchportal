<section class="content">
    <div class="container-fluid">
        <h2 class="text-center display-4">Print Card</h2>
        <form class="form-horizontal" action="../../app/membership_module.php" method="post" enctype='multipart/form-data'>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="input-group">
                                <input type="search" class="form-control form-control-lg" maxlength="16" minlength="16" placeholder="Enter 16 digits Form Number" name="search_index" required="yes" tabindex="2">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-default" name="search_member" value="<?php echo base64_encode('search_member_form'); ?>" tabindex="3">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>