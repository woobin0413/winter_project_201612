


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <style type="text/css">
   @-webkit-keyframes typing { from { width: 0; } }
   @-webkit-keyframes blink-caret { 50% { border-color: transparent; } }


  p {

    float: left;
    font-size: 40px;
    margin-left: 350px;
    font: bold 2em monospace;
    color: black;
    font-weight: bold;
    border-right: .1em solid black;
    width: calc(1.10em * 14); 
    white-space: nowrap;
    overflow: hidden;
    -webkit-animation: typing 8s steps(40, end),
    blink-caret .5s step-end infinite alternate;
    border: 1px solid #ccc;
    margin-right: 100px;
  }


</style>


<!--

if(isset($_SESSION['id'])) {
  echo "<p class='pCenter'>You are already logged in!</p>"; 
  
} 
else {
  echo "<form action='includes/signup.inc.php' method='POST'>
  <input type='text' name='first' placeholder='Firstname'><br>
  <input type='text' name='last' placeholder='Lastname'><br>
  <input type='text' name='uid' placeholder='Username'><br>
  <input type='password' name='pwd' placeholder='Password'><br>
  <button type='submit'>SIGN UP</button>
</form>";

}
?>
-->