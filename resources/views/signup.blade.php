<!DOCTYPE html>
<html>

<head>
    <title> NEAT </title>
</head>


<body>
	<div>
	
		<h1> Sign up  </h1>
	
	</div>

	<div>
		<form method='POST' action= "/store_user">
            @csrf
            <div>
                <label for="name"> Full name</label>
                <div>
                    <input type="text" name = "name" id="name">
                    <br>
                </div>
            </div>


            <div >
                <label for="address"> Address</label>
                <div>
                    <input type="text" name = "address" id="address">
                    <br>
                </div>
            </div>

            <div >
                <label for="name"> Age</label>
                <div>
                    <input type="integer" name = "age" id="age">
                    <br>
                </div>
            </div>

            <div>
                <div class="control"> 
                <br>
                    <button class = "button is-link" type="submit"> submit  </button>
                </div>
            
            
            
            </div>
        </form>


		
	</div>

	
</body>

</html>