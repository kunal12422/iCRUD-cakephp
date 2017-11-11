
'use strict';

angular.module('coderDecoder2App', [
    'ui.router',
  ])

  .config(['$stateProvider', '$urlRouterProvider', '$httpProvider','$locationProvider', function ($stateProvider, $urlRouterProvider, $httpProvider, $locationProvider) {

    $urlRouterProvider
      .otherwise('/');
    $stateProvider
      
 
      .state('home', {
        url: '/',
        templateUrl: '/js/app/views/list.html',
        controller: 'MainController as vm'
        

      })
      .state('addUser', {
        url: '/add-user',
        templateUrl: '/js/app/views/add-new.html',
        controller: 'AddController as vm'

      })
      .state('edit', {
        url: '/edit/:id',
        templateUrl: '/js/app/views/edit.html',
        controller: 'EditController as vm'

      })

  }])
;