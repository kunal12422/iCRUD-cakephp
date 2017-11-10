
'use strict';

angular.module('coderDecoder2App', [
    'ui.router',
  ])

  .config(['$stateProvider', '$urlRouterProvider', '$httpProvider','$locationProvider', function ($stateProvider, $urlRouterProvider, $httpProvider, $locationProvider) {

    // $httpProvider.interceptors.push('authInterceptor');
    $locationProvider.html5Mode(true);
    $locationProvider.hashPrefix('!');
    $urlRouterProvider
      .otherwise('/');
    $stateProvider
      
 
      .state('home', {
        url: '/',
        templateUrl: '/js/app/views/home.html',
        controller: 'MainController as vm'
        
        // ,resolve: {
        //   fetchTodoList: [ 'DataFactory', function (DataFactory) {

            
        //      return DataFactory.getAllTasks()
        //   }]
        // }

      })
    //   .state('login', {
    //     url: '/login',
    //     templateUrl: 'app/views/login.html',
    //     controller: 'LoginController as vm'

    //   })
    //   .state('register', {
    //     url: '/register',
    //     templateUrl: 'app/views/register.html',
    //     controller: 'RegisterController as vm'

    //   })

  }])
;