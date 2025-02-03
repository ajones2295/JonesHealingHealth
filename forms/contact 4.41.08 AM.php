

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>

  <script type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>
<script type="text/javascript">
(function(){
  emailjs.init({
    publicKey: "VhZ5L9UApYe3h4Ykk",
  });
})();
</script>
<script src="script.js"></script>

</head>
<body>

  <h2>Contact Me</h2>
<form>
<div class="form-group">
<label for="name">Name</label>
<input type="text" id="name" name="name" required>
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="email" id="email" name="email" required>
</div>
<div class="form-group">
<label for="subject">Subject</label>
<input type="text" id="subject" name="subject" required>
</div>
<div class=" form-group">
<label for="message">Message</label>
<textarea id="message" name="message" rows="4" required></textarea>
</div>

</body>
</html>


