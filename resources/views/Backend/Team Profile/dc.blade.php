<!DOCTYPE html>
<html lang="en">

<head>
    <title>IPL2020 || DC About</title>

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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<style>
    .card-box {
        padding: 20px;
        border-radius: 3px;
        margin-bottom: 30px;
        background-color: #fff;
    }

    .social-links li a {
        border-radius: 50%;
        color: rgba(121, 121, 121, .8);
        display: inline-block;
        height: 30px;
        line-height: 27px;
        border: 2px solid rgba(121, 121, 121, .5);
        text-align: center;
        width: 30px
    }

    .social-links li a:hover {
        color: #797979;
        border: 2px solid #797979
    }

    .thumb-lg {
        height: 88px;
        width: 88px;
    }

    .img-thumbnail {
        padding: .25rem;
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: .25rem;
        max-width: 100%;
        height: auto;
    }

    .text-pink {
        color: #ff679b !important;
    }

    .btn-rounded {
        border-radius: 2em;
    }

    .text-muted {
        color: #98a6ad !important;
    }

    h4 {
        line-height: 22px;
        font-size: 18px;
    }

</style>

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
                            <h4> Delhi Capitals</h4>
                            <div class="row gx-5 gy-3">
                                <div class="col-12 col-lg-9">
                                    <div>
                                        The Delhi Capitals are a franchise cricket team based out of Delhi in the Indian
                                        Premier League. Founded in 2008 as the Delhi Daredevils, the franchise is
                                        jointly owned by the GMR Group and the JSW Group. The team's home ground is Arun
                                        Jaitley Stadium, located in New Delhi.
                                    </div>

                                    <p class="pt-3">
                                        <strong>Arena/Stadium</strong> : <span class="text-info">Arun Jaitley Stadium, New Delhi.</span><br>
                                        <strong>Owner</strong> : <span class="text-info"> GMR Group, JSW Group</span><br>
                                        <strong>Coach</strong> : <span class="text-info">Ricky Ponting</span><br>
                                        <strong>Captain</strong> : <span class="text-info">Rishabh Pant</span><br>
                                        <strong>Founded</strong> : <span class="text-info">13</span><br>
                                    </p>
                                    {{-- <div class="container col-sm-5" >
                                        <img src="assets/images/ipl-homepage.png" class="logo-icon me-2" alt="" height="200px" width="200px" >
                                    </div> --}}
                                </div>
                                <!--//col-->
                                <div class="col-12 col-lg-3">
                                    <img src="assets/images/teame/DC.png" alt="" height="200px" width="200px">
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

                    <div class="content">
                        <div class="container">
                            {{-- <div class="row">
                                <div class="col-sm-4"><a href="#custom-modal" class="btn btn-custom waves-effect waves-light mb-4" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="mdi mdi-plus"></i> Add Member</a></div>
                                <!-- end col -->
                            </div> --}}
                            <!-- end row -->
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="text-center card-box">
                                        <div class="member-card pt-2 pb-2">
                                            <div class="thumb-lg member-thumb mx-auto"><img
                                                    src="assets/images/teame/dc/Ajinkya.webp"
                                                    class="rounded-circle img-thumbnail" alt="profile-image" style="height: 90px;"></div>
                                            <div class="___class_+?20___ pt-2">
                                                <h4>Ajinkya Rahane</h4>
                                                <p class="text-muted"> <span>Batsman • India</span></p>
                                            </div>
                                            <ul class="social-links list-inline">
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Facebook"><i
                                                            class="fab fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                                </li>
                                            </ul>

                                            <a href="/player-profile">
                                                <button type="button"
                                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">
                                                      View Profile
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->


                                <div class="col-lg-4">
                                    <div class="text-center card-box">
                                        <div class="member-card pt-2 pb-2">
                                            <div class="thumb-lg member-thumb mx-auto"><img
                                                    src="assets/images/teame/dc/Ishant.webp"
                                                    class="rounded-circle img-thumbnail" alt="profile-image" style="height: 90px;"></div>
                                            <div class="___class_+?50___ pt-2">
                                                <h4>Ishant Sharma</h4>
                                                <p class="text-muted"><span>Bowler • India</span></p>
                                            </div>
                                            <ul class="social-links list-inline">
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Facebook"><i
                                                            class="fab fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                                </li>
                                            </ul>
                                            <a href="/player-profile">
                                                <button type="button"
                                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">
                                                      View Profile
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->


                                <div class="col-lg-4">
                                    <div class="text-center card-box">
                                        <div class="member-card pt-2 pb-2">
                                            <div class="thumb-lg member-thumb mx-auto"><img
                                                    src="assets/images/teame/dc/Kagiso.webp"
                                                    class="rounded-circle img-thumbnail" alt="profile-image" style="height: 90px;"></div>
                                            <div class="___class_+?80___ pt-2">
                                                <h4>
                                                    Kagiso Rabada
                                                </h4>
                                                <p class="text-muted"><span>Bowler • South Africa</span></p>
                                            </div>
                                            <ul class="social-links list-inline">
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Facebook"><i
                                                            class="fab fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                                </li>
                                            </ul>
                                            <a href="/player-profile">
                                                <button type="button"
                                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">
                                                      View Profile
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="text-center card-box">
                                        <div class="member-card pt-2 pb-2">
                                            <div class="thumb-lg member-thumb mx-auto"><img
                                                    src="assets/images/teame/dc/Prithvi.webp"
                                                    class="rounded-circle img-thumbnail" alt="profile-image" style="height: 90px;"></div>
                                            <div class="___class_+?111___ pt-2">
                                                <h4>
                                                    Prithvi Shaw
                                                </h4>
                                                <p class="text-muted"><span>Batsman • India</span></p>
                                            </div>
                                            <ul class="social-links list-inline">
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Facebook"><i
                                                            class="fab fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Twitter"><i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                                </li>
                                            </ul>
                                            <a href="/player-profile">
                                                <button type="button"
                                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">
                                                      View Profile
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-4">
                                    <div class="text-center card-box">
                                        <div class="member-card pt-2 pb-2">
                                            <div class="thumb-lg member-thumb mx-auto"><img
                                                    src="assets/images/teame/dc/Rishabh.webp"
                                                    class="rounded-circle img-thumbnail" alt="profile-image" style="height: 90px;"></div>
                                            <div class="___class_+?141__ pt-2">
                                                <h4>Rishabh Pant</h4>
                                                <p class="text-muted"><span>WK-Batsman • India</span></p>
                                            </div>
                                            <ul class="social-links list-inline">
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Facebook"><i
                                                            class="fab fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Twitter"><i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                                </li>
                                            </ul>
                                            <a href="/player-profile">
                                                <button type="button"
                                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">
                                                      View Profile
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-4">
                                    <div class="text-center card-box">
                                        <div class="member-card pt-2 pb-2">
                                            <div class="thumb-lg member-thumb mx-auto"><img
                                                    src="assets/images/teame/dc/Sam.webp"
                                                    class="rounded-circle img-thumbnail" alt="profile-image" style="height: 90px;"></div>
                                            <div class="___class_+?171___ pt-2">
                                                <h4>Sam Billings</h4>
                                                <p class="text-muted"><span>WK-Batsman • England</span></p>
                                            </div>
                                            <ul class="social-links list-inline">
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Facebook"><i
                                                            class="fab fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Twitter"><i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                                </li>
                                            </ul>
                                            <a href="/player-profile">
                                                <button type="button"
                                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">
                                                      View Profile
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="text-center card-box">
                                        <div class="member-card pt-2 pb-2">
                                            <div class="thumb-lg member-thumb mx-auto"><img
                                                    src="assets/images/teame/dc/Shikhar.webp"
                                                    class="rounded-circle img-thumbnail" alt="profile-image" style="height: 90px;"></div>
                                            <div class="___class_+?202___ pt-2">
                                                <h4>Shikhar Dhawan</h4>
                                                <p class="text-muted"><span>Batsman • India</span>
                                                </p>
                                            </div>
                                            <ul class="social-links list-inline">
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Facebook"><i
                                                            class="fab fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Twitter"><i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                                </li>
                                            </ul>
                                            <a href="/player-profile">
                                                <button type="button"
                                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">
                                                      View Profile
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-4">
                                    <div class="text-center card-box">
                                        <div class="member-card pt-2 pb-2">
                                            <div class="thumb-lg member-thumb mx-auto"><img
                                                    src="assets/images/teame/dc/Shimron.webp"
                                                    class="rounded-circle img-thumbnail" alt="profile-image" style="height: 90px;"></div>
                                            <div class="___class_+?232___ pt-2">
                                                <h4>Shimron Hetmyer</h4>
                                                <p class="text-muted"><span>Batsman • West Indies</span></p>
                                            </div>
                                            <ul class="social-links list-inline">
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Facebook"><i
                                                            class="fab fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Twitter"><i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                                </li>
                                            </ul>
                                            <a href="/player-profile">
                                                <button type="button"
                                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">
                                                      View Profile
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-4">
                                    <div class="text-center card-box">
                                        <div class="member-card pt-2 pb-2">
                                            <div class="thumb-lg member-thumb mx-auto"><img
                                                    src="assets/images/teame/dc/Shreyas.webp"
                                                    class="rounded-circle img-thumbnail" alt="profile-image" style="height: 90px;"></div>
                                            <div class="___class_+?262___ pt-2">
                                                <h4>Shreyas Iyer</h4>
                                                <p class="text-muted"><span>Batsman • India</span></p>
                                            </div>
                                            <ul class="social-links list-inline">
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Facebook"><i
                                                            class="fab fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Twitter"><i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                                </li>
                                            </ul>
                                            <a href="/player-profile">
                                                <button type="button"
                                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">
                                                      View Profile
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-4">
                                    <div class="text-center card-box">
                                        <div class="member-card pt-2 pb-2">
                                            <div class="thumb-lg member-thumb mx-auto"><img
                                                    src="assets/images/teame/dc/Steven.webp"
                                                    class="rounded-circle img-thumbnail" alt="profile-image" style="height: 90px;"></div>
                                            <div class="___class_+?292___ pt-2">
                                                <h4>Steven Smith</h4>
                                                <p class="text-muted"><span>Batsman • Australia</span></p>
                                            </div>
                                            <ul class="social-links list-inline">
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Facebook"><i
                                                            class="fab fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Twitter"><i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                                </li>
                                            </ul>
                                            <a href="/player-profile">
                                                <button type="button"
                                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">
                                                      View Profile
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-4">
                                    <div class="text-center card-box">
                                        <div class="member-card pt-2 pb-2">
                                            <div class="thumb-lg member-thumb mx-auto"><img
                                                    src="assets/images/teame/dc/Tom.webp"
                                                    class="rounded-circle img-thumbnail" alt="profile-image" style="height: 90px;"></div>
                                            <div class="___class_+?322___ pt-2">
                                                <h4>Tom Curran</h4>
                                                <p class="text-muted"><span>Bowling Allrounder • England</span></p>
                                            </div>
                                            <ul class="social-links list-inline">
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Facebook"><i
                                                            class="fab fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Twitter"><i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                                </li>
                                            </ul>
                                            <a href="/player-profile">
                                                <button type="button"
                                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">
                                                      View Profile
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-4">
                                    <div class="text-center card-box">
                                        <div class="member-card pt-2 pb-2">
                                            <div class="thumb-lg member-thumb mx-auto"><img
                                                    src="assets/images/teame/dc/Umesh.webp"
                                                    class="rounded-circle img-thumbnail" alt="profile-image" style="height: 90px;"></div>
                                            <div class="___class_+?352___ pt-2">
                                                <h4>
                                                    Umesh Yadav
                                                </h4>
                                                <p class="text-muted"><span>Bowler • India</span></p>
                                            </div>
                                            <ul class="social-links list-inline">
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Facebook"><i
                                                            class="fab fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Twitter"><i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top"
                                                        data-toggle="tooltip" class="tooltips" href=""
                                                        data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                                </li>
                                            </ul>
                                            <a href="/player-profile">
                                                <button type="button"
                                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">
                                                      View Profile
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            {{-- <div class="row">
                                <div class="col-12">
                                    <div class="text-right">
                                        <ul class="pagination pagination-split mt-0 float-right">
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span> <span class="sr-only">Previous</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span> <span class="sr-only">Next</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end row --> --}}
                        </div>
                        <!-- container -->
                    </div>
                </div>
                <!--//app-card-->
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
