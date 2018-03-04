<?php
$soap_opt = array();
$soap_opt['stream_context'] = stream_context_create(array('http' => array('protocol_version' => 1.0) ) );
$soap_opt['encoding']    = 'UTF-8';
$soap_opt['trace']           = true;
$soap_opt['exceptions'] = true;
$soapClient = new SoapClient("http://jadlog.com.br/JadlogEdiWs/services/ValorFreteBean?wsdl",$soap_opt); 

$dados = array(
'vCepOrig'			=> '89806210',
'vCepDest'			=> '22450000',
'vPeso'					=> '5.00',
'vVlDec'				=> '999,99',
'vModalidade'			=> '4',
'vCnpj'					=> 'seu cpnj',
'Password'				=> 'sua senha',
'vSeguro'	            => 'N',
'vVlColeta'               => '0',
'vFrap'              => 'N',
'vEntrega'			    => 'D',
);
		
try { 
	$info = $soapClient->__soapCall("valorar", array($dados)); 
	echo '<pre>';
	print_r($info->valorarReturn);
} catch (SoapFault $fault) { 
	echo '<pre>';
	print_r($fault->faultstring); 
}
?>
