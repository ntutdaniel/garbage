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
    };
    $scope.isActive = -1;
    $scope.edit = function (index) {
        $scope.isActive = index;
    };


    $scope.pic_add = {};
    $scope.update = function (id, pic_add, index) {
        $scope.data = {
         id: id,
         pic_id: pic_add
         };
        console.log(pic_add);
        $http.get("./db/load.php?id=" + id + "&pic_add=" + pic_add)
            .success(function (data) {
                window.location.reload("./index.html");
            })
    }
});
