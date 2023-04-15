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