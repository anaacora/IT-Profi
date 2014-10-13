'use strict'
angular.module('itProfiApp', ['ngAnimate', 'ngRoute'])
  .config(function($routeProvider) {
    $routeProvider
      .when('/', { templateUrl: '../register/registerInhalt.php' })
      .when('/firma', { template: 'TGOD' })
      .otherwise({ redirectTo: '/'});
  })