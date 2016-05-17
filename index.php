<!DOCTYPE html>
<html lang="en">
<!-- NOTE: MOVE pdf directory back into root directory for production!!-->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Medicare Physician Payments Are changing. Learn how MACRA impacts hospitalists and how to be prepared.">
    <meta name="key-words" content="medicare, physician payments, macra, hospitalist, chip, reauthorization act, shm, society of hospital medicine">
    
    <meta name="author" content="">

    <title>Medicare Access and CHIP Reauthorization ACT (MACRA)  | Society of Hospital Medicine</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
    
     <!--My Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- google analytics tracker-->
    <!--<script>-->
    <!--      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){-->
    <!--      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),-->
    <!--      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)-->
    <!--      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');-->
        
    <!--      ga('create', 'UA-69168380-1', 'auto');-->
    <!--      ga('send', 'pageview');-->
    <!--</script>-->
    
    <!-- google analytics for twitter -->
    <!--<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>-->
    <!--<script type="text/javascript">twttr.conversion.trackPid('l6kv9', { tw_sale_amount: 0, tw_order_quantity: 0 });</script>-->
    <!--<noscript>-->
    <!--    <img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l6kv9&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />-->
    <!--    <img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l6kv9&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />-->
    <!--</noscript>-->
 
    <!--JavaScript for Lead Forensics -->
    <!--<script type="text/javascript" src="http://www.cloud-9751.com/js/40308.js"></script>-->
    <!--<noscript><img src="http://www.cloud-9751.com/40308.png" style="display:none;" /></noscript>-->


    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
      <!-- PHP Modal rendering -->
    <?php //file_get_contents('./modals/medicare_chip.html')); 
            $dir = "./modals/";
            // Sort in ascending order - this is default
            $a = scandir($dir);

            foreach ($a as &$value) {
               // $value = $value * 2;
               //echo($dir.$value);
                echo(file_get_contents($dir.$value)); 
            }
    ?>
</head>

<body id="page-top" class="index">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand page-scroll" href="#page-top">Start Bootstrap</a>-->
                <a class="navbar-brand page-scroll" href="#page-top"><img src="img/shm-logo-white.png" class="img-responsive" alt="" style="top:5px;height:7%; position:fixed"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#basics">Macra Basics</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#risk">what's at risk?</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#mymips">mips</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#payment">APMs</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#cases">what can i do?</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" style="padding-top: 20%;">
            <div class="intro-text"id="header">
                <!--<div class="intro-lead-in">Welcome to the Society Hospital Medicine's Fight the Resistance Campaign</div>-->
                <div class="heading-container" >
                    <div class="intro-heading" style="color:black; ">Medicare Physician Payments Are changing</div>
                    <div class="intro-lead-in" style="color:black"> Learn how MACRA impacts hospitalists and how to be prepared.</div>
                 </div>
                    <a href="#basics" style="background-color:#059f9d;" class="page-scroll btn btn-xl">Tell Me More</a>
               
            </div>
        </div>
    </header>

    <!-- overview Section -->
    <section id="basics">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center section-body">
                    <h2 class="section-heading">macra basics</h2>
                     <!-- class="section-subheading text-muted" for h3--><p  >The <a href="" data-toggle="modal" data-target="#medicare_chip"> Medicare Access and CHIP Reauthorization ACT (MACRA)</a>, signed into law in April 2015, 
                     repealed the <a href="" data-toggle="modal" data-target="#sustainable_growth">Sustainable Growth Rate (SGR)</a> and instituted significant reforms to the Medicare physician payment system.
                     Starting with payments in 2019, providers must choose one of two payment pathways.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 text-center section-body">
                    <a href="" data-toggle="modal" data-target="#mips" class="btn btn-xl basics-button"  style="background: #6e059f; ">MERIT-BASED INCENTIVE</br> PAYMENT SYSTEM (MIPS)</a>
                </div>
             <div class="col-lg-6 text-center section-body">
                    <a href="" data-toggle="modal" data-target="#apms" class="btn btn-xl basics-button" style="background: #059f9d;">ALTERNATIVE PAYMENT</br> MODELS (APMS)</a>
            </div>
            </div>
        </div>
    </section>

    <!-- campaign Grid Section -->
    <section id="risk" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center section-body">
                    <h2 class="section-heading">what's at risk?</h2>
                  <!-- class="section-subheading text-muted"-->  <p >The MIPS and APMS both require provider payments to be associated with performace- or
                        value-based assessments. MIPS uses an array of metrics to adjust payments, whereas risk under alternative payment models depends
                        on the model chosen.
                    </p>
                    <img src="./img/table1.gif" class="img-responsive" alt="Cinque Terre" style="margin: 0 auto;" usemap="#Map2" border="0" width=866 height=289/>
                    <map name="Map2">
                        <area shape="rect" coords="170,272,717,299" data-toggle="modal" data-target="#table1" href="#"> 
                    </map>
                </div>
            </div>
        </div>
    </section>
    
    <section id="mymips" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center section-body">
                    <h2 class="section-heading">merit-based incentive payment system</h2>
                  <!-- class="section-subheading text-muted"-->  <p >The Merit-based Incentive Payment System (MIPS) adjusts payments, either up or down, based on a score of 1-100 assigned to a provider based on performance in four domains. 
                    For the elements built from existing programs, such as PQRS, the physician value-based payment modifier, and Meaningful Use, hospitalists can expect similar policies in the MIPS. However, <a href="" data-toggle="modal" data-target="#cms">CMS</a> will be issuing the 
                    foundational rules for the MIPS this year which will provide more detail and clarity to the program. Although the proportional weights of the domains can change, generally MIPS scoring will be based on a combination of 
                    performance across these areas.</p>
                    <p style="margin-top:20px;font-size:1.4em;"><strong style="color:purple">Breakdown of the MIPS Categories</strong></p>
                    <img class="img-responsive img-centered" src="img/piechart.png" usemap="#Map" border="0" >  
                    <map name="Map">
                      <area shape="poly" data-toggle="modal" data-target="#quality" coords="5,0,197,1,203,129,126,170,114,254,1,287,2,1" href="">
                      <area shape="poly" data-toggle="modal" data-target="#clinical_performance" coords="203,3,461,4,281,171,255,150,234,138,205,134,203,3" href="#ClinicalPractice">
                      <area shape="poly" data-toggle="modal" data-target="#meaningful" coords="284,176,460,13,455,410,333,415,262,301,290,268,296,229,292,200,285,179" href="#MeaningfulUse">
                      <area shape="poly" data-toggle="modal" data-target="#resource" coords="2,293,118,259,137,284,170,311,210,317,256,305,326,414,4,418,3,294" href="#ResourceUse">
                    </map>
                   
                </div>
            </div>
        </div>
    </section>
 <!--<section id="mymips" class="bg-light-gray">-->
 <!--       <div class="container">-->
 <!--           <div class="row">-->
 <!--               <div class="col-lg-12 text-center section-body">-->
 <!--                   <h2 class="section-heading">Alternative Payment Models</h2>-->
                    <!--<h3 class="section-subheading text-muted">Marketing will provide the links and content that go here.</h3>-->
 <!--               </div>-->
 <!--           </div>-->
 <!--           <div class="row">-->
 <!--                <div class="col-lg-4  section-body" >-->
 <!--                   <h4 class="service-heading">Antibiotic Stewardship related to Prescribing and Use</h4>-->
 <!--                   <p style="font-size:11px;"><strong>Authors: Cynthia Korzelius, MD and Amit Desai, MD  </strong></p>-->
 <!--                   <p>With the increased risk of complicated conditions such as C. difficile on the rise, hospitalists have an increasing responsibility to practice safer prescribing habits when it comes to antibiotics.  -->
 <!--                   Practicing antibiotic stewardship is key to <strong>Fighting the Resistance!</strong></p>-->
                    
 <!--                   <p>This <a href = "/pdf/resources/CTR-15-0057_FTR_SAFE_PRESCRIBING_m1.pdf" onclick="ga('send', 'event', 'PDFs', 'Download', 'Practice Safe Prescribing Fact Sheet');">1-page, full color 8.5"x11" fact sheet</a> provides recommendations for promoting safe -->
 <!--                   antibiotic prescribing as well as appropriate and necessary treatment recommendations for antibiotic use.</p>-->
 <!--               </div>-->
 <!--                <div class="col-lg-4  section-body"  style="text-align: left;">-->
 <!--                    <h4 class="service-heading">Rethinking Antibiotic Treatment Time Course</h4>-->
 <!--                    <p style="font-size:11px;"><strong>Authors: Kate Gibson, MD, Vandad Yousefi, MD and Suhel Patel, MD</strong></p>-->
 <!--                    <p>Avoiding unnecessary antibiotic use and rethinking antibiotic treatment time courses can help decrease the eminent threat of drug-resistant bacteria.  -->
 <!--                    Hospitalists and hospital clinicians must <strong>Fight the Resistance</strong> and work to improve treatment time courses in the hospital setting.</p>-->
                    
 <!--                   <p>This <a href = "/pdf/resources/Pages_from_CTR-15-0057_FTR_RETHINK_m1.pdf" onclick="ga('send', 'event', 'PDFs', 'Download', 'Rethink your Antibiotic Fact Sheet');">1-page, full color 8.5"x11" fact sheet</a> provides recommendations for avoiding unnecessary antibiotic use and rethinking your -->
 <!--                   antibiotic treatment time course.</p>-->
 <!--               </div>-->
 <!--                <div class="col-lg-4  section-body"  style="text-align: left;">-->
 <!--                    <h4 class="service-heading">Importance of Hospitalists working as members of a Multidisciplinary Team</h4>-->
 <!--                    <p style="font-size:11px;"><strong>Author: Melhim Bou Alwan, MD</strong></p>-->
 <!--                    <p>Engaging a multidisciplinary team of hospital clinicians to collaborate on an antimicrobial stewardship program is a -->
 <!--                    key component to <strong>Fighting the Resistance!</strong></p>-->
                    
 <!--                   <p>This <a href = "/pdf/resources/Pages_from_CTR-15-0057_FTR_CHAMPION_m1.pdf" onclick="ga('send', 'event', 'PDFs', 'Download', 'Champion Antimicrobial Fact Sheet');">1-page, full color 8.5"x11" fact sheet</a> provides tips on how to successfully form a multidisciplinary antimicrobial stewardship team.</p>-->
 <!--               </div>-->
 <!--           </div>-->
 <!--   </section>   -->
    <!--Additional Resources -->
    <section id="payment" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center section-body">
                    <h2 class="section-heading">Alternative Payment Models</h2>
                    <!--<h3 class="section-subheading text-muted">Marketing will provide the links and content that go here.</h3>-->
                    <p>Alternative Payment Models (APMs) is the other payment pathway providers can pursue. Participation in an approved APM would exempt providers 
                    from participating in the MIPS and make them eligible for a 5% increase in Medicare payments. 
                    There are a set of requirements established by MACRA that participating providers and APMs must meet in order to qualify for the MIPS exemption and APM incentive payment:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-offset-2 section-body" >
                    <ul class="section-list">
                        <li><span>Providers must meet a threshold of Medicare payments, all-payer payments or patients associated with the APM (see chart below).</span></li>
                        <li><span>Providers must bear more than nominal financial risk for losses under the model or be a patient centered medical home. The definition of this risk will be defined in rulemaking.</span></li>
                        <li><span>The APM must require the use of certified EHR technology.</span></li>
                        <li><span>The APM must use quality measures comparable to those in the MIPS.</span></li>
                    </ul>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center section-body">
                    <img src="./img/table2.gif" class="img-responsive" alt="Cinque Terre" style="margin: -100px auto 0 auto;" > 
                    <!--<h3 class="section-subheading text-muted">Marketing will provide the links and content that go here.</h3>-->
                    <p style="margin-top:30px">Because the APM pathway is a new concept, much of the detail around the policies will be defined through upcoming rulemaking. Given what we know about existing APMs, SHM estimates it will be 
                    <em><u><strong>difficult</strong></u></em> for many hospitalists to meet the threshold criteria and utilize this pathway in its current state. However, depending on how CMS develops the rules around APMs and what 
                    new models emerge, this pathway may become a more viable option for hospitalists in the future.</p>
                </div>
            </div>
        </div>
    </section>    
    
    <!--Case Study Submissions -->
    <section id="cases" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-section-body text-center">
                    <h2 class="section-heading">What Can I do?</h2>
                    </br></br></br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 section-body" >
                    <div class="tabpanel styled-tabs uniform-height" role="tabpanel">
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs"  style="margin:auto" role="tablist" text-hidden-xs="true">
                        <li role="presentation" class="active" style="width:33%; text-align:right;" class=""><a style="hieght:100%; width:100%; line-height:3em"aria-expanded="false" href="#tabs-tab1" aria-controls="tabs-tab1" role="tab" data-toggle="tab"><i style="margin-right:20%; color:#059f9d;" class="icon fa fa-book fa-4x hidden-sm hidden-md hidden-lg" ></i><!--<h3 style="width:60%; float:right; margin-right: 20px;">Stay Informed</h3>--><img class="img-responsive hidden-xs " src="img/btn1.png" alt="" style=""></a></li>
                        <li class="" style="width:33%;  text-align:right;" role="presentation"><a style="hieght:100%; width:100%; height:6.5em" aria-expanded="false" href="#tabs-tab2" aria-controls="tabs-tab2" role="tab" data-toggle="tab"><i style="margin-right:20%; color:#059f9d;" class="icon fa fa-cogs fa-4x hidden-sm hidden-md hidden-lg"></i><!--<h3 style="width:20%; float:right; margin-right: 40px;">Prepare</h3>--><img class="img-responsive hidden-xs " src="img/btn2.png" alt="" style=""></a></li>
                        <li class="" style="width:33%; " role="presentation"><a style="hieght:100%; width:100%; line-height:3em" aria-expanded="false" href="#tabs-tab3" aria-controls="tabs-tab3" role="tab" data-toggle="tab"><i style="margin-left:20%;color:#059f9d;"  class="icon fa fa-comments fa-4x hidden-sm hidden-md hidden-lg"></i><!--<h3 style="width:20%; float:right; margin-right: 40px;">Share</h3>--><img class="img-responsive hidden-xs " src="img/btn3.png" alt="" style=""></a></li>
                        <!--<li class="active" role="presentation"><a aria-expanded="true" href="#tabs-tab4" aria-controls="tabs-tab4" role="tab" data-toggle="tab"><i class="icon fa fa-comment"></i><span>Quisque</span></a></li>-->
                      </ul>
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div style="min-height: 315px;" role="tabpanel" class="tab-pane fade active in" id="tabs-tab1">
                            </br></br>
                            <i class="icon fa fa-book fa-5x pull-right hidden-xs" style="font-size:9em; color:#059f9d"></i>
                            <h4>Stay Informed and Up-to-Date with the Policies</h4>
                            </br>
                            <p>Understanding the ins and outs of the policies will help hospitalists choose the best path forward for them and their groups. Much of the detail around the MIPS and APMs 
                                will be determined through the <a href="http://www.hospitalmedicine.org/Web/Advocacy/Advocacy_Basics/Regulatory/Web/Advocacy/Regulatory.aspx?hkey=f09a4020-f15a-471e-9ddf-efd3557d7ee7">regulatory rulemaking process</a> later this year. Stay informed through the 
                                <a target="_blank" href="http://www.hospitalmedicine.org/Web/Advocacy/Grassroots_Network/Web/Advocacy/Grassroots_Network_Healthcare_Advocacy_for_Hospitalists.aspx?hkey=b5cb792f-0361-4f48-845f-b74763833cce">Grassroots Network</a> 
                                and check back here as policies develop for the most up-to-date information on MACRA.
                            </p>
                        </div>
    
                        <div style="min-height: 315px;" role="tabpanel" class="tab-pane fade" id="tabs-tab2">
                            </br></br>
                            <i class="icon fa fa-cogs fa-5x pull-right hidden-xs" style="font-size:9em; color:#059f9d"></i>
                            <h4>Prepare Yourself and Your Group for the MIPS and APMs</h4>
                            </br>
                            <p>SHM expects that, at the very least, the performance year for the MIPS will begin in 2017. This follows the 2-year lag in the Reporting Year-Performance Year 
                              cycle previously developed in PQRS and the physician value modifier. With adjustments to payments beginning in 2019, it is critical to understand the available 
                              and feasible options for you and your group to participate in 2017, so as to avoid penalties.
                            </p>
                        </div>
    
                        <div style="min-height: 315px;" role="tabpanel" class="tab-pane fade" id="tabs-tab3">
                            </br></br>
                            <i class="icon fa fa-comments fa-5x pull-right hidden-xs" style="font-size:9em; color:#059f9d"></i>
                            <h4>Share Your Experiences</h4>
                            </br>
                            <p>By sharing your experiences with other hospitalists and with SHM, you can help your colleagues overcome reporting and performance issues and help SHM advocate 
                               for better policies for hospitalists. Join the <a target="_blank" href="http://www.hospitalmedicine.org/Web/Advocacy/Grassroots_Network/Web/Advocacy/Grassroots_Network_Healthcare_Advocacy_for_Hospitalists.aspx?hkey=b5cb792f-0361-4f48-845f-b74763833cce">Grassroots Network</a> 
                               to stay informed. Talk about your experiences on <a target="_blank" href="http://connect.hospitalmedicine.org/home">HMX</a> 
                               or email <a href="mailto:advocacy@hospitalmedicine.org?subject=MACRA%20Information">SHM staff</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
   <!--Events -->
    <!--<section id="events" class="bg-light-gray">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12 text-center section-body event" >-->
    <!--                <h2 class="section-heading">Events</h2>-->
    <!--                <h3 class="section-subheading text-muted" style="margin-bottom:30px;">SHM’s Fight the Resistance Antimicrobial Stewardship Campaign Kickoff Recorded -->
    <!--                Webinar from November 10, 2015.</h3>-->
    <!--                <p>“Fight the Resistance” is a new behavior change campaign from the Society of Hospital Medicine -->
    <!--                intended to encourage appropriate prescribing and use of antibiotics in the hospital. -->
    <!--                View the Recorded Webinar</p>-->
    <!--                <button class='btn btn-primary' onclick="location.href='#webinars'">View the Recorded Webinar</button>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12 text-center section-body event" >-->
    <!--                <h3 class="section-subheading text-muted" style="margin-bottom:30px;">#FightTheResistance on Social Media</h3>-->
    <!--                <p>Thanks to all who participated in SHM’s #FightTheResistance photo contest and demonstrated such enthusiasm and support for the campaign. Congratulations to all winners! Each and every participant played a key role in spreading the word about improving antibiotic stewardship in America’s hospitals.</p>-->
    <!--                <p>Continue to follow <a href="https://www.twitter.com/SHMLive" target="_blank">@SHMLive</a>  on Twitter for updates on the “Fight the Resistance” campaign and news on how you can continue to make a difference. </p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
   
    <!--</section>    -->
    
    <!-- Contact Section -->
    <!--<section id="contact">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12 text-center">-->
    <!--                <h2 class="section-heading">Contact Us</h2>-->
                   <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12">-->
    <!--                <form name="sentMessage" id="contactForm" novalidate>-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-md-6">-->
    <!--                            <div class="form-group">-->
    <!--                                <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">-->
    <!--                                <p class="help-block text-danger"></p>-->
    <!--                            </div>-->
    <!--                            <div class="form-group">-->
    <!--                                <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">-->
    <!--                                <p class="help-block text-danger"></p>-->
    <!--                            </div>-->
    <!--                            <div class="form-group">-->
    <!--                                <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">-->
    <!--                                <p class="help-block text-danger"></p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-md-6">-->
    <!--                            <div class="form-group">-->
    <!--                                <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>-->
    <!--                                <p class="help-block text-danger"></p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="clearfix"></div>-->
    <!--                        <div class="col-lg-12 text-center">-->
    <!--                            <div id="success"></div>-->
    <!--                            <button type="submit" class="btn btn-xl">Send Message</button>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </form>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <footer>
        <div class="container">
            <div class="row">
                <div class=" col-lg-4 col-md-4 col-sm-4">
                    <div class="left-footer">
                       <img class="img-responsive img-centered" src="img/logos/shm-logo-white.png" alt="" style="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="pull-left">
                         <h4 style="margin-top:30px" class="pull-left"> &copy; 2016 Society of Hospital Medicine (SHM). All Rights Reserved.</h4>
                         <h4 style="margin-top:20px;" class="pull-left"> <i class="fa fa-twitter-square fa-2 aria-hidden=" true""=""></i> Follow us on Twitter <a href="https://twitter.com/shmadvocacy" style="color: rgb(60, 225, 223)">@SHMadvocacy</a></h4>
                         <h4 style="margin-top:20px;" class="pull-left"> <i class="fa fa-envelope fa-2 aria-hidden=" true""=""></i> Email <a href="mailto:advocacy@hospitalmedicine.org?subject=MACRA%20Website" style="color: rgb(60, 225, 223)">SHM Advocacy</a> staff for questions or more information. </h4>
                    </div>
                </div>
                <!--<div class="col-lg-4 col-md-4 col-sm-4">-->
                <!--    <div class="right-footer">-->
                <!--        <img class=" img-centered" src="img/logos/merck-logo-white.png" alt="" style="">-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </footer>

    <!-- campaign Modals -->
    <!-- Use the modals below to showcase details downloads your campaign projects! -->

    <!-- campaign Modal 1 -->
<!--    <div class="campaign-modal modal fade" id="campaignModal1" tabindex="-1" role="dialog" aria-hidden="true">-->
<!--        <div class="modal-content">-->
<!--            <div class="close-modal" data-dismiss="modal">-->
<!--                <div class="lr">-->
<!--                    <div class="rl">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-8 col-lg-offset-2">-->
<!--                        <div class="modal-body">-->
                            <!-- Project Details Go Here -->
<!--                            <h2>call in the troops!</h2>-->
                            
<!--                            <img class="img-responsive img-centered" src="img/posters/poster-team.jpg" alt="">-->
<!--                            <p>Overprescribing antibiotics leads to the emergence and spread of multi-drug resistant bacteria. Be aware of appropriate antibiotic choice, resistance patterns and resources available to educate providers on overprescribing in your hospital. </p>-->
<!--                            <p><strong>SIZES:</strong></p>-->
<!--                            <ul class="list-inline">-->
                                <!--<li><a href="/test.pdf" download="expenses.pdf">8.5 x 11 (Color)</a>  |</li>-->
<!--                                <li><a onclick="ga('send', 'event', 'PDFs', 'Download', 'Call_Troops_8.5x11_Color');" href="/pdf/team/CTR-15-0048_FTR_poster%20-TEAM%208.5x11_m1.pdf?utm_source=FTR_web&utm_medium=web&utm_content=8.5x11_Color_poster_Troops&utm_campaign=FTR_15" download="team-8.5x11(color).pdf">8.5 x 11 (Color)</a>  |</li>-->
<!--                                <li><a onclick="ga('send', 'event', 'PDFs', 'Download', 'Call_Troops_11x17_Color');"  href="/pdf/team/CTR-15-0048_FTR_poster%20-TEAM_11x17_m1.pdf?utm_source=FTR_web&utm_medium=web&utm_content=11x17_Color_poster_Troops&utm_campaign=FTR_15" download="team-11x17(color).pdf">11 x 17 (Color) </a> |</li>-->
<!--                                <li><a onclick="ga('send', 'event', 'PDFs', 'Download', 'Call_Troops_16x20_Color');"  href="/pdf/team/CTR-15-0048_FTR_TEAM_POSTER_16x20_m1.pdf?utm_source=FTR_web&utm_medium=web&utm_content=16x20_Color_poster_Troops&utm_campaign=FTR_15" download="team-16x20(color).pdf">16 x 20 (Color) </a> |</li>-->
<!--                                <li><a onclick="ga('send', 'event', 'PDFs', 'Download', 'Call_Troops_8.5x11_Black_White');" href="/pdf/team/CTR-15-0048_FTR_TEAM_POSTER_8.5x11_BW_m1.pdf?utm_source=FTR_web&utm_medium=web&utm_content=8.5x11_BW_poster_Troops&utm_campaign=FTR_15" download="team-8.5x11(black/white).pdf">8.5 x 11 (Black/White) </a> |</li>-->
<!--                                <li><a onclick="ga('send', 'event', 'PDFs', 'Download', 'Call_Troops_11x17_Black_White');" href="/pdf/team/CTR-15-0048_FTR_TEAM_POSTER_11x17_BW_m1.pdf?utm_source=FTR_web&utm_medium=web&utm_content=11x17_BW_poster_Troops&utm_campaign=FTR_15-->

<!--" download="team-8.5x11(color).pdf">11 x 17 (Black/White) </a> |</li>-->
<!--                                <li><a onclick="ga('send', 'event', 'PDFs', 'Download', 'Call_Troops_16x20_Black_White');" href="/pdf/team/CTR-15-0048_FTR_TEAM_POSTER_16x20_BW_m1.pdf?utm_source=FTR_web&utm_medium=web&utm_content=16x20_BW_poster_Troops&utm_campaign=FTR_15" download="team-16x20(black/white).pdf">16 x 20 (Black/White) </a></li>-->
<!--                            </ul>-->
<!--                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <!-- campaign Modal 2 -->
<!--    <div class="campaign-modal modal fade" id="campaignModal2" tabindex="-1" role="dialog" aria-hidden="true">-->
<!--        <div class="modal-content">-->
<!--            <div class="close-modal" data-dismiss="modal">-->
<!--                <div class="lr">-->
<!--                    <div class="rl">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-8 col-lg-offset-2">-->
<!--                        <div class="modal-body">-->
                            <!-- Project Details Go Here -->
<!--                            <h2>stop the enemy. Don't overprescribe.</h2>-->
                            
<!--                            <img class="img-responsive img-centered" src="img/posters/poster-stop.jpg" alt="">-->
<!--                            <p>Overprescribing antibiotics leads to the emergence and spread of multi-drug resistant bacteria. Be aware of appropriate antibiotic choice, resistance patterns and resources available to educate providers on overprescribing in your hospital.  </p>-->
<!--                            <p><strong>SIZES:</strong></p>-->
<!--                            <ul class="list-inline">-->
<!--                                <li><a onclick="ga('send', 'event', 'PDFs', 'Download', 'Stop_Enemy_8.5x11_Color');" href="/pdf/stop/CTR-15-0048_FTR_poster%20-STOP_8.5x11_m1.pdf?utm_source=FTR_web&utm_medium=web&utm_content=8.5x11_Color_poster_Enemy&utm_campaign=FTR_15-->

<!--" download="stop-8.5x11(Color).pdf">8.5 x 11 (Color)</a>  |</li>-->
<!--                                <li><a onclick="ga('send', 'event', 'PDFs', 'Download', 'Stop_Enemy_11x17_Color');" href="/pdf/stop/CTR-15-0048_FTR_poster%20-STOP_11x17_m1.pdf?utm_source=FTR_web&utm_medium=web&utm_content=11x17_Color_poster_Enemy&utm_campaign=FTR_15" download="stop-11x17(Color).pdf">11 x 17 (Color) </a> |</li>-->
<!--                                <li><a onclick="ga('send', 'event', 'PDFs', 'Download', 'Stop_Enemy_16x20_Color');" href="/pdf/stop/CTR-15-0048_FTR_STOP_POSTER_16x20_m1.pdf?utm_source=FTR_web&utm_medium=web&utm_content=16x20_Color_poster_Enemy&utm_campaign=FTR_15" download="stop-16x20(Color).pdf">16 x 20 (Color) </a> |</li>-->
<!--                                <li><a onclick="ga('send', 'event', 'PDFs', 'Download', 'Stop_Enemy_8.5x11_Black_White');" href="/pdf/stop/CTR-15-0048_FTR_STOP_POSTER_8.5x11%20BW_m1.pdf?utm_source=FTR_web&utm_medium=web&utm_content=8.5x11_BW_poster_Enemy&utm_campaign=FTR_15" download="stop-8.5x11(Black/White).pdf">8.5 x 11 (Black/White) </a> |</li>-->
<!--                                <li><a onclick="ga('send', 'event', 'PDFs', 'Download', 'Stop_Enemy_11x17_Black_White');" href="/pdf/stop/CTR-15-0048_FTR_STOP_POSTER_11x17_BW_m1.pdf?utm_source=FTR_web&utm_medium=web&utm_content=11x17_BW_poster_Enemy&utm_campaign=FTR_15" download="stop-11x17(Black/White).pdf">11 x 17 (Black/White) </a> |</li>-->
<!--                                <li><a onclick="ga('send', 'event', 'PDFs', 'Download', 'Stop_Enemy_16x20_Black_White');" href="/pdf/stop/CTR-15-0048_FTR_STOP_POSTER_16x20%20BW_m1.pdf?utm_source=FTR_web&utm_medium=web&utm_content=16x20_BW_poster_Enemy&utm_campaign=FTR_15" download="stop-16x20(Black/White).pdf">16 x 20 (Black/White) </a></li>-->
<!--                            </ul>-->
<!--                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <!-- campaign Modal 3 -->
    <div class="campaign-modal modal fade" id="campaignModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Rethink Your Treatment Time course.</h2>
                            
                            <img class="img-responsive img-centered" src="img/posters/poster-time.jpg" alt="">
                            <p>Consider the Following: Adhere to Antibiotic Treatment Guidelines * Track the Day * Set a Stop Date * Re-evaluate Therapy * Streamline Therapy * Avoid Automatic Time Courses </p>
                            <p><strong>SIZES:</strong></p> 
                            <ul class="list-inline">
                                <li ><a onclick="ga('send', 'event', 'PDFs', 'Download', 'Rethink_8.5x11_Color');"  href="/pdf/time/CTR-15-0048_FTR_poster%20-TIME%208.5x11_m1.pdf?utm_source=FTR_web&utm_medium=web&utm_content=8.5x11_Color_poster_Rethink&utm_campaign=FTR_15

" download="time-8.5x11(Color).pdf">8.5 x 11 (Color)</a>  |</li>
                                <li><a onclick="ga('send', 'event', 'PDFs', 'Download', 'Rethink_11x17_Color');" href="/pdf/time/CTR-15-0048_FTR_poster%20-TIME_11x17_m1.pdf?utm_source=FTR_web&utm_medium=web&utm_content=11x17_Color_poster_Rethink&utm_campaign=FTR_15" download="time-11x17(Color).pdf">11 x 17 (Color) </a> |</li>
                                <li><a onclick="ga('send', 'event', 'PDFs', 'Download', 'Rethink_16x20_Color');" href="/pdf/time/CTR-15-0048_FTR_TIME_POSTER_16x20_m1.pdf?utm_source=FTR_web&utm_medium=web&utm_content=16x20_Color_poster_Rethink&utm_campaign=FTR_15

" download="time-16x20(Color).pdf">16 x 20 (Color) </a> |</li>
                                <li><a onclick="ga('send', 'event', 'PDFs', 'Download', 'Rethink_8.5x11_Black_White');" href="/pdf/time/CTR-15-0048_FTR_TIME_POSTER_8%205x11_BW_m1.pdf?utm_source=FTR_web&utm_medium=web&utm_content=8.5x11_BW_poster_Rethink&utm_campaign=FTR_15" download="time-8.5x11(Black/White).pdf">8.5 x 11 (Black/White) </a> |</li>
                                <li><a onclick="ga('send', 'event', 'PDFs', 'Download', 'Rethink_11x17_Black_White');" href="/pdf/time/CTR-15-0048_FTR_TIME_POSTER_11x17_BW_m1.pdf?utm_source=FTR_web&utm_medium=web&utm_content=11x17_BW_poster_Rethink&utm_campaign=FTR_15" download="time-11x17(Black/White).pdf">11 x 17 (Black/White) </a> |</li>
                                <li><a onclick="ga('send', 'event', 'PDFs', 'Download', 'Rethink_16x20_Black_White');" href="/pdf/time/CTR-15-0048_FTR_TIME_POSTER_16x20_BW_m1.pdf?utm_source=FTR_web&utm_medium=web&utm_content=16x20_BW_poster_Rethink&utm_campaign=FTR_15

" download="time-16x20(Black/White).pdf">16 x 20 (Black/White) </a></li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- campaign Modal 4 -->
    <div class="campaign-modal modal fade" id="campaignModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container"> 
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/campaign/golden-preview.png" alt="">
                            <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great campaign, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                            <p>You can download the PSD template in this campaign sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- campaign Modal 5 -->
    <div class="campaign-modal modal fade" id="campaignModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/campaign/escape-preview.png" alt="">
                            <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your overview.</p>
                            <p>You can download the PSD template in this campaign sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- campaign Modal 6 -->
    <div class="campaign-modal modal fade" id="campaignModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/campaign/dreams-preview.png" alt="">
                            <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                            <p>You can download the PSD template in this campaign sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/image-map-resizer.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
    <!-- SHM Custom Theme JavaScript -->
    <script src="js/custom.js"></script>
    
 <!-- Begin Google Tracking -->
 
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74252676-1', 'auto');
  ga('send', 'pageview');

</script>   
<!-- End Google Tracking -->
 
<script>
 $(document).ready(function(){
     $('#proposed_rule').modal('show')
 })
</script>
    
</body>

</html>



