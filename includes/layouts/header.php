<!DOCTYPE html>
<html lang="en">

<head>
  <link href="stylesheets/header.css" media="all" rel="stylesheet" type="text/css" />
  <link href="stylesheets/login.css" media="all" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="stylesheets/login.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        
      <div class="navbar-header pull-left">     
        <a class="navbar-brand" href="index.php">Complaint Management System</a>
      </div>
      <div class="navbar-header pull-right">
         <button type="button" class="navbar-toggle" 
                data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          
        <p class="navbar-text">
          <b> '.$username.' </b>
          <a href="logout.php" class="navbar-link">Logout</a>&nbsp;
        </p>  
      </div>
        
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      
    </div>
</div>
