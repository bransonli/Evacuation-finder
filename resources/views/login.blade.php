<!DOCTYPE html>
<html>

<head>
    <title> NEAT </title>
</head>


<body>
	<div>
	
		<h1> Log in </h1>
	
	</div>

	<div>
		<form action="POST" action= ""></form>
		@csrf
		<div>
			<label for="name"> Full name</label>
			<div>
				<input type="text" name = "name" id="name">
				<br>
			</div>
		</div>


		<div>
			<label for="address"> Address</label>
			<div>
				<input type="text" name = "address" id="address">
				<br>
			</div>
		</div>

		<div>
			<label for="name"> Age</label>
			<div>
				<input type="text" name = "age" id="age">
				<br>
			</div>
		</div>

		<div>
			<div class="control"> 
            <br>
				<button type="submit"> submit  </button>
			</div>
		
		
		
		</div>


		
	</div>

	
</body>

</html>