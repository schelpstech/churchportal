<?php
include 'query.php';

if (isset($_POST['selected_item']) && $_POST['action'] == 'fetchlga') {
    //All LGA in selected state
    $tblName = 'location';
    $conditions = array(
        'where' => array(
            'state' => $_POST['selected_item'],
        ),
        'order_by' => 'lga ASC',
    );
    $lga_list = $model->getRows($tblName, $conditions);
?>
    <option value="">Select LGA</option>
    <?php
    if (!empty($lga_list)) {
        foreach ($lga_list as $data) {
    ?>

    <option value="<?php echo $data['lga'] ?>"><?php echo $data['lga'] ?></option>
<?php
        }
    } else {
        echo '<option value="">No LGA in selected state</option>';
    }
}

if (isset($_POST['selected_item']) && $_POST['action'] == 'fetch_sow') {
    //All LGA in selected state
    $tblName = 'sunday_school_tbl';
    $conditions = array(
        'where' => array(
            'assemblyid' => $_POST['selected_item'],
        ),
        'order_by' => 'classname ASC',
    );
    $sow_list = $model->getRows($tblName, $conditions);
?>
    <option value="">Select SOW Class</option>
    <?php
    if (!empty($sow_list)) {
        foreach ($sow_list as $data) {
    ?>

    <option value="<?php echo $data['classid'] ?>"><?php echo $data['classname'] ?></option>
<?php
        }
    } else {
        echo '<option value="">No School of Wisdom in selected assembly</option>';
    }
}
?>