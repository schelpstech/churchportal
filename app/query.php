<?php
    if (file_exists('../../controller/start.inc.php')) {
        include '../../controller/start.inc.php';
    } elseif (file_exists('../controller/start.inc.php')) {
        include '../controller/start.inc.php';
    } else {
        include './controller/start.inc.php';
    };

//Select All Country
    $tblName = 'country_list';
    $conditions = array(
        'order_by' => 'country ASC',
    );
    $country_list = $model->getRows($tblName, $conditions);

//Select All Languages
    $tblName = 'languages';
    $conditions = array(
        'order_by' => 'language ASC',
    );
    $language_list = $model->getRows($tblName, $conditions);

//Select All Occupation
$tblName = 'occupation_tbl';
$conditions = array(
    'order_by' => 'occupation ASC',
);
$occupation_list = $model->getRows($tblName, $conditions);

//Select All Occupation
$tblName = 'department';
$conditions = array(
    'order_by' => 'dept_name ASC',
);
$dept_list = $model->getRows($tblName, $conditions);

//Select All States in Nigeria 
    $tblName = 'location';
    $conditions = array(
        'select' => 'Distinct state',
        'order_by' => 'state ASC',
    );
    $state_list = $model->getRows($tblName, $conditions);

//Select All Assemblies
$tblName = 'assembly_tbl';
$conditions = array(
    'order_by' => 'record_time DESC',
);
$assembly_list = $model->getRows($tblName, $conditions);

if(isset($_SESSION['assembly_reference'])){
    //Select referenced assembly
    $conditions = array(
    'return_type' => 'single',
    'where' => array(
        'assembly_id' => $_SESSION['assembly_reference'],
    )
);
$assembly_details = $model->getRows($tblName, $conditions);
}

//Select All Registered Members
$tblName = 'member_list';
$conditions = array(
    'joinl' => array(
        'assembly_tbl' => ' on member_list.assemblyid = assembly_tbl.assembly_id',
    ),
    'order_by' => 'mem_record_time DESC',
);
$member_list = $model->getRows($tblName, $conditions);

//Select All Registered Partcipants for WLC
$tblName = 'registrations';
$conditions = array(
    'order_by' => 'created_at DESC',
);
$participant_list = $model->getRows($tblName, $conditions);

//Select Referenced Member
if(isset($_SESSION['mem_reference'])){
$tblName = 'member_list';
$conditions = array(
    'return_type' => 'single',
    'joinl' => array(
        'assembly_tbl' => ' on member_list.assemblyid = assembly_tbl.assembly_id',
        'occupation_tbl' => ' on member_list.occupation_id = occupation_tbl.occup_id',
        'sunday_school_tbl' => ' on member_list.classid = sunday_school_tbl.classid',
        'department' => ' on member_list.department_id = department.dept_id ',
        'title_records' => ' on member_list.form_number = title_records.reference_id',
        'title_tbl' => ' on title_tbl.titleid  = title_records.title_id',
    ),
    'where' => array(
        'form_number' => $_SESSION['mem_reference'],
    ),
);
$member_data = $model->getRows($tblName, $conditions);
}
$tblName = 'member_list';
$conditions = array(
    'order_by' => 'lastname ASC',
    'where' => array(
        'membership_status' => 'Minister',
    ),
);
$minister_list = $model->getRows($tblName, $conditions);


$tblName = 'region_tbl';
$conditions = array(
    'order_by' => 'region_id ASC',
);
$region_list = $model->getRows($tblName, $conditions);



//Select Ministers Only
if( isset($_SESSION['pageid']) && $_SESSION['pageid'] == 'manage_title'){

    
    $tblName = 'title_records';
    $conditions = array(
        'order_by' => 'title_id ASC',
        
        'joinl' => array(
            'member_list' => ' on member_list.form_number = title_records.reference_id',
            'title_tbl' => ' on title_tbl.titleid  = title_records.title_id',
        ),

    );
    $minister_title_list = $model->getRows($tblName, $conditions);

    $tblName = 'title_tbl';
    $title_list = $model->getRows($tblName);

}
//Select Ministers Only
if( isset($_SESSION['pageid']) && $_SESSION['pageid'] == 'modify_title'){

    $tblName = 'title_records';
    $conditions = array(
        'joinl' => array(
            'member_list' => ' on member_list.form_number = title_records.reference_id',
            'title_tbl' => ' on title_tbl.titleid  = title_records.title_id',
        ),
        'return_type' => 'single',
        'where' => array(
            'record_id' => $_SESSION['title_reference'],
        ),


    );
    $minister_title = $model->getRows($tblName, $conditions);


    $tblName = 'member_list';
    $conditions = array(
        'order_by' => 'lastname ASC',
        'where' => array(
            'membership_status' => 'Minister',
        ),
    );
    $minister_list = $model->getRows($tblName, $conditions);

    $tblName = 'title_tbl';
    $title_list = $model->getRows($tblName);

}

//Show validated Forms for ID Card
if(isset($_SESSION['pageid']) && $_SESSION['pageid'] == 'print_all_cards'){
    $tblName = 'member_list';
    $conditions = array(
        'joinl' => array(
            'assembly_tbl' => ' on member_list.assemblyid = assembly_tbl.assembly_id',
            'occupation_tbl' => ' on member_list.occupation_id = occupation_tbl.occup_id',
            'sunday_school_tbl' => ' on member_list.classid = sunday_school_tbl.classid',
            'department' => ' on member_list.department_id = department.dept_id ',
        ),
        'where_not' => array(
            'membership_number' => "",
        ),
        'order_by' => 'mem_record_time ASC',
    );
    $member_print_data = $model->getRows($tblName, $conditions);
}
//Select All Sunday School Class
$tblName = 'sunday_school_tbl';
$conditions = array(
    'joinl' => array(
        'assembly_tbl' => ' on sunday_school_tbl.assemblyid = assembly_tbl.assembly_id',
    ),
    'order_by' => 'record_time DESC',
);
$sow_list = $model->getRows($tblName, $conditions);

if(isset($_SESSION['sow_reference'])){
    //Select referenced Sunday School Class
    $conditions = array(
    'return_type' => 'single',
    'joinl' => array(
        'assembly_tbl' => ' on sunday_school_tbl.assemblyid = assembly_tbl.assembly_id',
    ),
    'where' => array(
        'classid' => $_SESSION['sow_reference'],
    )
);
$sow_details = $model->getRows($tblName, $conditions);
}


//Dashboard Panel

if(isset($_SESSION['module']) && $_SESSION['module'] == 'Dashboard'){
    $tblName = 'sunday_school_tbl';
    $condition = array(
        'return_type' => 'count',
    );
    $number_sow_class = $model->getRows($tblName, $condition);

    $tblName = 'assembly_tbl';
    $condition = array(
        'return_type' => 'count',
    );
    $number_assembly_class = $model->getRows($tblName, $condition);

    $tblName = 'member_list';
    $condition = array(
        'return_type' => 'count',
    );
    $number_member_class = $model->getRows($tblName, $condition);

    $condition = array(
        'return_type' => 'count',
        'where_not' => array(
            'membership_number' => "",
        )
    );
    $number_unvalidated_user = $model->getRows($tblName, $condition);

    //Select Last 10 registered members';
$conditions = array(
    'joinl' => array(
        'assembly_tbl' => ' on member_list.assemblyid = assembly_tbl.assembly_id',
    ),
    'order_by' => 'mem_record_time DESC',
    'limit' => '10',
);
$latest_members = $model->getRows($tblName, $conditions);

//Regional Membership
$condition = array(
    'select' => 'region_tbl.region_name as region, COUNT(member_list.membership_id) as total',
    'joinl' => array(
        'assembly_tbl' => ' on member_list.assemblyid = assembly_tbl.assembly_id',
        'region_tbl' => ' on assembly_tbl.region = region_tbl.region_id',
    ),
    'group_by' => 'region_tbl.region_id'
);
$regional_report = $model->getRows($tblName, $condition);

//Assembly Membership Dashboard
$condition = array(
    'select' => 'assembly_tbl.assembly_name as assembly, COUNT(member_list.membership_id) as total',
    'joinl' => array(
        'assembly_tbl' => ' on member_list.assemblyid = assembly_tbl.assembly_id',
    ),
    'group_by' => 'assembly_tbl.assembly_id'
);
$assembly_report = $model->getRows($tblName, $condition);

$condition = array(
    'select' => 'department.dept_name as department, COUNT(member_list.membership_id) as total',
    'joinl' => array(
        'department' => ' on member_list.department_id = department.dept_id',
    ),
    'group_by' => 'department.dept_id'
);
$department_report = $model->getRows($tblName, $condition);
    
}

//Select All Visitors
$tblName = 'visitors_log';
$conditions = array(
    'joinl' => array(
        'assembly_tbl' => ' on visitors_log.church = assembly_tbl.assembly_id',
        'department' => ' on visitors_log.dept_id = department.dept_id',
    ),
    'order_by' => 'visitors_log.date DESC',
);
$visitors_list = $model->getRows($tblName, $conditions);


if(isset($_SESSION['visitor_reference'])){
    $tblName = 'visitors_log';
    $conditions = array(
        'where' => array(
            'ref_number' => $_SESSION['visitor_reference'],
        ),
        'return_type' => 'single',
        'joinl' => array(
            'assembly_tbl' => ' on visitors_log.church = assembly_tbl.assembly_id',
            'department' => ' on visitors_log.dept_id = department.dept_id',
            'occupation_tbl' => ' on visitors_log.occupation_id = occupation_tbl.occup_id',
        ),
        
    );
    $selected_visitor = $model->getRows($tblName, $conditions);   
}

//Select All Sermons
$tblName = 'sermon_repo_tbl';
$conditions = array(
    'order_by' => 'sermon_rectime DESC',
    'joinl' => array(
        'assembly_tbl' => ' on sermon_repo_tbl.assembly_id = assembly_tbl.assembly_id',
    ),
);
$sermon_list = $model->getRows($tblName, $conditions);


if(isset($_SESSION['sermon_reference'])){
//Select Referenced Sermon
$tblName = 'sermon_repo_tbl';
$conditions = array(
    'where' => array(
        'sermon_id' => $_SESSION['sermon_reference'],
    ),
    'return_type' => 'single',
    'joinl' => array(
        'assembly_tbl' => ' on sermon_repo_tbl.assembly_id = assembly_tbl.assembly_id',
    ),
);
$selected_sermon = $model->getRows($tblName, $conditions);
}


