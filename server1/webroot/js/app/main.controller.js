
'use strict';
(function () {

  var mainController = function mainController(DataFactory) {
    var vm = this;
    vm.users = {};
    DataFactory.getAllList().then(function(data){
      console.log(data)
      vm.users = data;
    });
  };


  angular.module('coderDecoder2App').controller('MainController',[ 'DataFactory',mainController]);

})();