<?php
  if (isset($_POST[name]) && isset($_POST[email])) {
    
  } ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<div class="landing">
  <img src="img/10th.jpg""    alt="" srcset="">
  
</div>
<body>
  <div class=" topnav" id="myTopnav">
  <a href="index.html" class="active">Home</a>
  <a href="About.html">About</a>
  <a href="contact.html">Contact</a>
  <a href="give.html">Give Back</a>
  <a href="Links.html">Links</a>

  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div class="form-container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name.." required>

    <label for="company">Company Name</label>
    <input type="text" id="company" name="company" placeholder="Your company name..">

    <label for="type">Is this personal, business, or other?</label> <br>
    <input type="radio" name="gender" value="male" checked> Business<br>
    <input type="radio" name="gender" value="female"> Personal<br>
    <input type="radio" name="gender" value="other"> Other <br> <br>

    <label for="subject">What should we know about this consulation? (Recommended)</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <button type="submit" value="Submit">Submit</button>
  </form>

</div>
</body>

<script src="script.js"></script>
<footer>
  @LaRoche.edu
</footer>

</html>