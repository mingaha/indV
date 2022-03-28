<!DOCTYPE >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PDO OOP CRUD using Bootstrap</title>
<!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">MingahaApp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_contact.php">nouveau</a>
      </li>
     
    <form class="form-inline my-2 my-lg-0" style="display: flex;" action="recherch_contact.php?rech_id= <?php $_GET['rech']?>" >
      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="rech" aria-label="Search">
   
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Search</button>
  
    </form>
  </div>
</nav>
 
    </div>
</div>

