<div class="newsletter-full-width">
  <div class="container">

<div class="message-area">



  <?php
 if(isset($_SESSION['status'])) {
  ?>
      <div class="alert alert-success alert-dismissible" role="alert">
  <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
  <strong>You have successfully joined our mailing list</strong> 
</div>

  <?php
  echo $_SESSION['status'];
  unset($_SESSION['status']);
}

?>

<?php
 if(isset($_SESSION['empty_status'])) {
  ?>

<div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button>
          Enter correct values in empty fields!
      </div>

  <?php
  echo $_SESSION['empty_status'];
  unset($_SESSION['empty_status']);
}

?>

<?php
 if(isset($_SESSION['email_status'])) {
  ?>

<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
          Enter correct email in field!
      </div>

  <?php
  echo $_SESSION['email_status'];
  unset($_SESSION['email_status']);
}

?>

<?php
 if(isset($_SESSION['exists_status'])) {
  ?>

<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
          Email aready taken!
      </div>

  <?php
  echo $_SESSION['exists_status'];
  unset($_SESSION['exists_status']);
}

?>

<?php
 if(isset($_SESSION['checkbox_status'])) {
  ?>

<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
          Click the checkbox to agree to our Privacy Policy!
      </div>

  <?php
  echo $_SESSION['checkbox_status'];
  unset($_SESSION['checkbox_status']);
}

?>

</div>
    <!------ NEWSLETTER FORM ------->
    <form id="sign-up" class="sign-up" method="POST" action="./includes/db.php" accept-charset="UTF-8">
      <input name="_token" type="hidden" value="#">
      <input name="return_url" type="hidden" value="https://www.netmatters.co.uk">
      <h2 class="newsletter-text">Email Newsletter Sign-Up</h2>
      <div class="sign-up-inputs-wrapper">
        <div class="sign-up-input">
          <div class="form-group">
            <label class="required" for="newsletter-name">
              Your Name
            </label>
            <input id="newsletter-name" class="form-control" name="name" type="text">
          </div> <!-- end of form group -->
        </div> <!-- sign-up-input-->

        <div class="form-group">
          <label class="required email" for="newsletter-email">
            Your Email
          </label>
          <input id="newsletter-email" class="form-control" name="email" type="text">
        </div> <!-- end of form group -->

        <div class="form-group">
          <label class="pretty-checkbox">
            <span class="media">
              <span class="media-left checkbox-left">
                
                  <input type="checkbox" id="check" name="checkbox" class="button">
                    <span class="mdi-action-done"></span>         
              </span> <!-- end of span media-left -->
              

              <span class="media-body">
                Please tick this box if you wish to receive marketing information from us. Please see our
                <a href="#" target="_blank" rel="nooperner noreferrer">Privacy Policy</a>  
                for more information on how we keep your data safe. 
              </span>
            </span> <!-- span media -->
          </label>
        </div> <!-- end of form group 2 -->
        <button class="btn btn-primary" name="submit">SUBSCRIBE</button>
      </div> <!-- end of sign-up-inputs-wrapper -->
    </form>
  </div> <!-- end of container -->
</div> <!-- end of newsletter-full-width -->