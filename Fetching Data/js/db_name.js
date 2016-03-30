var app = angular.module('myApp', []);
app.controller('customersCtrl', function ($scope, $http) {
    $http.get("./db/update.php")
        .then(function (response) {
            $scope.pics = response.data;
        });
    $scope.test='http://i.imgur.com/w2L3I26.jpg';
});