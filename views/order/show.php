<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Order Details</title>
</head>
<body>
  <h1>Order Details</h1>
  <p><strong>Order ID:</strong> <?php echo $order->OrderID; ?></p>
  <p><strong>Customer ID:</strong> <?php echo $order->CustomerID; ?></p>
  <p><strong>Employee ID:</strong> <?php echo $order->EmployeeID; ?></p>
  <p><strong>Order Date:</strong> <?php echo $order->OrderDate; ?></p>
  <p><strong>Required Date:</strong> <?php echo $order->RequiredDate; ?></p>
  <p><strong>Shipped Date:</strong> <?php echo $order->ShippedDate; ?></p>
  <p><strong>Ship Via:</strong> <?php echo $order->ShipVia; ?></p>
  <p><strong>Freight:</strong> <?php echo $order->Freight; ?></p>
  <p><strong>Ship Name:</strong> <?php echo $order->ShipName; ?></p>
  <p><strong>Ship Address:</strong> <?php echo $order->ShipAddress; ?></p>
  <p><strong>Ship City:</strong> <?php echo $order->ShipCity; ?></p>
  <p><strong>Ship Region:</strong> <?php echo $order->ShipRegion; ?></p>
  <p><strong>Ship Postal Code:</strong> <?php echo $order->ShipPostalCode; ?></p>
  <p><strong>Ship Country:</strong> <?php echo $order->ShipCountry; ?></p>
  <br>
</body>
</html>