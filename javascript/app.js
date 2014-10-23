'use strict'
angular.module('itProfiApp', ['ngAnimate', 'ngRoute'])
<<<<<<< HEAD
	.config(function($routeProvider) {
    	$routeProvider
    	  .when('/person', { templateUrl: '../register/registerPerson.php' })		//Hier ist das Register für Personen
    	  .when('/firma', { templateUrl: '../register/registerFirma.php'})         //Hier ist das Register für Firmen
    	  .otherwise({ redirectTo: '/person'});
  })
  



=======
  .config(function($routeProvider) {
    $routeProvider
      .when('/', { templateUrl: '../register/registerInhalt.php' })
      .when('/firma', { template: 'TGOD' }) //Hier kommt das Register der Firma
      .otherwise({ redirectTo: '/'});
  })
>>>>>>> origin/master
