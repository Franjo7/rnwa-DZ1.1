<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Orders List</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    h1 {
      text-align: center;
      margin-top: 50px;
      margin-bottom: 30px;
    }
    table {
      border-collapse: collapse;
      width: 100%;
      max-width: 800px;
      margin: auto;
      margin-bottom: 50px;
    }
    th, td {
      text-align: left;
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #f2f2f2;
    }
    tr:hover {
      background-color: #f5f5f5;
    }
    a {
      text-decoration: none;
      color: #000;
    }
    .actions {
      display: flex;
      justify-content: center;
    }
    .actions a {
      margin-right: 10px;
    }
    @media screen and (max-width: 600px) {
      th, td {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
  <h1>Orders List</h1>
  <table>
    <tr>
      <th>Order ID</th>
      <th>Customer ID</th>
      <th>Employee ID</th>
      <th>Order Date</th>
      <th>Shipped Date</th>
      <th>Ship Via</th>
      <th>Freight</th>
      <th>Ship Name</th>
      <th>Ship Address</th>
      <th>Ship City</th>
      <th>Ship Region</th>
      <th>Ship Postal Code</th>
      <th>Ship Country</th>
      <th>Actions</th>
    </tr>
    <?php foreach($orders as $order) { ?>
    <tr>
      <td><?php echo $order->OrderID; ?></td>
      <td><?php echo $order->CustomerID; ?></td>
      <td><?php echo $order->EmployeeID; ?></td>
      <td><?php echo $order->OrderDate; ?></td>
      <td><?php echo $order->ShippedDate; ?></td>
      <td><?php echo $order->ShipVia; ?></td>
      <td><?php echo $order->Freight; ?></td>
      <td><?php echo $order->ShipName; ?></td>
      <td><?php echo $order->ShipAddress; ?></td>
      <td><?php echo $order->ShipCity; ?></td>
      <td><?php echo $order->ShipRegion; ?></td>
      <td><?php echo $order->ShipPostalCode; ?></td>
      <td><?php echo $order->ShipCountry; ?></td>
      <td class="actions">
      <a href="?controller=orders&action=show&id=<?php echo $order->OrderID; ?>">Show</a>
      <a href="?controller=orders&action=update&id=<?php echo $order->OrderID; ?>">Update</a>
      <a href="?controller=orders&action=delete&id=<?php echo $order->OrderID; ?>">Delete</a>
    </td>
  </tr>
  <?php } ?>
</table>
<div style="text-align: center;">
  <a href="?controller=orders&action=create">Add new order</a>
</div>

</body>
  </html>