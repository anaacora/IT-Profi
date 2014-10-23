'use strict'
angular.module('itProfiApp', ['ngAnimate', 'ngRoute'])
	.config(function($routeProvider) {
    	$routeProvider
    	  .when('/person', { templateUrl: '../register/registerPerson.php' })		//Hier ist das Register für Personen
    	  .when('/firma', { templateUrl: '../register/registerFirma.php'})         //Hier ist das Register für Firmen
    	  .otherwise({ redirectTo: '/person'});
  })
  



