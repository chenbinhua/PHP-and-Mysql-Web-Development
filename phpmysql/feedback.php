<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Feedback</title>
</head>
<body>
<h1>Customer Feedback</h1>
<p>Plese tell us what you think</p>
<form action="processfeedback.php" method="post">
    Your name:<br/>
    <input type="text" name="name" size="50"><br/><br/>
    Your email address:<br/>
    <input type="text" name="email" size="50"><br/><br/>
    Your feedback:<br/>
    <textarea name="feedback" id="" cols="50" rows="10"></textarea><br><br>
    <input type="submit" value="Send feeback">
</form>
</body>
</html>