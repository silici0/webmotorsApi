<?php
/**
 * File for class CodigosWebMotorsMotosStructMarcaMotoWM
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructMarcaMotoWM originally named MarcaMotoWM
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructMarcaMotoWM extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The CodigoMarca
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CodigoMarca;
    /**
     * The NomeMarca
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NomeMarca;
    /**
     * The CodigoRetorno
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CodigoRetorno;
    /**
     * Constructor method for MarcaMotoWM
     * @see parent::__construct()
     * @param int $_codigoMarca
     * @param string $_nomeMarca
     * @param string $_codigoRetorno
     * @return CodigosWebMotorsMotosStructMarcaMotoWM
     */
    public function __construct($_codigoMarca,$_nomeMarca = NULL,$_codigoRetorno = NULL)
    {
        parent::__construct(array('CodigoMarca'=>$_codigoMarca,'NomeMarca'=>$_nomeMarca,'CodigoRetorno'=>$_codigoRetorno),false);
    }
    /**
     * Get CodigoMarca value
     * @return int
     */
    public function getCodigoMarca()
    {
        return $this->CodigoMarca;
    }
    /**
     * Set CodigoMarca value
     * @param int $_codigoMarca the CodigoMarca
     * @return int
     */
    public function setCodigoMarca($_codigoMarca)
    {
        return ($this->CodigoMarca = $_codigoMarca);
    }
    /**
     * Get NomeMarca value
     * @return string|null
     */
    public function getNomeMarca()
    {
        return $this->NomeMarca;
    }
    /**
     * Set NomeMarca value
     * @param string $_nomeMarca the NomeMarca
     * @return string
     */
    public function setNomeMarca($_nomeMarca)
    {
        return ($this->NomeMarca = $_nomeMarca);
    }
    /**
     * Get CodigoRetorno value
     * @return string|null
     */
    public function getCodigoRetorno()
    {
        return $this->CodigoRetorno;
    }
    /**
     * Set CodigoRetorno value
     * @param string $_codigoRetorno the CodigoRetorno
     * @return string
     */
    public function setCodigoRetorno($_codigoRetorno)
    {
        return ($this->CodigoRetorno = $_codigoRetorno);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructMarcaMotoWM
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
