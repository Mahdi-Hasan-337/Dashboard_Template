<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .logo-name {
            font-family: 'Roboto Slab', serif;
            text-transform: uppercase;
            letter-spacing: .1rem;
            color: #000
        }

        .logo {
            width: 3rem;
            height: 3rem;
            border-radius: 50%
        }

        #wrapper {
            overflow-x: hidden
        }

        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            transition: all .25s ease-out
        }

        #sidebar-wrapper .sidebar-heading {
            padding: .875rem 1.25rem;
            font-size: 1.2rem
        }

        #sidebar-wrapper .list-group {
            width: 15rem
        }

        #dashboard-content-wrapper,
        #feedback-content-wrapper,
        #page-content-wrapper {
            min-width: 100vw
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: 0
        }

        #menu-toggle {
            cursor: pointer
        }

        .list-group-item {
            border: none;
            padding: 20px 30px;
        }

        .list-group-item.active {
            background-color: transparent;
            font-weight: 700;
            border: none
        }

        @media (min-width:768px) {
            #sidebar-wrapper {
                margin-left: 0
            }

            #dashboard-content-wrapper,
            #feedback-content-wrapper,
            #page-content-wrapper {
                min-width: 0;
                width: 100%
            }

            #wrapper.toggled #sidebar-wrapper {
                margin-left: -15rem
            }
        }
    </style>
    <title>Storekeeper</title>
</head>

<body>

    <div class="d-flex" id="wrapper">
        <div class="bg-white d-flex flex-column" id="sidebar-wrapper">
            <div class="contents"
                style="display: flex; flex-direction: column; justify-content: space-between; flex-grow: 1;">
                <div class="list-group list-group-flush my-3">
                    <a href="#" class="list-group-item list-group-item-action">Storekeeper</a>
                    <a href="#dashboard-content-wrapper" class="list-group-item list-group-item-action"><i
                            class="fas fa-tachometer-alt me-2"></i>Admin</a>
                    <a href="#page-content-wrapper" class="list-group-item list-group-item-action"><i
                            class="fas fa-chart-line me-2"></i>Dashboard</a>
                    <a href="#feedback-content-wrapper" class="list-group-item list-group-item-action"><i
                            class="fas fa-comments me-2"></i>History</a>

                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle"
                        data-bs-toggle="collapse" data-bs-target="#NotificationMenu" aria-expanded="false"
                        aria-controls="NotificationMenu">
                        <i class="fa-solid fa-bell me-2"></i>Notification
                    </a>
                    <div class="collapse" id="NotificationMenu" style="padding-left: 1.4rem;">
                        <a href="#notification1-content-wrapper" class="list-group-item list-group-item-action">
                            <i class="fas fa-comment-alt me-2"></i>Notification 1
                        </a>
                        <a href="#notification2-content-wrapper" class="list-group-item list-group-item-action">
                            <i class="fas fa-comment-alt me-2"></i>Notification 2
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- <!-- Contents for dashboard --> --}}
        <div id="dashboard-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bars fs-4 me-3" id="dashboard-menu-toggle"></i>
                    <h2 class="fs-2 m-0">Admin</h2>
                </div>
            </nav>

            <div class="container-fluid px-4">

            </div>
        </div>

        {{-- Contents for Analytics portion --}}
        <div id="page-content-wrapper" style="display:none;">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bars fs-4 me-3" id="analytics-menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashbaord</h2>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">

                </div>
            </div>
        </div>

        {{-- Contents for Feedback portion --}}
        <div id="feedback-content-wrapper" style="display:none;">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bars fs-4 me-3" id="feedback-menu-toggle"></i>
                    <h2 class="fs-2 m-0">Transaction History</h2>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row my-5">
                    <div class="col">

                    </div>
                </div>
            </div>
        </div>

        {{--  --}}
        <div id="notification1-content-wrapper" style="display:none;">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bars fs-4 me-3" id="notification1-menu-toggle"></i>
                    <h2 class="fs-2 m-0">Notification1</h2>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">

                </div>
            </div>
        </div>

        {{--  --}}
        <div id="notification2-content-wrapper" style="display:none;">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bars fs-4 me-3" id="notification2-menu-toggle"></i>
                    <h2 class="fs-2 m-0">Notification2</h2>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script>
        var dashboardToggleButton = document.getElementById("dashboard-menu-toggle");
        var analyticsToggleButton = document.getElementById("analytics-menu-toggle");
        var feedbackToggleButton = document.getElementById("feedback-menu-toggle");
        var notification1ToggleButton = document.getElementById("notification1-menu-toggle");
        var notification2ToggleButton = document.getElementById("notification2-menu-toggle");
        var el = document.getElementById("wrapper");

        dashboardToggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
        analyticsToggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
        feedbackToggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
        notification1ToggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
        notification2ToggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };

        document.querySelector('.list-group-item[href="#dashboard-content-wrapper"]').addEventListener('click', function() {
            toggleContent('dashboard-content-wrapper');
        });

        document.querySelector('.list-group-item[href="#page-content-wrapper"]').addEventListener('click', function() {
            toggleContent('page-content-wrapper');
        });

        document.querySelector('.list-group-item[href="#feedback-content-wrapper"]').addEventListener('click', function() {
            toggleContent('feedback-content-wrapper');
        });

        document.querySelector('.list-group-item[href="#notification1-content-wrapper"]').addEventListener('click',
            function() {
                toggleContent('notification1-content-wrapper');
            });

        document.querySelector('.list-group-item[href="#notification2-content-wrapper"]').addEventListener('click',
            function() {
                toggleContent('notification2-content-wrapper');
            });

        function toggleContent(contentId) {
            document.getElementById('dashboard-content-wrapper').style.display = 'none';
            document.getElementById('page-content-wrapper').style.display = 'none';
            document.getElementById('feedback-content-wrapper').style.display = 'none';
            document.getElementById('notification1-content-wrapper').style.display = 'none';
            document.getElementById('notification2-content-wrapper').style.display = 'none';

            document.getElementById(contentId).style.display = 'block';
        }
    </script>


</body>

</html>
