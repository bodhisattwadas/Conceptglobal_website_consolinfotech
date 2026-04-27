<?php 
$page_title = 'Frequently Asked Questions | Concept Global IT'; 
$meta_description = 'Find answers to common questions about our IT services, project timelines, custom solutions, and support.'; 
$meta_keywords = 'FAQ, frequently asked questions, IT services FAQ, Concept Global IT support'; 
include 'header.php'; 
?>								
		
		<!-- START SECTION TOP -->
		<section class="section-top" style="background-image: url(assets/img/bg/section-top.png);background-size:cover; background-position: center center;">
			<div class="container">
				<div class="row">
				  <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
					<div class="section-top-title">
						<h1>Frequently Asked Questions</h1>		
					</div>
				  </div><!--- END COL -->				  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END SECTION TOP -->

		<!-- START FAQ -->
		<section id="faq" class="faq1-area section-padding">
			<div class="container">
				<div class="section-title text-center">
					<h2>Find Your Answers Here</h2>
					<p>Have questions about our process, services, or support? We've compiled answers to the most common inquiries below.</p>
				</div>				
				<div class="row">					
					<div class="col-lg-10 offset-lg-1 col-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                        <div class="faq-tab-content tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="development" role="tabpanel">
                                <div class="faq_tab" id="accordion_1">
                                    <div class="card active">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">1. What services do you offer?</button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion_1">
                                            <div class="card-body">
                                                We provide end-to-end digital solutions including website design and development, web applications, mobile app development, UI/UX design, and digital marketing services. Our goal is to help businesses establish and grow their digital presence.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">2. How long does it take to complete a project?</button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion_1">
                                            <div class="card-body">
                                                Project timelines depend on the scope and complexity. A standard website may take 2–4 weeks, while custom applications or large platforms may take several months.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">3. Do you provide custom software solutions?</button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
                                            <div class="card-body">
                                                Yes. We specialize in building custom web and mobile applications tailored to your business requirements, workflows, and scalability needs.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">4. Will my website be mobile-friendly?</button>
                                            </h5>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordion_1">
                                            <div class="card-body">
                                                Absolutely. All our solutions are built with responsive design to ensure seamless performance across mobile, tablet, and desktop devices.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFive">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">5. Do you offer post-launch support?</button>
                                            </h5>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordion_1">
                                            <div class="card-body">
                                                Yes. We provide ongoing maintenance, updates, and technical support to ensure your product continues to perform optimally.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingSix">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">6. Can you help improve my existing website?</button>
                                            </h5>
                                        </div>
                                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-bs-parent="#accordion_1">
                                            <div class="card-body">
                                                Yes. We offer redesign, performance optimization, SEO improvements, and feature upgrades for existing platforms.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div><!-- END COL  -->					
				</div><!--END  ROW  -->
			</div><!-- END CONTAINER  -->
		</section>
		<!-- END FAQ -->
		
		<?php include 'footer.php'; ?>
