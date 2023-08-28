/* Used to define alert window behavior. Variables get returned as false when regex rule isn't matched */
let bool_firstname = { value: true };
let bool_lastname = { value: true };
let bool_address = { value: true };
let bool_zip = { value: true };
let bool_email = { value: true };
let bool_card_number = { value: true };
let bool_card_number_length = { value: true };

/* Calling respective check functions for each field that should be checked */
function check_fields() {
  check_name_address("firstname", "error_firstname", bool_firstname);
  check_name_address("lastname", "error_lastname", bool_lastname);
  check_name_address("address", "error_address", bool_address);
  check_zip_card_number("zip", "error_zip", bool_zip);
  check_zip_card_number("card-number", "error_card_number", bool_card_number);
  check_email();
  check_card_length();
  card_regex_and_length();
  show_alert();
}

/* First name, last name, and address follow the same regex rule so the check can be summed up in one function */
function check_name_address(str_value, error_value, return_value) {
  var value = document.getElementById(str_value).value;
  if (!/^[α-ωΑ-ΩάέήίόύΆΈΉΊΌΎ]+$/.test(value)) {
    document.getElementById(str_value).style = "border:2px solid red;";
    document.getElementById(error_value).innerText =
      "Field can't be empty and will only accept greek characters.";
    return_value.value = false;
  } else {
    document.getElementById(str_value).style = "";
    document.getElementById(error_value).innerText = "";
    return_value.value = true;
  }
}

/* Zip code and card number follow the same regex rule so the check can be summed up in one function */
function check_zip_card_number(str_value, error_value, return_value) {
  var value = document.getElementById(str_value).value;
  if (!/^[0-9]+$/.test(value)) {
    document.getElementById(str_value).style = "border:2px solid red;";
    document.getElementById(error_value).innerText =
      "Field can only contain digits.";
    return_value.value = false;
  } else {
    document.getElementById(str_value).style = "";
    document.getElementById(error_value).innerText = "";
    return_value.value = true;
  }
}

/* Email follows a unique regex rule and therefore has a dedicated function */
function check_email() {
  var email = document.getElementById("email").value;
  if (!/@([a-z]+\.)+[a-z]+$/.test(email)) {
    document.getElementById("email").style = "border:2px solid red;";
    document.getElementById("error_email").innerText =
      "You've entered an invalid email address.";
    bool_email.value = false;
  } else {
    document.getElementById("email").style = "";
    document.getElementById("error_email").innerText = "";
    bool_email.value = true;
  }
}

/* Check length of credit card */
function check_card_length() {
  var input = document.getElementById("card-number");
  var max_length = input.getAttribute("maxlength");
  if (input.value.length !== parseInt(max_length)) {
    bool_card_number_length.value = false;
  } else {
    bool_card_number_length.value = true;
  }
}

/* Check credit card regex and lengths combined */
function card_regex_and_length() {
  if (
    bool_card_number.value === true &&
    bool_card_number_length.value === true
  ) {
    document.getElementById("card-number").style = "";
    document.getElementById("error_card_number").innerText = "";
  } else {
    document.getElementById("card-number").style = "border:2px solid red;";
    document.getElementById("error_card_number").innerText =
      "Field must contain 16 digits.";
  }
}

/* Show alert popup if at least one returned variable is false (doesn't match regex in respective check functions) */
function show_alert() {
  if (
    bool_firstname.value === false ||
    bool_lastname.value === false ||
    bool_address.value === false ||
    bool_zip.value === false ||
    bool_card_number.value === false ||
    bool_email.value === false ||
    bool_card_number_length.value === false
  ) {
    alert("Please check that all fields are completed correctly.");
    event.preventDefault();
  }
}

/* Function gets called when clicking the reset button to remove existing styles and input text */
function clear_fields() {
  document.getElementById("firstname").style = "";
  document.getElementById("error_firstname").innerText = "";
  document.getElementById("lastname").style = "";
  document.getElementById("error_lastname").innerText = "";
  document.getElementById("address").style = "";
  document.getElementById("error_address").innerText = "";
  document.getElementById("zip").style = "";
  document.getElementById("error_zip").innerText = "";
  document.getElementById("card-number").style = "";
  document.getElementById("error_card_number").innerText = "";
  document.getElementById("email").style = "";
  document.getElementById("error_email").innerText = "";
}
