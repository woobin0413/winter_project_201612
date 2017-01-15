	<?php
	session_start();
	?>

	<!DOCTYPE html>
	<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/header.css">



  </head>
  <body>
 
  <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop>

<source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
<source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">
</video>



        <?php
        if(isset($_SESSION['id'])) {
         echo "<a href='../home.html'><button>Home</button></a>";

         


         echo "<a href='includes/logout.inc.php'><button> LOGOUT</button></a>
       </form>";

     }

     else {
      echo "";
    }
    ?>


    <header>
     <nav>
      <ul>

       <?php
       if(isset($_SESSION['id'])) {
        $message = "Welcome Back!!";
        echo "<script type='text/javascript'>alert('$message');</script>";

      } else {

        echo "<div class='form'>
        <ul class='tab-group'>

         <li class='tab'><a href='#signup'>SIGN UP</a><li>
          <li class='tab'><a href='#login'>Log In</a><li>
          </ul>

          <div class = 'tab-content'>
            <div id='signup'>   
              <h1>Sign Up for Free</h1>



              <form action='includes/signup.inc.php' method='POST'>

                <div class='top-row'>
                  <div class='field-wrap'>
                    <label>
                      First Name<span class='req'>*</span>
                    </label>
                    <input type='text' name='first' required autocomplete='off' />
                  </div>

                  <div class='field-wrap'>
                    <label>
                      Last Name<span class='req'>*</span>
                    </label>
                    <input type='text' name='last' required autocomplete='off' />
                  </div>
                </div>

                <div class= 'field-wrap'>
                  <label>
                    Username <span class='req'>*</span>
                  </label>
                  <input type='text' name='uid' required autocomplete='off' />
                </div>

                <div class= 'field-wrap'>
                  <label>
                    Password <span class='req'>*</span>
                  </label>
                  <input type='password' name='pwd' required autocomplete='off' />
                </div>

                <button type='submit' class='button button-block'/>Get Started</button>


              </form>

            </div>


            <div id = 'login'>
             <h1>WELCOME BACK!</h1>
             <form action='includes/login.inc.php' method='POST'>
              <div class='field-wrap'>
               <label>
                Username<span class='req'>*</span>
              </label>
              <input type='text' name ='uid' required autocomplete='off'/>
            </div>

            <div class='field-wrap'>
             <label>
              Password<span class='req'>*</span>
            </label>
            <input type='password' name = 'pwd' required autocomplete='off'/>
          </div>

          <button class='button button-block' type='submit'/>Log In</button>

        </form>
      </div> 

					</div>"; //form


       }



       ?>


     </ul>
   </nav>
 </header>




 <?php

 $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

 if(strpos($url, 'error=passworderror')!== false){
    
  $message = "Your username or password is incorrect!";
        echo "<script type='text/javascript'>alert('$message');</script>";

 }
 elseif(strpos($url, 'error=username') !== false){

  $message = "Username already exisits!!";
  echo "<script type='text/javascript'>alert('$message');</script>";

}



?>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type="text/javascript">
 $('.form').find('input, textarea').on('keyup blur focus', function (e) {

  var $this = $(this),
  label = $this.prev('label');

  if (e.type === 'keyup') {
   if ($this.val() === '') {
    label.removeClass('active highlight');
  } else {
    label.addClass('active highlight');
  }
} else if (e.type === 'blur') {
 if( $this.val() === '' ) {
  label.removeClass('active highlight');  
} else {
  label.removeClass('highlight');   
}   
} else if (e.type === 'focus') {

  if( $this.val() === '' ) {
    label.removeClass('highlight'); 
  } 
  else if( $this.val() !== '' ) {
    label.addClass('highlight');
  }
}

});

 $('.tab a').on('click', function (e) {

  e.preventDefault();

  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');

  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();

  $(target).fadeIn(600);

});


</script>
</body>
</html>
