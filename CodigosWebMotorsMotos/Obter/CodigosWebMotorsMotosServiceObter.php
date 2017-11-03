<?php
/**
 * File for class CodigosWebMotorsMotosServiceObter
 * @package CodigosWebMotorsMotos
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosServiceObter originally named Obter
 * @package CodigosWebMotorsMotos
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosServiceObter extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * Method to call the operation originally named obterMarcaMotos
     * @uses CodigosWebMotorsMotosWsdlClass::getSoapClient()
     * @uses CodigosWebMotorsMotosWsdlClass::setResult()
     * @uses CodigosWebMotorsMotosWsdlClass::saveLastError()
     * @param CodigosWebMotorsMotosStructObterMarcaMotos $_codigosWebMotorsMotosStructObterMarcaMotos
     * @return CodigosWebMotorsMotosStructObterMarcaMotosResponse
     */
    public function obterMarcaMotos(CodigosWebMotorsMotosStructObterMarcaMotos $_codigosWebMotorsMotosStructObterMarcaMotos)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->obterMarcaMotos($_codigosWebMotorsMotosStructObterMarcaMotos));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named obterModeloMotos
     * @uses CodigosWebMotorsMotosWsdlClass::getSoapClient()
     * @uses CodigosWebMotorsMotosWsdlClass::setResult()
     * @uses CodigosWebMotorsMotosWsdlClass::saveLastError()
     * @param CodigosWebMotorsMotosStructObterModeloMotos $_codigosWebMotorsMotosStructObterModeloMotos
     * @return CodigosWebMotorsMotosStructObterModeloMotosResponse
     */
    public function obterModeloMotos(CodigosWebMotorsMotosStructObterModeloMotos $_codigosWebMotorsMotosStructObterModeloMotos)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->obterModeloMotos($_codigosWebMotorsMotosStructObterModeloMotos));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named obterCoresMotosUsadas
     * @uses CodigosWebMotorsMotosWsdlClass::getSoapClient()
     * @uses CodigosWebMotorsMotosWsdlClass::setResult()
     * @uses CodigosWebMotorsMotosWsdlClass::saveLastError()
     * @param CodigosWebMotorsMotosStructObterCoresMotosUsadas $_codigosWebMotorsMotosStructObterCoresMotosUsadas
     * @return CodigosWebMotorsMotosStructObterCoresMotosUsadasResponse
     */
    public function obterCoresMotosUsadas(CodigosWebMotorsMotosStructObterCoresMotosUsadas $_codigosWebMotorsMotosStructObterCoresMotosUsadas)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->obterCoresMotosUsadas($_codigosWebMotorsMotosStructObterCoresMotosUsadas));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named obterOpcionaisMotosUsadas
     * @uses CodigosWebMotorsMotosWsdlClass::getSoapClient()
     * @uses CodigosWebMotorsMotosWsdlClass::setResult()
     * @uses CodigosWebMotorsMotosWsdlClass::saveLastError()
     * @param CodigosWebMotorsMotosStructObterOpcionaisMotosUsadas $_codigosWebMotorsMotosStructObterOpcionaisMotosUsadas
     * @return CodigosWebMotorsMotosStructObterOpcionaisMotosUsadasResponse
     */
    public function obterOpcionaisMotosUsadas(CodigosWebMotorsMotosStructObterOpcionaisMotosUsadas $_codigosWebMotorsMotosStructObterOpcionaisMotosUsadas)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->obterOpcionaisMotosUsadas($_codigosWebMotorsMotosStructObterOpcionaisMotosUsadas));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named obterModalidadesMotosUsadas
     * @uses CodigosWebMotorsMotosWsdlClass::getSoapClient()
     * @uses CodigosWebMotorsMotosWsdlClass::setResult()
     * @uses CodigosWebMotorsMotosWsdlClass::saveLastError()
     * @param CodigosWebMotorsMotosStructObterModalidadesMotosUsadas $_codigosWebMotorsMotosStructObterModalidadesMotosUsadas
     * @return CodigosWebMotorsMotosStructObterModalidadesMotosUsadasResponse
     */
    public function obterModalidadesMotosUsadas(CodigosWebMotorsMotosStructObterModalidadesMotosUsadas $_codigosWebMotorsMotosStructObterModalidadesMotosUsadas)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->obterModalidadesMotosUsadas($_codigosWebMotorsMotosStructObterModalidadesMotosUsadas));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named obterModalidadesMotosNovas
     * @uses CodigosWebMotorsMotosWsdlClass::getSoapClient()
     * @uses CodigosWebMotorsMotosWsdlClass::setResult()
     * @uses CodigosWebMotorsMotosWsdlClass::saveLastError()
     * @param CodigosWebMotorsMotosStructObterModalidadesMotosNovas $_codigosWebMotorsMotosStructObterModalidadesMotosNovas
     * @return CodigosWebMotorsMotosStructObterModalidadesMotosNovasResponse
     */
    public function obterModalidadesMotosNovas(CodigosWebMotorsMotosStructObterModalidadesMotosNovas $_codigosWebMotorsMotosStructObterModalidadesMotosNovas)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->obterModalidadesMotosNovas($_codigosWebMotorsMotosStructObterModalidadesMotosNovas));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named obterTipoRefrigeracaoMoto
     * @uses CodigosWebMotorsMotosWsdlClass::getSoapClient()
     * @uses CodigosWebMotorsMotosWsdlClass::setResult()
     * @uses CodigosWebMotorsMotosWsdlClass::saveLastError()
     * @param CodigosWebMotorsMotosStructObterTipoRefrigeracaoMoto $_codigosWebMotorsMotosStructObterTipoRefrigeracaoMoto
     * @return CodigosWebMotorsMotosStructObterTipoRefrigeracaoMotoResponse
     */
    public function obterTipoRefrigeracaoMoto(CodigosWebMotorsMotosStructObterTipoRefrigeracaoMoto $_codigosWebMotorsMotosStructObterTipoRefrigeracaoMoto)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->obterTipoRefrigeracaoMoto($_codigosWebMotorsMotosStructObterTipoRefrigeracaoMoto));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named obterTipoAlimentacaoMoto
     * @uses CodigosWebMotorsMotosWsdlClass::getSoapClient()
     * @uses CodigosWebMotorsMotosWsdlClass::setResult()
     * @uses CodigosWebMotorsMotosWsdlClass::saveLastError()
     * @param CodigosWebMotorsMotosStructObterTipoAlimentacaoMoto $_codigosWebMotorsMotosStructObterTipoAlimentacaoMoto
     * @return CodigosWebMotorsMotosStructObterTipoAlimentacaoMotoResponse
     */
    public function obterTipoAlimentacaoMoto(CodigosWebMotorsMotosStructObterTipoAlimentacaoMoto $_codigosWebMotorsMotosStructObterTipoAlimentacaoMoto)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->obterTipoAlimentacaoMoto($_codigosWebMotorsMotosStructObterTipoAlimentacaoMoto));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named obterTipoMotorMoto
     * @uses CodigosWebMotorsMotosWsdlClass::getSoapClient()
     * @uses CodigosWebMotorsMotosWsdlClass::setResult()
     * @uses CodigosWebMotorsMotosWsdlClass::saveLastError()
     * @param CodigosWebMotorsMotosStructObterTipoMotorMoto $_codigosWebMotorsMotosStructObterTipoMotorMoto
     * @return CodigosWebMotorsMotosStructObterTipoMotorMotoResponse
     */
    public function obterTipoMotorMoto(CodigosWebMotorsMotosStructObterTipoMotorMoto $_codigosWebMotorsMotosStructObterTipoMotorMoto)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->obterTipoMotorMoto($_codigosWebMotorsMotosStructObterTipoMotorMoto));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named obterTipoPartidaMoto
     * @uses CodigosWebMotorsMotosWsdlClass::getSoapClient()
     * @uses CodigosWebMotorsMotosWsdlClass::setResult()
     * @uses CodigosWebMotorsMotosWsdlClass::saveLastError()
     * @param CodigosWebMotorsMotosStructObterTipoPartidaMoto $_codigosWebMotorsMotosStructObterTipoPartidaMoto
     * @return CodigosWebMotorsMotosStructObterTipoPartidaMotoResponse
     */
    public function obterTipoPartidaMoto(CodigosWebMotorsMotosStructObterTipoPartidaMoto $_codigosWebMotorsMotosStructObterTipoPartidaMoto)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->obterTipoPartidaMoto($_codigosWebMotorsMotosStructObterTipoPartidaMoto));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named obterNumeroMarchasMoto
     * @uses CodigosWebMotorsMotosWsdlClass::getSoapClient()
     * @uses CodigosWebMotorsMotosWsdlClass::setResult()
     * @uses CodigosWebMotorsMotosWsdlClass::saveLastError()
     * @param CodigosWebMotorsMotosStructObterNumeroMarchasMoto $_codigosWebMotorsMotosStructObterNumeroMarchasMoto
     * @return CodigosWebMotorsMotosStructObterNumeroMarchasMotoResponse
     */
    public function obterNumeroMarchasMoto(CodigosWebMotorsMotosStructObterNumeroMarchasMoto $_codigosWebMotorsMotosStructObterNumeroMarchasMoto)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->obterNumeroMarchasMoto($_codigosWebMotorsMotosStructObterNumeroMarchasMoto));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named obterTipoFreioMoto
     * @uses CodigosWebMotorsMotosWsdlClass::getSoapClient()
     * @uses CodigosWebMotorsMotosWsdlClass::setResult()
     * @uses CodigosWebMotorsMotosWsdlClass::saveLastError()
     * @param CodigosWebMotorsMotosStructObterTipoFreioMoto $_codigosWebMotorsMotosStructObterTipoFreioMoto
     * @return CodigosWebMotorsMotosStructObterTipoFreioMotoResponse
     */
    public function obterTipoFreioMoto(CodigosWebMotorsMotosStructObterTipoFreioMoto $_codigosWebMotorsMotosStructObterTipoFreioMoto)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->obterTipoFreioMoto($_codigosWebMotorsMotosStructObterTipoFreioMoto));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named ObterExtensoesVideos
     * @uses CodigosWebMotorsMotosWsdlClass::getSoapClient()
     * @uses CodigosWebMotorsMotosWsdlClass::setResult()
     * @uses CodigosWebMotorsMotosWsdlClass::saveLastError()
     * @param CodigosWebMotorsMotosStructObterExtensoesVideos $_codigosWebMotorsMotosStructObterExtensoesVideos
     * @return CodigosWebMotorsMotosStructObterExtensoesVideosResponse
     */
    public function ObterExtensoesVideos(CodigosWebMotorsMotosStructObterExtensoesVideos $_codigosWebMotorsMotosStructObterExtensoesVideos)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->ObterExtensoesVideos($_codigosWebMotorsMotosStructObterExtensoesVideos));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named ObterTemplateAnimacaoMotos
     * @uses CodigosWebMotorsMotosWsdlClass::getSoapClient()
     * @uses CodigosWebMotorsMotosWsdlClass::setResult()
     * @uses CodigosWebMotorsMotosWsdlClass::saveLastError()
     * @param CodigosWebMotorsMotosStructObterTemplateAnimacaoMotos $_codigosWebMotorsMotosStructObterTemplateAnimacaoMotos
     * @return CodigosWebMotorsMotosStructObterTemplateAnimacaoMotosResponse
     */
    public function ObterTemplateAnimacaoMotos(CodigosWebMotorsMotosStructObterTemplateAnimacaoMotos $_codigosWebMotorsMotosStructObterTemplateAnimacaoMotos)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->ObterTemplateAnimacaoMotos($_codigosWebMotorsMotosStructObterTemplateAnimacaoMotos));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named obterModalidadesMotos
     * @uses CodigosWebMotorsMotosWsdlClass::getSoapClient()
     * @uses CodigosWebMotorsMotosWsdlClass::setResult()
     * @uses CodigosWebMotorsMotosWsdlClass::saveLastError()
     * @param CodigosWebMotorsMotosStructObterModalidadesMotos $_codigosWebMotorsMotosStructObterModalidadesMotos
     * @return CodigosWebMotorsMotosStructObterModalidadesMotosResponse
     */
    public function obterModalidadesMotos(CodigosWebMotorsMotosStructObterModalidadesMotos $_codigosWebMotorsMotosStructObterModalidadesMotos)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->obterModalidadesMotos($_codigosWebMotorsMotosStructObterModalidadesMotos));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see CodigosWebMotorsMotosWsdlClass::getResult()
     * @return CodigosWebMotorsMotosStructObterCoresMotosUsadasResponse|CodigosWebMotorsMotosStructObterExtensoesVideosResponse|CodigosWebMotorsMotosStructObterMarcaMotosResponse|CodigosWebMotorsMotosStructObterModalidadesMotosNovasResponse|CodigosWebMotorsMotosStructObterModalidadesMotosResponse|CodigosWebMotorsMotosStructObterModalidadesMotosUsadasResponse|CodigosWebMotorsMotosStructObterModeloMotosResponse|CodigosWebMotorsMotosStructObterNumeroMarchasMotoResponse|CodigosWebMotorsMotosStructObterOpcionaisMotosUsadasResponse|CodigosWebMotorsMotosStructObterTemplateAnimacaoMotosResponse|CodigosWebMotorsMotosStructObterTipoAlimentacaoMotoResponse|CodigosWebMotorsMotosStructObterTipoFreioMotoResponse|CodigosWebMotorsMotosStructObterTipoMotorMotoResponse|CodigosWebMotorsMotosStructObterTipoPartidaMotoResponse|CodigosWebMotorsMotosStructObterTipoRefrigeracaoMotoResponse
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
