var app = angular.module('myApp', []);
app.controller('customersCtrl', function ($scope, $http) {
    $http.get("./db/update.php")
        .then(function (response) {
            $scope.pics = response.data;
        });
});