@extends('_layouts.master')

@section('body')
<section id="intro">   
   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">
   			<div class="col-twelve">
	   			<h5>Hello, World.</h5>
	   			<h1>{{ $page->title }}</h1>
	   			<p class="intro-position">
	   				@foreach($page->stacks as $stack)
					<span>{{ $stack }}</span>
					@endforeach
	   			</p>
	   			<a class="button stroke smoothscroll" href="#about" title="">More About Me</a>
	   		</div>     		
   		</div>   		 		
   	</div> 

    <ul class="intro-social">        
        <li><a href="{{ $page->linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
    </ul>     	 
</section>

<section id="about">
	<div class="row section-intro">
		<div class="col-twelve">
			<h5>About</h5>
			<h1>Let me introduce myself.</h1>
			<div class="intro-info">
				<img src="assets/images/profile-pic.jpg" alt="Profile Picture">
				<p class="lead">Lorem ipsum Exercitation culpa qui dolor consequat exercitation fugiat laborum ex ea eiusmod ad do aliqua occaecat nisi ad irure sunt id pariatur Duis laboris amet exercitation veniam labore consectetur ea id quis eiusmod.</p>
			</div>
		</div>
	</div>
	<div class="row about-content">
		<div class="col-six tab-full">
			<h3>Profile</h3>
			<p>Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia consectetur nisi commodo ea magna pariatur nisi cillum.</p>
			<ul class="skill-bars">
				<li>
					<div class="progress percent90"><span>90%</span></div>
					<strong>HTML5</strong>
				</li>
				<li>
					<div class="progress percent85"><span>85%</span></div>
					<strong>CSS3</strong>
				</li>
				<li>
					<div class="progress percent70"><span>70%</span></div>
					<strong>JQuery</strong>
				</li>
				<li>
					<div class="progress percent95"><span>95%</span></div>
					<strong>PHP</strong>
				</li>
				<li>
					<div class="progress percent75"><span>75%</span></div>
					<strong>Wordpress</strong>
				</li>
			</ul>
		</div>
		<div class="col-six tab-full">
			<h3>Skills</h3>
			<p>Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia consectetur nisi commodo ea magna pariatur nisi cillum.</p>
			<ul class="skill-bars">
				<li>
					<div class="progress percent90"><span>90%</span></div>
					<strong>HTML5</strong>
				</li>
				<li>
					<div class="progress percent85"><span>85%</span></div>
					<strong>CSS3</strong>
				</li>
				<li>
					<div class="progress percent70"><span>70%</span></div>
					<strong>JQuery</strong>
				</li>
				<li>
					<div class="progress percent95"><span>95%</span></div>
					<strong>PHP</strong>
				</li>
				<li>
					<div class="progress percent75"><span>75%</span></div>
					<strong>Wordpress</strong>
				</li>
			</ul>
		</div>
	</div>
	<div class="row button-section">
		<div class="col-twelve">
			<a href="{{ $page->upwork }}" target="_blank" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
			<a href="{{ $page->resume }}" target="_blank" title="Download CV" class="button button-primary">Download CV</a>
		</div>
	</div>
</section>

<section id="resume" class="grey-section">
	<div class="row section-intro">
		<div class="col-twelve">
			<h5>Resume</h5>
			<h1>More of my credentials.</h1>
			<p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>
		</div>
	</div>
	<div class="row resume-timeline">
		<div class="col-twelve resume-header">
			<h2>Work Experience</h2>
		</div>
		<div class="col-twelve">
			<div class="timeline-wrap">
				<div class="timeline-block">
					<div class="timeline-ico">
						<i class="fa fa-graduation-cap"></i>
					</div>
					<div class="timeline-header">
						<h3>UI Designer</h3>
						<p>July 2015 - Present</p>
					</div>
					<div class="timeline-content">
						<h4>Awesome Studio</h4>
						<p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
					</div>
				</div>
				<div class="timeline-block">
					<div class="timeline-ico">
						<i class="fa fa-graduation-cap"></i>
					</div>
					<div class="timeline-header">
						<h3>Front-end Developer</h3>
						<p>July 2014 - June 2015</p>
					</div>
					<div class="timeline-content">
						<h4>Super Cool Agency</h4>
						<p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
					</div>
				</div>
				<div class="timeline-block">
					<div class="timeline-ico">
						<i class="fa fa-graduation-cap"></i>
					</div>
					<div class="timeline-header">
						<h3>Web Designer</h3>
						<p>May 2013 - June 2014</p>
					</div>
					<div class="timeline-content">
						<h4>Great Designs Studio</h4>
						<p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row resume-timeline">
		<div class="col-twelve resume-header">
			<h2>Education</h2>
		</div>
		<div class="col-twelve">
			<div class="timeline-wrap">
				<div class="timeline-block">
					<div class="timeline-ico">
						<i class="fa fa-briefcase"></i>
					</div>
					<div class="timeline-header">
						<h3>Master Degree</h3>
						<p>July 2015 - Present</p>
					</div>
					<div class="timeline-content">
						<h4>University of Life</h4>
						<p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
					</div>
				</div>
				<div class="timeline-block">
					<div class="timeline-ico">
						<i class="fa fa-briefcase"></i>
					</div>
					<div class="timeline-header">
						<h3>Bachelor Degree</h3>
						<p>July 2014 - June 2015</p>
					</div>
					<div class="timeline-content">
						<h4>State Design University</h4>
						<p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
					</div>
				</div>
				<div class="timeline-block">
					<div class="timeline-ico">
						<i class="fa fa-briefcase"></i>
					</div>
					<div class="timeline-header">
						<h3>Bachelor Degree</h3>
						<p>May 2013 - June 2014</p>
					</div>
					<div class="timeline-content">
						<h4>Design College</h4>
						<p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="portfolio">
	<div class="row section-intro">
		<div class="col-twelve">
			<h5>Portfolio</h5>
			<h1>Check Out Some of My Works.</h1>
			<p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>
		</div>
	</div>
	<div class="row portfolio-content">
		<div class="col-twelve">
			<div id="folio-wrapper" class="block-1-2 block-mob-full stack">
				<div class="bgrid folio-item">
					<div class="item-wrap">
						<img src="assets/images/portfolio/liberty.jpg" alt="Liberty">
						<a href="#modal-01" class="overlay">
							<div class="folio-item-table">
								<div class="folio-item-cell">
									<h3 class="folio-title">Liberty</h3>
									<span class="folio-types">
									Graphic Design
									</span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="bgrid folio-item">
					<div class="item-wrap">
						<img src="assets/images/portfolio/shutterbug.jpg" alt="Shutterbug">
						<a href="#modal-02" class="overlay">
							<div class="folio-item-table">
								<div class="folio-item-cell">
									<h3 class="folio-title">Shutterbug</h3>
									<span class="folio-types">
									Web Design
									</span>		     		
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="bgrid folio-item">
					<div class="item-wrap">
						<img src="assets/images/portfolio/clouds.jpg"alt="Clouds">
						<a href="#modal-03" class="overlay">
							<div class="folio-item-table">
								<div class="folio-item-cell">
									<h3 class="folio-title">Clouds</h3>
									<span class="folio-types">
									Web Design
									</span>		     		
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="bgrid folio-item">
					<div class="item-wrap">
						<img src="assets/images/portfolio/beetle.jpg" alt="Beetle">
						<a href="#modal-04" class="overlay">
							<div class="folio-item-table">
								<div class="folio-item-cell">
									<h3 class="folio-title">Beetle</h3>
									<span class="folio-types">
									Branding
									</span>		     		
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="bgrid folio-item">
					<div class="item-wrap">
						<img src="assets/images/portfolio/lighthouse.jpg" alt="Lighthouse">
						<a href="#modal-05" class="overlay">
							<div class="folio-item-table">
								<div class="folio-item-cell">
									<h3 class="folio-title">Lighthouse</h3>
									<span class="folio-types">
									Web Development
									</span>		     		
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="bgrid folio-item">
					<div class="item-wrap">
						<img src="assets/images/portfolio/salad.jpg" alt="Salad">
						<a href="#modal-06" class="overlay">
							<div class="folio-item-table">
								<div class="folio-item-cell">
									<h3 class="folio-title">Salad</h3>
									<span class="folio-types">
									Branding
									</span>		     		
								</div>
							</div>
						</a>
					</div>
				</div>
				<div id="modal-01" class="popup-modal slider mfp-hide">
					<div class="media">
						<img src="assets/images/portfolio/modals/m-liberty.jpg" alt="" />
					</div>
					<div class="description-box">
						<h4>Liberty</h4>
						<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
						<div class="categories">Web Development</div>
					</div>
					<div class="link-box">
						<a href="http://www.behance.net">Details</a>
						<a href="#" class="popup-modal-dismiss">Close</a>
					</div>
				</div>
				<div id="modal-02" class="popup-modal slider mfp-hide">
					<div class="media">
						<img src="assets/images/portfolio/modals/m-shutterbug.jpg" alt="" />
					</div>
					<div class="description-box">
						<h4>Shutterbug</h4>
						<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
						<div class="categories">Web Design</div>
					</div>
					<div class="link-box">
						<a href="http://www.behance.net">Details</a>
						<a href="#" class="popup-modal-dismiss">Close</a>
					</div>
				</div>
				<div id="modal-03" class="popup-modal slider mfp-hide">
					<div class="media">
						<img src="assets/images/portfolio/modals/m-clouds.jpg" alt="" />
					</div>
					<div class="description-box">
						<h4>Clouds</h4>
						<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
						<div class="categories">Web Design</div>
					</div>
					<div class="link-box">
						<a href="http://www.behance.net">Details</a>
						<a href="#" class="popup-modal-dismiss">Close</a>
					</div>
				</div>
				<div id="modal-04" class="popup-modal slider mfp-hide">
					<div class="media">
						<img src="assets/images/portfolio/modals/m-beetle.jpg" alt="" />
					</div>
					<div class="description-box">
						<h4>Beetle</h4>
						<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
						<div class="categories">Branding</div>
					</div>
					<div class="link-box">
						<a href="http://www.behance.net">Details</a>
						<a href="#" class="popup-modal-dismiss">Close</a>
					</div>
				</div>
				<div id="modal-05" class="popup-modal slider mfp-hide">
					<div class="media">
						<img src="assets/images/portfolio/modals/m-lighthouse.jpg" alt="" />
					</div>
					<div class="description-box">
						<h4>Lighthouse</h4>
						<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
						<div class="categories">Web Development</div>
					</div>
					<div class="link-box">
						<a href="http://www.behance.net">Details</a>
						<a href="#" class="popup-modal-dismiss">Close</a>
					</div>
				</div>
				<div id="modal-06" class="popup-modal slider mfp-hide">
					<div class="media">
						<img src="assets/images/portfolio/modals/m-salad.jpg" alt="" />
					</div>
					<div class="description-box">
						<h4>Salad</h4>
						<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
						<div class="categories">Branding</div>
					</div>
					<div class="link-box">
						<a href="http://www.behance.net">Details</a>
						<a href="#" class="popup-modal-dismiss">Close</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="services">
	<div class="overlay"></div>
	<div class="row section-intro">
		<div class="col-twelve">
			<h5>Services</h5>
			<h1>What Can I Do For You?</h1>
			<p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>
		</div>
	</div>
	<div class="row services-content">
		<div id="owl-slider" class="owl-carousel services-list">
			<div class="service">
				<span class="icon"><i class="icon-earth"></i></span>            
				<div class="service-content">
					<h3>Webdesign</h3>
					<p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
					</p>
				</div>
			</div>
			<div class="service">
				<span class="icon"><i class="icon-window"></i></span>                          
				<div class="service-content">
					<h3>Web Development</h3>
					<p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
					</p>
				</div>
			</div>
			<div class="service">
				<span class="icon"><i class="icon-paint-brush"></i></span>		            
				<div class="service-content">
					<h3>Branding</h3>
					<p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
					</p>
				</div>
			</div>
			<div class="service">
				<span class="icon"><i class="icon-toggles"></i></span>	              
				<div class="service-content">
					<h3>UI/UX Design</h3>
					<p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
					</p>
				</div>
			</div>
			<div class="service">
				<span class="icon"><i class="icon-image"></i></span>	            
				<div class="service-content">
					<h3>Graphics Design</h3>
					<p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
					</p>
				</div>
			</div>
			<div class="service">
				<span class="icon"><i class="icon-chat"></i></span>	   	           
				<div class="service-content">
					<h3>Consultancy</h3>
					<p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="stats" class="count-up">
	<div class="row">
		<div class="col-twelve">
			<div class="block-1-4 block-s-1-2 block-tab-1-2 block-mob-full stats-list">
				<div class="bgrid stat">
					<div class="icon-part">
						<i class="icon-pencil-ruler"></i>
					</div>
					<h3 class="stat-count">
						1500
					</h3>
					<h5 class="stat-title">
						Projects Completed
					</h5>
				</div>
				<div class="bgrid stat">
					<div class="icon-part">
						<i class="icon-users"></i>
					</div>
					<h3 class="stat-count">
						900
					</h3>
					<h5 class="stat-title">
						Happy Clients
					</h5>
				</div>
				<div class="bgrid stat">
					<div class="icon-part">
						<i class="icon-light-bulb"></i>
					</div>
					<h3 class="stat-count">
						120
					</h3>
					<h5 class="stat-title">
						Crazy Ideas
					</h5>
				</div>
				<div class="bgrid stat">
					<div class="icon-part">
						<i class="icon-clock"></i>
					</div>
					<h3 class="stat-count">
						7200
					</h3>
					<h5 class="stat-title">
						Hours
					</h5>
				</div>
			</div>
		</div>
	</div>
</section>
	
<section id="contact">
	<div class="row section-intro">
		<div class="col-twelve">
			<h5>Contact</h5>
			<h1>I'd Love To Hear From You.</h1>
			<p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>
		</div>
	</div>

	<div class="row contact-form">
		<div class="col-twelve">
			<form name="contactForm" id="contactForm" method="post" action="">
				<fieldset>
					<div class="form-field">
						<input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
					</div>
					<div class="form-field">
						<input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
					</div>
					<div class="form-field">
						<input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
					</div>
					<div class="form-field">
						<textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
					</div>
					<div class="form-field">
						<button class="submitform">Submit</button>
						<div id="submit-loader">
							<div class="text-loader">Sending...</div>
							<div class="s-loader">
								<div class="bounce1"></div>
								<div class="bounce2"></div>
								<div class="bounce3"></div>
							</div>
						</div>
					</div>
				</fieldset>
			</form>
			<div id="message-warning"></div>
			<div id="message-success">
				<i class="fa fa-check"></i>Your message was sent, thank you!<br>
			</div>
		</div>
	</div>

	<div class="row contact-info">
		<div class="col-four tab-full collapse">
			<div class="icon">
				<i class="icon-mail"></i>
			</div>
			<h5>Email Me At</h5>
			<p>{{ $page->email }}</p>
		</div>
		<div class="col-four tab-full">
			<div class="icon">
				<i class="icon-pin"></i>
			</div>
			<h5>Where to find me</h5>
			<ul class="footer-social">        
				<li><a href="{{ $page->linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
			</ul>    
		</div>
		<div class="col-four tab-full">
			<div class="icon">
				<i class="icon-phone"></i>
			</div>
			<h5>Call Me At</h5>
			<p>Phone: {{ $page->phone }}</p>
		</div>
	</div>

	<div id="go-top">
        <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
	</div>
</section>

<div id="preloader"> 
    <div id="loader"></div>
</div> 

@endsection