
<?php
require('src/classCrud.php');


use PHPUnit\Framework\TestCase; 
use PHPUnit\DbUnit\TestCaseTrait;


    // "autoload": {
    //     "psr-4": {
    //         "Jordan\\Testphp\\": "src/"
    //     }
    // },
    class classCrudTest extends TestCase
{
      use TestCaseTrait;
 static private $pdo = null;
 
    // only instantiate PHPUnit\DbUnit\Database\Connection once per test
    private $conn = null;
 
    final public function getConnection() {
        if ($this->conn === null) {
            if (self::$pdo == null) {
                self::$pdo = new PDO( 'mysql:dbname=contact;host=localhost', 'root', '' );
            }
            $this->conn = $this->createDefaultDBConnection(self::$pdo, 'contact');
        }
 
        return $this->conn;
    }
 
    public function getDataSet() {
        return $this->createFlatXmlDataSet('./teste/guestbook_fixture.xml');
    }
  
    
    public function testRowCount() {
        $this->assertSame(2, $this->getConnection()->getRowCount('info'), "Pre-Condition");
    }
 
    // public function testAddGuest() {
 
    //     $guestbook = new GuestBook();
    //     $guestbook->addGuest("George", "AP, India", "4545");
 
    //     $queryTable = $this->getConnection()->createQueryTable(
    //         'guestbook', 'SELECT id, name, address, phone FROM guestbook'
    //     );
 
    //     $expectedTable = $this->createFlatXmlDataSet("./tests/guestbook_expected.xml")
    //                           ->getTable("guestbook");
 
    //     $this->assertTablesEqual($expectedTable, $queryTable);
 
    // }
 



    // // only instantiate pdo once for test clean-up/fixture load
    // static private $pdo = null;

    // // only instantiate PHPUnit\DbUnit\Database\Connection once per test
    // private $conn = null;

    // final public function getConnection()
    // {
    //     if ($this->conn === null) {
    //         if (self::$pdo == null) {
    //             self::$pdo = new PDO('sqlite::memory:');
    //         }
    //         $this->conn = $this->createDefaultDBConnection(self::$pdo, ':memory:');
    //     }

    //     return $this->conn;
    // }



    // use TestCaseTrait;

    // public function testCalculate()
    // {
    //     $this->assertSame(2, 1 + 1);
    // }


    // /**
    //  * @return PHPUnit\DbUnit\Database\Connection
    //  */
    // public function getConnection()
    // {
    //     $pdo = new PDO('sqlite::memory:');
    //     return $this->createDefaultDBConnection($pdo, ':memory:');
    // }

    // /**
    //  * @return PHPUnit\DbUnit\DataSet\IDataSet
    //  */
    // public function getDataSet()
    // {
    //     return $this->createFlatXMLDataSet(dirname(__FILE__).'/_files/guestbook-seed.xml');
    // }


    // function testAdd()
    // {

    //     $s
    //    $crud = new crud($s);
    //     $Resultat=$crud->create('','');
    //     $this->assertEquals(2,$Resultat);
     
    // }
    
}

?>