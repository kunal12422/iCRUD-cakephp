
'use strict';
(function () {

  var editController = function editController(DataFactory,$location,$stateParams,$state) {
    var vm = this;
    var id = $stateParams.id;
    
    vm.users = [];
    DataFactory.getById(id).then(function(data){
      vm.users.push(data);
    }).catch(function(){
        $state.go('home');
      });
    vm.update = function(user){
        console.log(user);
        DataFactory.updateUser(id,user).then(function(data){
            console.log('updated')
          });
      };
      vm.delete = function(user){
        console.log(user);
        // var deleteUser = confirm('Are you absolutely sure you want to delete?');
        
            DataFactory.deleteUser(user.id).then(function(data){
                // vm.users=[];
                // vm.users.push(data);
                // $scope.activePath = $location.path('/');
                $state.go('home');
            });
        
      }
  };


  angular.module('coderDecoder2App').controller('EditController',[ 'DataFactory','$location', '$stateParams','$state',editController]);

})();