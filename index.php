
<form class='url-input' method="post" action="index.php">
    <input type='text' name="sentUrl" id='sentUrl' />
    <button type='submit'>
        Wygeneruj kod QR
    </button>
</form>

<?php

include_once("E:/laragon/www/php-qrcode/src/classes/QRCodeGenerator.php");

use \QRCodeGeneratorNamespace\QRCodeGenerator;

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $data = isset($_POST["sentUrl"]) ? $_POST["sentUrl"] :"";

    if(!empty($data)) 
    {
        QRCodeGenerator::generateQRCode($data);
    } 
    else 
    {
        echo "Wprowadź URL przed generowaniem kodu QR";
    }
}

?>


<style>
    form.url-input {
        align-items:center;
        justify-content:center;
        margin-top:300px;
        display:flex;
    }


    h3.generated-code-heading {
        margin:auto 0;
        padding-top:10px;
        display:flex;
        align-items:center;
        justify-content:center;
        text-align:center;
    }
</style>