<?php
/**
 * File for class CodigosWebMotorsMotosStructArrayOfExtensaoVideoWM
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructArrayOfExtensaoVideoWM originally named ArrayOfExtensaoVideoWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructArrayOfExtensaoVideoWM extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The ExtensaoVideoWM
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var CodigosWebMotorsMotosStructExtensaoVideoWM
     */
    public $ExtensaoVideoWM;
    /**
     * Constructor method for ArrayOfExtensaoVideoWM
     * @see parent::__construct()
     * @param CodigosWebMotorsMotosStructExtensaoVideoWM $_extensaoVideoWM
     * @return CodigosWebMotorsMotosStructArrayOfExtensaoVideoWM
     */
    public function __construct($_extensaoVideoWM = NULL)
    {
        parent::__construct(array('ExtensaoVideoWM'=>$_extensaoVideoWM),false);
    }
    /**
     * Get ExtensaoVideoWM value
     * @return CodigosWebMotorsMotosStructExtensaoVideoWM|null
     */
    public function getExtensaoVideoWM()
    {
        return $this->ExtensaoVideoWM;
    }
    /**
     * Set ExtensaoVideoWM value
     * @param CodigosWebMotorsMotosStructExtensaoVideoWM $_extensaoVideoWM the ExtensaoVideoWM
     * @return CodigosWebMotorsMotosStructExtensaoVideoWM
     */
    public function setExtensaoVideoWM($_extensaoVideoWM)
    {
        return ($this->ExtensaoVideoWM = $_extensaoVideoWM);
    }
    /**
     * Returns the current element
     * @see CodigosWebMotorsMotosWsdlClass::current()
     * @return CodigosWebMotorsMotosStructExtensaoVideoWM
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see CodigosWebMotorsMotosWsdlClass::item()
     * @param int $_index
     * @return CodigosWebMotorsMotosStructExtensaoVideoWM
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see CodigosWebMotorsMotosWsdlClass::first()
     * @return CodigosWebMotorsMotosStructExtensaoVideoWM
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @return CodigosWebMotorsMotosStructExtensaoVideoWM
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see CodigosWebMotorsMotosWsdlClass::last()
     * @param int $_offset
     * @return CodigosWebMotorsMotosStructExtensaoVideoWM
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see CodigosWebMotorsMotosWsdlClass::getAttributeName()
     * @return string ExtensaoVideoWM
     */
    public function getAttributeName()
    {
        return 'ExtensaoVideoWM';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructArrayOfExtensaoVideoWM
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
