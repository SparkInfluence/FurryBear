<?php

/**
 * FurryBear
 * 
 * PHP Version 5.3
 * 
 * @category Congress_API
 * @package  FurryBear
 * @author   lobostome <lobostome@local.dev>
 * @license  http://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/lobostome/FurryBear
 */

namespace FurryBear\Resource\SunlightCapitolWords\Method;

use FurryBear\Resource\SunlightCapitolWords\BaseResource;

/**
 * This class gives access to Sunlight Capitol Words dates resource.
 * 
 * @category Congress_API
 * @package  FurryBear
 * @author   lobostome <lobostome@local.dev>
 * @license  http://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/lobostome/FurryBear
 */
class Dates extends BaseResource
{
    /**
     * The resource method URL. No slashes at the beginning and end of the 
     * string.
     */
    const ENDPOINT_METHOD = 'dates.json';
    
    /**
     * The required parameters for this resource
     * 
     * @var array
     */
    protected $required = array('phrase');

    /**
     * Constructs the resource, sets a reference to the FurryBear object, and 
     * sets the resource method URL. Defines a set of required parameters.
     * 
     * @param \FurryBear\FurryBear $furryBear A reference to the FurryBear onject.
     */
    public function __construct(\FurryBear\FurryBear $furryBear)
    {
        parent::__construct($furryBear);
        $this->setResourceMethod(self::ENDPOINT_METHOD);
        $this->setRequired($this->required);
    }
}