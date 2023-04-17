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
<h1>Update Order</h1>
<form action="?controller=orders&action=update" method="POST">
  <label>Order ID:</label><br>
  <input type="text" name="order_id" value="<?= $order->getOrderId() ?>"><br>
  <label>Customer ID:</label><br>
  <input type="text" name="customer_id" value="<?= $order->getCustomerId() ?>"><br>
  <label>Employee ID:</label><br>
  <input type="text" name="employee_id" value="<?= $order->getEmployeeId() ?>"><br>
  <label>Order Date:</label><br>
  <input type="date" name="order_date" value="<?= $order->getOrderDate() ?>"><br>
  <label>Required Date:</label><br>
  <input type="date" name="required_date" value="<?= $order->getRequiredDate() ?>"><br>
  <label>Shipped Date:</label><br>
  <input type="date" name="shipped_date" value="<?= $order->getShippedDate() ?>"><br>
  <label>Ship Via:</label><br>
  <input type="text" name="ship_via" value="<?= $order->getShipVia() ?>"><br>
  <label>Freight:</label><br>
  <input type="text" name="freight" value="<?= $order->getFreight() ?>"><br>
  <label>Ship Name:</label><br>
  <input type="text" name="ship_name" value="<?= $order->getShipName() ?>"><br>
  <label>Ship Address:</label><br>
  <input type="text" name="ship_address" value="<?= $order->getShipAddress() ?>"><br>
  <label>Ship City:</label><br>
  <input type="text" name="ship_city" value="<?= $order->getShipCity() ?>"><br>
  <label>Ship Region:</label><br>
  <input type="text" name="ship_region" value="<?= $order->getShipRegion() ?>"><br>
  <label>Ship Postal Code:</label><br>
  <input type="text" name="ship_postal_code" value="<?= $order->getShipPostalCode() ?>"><br>
  <label>Ship Country:</label><br>
  <input type="text" name="ship_country" value="<?= $order->getShipCountry() ?>"><br>
  <input type="submit" value="Update">
</form>