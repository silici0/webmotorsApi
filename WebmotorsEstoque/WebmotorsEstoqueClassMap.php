<?php
/**
 * File for the class which returns the class map definition
 * @package WebmotorsEstoque
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * Class which returns the class map definition by the static method WebmotorsEstoqueClassMap::classMap()
 * @package WebmotorsEstoque
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
class WebmotorsEstoqueClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'AnuncioModalidadeWM' => 'WebmotorsEstoqueStructAnuncioModalidadeWM',
  'AnuncioMotoWM' => 'WebmotorsEstoqueStructAnuncioMotoWM',
  'ArrayOfAnuncioModalidadeWM' => 'WebmotorsEstoqueStructArrayOfAnuncioModalidadeWM',
  'ArrayOfAnuncioMotoWM' => 'WebmotorsEstoqueStructArrayOfAnuncioMotoWM',
  'ArrayOfAvaliacaoMotoWM' => 'WebmotorsEstoqueStructArrayOfAvaliacaoMotoWM',
  'ArrayOfDetalheFotoWM' => 'WebmotorsEstoqueStructArrayOfDetalheFotoWM',
  'ArrayOfFotosWM' => 'WebmotorsEstoqueStructArrayOfFotosWM',
  'ArrayOfOpcionalMotoNovaWM' => 'WebmotorsEstoqueStructArrayOfOpcionalMotoNovaWM',
  'ArrayOfOpcionalMotoUsadaWM' => 'WebmotorsEstoqueStructArrayOfOpcionalMotoUsadaWM',
  'AvaliacaoMotoWM' => 'WebmotorsEstoqueStructAvaliacaoMotoWM',
  'AvalicaoMoto' => 'WebmotorsEstoqueStructAvalicaoMoto',
  'AvalicaoMotoResponse' => 'WebmotorsEstoqueStructAvalicaoMotoResponse',
  'DetalheFotoWM' => 'WebmotorsEstoqueStructDetalheFotoWM',
  'FotoAnimacaoWM' => 'WebmotorsEstoqueStructFotoAnimacaoWM',
  'FotoAnuncioMotoWM' => 'WebmotorsEstoqueStructFotoAnuncioMotoWM',
  'FotosMoto' => 'WebmotorsEstoqueStructFotosMoto',
  'FotosMotoResponse' => 'WebmotorsEstoqueStructFotosMotoResponse',
  'FotosWM' => 'WebmotorsEstoqueStructFotosWM',
  'OpcionalMotoNovaWM' => 'WebmotorsEstoqueStructOpcionalMotoNovaWM',
  'OpcionalMotoUsadaWM' => 'WebmotorsEstoqueStructOpcionalMotoUsadaWM',
  'TrocarModalidadeMoto' => 'WebmotorsEstoqueStructTrocarModalidadeMoto',
  'TrocarModalidadeMotoResponse' => 'WebmotorsEstoqueStructTrocarModalidadeMotoResponse',
  'VideoWM' => 'WebmotorsEstoqueStructVideoWM',
  'alterarMoto' => 'WebmotorsEstoqueStructAlterarMoto',
  'alterarMotoResponse' => 'WebmotorsEstoqueStructAlterarMotoResponse',
  'desativarFotoanimacaoMoto' => 'WebmotorsEstoqueStructDesativarFotoanimacaoMoto',
  'desativarFotoanimacaoMotoResponse' => 'WebmotorsEstoqueStructDesativarFotoanimacaoMotoResponse',
  'excluirFotoMoto' => 'WebmotorsEstoqueStructExcluirFotoMoto',
  'excluirFotoMotoResponse' => 'WebmotorsEstoqueStructExcluirFotoMotoResponse',
  'excluirMoto' => 'WebmotorsEstoqueStructExcluirMoto',
  'excluirMotoResponse' => 'WebmotorsEstoqueStructExcluirMotoResponse',
  'excluirVideo' => 'WebmotorsEstoqueStructExcluirVideo',
  'excluirVideoResponse' => 'WebmotorsEstoqueStructExcluirVideoResponse',
  'incluirFotoMoto' => 'WebmotorsEstoqueStructIncluirFotoMoto',
  'incluirFotoMotoResponse' => 'WebmotorsEstoqueStructIncluirFotoMotoResponse',
  'incluirMoto' => 'WebmotorsEstoqueStructIncluirMoto',
  'incluirMotoResponse' => 'WebmotorsEstoqueStructIncluirMotoResponse',
  'incluirVideo' => 'WebmotorsEstoqueStructIncluirVideo',
  'incluirVideoResponse' => 'WebmotorsEstoqueStructIncluirVideoResponse',
  'obterEstoqueAtualMotos' => 'WebmotorsEstoqueStructObterEstoqueAtualMotos',
  'obterEstoqueAtualMotosResponse' => 'WebmotorsEstoqueStructObterEstoqueAtualMotosResponse',
  'publicarFotoanimacaoMoto' => 'WebmotorsEstoqueStructPublicarFotoanimacaoMoto',
  'publicarFotoanimacaoMotoResponse' => 'WebmotorsEstoqueStructPublicarFotoanimacaoMotoResponse',
);
    }
}
