<?php
$soapClient = new SoapClient("http://www.jamef.com.br/webservice/JAMW0520.apw?WSDL"); 

$dados = array(
'TIPTRA' => '2',
'CNPJCPF' => 'seu cnpj',
'MUNORI' => 'CURITIBA',
'ESTORI' => 'PR',
'MUNDES' => '',
'ESTDES' => '',
'SEGPROD' => '4',
'QTDVOL' => '1',
'PESO' => '22,00',
'VALMER' => '373,75',
'METRO3' => '0,031',
'CNPJDES' => '',
'FILCOT' => '07',
'CEPDES' => '86118000',
);

try { 
	$info = $soapClient->__call("JAMW0520_03", array($dados)); 
	print_r($info);
} catch (SoapFault $fault) { 
	print_r($fault->faultstring); 
}
?>
