$(function() {

    //Wait for Pinegrow to wake-up
    $("body").one("pinegrow-ready", function(e, pinegrow) {

        //Create new Pinegrow framework object
        var f = new PgFramework("UserLib", "UserLib");

        //This will prevent activating multiple versions of this framework being loaded
        f.type = "UserLib";
        f.allow_single_type = true;
        f.user_lib = true

        var comp_comp2 = new PgComponentType('comp2', 'Body / home');
        comp_comp2.code = '<div id="home" data-pg-collapsed>  <!-- Start cSlider -->  <div id="da-slider" class="da-slider">    <div class="triangle"></div>    <!-- mask elemet use for masking background image -->    <div class="mask"></div>    <!-- All slides centred in container element -->    <div class="container">      <!-- Start first slide -->      <div class="da-slide">        <h2 class="fittext2">Welcome to pluton theme</h2>        <h4>Clean & responsive</h4>        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>        <a href="#" class="da-link button">Read more</a>        <div class="da-img">          <img src="images/Slider01.png" alt="image01" width="320">        </div>      </div>      <!-- End first slide -->      <!-- Start second slide -->      <div class="da-slide">        <h2>Easy management</h2>        <h4>Easy to use</h4>        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>        <a href="#" class="da-link button">Read more</a>        <div class="da-img">          <img src="images/Slider02.png" width="320" alt="image02">        </div>      </div>      <!-- End second slide -->      <!-- Start third slide -->      <div class="da-slide">        <h2>Revolution</h2>        <h4>Customizable</h4>        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>        <a href="#" class="da-link button">Read more</a>        <div class="da-img">          <img src="images/Slider03.png" width="320" alt="image03">        </div>      </div>      <!-- Start third slide -->      <!-- Start cSlide navigation arrows -->      <div class="da-arrows">        <span class="da-arrows-prev"></span>        <span class="da-arrows-next"></span>      </div>      <!-- End cSlide navigation arrows -->    </div>  </div></div>';
        comp_comp2.parent_selector = null;
        f.addComponentType(comp_comp2);
        
        var comp_comp3 = new PgComponentType('comp3', 'Body / services');
        comp_comp3.code = '<div class="primary-section section" id="service" data-pg-collapsed>  <div class="container">    <!-- Start title section -->    <div class="title">      <h1>What We Do?</h1>      <!-- Section\'s title goes here -->      <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>      <!--Simple description for section goes here. -->    </div>    <div class="row-fluid">      <div class="span4">        <div class="centered service">          <div class="circle-border zoom-in">            <img class="img-circle" src="images/Service1.png" alt="service 1">          </div>          <h3>Modern Design</h3>          <p>We Create Modern And Clean Theme For Your Business Company.</p>        </div>      </div>      <div class="span4">        <div class="centered service">          <div class="circle-border zoom-in">            <img class="img-circle" src="images/Service2.png" alt="service 2"/>          </div>          <h3>Powerfull Theme</h3>          <p>We Create Modern And Powerful Theme With Lots Animation And Features</p>        </div>      </div>      <div class="span4">        <div class="centered service">          <div class="circle-border zoom-in">            <img class="img-circle" src="images/Service3.png" alt="service 3">          </div>          <h3>Clean Code</h3>          <p>We Create Modern And Powerful Html5 And CSS3 Code Easy For Read And Customize.</p>        </div>      </div>    </div>  </div></div>';
        comp_comp3.parent_selector = null;
        f.addComponentType(comp_comp3);
        
        var comp_comp4 = new PgComponentType('comp4', 'Body / works');
        comp_comp4.code = '<div class="section primary-section" id="about" data-pg-collapsed>  <div class="triangle"></div>  <div class="container">    <div class="title">      <h1>Who We Are?</h1>      <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>    </div>    <div class="row-fluid team">      <div class="span4" id="first-person">        <div class="thumbnail">          <img src="images/Team1.png" alt="team 1">          <h3>John Doe</h3>          <ul class="social">            <li>              <a href=""> <span class="icon-facebook-circled"></span> </a>            </li>            <li>              <a href=""> <span class="icon-twitter-circled"></span> </a>            </li>            <li>              <a href=""> <span class="icon-linkedin-circled"></span> </a>            </li>          </ul>          <div class="mask">            <h2>Copywriter</h2>            <p>When you stop expecting people to be perfect, you can like them for who they are.</p>          </div>        </div>      </div>      <div class="span4" id="second-person">        <div class="thumbnail">          <img src="images/Team2.png" alt="team 1">          <h3>John Doe</h3>          <ul class="social">            <li>              <a href=""> <span class="icon-facebook-circled"></span> </a>            </li>            <li>              <a href=""> <span class="icon-twitter-circled"></span> </a>            </li>            <li>              <a href=""> <span class="icon-linkedin-circled"></span> </a>            </li>          </ul>          <div class="mask">            <h2>Designer</h2>            <p>When you stop expecting people to be perfect, you can like them for who they are.</p>          </div>        </div>      </div>      <div class="span4" id="third-person">        <div class="thumbnail">          <img src="images/Team3.png" alt="team 1">          <h3>John Doe</h3>          <ul class="social">            <li>              <a href=""> <span class="icon-facebook-circled"></span> </a>            </li>            <li>              <a href=""> <span class="icon-twitter-circled"></span> </a>            </li>            <li>              <a href=""> <span class="icon-linkedin-circled"></span> </a>            </li>          </ul>          <div class="mask">            <h2>Photographer</h2>            <p>When you stop expecting people to be perfect, you can like them for who they are.</p>          </div>        </div>      </div>    </div>    <div class="about-text centered">      <h3>About Us</h3>      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>    </div>    <h3>Skills</h3>    <div class="row-fluid">      <div class="span6">        <ul class="skills">          <li>            <span class="bar" data-width="80%"></span>            <h3>Graphic Design</h3>          </li>          <li>            <span class="bar" data-width="95%"></span>            <h3>Html & Css</h3>          </li>          <li>            <span class="bar" data-width="68%"></span>            <h3>jQuery</h3>          </li>          <li>            <span class="bar" data-width="70%"></span>            <h3>Wordpress</h3>          </li>        </ul>      </div>      <div class="span6">        <div class="highlighted-box center">          <h1>We\'re Hiring</h1>          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, ullamcorper suscipit lobortis nisl ut aliquip consequat. I learned that we can do anything, but we can\'t do everything...</p>          <button class="button button-sp">Join Us</button>        </div>      </div>    </div>  </div></div>';
        comp_comp4.parent_selector = null;
        f.addComponentType(comp_comp4);
        
        var comp_comp5 = new PgComponentType('comp5', 'Body / team');
        comp_comp5.code = '<div class="section secondary-section" data-pg-collapsed>  <div class="triangle"></div>  <div class="container centered">    <p class="large-text">Elegance is not the abundance of simplicity. It is the absence of complexity.</p>    <a href="#" class="button">Purshase now</a>  </div></div>';
        comp_comp5.parent_selector = null;
        f.addComponentType(comp_comp5);
        
        var comp_comp6 = new PgComponentType('comp6', 'Body / client');
        comp_comp6.code = '<div id="clients" data-pg-collapsed>  <div class="section primary-section">    <div class="triangle"></div>    <div class="container">      <div class="title">        <h1>What Client Say?</h1>        <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>      </div>      <div class="row">        <div class="span4">          <div class="testimonial">            <p>"I\'ve worked too hard and too long to let anything stand in the way of my goals. I will not let my teammates down and I will not let myself down."</p>            <div class="whopic">              <div class="arrow"></div>              <img src="images/Client1.png" class="centered" alt="client 1">              <strong>John Doe <small>Client</small> </strong>            </div>          </div>        </div>        <div class="span4">          <div class="testimonial">            <p>"In motivating people, you\'ve got to engage their minds and their hearts. I motivate people, I hope, by example - and perhaps by excitement, by having productive ideas to make others feel involved."</p>            <div class="whopic">              <div class="arrow"></div>              <img src="images/Client2.png" class="centered" alt="client 2">              <strong>John Doe <small>Client</small> </strong>            </div>          </div>        </div>        <div class="span4">          <div class="testimonial">            <p>"Determine never to be idle. No person will have occasion to complain of the want of time who never loses any. It is wonderful how much may be done if we are always doing."</p>            <div class="whopic">              <div class="arrow"></div>              <img src="images/Client3.png" class="centered" alt="client 3">              <strong>John Doe <small>Client</small> </strong>            </div>          </div>        </div>      </div>      <p class="testimonial-text">                        "Perfection is Achieved Not When There Is Nothing More to Add, But When There Is Nothing Left to Take Away" </p>    </div>  </div></div>';
        comp_comp6.parent_selector = null;
        f.addComponentType(comp_comp6);
        
        var comp_comp7 = new PgComponentType('comp7', 'Body / contact');
        comp_comp7.code = '<div class="footer">  <p>&copy; 2013 Theme by <a href="http://www.graphberry.com">GraphBerry</a>, <a href="http://goo.gl/NM84K2">Documentation</a></p></div>';
        comp_comp7.parent_selector = null;
        f.addComponentType(comp_comp7);
        
        var comp_comp8 = new PgComponentType('comp8', 'Body / chamda');
        comp_comp8.code = '<div class="footer">  <p>&copy; 2013 Theme by <a href="http://www.graphberry.com">GraphBerry</a>, <a href="http://goo.gl/NM84K2">Documentation</a></p></div>';
        comp_comp8.parent_selector = null;
        f.addComponentType(comp_comp8);
        
        var comp_comp9 = new PgComponentType('comp9', 'Footer');
        comp_comp9.code = '<div class="footer">  <p>&copy; 2013 Theme by <a href="http://www.graphberry.com">GraphBerry</a>, <a href="http://goo.gl/NM84K2">Documentation</a></p></div>';
        comp_comp9.parent_selector = null;
        f.addComponentType(comp_comp9);
        
        var comp_comp10 = new PgComponentType('comp10', 'Header / navbar');
        comp_comp10.code = '<div class="navbar" data-pg-collapsed>  <div class="navbar-inner" data-pg-collapsed>    <div class="container">      <a href="#" class="brand">        <img src="images/logo.png" width="120" height="40" alt="Logo"/>        <!-- This is website logo -->      </a>      <!-- Navigation button, visible on small resolution -->      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">        <i class="icon-menu"></i>      </button>      <!-- Main navigation -->      <div class="nav-collapse collapse pull-right">        <ul class="nav" id="top-navigation">          <li class="active">            <a href="#home">Home</a>          </li>          <li>            <a href="#service">Services</a>          </li>          <li>            <a href="#portfolio">Portfolio</a>          </li>          <li>            <a href="#about">About</a>          </li>          <li>            <a href="#clients">Clients</a>          </li>          <li>            <a href="#price">Price</a>          </li>          <li>            <a href="#contact">Contact</a>          </li>        </ul>      </div>      <!-- End main navigation -->    </div>  </div></div>';
        comp_comp10.parent_selector = null;
        f.addComponentType(comp_comp10);
        
        //Tell Pinegrow about the framework
        pinegrow.addFramework(f);
            
        var section = new PgFrameworkLibSection("UserLib_lib", "Components");
        //Pass components in array
        section.setComponentTypes([comp_comp2, comp_comp3, comp_comp4, comp_comp5, comp_comp6, comp_comp7, comp_comp8, comp_comp9, comp_comp10]);

        f.addLibSection(section);
   });
});