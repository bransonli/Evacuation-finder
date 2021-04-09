@extends('layout')
@section('title')
<head>
    <title> NEAT </title>
</head>
@stop
@section('content')
<body>
    <header class="w3-container w3-red w3-center" style="padding: 64px;px 16px">
	
        <h1 class="w3-margin w3-jumbo">SIGN UP</h1>
	
	</header>

	<div class='w3-center'>
		<form class = "w3-forms" method='POST' action= "/store_user">
            @csrf
            <div class="w3-row-padding  w3-indigo w3-padding-32 w3-container">
                <label for="name"> <b> Full name</b></label>
                <div>
                    <input type="text" name = "name" id="name">
                    <br>
                </div>
            </div>


            <div class="w3-row-padding w3-indigo w3-padding-32 w3-container" >
                <label for="address"><b> Address</b> (Please only put one word per box)</label>
                <div>
                    <input type="text" name = "address1" id="address1">
                    <input type="text" name = "address2" id="address2">
                    <input type="text" name = "address3" id="address3">
                    <input type="text" name = "address4" id="address4">
                    <br>
                </div>
            </div>

            <div class="w3-row-padding w3-indigo w3-padding-32 w3-container">
                <label for="name"> <b> Phone Number </b></label>
                <div>
                    <input type="integer" name = "phone" id="phone">
                    <br>
                </div>
            </div>

            <div class="w3-row-padding w3-indigo w3-padding-64 w3-container">
                <div class="control"> 
                <br>
                    <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top" type="submit"> submit  </button>
                </div>
            
            
            
            </div>
        </form>


		
	</div>

    
</body>

@stop