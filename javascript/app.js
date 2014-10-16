'use strict'
angular.module('itProfiApp', ['ngAnimate', 'ngRoute'])
  .config(function($routeProvider) {
    $routeProvider
      .when('/', { templateUrl: '../register/registerInhalt.php' })
      .when('/firma', { template: 'TGOD' }) //Hier kommt das Register der Firma
      .otherwise({ redirectTo: '/'});
  })