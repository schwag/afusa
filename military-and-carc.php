<?php include "php/header.php";?>

<body>

<?php include "php/nav.php";?>


    <section class="corrosionBackground">
                <div class="container">
                     <div class="row">
                        <div class="introSection">
                            <div class="col-md-12">
                               <h1 class="mainHeading">MILITARY & CARC</h1>
                               <div class="bubblePar">
                                <p>Test</p>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <section class="bodyBlue">
                <div class="container">
                     <div class="row">
                        <div>

                            <!--beginning of left body content-->
                            <div class="col-md-8">
                                <div class="needsLeft">
                                  <h1 class="needsbodyHeading">YOUR APPLICATION</h1>
                                  <p class="needsPar"></p>
                                </div>
                                <div class="needsLeft">
                                  <h1 class="needsbodyHeading">YOUR COATING OPTIONS</h1>
                                  <p class="needsPar"></p>
                                  <p class="needsPar"></p>
                                  <p class="needsPar"></p>
                                </div>
                                <div class="needsLeft">
                                  <h1 class="needsbodyHeading">MEETING YOUR SPECIFICATIONS</h1>
                                  <p class="needsPar"></p>
                                </div>
                                <div class="faqBackground">
                                  <?php include "php/corrosion-resistance-accordion.php";?>
                                </div>
                            </div>

                            <!--beginning of right sidebar content-->
                            <div class="col-md-4">
                              <h1 class="needssidebarHeading">PHOTO GALLERY</h1>
                                <div class="needsSidebar">
                                  <!-- Large modal -->
                                  <img src="img/corrosion_needs.png" class="img-responsive" data-toggle="modal" data-target=".bs-example-modal-lg">
                                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="photoGallery">
                                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                          <!-- Indicators -->
                                          <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                          </ol>

                                          <!-- Wrapper for slides -->
                                          <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                              <img src="img/mixer.jpg" alt="">
                                              <div class="carousel-caption">
                                                <!--<h1>38 MIXER</h1>-->
                                              </div>
                                            </div>
                                            <div class="item">
                                              <img src="img/inline_mixer.jpg" alt="">
                                              <div class="carousel-caption">
                                              </div>
                                            </div>
                                            <div class="item">
                                              <img src="img/pump_housing.jpg" alt="">
                                              <div class="carousel-caption">
                                              </div>
                                            </div>
                                            <div class="item">
                                              <img src="img/water_valve.jpg" alt="">
                                              <div class="carousel-caption">
                                              </div>
                                            </div>
                                          </div>

                                          <!-- Controls -->
                                          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                          </a>
                                          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div><!--END of photo gallery-->
                              <h1 class="needssidebarHeading">SHORT VIDEO</h1>
                              <div class="needsSidebar">
                                <iframe width="100%" height="218" src="//www.youtube.com/embed/t8HJA4OXuHg?list=UUauWBtjoD8Sbkm27cs1b1BA" frameborder="0" allowfullscreen></iframe>
                              </div> 
                              <h1 class="needssidebarHeading">CONTACT US</h1>
                              <div class="needsSidebar">
                                  <p class="needsPar"><b>Ask us about our </b>
                                   Call: <a href="tel:1-814-474-5200"><b>814.474.5200</b></a> or <a href="http://www.afusa.net/info_form.html" target="_blank"><b>CONTACT US</b></a></p>                                
                              </div>

                                    <div class="customerserviceButton">
                                        <p class="customerButton"><a href="http://localhost/afusa/your-needs.php" class="btn btn-block backtoNeeds"> BACK TO YOUR NEEDS <span class="serviceButton glyphicon glyphicon-chevron-right"></span></a></p>                                       
                                    </div>
                         
                            </div> 
                        </div>
                    </div>
                </div>
    </section>

<?php include "php/footer.php";?>

