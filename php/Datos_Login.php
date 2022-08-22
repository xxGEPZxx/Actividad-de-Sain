<?php
$Usuario=$_POST['Usuario'];
$Clave=$_POST['Clave'];

$location = "http://64.135.103.209:49152/SaintAdminServer?wsdl";
/*
$soapclient = new SoapClient('http://64.135.103.209:49152/SaintAdminServer?wsdl');*/


$request = "<s:Envelope xmlns:s=\"http://schemas.xmlsoap.org/soap/envelope/\">
<s:Header>
  <Action s:mustUnderstand='1' xmlns=\"http://schemas.microsoft.com/ws/2005/05/addressing/none\">http://tempuri.org/ISDKAdmin/\SEG_LoginSaint</Action>
</s:Header>
<s:Body>
    <SEG_LoginSaint xmlns=\"http://tempuri.org/\">
    <idUser d4p1:nil='$Usuario' xmlns:d4p1=\"http://www.w3.org/2001/XMLSchema-instance\" />
    <password d4p1:nil='$Clave' xmlns:d4p1=\"http://www.w3.org/2001/XMLSchema-instance\" />    
    </SEG_LoginSaint>

</s:Body>
</s:Envelope>
";


$response = print("Hola");

/*
$headers = [
    'Method: POST',
    'Connection: Keep-Alive',
    'User-Agent: PHP-SOAP-CURL',
    'Content-Type: text/xml; charset=utf-8',
    'SOAPAction: "<SEG_LoginSaint>"'
];

$ch = curl_init($soapclient->SEG_LoginSaint());
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, '$Usuario:$Clave');



print("Request: <br>");
print("<pre>$response</pre>");*/

?>