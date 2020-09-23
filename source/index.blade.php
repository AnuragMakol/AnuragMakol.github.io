@extends('_layouts.master')

@section('body')
<div class="doc-loader"></div>

<div class="container">
    <div class="page-wrapper">

        <!-- ================= HEADER ================= -->
        <div id="nav-btn" class="nav-btn">
            <span class="nav-btn-cover">
                <span class="menu-line"></span>                   
            </span>
        </div>
        <div class="s-nav">
            <div class="nav-count">
                <div class="current-num">
                    <span>01</span>
                </div>
                <div class="pagination-sep">/</div>
                <div class="total-pages-num">07</div>
            </div>                                                            
            <div class="nav-container">
                <a class="site-title slow-scroll" href="#home">JACOB HAWKINS</a>
                <nav class="nav-menu">
                    <ul class="nav-list">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>                                                                        
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <ul class="nav-soc">
                <li><a href="#">TW.</a></li>
                <li><a href="#">IN.</a></li>
                <li><a href="#">FB.</a></li>
            </ul>
        </div>
        <!-- =============== HEADER END =============== -->

        <!-- ================== HOME ================== -->
        <section id="home" class="section">
            <div class="container-wrap">                        
                <h1 class="entry-title" data-jarallax-element="0 30">Hello <br>I’m <span>Jacob Hawkins</span></h1>
                <img class="main-photo block-right" data-jarallax-element="0 -30" src="assets/images/photo-1.jpg" alt="">                        
                <a href="#services" class="main-btn slow-scroll"><img src="assets/images/scroll-icon.svg" alt=""></a>
            </div>
        </section>
        <!-- ================= HOME END ================= -->

        <!-- ================== SERVICES ================== -->
        <section id="services" class="section">

            <div class="content-670">
                <h2 class="title">SERVICES</h2>
                <div class="section-des">
                    Lorem ipsum dolor sit amet consectetu adipiscing elit viverra tristique placerat
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra tristique placerat in sat massa consectetur quisque. Nunc aces fames lectus in libero aliquet ertare feraso est lorem nunc dolor sit amet settera aces volutpat in voltare lupar est phasellus.
                </p>
                <p>
                    Faucibus sed tristique fames sed aliquet ultricies eget viverra arcu. Vitae faucibus diam consequat aecenas. Turpis metus sit diam purus leo in varius ac quam. Nunc amet tristique set volutpat <a href="#">estars adipiscing</a> vulputate est phasellus. Volutpat faucibus per praesent aced nuncare voltare per settera lorem ipsum dolor.
                </p>
            </div>

            <ul class="serv-link-cover block-right" data-jarallax-element="0 40">
                <li><a href="#">DOWNLOAD CV</a></li>
                <li><a href="#">MY PORTFOLIO</a></li>
            </ul>

            <div class="content-670">
                <div class="serv-block-wrap">

                    <div class="serv-block-item">
                        <img src="assets/images/serv-icon-1.svg" alt="">
                        <h4>DESIGN</h4>
                        <p>
                            A full stack allaround  designer that may or may not include a guide for specific createive
                        </p>
                    </div>

                    <div class="serv-block-item">
                        <img src="assets/images/serv-icon-2.svg" alt="">
                        <h4>DEVELOP</h4>
                        <p>
                            Tellus pharetra erat tristique erat donec dignissim etiam sed malesuada enim sodales
                        </p>
                    </div>

                    <div class="serv-block-item">
                        <img src="assets/images/serv-icon-3.svg" alt="">
                        <h4>WRITE</h4>
                        <p>
                            A full stack allaround  designer that may or may not include a guide for specific createive
                        </p>
                    </div>

                    <div class="serv-block-item">
                        <img src="assets/images/serv-icon-4.svg" alt="">
                        <h4>PROMOTE</h4>
                        <p>
                            Tellus pharetra erat tristique erat donec dignissim etiam sed malesuada enim sodales
                        </p>
                    </div>

                </div>
            </div>
        </section>
        <!-- ================ SERVICES END ================ -->

        <!-- ==================== ABOUT ==================== -->
        <section id="about" class="section">
            <h2 class="title">ABOUT</h2>
            <div class="section-des">
                Viverra tristique placerat  massa est consectetur quisque nu fames lorem ipsum dolor sit amet consectetu.
            </div>

            <div class="content-670">
                <p>
                    Dolor sit amet, consectetur adipiscing elit. Viverra tristique placerat in massa consectetur quisque. Nunc ac fames lectus in libero aliquet lorem ipsum dolor sit amet enim est urus tincidunt magna ut turpis eu, eu enim. Nisl porttitor elit risus velit urna morbi mauris.
                </p>
            </div>

            <img class="about-img block-right" data-jarallax-element="0 -40" src="assets/images/about-img.jpg" alt="">

            <ul class="about-info" data-threshold="0 0" data-jarallax-element="40 0">
                <li>
                    <h6>EMAIL</h6>
                    <a href="mailto:jackob@yourwebsite.com">jackob@yourwebsite.com</a>
                </li>
                <li>
                    <h6>ROLE</h6>
                    <span>Lead Designer</span>
                </li>
                <li>
                    <h6>PHONE</h6>
                    <a href="tel:+987987654321">(+987) 987 654 321</a>
                </li>
            </ul>

            <div class="about-text content-670">
                <p>
                    Nam ultrices ultrices nec tortor pulvinar fermentum mi. Sociis sit tristique sagittis, mauris volutpat estera phasellus. Varius nec orci, quam augue lorem lines pellentesque non id. Tristique amet volutpat nunc euismod. Mauris <a href="#">felis at quam</a> sollicitudin est sempe vulputate id in nullam. Purus tincidunt maga ut turpis eu, eu enim. Nisl porttitor elit risus velit urna morbit mauris at proin laoreet lobortis urna aliquam setera fermentum sit iaculis vitae hendrerit et. Arcu ac est dictum lorem ispum dolor sit amet nunc usrus seio.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra tristique placerat in sat massa consectetur quisque. Nunc aces fames lectus in libero aliquet ertare feraso est lorem nunc dolor sit amet settera aces volutpat in voltare lupar est phasellus.
                </p>
                <p>
                    Faucibus sed tristique fames sed aliquet ultricies eget viverra arcu. Vitae faucibus diam consequat aecenas. Turpis metus sit diam purus leo in varius ac quam. Nunc amet sei tristique set volutpat vulputate est phasellus. Volutpat faucibus per praesent aced no nuncare voltare per settera lorem ipsum dolor loboritas prion mauris varius est.
                </p>
            </div>

            <img class="signature" src="assets/images/signature.svg" alt="">

        </section>
        <!-- ================== ABOUT END ================== -->

        <!-- ==================== PORTFOLIO ==================== -->
        <section id="portfolio" class="section">
            <h2 class="title">PORTFOLIO</h2>
            <div class="section-des">
                Viverra tristique placerat  massa est consectetur quisque nu fames lorem ipsum dolor sit amet consectetu.
            </div>

            <div id="portfolio-wrapper" class="relative block-right">                        
                <div class="portfolio-load-content-holder"></div>
                <div class="grid" id="portfolio-grid">                                                            
                    <div class="grid-sizer"></div>

                    <div id="p-item-1" class="grid-item element-item p-one">
                        <a class="item-link ajax-portfolio" href="portfolio-1.html" data-id="1">
                            <img src="assets/images/portfolio1.jpg" alt="" />
                            <div class="portfolio-text-holder">
                                <div class="portfolio-text-wrapper">
                                    <p class="portfolio-text">Sneakers</p>
                                    <p class="portfolio-cat">Text</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div id="p-item-2" class="grid-item element-item p-one-half">
                        <a class="item-link ajax-portfolio" href="portfolio-2.html" data-id="2">
                            <img src="assets/images/portfolio2.jpg" alt="" />
                            <div class="portfolio-text-holder">
                                <div class="portfolio-text-wrapper">
                                    <p class="portfolio-text">Stairways</p>
                                    <p class="portfolio-cat">Text</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div id="p-item-3" class="grid-item element-item p-one-half">
                        <a class="item-link ajax-portfolio" href="portfolio-3.html" data-id="3">
                            <img src="assets/images/portfolio3.jpg" alt="" />
                            <div class="portfolio-text-holder">
                                <div class="portfolio-text-wrapper">
                                    <p class="portfolio-text">Nature</p>
                                    <p class="portfolio-cat">Text</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item element-item p-one-half">
                        <a class="item-link" href="https://vimeo.com/199192931" data-rel="prettyPhoto[portfolio]">
                            <img src="assets/images/portfolio4.jpg" alt="" />
                            <div class="portfolio-text-holder">
                                <div class="portfolio-text-wrapper">
                                    <p class="portfolio-text">Architecture</p>
                                    <p class="portfolio-cat">Video</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item element-item p-one">
                        <a class="item-link" href="images/item1.jpg" data-rel="prettyPhoto[portfolio]">
                            <img src="assets/images/portfolio5.jpg" alt="" />
                            <div class="portfolio-text-holder">
                                <div class="portfolio-text-wrapper">
                                    <p class="portfolio-text">Art</p>
                                    <p class="portfolio-cat">Image</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>                
            </div>   
        </section>
        <!-- ================== PORTFOLIO END ================== -->

        <!-- ==================== BLOG ==================== -->
        <section id="blog" class="section">
            <h2 class="title">BLOG</h2>
            <div class="section-des">
                Viverra tristique placerat  massa est consectetur quisque nu fames lorem
            </div>

            <ul class="home-blog-list">                        
                <li>
                    <a href="single-blog.html">The carbon in our apple pies vanquis</a>
                    <div class="blog-list-info">
                        <div class="date">MAR 25, 2021</div>
                        <div class="category">BRANDING</div>
                    </div>
                </li>

                <li>
                    <a href="single-blog.html">Perga white dwarf tesseract worldlets</a>
                    <div class="blog-list-info">
                        <div class="date">FEB 2, 2021</div>
                        <div class="category">ART</div>
                    </div>
                </li>

                <li>
                    <a href="single-blog.html">Network of wormholes astonishment</a>
                    <div class="blog-list-info">
                        <div class="date">NOV 13, 2020</div>
                        <div class="category">INTERIOR</div>
                    </div>
                </li>

                <li>
                    <a href="single-blog.html">Citizens of distant epochs van  apollonius</a>
                    <div class="blog-list-info">
                        <div class="date">AUG 7, 2020</div>
                        <div class="category">BUSINESS</div>
                    </div>
                </li>

                <li>
                    <a href="single-blog.html">Encyclopaedia galactica shores of cosmic</a>
                    <div class="blog-list-info">
                        <div class="date">JUN 16, 2020</div>
                        <div class="category">DESIGN</div>
                    </div>
                </li>                                                
            </ul>

        </section>
        <!-- ================== BLOG END ================== -->

        <!-- ================== SKILLS ================== -->
        <section id="skills" class="section">
            <h2 class="title">SKILLS</h2>
            <div class="section-des">
                Lorem ipsum dolor sit amet consectetu adipiscing elit viverra tristique placerat
            </div>
            <p class="content-670">
                Viverra tristique placerat in sat massa consectetur quisque. Nunc aces fames lectus in libero aliquet ertare feraso est lorem nunc dolor sit amet settera aces volutpat in voltare lupar est phasellus. Faucibus sed tristique fames sed aliquet ultricies eget viverra arcu.
            </p>

            <ul class="skills-history block-right">
                <li>
                    <span class="date">2016</span>
                    <p>
                        <strong>2015 - 2016</strong> placerat in massa consectetur quisque. Nunc ac fames lectus in libero aliquet est setera nunc.
                    </p>
                </li>

                <li>
                    <span class="date">2017</span>
                    <p>
                        <strong>2016 - 2017</strong> Turpis metus sit diam purus leo in variusquam. Nunc amet tristique volutpat adipiscing vulputate phasellus. Eget enim aliquam euismod mauris in vitae viverra blandit lectus diam feugiat.
                    </p>
                </li>

                <li>
                    <span class="date">2019</span>
                    <p>
                        <strong>2020 - 2021</strong> Nunc amet tristique volutpat adipiscing vulputate phasellus. Eget enim aliquam euismod.
                    </p>
                </li>

                <li>
                    <span class="date">2023</span>
                    <p>
                        <strong>2022 - 2026</strong> Eget enim aliquam euismod mauris in vitae viverra blandit lectus faucibus diam consequat maecenas turpis metus sit diam purus leo in varius.
                    </p>
                </li>
            </ul>

            <ul class="skills-progress">
                <li>
                    <span class="name">PHOTOSHOP</span>
                    <div class="skill">
                        <div class="skill-fill" data-fill="55%"></div>
                    </div>
                </li>

                <li>
                    <span class="name">ILLUSTRATOR</span>
                    <div class="skill">
                        <div class="skill-fill" data-fill="68%"></div>
                    </div>
                </li>

                <li>
                    <span class="name">MARKETING</span>
                    <div class="skill">
                        <div class="skill-fill" data-fill="80%"></div>
                    </div>
                </li>

                <li>
                    <span class="name">CREATIVITY</span>
                    <div class="skill">
                        <div class="skill-fill" data-fill="43%"></div>
                    </div>
                </li>

                <li>
                    <span class="name">AFFINITY</span>
                    <div class="skill">
                        <div class="skill-fill" data-fill="55%"></div>
                    </div>
                </li>

                <li>
                    <span class="name">LANGUAGES</span>
                    <div class="skill">
                        <div class="skill-fill" data-fill="68%"></div>
                    </div>
                </li>

                <li>
                    <span class="name">EDUCATION</span>
                    <div class="skill">
                        <div class="skill-fill" data-fill="80%"></div>
                    </div>
                </li>

                <li>
                    <span class="name">DEVELOPING</span>
                    <div class="skill">
                        <div class="skill-fill" data-fill="43%"></div>
                    </div>
                </li>
            </ul>

        </section>
        <!-- =============== SKILLS END =============== -->

        <!-- ==================== ABOUT ==================== -->
        <section id="contact" class="section">
            <h2 class="title">CONTACT</h2>
            <div class="section-des">
                Lorem ipsum dolor sit amet consectetu adipiscing elit viverra tristique placerat.
            </div>
            <div class="content-670">
                <p>
                    Dolor sit amet, consectetur adipiscing elit. Viverra tristique placerat in massa consectetur quisque. Nunc ac fames lectus in libero aliquet lorem ipsum dolor sit amet enim est urus tincidunt magna ut turpis eu, eu enim. Nisl porttitor elit risus velit urna morbi mauris.
                </p>
            </div>

            <a href="https://www.google.com/maps/place/Central+Park/@40.7828647,-73.9653551,15z/data=!4m5!3m4!1s0x0:0xb9df1f7387a94119!8m2!3d40.7828647!4d-73.9653551" target="_blank">
                <img class="block-right" src="assets/images/map.png" alt="">                    
            </a>

            <div class="content-670">
                <div class="contact-form">
                    <p>
                        <input id="name" type="text" name="your-name" placeholder="NAME">
                    </p>
                    <p>
                        <input id="contact-email" type="email" name="your-email" placeholder="EMAIL">
                    </p>                                    
                    <p>
                        <input id="subject" type="text" name="your-subject" placeholder="SUBJECT">
                    </p>
                    <p>
                        <textarea id="message" name="your-message" placeholder="MESSAGE"></textarea>
                    </p>
                    <p class="contact-submit-holder">
                        <input type="submit" value="SEND">
                    </p>                                
                </div> 
            </div>

        </section>
        <!-- ================== ABOUT END ================== -->
    </div>
</div>
@endsection
