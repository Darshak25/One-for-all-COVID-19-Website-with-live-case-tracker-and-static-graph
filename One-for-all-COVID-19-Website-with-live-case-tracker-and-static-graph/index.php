<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Corona solution</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fixed.css">
</head>

<body data-spy="scroll" data-target="#navbarResponsive">

    <!--Start Home section-->
    <div id="home">
        <!--Navigation-->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="index.php">
                <p>C<span class="image_rotate"><img src="img/virus1.png">VID-19</span></p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#About">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Corona Track World Graph.html">Corona Map</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://delhifightscorona.in/donateplasma/">Donate Plasma</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#Post">Post</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#Contact us">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>

                </ul>
            </div>
        </nav>

        <!--Start Image slider-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!---Slide 1-->
                <div class="carousel-item active" style="background-image:url(img/corona1.jpg);"></div>
                <!---Slide 2-->
                <div class="carousel-item" style="background-image:url(img/corona2.jpg);"></div>
                <!---Slide 3-->
                <div class="carousel-item" style="background-image:url(img/corona3.jpg);"></div>
                <!--slide 4-->
                <div class="carousel-item" style="background-image:url(img/corona4.jpg);"></div>
                <!--slide 5-->
                <div class="carousel-item" style="background-image:url(img/corona5.jpg);"></div>
            </div>
            <!--End Carousel Inner-->

            <!--Prev & Next Buttons-->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
        <!--End Image slider-->
    </div>
    <!--End Home section-->

    <!-- start of corona tracker-->

    <section class="corona_update container-fluid">
        <div class="container-fluid bg-light p-5 text-center my-3">
            <h1 class=""><u>Covid-19 Stats </u></h1>
            <h5 class="text-muted">A Live Tracker to keep the track of all the COVID-19 cases around the India.</h5>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-capitalize">updated time</th>
                        <th class="text-capitalize">State</th>
                        <th class="text-capitalize">Confirmed</th>
                        <th class="text-capitalize">Active</th>
                        <th class="text-capitalize">Recovered</th>
                        <th class="text-capitalize">Deaths</th>
                    </tr>
                </thead>
                <?php

                $data = file_get_contents('https://api.covid19india.org/data.json');
                $coronalive = json_decode($data, true);

                //echo "<pre>";

                //print_r($coronalive);

                //echo "/pre";

                $statescount = count($coronalive['statewise']);


                $i = 1;
                while ($i < $statescount) {
                ?>

                <tr>
                    <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['active'] ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>
                </tr>

                <!--echo $coronalive['statewise'][$i]['lastupdatedtime'] . "<br>";
                    echo $coronalive['statewise'][$i]['state'] . "<br>";
                    echo $coronalive['statewise'][$i]['confirmed'] . "<br>";
                    echo $coronalive['statewise'][$i]['active'] . "<br>";
                    echo $coronalive['statewise'][$i]['recovered'] . "<br>";
                    echo $coronalive['statewise'][$i]['deaths'] . "<br>";-->

                <?php
                    $i++;
                }




                ?>
            </table>
        </div>
    </section>

    <!-- End of corona tracker-->

    <!--Video Starts-->

    <div class="row no-gutters mt-5 mb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 no-gutters">
                    <div class="centre_WHO">
                        <p>
                            <h2 class="text-center pt-5">THE WORLD</h2>
                        </p><br>
                        <p class="display-2 text-center">STATS</p>
                    </div>
                </div>
                <div class="col-md-6 no-gutters">
                    <div class="right_news">
                        <iframe width="628" height="360"
                            src="https://www.youtube-nocookie.com/embed/YwhL98NiCcc?controls=0" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--End video-->


    <!--- Start About COVID-19 -->

    <div id="About" class="container-fluid sub_section pt-2 pb-2">
        <div class="section_hearder">
            <h1 class="text-center"><u>About COVID-19 :</u></h1>
        </div>

        <div class="row pt-5">
            <div class="col-log col-md-6 col-12">
                <img src="img/covid19.jpg" class="img-fluid" alt="">
            </div>

            <div class="col-log-6 col-md-6 col-12">
                <h2>What is covid-19(Corona-Virus) ?</h2>
                <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
                    Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness
                    and recover without requiring special treatment. Older people, and those with underlying medical
                    problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more
                    likely to develop serious illness.</p>
                <p>The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the
                    disease it causes and how it spreads. Protect yourself and others from infection by washing your
                    hands or using an alcohol based rub frequently and not touching your face.
                    The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an
                    infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette
                    (for example, by coughing into a flexed elbow).</p>
            </div>
        </div>
    </div>

    <!--end about section-->


    <!--- Start of corona symptoms -->

    <div class="container-fluid sub_srction pt-2 pb-2">
        <div class="section_hearder">
            <h1 class="text-center"><u>Coronavirus Symptoms :</u></h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-log-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="img/symptoms/cold.png" class="img-fluid" width="120" height="120" alt="">
                        <figcaption>Cold</figcaption>
                    </figure>
                </div>

                <div class="col-log-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="img/symptoms/breathing.png" class="img-fluid" width="120" height="120" alt="">
                        <figcaption>Difficulty Breathing</figcaption>
                    </figure>
                </div>

                <div class="col-log-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="img/symptoms/cough.png" class="img-fluid" width="120" height="120" alt="">
                        <figcaption>Cough</figcaption>
                    </figure>
                </div>

                <div class="col-log-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="img/symptoms/fever.png" class="img-fluid" width="120" height="120" alt="">
                        <figcaption>Fever</figcaption>
                    </figure>
                </div>

                <div class="col-log-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="img/symptoms/nossy.png" class="img-fluid" width="120" height="120" alt="">
                        <figcaption>Runny nose</figcaption>
                    </figure>
                </div>

                <div class="col-log-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="img/symptoms/tired.png" class="img-fluid" width="120" height="120" alt="">
                        <figcaption>Tiredness</figcaption>
                    </figure>
                </div>
            </div>
        </div>

    </div>

    <!--- End of corona symptoms -->


    <!--Start of the Prevention divisions-->

    <div class="container-fluid sub_section pt-5 pb-5">
        <div class="section_header text-center mb-5 mt-4">
            <h1><u>Prevention Againts Coronavirus</u></h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="raw">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="img/Prevention/handwash.png" class="img-fluid" width="90" height="90" alt="">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Wash your hands,regularly for 20 seconds.with soap and water or alcohol-based hand rub.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="raw">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="img/Prevention/face-mask.png" class="img-fluid" width="90" height="90" alt="">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Cover your nose and mouth with a disposable tissue or flexed elbow, when you cough or
                                sneeze.</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="raw">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="img/Prevention/quarantine.png" class="img-fluid" width="90" height="90"
                                    alt="">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Stay home and isolate yourself from others in the household if you feel unwell.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="raw">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="img/Prevention/news.png" class="img-fluid" width="90" height="90" alt="">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Stay informed by watching news and follow the recommended practices.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="raw">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="img/Prevention/social-distancing.png" class="img-fluid" width="90" height="90"
                                    alt="">
                            </figure>
                        </div>
                        <div class="col-lg8 col-md-8 col-12">
                            <p>Avoid close contact (minimum 3 feet) with people who are unwell.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="raw">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="img/Prevention/fever.png" class="img-fluid" width="90" height="90" alt="">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>If you have fever, cough and difficulty in breathing seek medical care early.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="raw">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="img/Prevention/dont-touch.png" class="img-fluid" width="90" height="90"
                                    alt="">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Don't touch your eyes, mouth or nose.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="raw">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="img/Prevention/dont-smoke.png" class="img-fluid" width="90" height="90"
                                    alt="">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Refrain from smoking and other activities that weaken the lungs.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="raw">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="img/Prevention/exercise.png" class="img-fluid" width="90" height="90" alt="">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Do daily exercises and meditation to make your fitness healthy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--End of the Prevention divisions-->

    <!--Start of Guidelines -->
    <section id="latest-update" class="site-update">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2><u>Latest Updates</u></h2>
                </div>
            </div>
            <div class="row equal-height">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="update-box">
                        <p><strong>03.08.2020</strong>
                            <a href="https://www.mohfw.gov.in/pdf/Guidelinesonyogainstitutesandgymnasiums03082020.pdf"
                                target="_BLANK"> Guidelines on Preventive Measures to Contain Spread
                                of COVID-19 in Yoga Institutes & Gymnasiums
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="update-box">
                        <p><strong>02.08.2020</strong>
                            <a href="https://www.mohfw.gov.in/pdf/RevisedguidelinesforInternationalArrivals02082020.pdf"
                                target="_BLANK"> Revised guidelines for International Arrivals
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="update-box">
                        <p><strong>31.07.2020</strong>
                            <a href="https://youtu.be/rJENzEE4xBE" target="_BLANK"> A/V on " Mental
                                Health Matters..Let's Talk"

                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="update-box">
                        <p><strong>28.07.2020</strong>
                            <a href="https://www.mohfw.gov.in/pdf/COVID19PandemicandTobaccoUseinIndia.pdf"
                                target="_BLANK"> COVID-19 Pandemic and Tobacco Use in India
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="update-box">
                        <p><strong>17.07.2020</strong>
                            <a href="https://www.mohfw.gov.in/pdf/AdvisoryforRWAsonCOVID19.pdf" target="_BLANK">
                                Advisory for Gated Residential Complexes with
                                regards to COVID-19
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="update-box">
                        <p><strong>17.07.2020</strong>
                            <a href="https://www.mohfw.gov.in/pdf/CovidCareFacilityinGatedcomplexes.pdf"
                                target="_BLANK"> Guidelines for Gated Residential Complexes Desirous
                                of Setting Up Small Covid Care Facility by Resident Welfare
                                Associations / Residential Societies / Non-Governmental
                                Organizations (NGOs)
                            </a>
                        </p>
                    </div>
                </div>
            </div>
    </section>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!--end of guidelines-->



    <!--Heading of Geographical map for medical-->

    <div id="head" class="offset">
        <div class="jumbotron container-fluid mt-5">
            <h3 class="heading"><u>CHEAP MEDICAL STORES BY GOVERNMENT</u></h3>
        </div>
    </div>
    <!--End Heading of Geographical map for medical-->

    <!----Start of Geographical map for medical-->

    <div class="row no-gutters">
        <div class="col-md-6 no-gutters">
            <div class="leftside">
                <p>
                    <h1 class="text-center pt-5 mt-5">The Map</h1>
                </p><br>
                <p class="display-2 text-center">FOR NEED</p>
            </div>
        </div>
        <div class="col-md-6 no-gutters">
            <div class="rightside">
                <div id="map">
                    <section>
                        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1NjMdXE9x9UUqwzC88BFAKdaGngokNPiY"
                            width="670" height="500">
                        </iframe>

                    </section>

                </div>
            </div>
        </div>
    </div>

    <!--End of Geographical map for medical-->


    <!--Start Post section-->
    <div id="Post" class="offset">
        <div class="jumbotron container-fluid">
            <h3 class="heading">Post</h3>
            <div class="heading-underline"></div>

            <div class="row no-padding">
                <div class="col-sm-4">
                    <div class="Post">
                        <a href="img/Posts/1.png">
                            <img src="img/Posts/post1.png" target="_blank" alt="">
                        </a>
                        <div class="col-lg-8 col-md-8 col-12">

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="Post">
                        <a href="img/Posts/post2.png">
                            <img src="img/Posts/post2.png" target="_blank" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="Post">
                        <a href="img/Posts/post3.png">
                            <img src="img/Posts/post3.png" target="_blank" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="Post">
                        <a href="img/Posts/post4.png">
                            <img src="img/Posts/post4.png" target="_blank" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="Post">
                        <a href="img/Posts/post5.png">
                            <img src="img/Posts/post5.png" target="_blank" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="Post">
                        <a href="img/Posts/6.png">
                            <img src="img/Posts/post6.png" target="_blank" alt="">
                        </a>
                    </div>
                </div>

                <div class="narrow text-center">
                    <div class="col-12">
                        <p class="lead">To see more photos click button</p>
                        <a class="btn btn-outline-secondary" href="#">click here--</a>
                    </div>
                </div>

            </div>
            <!--- End Row -->

        </div>
        <!--- End Jumbotron -->
    </div>
    <!--End Post section-->

    <!--- Start of News alerts-->

    <div class="col-xs-6 no-gutters">
        <div class="right_news">





            <!-- End Of News alarts-->









            <!--Start jquery for corona data-->
            <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
            <script type="text/javascript">
            $.ajax({
                url: "https://api.covid19india.org/",
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    console.log(data);
                }
            })
            </script>

            <!--End jquery for corona data-->


            <!--Start Contact us section--
    <div class="container-fluid  pt-5 pb-5" id="Contact us">
        <div class="container-fluid sub_section_1 pt-5 pb-5">
            <div class="section_header text-center mb-5 mt-4 text-light">
                <h1>Contact Us</h1>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <form>
                            <div class="form-group text-light">
                                <label>Username</label>
                                <input type="text" class="form-control" placeholder="name" name="username" autocomplete="off" required>
                            </div>
                            <div class="form-group text-light">
                                <label>Email address</label>
                                <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
                            </div>
                            <div class="form-group text-light">
                                <label>Mobile Number</label>
                                <input type="number" class="form-control" placeholder="mobile" name="mobile number" autocomplete="off" required>
                            </div>
                            <div class="form-group text-light">
                                <label>Select symptoms</label><br>
                                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                    <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasymptoms[]" value="cold">
                                    <label class="custom-control-label" for="customcheckbox1">Cold</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                    <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasymptoms[]" value="fever">
                                    <label class="custom-control-label" for="customcheckbox2">Fever</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                    <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasymptoms[]" value="difficulty in breathing">
                                    <label class="custom-control-label" for="customcheckbox3">Difficulty in breathing</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                    <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasymptoms[]" value="Feeling weak">
                                    <label class="custom-control-label" for="customcheckbox4">Feeling weak</label>
                                </div>
                            </div>
                            <div class="form-group text-light">
                                <label>Example textarea</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    --End Contact us section-->


            <!--- Start footer contact-->

            <div id="Contact us" class="container-fluid pt-5 pb-5">
                <div class="container-fluid text-center sub_section pt-5 pb-5">
                    <h1><u>About us</u></h1>
                </div>

                <!-- Footer -->
                <footer class="page-footer font-small mdb-color pt-4 bg-dark text-light">

                    <!-- Footer Links -->
                    <div class="container text-center text-md-left">

                        <!-- Footer links -->
                        <div class="row text-center text-md-left mt-3 pb-3">



                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                                <p>
                                    <a href="#!">Your Account</a>
                                </p>
                                <p>
                                    <a href="#!">Coronavirus cases</a>
                                </p>
                                <p>
                                    <a href="#!">New update from Government</a>
                                </p>
                                <p>
                                    <a href="#!">Help</a>
                                </p>
                            </div>

                            <!-- Grid column -->
                            <hr class="w-100 clearfix d-md-none">

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                                <p>
                                    <i class="fas fa-home mr-3"></i> Vadodara, Gujarat, India</p>
                                <p>
                                    <i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                                <p>
                                    <i class="fas fa-phone mr-3"></i> + 91 8888888888</p>
                                <p>
                                    <i class="fas fa-print mr-3"></i> + 91 9999999999</p>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Footer links -->

                        <hr>

                        <!-- Grid row -->
                        <div class="row d-flex align-items-center">

                            <!-- Grid column -->
                            <div class="col-md-7 col-lg-8">

                                <!--Copyright-->
                                <p class="text-center text-md-left">© 2020 Copyright:
                                    <a href="index.php">
                                        <strong>Corona Solution.in</strong>
                                    </a>
                                </p>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-5 col-lg-4 ml-lg-0">


                                <!-- Social buttons -->
                                <div class="text-center text-md-right">

                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a class="btn-floating btn-sm rgba-white-slight mx-1"
                                                href="https://www.facebook.com/">
                                                <i class="fab fa-facebook-f"></i>

                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="btn-floating btn-sm rgba-white-slight mx-1"
                                                href="https://twitter.com/">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="btn-floating btn-sm rgba-white-slight mx-1"
                                                href="https://plus.google.com/">
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="btn-floating btn-sm rgba-white-slight mx-1"
                                                href="https://www.linkedin.com/home/?originalSubdomain=in">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>
                    <!-- Footer Links -->

                </footer>
                <!-- Footer -->


            </div>

            <!--- End footer contact-->

            <!--- Start footer top to scroll --->

            <div class="container scrolltop float-right pr-5">
                <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
            </div>

            <!-- top arrow script -->
            <script>
            //Get the button
            var mybutton = document.getElementById("myBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
            </script>
            <!-- top arrow script -->

            <script>
            (function() {
                var js, fs, d = document,
                    id = "tars-widget-script",
                    b = "https://tars-file-upload.s3.amazonaws.com/bulb/";
                if (!d.getElementById(id)) {
                    js = d.createElement("script");
                    js.id = id;
                    js.type = "text/javascript";
                    js.src = b + "js/widget.js";
                    fs = d.getElementsByTagName("script")[0];
                    fs.parentNode.insertBefore(js, fs)
                }
            })();
            window.tarsSettings = {
                "convid": "4kdV1y"
            };
            </script>

            <!---End footer top to scroll --->


            <!--- Script Source Files -->
            <link src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2">
            </link>
            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
            <script src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <!--- End of Script Source Files -->

</body>

</html>