<?php
class EmployeesController {
  public function index() {
    // we store all the employees in a variable
    $employees = Employee::all();
    require_once('views/employee/index.php');
  }

  public function show() {
    // we expect a url of form ?controller=employees&action=show&id=x
    // without an id we just redirect to the error page as we need the employee id to find it in the database
    if (!isset($_GET['id'])) {
      return call('pages', 'error');
    }

    // we use the given id to get the right employee
    $employee = Employee::find($_GET['id']);
    require_once('views/employee/show.php');
  }

  public function create() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // create new employee
      $employee = new Employee($_POST['last_name'], $_POST['first_name'], $_POST['title'], $_POST['title_of_courtesy'], $_POST['birth_date'], $_POST['hire_date'], $_POST['address'], $_POST['city'], $_POST['region'], $_POST['postal_code'], $_POST['country'], $_POST['home_phone'], $_POST['extension'], $_POST['reports_to']);
      $employee->save();
      header('Location: index.php?controller=employees&action=index');
    } else {
      // show create form
      require_once('views/employee/create.php');
    }
  }

  public function update() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // update existing employee
      $employee = Employee::find($_POST['employee_id']);
      $employee->setLastName($_POST['last_name']);
      $employee->setFirstName($_POST['first_name']);
      $employee->setTitle($_POST['title']);
      $employee->setTitleOfCourtesy($_POST['title_of_courtesy']);
      $employee->setBirthDate($_POST['birth_date']);
      $employee->setHireDate($_POST['hire_date']);
      $employee->setAddress($_POST['address']);
      $employee->setCity($_POST['city']);
      $employee->setRegion($_POST['region']);
      $employee->setPostalCode($_POST['postal_code']);
      $employee->setCountry($_POST['country']);
      $employee->setHomePhone($_POST['home_phone']);
      $employee->setExtension($_POST['extension']);
      $employee->setReportsTo($_POST['reports_to']);
      $employee->save();
      header('Location: index.php?controller=employees&action=index');
    } else {
      // show update form
      if (!isset($_GET['id'])) {
        return call('pages', 'error');
      }
      $employee = Employee::find($_GET['id']);
      require_once('views/employee/update.php');
    }
  }

  public function delete() {
    if (!isset($_GET['id']))
      return call('pages', 'error');
  
    // we use the given id to delete the right employee
    $employee = Employee::delete($_GET['id']);
    require_once('views/employee/delete.php');
  }
}

?>