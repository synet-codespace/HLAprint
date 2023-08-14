<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DeleteWorksheetConditionalFormattingAreaRequest.cs">
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

namespace Aspose\Cells\Cloud\Request;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Aspose\Cells\Cloud\ObjectSerializer;
use Aspose\Cells\Cloud\HeaderSelector;
use Asapose\Cells\Cloud\Configuration;

/*
 * Request model for  DeleteWorksheetConditionalFormattingArea operation.
 */

class DeleteWorksheetConditionalFormattingAreaRequest extends BaseApiRequest
{

    /*
    * name : 
    */ 
    public $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    /*
    * sheetName : 
    */ 
    public $sheet_name;

    public function getSheetName()
    {
        return $this->sheet_name;
    }

    public function setSheetName($value)
    {
        $this->sheet_name = $value;
    }

    /*
    * startRow : 
    */ 
    public $start_row;

    public function getStartRow()
    {
        return $this->start_row;
    }

    public function setStartRow($value)
    {
        $this->start_row = $value;
    }

    /*
    * startColumn : 
    */ 
    public $start_column;

    public function getStartColumn()
    {
        return $this->start_column;
    }

    public function setStartColumn($value)
    {
        $this->start_column = $value;
    }

    /*
    * totalRows : 
    */ 
    public $total_rows;

    public function getTotalRows()
    {
        return $this->total_rows;
    }

    public function setTotalRows($value)
    {
        $this->total_rows = $value;
    }

    /*
    * totalColumns : 
    */ 
    public $total_columns;

    public function getTotalColumns()
    {
        return $this->total_columns;
    }

    public function setTotalColumns($value)
    {
        $this->total_columns = $value;
    }

    /*
    * folder : 
    */ 
    public $folder;

    public function getFolder()
    {
        return $this->folder;
    }

    public function setFolder($value)
    {
        $this->folder = $value;
    }

    /*
    * storageName : 
    */ 
    public $storage_name;

    public function getStorageName()
    {
        return $this->storage_name;
    }

    public function setStorageName($value)
    {
        $this->storage_name = $value;
    }

    public function __construct()
    {        
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'name' is set
        if ($this->name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling DeleteWorksheetConditionalFormattingArea'
            );
        } 

        // verify the required parameter 'sheet_name' is set
        if ($this->sheet_name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sheet_name when calling DeleteWorksheetConditionalFormattingArea'
            );
        } 

        // verify the required parameter 'start_row' is set
        if ($this->start_row === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start_row when calling DeleteWorksheetConditionalFormattingArea'
            );
        } 

        // verify the required parameter 'start_column' is set
        if ($this->start_column === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start_column when calling DeleteWorksheetConditionalFormattingArea'
            );
        } 

        // verify the required parameter 'total_rows' is set
        if ($this->total_rows === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $total_rows when calling DeleteWorksheetConditionalFormattingArea'
            );
        } 

        // verify the required parameter 'total_columns' is set
        if ($this->total_columns === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $total_columns when calling DeleteWorksheetConditionalFormattingArea'
            );
        } 

        $resourcePath = '/cells/{name}/worksheets/{sheetName}/conditionalFormattings/area';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;    
        // name params
        if ($this->name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($this->name),
                $resourcePath
            );
        }
        // sheet_name params
        if ($this->sheet_name !== null) {
            $resourcePath = str_replace(
                '{' . 'sheetName' . '}',
                ObjectSerializer::toPathValue($this->sheet_name),
                $resourcePath
            );
        }
        // query params : start_row
        if ($this->start_row !== null) {
            $queryParams['startRow'] = ObjectSerializer::toQueryValue($this->start_row);
        }
        // query params : start_column
        if ($this->start_column !== null) {
            $queryParams['startColumn'] = ObjectSerializer::toQueryValue($this->start_column);
        }
        // query params : total_rows
        if ($this->total_rows !== null) {
            $queryParams['totalRows'] = ObjectSerializer::toQueryValue($this->total_rows);
        }
        // query params : total_columns
        if ($this->total_columns !== null) {
            $queryParams['totalColumns'] = ObjectSerializer::toQueryValue($this->total_columns);
        }
        // query params : folder
        if ($this->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($this->folder);
        }
        // query params : storage_name
        if ($this->storage_name !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($this->storage_name);
        }
    // body params
        $_tempBody = null;
        $_tempBodyName ;
        if ($multipart) {
            $headers = $headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }
        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                if (isset($_tempBody)) {
                    $httpBody = $_tempBody;
                    $multipartContents[] = [
                        'name' =>$_tempBodyName ,
                        'filename' =>$_tempBodyName ,
                        'contents' => json_encode( ObjectSerializer::sanitizeForSerialization($httpBody)) 
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }elseif (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
            else if (gettype($httpBody) == 'array' && $headers['Content-Type'] === 'application/json') {
                $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
            }

        }

        $defaultHeaders = [];
        if ($config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $config->getUserAgent();
        }
        if($config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $config->getAccessToken();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'DELETE',
            $config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );    
    }

}