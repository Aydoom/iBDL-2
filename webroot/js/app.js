var app = angular.module('app', []);

app.controller("AppCntrl", function($scope, $http){
    $scope.menuLinks = [
        {'name': 'Главная', 'active': true, 'href': []},
        {'name': 'Сессии', 'active': false, 'href': 'session'},
        {'name': 'Отчеты', 'active': false, 'href': []},
        {'name': 'Датчики', 'active': false, 'href': []}        
    ];
    
    $scope.clickMenuLink = function(actIndex) {
        for(var index in $scope.menuLinks) {
            if (index == actIndex) {
                $scope.menuLinks[index].active = true;
                $scope.showWorkZone($scope.menuLinks[index].href);
            } else {
                $scope.menuLinks[index].active = false;
            }
        }
    };
    
    $scope.showWorkZone = function(zone) {
        console.log(zone);
        $(".jq-wz").hide();
        $(".jq-wz--" + zone).show();
    };
});