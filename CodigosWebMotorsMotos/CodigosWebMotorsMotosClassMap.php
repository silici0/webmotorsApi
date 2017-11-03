<?php
/**
 * File for the class which returns the class map definition
 * @package CodigosWebMotorsMotos
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * Class which returns the class map definition by the static method CodigosWebMotorsMotosClassMap::classMap()
 * @package CodigosWebMotorsMotos
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'AnoMotoWM' => 'CodigosWebMotorsMotosStructAnoMotoWM',
  'ArrayOfAnoMotoWM' => 'CodigosWebMotorsMotosStructArrayOfAnoMotoWM',
  'ArrayOfCorMotoNovaWM' => 'CodigosWebMotorsMotosStructArrayOfCorMotoNovaWM',
  'ArrayOfCorMotoUsadaWM' => 'CodigosWebMotorsMotosStructArrayOfCorMotoUsadaWM',
  'ArrayOfExtensaoVideoWM' => 'CodigosWebMotorsMotosStructArrayOfExtensaoVideoWM',
  'ArrayOfMarcaMotoWM' => 'CodigosWebMotorsMotosStructArrayOfMarcaMotoWM',
  'ArrayOfModalidadeAnuncioWM' => 'CodigosWebMotorsMotosStructArrayOfModalidadeAnuncioWM',
  'ArrayOfModalidadeMotoWM' => 'CodigosWebMotorsMotosStructArrayOfModalidadeMotoWM',
  'ArrayOfModeloMotoWM' => 'CodigosWebMotorsMotosStructArrayOfModeloMotoWM',
  'ArrayOfNumeroMarchas' => 'CodigosWebMotorsMotosStructArrayOfNumeroMarchas',
  'ArrayOfOpcionalMotoNovaWM' => 'CodigosWebMotorsMotosStructArrayOfOpcionalMotoNovaWM',
  'ArrayOfOpcionalMotoUsadaWM' => 'CodigosWebMotorsMotosStructArrayOfOpcionalMotoUsadaWM',
  'ArrayOfTemplateAnimacaoWM' => 'CodigosWebMotorsMotosStructArrayOfTemplateAnimacaoWM',
  'ArrayOfTipoAlimentacao' => 'CodigosWebMotorsMotosStructArrayOfTipoAlimentacao',
  'ArrayOfTipoFreio' => 'CodigosWebMotorsMotosStructArrayOfTipoFreio',
  'ArrayOfTipoMotor' => 'CodigosWebMotorsMotosStructArrayOfTipoMotor',
  'ArrayOfTipoPartida' => 'CodigosWebMotorsMotosStructArrayOfTipoPartida',
  'ArrayOfTipoRefrigeracao' => 'CodigosWebMotorsMotosStructArrayOfTipoRefrigeracao',
  'CorMotoNovaWM' => 'CodigosWebMotorsMotosStructCorMotoNovaWM',
  'CorMotoUsadaWM' => 'CodigosWebMotorsMotosStructCorMotoUsadaWM',
  'ExtensaoVideoWM' => 'CodigosWebMotorsMotosStructExtensaoVideoWM',
  'MarcaMotoWM' => 'CodigosWebMotorsMotosStructMarcaMotoWM',
  'ModalidadeAnuncioWM' => 'CodigosWebMotorsMotosStructModalidadeAnuncioWM',
  'ModalidadeMotoWM' => 'CodigosWebMotorsMotosStructModalidadeMotoWM',
  'ModeloMotoWM' => 'CodigosWebMotorsMotosStructModeloMotoWM',
  'NumeroMarchas' => 'CodigosWebMotorsMotosStructNumeroMarchas',
  'ObterExtensoesVideos' => 'CodigosWebMotorsMotosStructObterExtensoesVideos',
  'ObterExtensoesVideosResponse' => 'CodigosWebMotorsMotosStructObterExtensoesVideosResponse',
  'ObterTemplateAnimacaoMotos' => 'CodigosWebMotorsMotosStructObterTemplateAnimacaoMotos',
  'ObterTemplateAnimacaoMotosResponse' => 'CodigosWebMotorsMotosStructObterTemplateAnimacaoMotosResponse',
  'OpcionalMotoNovaWM' => 'CodigosWebMotorsMotosStructOpcionalMotoNovaWM',
  'OpcionalMotoUsadaWM' => 'CodigosWebMotorsMotosStructOpcionalMotoUsadaWM',
  'TemplateAnimacaoWM' => 'CodigosWebMotorsMotosStructTemplateAnimacaoWM',
  'TipoAlimentacao' => 'CodigosWebMotorsMotosStructTipoAlimentacao',
  'TipoFreio' => 'CodigosWebMotorsMotosStructTipoFreio',
  'TipoMotor' => 'CodigosWebMotorsMotosStructTipoMotor',
  'TipoPartida' => 'CodigosWebMotorsMotosStructTipoPartida',
  'TipoRefrigeracao' => 'CodigosWebMotorsMotosStructTipoRefrigeracao',
  'obterCoresMotosUsadas' => 'CodigosWebMotorsMotosStructObterCoresMotosUsadas',
  'obterCoresMotosUsadasResponse' => 'CodigosWebMotorsMotosStructObterCoresMotosUsadasResponse',
  'obterMarcaMotos' => 'CodigosWebMotorsMotosStructObterMarcaMotos',
  'obterMarcaMotosResponse' => 'CodigosWebMotorsMotosStructObterMarcaMotosResponse',
  'obterModalidadesMotos' => 'CodigosWebMotorsMotosStructObterModalidadesMotos',
  'obterModalidadesMotosNovas' => 'CodigosWebMotorsMotosStructObterModalidadesMotosNovas',
  'obterModalidadesMotosNovasResponse' => 'CodigosWebMotorsMotosStructObterModalidadesMotosNovasResponse',
  'obterModalidadesMotosResponse' => 'CodigosWebMotorsMotosStructObterModalidadesMotosResponse',
  'obterModalidadesMotosUsadas' => 'CodigosWebMotorsMotosStructObterModalidadesMotosUsadas',
  'obterModalidadesMotosUsadasResponse' => 'CodigosWebMotorsMotosStructObterModalidadesMotosUsadasResponse',
  'obterModeloMotos' => 'CodigosWebMotorsMotosStructObterModeloMotos',
  'obterModeloMotosResponse' => 'CodigosWebMotorsMotosStructObterModeloMotosResponse',
  'obterNumeroMarchasMoto' => 'CodigosWebMotorsMotosStructObterNumeroMarchasMoto',
  'obterNumeroMarchasMotoResponse' => 'CodigosWebMotorsMotosStructObterNumeroMarchasMotoResponse',
  'obterOpcionaisMotosUsadas' => 'CodigosWebMotorsMotosStructObterOpcionaisMotosUsadas',
  'obterOpcionaisMotosUsadasResponse' => 'CodigosWebMotorsMotosStructObterOpcionaisMotosUsadasResponse',
  'obterTipoAlimentacaoMoto' => 'CodigosWebMotorsMotosStructObterTipoAlimentacaoMoto',
  'obterTipoAlimentacaoMotoResponse' => 'CodigosWebMotorsMotosStructObterTipoAlimentacaoMotoResponse',
  'obterTipoFreioMoto' => 'CodigosWebMotorsMotosStructObterTipoFreioMoto',
  'obterTipoFreioMotoResponse' => 'CodigosWebMotorsMotosStructObterTipoFreioMotoResponse',
  'obterTipoMotorMoto' => 'CodigosWebMotorsMotosStructObterTipoMotorMoto',
  'obterTipoMotorMotoResponse' => 'CodigosWebMotorsMotosStructObterTipoMotorMotoResponse',
  'obterTipoPartidaMoto' => 'CodigosWebMotorsMotosStructObterTipoPartidaMoto',
  'obterTipoPartidaMotoResponse' => 'CodigosWebMotorsMotosStructObterTipoPartidaMotoResponse',
  'obterTipoRefrigeracaoMoto' => 'CodigosWebMotorsMotosStructObterTipoRefrigeracaoMoto',
  'obterTipoRefrigeracaoMotoResponse' => 'CodigosWebMotorsMotosStructObterTipoRefrigeracaoMotoResponse',
);
    }
}
