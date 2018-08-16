<!DOCTYPE html>
<html>
<title>DTOXD : Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
  <body>
  <!-- Contact -->
  <div class="w3-center w3-padding-32" id="contact">
    <span class="w3-xlarge w3-bottombar w3-border-indigo w3-padding-16"><b>D T O X D</b></span>
  </div>
<br>
  <form class="w3-container" action="submit.php" method="POST">
    <div class="w3-section">
      <label>Name</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="name" required>
    </div>
 
    <div class="w3-section">
      <label>Email</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="email" required>
    </div>

    <div class="w3-section">
      <label>Contact</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="contact" required>
    </div>
    
    <div class="w3-section">
    <input type="checkbox" name="consent" value="consent" required>&nbsp;&nbsp;I, hereby declare that I am interested to be a part of <b>DTOXD</b> as a Beta User and give a consent to be contacted in near future. <br>
    </div>
    <br>
    <br>
    <center><button type="submit" class="w3-button w3-block w3-indigo"><b>SUBMIT</b></button></center>
  </form>

</div>
</body>
</html>
