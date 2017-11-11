
'use strict';
(function () {

  var addController = function addController(DataFactory) {
    var vm = this;
    vm.master = {};
    vm.user = {};
    var reset = function() {
      vm.user = angular.copy(vm.master);
    };
    vm.add_new = function(user, AddNewForm) {
        
        DataFactory.addNewItem(user).then(function(data){
          console.log(data)
          reset();
        });
      
        };
  };


  angular.module('coderDecoder2App').controller('AddController',[ 'DataFactory',addController]);

})();