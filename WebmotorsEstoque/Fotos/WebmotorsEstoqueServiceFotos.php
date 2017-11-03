<?php
/**
 * File for class WebmotorsEstoqueServiceFotos
 * @package WebmotorsEstoque
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueServiceFotos originally named Fotos
 * @package WebmotorsEstoque
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueServiceFotos extends WebmotorsEstoqueWsdlClass
{
    /**
     * Method to call the operation originally named FotosMoto
     * @uses WebmotorsEstoqueWsdlClass::getSoapClient()
     * @uses WebmotorsEstoqueWsdlClass::setResult()
     * @uses WebmotorsEstoqueWsdlClass::saveLastError()
     * @param WebmotorsEstoqueStructFotosMoto $_webmotorsEstoqueStructFotosMoto
     * @return WebmotorsEstoqueStructFotosMotoResponse
     */
    public function FotosMoto(WebmotorsEstoqueStructFotosMoto $_webmotorsEstoqueStructFotosMoto)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->FotosMoto($_webmotorsEstoqueStructFotosMoto));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see WebmotorsEstoqueWsdlClass::getResult()
     * @return WebmotorsEstoqueStructFotosMotoResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
