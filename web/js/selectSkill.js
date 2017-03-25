var skill = angular.module("appTest", []);

skill.controller('skillCtrl', [
    '$scope','$http',
    function ($scope,$http) {
        $scope.getSkills = function () {
 event.preventDefault();
        $http.get("http://www.adopte-un-patron.fr/offre/get/skills")
                    .then(function (response) {
                        $scope.skills = response.data;
                    });
        };
        
        $scope.skillsToken = function ($id) {
        $http.get("http://www.adopte-un-patron.fr/offre/skills/update/tokenSkills/"+$id);
        };
    }
    
    

]);