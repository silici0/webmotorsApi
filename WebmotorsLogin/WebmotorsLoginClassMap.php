<?php
/**
 * File for the class which returns the class map definition
 * @package WebmotorsLogin
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */
/**
 * Class which returns the class map definition by the static method WebmotorsLoginClassMap::classMap()
 * @package WebmotorsLogin
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-10-02
 */

class WebmotorsLoginClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'AutenticacaoSistemaRevendedorWM' => 'WebmotorsLoginStructAutenticacaoSistemaRevendedorWM',
  'autenticar' => 'WebmotorsLoginStructAutenticar',
  'autenticarResponse' => 'WebmotorsLoginStructAutenticarResponse',
);
    }
}
