<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pranjal World</title>
    <link rel="stylesheet" href="css/style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
  <script>
 $(document).ready(function() {
    $('#myForm').submit(function(e) {

        e.preventDefault(); 
      $.ajax({
          url:'https://api.apispreadsheets.com/data/11435/',
          type:'post',
          data:$("#myForm").serializeArray(),
          success: function(){

            $.ajax({
          url:'https://pranjalworld.000webhostapp.com/db.php',
          type:'post',
          data:$("#myForm").serializeArray(),
          success: function(){
                  },
          error: function(){
            alert("There was an error :(")
          }
      });            
            alert("Form Data Submitted :)");
           location.reload();
          },
          error: function(){
            alert("There was an error :(")
          }
      });

     


  });
});
 
  </script>

  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            The page is build by Pranjal Maurya
            Happy to Help you. Fill the Contact Us form
            Our team will Contact You Soon
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>92 Cantt Varanasi, 221002</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>Pranjal@World.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>8081388534</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form id="myForm" method="post" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="full_name" class="input" />
              <label for="">Full Name</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="Age" class="input" />
              <label for="">Age</label>
              <span>Age</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
          <input type="submit" name="submit" class="btn" />
                   </form>

        </div>
      </div>
    </div>

    <script src="js/app.js"></script>
  </body>
</html>
