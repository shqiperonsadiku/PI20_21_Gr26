<html>

<head>
    <meta charset="utf-8" />
    <link href="contactForm_style.css" rel="stylesheet" type="text/css">
    <title>Contact | Health & Fitness</title>
    <link rel="icon" type="image/jpg" href="images/logo1.png" />
</head>

<body>
    <div class="contactForm">
        <div class="contact-title">
            <h2 class="title-text"><span>C</span>ontact Us</h2>
        </div>
        <form id="contactForm" name="contactForm" method="post" action="contact.php" onsubmit="return formSubmit();">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" >
            function formSubmit(){
                    $.ajax({
                        type: 'POST',
                        url: 'contact1.php',
                        data:$('#contactForm').serialize(),
                        success:function(response){
                            $('#success').html(response);
                            
                        }
                    });
                    var form = document.getElementById('contactForm').reset();
                    return false;
                }
        </script>
</body>

</html>