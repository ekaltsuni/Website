<!DOCTYPE html>

<head>
    <meta charset="utf8" />
    <link rel="stylesheet" href="style.css" />
    <script src="form.js"></script>
    <title>Make a Donation</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>
    <nav class="navbar no-print">
        <ul>
            <li><a href="page1.php">Overview</a></li>
            <li><a href="page2.php">Artists</a></li>
            <li><a href="page3.php">Places</a></li>
            <li><a href="form.php">Donate & Subscribe</a></li>
        </ul>
    </nav>
    <marquee class="no-print" ; behavior="scroll" direction="left" onmouseover="this.stop();"
        onmouseout="this.start();">Coming up: Popular documentaries about Street Art. Be the first to find
        out by sending an
        <a href="mailto:ekaltsuni@gmail.com">email</a>.
    </marquee>
    <h1 class="no-print" id="form-h1">Make a donation</h1>
    <h3 class="no-print" id="form-h3">Support our cause by becoming a patron today. <br>Subscribe to get our latest
        news.</h3>
    <form method="post" id=myform name=myform onsubmit="check_fields(event);" action="contact.php" class="contact-form">
        <fieldset id="personal-details">
            <legend>Personal details</legend>
            <div class="input-block">
                <p label for="firstname">
                    First name:
                    <input type="text" id="firstname" name="firstname" placeholder="Type characters in greek letters"
                        class="input-fields">
                <p id="error_firstname" class="error-message"></p>
            </div>
            </p>
            <div class="input-block">
                <p label for="lastname">
                    Last name:
                    <input type="text" id="lastname" name="lastname" placeholder="Type characters in greek letters"
                        class="input-fields" />
                <p id="error_lastname" class="error-message"></p>
            </div>
            </p>
            <div class="input-block">
                <p label for="address">
                    Address:
                    <input type="text" id="address" name="address" placeholder="Type characters in greek letters"
                        class="input-fields" />
                <p id="error_address" class="error-message"></p>
            </div>
            </p>
            <div class="input-block">
                <p label for="zip">
                    Zip:
                    <input type="text" id="zip" name="zip" placeholder="Up to 5 characters" maxlength="5"
                        class="input-fields" />
                <p id="error_zip" class="error-message"></p>
            </div>
            </p>
            <div class="input-block">
                <p label for="country">
                    Country:
                    <select name="country" id="country" placeholder="country" size="3" class="input-fields">
                        <optgroup label="EU">
                            <option>Austria</option>
                            <option>Belgium</option>
                            <option>Croatia</option>
                            <option>Cyprus</option>
                            <option>Denmark</option>
                            <option>Finland</option>
                            <option>France</option>
                            <option>Germany</option>
                            <option>Greece</option>
                            <option>Ireland</option>
                            <option>Italy</option>
                            <option>Poland</option>
                            <option>Portugal</option>
                            <option>Romania</option>
                            <option>Spain</option>
                            <option>Sweden</option>
                        </optgroup>
                        <optgroup label="Other">
                            <option>Iceland</option>
                            <option>Norway</option>
                            <option>Turkiye</option>
                            <option>Switzerland</option>
                            <option>Ukraine</option>
                            <option>United Kingdom</option>
                        </optgroup>
                    </select>
            </div>
            </p>
            <div class="input-block">
                <p label for="phone">
                    Phone:
                    <input type="tel" id="phone" name="phone" maxlength="13" value="+30210xxxxxxx"
                        class="input-fields" />
            </div>
            </p>
            <div class="input-block">
                <p label for="email">
                    Email:
                    <input type="email" id="email" name="email" class="input-fields" />
                <p id="error_email" class="error-message"></p>
            </div>
            </p>
        </fieldset>
        <br />
        <fieldset id="payment" class="no-print">
            <legend>Payment</legend>
            <div class="input-block no-print">
                <p label for="card-type">
                    Card type:
                    <select id="card-type" name="card-type" size="3" class="input-fields">
                        <option>Maestro</option>
                        <option>Mastercard</option>
                        <option>Visa</option>
                        <option>Other</option>
                    </select>
            </div>
            </p>
            <div class="input-block no-print">
                <p label for="card-number">
                    Card number:
                    <input type="text" id="card-number" name="card-number" placeholder="Type 16 digits" maxlength="16"
                        class="input-fields" />
                <p id="error_card_number" class="error-message"></p>
            </div>
            </p>
        </fieldset>
        <br />
        <fieldset id="contact">
            <legend>Get in touch</legend>
            <div class="input-block">
                <p label for="subscribe">
                    Subscribe to our mailing list to receive the latest
                    news.
                    <input type="checkbox" id="subscribe" name="subscribe" />
            </div>
            </p>
            <div class="input-block">
                <p label for="comment">Leave a comment: </p>
                <p label for="response">
                    <textarea id="response" name="response" rows="8" cols="30" class="input-fields"></textarea>
                </p>
            </div>
        </fieldset>

        <div class="buttons">
            <p label for="button">
                <input type="submit" id="submit-button" name="submit-button" value="Submit"
                    class="submit-button no-print" />
                <input type="reset" id="reset" name="reset" value="Reset changes" class="reset-button no-print" />
                <input type="button" id="print" name="print" value="Print" class="print-button no-print" />
                <input type="button" id="search-button" name="search-button" value="Search by email"
                    class="search-button no-print">
            </p>
        </div>
    </form>
    <p id="myp"></p>
    <hr>
</body>
<footer class="no-print">
    <p>This page was created by Eleni Kaltsouni. </p>
    <p>
        For any questions, feedback or suggestions please reach out to
        <a href="mailto:ekaltsuni@gmail.com">ekaltsuni@gmail.com</a>
    </p>
</footer>
<script>
/* Event handler: Clear form when clicking reset button by calling function clear_fields() */
document.getElementById("reset").addEventListener("click", function() {
    clear_fields();
});

/* Event handler: Print form when clicking print button by calling function window.print() */
document.getElementById("print").addEventListener("click", function() {
    window.print();
});

/* Handles the AJAX request and populates the form fields with the retrieved data */
document.getElementById("search-button").addEventListener("click", function() {
    var email = document.getElementById("email").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "contact.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);

                // If the search returned data, populate form fields
                if (data && Object.keys(data).length > 0) {
                    document.getElementById("firstname").value = data.firstname;
                    document.getElementById("lastname").value = data.lastname;
                    document.getElementById("address").value = data.address;
                    document.getElementById("zip").value = data.zip;
                    document.getElementById("country").value = data.country;
                    document.getElementById("phone").value = data.phone;
                    document.getElementById("card-type").value = data.card_type;
                    document.getElementById("card-number").value = data.card_number;
                } else if (data.error) {
                    // No matching data found
                    alert(data.error);
                }
            } else {
                alert("Error fetching data. Please try again.");
            }
        }
    };
    xhr.send("email=" + email);
});
</script>