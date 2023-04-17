<!DOCTYPE html>
<html>
<head>
	<title>Create New Order</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}

        .container {
		background-color: #ffffff;
		border-radius: 5px;
		box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
		margin: 0 auto;
		max-width: 600px;
		padding: 20px;
	}

	input[type=text], select {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}

	input[type=submit] {
		background-color: #4CAF50;
		color: white;
		padding: 12px 20px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}

	input[type=submit]:hover {
		background-color: #45a049;
	}

</style>
</head>
<body>
<div class="container">

<h2>Create New Order</h2>

<form action="/orders/store" method="POST">

    <label for="CustomerID">Customer ID</label>
    <input type="text" id="CustomerID" name="CustomerID" placeholder="Enter Customer ID">

    <label for="EmployeeID">Employee ID</label>
    <input type="text" id="EmployeeID" name="EmployeeID" placeholder="Enter Employee ID">

    <label for="OrderDate">Order Date</label>
    <input type="text" id="OrderDate" name="OrderDate" placeholder="Enter Order Date (YYYY-MM-DD)">

    <label for="RequiredDate">Required Date</label>
    <input type="text" id="RequiredDate" name="RequiredDate" placeholder="Enter Required Date (YYYY-MM-DD)">

    <label for="ShippedDate">Shipped Date</label>
    <input type="text" id="ShippedDate" name="ShippedDate" placeholder="Enter Shipped Date (YYYY-MM-DD)">

    <label for="ShipVia">Ship Via</label>
    <input type="text" id="ShipVia" name="ShipVia" placeholder="Enter Ship Via">

    <label for="Freight">Freight</label>
    <input type="text" id="Freight" name="Freight" placeholder="Enter Freight">

    <label for="ShipName">Ship Name</label>
    <input type="text" id="ShipName" name="ShipName" placeholder="Enter Ship Name">

    <label for="ShipAddress">Ship Address</label>
    <input type="text" id="ShipAddress" name="ShipAddress" placeholder="Enter Ship Address">

    <label for="ShipCity">Ship City</label>
    <input type="text" id="ShipCity" name="ShipCity" placeholder="Enter Ship City">

    <label for="ShipRegion">Ship Region</label>
    <input type="text" id="ShipRegion" name="ShipRegion" placeholder="Enter Ship Region">

    <label for="ShipPostalCode">Ship Postal Code</label>
    <input type="text" id="ShipPostalCode" name="ShipPostalCode" placeholder="Enter Ship Postal Code">

    <label for="Country">Country</label>
    <input type="text" id="Country" name="Country" placeholder="Enter Country">
    <input type="submit" value="Create">
    </form>
	</div>
	</body>
<html>



