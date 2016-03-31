var app = angular.module('myApp', []);
app.controller('customersCtrl', function ($scope, $http) {
    $http.get("./db/select_all.php")
        .then(function (response) {
            $scope.pics = response.data;
        });

    $scope.delete = function (deletingId, index) {
        $http.get("./db/delete.php?id=" + deletingId)
            .success(function (data) {
                $scope.pics.splice(index, 1)
            })
    }


});