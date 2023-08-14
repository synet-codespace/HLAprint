<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PageSetupControllerTests.php.cs">
 *   Copyright (c) 2023 Aspose.Cells Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 *--------------------------------------------------------------------------------------------------------------------
*/

namespace Aspose\Cells\Cloud;

require_once('vendor\autoload.php');
require_once('test\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\DeleteHeaderFooterRequest; 
use \Aspose\Cells\Cloud\Request\GetFooterRequest; 
use \Aspose\Cells\Cloud\Request\GetHeaderRequest; 
use \Aspose\Cells\Cloud\Request\GetPageSetupRequest; 
use \Aspose\Cells\Cloud\Request\PostFooterRequest; 
use \Aspose\Cells\Cloud\Request\PostHeaderRequest; 
use \Aspose\Cells\Cloud\Request\PostPageSetupRequest; 

use PHPUnit\Framework\TestCase;
class PageSetupControllerTest extends \PHPUnit_Framework_TestCase
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
        $this->instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));
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

    /// <summary>
    /// Test for GetPageSetup of PageSetupController.
    /// </summary>

    public function testGetPageSetup()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetPageSetupRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getPageSetup($request);
    }

    /// <summary>
    /// Test for PostPageSetup of PageSetupController.
    /// </summary>

    public function testPostPageSetup()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        $pageSetup = new \Aspose\Cells\Cloud\Model\PageSetup();
        $pageSetup->setBlackAndWhite('true' ); 
        $pageSetup->setCenterHorizontally('true' ); 
        $pageSetup->setCenterVertically('true' ); 
        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostPageSetupRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setPageSetup( $pageSetup);
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postPageSetup($request);
    }

    /// <summary>
    /// Test for DeleteHeaderFooter of PageSetupController.
    /// </summary>

    public function testDeleteHeaderFooter()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new DeleteHeaderFooterRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->deleteHeaderFooter($request);
    }

    /// <summary>
    /// Test for GetHeader of PageSetupController.
    /// </summary>

    public function testGetHeader()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetHeaderRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getHeader($request);
    }

    /// <summary>
    /// Test for PostHeader of PageSetupController.
    /// </summary>

    public function testPostHeader()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostHeaderRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setSection( 1);
        $request->setScript( "Update add header");
        $request->setIsFirstPage( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postHeader($request);
    }

    /// <summary>
    /// Test for GetFooter of PageSetupController.
    /// </summary>

    public function testGetFooter()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new GetFooterRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->getFooter($request);
    }

    /// <summary>
    /// Test for PostFooter of PageSetupController.
    /// </summary>

    public function testPostFooter()
    {
        $remoteFolder = "TestData/In";

        $localName = "Book1.xlsx";
        $remoteName = "Book1.xlsx";

        CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
     
        $request = new PostFooterRequest();
        $request->setName( $remoteName);
        $request->setSheetName( "Sheet1");
        $request->setSection( 1);
        $request->setScript( "add footer script");
        $request->setIsFirstPage( 'true');
        $request->setFolder( $remoteFolder);
        $request->setStorageName( "");
        $this->instance->postFooter($request);
    }
}