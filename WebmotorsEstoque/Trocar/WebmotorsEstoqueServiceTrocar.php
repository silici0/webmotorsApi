<?php
/**
 * File for class WebmotorsEstoqueServiceTrocar
 * @package WebmotorsEstoque
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueServiceTrocar originally named Trocar
 * @package WebmotorsEstoque
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueServiceTrocar extends WebmotorsEstoqueWsdlClass
{
    /**
     * Method to call the operation originally named TrocarModalidadeMoto
     * @uses WebmotorsEstoqueWsdlClass::getSoapClient()
     * @uses WebmotorsEstoqueWsdlClass::setResult()
     * @uses WebmotorsEstoqueWsdlClass::saveLastError()
     * @param WebmotorsEstoqueStructTrocarModalidadeMoto $_webmotorsEstoqueStructTrocarModalidadeMoto
     * @return WebmotorsEstoqueStructTrocarModalidadeMotoResponse
     */
    public function TrocarModalidadeMoto(WebmotorsEstoqueStructTrocarModalidadeMoto $_webmotorsEstoqueStructTrocarModalidadeMoto)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->TrocarModalidadeMoto($_webmotorsEstoqueStructTrocarModalidadeMoto));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see WebmotorsEstoqueWsdlClass::getResult()
     * @return WebmotorsEstoqueStructTrocarModalidadeMotoResponse
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
