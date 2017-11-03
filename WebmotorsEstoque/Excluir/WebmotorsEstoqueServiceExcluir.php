<?php
/**
 * File for class WebmotorsEstoqueServiceExcluir
 * @package WebmotorsEstoque
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueServiceExcluir originally named Excluir
 * @package WebmotorsEstoque
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueServiceExcluir extends WebmotorsEstoqueWsdlClass
{
    /**
     * Method to call the operation originally named excluirMoto
     * @uses WebmotorsEstoqueWsdlClass::getSoapClient()
     * @uses WebmotorsEstoqueWsdlClass::setResult()
     * @uses WebmotorsEstoqueWsdlClass::saveLastError()
     * @param WebmotorsEstoqueStructExcluirMoto $_webmotorsEstoqueStructExcluirMoto
     * @return WebmotorsEstoqueStructExcluirMotoResponse
     */
    public function excluirMoto(WebmotorsEstoqueStructExcluirMoto $_webmotorsEstoqueStructExcluirMoto)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->excluirMoto($_webmotorsEstoqueStructExcluirMoto));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named excluirFotoMoto
     * @uses WebmotorsEstoqueWsdlClass::getSoapClient()
     * @uses WebmotorsEstoqueWsdlClass::setResult()
     * @uses WebmotorsEstoqueWsdlClass::saveLastError()
     * @param WebmotorsEstoqueStructExcluirFotoMoto $_webmotorsEstoqueStructExcluirFotoMoto
     * @return WebmotorsEstoqueStructExcluirFotoMotoResponse
     */
    public function excluirFotoMoto(WebmotorsEstoqueStructExcluirFotoMoto $_webmotorsEstoqueStructExcluirFotoMoto)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->excluirFotoMoto($_webmotorsEstoqueStructExcluirFotoMoto));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named excluirVideo
     * @uses WebmotorsEstoqueWsdlClass::getSoapClient()
     * @uses WebmotorsEstoqueWsdlClass::setResult()
     * @uses WebmotorsEstoqueWsdlClass::saveLastError()
     * @param WebmotorsEstoqueStructExcluirVideo $_webmotorsEstoqueStructExcluirVideo
     * @return WebmotorsEstoqueStructExcluirVideoResponse
     */
    public function excluirVideo(WebmotorsEstoqueStructExcluirVideo $_webmotorsEstoqueStructExcluirVideo)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->excluirVideo($_webmotorsEstoqueStructExcluirVideo));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see WebmotorsEstoqueWsdlClass::getResult()
     * @return WebmotorsEstoqueStructExcluirFotoMotoResponse|WebmotorsEstoqueStructExcluirMotoResponse|WebmotorsEstoqueStructExcluirVideoResponse
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
