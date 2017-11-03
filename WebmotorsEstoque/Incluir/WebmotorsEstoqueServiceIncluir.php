<?php
/**
 * File for class WebmotorsEstoqueServiceIncluir
 * @package WebmotorsEstoque
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueServiceIncluir originally named Incluir
 * @package WebmotorsEstoque
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueServiceIncluir extends WebmotorsEstoqueWsdlClass
{
    /**
     * Method to call the operation originally named incluirMoto
     * @uses WebmotorsEstoqueWsdlClass::getSoapClient()
     * @uses WebmotorsEstoqueWsdlClass::setResult()
     * @uses WebmotorsEstoqueWsdlClass::saveLastError()
     * @param WebmotorsEstoqueStructIncluirMoto $_webmotorsEstoqueStructIncluirMoto
     * @return WebmotorsEstoqueStructIncluirMotoResponse
     */
    public function incluirMoto(WebmotorsEstoqueStructIncluirMoto $_webmotorsEstoqueStructIncluirMoto)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->incluirMoto($_webmotorsEstoqueStructIncluirMoto));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named incluirFotoMoto
     * @uses WebmotorsEstoqueWsdlClass::getSoapClient()
     * @uses WebmotorsEstoqueWsdlClass::setResult()
     * @uses WebmotorsEstoqueWsdlClass::saveLastError()
     * @param WebmotorsEstoqueStructIncluirFotoMoto $_webmotorsEstoqueStructIncluirFotoMoto
     * @return WebmotorsEstoqueStructIncluirFotoMotoResponse
     */
    public function incluirFotoMoto(WebmotorsEstoqueStructIncluirFotoMoto $_webmotorsEstoqueStructIncluirFotoMoto)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->incluirFotoMoto($_webmotorsEstoqueStructIncluirFotoMoto));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named incluirVideo
     * @uses WebmotorsEstoqueWsdlClass::getSoapClient()
     * @uses WebmotorsEstoqueWsdlClass::setResult()
     * @uses WebmotorsEstoqueWsdlClass::saveLastError()
     * @param WebmotorsEstoqueStructIncluirVideo $_webmotorsEstoqueStructIncluirVideo
     * @return WebmotorsEstoqueStructIncluirVideoResponse
     */
    public function incluirVideo(WebmotorsEstoqueStructIncluirVideo $_webmotorsEstoqueStructIncluirVideo)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->incluirVideo($_webmotorsEstoqueStructIncluirVideo));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see WebmotorsEstoqueWsdlClass::getResult()
     * @return WebmotorsEstoqueStructIncluirFotoMotoResponse|WebmotorsEstoqueStructIncluirMotoResponse|WebmotorsEstoqueStructIncluirVideoResponse
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
