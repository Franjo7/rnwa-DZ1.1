<style>form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
  max-width: 800px;
  margin: 0 auto;
}

label {
  font-weight: bold;
}

@media screen and (max-width: 768px) {
  form {
    grid-template-columns: 1fr;
  }
}
</style>
<h1>Update Employee</h1>
<form action="?controller=employees&action=update" method="POST">
  <label>Employee ID:</label><br>
  <input type="text" name="employee_id" value="<?= $employee->getEmployeeId() ?>"><br>
  <label>Last Name:</label><br>
  <input type="text" name="last_name" value="<?= $employee->getLastName() ?>"><br>
  <label>First Name:</label><br>
  <input type="text" name="first_name" value="<?= $employee->getFirstName() ?>"><br>
  <label>Title:</label><br>
  <input type="text" name="title" value="<?= $employee->getTitle() ?>"><br>
  <label>Title Of Courtesy:</label><br>
  <input type="text" name="title_of_courtesy" value="<?= $employee->getTitleOfCourtesy() ?>"><br>
  <label>Birth Date:</label><br>
  <input type="date" name="birth_date" value="<?= $employee->getBirthDate() ?>"><br>
  <label>Hire Date:</label><br>
  <input type="date" name="hire_date" value="<?= $employee->getHireDate() ?>"><br>
  <label>Address:</label><br>
  <input type="text" name="address" value="<?= $employee->getAddress() ?>"><br>
  <label>City:</label><br>
  <input type="text" name="city" value="<?= $employee->getCity() ?>"><br>
  <label>Region:</label><br>
  <input type="text" name="region" value="<?= $employee->getRegion() ?>"><br>
  <label>Postal Code:</label><br>
  <input type="text" name="postal_code" value="<?= $employee->getPostalCode() ?>"><br>
  <label>Country:</label><br>
  <input type="text" name="country" value="<?= $employee->getCountry() ?>"><br>
  <label>Home Phone:</label><br>
  <input type="text" name="home_phone" value="<?= $employee->getHomePhone() ?>"><br>
  <label>Extension:</label><br>
  <input type="text" name="extension" value="<?= $employee->getExtension() ?>"><br>
  <label>Reports To:</label><br>
  <input type="text" name="reports_to" value="<?= $employee->getReportsTo() ?>"><br>
  <input type="submit" value="Update">
</form>