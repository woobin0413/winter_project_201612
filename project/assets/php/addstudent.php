 <!doctype html>
<html>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css"></style>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="album.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>


<head>
<title>Donator Info</title>
</head>
<body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href= "../../home.html">SPACE B</a> </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="../../home.html">Home</a></li>
              <li><a href="#">Messages</a></li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
              <div class="form-group input-group">
                <input type= "text" class="form-control" placeholder="Search.."> <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                  <span class="glyphicon glyphicon-search"></span> </button>
                </span>
              </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="assets/php/addstudent.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="signin.html"><span class="glyphicon glyphicon-user"></span> Sign In</a></li>
            </ul>
          </div>
        </div>
      </nav>
<br><br><br><br><br>
<form action="http://localhost:1234/practice/studentadded.php" method="post">
<div class="container">
  <div class="jumbotron">
    <h1>Add a New Student</h1> 
    
<br>
<p>First Name:
<input type="text" name="first_name" size="30" value="" />
</p>
 
<p>Last Name:
<input type="text" name="last_name" size="30" value="" />
</p>
 
<p>
<input type="submit" name="submit" value="Send" />
</p>
 
</form>
  </div>


 </div>
</form>
</body>
</html>
