<?php
$a = $_GET["a"];

switch ($a):
    case "creditos":
        phpinfo(INFO_CREDITS);
        break;
    case "configuracoes":
        phpinfo(INFO_CONFIGURATION);
        break;
    case "modulos":
        phpinfo(INFO_MODULES);
        break;
    case "ambiente":
        phpinfo(INFO_ENVIRONMENT);
        break;
    case "variaveis":
        phpinfo(INFO_VARIABLES);
        break;
    case "licensa":
        phpinfo(INFO_LICENSE);
        break;
    default:
        phpinfo();
endswitch;