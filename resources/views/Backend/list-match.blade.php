<!DOCTYPE html>
<html lang="en">

<head>
    <title>IPL2020 || Matches</title>

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
                        <h1 class="app-page-title mb-0">Points Table</h1>
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


                <div class="tab-content" id="orders-table-tab-content">
                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel"
                        aria-labelledby="orders-all-tab">
                        <div class="app-card app-card-orders-table shadow-sm mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Sr_no</th>
                                                <th class="cell">Teames</th>
                                                <th class="cell">Match</th>
                                                <th class="cell">Won</th>
                                                <th class="cell">Lost</th>
                                                <th class="cell">NR</th>
                                                <th class="cell">Pts</th>
                                                <th class="cell">NRR</th>
                                                <th class="cell">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cell"><span>[1.]</span></td>
                                                <td class="cell"><span class="truncate">Mumbai Indians</span></td>
                                                <td class="cell"><span>4</span></td>
                                                <td class="cell"><span>4</span></td>
                                                <td class="cell"><span>0</span></td>
                                                <td class="cell"><span>-</span></td>
                                                <td class="cell"><span>8</span></td>
                                                <td class="cell"><span>+1.23</span></td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary"
                                                        href="/match-summary">View</a></td>
                                            </tr>

                                            <tr>
                                                <td class="cell"><span>[2.]</span></td>
                                                <td class="cell"><span class="truncate">Delhi Capitals</span></td>
                                                <td class="cell"><span>4</span></td>
                                                <td class="cell"><span>3</span></td>
                                                <td class="cell"><span>1</span></td>
                                                <td class="cell"><span>-</span></td>
                                                <td class="cell"><span>6</span></td>
                                                <td class="cell"><span>-0.23</span></td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary"
                                                        href="/match-summary">View</a></td>
                                            </tr>

                                            <tr>
                                                <td class="cell"><span>[3.]</span></td>
                                                <td class="cell"><span class="truncate">Chennai Super Kings</span></td>
                                                <td class="cell"><span>4</span></td>
                                                <td class="cell"><span>2</span></td>
                                                <td class="cell"><span>2</span></td>
                                                <td class="cell"><span>-</span></td>
                                                <td class="cell"><span>4</span></td>
                                                <td class="cell"><span>+2.56</span></td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary"
                                                        href="/match-summary">View</a></td>
                                            </tr>

                                            <tr>
                                                <td class="cell"><span>[4.]</span></td>
                                                <td class="cell"><span class="truncate">Royal Challengers Bangalore</span></td>
                                                <td class="cell"><span>4</span></td>
                                                <td class="cell"><span>1</span></td>
                                                <td class="cell"><span>3</span></td>
                                                <td class="cell"><span>-</span></td>
                                                <td class="cell"><span>2</span></td>
                                                <td class="cell"><span>-2.34</span></td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary"
                                                        href="/match-summary">View</a></td>
                                            </tr>

                                            <tr>
                                                <td class="cell"><span>[5.]</span></td>
                                                <td class="cell"><span class="truncate">Kolkata Knight Riders</span></td>
                                                <td class="cell"><span>4</span></td>
                                                <td class="cell"><span>0</span></td>
                                                <td class="cell"><span>4</span></td>
                                                <td class="cell"><span>-</span></td>
                                                <td class="cell"><span>0</span></td>
                                                <td class="cell"><span>-2.56</span></td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary"
                                                        href="/match-summary">View</a></td>
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


                </div>
                <!--//tab-content-->



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
