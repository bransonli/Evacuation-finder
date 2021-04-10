
@extends('layout')


@section('title')
<head>
    <title> NEAT </title>
</head>
@stop

@section('content')
<body>
<header class="w3-container w3-red w3-center" style="padding:32px 16px">
	
    <h1 class="w3-margin w3-jumbo">Find your evacuation center</h1>

</header>

	<div >
		<form method='POST' action= "/check_user">
            @csrf
            <div class="w3-row-padding w3-indigo w3-center w3-padding-32 w3-container">
                <label for="name"><b> First name</b></label>
                <div>
                    <input type="text" name = "first_name" id="first_name">
                    <br>
                </div>
            </div>

            <div class="w3-row-padding w3-indigo w3-center w3-padding-32 w3-container">
                <label for="name"><b> Second name</b></label>
                <div>
                    <input type="text" name = "second_name" id="second_name">
                    <br>
                </div>
            </div>

            <div class="w3-row-padding w3-indigo w3-center w3-padding-32 w3-container">
                <label for="name"><b> Last name</b></label>
                <div>
                    <input type="text" name = "last_name" id="last_name">
                    <br>
                </div>

                <div>
                    <p style="color:red">
                        User not found 
                    </p>
                    
                    <p style="color:yellow">
                        NOTE: Please use the names you used when signing up
                    </p>
                </div>
            </div>

          

          
            <div class="w3-row-padding w3-indigo w3-center w3-padding-64 w3-container"> 
            <br>
                <button class ="w3-button w3-black w3-padding-large w3-large w3-margin-top" type="submit"> Submit  </button>
            </div>
            
            <div class="w3-row-padding w3-black w3-center w3-padding-32 w3-container">
                <h2>Not registered yet?</h2>
                <a href="signup"> <h3>Signup Here</h3> </a>
            </div>
            
            
            
        </form>




		
	</div>
@stop
	
