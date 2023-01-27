<div class="container news">Our Offices</div>
  <div class="container articles">
  
  
  
        
  <?php
              require_once('./database_office.php');
  require_once('./functions.php');
              $xxx = print_office();
              foreach ($xxx as $contact) {
                  echo get_office($contact);
              }
              ?>	
  <iframe src="https://my.atlistmaps.com/map/90c7a997-c242-483b-874c-7f11c9413031?share=true" allow="geolocation" width="100%" height="300px" frameborder="0" scrolling="no" allowfullscreen></iframe>
    <iframe src="https://my.atlistmaps.com/map/6842c237-83e4-4916-93f8-4b8215bcd855?share=true" allow="geolocation" width="100%" height="300px" frameborder="0" scrolling="no" allowfullscreen></iframe>
      <iframe src="https://my.atlistmaps.com/map/f7c11f90-af6c-4c69-beb2-22ea3093ac44?share=true" allow="geolocation" width="100%" height="300px" frameborder="0" scrolling="no" allowfullscreen></iframe>
  
  
  
  <div class="container contact">
    <div class="row">
  
      <div class="col-lg-4 col-lg-push-8">
  
                          <div>
          <div class="cms-block" id="partial-79391">
              <p><strong>Email us on:</strong><br></p><p><a href="mailto:sales@netmatters.com" class="h3 text-web">sales@netmatters.com</a></p>
  <p><strong>Business hours:</strong></p>
  <p><strong>Monday - Friday 07:00 - 18:00&nbsp;</strong></p>
  
          </div>
      </div>
                          <div>
          <div class="cms-block" id="partial-79394">
              <div class="bbb">
  <div class="accordion out-of-hours">
      <div class="question out-of-hours">
          <h4>
              <a href="#">
                  <p class="question-text">Out of Hours IT Support<em style="font-style: normal" class="fa fa-chevron-down rotate" onclick="myFunction()"> </em></p>
              </a>
          </h4>
          <div id="myDropdown" class="answer">
              <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
  <p><strong>Monday - Friday 18:00 - 22:00
  </strong><strong>Saturday 08:00 - 16:00
  </strong><br><strong>Sunday 10:00 - 18:00</strong></p>
  <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours&nbsp; voicemail. A technician will contact you on the number provided within 45 minutes of your call.&nbsp;</p>
          </div>
      </div>
  </div>
  </div>
  
          </div>
      </div>
      
      </div>
  
      <div class="col-lg-8 col-lg-pull-4">


      <?php include('./includes/contact.db.php'); ?>

<form method="POST" action="" accept-charset="UTF-8" id="contact-form" novalidate="novalidate">
  <div class="row">
  <div class="col-md-6">
      <div class="form-group">
          <label for="name" class="required">Your Name</label>
          <input class="form-control <?php echo $name_error; ?>" name="name" type="text" value="" id="name">
        
      </div>
  </div>

  <div class="col-md-6">
          <div class="form-group">
              <label for="company" class="">Company Name</label>
              <input class="form-control <?php echo $name_error; ?>"  name="company" type="text" value="" id="company">
          </div>
      </div>
  
  <div class="col-md-6">
      <div class="form-group">
          <label for="email" class="required">Your Email</label>
          <input class="form-control <?php echo $name_error; ?>" name="email" type="email" value="" id="email">
      </div>
  </div>

  <div class="col-md-6">
      <div class="form-group">
          <label for="telephone" class="required">Your Telephone Number</label>
          <input class="form-control <?php echo $name_error; ?>" name="telephone" type="text" value="" id="telephone">
      </div>
  </div>

  <div class="col-md-12">
      <div class="form-group">
          <label for="subject" class="required">Subject</label>
          <input class="form-control <?php echo $name_error; ?>" name="subject" type="text" id="subject">
      </div>
  </div>
  </div>
  
  <div class="form-group">
  <label for="message" class="required">Message</label>
  <textarea class="form-control <?php echo $name_error; ?>" name="message" cols="50" rows="10" id="message"></textarea>
  </div>

  <div class="form-group">
  <label class=" pretty-checkbox">
  <span class="media">
      <span class="media-left checkbox-left">
      <input type="checkbox" id="" name="checkbox_contact" class="button">
              <span class="mdi-action-done"></span>
            
          </span>
      </span>

      <span class="media-body">
          Please tick this box if you wish to receive marketing information from us.
          Please see our <a href="https://www.netmatters.co.uk/privacy-policy" target="_blank" rel="noopener noreferrer">Privacy Policy</a> for more information on how we keep your data safe.
      </span>
  </span>
  </label>
  </div>

  <div class="action-block">
  <button name="submit" class="btn btn-web">
      Send Enquiry
  </button>
  <small class="helper-text"><span class="text-danger">*</span> Fields Required</small>
  
  </div>
  </form>
  
 
  
      </div>
  
  </div>
  </div> <!-- end of container -->
  
                          </div>
                          </br>
                          </br>