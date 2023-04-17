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

    // getter methods
public function getEmployeeID() {
return $this->EmployeeID;
}

public function getLastName() {
return $this->LastName;
}

public function getFirstName() {
return $this->FirstName;
}

public function getTitle() {
return $this->Title;
}

public function getTitleOfCourtesy() {
return $this->TitleOfCourtesy;
}

public function getBirthDate() {
return $this->BirthDate;
}

public function getHireDate() {
return $this->HireDate;
}

public function getAddress() {
return $this->Address;
}

public function getCity() {
return $this->City;
}

public function getRegion() {
return $this->Region;
}

public function getPostalCode() {
return $this->PostalCode;
}

public function getCountry() {
return $this->Country;
}

public function getHomePhone() {
return $this->HomePhone;
}

public function getExtension() {
return $this->Extension;
}


public function getNotes() {
return $this->Notes;
}

public function getReportsTo() {
return $this->ReportsTo;
}


// setter methods
public function setEmployeeID($EmployeeID) {
$this->EmployeeID = $EmployeeID;
}

public function setLastName($LastName) {
$this->LastName = $LastName;
}

public function setFirstName($FirstName) {
$this->FirstName = $FirstName;
}

public function setTitle($Title) {
$this->Title = $Title;
}

public function setTitleOfCourtesy($TitleOfCourtesy) {
$this->TitleOfCourtesy = $TitleOfCourtesy;
}

public function setBirthDate($BirthDate) {
$this->BirthDate = $BirthDate;
}

public function setHireDate($HireDate) {
$this->HireDate = $HireDate;
}

public function setAddress($Address) {
$this->Address = $Address;
}

public function setCity($City) {
$this->City = $City;
}

public function setRegion($Region) {
$this->Region = $Region;
}

public function setPostalCode($PostalCode) {
$this->PostalCode = $PostalCode;
}

public function setCountry($Country) {
$this->Country = $Country;
}

public function setHomePhone($HomePhone) {
$this->HomePhone = $HomePhone;
}

public function setExtension($Extension) {
$this->Extension = $Extension;
}



public function setNotes($Notes) {
$this->Notes = $Notes;
}

public function setReportsTo($ReportsTo) {
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