function fetch_residence_lga() {
    var selected_item = $("#residence_state-select").val();
    var action = 'fetchlga';
    if (selected_item != "") {
        $.ajax({
            url: "../../app/ajax_query.php",
            method: "POST",
            data: {
                selected_item: selected_item,
                action: action,
            },
            success: function (data) {
                $("#residence_lga-select").html(data);
            },
        });
    } else {
        alert("Select State");
    }
}

function fetchlga() {
    var selected_item = $("#assembly_state-select").val();
    var action = 'fetchlga';
    if (selected_item != "") {
        $.ajax({
            url: "../../app/ajax_query.php",
            method: "POST",
            data: {
                selected_item: selected_item,
                action: action,
            },
            success: function (data) {
                $("#assembly_lga-select").html(data);
            },
        });
    } else {
        alert("Select State");
    }
}

// Select School of Wisdom
function fetch_sow() {
    var selected_item = $("#current_assembly").val();
    var action = 'fetch_sow';
    if (selected_item != "") {
        $.ajax({
            url: "../../app/ajax_query.php",
            method: "POST",
            data: {
                selected_item: selected_item,
                action: action,
            },
            success: function (data) {
                $("#sunday_school").html(data);
            },
        });
    } else {
        alert("Select Assembly");
    }
}