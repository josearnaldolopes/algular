<!DOCTYPE html>
<html lang="pt-br">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<title>Angular ROUT</title>

<body ng-app="myApp">

<p style="text-align: center;">

    <a href="#/!">Geral</a>
    <a href="#!creditos">Créditos</a>
    <a href="#!configuracoes">Configurações</a>
    <a href="#!modulos">Módulos</a>
    <a href="#!ambiente">Ambiente</a>
    <a href="#!variaveis">Variáveis</a>
    <a href="#!licensa">Licensa</a>

</p>

<div ng-view></div>

<script>
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "interno.php"
    })
    .when("/creditos", {
        templateUrl : "interno.php?a=creditos"
    })
    .when("/configuracoes", {
        templateUrl : "interno.php?a=configuracoes"
    })
    .when("/modulos", {
        templateUrl : "interno.php?a=modulos"
    })
    .when("/ambiente", {
        templateUrl : "interno.php?a=ambiente"
    })
    .when("/variaveis", {
        templateUrl : "interno.php?a=variaveis"
    })
    .when("/licensa", {
        templateUrl : "interno.php?a=licensa"
    })
    ;
});
</script>

</body>
</html>
