<?php

class Order {
  // define attributes
  public $OrderID;
  public $CustomerID;
  public $EmployeeID;
  public $OrderDate;
  public $RequiredDate;
  public $ShippedDate;
  public $ShipVia;
  public $Freight;
  public $ShipName;
  public $ShipAddress;
  public $ShipCity;
  public $ShipRegion;
  public $ShipPostalCode;
  public $ShipCountry;

    // constructor
    public function __construct($OrderID, $CustomerID, $EmployeeID, $OrderDate, $RequiredDate, $ShippedDate, $ShipVia, $Freight, $ShipName, $ShipAddress, $ShipCity, $ShipRegion, $ShipPostalCode, $ShipCountry) {
      $this->OrderID = $OrderID;
      $this->CustomerID = $CustomerID;
      $this->EmployeeID = $EmployeeID;
      $this->OrderDate = $OrderDate;
      $this->RequiredDate = $RequiredDate;
      $this->ShippedDate = $ShippedDate;
      $this->ShipVia = $ShipVia;
      $this->Freight = $Freight;
      $this->ShipName = $ShipName;
      $this->ShipAddress = $ShipAddress;
      $this->ShipCity = $ShipCity;
      $this->ShipRegion = $ShipRegion;
      $this->ShipPostalCode = $ShipPostalCode;
      $this->ShipCountry = $ShipCountry;
    }


    // getter methods
public function getOrderID() {
  return $this->OrderID;
  }
  
  public function getCustomerID() {
  return $this->CustomerID;
  }
  
  public function getEmployeeID() {
  return $this->EmployeeID;
  }
  
  public function getOrderDate() {
  return $this->OrderDate;
  }
  
  public function getRequiredDate() {
  return $this->RequiredDate;
  }
  
  public function getShippedDate() {
  return $this->ShippedDate;
  }
  
  public function getShipVia() {
  return $this->ShipVia;
  }
  
  public function getFreight() {
  return $this->Freight;
  }
  
  public function getShipName() {
  return $this->ShipName;
  }
  
  public function getShipAddress() {
  return $this->ShipAddress;
  }
  
  public function getShipCity() {
  return $this->ShipCity;
  }
  
  public function getShipRegion() {
  return $this->ShipRegion;
  }
  
  public function getShipPostalCode() {
  return $this->ShipPostalCode;
  }
  
  public function getShipCountry() {
  return $this->ShipCountry;
  }
  
  // setter methods
  public function setOrderID($OrderID) {
  $this->OrderID = $OrderID;
  }
  
  public function setCustomerID($CustomerID) {
  $this->CustomerID = $CustomerID;
  }
  
  public function setEmployeeID($EmployeeID) {
  $this->EmployeeID = $EmployeeID;
  }
  
  public function setOrderDate($OrderDate) {
  $this->OrderDate = $OrderDate;
  }
  
  public function setRequiredDate($RequiredDate) {
  $this->RequiredDate = $RequiredDate;
  }
  
  public function setShippedDate($ShippedDate) {
  $this->ShippedDate = $ShippedDate;
  }
  
  public function setShipVia($ShipVia) {
  $this->ShipVia = $ShipVia;
  }
  
  public function setFreight($Freight) {
  $this->Freight = $Freight;
  }
  
  public function setShipName($ShipName) {
  $this->ShipName = $ShipName;
  }
  
  public function setShipAddress($ShipAddress) {
  $this->ShipAddress = $ShipAddress;
  }
  
  public function setShipCity($ShipCity) {
  $this->ShipCity = $ShipCity;
  }
  
  public function setShipRegion($ShipRegion) {
  $this->ShipRegion = $ShipRegion;
  }
  
  public function setShipPostalCode($ShipPostalCode) {
  $this->ShipPostalCode = $ShipPostalCode;
  }
  
  public function setShipCountry($ShipCountry) {
  $this->ShipCountry = $ShipCountry;
  }

    // read all records
  public static function all() {
    $list = [];
    $db = Db::getInstance();
    $req = $db->query('SELECT * FROM Orders');

    foreach($req->fetchAll() as $order) {
      $list[] = new Order($order['OrderID'], $order['CustomerID'], $order['EmployeeID'], $order['OrderDate'], $order['RequiredDate'], $order['ShippedDate'], $order['ShipVia'], $order['Freight'], $order['ShipName'], $order['ShipAddress'], $order['ShipCity'], $order['ShipRegion'], $order['ShipPostalCode'], $order['ShipCountry']);
    }

    return $list;
  }


    // read one record by ID
    public static function find($id) {
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM Orders WHERE OrderID = :id');
      $req->execute(array('id' => $id));
      $order = $req->fetch();
  
      return new Order($order['OrderID'], $order['CustomerID'], $order['EmployeeID'], $order['OrderDate'], $order['RequiredDate'], $order['ShippedDate'], $order['ShipVia'], $order['Freight'], $order['ShipName'], $order['ShipAddress'], $order['ShipCity'], $order['ShipRegion'], $order['ShipPostalCode'], $order['ShipCountry']);
    }


    // create a new record
public static function create($data) {
  $db = Db::getInstance();
  $req = $db->prepare('INSERT INTO Orders (CustomerID, EmployeeID, OrderDate, RequiredDate, ShippedDate, ShipVia, Freight, ShipName, ShipAddress, ShipCity, ShipRegion, ShipPostalCode, ShipCountry) 
    VALUES (:CustomerID, :EmployeeID, :OrderDate, :RequiredDate, :ShippedDate, :ShipVia, :Freight, :ShipName, :ShipAddress, :ShipCity, :ShipRegion, :ShipPostalCode, :ShipCountry)');
  $req->execute($data);
  return $db->lastInsertId();
}


// update a record by ID
public static function update($id, $data) {
  $db = Db::getInstance();
  $req = $db->prepare('UPDATE Orders SET CustomerID = :CustomerID, EmployeeID = :EmployeeID, OrderDate = :OrderDate, RequiredDate = :RequiredDate, ShippedDate = :ShippedDate, ShipVia = :ShipVia, Freight = :Freight, ShipName = :ShipName, ShipAddress = :ShipAddress, ShipCity = :ShipCity, ShipRegion = :ShipRegion, ShipPostalCode = :ShipPostalCode, ShipCountry = :ShipCountry WHERE OrderID = :id');
  $data['id'] = $id;
  $req->execute($data);
}


// delete a record by ID
public static function delete($id) {
  $db = Db::getInstance();
  // we make sure $id is an integer
  $id = intval($id);
  $req = $db->prepare('DELETE FROM ORDERS WHERE OrderID = :id');
  // the query was prepared, now we replace :id with our actual $id value
  if ($req->execute(array('id' => $id))) {
      return "USPJESNO brisanje";
  } else {
      return "NESPJESNO brisanje";
  }
}

}





?>