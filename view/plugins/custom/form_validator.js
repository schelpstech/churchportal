//Validate Membership form - Biodata

function validate_biodata() {

    if ($("#surname").val() == "") {
        alert("Surname Field is required");
        document.getElementById("surname").focus();
    } else if ($("#firstname").val() == "") {
        alert("Firstname Field is required");
        document.getElementById("firstname").focus();
    } else if ($("#gender").val() == "") {
        alert("Gender Field is required");
        document.getElementById("gender").focus();
    } else if ($("#dateofbirth").val() == "") {
        alert("Date of Birth Field is required");
        document.getElementById("dateofbirth").focus();
    } else if ($("#marital_status").val() == "") {
        alert("Marital Status Field is required");
        document.getElementById("marital_status").focus();
    } else if ($("#language").val() == "") {
        alert("Language Field is required");
        document.getElementById("language").focus();
    } else if ($("#nationality").val() == "") {
        alert("Nationality Field is required");
        document.getElementById("nationality").focus();
    } else if ($("#state_of_origin-text").val() == "" & $("#state_of_origin-select").val() == "") {
        alert("State of Origin Field is required");
        if ($("#nationality").val() != "" & $("#nationality").val() == "Nigeria") {
            document.getElementById("#state_of_origin-select").focus();
        } else if ($("#nationality").val() != "" & $("#nationality").val() != "Nigeria") {
            document.getElementById("#state_of_origin-text").focus();
        } else {
            document.getElementById("nationality").focus();
        }
    } else {
        $('#validator_button').hide();
        document.getElementById("next_button").removeAttribute("hidden");
    }
}

function validate_contact() {

    if ($("#phonenumber").val() == "") {
        alert("At least 1 contact phone number Field is required");
        document.getElementById("phonenumber").focus();

    } else if ($("#nearest_busstop").val() == "") {
        alert("Nearest Bus Stop Field is required");
        document.getElementById("nearest_busstop").focus();

    } else if ($("#full_address").val() == "") {
        alert("Full Residential Address Field is required");
        document.getElementById("full_address").focus();

    } else if ($("#town").val() == "") {
        alert("Town / Area Field is required");
        document.getElementById("town").focus();

    } else if ($("#residence_country").val() == "") {
        alert("Country of Residence Field is required");
        document.getElementById("residence_country").focus();

    } else if ($("#residence_state-text").val() == "" & $("#residence_state-select").val() == "") {
        alert("State of Residence Field is required");
        if ($("#residence_country").val() != "" & $("#residence_country").val() == "Nigeria") {
            document.getElementById("#residence_state-select").focus();
        } else if ($("#residence_country").val() != "" & $("#residence_country").val() != "Nigeria") {
            document.getElementById("#residence_state-text").focus();
        } else {
            document.getElementById("residence_country").focus();
        }
    } else if ($("#residence_lga-text").val() == "" & $("#residence_lga-select").val() == "") {
        alert("LGA of Residence Field is required");
        if ($("#residence_country").val() != "" & $("#residence_country").val() == "Nigeria") {
            document.getElementById("#residence_lga-select").focus();
        } else if ($("#residence_country").val() != "" & $("#residence_country").val() != "Nigeria") {
            document.getElementById("#residence_lga-text").focus();
        } else {
            document.getElementById("residence_country").focus();
        }
    } else {
        $('#validator_contact_button').hide();
        document.getElementById("next_contact_button").removeAttribute("hidden");
    }
}

function validate_church() {

    if ($("#year_joined").val() == "") {
        alert("Year Joined Field is required");
        document.getElementById("year_joined").focus();

    } else if ($("#member_status").val() == "") {
        alert("Membership Status Field is required");
        document.getElementById("member_status").focus();

    } else if ($("#current_assembly").val() == "") {
        alert("Current Assembly Field is required");
        document.getElementById("current_assembly").focus();

    } else if ($("#occupation").val() == "") {
        alert("Occupation Field is required");
        document.getElementById("occupation").focus();

    } else if ($("#department").val() == "") {
        alert("Department Field is required");
        document.getElementById("department").focus();

    } else if ($("#sunday_school").val() == "") {
        alert("Sunday School Field is required");
        document.getElementById("sunday_school").focus();

    } else {
        $('#validator_church_button').hide();
        document.getElementById("next_preview_button").removeAttribute("hidden");

        $('#preview_surname').attr('value', $("#surname").val());
        $('#preview_firstname').attr('value', $("#firstname").val());
        $('#preview_othername').attr('value', $("#othername").val());

        $('#preview_gender').attr('value', $("#gender").val());
        $('#preview_dob').attr('value', $("#dateofbirth").val());
        $('#preview_marital').attr('value', $("#marital_status").val());

        $('#preview_nation').attr('value', $("#nationality").val());
        $('#preview_origin').attr('value', $("#state_of_origin-text").val() + $("#state_of_origin-select").val());
        $('#preview_language').attr('value', $("#language").val());

        $('#preview_phone').attr('value', $("#phonenumber").val());
        $('#preview_alt_phone').attr('value', $("#alt_phonenumber").val());
        $('#preview_email').attr('value', $("#emailaddress").val());

        $('#preview_bstop').attr('value', $("#nearest_busstop").val());
        $('#preview_address').attr('value', $("#full_address").val() + ", " + $("#town").val());
        $('#preview_country').attr('value', $("#residence_country").val());
        $('#preview_state').attr('value', $("#residence_state-text").val() + $("#residence_state-select").val());
        $('#preview_lga').attr('value', $("#residence_lga-text").val() + $("#residence_lga-select").val());

        $('#preview_year_joined').attr('value', $("#year_joined").val());
        $('#preview_mem_status').attr('value', $("#member_status").val());
        $('#preview_assembly').attr('value', $("#current_assembly").val());

        $('#preview_occupation').attr('value', $("#occupation").val());
        $('#preview_department').attr('value', $("#department").val());
        $('#preview_sow').attr('value', $("#sunday_school").val());

    }
}


//Visitors Form Validator

function validate_visitors() {
    if ($("#surname").val() == "") {
        alert("Surname Field is required");
        document.getElementById("surname").focus();
    } else if ($("#firstname").val() == "") {
        alert("Firstname Field is required");
        document.getElementById("firstname").focus();
    } else if ($("#gender").val() == "") {
        alert("Gender Field is required");
        document.getElementById("gender").focus();
    } else if ($("#marital_status").val() == "") {
        alert("Marital Status Field is required");
        document.getElementById("marital_status").focus();
    } else if ($("#occupation").val() == "") {
        alert("Occupation Field is required");
        document.getElementById("occupation").focus();
    } else if ($("#phonenumber").val() == "") {
        alert("At least 1 valid contact phone number Field is required");
        document.getElementById("phonenumber").focus();
    } else if ($("#nearest_busstop").val() == "") {
        alert("Nearest Bus Stop Field is required");
        document.getElementById("nearest_busstop").focus();

    } else if ($("#full_address").val() == "") {
        alert("Full Residential Address Field is required");
        document.getElementById("full_address").focus();

    } else if ($("#town").val() == "") {
        alert("Town / Area Field is required");
        document.getElementById("town").focus();

    } else if ($("#residence_country").val() == "") {
        alert("Country of Residence Field is required");
        document.getElementById("residence_country").focus();

    } else if ($("#residence_state-text").val() == "" & $("#residence_state-select").val() == "") {
        alert("State of Residence Field is required");
        if ($("#residence_country").val() != "" & $("#residence_country").val() == "Nigeria") {
            document.getElementById("#residence_state-select").focus();
        } else if ($("#residence_country").val() != "" & $("#residence_country").val() != "Nigeria") {
            document.getElementById("#residence_state-text").focus();
        } else {
            document.getElementById("residence_country").focus();
        }
    } else if ($("#residence_lga-text").val() == "" & $("#residence_lga-select").val() == "") {
        alert("LGA of Residence Field is required");
        if ($("#residence_country").val() != "" & $("#residence_country").val() == "Nigeria") {
            document.getElementById("#residence_lga-select").focus();
        } else if ($("#residence_country").val() != "" & $("#residence_country").val() != "Nigeria") {
            document.getElementById("#residence_lga-text").focus();
        } else {
            document.getElementById("residence_country").focus();
        }
    } else if ($("#invited_by").val() == "") {
        alert("Invited by Field is required");
        document.getElementById("invited_by").focus();
    } else if ($("#service_type").val() == "") {
        alert("Service Type Field is required");
        document.getElementById("service_type").focus();
    } else if ($("#service_date").val() == "") {
        alert("Service Date Field is required");
        document.getElementById("service_date").focus();
    } else if ($("#current_assembly").val() == "") {
        alert("Current Assembly Field is required");
        document.getElementById("current_assembly").focus();

    } else if ($("#department").val() == "") {
        alert("Department Field is required");
        document.getElementById("department").focus();
    } else { 
        
        $("#modal_submit_form").modal('show')
        
    }
}