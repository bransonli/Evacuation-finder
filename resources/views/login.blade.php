<!DOCTYPE html>
<html>

<head>
    <title> NEAT </title>
</head>


<body>
	<div>
	
		<h1> Log in  </h1>
	
	</div>

	<div>
		<form method='POST' action= "/check_user">
            @csrf
            <div>
                <label for="name"> Full name</label>
                <div>
                    <input type="text" name = "name" id="name">
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