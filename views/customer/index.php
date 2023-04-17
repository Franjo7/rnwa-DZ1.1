<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Customers List</title>
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
  <h1>Customers List</h1>
  <table>
    <tr>
      <th>Customer ID</th>
      <th>Company Name</th>
      <th>Contact Name</th>
      <th>Contact Title</th>
      <th>City</th>
      <th>Country</th>
      <th>Actions</th>
    </tr>
    <?php foreach($customers as $customer) { ?>
    <tr>
      <td><?php echo $customer->CustomerID; ?></td>
      <td><?php echo $customer->CompanyName; ?></td>
      <td><?php echo $customer->ContactName; ?></td>
      <td><?php echo $customer->ContactTitle; ?></td>
      <td><?php echo $customer->City; ?></td>
      <td><?php echo $customer->Country; ?></td>
      <td class="actions">
        <a href="?controller=customers&action=show&id=<?php echo $customer->CustomerID; ?>">Show</a>
        <a href="?controller=customers&action=update&id=<?php echo $customer->CustomerID; ?>">Update</a>
        <a href="?controller=customers&action=deletecustomer&id=<?php echo $customer->CustomerID; ?>">Delete</a>
      </td>
    </tr>
    <?php } ?>
  </table>
  <div style="text-align: center;">
    <a href="?controller=customers&action=create">Add new customer</a>
  </div>
</body>
</html>