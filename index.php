<html>
  <head>
    <title>外送管理</title>
    <meta http-equiv="refresh" content="5">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- <script defer src = "./js/main.js"></script> -->
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
            padding-left: 120px;
            padding-right: 120px;
        }
    </style>
  </head>


  <body>
  <div class="app-container align-items-center justify-content-center flex-column" ng-app="myApp"
        ng-controller="myController">
        {{ task_name }}
        <h3>外送管理</h3>
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
                            <form action = "./php/toGet.php" method="post">
                                <input type="number" hidden="true" value="{{ task.orderId }}" name="orderId">
                                <input type="submit" class="btn btn-success confirm" value="{{ task.isGet ? '已領取' : '預約' }}"/>
                            </form>
                        </td>
                    </tr>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        var app = angular.module("myApp", []);
        
        app.controller("myController", function ($scope, $http) {
            $scope.tasks = [];
            $http.get("./js/text.json").then(
                function(data) {
                    console.log(data);
                    $scope.tasks = data['data'];
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
