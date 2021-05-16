<html>

<head>
    <title>外送列表</title>
    <!-- <meta http-equiv="refresh" content="10"> -->
    <link rel="icon" href="./favicon.ico" type="image/x-icon" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <link href="./css/main.css" rel="stylesheet" type="text/css">
    
</head>


<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container"><a href="./index.php"
                    class="navbar-brand text-uppercase font-weight-bold">梅竹Eat!</a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="./index.php"
                                class="nav-link text-uppercase font-weight-bold">Home <span
                                    class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a href="./about/aboutus.php" class="nav-link text-uppercase font-weight-bold">About</a></li>
                        <li class="nav-item"><a href="#contactUs" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                        <li class="nav-item"><a href="./admin.php" class="nav-link text-uppercase font-weight-bold">To Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="app-container align-items-center justify-content-center flex-column" ng-app="myApp"
        ng-controller="myController">
        <h3><b>目前外送等待取餐列表</b></h3>
        {{ yourName }}
        <div class="table-wrapper">
            <table class="table table-hover crude">
                <thead>
                    <tr>
                        <th>名字</th>
                        <th>餐點</th>
                        <th>送達時間</th>
                        <th>預約</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="task in tasks" ng-show="{{ task.isGet == 0 }}"
                        class="{{ task.isGet ? 'table-success' : 'table-light' }}">
                        <td>{{ task.name }}</td>
                        <td>{{ task.meal }}</td>
                        <td>{{ task.arriveTime * 1000 | date:'medium' }}</td>
                        <!--// 前面n個人: arriveTime + 60 * (n + 1) -->
                        <td>
                            <form action="./php/toGet.php" class="center" method="post">
                                <input type="number" hidden="true" value="{{ task.orderId }}" name="orderId">
                                <input type="submit" class="btn btn-success confirm"
                                    value="{{ task.isGet ? '已領取' : '預約' }}" />
                            </form>
                        </td>
                    </tr>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h5><i class="fas fa-hamburger"></i>MCE INC.│零卡的距離</h5>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="">Benefit</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li><a href="">Legal Terms</a></li>
                                <li><a href="">About</a></li>
                            </ul>
                        </div>
                    </div>
                    <ul class="nav">
                        <li class="nav-item"><a href="https://github.com/treeleaves30760/DSCHackthon2021"
                                class="nav-link"><i class="fa fa-github fa-lg"></i></a></li>
                        <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a>
                        </li>
                        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
                    </ul>
                    <br>
                </div>
                <div class="col-md-2" id="contactUs">
                    <h5 class="text-md-right">Contact Us</h5>
                    <hr>
                </div>
                <div class="col-md-5">
                  <!-- <form> -->
                      <fieldset class="form-group">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                      </fieldset>
                      <fieldset class="form-group">
                          <textarea class="form-control" name="message" id="message" placeholder="Message"></textarea>
                      </fieldset>
                      <fieldset class="form-group text-xs-right">
                          <button type="submit" class="btn btn-success submitMessage" value="送出">送出</button>
                      </fieldset>
                  <!-- </form> -->
              </div>
            </div>
        </div>
    </footer>

    <script>
        var app = angular.module("myApp", []);


        app.controller("myController", function ($scope, $http) {

            $scope.tasks = [];
            $http.get("./js/text.json").then(
                function (data) {
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
    <script defer src="./js/main.js"></script>
    <script>
        $(function () {
            $(window).on('scroll', function () {
                if ($(window).scrollTop() > 10) {
                    $('.navbar').addClass('active');
                } else {
                    $('.navbar').removeClass('active');
                }
            });
        });
    </script>
</body>

</html>