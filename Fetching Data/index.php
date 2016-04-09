<?php
session_start();
session_destroy();
//$_SESSION['accountType']="user";
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">


<head>
    <title>mysql angular</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="js/imgur_api.js"></script>
    <script type="text/javascript" src="./js/db_name.js"></script>
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script src="plugin/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="plugin/bootstrap-3.3.6-dist/css/bootstrap.css">
</head>
<body>

<!-----img 上傳------->
<div class="container">
    <div class="drop-box">DROP!
        <button onclick="document.querySelector('input').click()">Or click</button>
    </div>
    <input style="visibility: collapse; width: 0px;" type="file" multiple="" onchange="upload(this.files[0])">

    <p id="loading">Loading...</p>
    <!--------後台撈圖片-------->
    <div class="load-box" ng-controller="customersCtrl">
        <ul ng-repeat="x in pics">
            <li ng-if="$index == isActive"><input type="text" ng-model="x.pic" ng-value="x.pic" required><a id="update"
                                                                                                            ng-click="update(x.id, x.pic, $index)">Update</a>
            </li>
            <li><img ng-src="{{ x.pic }}" alt="pic"/></li>
            <li>
                <a id="delete-pic" ng-click="delete(x.id,$index)">Delete</a><a id="edit" ng-click="edit($index)">Edit</a><a id="download" ng-click="download(x.pic)">Download</a>
            </li>
        </ul>
    </div>
</div>
</body>
