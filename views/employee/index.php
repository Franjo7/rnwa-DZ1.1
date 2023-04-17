<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Employees List</title>
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
  <h1>Employees List</h1>
  <table>
    <tr>
      <th>Employee ID</th>
      <th>Last Name</th>
      <th>First Name</th>
      <th>Title</th>
      <th>Title of Courtesy</th>
      <th>Birth Date</th>
      <th>Hire Date</th>
      <th>Address</th>
      <th>City</th>
      <th>Actions</th>
    </tr>
    <?php foreach($employees as $employee) { ?>
    <tr>
      <td><?php echo $employee->EmployeeID; ?></td>
      <td><?php echo $employee->LastName; ?></td>
      <td><?php echo $employee->FirstName; ?></td>
      <td><?php echo $employee->Title; ?></td>
      <td><?php echo $employee->TitleOfCourtesy; ?></td>
      <td><?php echo $employee->BirthDate; ?></td>
      <td><?php echo $employee->HireDate; ?></td>
      <td><?php echo $employee->Address; ?></td>
      <td><?php echo $employee->City; ?></td>
      <td class="actions">
      <a href="?controller=employees&action=show&id=<?php echo $employee->EmployeeID; ?>">Show</a>
      <a href="?controller=employees&action=update&id=<?php echo $employee->EmployeeID; ?>">Update</a>
      <a href="?controller=employees&action=delete&id=<?php echo $employee->EmployeeID; ?>">Delete</a>
      </td>

  </tr>
  <?php } ?>
</table>
<div style="text-align: center;">
  <a href="?controller=employees&action=create">Add new employee</a>
</div>
</body>
</html>