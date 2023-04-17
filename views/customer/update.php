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


<h1>Update Customer</h1>
<form action="?controller=customers&action=update" method="POST">
  <label>Customer ID:</label><br>
  <input type="text" name="customer_id" value="<?= $customer->getCustomerId() ?>"><br>
  <label>Company Name:</label><br>
  <input type="text" name="company_name" value="<?= $customer->getCompanyName() ?>"><br>
  <label>Contact Name:</label><br>
  <input type="text" name="contact_name" value="<?= $customer->getContactName() ?>"><br>
  <label>Contact Title:</label><br>
  <input type="text" name="contact_title" value="<?= $customer->getContactTitle() ?>"><br>
  <label>Address:</label><br>
  <input type="text" name="address" value="<?= $customer->getAddress() ?>"><br>
  <label>City:</label><br>
  <input type="text" name="city" value="<?= $customer->getCity() ?>"><br>
  <label>Region:</label><br>
  <input type="text" name="region" value="<?= $customer->getRegion() ?>"><br>
  <label>Postal Code:</label><br>
  <input type="text" name="postal_code" value="<?= $customer->getPostalCode() ?>"><br>
  <label>Country:</label><br>
  <input type="text" name="country" value="<?= $customer->getCountry() ?>"><br>
  <label>Phone:</label><br>
  <input type="text" name="phone" value="<?= $customer->getPhone() ?>"><br>
  <label>Fax:</label><br>
  <input type="text" name="fax" value="<?= $customer->getFax() ?>"><br>
  <input type="submit" value="Update">
</form>
