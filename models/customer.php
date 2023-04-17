<?php
  class Customer {
    // define attributes
    public $CustomerID;
    public $CompanyName;
    public $ContactName;
    public $ContactTitle;
    public $Address;
    public $City;
    public $Region;
    public $PostalCode;
    public $Country;
    public $Phone;
    public $Fax;

    // constructor
    public function __construct($CustomerID, $CompanyName, $ContactName, $ContactTitle, $Address, $City, $Region, $PostalCode, $Country, $Phone, $Fax) {
      $this->CustomerID    = $CustomerID;
      $this->CompanyName  = $CompanyName;
      $this->ContactName  = $ContactName;
      $this->ContactTitle = $ContactTitle;
      $this->Address      = $Address;
      $this->City         = $City;
      $this->Region       = $Region;
      $this->PostalCode   = $PostalCode;
      $this->Country      = $Country;
      $this->Phone        = $Phone;
      $this->Fax          = $Fax;
    }

    // getter methods
    public function getCustomerID() {
      return $this->CustomerID;
  }

  public function getCompanyName() {
      return $this->CompanyName;
  }

  public function getContactName() {
      return $this->ContactName;
  }

  public function getContactTitle() {
      return $this->ContactTitle;
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

  public function getPhone() {
      return $this->Phone;
  }

  public function getFax() {
      return $this->Fax;
  }

  // setter methods
  public function setCustomerID($CustomerID) {
      $this->CustomerID = $CustomerID;
  }

  public function setCompanyName($CompanyName) {
      $this->CompanyName = $CompanyName;
  }

  public function setContactName($ContactName) {
      $this->ContactName = $ContactName;
  }

  public function setContactTitle($ContactTitle) {
      $this->ContactTitle = $ContactTitle;
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

  public function setPhone($Phone) {
      $this->Phone = $Phone;
  }

  public function setFax($Fax) {
      $this->Fax = $Fax;
  }

    

    // read all records
    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM Customers');

      foreach($req->fetchAll() as $customer) {
        $list[] = new Customer($customer['CustomerID'], $customer['CompanyName'], $customer['ContactName'], $customer['ContactTitle'], $customer['Address'], $customer['City'], $customer['Region'], $customer['PostalCode'], $customer['Country'], $customer['Phone'], $customer['Fax']);
      }

      return $list;
    }

    // read one record by ID
    public static function find($id) {
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM Customers WHERE CustomerID = :id');
      $req->execute(array('id' => $id));
      $customer = $req->fetch();

      return new Customer($customer['CustomerID'], $customer['CompanyName'], $customer['ContactName'], $customer['ContactTitle'], $customer['Address'], $customer['City'], $customer['Region'], $customer['PostalCode'], $customer['Country'], $customer['Phone'], $customer['Fax']);
    }

    // create a new record
    public static function create($data) {
      $db = Db::getInstance();
      $req = $db->prepare('INSERT INTO Customers (CustomerID, CompanyName, ContactName, ContactTitle, Address, City, Region, PostalCode, Country, Phone, Fax) VALUES (:CustomerID, :CompanyName, :ContactName, :ContactTitle, :Address, :City, :Region, :PostalCode, :Country, :Phone, :Fax)');
      $req->execute($data);
      return $db->lastInsertId();
    }

    // update a record by ID
    public static function update($id, $data) {
      $db = Db::getInstance();
      $req = $db->prepare('UPDATE Customers SET CompanyName = :CompanyName, ContactName = :ContactName, ContactTitle = :ContactTitle, Address = :Address, City = :City, Region = :Region, PostalCode = :PostalCode, Country = :Country, Phone = :Phone, Fax = :Fax WHERE CustomerID = :id');
      $data['id'] = $id;
      $req->execute($data);
    }

    public static function deletecustomer($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      //$id = intval($id);
      $sql="DELETE FROM CUSTOMERS WHERE CustomerID ='$id'";


      if ($db->query($sql) == TRUE){
        //if (1==2){
            $rez="USPJESNO brisanje";
          }
            else {
             $rez="NESPJESNO brisanje";;
            }
            return $rez;
  }
  
    

  }

?>