    <!--CSS-->
    <link rel="stylesheet" href="<?=  get_template_directory_uri() ?>/flatrok/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="<?=  get_template_directory_uri() ?>/flatrok/css/jquery.fancybox.css" type="text/css"/>

    <!--Default Theme-->
    <link rel="stylesheet" href="<?=  get_template_directory_uri()  ?>/flatrok/css/style.css" type="text/css"/>
    <!--Theme Selection-->
        <!--<link rel="stylesheet" href="css/theme-dark.css"/>-->

    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->

    <!--Favicon-->
    <link rel='shortcut icon' type='image/x-icon' href='favicon.html' />

    <!--Javascript-->
    <script src="<?=  get_template_directory_uri()  ?>/flatrok/js/jquery-1.10.2.min.js"></script>
    <script type="<?=  get_template_directory_uri()  ?>/flatrok/text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="<?=  get_template_directory_uri()  ?>/flatrok/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="<?=  get_template_directory_uri()  ?>/flatrok/js/jquery.fancybox.pack.js"></script>
    <script src="<?=  get_template_directory_uri()  ?>/flatrok/js/jquery.isotope.min.js"></script>
    <script src="<?=  get_template_directory_uri()  ?>/flatrok/js/jquery.smoothScroll.js"></script>
    <script src="<?=  get_template_directory_uri()  ?>/flatrok/js/waypoints.min.js"></script>
    <script src="<?=  get_template_directory_uri()  ?>/flatrok/js/custom.js"></script>

<div class="clearfix"></div>
<!--Container-->
<div class="container page-body">
<!--Page Header-->
<div class="row page-head">
    <div class="small-12 medium-12 columns">
        <div class="profile-pic">
            <img src="<?= get_template_directory_uri()   ?>/flatrok/images/profile.png" width="181" height="181" alt="Profile picture."/>
        </div>
        <div class="tagline">Gonzalo Pérez<span>Open your .. mind, soul and source.</span></div>
        <div class="clearfix"></div>
        <div class="jobtag">
            <span>Developer</span>
        </div>
    </div>
    <!--Navigation-->
    <div class="nav-wrapper small-12 medium-12 columns">
        <div class="nav-bar">
            <ul>
                <li class="nav-item profile-bg">
                    <a href="#profile">
                        <div class="oval"><i class="fa fa-user"></i><span>Profile</span></div>
                    </a>
                </li>
                <li class="nav-item resume-bg">
                    <a href="#resume">
                        <div class="oval"><i class="fa fa-file-text"></i><span>Resume</span></div>
                    </a>
                </li>
                <li class="nav-item portfolio-bg">
                    <a href="#portfolio">
                        <div class="oval"><i class="fa fa-code"></i><span>Projects</span></div>
                    </a>
                </li>
                <li class="nav-item contact-bg">
                    <a href="<?= get_permalink( 21 ); ?>">
                        <div class="oval"><i class="fa fa-envelope"></i><span>Contact</span></div>
                    </a>
                </li>
            </ul>
        </div>
    </div><!--End Navigation -->
</div> <!--End Page Header -->


<!--Profile-->
<div id="profile" class="nav-target">
    <div class="row">
        <div class="small-12 medium-offset-1 medium-10 columns">
            <div class="info">Hola. Actualmente estoy trabajando en mi sitio personal, aún no esta termininado(por si vez cosas raras jeje). Saludos. <a href="<?= get_permalink( 21 ); ?>">Contactame</a>.
            </div>
        </div>
    </div>
    <div class="row">
        <!--Profile Information-->
        <div class="small-12 medium-offset-1 medium-3 columns">
            <h2>Profile</h2>

            <h3>Information</h3>

            <div class="profile-information">
                <div class="item">Name: <span>Gonzalo Pérez</span></div>
                <div class="item">Age: <span>29</span></div>
                <div class="item">From: <span>Mexico</span></div>
                <div class="item">Lives In: <span>Guadalajara, Jalisco</span></div>
                <div class="item">Likes:
                    <ul class="tag-area">
                        <li>Programming</li>
                        <li>Running</li>
                        <li>Reading</li>
                    </ul>
                </div>
            </div>
        </div> <!--End Profile Information -->
        <div class="small-12 medium-offset-1 medium-6 columns">
            <!--Profile Skills Section 1-->
            <div class="profile-skills">
                <h2>&nbsp;</h2>

                <div class="other-experience">
                <h3>Skill</h3>
                <ul class="tag-area">
                    <li>PHP</li>
                    <li>Ruby</li>
                    <li>Python</li>
                    <li>Django</li>
                    <li>Ruby on Rails</li>
                    <li>Codeigniter</li>
                    <li>Wordpress</li>
                    <li>Javascript</li>
                    <li>jQuery</li>
                    <li>Backbone</li>
                    <li>MySQL</li>
                    <li>PostgreSQL</li>
                    <li>MongoDB</li>
                    <li>Redis</li>
                    <li>Apache</li>
                    <li>Linux</li>
                </ul>
            </div>
                
            </div> <!--End Profile Skills Section 1 -->
        </div>
    </div>
</div>
<!--End Profile-->

<!--Resume-->
<div id="resume" class="nav-target">
    <div class="row">
        <div class="small-12 medium-offset-1 medium-5 columns">
            <h2>Resume</h2>

            <!--Education-->
            <div class="resume-edu">
                <h5>Activities</h5>
                <div class="timeline-item">
                    <div class="date">
                        <div class="dot"></div>
                        <span>2011 [May 26 th ]</span>
                    </div>
                    <h5 class="timeline-title">Conference</h5>

                    <p>Back to the Future: The return of control", by Jon "maddog" Hall Executive Director of Linux International. Paraninfo Enrique Diaz de Leon Universidad de Guadalajara Av. Juarez 975, Centro. Guadalajara, Jal.</p>
                </div>
                <div class="timeline-item">
                    <div class="date">
                        <div class="dot"></div>
                        <span>2010 [May 24 th   the September 30 th ]</span>
                    </div>
                    <h5 class="timeline-title">Professional stay</h5>

                    <p>Project:  Research on Evolutionary Computation and Development of a Genetic Algorithm.
Centro de Investigaciones en Óptica, A. C.
León, Gto.</p>
                </div>
                <div class="timeline-item">
                    <div class="date">
                        <div class="dot"></div>
                        <span>2009 [August 3 rd   the December 15 th ]</span>
                    </div>
                    <h5 class="timeline-title">Professional residence</h5>

                    <p>Project: “Técnicas de Reconstrucción Tridimensional de la Estructura de Objetos”.
Centro de Investigaciones en Óptica, A. C.
León, Gto.</p>
                </div>
                <div class="timeline-item">
                    <div class="date">
                        <div class="dot"></div>
                        <span>2009</span>
                    </div>
                    <h5 class="timeline-title">PUBLICATION</h5>

                    <p>Determinación de la Imbibición de Semillas de Maíz por Segmentación de Imágenes.
Magazine: InGenio Ciencia y Tecnología, Edición N. 9 año 2009.</p>
                </div>
                <div class="timeline-item">
                    <div class="date">
                        <div class="dot"></div>
                        <span>2009</span>
                    </div>
                    <h5 class="timeline-title">Creativity XXIII National Event</h5>

                    <p>Project: “Sistema de Visión por Computadora para el Estudio de la Germinación de Semillas y
Desarrollo de Plántulas”.
Veracruz, Veracruz.</p>
                </div>
                <div class="timeline-item">
                    <div class="date">
                        <div class="dot"></div>
                        <span>2009 [February – June]</span>
                    </div>
                    <h5 class="timeline-title">Counseling</h5>

                    <p>Activity: consultation on the programming languages PHP, Java, C and   C++   for irregular
students of ITTG.
Instituto Tecnológico de Tuxtla Gutiérrez.Tuxtla Gutiérrez, Chiapas.</p>
                </div>
                <div class="timeline-item">
                    <div class="date">
                        <div class="dot"></div>
                        <span>2008 [October 23 rd ]</span>
                    </div>
                    <h5 class="timeline-title">Speaker</h5>

                    <p>Conference:  “Sistema   de   Visión   por   Computadora   para   el   Estudio   de   la   Germinación   de
Semillas y Desarrollo de Plántulas”.
XXXVI Aniversario del Instituto Tecnológico de Tuxtla Gtz., Chiapas.</p>
                </div>
                <div class="timeline-item">
                    <div class="date">
                        <div class="dot"></div>
                        <span>2008</span>
                    </div>
                    <h5 class="timeline-title">Social service</h5>

                    <p>Activity: consultation on the programming language Matlab and Operating Systems.
Departamento de División de Estudios de Posgrado e Investigación del ITTG.
Tuxtla Gutiérrez, Chiapas</p>
                </div>
                
            </div> <!--End Education -->
        </div>

        <!--Work-->
        <div class="medium-5 medium-offset-0 small-offset-1 small-5 columns">
            <div class="resume-work">
                <h5>Work</h5>

                <div class="timeline-item">
                    <div class="date">
                        <div class="dot"></div>
                        <span>Dic 2013 - Current year</span>
                    </div>
                    <h5 class="timeline-title">Semantic Weapons</h5>
                    <span class="job-title">Software   Developer</span>

                    <p>Donec blandit aliquam enim ac adipiscing. Quisque tempus lacus quis volutpat mattis. Quisque vel
                        gravida massa, et pharetra lacus. Nulla facilisi.</p>
                </div>
                <div class="timeline-item">
                    <div class="date">
                        <div class="dot"></div>
                        <span> Feb 2012 - Dec 2013</span>
                    </div>
                    <h5 class="timeline-title">Softtek</h5>
                    <span class="job-title">Web Developer</span>

                    <p>Web Developer. Front­End and Back­End. using technologies like PHP5, Jquery and jquery
mobile, CSS, HTML, gmap3, highcharts, Backbone.js, RequireJS, Underscore.js,   Openlayers,
Redis, Apache, Linux, Codeigniter and MySQL.</p>
                </div>
                <div class="timeline-item">
                    <div class="date">
                        <div class="dot"></div>
                        <span>2012 - 2013</span>
                    </div>
                    <h5 class="timeline-title">Turistica Sureña</h5>
                    <span class="job-title">Web Developer</span>

                    <p>Freelance. Developer and Analyst geolocation applications in Turistica sureña company, using
technologies like PHP5, Javascript(Jquery, gmap3 and API google maps), HTML5, CSS and
MySQL.</p>
                </div>
                <div class="timeline-item">
                    <div class="date">
                        <div class="dot"></div>
                        <span>Feb 2011 - Feb 2012</span>
                    </div>
                    <h5 class="timeline-title">Grupo VGI</h5>
                    <span class="job-title">Software   Developer</span>

                    <p>Administrator   and   developer   of   system   VGI   and   creator   of   a   Customer   Relationship
Management, developed with technology PHP5, JavaScritp, MooTools,  Extjs,  Html, CSS and
MySQL (Stored Producered)</p>
                </div>
                <div class="timeline-item">
                    <div class="date">
                        <div class="dot"></div>
                        <span>Sep 2010 - Feb 2011</span>
                    </div>
                    <h5 class="timeline-title">MasTi</h5>
                    <span class="job-title">Web Developer</span>

                    <p>Software Developer Analyst. Technology PHP5, JavaScript, Extjs, Html and MySQL (Stored
Producered).</p>
                </div>
            </div> <!--End Work -->
        </div>
    </div>
</div> <!-- End Resume -->


</div><!--End Container-->
