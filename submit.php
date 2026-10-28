<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>webdSign - Submitted</title>
    <link rel="stylesheet" href="webstyle.css">
</head>
<body>
     <div class="header">
        <a href="home.html"><button class="home"><img src="Untitled design-2.png"></button></a>
        <a href="about.html"><button class="option">About</button></a>
        <a href="services.html"><button class="option">Service</button></a>
        <a href="faq.html"><button class="option">FAQ</button></a>
        <a href="contact.php"><button class="option">Contact</button></a>
    </div>
    <br>
    <h1>Contact Form</h1>
    <br>
    <img src="Envelope.jpg" class="image">
      
    <?php
    $valid_form = true;

    /* PHP code */ 
    if (isset($_POST["submitB"]))
        {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $business = $_POST["business"];
            $service = $_POST["service"];
            $message = $_POST["message"];
            

            if ($name == "") // if name empty, the following displays 
                {
                    echo "<p class='redText'>*Please enter your name.</p>";
                    $valid_form = false;
                }
            
            if ($email == "") // if email empty, the following displays 
                {
                    echo "<p class='redText'>*Please enter your email.</p>";
                    $valid_form = false;
                }
            
            if ($email != "" && strpos($email, "@") == false)    //strpos() function looks for the @ symbol inside the email and if none the following displays
                {
                    echo "<p class='redText'>*Please enter a valid email address.</p>";
                    $valid_form = false;
                }
            

            if ($service == "") // if services (from the options) empty, the following displays 
                {
                    echo "<p class='redText'>*Please select a service.</p>";
                    $valid_form = false;
                }

            if ($message == "") // if message empty, the following displays 
                {
                    echo "<p class='redText'>*Please enter your message.</p>";
                    $valid_form = false;
                }

            if ($valid_form == false) // if anything above displays, this displays after it 
                {
                    echo "<p><i> Reload page to try again</i></p>";
                }
            
            if ($valid_form == true)   // if all info is correct, the following dispays 
                {
                    echo "<h2>Form submitted successfully</h2>";
                    echo "<p><b>Name: </b>" . $name . "</p>";
                    echo "<p><b>Email: </b>" . $email . "</p>";
                    if ($business != "")
                        {
                            echo "<p><b>Business Name: </b>" . $business . "</p>";
                        }
                    echo "<p><b>Service requested: </b>" . $service . "</p>";
                    echo "<p><b>Message: </b>" . $message . "</p>";
                }
        }
    ?>
    
</body>
<footer>
    <hr>

    <div class="footerContainer">
        <a href="home.html" class="line1"><img src="Untitled design-2.png"></a>
        
        <div class="line2">
        <p> 
            Email: <a href="mailto:125390933@umail.ucc.ie">125390933@umail.ucc.ie</a>
             |
            Phone: +21 (XX) XXXX XXX
            <br>
            <br>
            &copy; 2026 webdeSign. All rights reserved.
        </p>
        </div>
    </div>
</footer>
</html>
</html>