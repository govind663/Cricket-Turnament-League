<!DOCTYPE html>
<html lang="en">

<head>
    <title>IPL2020 || Match Summary</title>

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
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                            </tr>

                                            <tr>
                                                <td class="cell">2</td>
                                                <td class="cell"><span class="truncate">MI vs DC</span></td>
                                                <td class="cell"><span>16 April, 2020</span></td>
                                                <td class="cell"><span>Wankhede Stadium, Mumbai</span></td>
                                                <td class="cell"><span class="badge bg-success p-2"> MI won by 8 wickets</span></td>
                                                <td class="cell"><span> Trent Boult </span></td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                            </tr>

                                            <tr>
                                                <td class="cell">3</td>
                                                <td class="cell"><span class="truncate">MI vs RCB</span></td>
                                                <td class="cell"><span>18 April, 2020</span></td>
                                                <td class="cell"><span>Chinnaswamy Stadium, Banglore</span></td>
                                                <td class="cell"><span class="badge bg-success p-2"> MI won by 2 runs</span></td>
                                                <td class="cell"><span> Ishan Kishan </span></td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                            </tr>

                                            <tr>
                                                <td class="cell">4</td>
                                                <td class="cell"><span class="truncate">MI vs KKR</span></td>
                                                <td class="cell"><span>20 April, 2020</span></td>
                                                <td class="cell"><span>Eden Gardens, Kolkata</span></td>
                                                <td class="cell"><span class="badge bg-success p-2"> MI won by 135 runs</span></td>
                                                <td class="cell"><span> Rohit Sharma </span></td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                            </tr>

                                            <!-- CSK vs Others -->
                                            <tr>
                                                <td class="cell">5</td>
                                                <td class="cell"><span class="truncate">CSK vs KKR</span></td>
                                                <td class="cell"><span>22 April, 2020</span></td>
                                                <td class="cell"><span>Pheroz Shah kotla, Delhi</span></td>
                                                <td class="cell"><span class="badge bg-success p-2"> CSK won by 35 runs</span></td>
                                                <td class="cell"><span> M S Dhoni </span></td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                            </tr>

                                            <tr>
                                                <td class="cell">6</td>
                                                <td class="cell"><span class="truncate">CSK vs RCB</span></td>
                                                <td class="cell"><span>24 April, 2020</span></td>
                                                <td class="cell"><span>Chinnaswamy Stadium, Banglore</span></td>
                                                <td class="cell"><span class="badge bg-success p-2"> CSK won by 2 runs</span></td>
                                                <td class="cell"><span> Deepak Chahar </span></td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                            </tr>


                                            <tr>
                                                <td class="cell">7</td>
                                                <td class="cell"><span class="truncate">DC vs RCB</span></td>
                                                <td class="cell"><span>26 April, 2020</span></td>
                                                <td class="cell"><span>Pheroz Shah kotla, Delhi</span></td>
                                                <td class="cell"><span class="badge bg-success p-2"> DC won by 35 runs.</span></td>
                                                <td class="cell"><span> Rishabh Pant </span></td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                            </tr>

                                            <tr>
                                                <td class="cell">8</td>
                                                <td class="cell"><span class="truncate">DC vs CSK</span></td>
                                                <td class="cell"><span>28 April, 2020</span></td>
                                                <td class="cell"><span>Pheroz Shah kotla, Delhi</span></td>
                                                <td class="cell"><span class="badge bg-success p-2"> DC won by 15 runs</span></td>
                                                <td class="cell"><span> Shikhar Dhawan </span></td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                            </tr>

                                            <tr>
                                                <td class="cell">9</td>
                                                <td class="cell"><span class="truncate">DC vs KKR</span></td>
                                                <td class="cell"><span>30 April, 2020</span></td>
                                                <td class="cell"><span>Eden Gardens, Kolkata</span></td>
                                                <td class="cell"><span class="badge bg-success p-2"> DC won by 3 wickets</span></td>
                                                <td class="cell"><span> Kagiso Rabada </span></td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                            </tr>

                                            <tr>
                                                <td class="cell">10</td>
                                                <td class="cell"><span class="truncate">RCB vs KKR</span></td>
                                                <td class="cell"><span>2 May, 2020</span></td>
                                                <td class="cell"><span>Eden Gardens, Kolkata</span></td>
                                                <td class="cell"><span class="badge bg-success p-2"> RCB won by 6 wickets</span></td>
                                                <td class="cell"><span> Virat Kohli </span></td>
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
            <!--//container-fluid-->
        </div>
        <!--//app-content-->

        @include('Backend.footer')

    </div>
    <!--//app-wrapper-->

    <!-- Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>


    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script>

</body>

</html>
