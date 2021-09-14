<!DOCTYPE html>
<html lang="en">

<head>
    <title>外送管理員介面</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <style>
        .app-container {
            padding-top: 120px;
            padding-bottom: 120px;
            padding-left: 10%;
            padding-right: 10%;

        }
    </style>
    
</head>

<body>
    <div class="app-container align-items-center justify-content-center flex-column" ng-app="myApp"
        ng-controller="myController">
        {{ task_name }}
        <h3>外送管理員介面</h3>
        <div class="d-flex align-items-center mb-3">
            <form action="/php/add.php" method="post">
                <thead>
                    <tr>
                    <div class="form-group mr-3 mb-0">
                        <input ng-model="your_Name" type="text" class="form-control" name="name"
                        placeholder="輸入名稱" />
                    </div>
                    </tr>
                    <tr>
                    <div class="form-group mr-3 mb-0">
                        <input ng-model="yourTask" type="text" class="form-control" name="meal"
                        placeholder="輸入餐點" />
                    </div>
                    </tr>
                </thead>

                <input type="submit" class="btn btn-warning mr-3 submit" value="新增餐點"/>
            </form>
        </div>
        {{ yourName }}
        <div class="table-wrapper">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>名字</th>
                        <th>餐點</th>
                        <th>送達時間</th>
                        <th>領取</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="task in tasks" ng-show = "{{ task.isGet == 0 }}" class="{{ task.isGet ? 'table-success' : 'table-light' }}">
                        <td>{{ task.name }}</td>
                        <td>{{ task.meal }}</td>
                        <td>{{ task.arriveTime }}</td>
                        <td>
                            <form action = "./php/confirm.php" method="post">
                                <input type="number" hidden="true" value="{{ task.orderId }}" name="orderId">
                                <input type="submit" class="btn btn-success confirm" value="{{ task.isGet ? '已領取' : '領取' }}"/>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        var app = angular.module("myApp", []);
        
        app.controller("myController", function ($scope, $http) {
            $scope.tasks = [];
            $http.get("./js/tex.json").then(
                function(data) {
                    console.log(data);
                    $scope.tasks = data['data']['data'];
                    console.log($scope.tasks);
                }
            )

            // $scope.saveTask = function () {
            //     $timeArrive = new Date().getTime();
            //     $scope.tasks.push({ task_user: $scope.your_Name, task_name: $scope.yourTask, time: $timeArrive , status: false });
            //     //   localStorage.setItem("tasks", JSON.stringify($scope.tasks));
            // };
            $scope.getTask = function () {
                var oldTasks = $scope.tasks;
                $scope.tasks = [];
                angular.forEach(oldTasks, function (task) {
                    if (!task.done) $scope.tasks.push(task);
                });
                localStorage.setItem("tasks", JSON.stringify($scope.tasks));
            };
            $scope.delete = function (i) {
                $scope.tasks.splice(i, 1);
            };
            $scope.finished = function (i) {
                $scope.tasks[i].isGet = 1;
            };


        });

    </script>
</body>

</html>
