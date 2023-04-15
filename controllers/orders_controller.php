<?php
class OrdersController {
  public function index() {
    // we store all the orders in a variable
    $orders = Order::all();
    require_once('views/order/index.php');
  }

  public function show() {
    // we expect a url of form ?controller=orders&action=show&id=x
    // without an id we just redirect to the error page as we need the order id to find it in the database
    if (!isset($_GET['id'])) {
      return call('pages', 'error');
    }

    // we use the given id to get the right order
    $order = Order::find($_GET['id']);
    require_once('views/order/show.php');
  }

  public function create() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // create new order
      $order = new Order($_POST['customer_id'], $_POST['employee_id'], $_POST['order_date'], $_POST['required_date'], $_POST['shipped_date'], $_POST['ship_via'], $_POST['freight'], $_POST['ship_name'], $_POST['ship_address'], $_POST['ship_city'], $_POST['ship_region'], $_POST['ship_postal_code'], $_POST['ship_country']);
      $order->save();
      header('Location: index.php?controller=orders&action=index');
    } else {
      // show create form
      require_once('views/order/create.php');
    }
  }

  public function update() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // update existing order
      $order = Order::find($_POST['order_id']);
      $order->setCustomerId($_POST['customer_id']);
      $order->setEmployeeId($_POST['employee_id']);
      $order->setOrderDate($_POST['order_date']);
      $order->setRequiredDate($_POST['required_date']);
      $order->setShippedDate($_POST['shipped_date']);
      $order->setShipVia($_POST['ship_via']);
      $order->setFreight($_POST['freight']);
      $order->setShipName($_POST['ship_name']);
      $order->setShipAddress($_POST['ship_address']);
      $order->setShipCity($_POST['ship_city']);
      $order->setShipRegion($_POST['ship_region']);
      $order->setShipPostalCode($_POST['ship_postal_code']);
      $order->setShipCountry($_POST['ship_country']);
      $order->save();
      header('Location: index.php?controller=orders&action=index');
    } else {
      // show update form
      if (!isset($_GET['id'])) {
        return call('pages', 'error');
      }
      $order = Order::find($_GET['id']);
      require_once('views/order/update.php');
    }
  }

  public function delete() {
    if (!isset($_GET['id']))
      return call('pages', 'error');
  
    // we use the given id to delete the right order
    $order = Order::delete($_GET['id']);
    require_once('views/order/delete.php');
  }
}

?>