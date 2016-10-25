@extends('layouts.template')

@section('title')
  Kunzisoft
@endsection

@section('content')
      <div id="tophome" class="splash">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <img class="img-responsive center-block" src="./img/logo.png" alt="presentation">
              <h1>Collaborate to build your powerful software</h1>
              <p class="lead">We believe in quality and community for a better user experience.</p>
            </div>
            <div class="col-lg-8 splash-form">
              <h2 class="email-title">Stay informed !</h2>
              <script type="text/javascript">
                var pleaseEnter = "Please enter your email";
                var thanksForSubscribing = '<div class="subscribed">Thanks for subscribing.</div>';
                var waitImage = './img/ajax-loader.gif'
              </script>
              <div id="phplistsubscriberesult"></div>
              <form action="https://kunzisoft.hosted.phplist.com/lists/?p=subscribe&amp;id=1" method="post" id="phplistsubscribeform">
                <input type="text" name="email" value="" id="emailaddress" />
                <button class="btn btn-default" type="submit" id="phplistsubscribe">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="description-content">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
              <h3><i class="fa fa-rocket"></i> Launch your project</h3>
              <p>No money or no resource? Launch your project with a <strong>simple idea</strong>. You describe the concept and developpers are working to make it real.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
              <h3><i class="fa fa-credit-card"></i> Donate for <i class="fa fa-heart"></i></h3>
              <p>Submit your idea and <strong>pay what you want</strong>. It's up to you to make donations to people working on your project or one that you love.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
              <h3><i class="fa fa-users"></i> Everyone collaborates</h3>
              <p>We create <strong>functional, reusable, beautiful and ergonomic softwares</strong>. Translation, documentation, marketing, all trades can add their competence to the building.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
              <h3><i class="fa fa-graduation-cap"></i> Learn and teach</h3>
               <p>Want to teach, disseminate knowledge and experience? You're a developper, graphic artist, project manager... <strong>Upgrade your skills</strong> and learn best practices with professionals.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
              <h3><i class="fa fa-cube"></i> Manage with the best</h3>
              <p>Another new tool for build your application? No. Community knows what are the best solution for your problem. <strong>We are not reinventing the wheel</strong>, we create with existing free and professionnal tools for the best quality.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
              <h3><i class="fa fa-github"></i> Open Source</h3>
              <p>Better to create an open source project, anyone can contribute, <strong>resolve bugs, add features and increase security.</strong> And of course, you can earn money and sell your project!</p>
            </div>
          </div>
        </div>
      </div>

      <div id="ideas" class="section section-ideas">
        <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h1><i class="fa fa-comment"></i>Submit ideas and features</h1>
                <p class="lead">The idea is here, you want to create your application but you do not have the knowledge or resources required. Ask the community to create your own project : </p>
                <a class="btn btn-info" target="_blank" href="http://kunzisoft.blogspot.fr/2016/10/centralisation-des-nouveaux-projets.html" title="Ask community"><i class="fa fa-flask"></i> Submit features</a>
              </div>
            </div>
        </div>
      </div>

      <div id="contribute" class="section section-contribution">
        <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h1><i class="fa fa-wrench"></i>Offer your services</h1>
                <p class="lead">Product software is an art, requires a high level of engineering skills and artistic imagination.<br> You have many skills, want to upgrade your knowledge or resolve a little bug : </p>
                <a class="btn btn-default" target="_blank" href="https://github.com/Kunzisoft" title="Ask community"><i class="fa fa-gear"></i> Contribute</a>
              </div>
            </div>
        </div>
      </div>

      <div id="donate" class="section section-donation">
        <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h1><i class="fa fa-paypal"></i>Donate for love</h1>
                <p class="lead">Want to support your favorite software project, make a donation and become a kunzite : </p>
                <p><i class="fa fa-lock"></i>Don't worry, It uses paypal and is totally secure</p>
                <button class="btn btn-default" title="Donate" disabled><i class="fa fa-heart"></i> Donate (Coming soon)</button>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 col-sm-6 section-title">
                <h3><strong>Kunzisoft</strong> project need donators</h3>
              </div>
              <div class="col-lg-6 col-sm-6 section-title">
                <h4>Goal : <strong>1000 €</strong></h4>
              </div>
              <div class="col-sm-12 col-lg-12">
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-success" style="width: 30%">
                    30%
                  </div>
                </div>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                  ">
                  <button class="btn btn-primary" type="submit" value="Donate" name="submit" title="PayPal - The safer, easier way to pay online!"><i class="fa fa-heart"></i> Donate</button>
                </form>
              </div>
            </div>

          </div>
        </div>

        <div id="love" class="section section-love">
          <div class="container">
              <h2>We also love</h2>

              <div id="donateCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#donateCarousel" data-slide-to="0" class="active"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <div class="row">

                      <div class="col-lg-4 col-sm-4">
                        <div class="preview">
                          <div class="image">
                            <a target="_blank" href="https://www.mozilla.org/"><img class="img-responsive .img-thumbnail" src="./img/firefox_preview.jpg" alt="firefox"></a>
                          </div>
                          <div class="options">
                            <h3>Mozilla</h3>
                            <p>Firefow web browser and Thunderbird email application</p>
                            <div>
                              <a class="btn btn-default" target="_blank" href="https://www.mozilla.org/contribute/"><i class="fa fa-gear"></i> Contribute</a>
                              <a class="btn btn-primary" target="_blank" href="https://www.mozilla.org/"><i class="fa fa-heart"></i> Donate</a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-sm-4">
                        <div class="preview">
                          <div class="image">
                            <a target="_blank" href="https://libreoffice.org/"><img class="img-responsive .img-thumbnail" src="./img/libreoffice_preview.jpg" alt="libreoffice"></a>
                          </div>
                          <div class="options">
                            <h3>Libre Office</h3>
                            <p>Office suite</p>
                            <div>
                              <a class="btn btn-default" target="_blank" href="https://libreoffice.org/community/get-involved/"><i class="fa fa-gear"></i> Contribute</a>
                              <a class="btn btn-primary" target="_blank" href="https://libreoffice.org/donate/"><i class="fa fa-heart"></i> Donate</a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-sm-4">
                        <div class="preview">
                          <div class="image">
                            <a target="_blank" class="img-responsive" href="https://fr.wikipedia.org/"><img class="img-responsive .img-thumbnail" src="./img/wikipedia_preview.jpg" alt="wikimedia"></a>
                          </div>
                          <div class="options">
                            <h3>Wikipedia</h3>
                            <p>Free Encyclopedia</p>
                            <div>
                              <a class="btn btn-default" target="_blank" href="https://fr.wikipedia.org/wiki/Contributions/"><i class="fa fa-gear"></i> Contribute</a>
                              <a class="btn btn-primary" target="_blank" href="https://donate.wikimedia.org"><i class="fa fa-heart"></i> Donate</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#donateCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#donateCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

        </div>
      </div>
@endsection
