@extends('layout')
@section('title')
<head>
  <title>About</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
@stop
<body>

<header class="w3-container w3-red w3-center" style="padding:32px 16px">
	
    <h1 class="w3-margin w3-jumbo">About Us</h1>

</header>


<h2 style="text-align:center">some tagline</h2>
<div class="container">

  <p>Some text that describes the company lorem ipsum ipsum lorem.Some text that describes the company lorem ipsum ipsum lorem.Some text that describes the company lorem ipsum ipsum lorem.Some text that describes the company lorem ipsum ipsum lorem.Some text that describes the company lorem ipsum ipsum lorem.</p>
  <br>
  <br>
  <br>
  <br>
  <br>

    
</div>
<br>
<div class="column">
  <div class="w3-row-padding w3-black w3-opacity w3-center w3-padding-32 w3-container">
    <h1>Contact Us</h1>
    <p class="title">Got any questions? We are here to hep!</p>
    <form action="/you'll_get_sent_here.php">
  
      <br>
      <label for="email">Email:</label><br>
      <input type="text" id="email" name="email" value=""><br>
      <label for="Question">Question:</label><br>
      <input type="text" id="Question" name="Question" value=""><br><br>
      <input class="button" type="submit" value="Submit">
    </form> 

  </div>
</div>
  
 

</body>
</html>

