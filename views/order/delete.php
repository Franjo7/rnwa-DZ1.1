<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Delete Order</title>
  </head>
  <body>
    <h2>Delete Order</h2>
    <form action="?controller=orders&action=delete&id=<?php echo $order->OrderID; ?>" method="post">
      <p>Are you sure you want to delete this order?</p>
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
      <input type="hidden" name="confirmed" value="true">
      <input type="submit" value="Delete">
    </form>
    <p><a href="?controller=orders">Back to Order List</a></p>
  </body>
</html>