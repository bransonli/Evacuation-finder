
@extends('layout')


@section('title')
<head>
    <title> NEAT </title>
</head>
@stop

@section('content')
<body>
<header class="w3-container w3-red w3-center" style="padding:32px 16px">
	
    <h1 class="w3-margin w3-jumbo">Login</h1>

</header>

	<div >
		<form method='POST' action= "/check_user">
            @csrf
            <div class="w3-row-padding w3-indigo w3-center w3-padding-32 w3-container">
                <label for="name"><b> Full name</b></label>
                <div>
                    <input type="text" name = "name" id="name">
                    <br>
                </div>
            </div>


          
            <div class="w3-row-padding w3-indigo w3-center w3-padding-64 w3-container"> 
            <br>
                <button class ="w3-button w3-black w3-padding-large w3-large w3-margin-top" type="submit"> Submit  </button>
            </div>
            
            
            
            
        </form>


		
	</div>
@stop
	
