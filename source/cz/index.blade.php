@extends('_layouts.page')

@section('social')
<meta property="og:title" content="DevConf.CZ | Brno, Czechia">
<meta property="og:site_name" content="DevConf.CZ">
<meta property="og:description" content="DevConf are free and open, annual, open-source community conferences for community contibutors, sponsored by Red Hat.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://devconf.info">
<meta property="og:image" content="https://devconf.info/assets/images/devconf-cz-social.png">
<meta property="twitter:image" content="https://devconf.info/assets/images/devconf-cz-social.png">
@endsection

@section('css')
<link rel="stylesheet" href="{{ mix('css/site.css', 'assets/build') }}">
<link rel="stylesheet" href="{{ mix('css/timeline.css', 'assets/build') }}">
@endsection

@section('title')
<title>DevConf.CZ 2022</title>
@endsection


@section('body')
<header class="masthead min-vh-100">
	<nav class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top">
		<span class="nav-brand"><a href="#" class="home"><img src="/assets/images/devconf-logo-cz-reverse.svg" alt="DevConf logo"></a></span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobile"
		    aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarMobile">
			<ul class="navbar-nav ml-auto pr-5">
				<li class="nav-item active px-3">
					<a href="#about" class="nav-link local">About</a>
				</li>
                <li class="nav-item active px-3">
                    <a href="#themes" class="nav-link local">Conference Themes</a>
                </li>
				<li class="nav-item active px-3">
					<a href="#news" class="nav-link local">News</a>
				</li>
<!--				<li class="nav-item active px-3">
					<a href="#schedule" class="nav-link local">Schedule</a>
				</li>
				<li class="nav-item active px-3">
					<a href="#travel" class="nav-link local">How to get here?</a>
				</li> -->
                <li class="nav-item active px-3">
                    <a href="/cz/blog" class="nav-link local">Blog</a>
                </li>
				<li class="nav-item active px-3">
					<a href="/cz/faq" class="nav-link local">FAQ</a>
				</li> 
				<li class="nav-item active px-3">
					<a href="/coc" class="nav-link local" target="_blank">Policies</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="row mr-0 mt-5" style="height: 85%">
		<div class="col-lg-1 border-right text-center pr-0">
			<a href="mailto:info@devconf.cz" target="_blank" title="Mail"><img src="/assets/images/mail.svg" alt="mail" class="social-icon"></a>
			<a href="https://www.facebook.com/DevConf.CZ" target="_blank" title="Facebook"><img src="/assets/images/facebook.svg" alt="facebook" class="social-icon"></a>
			<a href="https://twitter.com/devconf_cz" target="_blank" title="Twitter"><img src="/assets/images/twitter.svg" alt="twitter" class="social-icon"></a>
			<a href="https://discord.gg/devconf" target="_blank" title="Discord"><img src="/assets/images/discord.svg" alt="discord" class="social-icon"></a>
			<a href="https://t.me/devconfcz" target="_blank" title="Telegram"><img src="/assets/images/telegram.svg" alt="telegram" class="social-icon"></a>
			<a href="https://www.youtube.com/channel/UCmYAQDZIQGm_kPvemBc_qwg" target="_blank" title="YouTube"><img src="/assets/images/youtube.svg" alt="youtube" class="social-icon"></a>
			<a href="https://github.com/devconfcz/devconf" target="_blank" title="Git Hub"><img src="/assets/images/github.svg" alt="github" class="social-icon"></a>
		</div>
		<div class="col-lg-10 h-100 px-0">
                	<div style="padding: 5% 0 0 0">
                        	<img src="/assets/images/devconf-logo-cz-reverse.svg" alt="DevConf logo" class="text-logo">
                        	<img src="/assets/images/devconf-abstract.svg" alt="DevConf abstract logo" class="abstract-logo">
                        </div>
			<div class="heading-text mont-400 h5 pb-2 pb-lg-5">
				open source community conference
			</div>
<!--            <div class="mini-stamp d-none d-lg-block">
                <span class="mont-700">MINI</span><br>LOCAL<br>IN-PERSON<br>CONFERENCE
            </div>
            <div style="padding: 0 0 0 3rem" class="my-1 d-lg-none">
                <div class="mini-chip">
                    <span class="mont-700">MINI</span> LOCAL IN-PERSON CONFERENCE
                </div>
            </div>

            <div style="padding: 0 0 0 3rem" class="my-1">
                <div class="mini-chip">Linux Distribution</div>
                <div class="mini-chip">Open Source Design</div>
            </div>
            <div style="padding: 0 0 0 3rem" class="my-1">
                <div class="mini-chip">Modern Software Development</div>
            </div>
			<div class="heading-text mont-700 h1 pt-1 pt-lg-5">
				June 2, 2022
			</div> -->
			<div class="heading-text mont-700 h4">
                <a href="#map" class="nav-link local" style="color: white; padding: 0px"><i class="fa fa-map-marker"></i> Brno, Czech Republic</a>

            </div> 
            <div class="heading-text pt-1 mt-5">
                <a href="https://forms.gle/sYmKms6RkpUZ5qMG8" target="_blank" class="border p-3 h2 mont-700" style="border-width: 3px !important;">HELP US IMPROVE</a>
            </div> 

		</div>
	</div>
</header>
<section id="about" class="mx-auto col-lg-11">
	<div class="row mt-4 py-5">
		<div class="col-lg-4 mx-5 mb-5 text-center">
			<img src="/assets/images/devconf-d-brno.png" class="mw-100" alt="DevConf image asset">
		</div>
		<div class="col-lg-6 px-5">
			<h1 class="mont-700 underline pb-4">About DevConf</h1>
			<div class="os-400">
                <p><strong>DevConf.CZ</strong> is annual, free, Red Hat sponsored community conference for developers, admins, DevOps engineers, testers, documentation writers and other contributors to open source technologies.
                   At DevConf.CZ, FLOSS communities sync, share, and hack on upstream projects together.</p>

                <p><strong>DevConf.cz Mini</strong> is a bi-annual, highly focused, local, in-person version of DevConf.cz. It offers an opportunity to return to our conference themes in a smaller setting and establishes a platform
                   for the Czech Republic and EMEA based community to sync, share and hack on upstream projects together.</p>

				<p>There is no admission or ticket charge for DevConf.CZ events. However, you are required to complete a free registration. Watch this site for updates about registration.</p>

                <p>We are committed to fostering an open and welcoming environment at our conference.
                   We set expectations for inclusive behavior through our code of conduct and media policies, and are prepared to enforce these.</p>
			</div>
	    </div>
    </div>
</section>
<section id="themes" class="mx-auto col-lg-11">
    <div class="row mt-4 py-5">
    	<div class="row w-100">
	    	<div class="h1 mx-5 mont-700">Conference Themes</div>
    	</div>
	    <div class="row py-4">
		    <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-2 mx-auto">
			    <ul class="timeline timeline-centered">
			<?php

				$topics = array(
						array("name"=>"Cloud & Hyperscale","description"=>"Topics around Kubernetes, quantum computing, high availability, *aaS, anything that powers large data centers or small private clouds, best practices for development, and operations at scale, resource efficiency, etc."),
                        array("name"=>"Future Tech and Open Research", "description"=>"What’s next? Any topics that are currently being discussed or actively researched yet their impact is still potential. Best practices and great examples of open source research collaborations are welcome."),
                        array("name"=>"Edge Computing", "description"=>"Modern embedded systems, microcontrollers, management of embedded systems, infrastructure for embedded systems, resource optimization, peripherals, tools, and edge in automotive are some of the topic ideas appropriate for this track."),
                        array("name"=>"HPC, Big Data and Data Science", "description"=>"High performance systems, data storing and processing, best practices for data lakes/data mesh, and parallelism and vector computing."),
                        array("name"=>"Open Source UX/Design", "description"=>"Open source practices for UX and UIs, Design Thinking, Service Design, UX and Customer Experience. How to get users and customers involved in software design and other best practices."),
                        array("name"=>"Open Source Education", "description"=>"Improving how students learn—and how instructors teach— withOpen Source. Open Source tools that facilitate education, as well as the overall education community that operates in an open source way (MOOC's, free bootcamps, university relations, etc)."),
                        array("name"=>"Modern Software Development", "description"=>"Trending topics from software development, application modernization, new trends, microservices, distributed computing and continuous improvement. Development of secure code, code validation and verification."),
                        array("name"=>"Analysis, Testing and Automation", "description"=>"Embedded intelligence in products for automation, IoB - internet of behaviours, analytics and automated remediation capabilities, risk and change analysis, AI powered orchestration, and machine learning in analysis and test automation (i.e, test failure analysis, test generation, and test selection)."),
                        array("name"=>"Linux distribution", "description"=>"Firmware, Linux kernel, base platform for containers, desktop, Silverblue, and upgrades."),
					  );

				foreach($topics as $i=>$t){
					if($i%2 == 0){?>
				<li class="timeline-item">
					<div class="timeline-content-left">
						<div class="mont-600 timeline-title"><?php echo $t['name'];?></div>
						<p class="timeline-description os-400"><?php echo $t['description'];?></p>
					</div>
					<div class="timeline-marker"></div>
				<?php }else{ ?>
					<div class="timeline-content-right">
						<div class="mont-600 timeline-title"><?php echo $t['name'];?></div>
						<p class="timeline-description os-400"><?php echo $t['description'];?></p>
					</div>
				</li>
				<?php }
				}
				if(count($topics)%2 == 1){
					echo "</div></li>";
				}?>
			</ul>
		</div>
	</div>
</section>

<!--<section id="coffee" class="mx-auto col-lg-11">
	<div class="row mt-4 py-5">

        <div class="col-lg-6 px-5">
            <h1 class="mont-700 underline pb-4">Doubleshot at DevConf.CZ 2022</h1>
            <div class="os-400">
                <p>Our attendees always tell us how important it is to grab a cup of coffee at DevConf.cz and sit down in the hall for a chat with long-time friends and new acquaintances. 

We couldn't meet in Brno last year so we worked with our <a href="https://www.doubleshot.cz/en/products/devconf-sample-pack" target="_blank">friends at doubleshot</a> to put together a coffee tasting for you to enjoy during the conference. We're pleased to have worked with them again to bring this experience back in 2022!</p>

                <p>Doubleshot has chosen three coffees to compliment your experience at the DevConf.CZ 2022 virtual conference. One coffee for each day (3 x 70 g) plus one bonus coffee for the day before or day after. </p>

                <p><a href="https://www.doubleshot.cz/en/products/devconf-sample-pack" target="_blank">You can order your coffee on their website</a> for 197 CZK (~7.5 EUR) plus shipping. Order deadlines vary by country,
                so order early.  We look forward to seeing you online.</p>
            </div>
    </div>

    <div class="col-lg-4 mx-5 mb-5 text-center">
            <img src="/assets/images/devconf-d-coffee.png" class="mw-100" alt="Coffee DevConf image asset">
        </div>


    </div>

</section>-->

<section id="news" class="mx-auto py-5 col-lg-11">
<!--	<div class="row">
		<div class="h1 pb-4 mx-5 position-relative mont-700">Important dates</div>
	</div>
	<div class="row">
		<!-- Keep in pairs 
		<div class="col-10 col-md-5 mr-md-0 mx-auto py-3 border-bottom">
			<div class="row">
				<div class="col-4 h5 mont-700">Jan 28-29, 2022</div>
				<div class="col-8">
					<div class="row">
						<div class="col mont-600">DevConf.CZ</div>
					</div>

					<div class="row">
						<div class="col os-400"><a href="https://cfp.devconf.info">Submit your proposal &rarr;</a></div>
					</div>

				</div>
			</div>
		</div>
		<div class="col-10 col-md-5 ml-md-0 mx-auto py-3 border-bottom">
			<div class="row">
				<div class="col-4 h5 mont-700">May, 2022</div>
				<div class="col-8">
					<div class="row">
						<div class="col mont-600">DevConf.cz Mini Schedule published</div>
					</div>
				</div>
			</div>
                </div>
-->
		<!-- Second pair -->
<!--		<div class="col-10 col-md-5 mr-md-0 mx-auto py-3 border-bottom">
			<div class="row">
				<div class="col-4 h5 mont-700">May, 2022</div>
				<div class="col-8">
					<div class="row">
						<div class="col mont-600">DevConf.cz Mini Registration opens</div>
					</div>
				</div>
			</div>
		</div>

        <div class="col-10 col-md-5 ml-md-0 mx-auto py-3 border-bottom">
            <div class="row">
                <div class="col-4 h5 mont-700">Jun 2, 2022</div>
                <div class="col-8">
                    <div class="row">
                        <div class="col mont-600">DevConf.cz Mini</div>
                    </div>
                </div>
            </div>
                </div>
    </div> -->
	<div class="row mt-4">
		<div class="h1 mx-5 mont-700">News</div>
	</div>
	<div class="row">
		<div class="col-lg-6 px-5 mx-auto">
            <p class="os-400"><span class="h6 mont-700">Jul 1, 2022</span> All recordings are available on our <a href="https://youtube.com/playlist?list=PLU1vS0speL2aLakeh8x2v3HA5a2Oqa_P_" target="_blank">YouTube channel</a>! If you missed the keynote or any of the sessions check them out. Photos from DevConf.cz MINI are available <a target="_blank" href="https://photos.app.goo.gl/iCC8B2wH18a32RHQA">here</a>.</p> 
            <p class="os-400"><span class="h6 mont-700">May 5, 2022</span> <a href="https://www.eventbrite.com/e/devconfcz-mini-2022-tickets-208626797367" target="_blank">Registration</a> is open and <a target="_blank" href="https://devconfczmini2022.sched.com">Schedule</a> is live.</p>
            <p class="os-400"><span class="h6 mont-700">Apr 11, 2022</span> New local, in-person version of DevConf.CZ announced: DevConf.cz Mini</p>
            <p class="os-400"><span class="h6 mont-700">Feb 7, 2022</span> DevConf.CZ 2022 recordings are available on demand on our <a href="https://www.youtube.com/playlist?list=PLU1vS0speL2bf9Zfa0pHQLPBhEKbbbsua" target="_blank">YouTube channel</a></p>
            <p class="os-400"><span class="h6 mont-700">Jan 4, 2022</span> Call for Lightning Talks reopened. <a href="https://cfp.devconf.info" target="_blank">Submit a pre-recorded lightning talk</a> by Jan 14, 2022.</p>
			<p class="os-400"><span class="h6 mont-700">Jul 21, 2021</span> Join our <a href="https://discord.gg/devconf" target="_blank">Discord server</a> to connect with other attendees, speakers and organizers before the event.</p>
		</div>
		<div class="col-lg-4 px-5 mx-auto">
		        <form action="https://devconf.us5.list-manage.com/subscribe/post?u=ad2f341fc41f78b232f2765e6&id=acab0ee8de" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate px-2 py-3 bordered text-center" target="_blank" novalidate>
                    <div class="h3 mont-700">Sign up for newsletter</div>
                    <div class="mc-field-group">
                        <input type="email" value="" name="EMAIL" class="required email p-2" id="mce-EMAIL" placeholder="Email address">
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_25582686a9fc051afd5453557_189578c854" tabindex="-1" value=""></div>
                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="px-4 py-2 mont-400">
                    </div>
                </div>
            </form>
		</div>
	</div>
</section>
<!--	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-2 mx-auto">
			This is the list of booths you can expect at DevConf.CZ this year. Get ready for some stickers and so much more!
			<ul class="timeline timeline-centered pt-5">
			<?php

				$booths = array(
						array("name"=>"Base48","description"=>""),
						array("name"=>"Ceph","description"=>""),
						array("name"=>"Fedora","description"=>""),
						array("name"=>"Foreman","description"=>"Friday and Saturday only"),
						array("name"=>"Integration Platform for Cloud-Native Application Development","description"=>"Friday and Saturday only"),
						array("name"=>"Kubernetes OKD","description"=>""),
						array("name"=>"Kubernetes native CI/CD with Tekton pipelines","description"=>"Friday and Saturday only"),
						array("name"=>"Learn to make games with CircuitPython ","description"=>"Saturday only"),
						array("name"=>"ManageIQ/Ansible","description"=>"Friday and Saturday only"),
						array("name"=>"Mozilla.cz","description"=>"Saturday and Sunday only"),
						array("name"=>"Prometheus","description"=>"Friday and Saturday only"),
						array("name"=>"Pulp","description"=>""),
						array("name"=>"Python","description"=>""),
						array("name"=>"RDO Project","description"=>""),
						array("name"=>"Red Hat Brno 3D print and open hardware lab ","description"=>""),
						array("name"=>"Red Hat Neurodiversity Community","description"=>""),
						array("name"=>"Red Hat Research","description"=>"Friday and Saturday only"),
						array("name"=>"Red Hat Talent Acquisition","description"=>""),
						array("name"=>"The oVirt Project","description"=>""),
						array("name"=>"The search for usable documentation","description"=>""),
						array("name"=>"Ubuntu","description"=>""),
						array("name"=>"UXD/Patternfly","description"=>"Friday and Saturday only"),

					  );

				foreach($booths as $i=>$t){
					if($i%2 == 0){?>
				<li class="timeline-item">
					<div class="timeline-content-left">
						<div class="mont-600 timeline-title"><?php echo $t['name'];?></div>
						<p class="timeline-description os-400"><?php echo $t['description'];?></p>
					</div>
					<div class="timeline-marker"></div>
				<?php }else{ ?>
					<div class="timeline-content-right">
						<div class="mont-600 timeline-title"><?php echo $t['name'];?></div>
						<p class="timeline-description os-400"><?php echo $t['description'];?></p>
					</div>
				</li>
				<?php }
				}
				if(count($booths)%2 == 1){
					echo "</div></li>";
				}?>
			</ul>
		</div>
	</div>
</section>
<section id="schedule" class="mx-auto col-lg-12 background-gray text-center mt-5 pt-5">
	<div class="h1 mont-700 position-relative py-4 mt-3">Schedule</div>
	<a class="p-3 mont-700 mb-3 d-inline-block purple-href" target="_blank" href="https://devconfcz2022.sched.com/">SCHEDULE IS LIVE</a>
</section>
<section id="travel" class="mx-auto py-5 col-lg-11">
	<div class="row">
		<div class="mont-700 h1 underline position-relative mx-5 pb-4">How to get there?</div>
	</div>
	<div class="row py-4">
		<div class="col-xl-3 container card-body my-2 ml-xl-auto mr-xl-3" style="background: #ada3ff">
			<div class="row h-100 align-items-center">
				<div class="col text-center">
					<img src="/assets/images/travel-around.svg" class="my-4" alt="Getting around icon" style="height: 74px">
					<h2 class="mont-700 mb-0">Getting around Brno</h2>
					<div class="card-text os-400 pt-3">Brno has a 24 hour public transit system and the site is accessible by car.</div>
					<p class="card-text my-5">
						<a href="/cz/aroundbrno" class="border p-3 mont-700">MORE INFORMATION</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xl-3 container card-body my-2 mx-xl-3" style="background: #4a4a7e">
			<div class="row h-100 align-items-center">
				<div class="col text-center">
					<img src="/assets/images/way-to.svg" class="my-4" alt="Getting to icon" style="height: 74px">
					<h2 class="mont-700 pb-4">Getting to Brno</h2>
					<div class="card-text os-400 pt-4">Brno is easily accessible by car, bus, train and plane.</div>
					<p class="card-text my-5">
						<a href="/cz/tobrno" class="border p-3 mont-700">MORE INFORMATION</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xl-3 container card-body my-2 ml-xl-3 mr-xl-auto" style="background: #8e83e4">
			<div class="row h-100 align-items-center">
				<div class="col text-center">
					<img src="/assets/images/hotel.svg" class="my-4" alt="Hotel icon" style="height: 74px">
					<h2 class="mont-700 pb-4">Hotels</h2>
					<div class="card-text os-400 pt-4">Need a place to stay? We suggest these properties.</div>
					<p class="card-text my-5">
						<a href="/cz/hotels" class="border p-3 mont-700">MORE INFORMATION</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</section> -->
<section class="col-12 px-0 mt-5" style="height: 450px;" id="map">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2256.0277944515196!2d16.598010589157468!3d49.209899867172716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4712946af848abab%3A0xcbdad60137e0b956!2sFaculty%20of%20Informatics%20Masaryk%20University!5e0!3m2!1sen!2scz!4v1652788388079!5m2!1sen!2scz" loading="lazy" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>
@endsection

@include('_layouts.footercz')
