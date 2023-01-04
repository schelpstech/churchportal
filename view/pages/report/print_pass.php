<section class="content">
    <div class="container-fluid">
        <div class="row">

            <?php
            $i = 0;
            while ($i <= 1500) {
                $i = $i + 1;
            ?>
                    <div class="col-sm-2" style="border-style:dashed ;">
                        <div class="card card-secondary card-outline">
                            <div class="card-body box-profile">
                                <h6 class="text-muted text-center"><b>REBIC @ 27</b></h6>
                                <h6 class="text-muted text-center"><b>MEAL TICKET</b></h6>
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="../../storage/app/rebiclogo.png" alt="church logo">
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-outline-secondary btn-block"><h3><?php echo $i ?></h3></a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
            
            }
            ?>
        </div>

    </div>

    </div>
</section>