<?php
/**
 * File for class WebmotorsEstoqueServiceAlterar
 * @package WebmotorsEstoque
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * This class stands for WebmotorsEstoqueServiceAlterar originally named Alterar
 * @package WebmotorsEstoque
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueServiceAlterar extends WebmotorsEstoqueWsdlClass
{
    /**
     * Method to call the operation originally named alterarMoto
     * @uses WebmotorsEstoqueWsdlClass::getSoapClient()
     * @uses WebmotorsEstoqueWsdlClass::setResult()
     * @uses WebmotorsEstoqueWsdlClass::saveLastError()
     * @param WebmotorsEstoqueStructAlterarMoto $_webmotorsEstoqueStructAlterarMoto
     * @return WebmotorsEstoqueStructAlterarMotoResponse
     */
    public function alterarMoto(WebmotorsEstoqueStructAlterarMoto $_webmotorsEstoqueStructAlterarMoto)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->alterarMoto($_webmotorsEstoqueStructAlterarMoto));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see WebmotorsEstoqueWsdlClass::getResult()
     * @return WebmotorsEstoqueStructAlterarMotoResponse
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
