
'use strict';

(function(){

var DataFactory = function($http,$q){ 
    function getAllList(){
        var deferred = $q.defer();
        $http.get('api/list').then(function(data) {
             deferred.resolve(data.data);
          },function(data, status, headers, config) {
            deferred.reject("Error: request returned status " + status); 
          });
          return deferred.promise;
    }
    function getById(id){
        var deferred = $q.defer();
        $http.get('api/list/'+id).then(function(data) {
            deferred.resolve(data.data);
         },function(data, status, headers, config) {
           deferred.reject("Error: request returned status " + status); 
         });
         return deferred.promise;
    }
    function addNewItem(user){
        var deferred = $q.defer();
        $http.post('api/list', user).then(function(data) {
            deferred.resolve(data.data);
         },function(data, status, headers, config) {
           deferred.reject("Error: request returned status " + status); 
         });

        return deferred.promise;
    }
    function updateUser(id,user){
        var deferred = $q.defer();
        $http.put('api/list/'+id, user).then(function(data) {
            console.log(data);
            deferred.resolve(data.data);
          
        },function(data, status, headers, config) {
            deferred.reject("Error: request returned status " + status); 
        });
        return deferred.promise;
    }
    function deleteUser(id){
        var deferred = $q.defer();
        $http.delete('api/list/'+id).then(function(data) {
            console.log(data);
            deferred.resolve(data.data);
          
        },function(data, status, headers, config) {
            deferred.reject("Error: request returned status " + status); 
        });
        return deferred.promise;
    }
    return { 
        getAllList: getAllList,
        getById:getById,
        addNewItem:addNewItem,
        updateUser:updateUser,
        deleteUser:deleteUser
    }
}
angular.module('coderDecoder2App').factory('DataFactory', ['$http','$q', DataFactory]);
    
})();