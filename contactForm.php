<html>

<head>
    <meta charset="utf-8" />
    <link href="contactForm_style.css" rel="stylesheet" type="text/css">
    <title>Contact | Health & Fitness</title>
    <link rel="icon" type="image/jpg" href="images/logo1.png" />
    <script>
        function submitClick() {
            if (formValidation()) {
                alert("Thank you for your time! Your details have been submitted!");
                return true;
            } else {
                return false;
            }
        }

        function formValidation() {
            flag = true;

            if (document.contactForm.name.value == "") {
                alert("Please fill in your Name!");
                flag = false;
            }

            // // Validate letters only for Name input
            // if (!/^[a-zA-Z]*$/g.test(document.contactForm.name.value)) {
            //     alert("Enter alphabetic characters as Name!");
            //     flag = false;
            // }
            if (document.contactForm.email.value == false) {
                alert("Email cannot be blank!");
                flag = false;
            } else if (!(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/).test(contactForm.email.value)) //Regular expressions to validate email
            {
                // Validate emails


                alert("Enter Valid Email Address!");
                flag = false;

            }

            if (document.contactForm.termsAndConditions.checked == false) {
                alert("Please check the Terms and Conditions box!");
                flag = false;
            }
            if (document.contactForm.message.value == false) {
                alert("Please write something in message section!");
                flag = false;
            }

            return flag;
        }
    </script>
</head>

<body>
    <div class="contactForm">
        <div class="contact-title">
            <h2 class="title-text"><span>C</span>ontact Us</h2>
        </div>
        <form id="contactForm" name="contactForm" method="post" action="contact.php" onsubmit="return formValidation();">
            <div class="inputBox">
                <label>Name:</label>
                <input name="name" id="name" type="text" class="input" autocomplete="on" placeholder="Required">
            </div>
            <div class="inputBox">
                <label>Email:</label>
                <input name="email" id="email" type="email" class="input" autocomplete="on" placeholder="Required">
            </div>
            <div class="inputBox">
                <label>Subject:</label>
                <input name="subject" type="text" class="input" placeholder="Optional">
            </div>
            <div class="inputBox">
                <textarea name="message" class="input" placeholder="Message. . ." required></textarea>
            </div>
            <p>Check the box if you agree with our
                <a href="termsConditons.php" target="_blank">Terms and Conditions</a> and
                <a href="privacyPolicy.php" target="_blank">Privacy & Policy</a>
                <input class="tickInput" type="checkbox" name="termsAndConditions" value="Yes"> Yes
            </p>
            <div class="inputBox">
                <input class="inputBoxBtn" id="submit" type="submit" value="send" onclick="submitClick();">
            </div>
        </form>
    </div>
</body>

</html>