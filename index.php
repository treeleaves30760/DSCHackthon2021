<html>

<head>
    <title>外送列表</title>
    <meta http-equiv="refresh" content="10">
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <style>
        html {
            --color-card-bg: rgba(255, 255, 255, 0.8);
            --color-card-border: rgba(214, 214, 214, 0.8);
            --color-card-shadow: rgba(0, 0, 0, 0.16);
            --color-table-border: #E6E6E6;
            --color-table-header: #4E525E;
        }
    </style>
    <style>
        .app-container {
            padding-top: 120px;
            padding-bottom: 120px;
            padding-left: 20%;
            padding-right: 20%;
        }

        .table-wrapper {

            border: 1px solid var(--color-card-border);
            border-radius: 20px;
            background-color: var(--color-card-bg);
            box-shadow: 3px 3px 5px var(--color-card-shadow);
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th {
            height: 56px;
            padding: 0 16px;
            border-top: none;
            border-bottom: 1px solid var(--color-table-border);
            color: var(--color-table-header);
            font-size: 14px;
            font-weight: 500;
            line-height: 56px;
            text-align: center;
        }
        .table td {
            height: 56px;
            padding: 0 16px;
            border-top: none;
            border-bottom: 1px solid var(--color-table-border);
            color: var(--color-table-header);
            font-size: 14px;
            font-weight: 500;
            line-height: 56px;
            text-align: center;
        }
        .navbar {
            transition: all 0.4s;
        }

        .navbar .nav-link {
            color: #000;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link:focus {
            color: #000;
            text-decoration: none;
        }

        .navbar .navbar-brand {
            color: #000;
        }


        /* Change navbar styling on scroll */
        .navbar.active {
            background: #333;
            box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar.active .nav-link {
            color: #CCC;
        }

        .navbar.active .nav-link:hover,
        .navbar.active .nav-link:focus {
            color: #CCC;
            text-decoration: none;
        }

        .navbar.active .navbar-brand {
            color: #CCC;
        }


        /* Change navbar styling on small viewports */
        @media (max-width: 991.98px) {
            .navbar {
                background: #fff;
            }

            .navbar .navbar-brand,
            .navbar .nav-link {
                color: #555;
            }
        }



        /*
        *
        * ==========================================
        * FOR DEMO PURPOSES
        * ==========================================
        *
        */
        .text-small {
            font-size: 0.9rem !important;
        }


        body {
            min-height: 110vh;
            background-color: rgb(240, 243, 255);
            background-image: linear-gradient(135deg, rgb(239, 241, 254) 0%, rgb(255, 255, 255) 100%);
        }

        .crude {
            font-size: 16px;
            font-weight: bold;
        }

        @import url(https://fonts.googleapis.com/css?family=Alegreya+Sans:300);

        body {
            font-family: 'Alegreya Sans', sans-serif;
        }

        /* Sticky footer position and size
        -------------------------------------------------- */
        html {
            position: relative;
            min-height: 100%;
        }

        body {
            /* Margin bottom by footer height */
            margin-bottom: 300px;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 280px;
        }

        /* Taller footer on small screens */
        @media (max-width: 567em) {
            .footer {
                height: 280px;
            }
        }

        /* Sticky footer style and color
        -------------------------------------------------- */
        footer {
            padding-top: 40px;
            background-color: #292c2f;
            color: #bbb;
        }

        footer a {
            color: #999;
            text-decoration: none;
        }

        footer a:hover,
        footer a:focus {
            color: #aaa;
            text-decoration: none;
            border-bottom: 1px dotted #999;
        }

        footer .form-control {
            background-color: #1f2022;
            box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
            border: none;
            resize: none;
            color: #d1d2d2;
            padding: 0.7em 1em;
        }
    </style>
</head>


<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container"><a href="./index.php"
                    class="navbar-brand text-uppercase font-weight-bold">宿舍食物外送分配取餐系統</a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="./index.php"
                                class="nav-link text-uppercase font-weight-bold">Home <span
                                    class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">About</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Contact</a>
                        </li>
                        <li class="nav-item"><a href="./admin.php" class="nav-link text-uppercase font-weight-bold">To
                                Admin</a></li>
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
                            <form action="./php/toGet.php" method="post">
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
                    <h5><i class="fas fa-hamburger"></i>MCE INC.| 零卡的距離，隔絕人與人之間的聯繫</h5>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="">Benefit</a></li>
                                <li><a href="">Partners</a></li>
                                <li><a href="">Team</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li><a href="">Documentation</a></li>
                                <li><a href="">Support</a></li>
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
                <div class="col-md-2">
                    <h5 class="text-md-right">Contact Us</h5>
                    <hr>
                </div>
                <div class="col-md-5">
                    <form>
                        <fieldset class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </fieldset>
                        <fieldset class="form-group">
                            <textarea class="form-control" id="exampleMessage" placeholder="Message"></textarea>
                        </fieldset>
                        <fieldset class="form-group text-xs-right">
                            <button type="button" class="btn btn-secondary-outline btn-lg">Send</button>
                        </fieldset>
                    </form>
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