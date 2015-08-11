<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Paulo Henrique Martins - curriculum vitae</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
   	<link rel="stylesheet" rev="stylesheet" href="css/jquery.lightbox.css" type="text/css" media="screen" />
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div id="photo-header" class="text-center">
            <!-- PHOTO (AVATAR) -->
            <div id="photo">
              <img src="img/avatar.jpg" alt="avatar">
            </div>
            <div id="text-header">
              <h1>Paulo Henrique Martins<br> <span>curriculum vitae</span></h1>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12">
          <div class="box">
            <h2>View by Technology:</h2>
            <div class="tech-box" data-rel="php" onClick="toggleTechnology(this);">PHP</div>
            <div class="tech-box" data-rel="java" onClick="toggleTechnology(this);">Java</div>
            <div class="tech-box" data-rel="csharp" onClick="toggleTechnology(this);">C#</div>
            <div class="tech-box" data-rel="javascript" onClick="toggleTechnology(this);">JavaScript</div>
            <div class="tech-box" data-rel="mobile" onClick="toggleTechnology(this);">Android / iOS</div>
            <div class="tech-box" data-rel="manager" onClick="toggleTechnology(this);">Project Manager</div>
            <div class="tech-box" id="show-all" onClick="showAll();" style="display: none;">Show All</div>
          </div>
        </div>        
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-7">
          <!-- ABOUT ME -->
          <div class="box tech">
            <h2>About Me</h2>
            <p>I am an experienced software developer, with great experience in web programming area. My main focus is on web-programming skills such as the development of web applications using PHP, Java, JavaScript, SQL, XML and Apache. I am a self-taught person, and a very creative, dedicated, flexible professional who feels very comfortable working either independently or as part of a team.</p>
          </div>
          <!-- EDUCATION -->
          <div class="box tech">
            <h2>Education</h2>
            <ul id="education" class="clearfix">
              <li>
                <div class="year pull-left">1987</div>
                <div class="description pull-right">
                  <h3>Born in São Paulo, Brazil</h3>
                  <p></p>
                </div>
              </li>
              <li>
                <div class="year pull-left">1992</div>
                <div class="description pull-right">
                  <h3>Skipped a education year</h3>
                  <p>
                  	Self-taught, learnt how to read by myself and was able to skip a class level.<br/>
                  	For the rest of my education years, I've been the youngest one in classes.
                  </p>
                </div>
              </li>
              <li>
                <div class="year pull-left">2007</div>
                <div class="description pull-right">
                  <h3>Bachelor in Computer Science</h3>
                  <p>With only 20years old, graduated on Mackenzie University - São Paulo, Brazil.</p>
                </div>
              </li>
            </ul>
          </div>
          <!-- EXPERIENCES -->

          <div class="box">
            <h2>Experience</h2>

            <!-- ELEMENT -->
            <div class="job clearfix tech tech-javascript tech-mobile">
              <div class="col-xs-3">
                <div class="logo">
                <img src="images/element-wave.png" alt="Element Wave" class="logo right" />
                </div>
                <div class="where">Element Wave</div>
                <div class="location">
                  <span class="project_icon fa fa-map-marker fa-fw"></span>
                  Galway, Ireland
                </div>
                <div class="year">January 2015 - August 2015</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">Software developer</div>
                <div class="description">
          Element Wave is a product from Element Software.<br/>
          It's a SDK and API for mobile applications that allows the programmers and companies trace their apps, getting informations as time of usage, locations, custom events and - specially - send push notifications for the users.<br/>
          At the time I started working there, it was a company with only 7 employees (including the owner and the team of 3 programmers).<br/>
          As a potential start-up with a great idea, the job was challenging and fun.
                  <div class="website">
                    <span class="fa fa-link fa-fw"></span> <a href="http://www.elementwave.com/" target="_blank">www.elementwave.com/</a>
                  </div>
                </div>
                <ul>
                  <li>Backend JavaScript developing with nodejs.</li>
                  <li>Frontend JavaScript developing with Angular JS.</li>
                  <li>Database communication with Couchbase and Elastic Search.</li>
                </ul>
              </div>
            </div>

            <!-- PLATYPUS -->
            <div class="job clearfix tech tech-php tech-java tech-mobile tech-javascript tech-manager">
              <div class="col-xs-3">
              	<div class="logo">
					<img src="images/platypus.png" alt="Platypus" class="logo right" />
              	</div>
                <div class="where">Platypus</div>
                <div class="location">
                	<span class="project_icon fa fa-map-marker fa-fw"></span>
                	São Paulo, Brazil
                </div>
                <div class="year">April 2013 - present</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">Own company (acting as freelancer)</div>
                <div class="description">
					Platypus is my own company for developing freelance projects for some clients that already knew my work.<br/>
	                <div class="website">
	                	<span class="fa fa-link fa-fw"></span> <a href="http://www.platypusweb.com.br" target="_blank">www.platypusweb.com.br</a>
	                </div>
                </div>
                <ul>
<li><b>Development of mobile applications using Ionic Framework</b></li>
Ionic Framework is a javascript framework based in Cordova/Phonegap and AngularJS that converts web applications in mobile apps.
When working on these projects, I had a strong contact with AngularJS, Cordova libraries and used PHP to build server­side webservices as well.
<li><b>Development of PHP websites</b></li>
MVC websites built with PHP, with strong usage of LAMP environment ­ Linux, Apache, MySQL and PHP.<br/>
Some projects needed some acknowledgments on frameworks such as Zend. However, I've built my own object­oriented MVC framework from scratch, so I am really comfortable working with pure PHP code as well.<br/>
Apache and server configuration necessary.<br/>
Strong capabilities of JavaScript and libraries such as JQuery and AngularJs.<br/>
Used front­end technologies as well, such as HTML5 and Twitter Bootstrap.<br/>
A Ruby on Rails project was also developed. Language was deeply studied and other technologies were also used, such as GitHub and Heroku infrastructure.<br/>
<li><b>Development of android applications</b></li>
Two android applications were built, both of them involved media streaming. One was for using VLClib for a MPEG2 movie broadcast and the other one was to make the app communicate with a Chromecast device. Both of> them required strong skills in Android development and capabilities of work alone, integrating with already existing projects.<br/>
<li><b>Development of Java projects</b></li>
Worked on different Java Projects, especially one as part of a strong team that developed a whole e­commerce integrating with already­existing systems and databases from Editora Globo, a huge magazine company in Brazil. Other projects included a bar­administrator system, integrated with pre­existing mySQL database, built from a legacy code, that required to work by myself.
				</ul>
              </div>
            </div>

            <!-- BOTECARIA -->
            <div class="job clearfix tech tech-manager">
              <div class="col-xs-3">
              	<div class="logo">
					<img src="images/botecaria.png" alt="Botecaria" class="logo right" />
              	</div>
                <div class="where">Botecaria</div>
                <div class="location">
                	<span class="project_icon fa fa-map-marker fa-fw"></span>
                	São Paulo, Brazil
                </div>
                <div class="year">February 2013 - present</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">Co-owner</div>
                <div class="description">
					Botecaria is a beer distribution company in activity in Brazil.<br/>
					Although not computer­related, I had a hard work of starting a company from scratch, learning a lot about management, economy, project building, taxes, hiring and everything else that is necessary for rising a startup.<br/>
					I'm a co­owner, part of a team of five people, and had worked a lot in the beginning of the company, until it could keep alive without my presencial work there.<br/>
	                <div class="website">
	                	<span class="fa fa-link fa-fw"></span> <a href="http://www.botecaria.com.br" target="_blank">www.botecaria.com.br</a>
	                </div>
                </div>
                <ul>
                  <li>All infrastructure and technical dependencies on the company.</li> 
                  <li>Management and employee hiring.</li>
                  <li>Rising a startup</li>
                  <li>Although not fully active, I still have part of the company and can help in some decisions.</li>
                </ul>
              </div>
            </div>

            <!-- APRIMO -->
            <div class="job clearfix tech tech-csharp tech-javascript tech-manager">
              <div class="col-xs-3">
              	<div class="logo">
					<img src="images/teradata_logo.jpg" alt="Teradata" class="logo right" />
              	</div>
                <div class="where">Aprimo - Teradata</div>
                <div class="location">
                	<span class="project_icon fa fa-map-marker fa-fw"></span>
                	London, UK
                </div>
                <div class="year">November 2011 - September 2012</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">Technical Consultant</div>
                <div class="description">
					Aprimo is a Integrated Marketing Management Software, customizable, with modules for Integrated Marketing Management (IMM), Demand Generation, Marketing Operations, Multi-Channel Campaign Management, Digital Marketing, Performance Analysis, and more.<br/>
					Companies use Aprimo’s platform to manage branding campaigns and centralize marketing assets in a library that’s accessible through a web portal. Aprimo’s event management software system has an events calendar, event booking, and event tracking ability. Aprimo's marketing software improves marketing analysis to help marketers gain new levels of insight into specific vertical markets. Aprimo's platform is a complete marketing information system that helps improve marketing strategy and business planning. Aprimo's powerful marketing analytics software modules enable better marketing strategies and full control over marketing campaigns.
	                <div class="website">
	                	<span class="fa fa-link fa-fw"></span> <a href="http://www.aprimo.com/" target="_blank">http://www.aprimo.com/</a>
	                </div>
                </div>
                <ul>
					<li>Customer Support</li>
					<li>Developing customizations for companies</li>
					<li>Experinence working with Aprimo proprietary API</li>
					<li>Development in .NET C#</li>
					<li>Use of MSSQL database</li>
				</ul>
                <div class="projects">
                	<div onClick="expandProject(this);" class="projects_more">
                		<span class="project_icon fa fa-plus-circle fa-fw"></span> Projects
                	</div>
					<div class="project_desc" style="display:none;">
						<p>
						As a Technical Consultant, my roles at Aprimo-Teradata were to give customer support and analyse and develope the required customizations.<br/>
						Aprimo is now part of the Teradata Company. In spite of my previous jobs, I could have the experience working in a multinational company, present in most of European countries. As part of my job, I had to make some travels, including spending some months in United States and visiting clients in other european countries.<br/>
						I also had the oportunity to work with huge projects and clients, such as JPMorgan, Nokia, Campbells and others.<br/>
						<a href="http://www.teradata.com/" target="_blank" class="outLink">http://www.teradata.com/</a><br/>
						</p>
					</div>
                </div>
              </div>
            </div>

           	<!-- EASYPAY -->
            <div class="job clearfix tech tech-php">
              <div class="col-xs-3">
              	<div class="logo">
					<img src="images/logo_easypay.png" alt="easypay" class="logo right" />
              	</div>
                <div class="where">Easypay</div>
                <div class="location">
                	<span class="project_icon fa fa-map-marker fa-fw"></span>
                	Lisbon, Portugal
                </div>
                <div class="year">March 2011 - September 2011</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">PHP developer</div>
                <div class="description">
					Easypay is a company that offers an API for online payments.<br/>
					It's a small company, although is growing fast and gave me the oportunity to work in Portugal.<br/>	
					<div class="website">
	                	<span class="fa fa-link fa-fw"></span> <a href="http://www.easypay.pt/" target="_blank">http://www.easypay.pt/</a>
	                </div>
                </div>
                <ul>
					<li>Customer Support</li>
					<li>Communication with clients that were implementing our solution</li>
					<li>Development of simples systems using PHP and mySQL, integrating them with the API of EasyPay</li>
				</ul>
              </div>
            </div>

            <!-- LABONE -->
            <div class="job clearfix tech tech-csharp tech-mobile tech-java tech-javascript tech-manager">
              <div class="col-xs-3">
              	<div class="logo">
					<img src="images/labone.jpg" alt="Labone" class="logo right" />
              	</div>
                <div class="where">LabOne</div>
                <div class="location">
                	<span class="project_icon fa fa-map-marker fa-fw"></span>
                	São Paulo, Brazil
                </div>
                <div class="year">October 2008 - January 2011</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">Software developer and manager</div>
                <div class="description">
					LabOne is a software company focused on digital media applications.<br/>
					It had about 40 employes, but it is growing fast and strongly.<br/>
	                <div class="website">
	                	<span class="fa fa-link fa-fw"></span> <a href="http://www.labone.net" target="_blank">http://www.labone.net</a>
	                </div>
                </div>
                <ul>
					<li>Project development using such technologies as C#, JavaScript, .NET, Java, Monotouch</li>
					<li>Extensive experience modeling relational databases and object-oriented systems</li>
					<li>Experience in javascript using jquery libraries</li>
					<li>Experience in Google maps API</li>
					<li>Experience as a project and team leader</li>
					<li>Development of mobile applications using Apple SDK, Objective C and monotouch. High experience with iPhone app development</li>
				</ul>
                <div class="projects">
                	<div onClick="expandProject(this);" class="projects_more">
                		<span class="project_icon fa fa-plus-circle fa-fw"></span> Projects
                	</div>
					<div class="project_desc tech tech-csharp tech-manager tech-mobile tech-javascript" style="display:none;">
						<p>
						As a company focused on digital media, I could learn a lot about it. I've worked in a lot of projects, like MusIg (a music store from IG internet company), I've made a Java Desktop application, part of a project for MIX TV (a pay-TV channel from Brazil) and others. My main project in LabOne was the development of an iPhone application for Brazil's largest music website - Sonora.
						</p>

						<div class="project project_sonoraIphone">
		                	<div onClick="expandProjectDetail(this);" class="projects_more">
								<span class="project_icon fa fa-plus-circle fa-fw"></span> Sonora iPhone
							</div>
							<div class="projectDetails tech tech-mobile tech-csharp" style="display: none;">
								<p>
								<img src="images/projects/sonora_logo.png" alt="Sonora" class="logo" />
								Sonora is the largest music website in Brazil. I was the developer and project manager of Sonora iPhone version.<br/>
								It was done with a technology called "<a href="http://www.monotouch.net" target="_blank">monotouch</a>", which allows the developer to build iPhone applications in C#.<br/>
								This was a long project. I had to work close to other monotouch developers to build an iPhone player for streaming music.<br/>
								When launched, Sonora iPhone took the second position in Apple Store's Top Free Apps for about one week.<br/>
								<b>Technology:</b><br/>
								C#, monotouch, Objective C, Apple SDK<br/>
								<div class="screenshots">
									<span class="scr_title" class="scr_description">Screenshots:</span><br/>
									<a href="images/projects/sonora_iphone_search.png" class="lightbox lbSonora" title="Sonora iPhone Search"><img src="images/projects/sonora_iphone_search_thumb.png" alt="Sonora iPhone Search" /></a>
									<a href="images/projects/sonora_iphone_player.png" class="lightbox lbSonora" title="Sonora iPhone Player"><img src="images/projects/sonora_iphone_player_thumb.png" alt="Sonora iPhone Player" /></a>
									<a href="images/projects/sonora_iphone_playlist.png" class="lightbox lbSonora" title="Sonora iPhone Playlist"><img src="images/projects/sonora_iphone_playlist_thumb.png" alt="Sonora iPhone Playlist" /></a>
									<a href="images/projects/sonora_iphone_artist.png" class="lightbox lbSonora" title="Sonora iPhone Artist"><img src="images/projects/sonora_iphone_artist_thumb.png" alt="Sonora iPhone Artist" /></a>
									<a href="images/projects/sonora_iphone_album.png" class="lightbox lbSonora" title="Sonora iPhone Album"><img src="images/projects/sonora_iphone_album_thumb.png" alt="Sonora iPhone Album" /></a>
									<a href="images/projects/sonora_iphone_radios.png" class="lightbox lbSonora" title="Sonora iPhone Radios"><img src="images/projects/sonora_iphone_radios_thumb.png" alt="Sonora iPhone Radios" /></a>
								</p>
								</div>
							</div>
						</div>

						<div class="project project_tva">
		                	<div onClick="expandProjectDetail(this);" class="projects_more">
								<span class="project_icon fa fa-plus-circle fa-fw"></span> TVA
							</div>
							<div class="projectDetails tech tech-csharp tech-manager" style="display: none;">
								<p>
									<img src="images/projects/tva_logo.jpg" alt="TVA" class="logo" />
									TVA is a brazilian pay-TV provider. The new site offers for their users a web 2.0 experience. Focused in digital medias, using LabOne's media administration system MIB - mediaibox.<br/>
									IT was a huge project, where I could act as a project manager.<br/>
									<b>Technology:</b><br/>
									C#, .NET MVC, MSSQL, IIS 7.0<br/>
									<a href="http://www.tva.com.br/" target="_blank" class="outLink">http://www.tva.com.br/</a><br/>
									<div class="screenshots">
										<span class="scr_title" class="scr_description">Screenshots:</span><br/>
										<a href="images/projects/tva_scr1.jpg" class="lightbox lbTva" title="TVA Home page"><img src="images/projects/tva_scr1_thumb.jpg" alt="TVA Home" /></a>
										<a href="images/projects/tva_scr2.jpg" class="lightbox lbTva" title="TVA Programming page"><img src="images/projects/tva_scr2_thumb.jpg" alt="TVA Programming" /></a>
									</div>
								</p>
							</div>
						</div>


						<div class="project project_metro">
		                	<div onClick="expandProjectDetail(this);" class="projects_more">
								<span class="project_icon fa fa-plus-circle fa-fw"></span> Metrô de São Paulo
							</div>
							<div class="projectDetails tech tech-manager tech-javascript tech-csharp" style="display: none;">
								<p>
									<img src="images/projects/metro_logo.jpg" alt="Metrô São Paulo" class="logo" />
									"Metrô" is the subway system of São Paulo city.<br/>
									Metrô came to LabOne looking for the company digital signage solution. The digital signage became part of a project that included a interactive kiosk solution with Google Maps integration where users were able to view the map of subway's proximty, including a list of nearby points of interest. When a point of interest is clicked (using a touchscreen), is shown in the map the way to get there and some detailed instructions.<br/>
									Later, for improve the system's performance, Google Gears was integrated. That worked also as a garantee that the system would still be working, even if the internet connection be lost.<br/>
									<b>Technology:</b><br/> 
									C# and .NET MVC for the administration system.<br/>
									Google Maps, Google Gears, JavaScript and JQuery for the front end.<br/>
									<div class="screenshots">
										<span class="scr_title" class="scr_description">Screenshots:</span><br/>
										<a href="images/projects/metro_scr1.jpg" class="lightbox lbMetro" title="Touchsceen running Metrô project"><img src="images/projects/metro_scr1_thumb.jpg" alt="Metro" /></a>
										<a href="images/projects/metro_scr2.jpg" class="lightbox lbMetro" title="Touchsceen running Metrô project"><img src="images/projects/metro_scr2_thumb.jpg" alt="Metro" /></a>
										<a href="images/projects/metro_scr3.jpg" class="lightbox lbMetro" title="Touchsceen running Metrô project"><img src="images/projects/metro_scr3_thumb.jpg" alt="Metro" /></a>
										<a href="images/projects/metro_scr4.jpg" class="lightbox lbMetro" title="Touchsceen running Metrô project"><img src="images/projects/metro_scr4_thumb.jpg" alt="Metro" /></a>
									</div>
									<div class="screenshots">
										<span class="scr_title" class="scr_description">Pictures:</span><br/>
										<a href="images/projects/metro_pic1.jpg" class="lightbox lbMetro" title="Touchsceen running Metrô project"><img src="images/projects/metro_pic1_thumb.jpg" alt="Metro" /></a>
									</div>
								</p>
							</div>
						</div>
					</div>
                </div>
              </div>
            </div>

            <!-- EWTI -->
            <div class="job clearfix tech tech-php tech-csharp tech-javascript tech-manager">
              <div class="col-xs-3">
              	<div class="logo">
					<img src="images/ewti.jpg" alt="Labone" class="logo right" />
              	</div>
                <div class="where">Engenharia de Web - EWTI</div>
                <div class="location">
                	<span class="project_icon fa fa-map-marker fa-fw"></span>
                	São Paulo, Brazil
                </div>
                <div class="year">April 2006 - September 2008</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">Software developer</div>
                <div class="description">
					EWTI is a small software company located in the center of São Paulo City.<br/>
					In spite of its size (about 15 employes), the clients were always big companies that has found in EWTI good solutions for their problems.<br/>
	                <div class="website">
	                	<span class="fa fa-link fa-fw"></span> <a href="http://www.ewti.com.br" target="_blank">http://www.ewti.com.br</a>
	                </div>
                </div>
                <ul>
					<li>Project development using such technologies as PHP, ASP, .NET and Java</li>
					<li>Extensive experience modeling relational databases and object-oriented systems</li>
					<li>Experience in layouts development using Adobe Photoshop and css stylesheets</li>
					<li>Extensive experience in databases management using MSSQL, Oracle and, especially mySQL</li>
				</ul>
                <div class="projects">
                	<div onClick="expandProject(this);" class="projects_more">
                		<span class="project_icon fa fa-plus-circle fa-fw"></span> Projects
                	</div>
					<div class="project_desc tech tech-csharp tech-php tech-manager tech-javascript" style="display:none;">
						<p>
							While at EWTI, other projects were made to clients like Verifone, Sony Pictures, AXN and others. In the beggining, I worked at EWTI simultaneously with my university studies. This was a place where I learned a lot.
						</p>

						<div class="project project_sonoraIphone">
		                	<div onClick="expandProjectDetail(this);" class="projects_more">
								<span class="project_icon fa fa-plus-circle fa-fw"></span> IPT
							</div>
							<div class="projectDetails tech tech-csharp tech-manager" style="display: none;">
								<p>
									<a href="images/projects/google_mini.jpg" class="lbIPT right" title="Google Search Appliances"><img src="images/projects/google_mini_thumb.jpg" alt="TVA" class="logo" /></a>
									IPT - "Instituto de Pesquisas Tecnológicas" is a institute inside the University of São Paulo for technologic researches.<br/>
									EWTI has developed their Intranet using a C# and Microsoft .NET. However the project I was responsible was the integration of the IPT's library with a Google Appliance for allow the use of the Google Engine to search books, articles and documents inside IPT.<br/>
									<b>Technology:</b><br/> 
									Google Mini Appliance and C# .NET<br/>
									<a href="http://www.google.com/enterprise/search/mini.html" target="_blank" class="outLink">http://www.google.com/enterprise/search/mini.html</a> - Google Search Appliance Webpage<br/>
								</p>
							</div>
						</div>

						<div class="project project_tva">
		                	<div onClick="expandProjectDetail(this);" class="projects_more">
								<span class="project_icon fa fa-plus-circle fa-fw"></span> Parmalat
							</div>
							<div class="projectDetails tech tech-php tech-manager tech-javascript" style="display: none;">
								<p>
									<img src="images/projects/parmalat_logo.jpg" alt="Parmalat" class="logo" />
									Development of brazilian Parmalat web site.<br/>
									I could act as a project manager when developing this site.<br/>
									<b>Technology:</b><br/> 
									PHP, Smarty PHP, jQuery with MySQL database.<br/>
									<a href="http://www.parmalat.com.br/" target="_blank" class="outLink">http://www.parmalat.com.br/</a><br/>
									<div class="screenshots">
										<span class="scr_title" class="scr_description">Screenshots:</span><br/>
										<a href="images/projects/parmalat_scr1.jpg" class="lightbox lbParmalat" title="Parmalat Home page"><img src="images/projects/parmalat_scr1_thumb.jpg" alt="Parmalat Home" /></a>
										<a href="images/projects/parmalat_scr2.jpg" class="lightbox lbParmalat" title="Parmalat website"><img src="images/projects/parmalat_scr2_thumb.jpg" alt="Parmalat website" /></a>
										<a href="images/projects/parmalat_scr3.jpg" class="lightbox lbParmalat" title="Parmalat website"><img src="images/projects/parmalat_scr3_thumb.jpg" alt="Parmalat website" /></a>
									</div>
								</p>
							</div>
						</div>


						<div class="project project_metro">
		                	<div onClick="expandProjectDetail(this);" class="projects_more">
								<span class="project_icon fa fa-plus-circle fa-fw"></span> Caras
							</div>
							<div class="projectDetails tech tech-php tech-manager tech-javascript" style="display: none;">
								<p>
									<img src="images/projects/caras_logo.jpg" alt="Caras" class="logo" />
									Development of brazilian Caras magazine web site.<br/>
									"Caras" is a high-visited website. For performance improvement, the pages are pure HTML, with a background system generating the content that has changed in every time interval.<br/>
									<b>Technology:</b><br/>
									PHP, Smarty PHP with MySQL database.<br/>
									<a href="http://www.caras.com.br" target="_blank" class="outLink">http://www.caras.com.br</a><br/>
									<div class="screenshots">
										<span class="scr_title" class="scr_description">Screenshots:</span><br/>
										<a href="images/projects/caras_scr1.jpg" class="lightbox lbCaras" title="Caras Home page"><img src="images/projects/caras_scr1_thumb.jpg" alt="Caras Home" /></a>
									</div>
								</p>
							</div>
						</div>
					</div>
                </div>
              </div>
            </div>





          </div>
        </div>




        <div class="col-xs-12 col-sm-5">
          <!-- CONTACT -->
          <div class="box clearfix">
            <h2>More Info</h2>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-globe fa-fw"></span></div>
              <div class="title only pull-right">Brazilian/Portuguese (dual citizenship)</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-male fa-fw"></span></div>
              <div class="title only pull-right">single, <?php echo (intval(@date("Y")) - 1987);?> years old</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-phone fa-fw"></span></div>
              <div class="title only pull-right">+353 083 360 0626</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-envelope fa-fw"></span></div>
              <div class="title only pull-right">&#112;&#97;&#117;&#108;&#111;&#104;&#101;&#110;&#114;&#105;&#113;&#117;&#101;&#64;&#112;&#97;&#117;&#108;&#111;&#118;&#101;&#108;&#104;&#111;&#46;&#99;&#111;&#109;</div>
            </div>
            <!--div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-twitter fa-fw"></span></div>
              <div class="title pull-right">Twitter</div>
              <div class="description pull-right">https://twitter.com/WordPress</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-facebook fa-fw"></span></div>
              <div class="title pull-right">Facebook</div>
              <div class="description pull-right">https://www.facebook.com/facebook</div>
            </div-->
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-skype fa-fw"></span></div>
              <div class="title pull-right">Skype</div>
              <div class="description pull-right">paulovelho1</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-file-text fa-fw"></span></div>
              <div class="title only pull-right">
            	<a href="http://paulovelho.com/curriculum/docs/cv_paulo.pdf">Download CV in .pdf</a>
              </div>
            </div>
          </div>


          <!-- SKILLS -->
          <div class="box">
            <h2>Technical Skills and Proficiency</h2>
            <div class="skills">
              <div class="item-skills" data-percent="1.00">PHP</div>
              <div class="item-skills" data-percent="0.90">Java</div>
              <div class="item-skills" data-percent="0.80">C# - Microsoft .NET</div>
              <div class="item-skills" data-percent="0.55">Ruby on Rails</div>
              <div class="item-skills" data-percent="1.00"><a href="javascript: expandSkills('skills-js');">JavaScript +</a></div>
              <div id="skills-js" class="item-skills-sub" style="display: none;">
	              <div class="item-skills" data-percent="1.00" style="width: 0px;">JQuery</div>
	              <div class="item-skills" data-percent="0.85" style="width: 0px;">AngularJS</div>
	              <div class="item-skills" data-percent="0.70" style="width: 0px;">Google Maps</div>
                <div class="item-skills" data-percent="0.90" style="width: 0px;">node JS</div>
	          </div>
              <div class="item-skills" data-percent="0.80">Android Development</div>
              <div class="item-skills" data-percent="0.90">HTML</div>
              <div class="item-skills" data-percent="0.70">CSS</div>
              <div class="item-skills" data-percent="0.35">C/C++</div>
              <div class="item-skills" data-percent="0.80">System Architecture and modeling</div>
              <div class="item-skills" data-percent="0.85">Databases - MySQL/MSSQL</div>
              <div class="item-skills" data-percent="0.35" title="couchbase/elasticsearch">Databases - couchbase/ElasticSearch</div>
              <div class="skills-legend clearfix">
                <div class="legend-left legend">Beginner</div>
                <div class="legend-left legend"><span>Proficient</span></div>
                <div class="legend-right legend"><span>Expert</span></div>
                <div class="legend-right legend">Master</div>
              </div>
            </div>
            <br/><br/>
            <div class="more skills">
            	<p>
            	Experience thinking ahead of the problem - planning great architecture and modeling solutions.<br/>
            	Experience in most environments - Linux, Windows, Mac.<br/>
            	Fast-learner and self-taught in most technologies.
            	</p>
            <div>
          </div>




          <!-- LANGUAGES -->
          <div class="box">
            <h2>Languages</h2>
            <div id="language-skills">
              <div class="skill">Portuguese <div class="icons pull-right"><div style="width: 100%;" class="icons-red"></div></div></div>
              <div class="skill">English <div class="icons pull-right"><div style="width: 100%;" class="icons-red"></div></div></div>
              <div class="skill">Spanish <div class="icons pull-right"><div style="width: 80%;" class="icons-red"></div></div></div>
              <div class="skill">French <div class="icons pull-right"><div style="width: 60%;" class="icons-red"></div></div></div>
              <div class="skill">Italian <div class="icons pull-right"><div style="width: 40%;" class="icons-red"></div></div></div>
            </div>
          </div>
          <!-- HOBBIES -->
          <div class="box">
            <h2>Hobbies</h2>
            <div class="hobby">Travelling</div>
            <div class="hobby">Writing</div>
            <div class="hobby">Programming</div>
            <div class="hobby">Dancing</div>
            <div class="hobby">Reading</div>
            <br/><br/>
            <p>
				In 2011 and 2012, I made a huge travel around Europe.<br/>
				In that time I've lived six months in Lisbon and one year in London, with the luck of finding job in software development in both countries.<br/>
				This huge travel gave me a great experience and acknowledgment about the world and its history. In the period of two years, I've been in 33 countries, 5 continents, learning as much as I could about mankind and history, including the two world wars, history of Europe and current politics in the world.<br/>
			</p>
          </div>
        </div>
      </div>
    </div>
    <!-- JQUERY -->
    <script src="js/jquery.min.js"></script>
    <!-- BOOTSTRAP -->
    <script src="js/bootstrap.min.js"></script>
    <!-- SCRIPTS -->
	<script type="text/javascript" src="js/jquery.lightbox.js"></script>
  <script src="js/scripts.js"></script>
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-208212-2");
		pageTracker._trackPageview();
		} catch(err) {}
	</script>
  </body>
</html>