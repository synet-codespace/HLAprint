<?php

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\Api\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\LightCellsApi;
use \Aspose\Cells\Cloud\Model\ColumnsResponse;
use \Aspose\Cells\Cloud\Model\ImportIntArrayOption;
use \Aspose\Cells\Cloud\Model\TaskDescription;
use \Aspose\Cells\Cloud\Model\SplitWorkbookTaskParameter;
use \Aspose\Cells\Cloud\Model\FileSource;
use \Aspose\Cells\Cloud\Model\TaskData;
use PHPUnit\Framework\TestCase;

class CellsReplaceApiTest extends \PHPUnit_Framework_TestCase
{

    protected  $instance;
    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        $this->instance = CellsApiTestBase::getLiteInstance();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**ve
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for testCellsExportChartToPNGPostRun
     *
     * Run tasks.
     *
     */
    public function testCellsReplace()
    {
        $book1 = "Book1.xlsx";
        $mydoc = "myDocument.xlsx";
        $files = array (
            $mydoc =>  CellsApiTestBase::getfullfilename($mydoc),
            $book1 =>  CellsApiTestBase::getfullfilename($book1)
        );
        $result = $this->instance->postReplace( $files, "1", "aspose.cells cloud" );
        // print( $result);
        $this->assertNotNull($result);
    }
    
}
