<?php

class Employee {
  // define attributes
  public $EmployeeID;
  public $LastName;
  public $FirstName;
  public $Title;
  public $TitleOfCourtesy;
  public $BirthDate;
  public $HireDate;
  public $Address;
  public $City;
  public $Region;
  public $PostalCode;
  public $Country;
  public $HomePhone;
  public $Extension;
  public $ReportsTo;

    // constructor
    public function __construct($EmployeeID, $LastName, $FirstName, $Title, $TitleOfCourtesy, $BirthDate, $HireDate, $Address, $City, $Region, $PostalCode, $Country, $HomePhone, $Extension, $ReportsTo) {
      $this->EmployeeID = $EmployeeID;
      $this->LastName = $LastName;
      $this->FirstName = $FirstName;
      $this->Title = $Title;
      $this->TitleOfCourtesy = $TitleOfCourtesy;
      $this->BirthDate = $BirthDate;
      $this->HireDate = $HireDate;
      $this->Address = $Address;
      $this->City = $City;
      $this->Region = $Region;
      $this->PostalCode = $PostalCode;
      $this->Country = $Country;
      $this->HomePhone = $HomePhone;
      $this->Extension = $Extension;
      $this->ReportsTo = $ReportsTo;
    }


    // read all records
  public static function all() {
    $list = [];
    $db = Db::getInstance();
    $req = $db->query('SELECT * FROM Employees');

    foreach($req->fetchAll() as $employee) {
      $list[] = new Employee($employee['EmployeeID'], $employee['LastName'], $employee['FirstName'], $employee['Title'], $employee['TitleOfCourtesy'], $employee['BirthDate'], $employee['HireDate'], $employee['Address'], $employee['City'], $employee['Region'], $employee['PostalCode'], $employee['Country'], $employee['HomePhone'], $employee['Extension'],  $employee['ReportsTo']);
    }

    return $list;
  }


    // read one record by ID
    public static function find($id) {
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM Employees WHERE EmployeeID = :id');
      $req->execute(array('id' => $id));
      $employee = $req->fetch();
  
      return new Employee($employee['EmployeeID'], $employee['LastName'], $employee['FirstName'], $employee['Title'], $employee['TitleOfCourtesy'], $employee['BirthDate'], $employee['HireDate'], $employee['Address'], $employee['City'], $employee['Region'], $employee['PostalCode'], $employee['Country'], $employee['HomePhone'], $employee['Extension'],  $employee['ReportsTo']);
    }

    // create a new record
public static function create($data) {
  $db = Db::getInstance();
  $req = $db->prepare('INSERT INTO Employees (LastName, FirstName, Title, TitleOfCourtesy, BirthDate, HireDate, Address, City, Region, PostalCode, Country, HomePhone, Extension, ReportsTo)
  VALUES (:LastName, :FirstName, :Title, :TitleOfCourtesy, :BirthDate, :HireDate, :Address, :City, :Region, :PostalCode, :Country, :HomePhone, :Extension, :ReportsTo)');
  $req->execute($data);
  return $db->lastInsertId();
  }
  
  // update a record by ID
  public static function update($id, $data) {
  $db = Db::getInstance();
  $req = $db->prepare('UPDATE Employees SET LastName = :LastName, FirstName = :FirstName, Title = :Title, TitleOfCourtesy = :TitleOfCourtesy, BirthDate = :BirthDate, HireDate = :HireDate, Address = :Address, City = :City, Region = :Region, PostalCode = :PostalCode, Country = :Country, HomePhone = :HomePhone, Extension = :Extension, ReportsTo = :ReportsTo WHERE EmployeeID = :id');
  $data['id'] = $id;
  $req->execute($data);
  }
  
  // delete a record by ID
  public static function delete($id) {
  $db = Db::getInstance();
  // we make sure $id is an integer
  $id = intval($id);
  $req = $db->prepare('DELETE FROM Employees WHERE EmployeeID = :id');
  // the query was prepared, now we replace :id with our actual $id value
  if ($req->execute(array('id' => $id))) {
  return "USPJESNO brisanje";
  } else {
  return "NESPJESNO brisanje";
  }
  }
  
  }
  
  ?>