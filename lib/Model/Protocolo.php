<?php
/**
 * Protocolo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Intima.ai - API
 *
 * Bem vindo a documentação da API do [Intima.ai](https://app.intima.ai). Está documentação cobre todas as ações disponíveis dentro do Intima.ai e as disponibilizam como `ENDPOINTS` que podem ser integrados e utilizados por outros serviços ou aplicações, bastando somente possuir o `Token de acesso da API`.
 *
 * OpenAPI spec version: 1.0.0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.11
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Protocolo Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Protocolo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Protocolo';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'numero_processo' => 'string',
        'tipo_documento_mensagem_geral' => 'int',
        'peticao' => 'array',
        'documentos' => 'array',
        'mensagem_geral' => 'string',
        'descricao' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'numero_processo' => 'string',
        'tipo_documento_mensagem_geral' => null,
        'peticao' => null,
        'documentos' => null,
        'mensagem_geral' => null,
        'descricao' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'numero_processo' => 'numero_processo',
        'tipo_documento_mensagem_geral' => 'tipo_documento_mensagem_geral',
        'peticao' => 'peticao',
        'documentos' => 'documentos',
        'mensagem_geral' => 'mensagem_geral',
        'descricao' => 'descricao'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'numero_processo' => 'setNumeroProcesso',
        'tipo_documento_mensagem_geral' => 'setTipoDocumentoMensagemGeral',
        'peticao' => 'setPeticao',
        'documentos' => 'setDocumentos',
        'mensagem_geral' => 'setMensagemGeral',
        'descricao' => 'setDescricao'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'numero_processo' => 'getNumeroProcesso',
        'tipo_documento_mensagem_geral' => 'getTipoDocumentoMensagemGeral',
        'peticao' => 'getPeticao',
        'documentos' => 'getDocumentos',
        'mensagem_geral' => 'getMensagemGeral',
        'descricao' => 'getDescricao'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['numero_processo'] = isset($data['numero_processo']) ? $data['numero_processo'] : null;
        $this->container['tipo_documento_mensagem_geral'] = isset($data['tipo_documento_mensagem_geral']) ? $data['tipo_documento_mensagem_geral'] : null;
        $this->container['documentos'] = isset($data['documentos']) ? $data['documentos'] : null;
        $this->container['mensagem_geral'] = isset($data['mensagem_geral']) ? $data['mensagem_geral'] : null;
        $this->container['descricao'] = isset($data['descricao']) ? $data['descricao'] : null;
        $this->container['peticao'] = isset($data['peticao']) ? $data['peticao'] : null;
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
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets peticao
     *
     * @return Peticao
     */
    public function getPeticao()
    {
        return $this->container['peticao'];
    }

    /**
     * Sets peticao
     *
     * @param Peticao $peticao peticao
     *
     * @return $this
     */
    public function setPeticao($peticao)
    {
        $this->container['peticao'] = $peticao;

        return $this;
    }
    /**
     * Gets numero_processo
     *
     * @return string
     */
    public function getNumeroProcesso()
    {
        return $this->container['numero_processo'];
    }

    /**
     * Sets numero_processo
     *
     * @param string $numero_processo numero_processo
     *
     * @return $this
     */
    public function setNumeroProcesso($numero_processo)
    {
        $this->container['numero_processo'] = $numero_processo;

        return $this;
    }

    /**
     * Gets tipo_documento_mensagem_geral
     *
     * @return int
     */
    public function getTipoDocumentoMensagemGeral()
    {
        return $this->container['tipo_documento_mensagem_geral'];
    }

    /**
     * Sets tipo_documento_mensagem_geral
     *
     * @param int $tipo_documento_mensagem_geral tipo_documento_mensagem_geral
     *
     * @return $this
     */
    public function setTipoDocumentoMensagemGeral($tipo_documento_mensagem_geral)
    {
        $this->container['tipo_documento_mensagem_geral'] = $tipo_documento_mensagem_geral;

        return $this;
    }

    /**
     * Gets documentos
     *
     * @return array
     */
    public function getDocumentos()
    {
        return $this->container['documentos'];
    }

    /**
     * Sets documentos
     *
     * @param array $documentos
     *
     * @return $this
     */
    public function setDocumentos($documentos)
    {
        $this->container['documentos'] = $documentos;

        return $this;
    }

    /**
     * Gets mensagem_geral
     *
     * @return string
     */
    public function getMensagemGeral()
    {
        return $this->container['mensagem_geral'];
    }

    /**
     * Sets mensagem_geral
     *
     * @param string $mensagem_geral mensagem_geral
     *
     * @return $this
     */
    public function setMensagemGeral($mensagem_geral)
    {
        $this->container['mensagem_geral'] = $mensagem_geral;

        return $this;
    }

    /**
     * Gets descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->container['descricao'];
    }

    /**
     * Sets descricao
     *
     * @param string $descricao descricao
     *
     * @return $this
     */
    public function setDescricao($descricao)
    {
        $this->container['descricao'] = $descricao;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
//        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
//            return json_encode(
//                ObjectSerializer::sanitizeForSerialization($this),
//                JSON_PRETTY_PRINT
//            );
//        }

        return '' . json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
