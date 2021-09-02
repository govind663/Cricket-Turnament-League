<!DOCTYPE html>
<html lang="en">

<head>
    <title>IPL2020 || Admin Dashboard</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="assets/images/IPL2020.png">

    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head>

<body class="app">

    @include('Backend.header')

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                    <div class="inner">
                        <div class="app-card-body p-3 p-lg-4">
                            <h3 class="mb-3">Welcome,
                                @foreach ($users as $user)
                                    {{ $user->name }}
                                @endforeach!
                            </h3>
                            <h4> Have a nice day</h4>
                            <div class="row gx-5 gy-3">
                                <div class="col-12 col-lg-9">
                                    <div>
                                        A backend developer is one who makes use of the technology required to develop
                                        the products for the backend of any website. A backend developer is responsible
                                        for building the structure of a software application. Backend developers
                                        typically work in groups or with a team.
                                    </div>
                                    {{-- <div class="container col-sm-5" >
                                        <img src="assets/images/ipl-homepage.png" class="logo-icon me-2" alt="" height="200px" width="200px" >
                                    </div> --}}
                                </div>
                                <!--//col-->
                                <div class="col-12 col-lg-3">
                                    <img src="assets/images/ipl-homepage.png" alt="" height="200px" width="200px" >
                                    {{-- <a class="btn app-btn-primary"
                                        href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/"><svg
                                            width="1em" height="1em" viewBox="0 0 16 16"
                                            class="bi bi-file-earmark-arrow-down me-2" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                                            <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z" />
                                            <path fill-rule="evenodd"
                                                d="M8 6a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 10.293V6.5A.5.5 0 0 1 8 6z" />
                                        </svg>Free Download</a> --}}
                                </div>
                                <!--//col-->
                            </div>
                            <!--//row-->
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                        <!--//app-card-body-->

                    </div>
                    <!--//inner-->
                </div>
                <!--//app-card-->

                <div class="row g-4 mb-4">
                    <div class="col-6 col-lg-3 " >
                        <div class="app-card app-card-stat shadow-sm h-100 " >

                            <div class="app-card-body p-3 p-lg-4">
                                <img src="assets/result/orange_cap.png" alt="" width="80px" height="80px">
                                <h3>Virat Kohli</h3>
                                <h4 class="stats-type mb-1">Runs</h4>
                                <div class="stats-figure">973</div>
                            </div>
                            <!--//app-card-body-->
                            <a class="app-card-link-mask" href="/match-summary"></a>
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->

                    <div class="col-6 col-lg-3 ">
                        <div class="app-card app-card-stat shadow-sm h-100 ">

                            <div class="app-card-body p-3 p-lg-4">
                                <img src="assets/result/purple_cap.jpg" alt="" width="80px" height="80px">
                                <h3>Trent Boult</h3>
                                <h4 class="stats-type mb-1">Wickets</h4>
                                <div class="stats-figure">28</div>
                            </div>
                            <!--//app-card-body-->
                            <a class="app-card-link-mask" href="/match-summary"></a>
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->

                    <div class="col-6 col-lg-3 ">
                        <div class="app-card app-card-stat shadow-sm h-100 ">

                            <div class="app-card-body p-3 p-lg-4">
                                <img src="assets/result/trophy.png" alt="" width="80px" height="80px">
                                <h3>Delhi Capitals</h3>
                                <h4 class="stats-type mb-1">won by i wicket </h4>

                            </div>
                            <!--//app-card-body-->
                            <a class="app-card-link-mask" href="/match-summary"></a>
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                </div>
                <!--//row-->

                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Indian Premier League 2020</h1>
                    </div>
                    <div class="col-auto">
                        <div class="page-utilities">
                            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                                <div class="col-auto">
                                    <form class="table-search-form row gx-1 align-items-center">
                                        <div class="col-auto">
                                            <input type="text" id="search-orders" name="searchorders"
                                                class="form-control search-orders" placeholder="Search">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn app-btn-secondary">Search</button>
                                        </div>
                                    </form>

                                </div>
                                <!--//col-->
                                <div class="col-auto">

                                    <select class="form-select w-auto">
                                        <option selected value="option-1">All</option>
                                        <option value="option-2">This week</option>
                                        <option value="option-3">This month</option>
                                        <option value="option-4">Last 3 months</option>

                                    </select>
                                </div>
                                <div class="col-auto">
                                    <a class="btn app-btn-secondary" href="#">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                            <path fill-rule="evenodd"
                                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                        </svg>
                                        Download CSV
                                    </a>
                                </div>
                            </div>
                            <!--//row-->
                        </div>
                        <!--//table-utilities-->
                    </div>
                    <!--//col-auto-->
                </div>
                <!--//row-->


                <nav id="orders-table-tab"
                    class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
                    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab"
                        href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Schedule</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab"
                        href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Final</a>

                </nav>


                <div class="tab-content" id="orders-table-tab-content">
                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel"
                        aria-labelledby="orders-all-tab">
                        <div class="app-card app-card-orders-table shadow-sm mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead class="text-center text-bold">
                                            <tr>
                                                <th class="cell">Match No</th>
                                                <th class="cell">Battle</th>
                                                <th class="cell">Date</th>
                                                <th class="cell">Venue</th>
                                                <th class="cell">Winner</th>
                                                <th class="cell">Player of the Match</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <!-- MI vs Others -->
                                            <tr>
                                                <td class="cell">1</td>
                                                <td class="cell"><span class="truncate">MI vs CSK</span></td>
                                                <td class="cell"><span>14 April, 2020</span></td>
                                                <td class="cell"><span>Wankhede Stadium, Mumbai</span></td>
                                                <td class="cell"><span class="badge bg-success p-2"> MI won by 7 wickets</span></td>
                                                <td class="cell"><span> Kieron Pollard </span></td>

                                            </tr>

                                            <tr>
                                                <td class="cell">2</td>
                                                <td class="cell"><span class="truncate">MI vs DC</span></td>
                                                <td class="cell"><span>16 April, 2020</span></td>
                                                <td class="cell"><span>Wankhede Stadium, Mumbai</span></td>
                                                <td class="cell"><span class="badge bg-success p-2"> MI won by 8 wickets</span></td>
                                                <td class="cell"><span> Trent Boult </span></td>

                                            </tr>

                                            <tr>
                                                <td class="cell">3</td>
                                                <td class="cell"><span class="truncate">MI vs RCB</span></td>
                                                <td class="cell"><span>18 April, 2020</span></td>
                                                <td class="cell"><span>Chinnaswamy Stadium, Banglore</span></td>
                                                <td class="cell"><span class="badge bg-success p-2"> MI won by 2 runs</span></td>
                                                <td class="cell"><span> Ishan Kishan </span></td>

                                            </tr>

                                            <tr>
                                                <td class="cell">4</td>
                                                <td class="cell"><span class="truncate">MI vs KKR</span></td>
                                                <td class="cell"><span>20 April, 2020</span></td>
                                                <td class="cell"><span>Eden Gardens, Kolkata</span></td>
                                                <td class="cell"><span class="badge bg-success p-2"> MI won by 135 runs</span></td>
                                                <td class="cell"><span> Rohit Sharma </span></td>

                                            </tr>

                                            <!-- CSK vs Others -->
                                            <tr>
                                                <td class="cell">5</td>
                                                <td class="cell"><span class="truncate">CSK vs KKR</span></td>
                                                <td class="cell"><span>22 April, 2020</span></td>
                                                <td class="cell"><span>Pheroz Shah kotla, Delhi</span></td>
                                                <td class="cell"><span class="badge bg-success p-2"> CSK won by 35 runs</span></td>
                                                <td class="cell"><span> M S Dhoni </span></td>

                                            </tr>

                                            <tr>
                                                <td class="cell">6</td>
                                                <td class="cell"><span class="truncate">CSK vs RCB</span></td>
                                                <td class="cell"><span>24 April, 2020</span></td>
                                                <td class="cell"><span>Chinnaswamy Stadium, Banglore</span></td>
                                                <td class="cell"><span class="badge bg-success p-2"> CSK won by 2 runs</span></td>
                                                <td class="cell"><span> Deepak Chahar </span></td>

                                            </tr>


                                            <tr>
                                                <td class="cell">7</td>
                                                <td class="cell"><span class="truncate">DC vs RCB</span></td>
                                                <td class="cell"><span>26 April, 2020</span></td>
                                                <td class="cell"><span>Pheroz Shah kotla, Delhi</span></td>
                                                <td class="cell"><span class="badge bg-success p-2"> DC won by 35 runs.</span></td>
                                                <td class="cell"><span> Rishabh Pant </span></td>

                                            </tr>

                                            <tr>
                                                <td class="cell">8</td>
                                                <td class="cell"><span class="truncate">DC vs CSK</span></td>
                                                <td class="cell"><span>28 April, 2020</span></td>
                                                <td class="cell"><span>Pheroz Shah kotla, Delhi</span></td>
                                                <td class="cell"><span class="badge bg-success p-2"> DC won by 15 runs</span></td>
                                                <td class="cell"><span> Shikhar Dhawan </span></td>

                                            </tr>

                                            <tr>
                                                <td class="cell">9</td>
                                                <td class="cell"><span class="truncate">DC vs KKR</span></td>
                                                <td class="cell"><span>30 April, 2020</span></td>
                                                <td class="cell"><span>Eden Gardens, Kolkata</span></td>
                                                <td class="cell"><span class="badge bg-success p-2"> DC won by 3 wickets</span></td>
                                                <td class="cell"><span> Kagiso Rabada </span></td>

                                            </tr>

                                            <tr>
                                                <td class="cell">10</td>
                                                <td class="cell"><span class="truncate">RCB vs KKR</span></td>
                                                <td class="cell"><span>2 May, 2020</span></td>
                                                <td class="cell"><span>Eden Gardens, Kolkata</span></td>
                                                <td class="cell"><span class="badge bg-success p-2"> RCB won by 6 wickets</span></td>
                                                <td class="cell"><span> Virat Kohli </span></td>
                                                {{-- <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td> --}}
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!--//table-responsive-->

                            </div>
                            <!--//app-card-body-->
                        </div>
                        <!--//app-card-->
                        <nav class="app-pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                        <!--//app-pagination-->

                    </div>
                    <!--//tab-pane-->

                    <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
                        <div class="app-card app-card-orders-table mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">

                                    <table class="table mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Match No</th>
                                                <th class="cell">Battle</th>
                                                <th class="cell">Date</th>
                                                <th class="cell">Venue</th>
                                                <th class="cell">Winner</th>
                                                <th class="cell">Player of the Match</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cell">11</td>
                                                <td class="cell"><span class="truncate">MI vs DC</span></td>
                                                <td class="cell"><span>5 May, 2020</span></td>
                                                <td class="cell"><span>Wankhede Stadium, Mumbai</span></td>
                                                <td class="cell"><span class="badge bg-success p-2"> DC won by 1 wicket</span></td>
                                                <td class="cell"><span> Rishabh Pant </span></td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--//table-responsive-->
                            </div>
                            <!--//app-card-body-->
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//tab-pane-->
                </div>


            </div>
            <!--//container-fluid-->

        </div>
        <!--//app-content-->

        @include('Backend.footer')

    </div>
    <!--//app-wrapper-->


    <!-- Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Charts JS -->
    <script src="assets/plugins/chart.js/chart.min.js"></script>
    <script src="assets/js/index-charts.js"></script>

    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script>

</body>

</html>
