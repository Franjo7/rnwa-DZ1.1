<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
      case 'customers':
        require_once('models/customer.php');
                $controller = new CustomersController();
      break;
      case 'employees':
        require_once('models/employee.php');
            $controller = new EmployeesController();
      break;
      case 'orders':
        // we need the model to query the database later in the controller
        require_once('models/order.php');
        $controller = new OrdersController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages'     => ['home', 'error'],
                       'customers' => ['index', 'show', 'deletecustomer'],
                       'employees'  => ['index', 'show','delete'],
                       'orders'     => ['index', 'show', 'delete']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>
