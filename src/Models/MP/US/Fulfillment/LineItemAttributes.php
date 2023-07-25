<?php

/**
 * LineItemAttributes
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */

/**
 * Fulfillment Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Fulfillment;

use Walmart\Models\BaseModel;

/**
 * LineItemAttributes Class Doc Comment
 *
 * @category Class

 * @description Line item attribute details.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class LineItemAttributes extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LineItemAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'availableQuantity' => '\Walmart\Models\MP\US\Fulfillment\AvailableQuantity',
        'fulfillmentChannel' => 'string[]',
        'lineId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'availableQuantity' => null,
        'fulfillmentChannel' => null,
        'lineId' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'availableQuantity' => false,
        'fulfillmentChannel' => false,
        'lineId' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'availableQuantity' => 'availableQuantity',
        'fulfillmentChannel' => 'fulfillmentChannel',
        'lineId' => 'lineId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'availableQuantity' => 'setAvailableQuantity',
        'fulfillmentChannel' => 'setFulfillmentChannel',
        'lineId' => 'setLineId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'availableQuantity' => 'getAvailableQuantity',
        'fulfillmentChannel' => 'getFulfillmentChannel',
        'lineId' => 'getLineId'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('availableQuantity', $data ?? [], null);
        $this->setIfExists('fulfillmentChannel', $data ?? [], null);
        $this->setIfExists('lineId', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];


        return $invalidProperties;
    }

    /**
     * Gets availableQuantity
     *
     * @return \Walmart\Models\MP\US\Fulfillment\AvailableQuantity|null
    
     */
    public function getAvailableQuantity()
    {
        return $this->container['availableQuantity'];
    }

    /**
     * Sets availableQuantity
     *
     * @param \Walmart\Models\MP\US\Fulfillment\AvailableQuantity|null $availableQuantity availableQuantity
     *
     * @return self
    
     */
    public function setAvailableQuantity($availableQuantity)
    {
        if (is_null($availableQuantity)) {
            throw new \InvalidArgumentException('non-nullable availableQuantity cannot be null');
        }

        $this->container['availableQuantity'] = $availableQuantity;
        return $this;
    }

    /**
     * Gets fulfillmentChannel
     *
     * @return string[]|null
    
     */
    public function getFulfillmentChannel()
    {
        return $this->container['fulfillmentChannel'];
    }

    /**
     * Sets fulfillmentChannel
     *
     * @param string[]|null $fulfillmentChannel Fulfillment channel details. For example : 'WFS_FULFILLED'
     *
     * @return self
    
     */
    public function setFulfillmentChannel($fulfillmentChannel)
    {
        if (is_null($fulfillmentChannel)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentChannel cannot be null');
        }

        $this->container['fulfillmentChannel'] = $fulfillmentChannel;
        return $this;
    }

    /**
     * Gets lineId
     *
     * @return string|null
    
     */
    public function getLineId()
    {
        return $this->container['lineId'];
    }

    /**
     * Sets lineId
     *
     * @param string|null $lineId The identifier to identify each line, assigned by seller systems.
     *
     * @return self
    
     */
    public function setLineId($lineId)
    {
        if (is_null($lineId)) {
            throw new \InvalidArgumentException('non-nullable lineId cannot be null');
        }

        $this->container['lineId'] = $lineId;
        return $this;
    }
}
