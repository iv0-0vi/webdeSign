<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>webdeSign - Contact Us</title>
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
    
   
    <form action="submit.php" method="post" class="form">
        <br>
        Name:
        <br>
        <input type="text" name="name">
        <br><br>
        Email:
        <br>
        <input type="text" name="email">
        <br><br>
        Business Name (optional):
        <br>
        <input type="text" name="business">
        <br><br>

        Service:
        <br>
        <select name="service" class="service">
            <option value="">Select a service</option>
            <option value="Website Design">Website Design</option>
            <option value="SEO Support">SEO Support</option>
            <option value="Website Maintenance">Website Maintenance</option>
            <option value="Content Creation">Content Creation</option>
            <option value="Digital Marketing">Digital Marketing </option>
            <option value="Other">Other</option>
        </select>
        <br><br>

        Message:
        <br>
        <textarea name="message"></textarea>
        <br><br>

        <input type="submit" name="submitB" value="Submit">
        <br>
        <br>
    </form>

    <br>

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