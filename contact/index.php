<html>
    <head>
        <title>Contact Form Tutorial by Bootstrapious.com</title>
        <?php include('../inc/css.php'); ?>
    </head>
    <body>
      <?php include('../inc/navigation.php'); ?>
      <div class="container" style="margin-top:100px;">
      <?php include('../inc/javascript.php'); ?>
      <?php include('../inc/footer.php'); ?>

                    <h1>Contact form</h1>

                    <p class="lead">Please send us a message and one of our agents will get in touch with you as soon as possible.</p>

                    <!-- We're going to place the form here in the next step -->
                    <form id="contact-form" method="post" action="contact.php" role="form">

                    <label for="form_name">Firstname *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">

                    <label for="form_lastname">Lastname *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">

                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">

                    <label for="form_phone">Phone</label>
                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">

                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                    <div class="help-block with-errors"></div>

                <input type="submit" class="btn btn-success btn-send" value="Send message">

                <p class="text-muted"><strong>*</strong> These fields are required.</p>
                </form>
    </body>
</html>