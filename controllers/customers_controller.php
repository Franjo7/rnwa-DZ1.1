<?php
  class CustomersController {
    public function index() {
      // we store all the customers in a variable
      $customers = Customer::all();
      require_once('views/customer/index.php');
    }

    public function show() {
      // we expect a url of form ?controller=customers&action=show&id=x
      // without an id we just redirect to the error page as we need the customer id to find it in the database
      if (!isset($_GET['id'])) {
        return call('pages', 'error');
      }

      // we use the given id to get the right customer
      $customer = Customer::find($_GET['id']);
      require_once('views/customer/show.php');
    }

    public function create() {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // create new customer
        $customer = new Customer($_POST['customer_id'], $_POST['company_name'], $_POST['contact_name'], $_POST['contact_title'], $_POST['address'], $_POST['city'], $_POST['region'], $_POST['postal_code'], $_POST['country'], $_POST['phone'], $_POST['fax']);
        $customer->save();
        header('Location: index.php?controller=customers&action=index');
      } else {
        // show create form
        require_once('views/customer/create.php');
      }
    }

    public function update() {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // update existing customer
        $customers = Customer::find($_POST['customer_id']);
        $customer->setCompanyName($_POST['company_name']);
        $customer->setContactName($_POST['contact_name']);
        $customer->setContactTitle($_POST['contact_title']);
        $customer->setAddress($_POST['address']);
        $customer->setCity($_POST['city']);
        $customer->setRegion($_POST['region']);
        $customer->setPostalCode($_POST['postal_code']);
        $customer->setCountry($_POST['country']);
        $customer->setPhone($_POST['phone']);
        $customer->setFax($_POST['fax']);
        $customer->save();
        header('Location: index.php?controller=customers&action=index');
      } else {
        // show update form
        if (!isset($_GET['id'])) {
          return call('pages', 'error');
        }
        $customers = Customer::find($_GET['id']);
        require_once('views/customer/update.php');
      }
    }

    public function deletecustomer() {
      if (!isset($_GET['id']))
        return call('pages', 'error');
    
      // we use the given id to delete the right customer
      $customers = Customer::deletecustomer($_GET['id']);
      require_once('views/customer/delete.php');
    }
    
    
  }
?>
