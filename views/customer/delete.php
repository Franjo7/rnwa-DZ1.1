<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Delete Customer</title>
  </head>
  <body>
    <h2>Delete Customer</h2>
    <form action="?controller=customers&action=deletecustomer&id=<?php echo $customer->CustomerID; ?>" method="post">
      <p>Are you sure you want to delete this customer?</p>
      <p><strong>Customer ID:</strong> <?php echo $customer->CustomerID; ?></p>
      <p><strong>Company Name:</strong> <?php echo $customer->CompanyName; ?></p>
      <p><strong>Contact Name:</strong> <?php echo $customer->ContactName; ?></p>
      <p><strong>Contact Title:</strong> <?php echo $customer->ContactTitle; ?></p>
      <p><strong>Address:</strong> <?php echo $customer->Address; ?></p>
      <p><strong>City:</strong> <?php echo $customer->City; ?></p>
      <p><strong>Region:</strong> <?php echo $customer->Region; ?></p>
      <p><strong>Postal Code:</strong> <?php echo $customer->PostalCode; ?></p>
      <p><strong>Country:</strong> <?php echo $customer->Country; ?></p>
      <p><strong>Phone:</strong> <?php echo $customer->Phone; ?></p>
      <p><strong>Fax:</strong> <?php echo $customer->Fax; ?></p>
      <input type="hidden" name="confirmed" value="true">
      <input type="submit" value="Delete">
    </form>
    <p><a href="?controller=customers">Back to Customer List</a></p>
  </body>
</html>