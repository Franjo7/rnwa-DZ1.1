<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Employee Details</title>
</head>
<body>
  <h1>Employee Details</h1>
  <p><strong>Employee ID:</strong> <?php echo $employee->EmployeeID; ?></p>
  <p><strong>Last Name:</strong> <?php echo $employee->LastName; ?></p>
  <p><strong>First Name:</strong> <?php echo $employee->FirstName; ?></p>
  <p><strong>Title:</strong> <?php echo $employee->Title; ?></p>
  <p><strong>Title Of Courtesy:</strong> <?php echo $employee->TitleOfCourtesy; ?></p>
  <p><strong>Birth Date:</strong> <?php echo $employee->BirthDate; ?></p>
  <p><strong>Hire Date:</strong> <?php echo $employee->HireDate; ?></p>
  <p><strong>Address:</strong> <?php echo $employee->Address; ?></p>
  <p><strong>City:</strong> <?php echo $employee->City; ?></p>
  <p><strong>Region:</strong> <?php echo $employee->Region; ?></p>
  <p><strong>Postal Code:</strong> <?php echo $employee->PostalCode; ?></p>
  <p><strong>Country:</strong> <?php echo $employee->Country; ?></p>
  <p><strong>Home Phone:</strong> <?php echo $employee->HomePhone; ?></p>
  <p><strong>Extension:</strong> <?php echo $employee->Extension; ?></p>
  <p><strong>Reports To:</strong> <?php echo $employee->ReportsTo; ?></p>
  <br>
</body>
</html>