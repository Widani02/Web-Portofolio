<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    </head>
<body>
    <h1>Contact Us</h1>
    <form action="submit_form.php"   
 method="post">
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="subject">Subject:</label>   

            <input type="text" name="subject" id="subject"   
 required>
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea name="message" id="message" rows="5" required></textarea>
        </div>
        <div>
            <button type="submit">Send   
 Message</button>
        </div>
    </form>
</body>
</html>