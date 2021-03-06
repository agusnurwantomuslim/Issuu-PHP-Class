<?php
/**
 * Issuu Client API (http://www.issuu.com)
 * 
 * @link		http://github.com/Astronuts/Issuu-PHP-Class
 * @copyright	Copyright (c) 2013 Theta Design AS (http://www.thetadesign.no)
 * @author      Chris Magnussen <chris at thetadesign dot no>
 * @license		See LICENSE - New BSD License
 * @package		Core\Issuu
 */
 
namespace Core\Issuu;
 
/**
 * @category 	Core
 * @package		Core\Issuu
 * @subpackage  Options
 */
class Options {
    
    /**
     * "public" or "private". 
     * If no value is submitted both "public" and "private" documents will be returned
     * 
     * @var string
     */
    protected $access = '';
    
    /**
     * API action
     * 
     * @var string
     */
    protected $action = '';
    
    /**
     * Comma-separated list document states indicated by a single char:
     * "A" - Active documents
     * "F" - Documents that failed during conversion
     * "P" - Documents that are currently being processed
     * Leave this field blank to list all documents regardless of state
     * 
     * @var string
     */
    protected $documentStates = '';
    
    /**
     * Must be "xml" or "json" - default is "xml". See Getting Started for further details
     * 
     * @var string
     */
    protected $format = '';
    
    /**
     * Function wrapper for JSONP requests. See Getting Started for further details
     * 
     * @var string
     */
    protected $jsonCallback;
    
    /**
     * Comma-separated list of document origins. Valid values are: 
     * "apiupload", "apislurp", "singleupload", "multiupload", "singleslurp", "multislurp" and "autoslurp" (i.e. SmartLook)
     * 
     * @var string
     */
    protected $origins = '';
    
    /**
     * Comma-separated list of original document formats:
     * "pdf", "odt", "doc", "wpd", "sxw", "sxi", "rtf", "odp" and "ppt"
     * 
     * @var string
     */
    protected $orgDocTypes = '';
    
    /**
     * Original filename of document
     * 
     * @var string
     */
    protected $orgDocName = '';
    
    /**
     * "asc" or "desc". Default value is "asc"
     * 
     * @var string
     */
    protected $resultOrder = '';
    
    /**
     * Zero based index to start pagination from
     * 
     * @var integer
     */
    protected $startIndex = 0;
    
    /**
     * Maximum number of documents to be returned. Value must be between 0 - 30. Default is 10
     * 
     * @var integer
     */
    protected $pageSize = 0;
    
    /**
     * Response parameter to sort the result by. 
     * Sorting can only be done on a single parameter. Default is no particular sort order
     *
     * @var string
     */
    protected $documentSortBy = '';
    
    /**
     * Comma-separated list of response parameters to be returned. 
     * If no value is submitted all parameters will be returned
     * 
     * @var string
     */
    protected $responseParams = '';
    
    /**
     * Response type 'full' or 'slim'
     * 
     * @var string
     */
    protected $responseType = 'full';
    
    /**
     * @param array $options
     * @throws \InvalidArgumentException
     * @return \Core\Issuu\Options
     */
    public function __construct($options)
    {
        foreach ($options as $key => $val) {
            if (!isset($this->$key)) {
                throw new \InvalidArgumentException('There are no method for set'.ucfirst($key).' implemented.');
            }
            $this->$key = $val;
        }
        
        return $this;
    }
    
}