<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon" />
    <title>AptonWorks</title>
    <link rel="stylesheet" href="./css/services.css" />
    <script
      src="https://kit.fontawesome.com/7b413757f9.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script type="text/javascript">
      window.$crisp = [];
      window.CRISP_WEBSITE_ID = '31456e04-b9f8-4876-9a25-0a7a36562f0c';
      (function () {
        d = document;
        s = d.createElement('script');
        s.src = 'https://client.crisp.chat/l.js';
        s.async = 1;
        d.getElementsByTagName('head')[0].appendChild(s);
      })();
    </script>
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-6Y3PP6TZ6G"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'G-6Y3PP6TZ6G');
    </script>
    <!-- Facebook Pixel Code -->
    <script>
      !(function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
          n.callMethod
            ? n.callMethod.apply(n, arguments)
            : n.queue.push(arguments);
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s);
      })(
        window,
        document,
        'script',
        'https://connect.facebook.net/en_US/fbevents.js'
      );
      fbq('init', '957713108942338');
      fbq('track', 'PageView');
    </script>
    <noscript>
      <img
        height="1"
        width="1"
        src="https://www.facebook.com/tr?id=957713108942338&ev=PageView&noscript=1"
      />
    </noscript>
    <!-- End Facebook Pixel Code -->
  </head>

  <body>
    <nav>
      <article class="article">
        <div class="nav-header">
          <a href="/" class="link-header">
            <img class="logo" src="./assets/logo.png" alt="logo" />
          </a>
          <button id="myButton">=</button>

          <div id="content" class="hidden">
            <ul>
              <li>
                <a href="./about.html">About Us</a>
              </li>
              <li>
                <a href="./services.html">Services</a>
              </li>
              <li>
                <a href="./digital-solutions.html">Solutions</a>
              </li>
              <li>
                <a href="./blog.html">Blog</a>
              </li>
              <li>
                <a href="./industries.html">Industries</a>
              </li>
              <li>
                <a href="./contact.html">Contact Us</a>
              </li>
            </ul>
            <ul>
              <li>
                <div class="dropdown-link" id="link1">
                  <span>
                    Design Services
                    <i class="fas fa-chevron-down"></i>
                  </span>
                </div>
                <div class="dropdown-menu" id="menu1">
                  <div class="menu-card">
                    <div class="article">
                      <div class="design-card-left menu-card-left"></div>
                      <div class="design-card-right"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="dropdown-link" id="link2">
                  <span>
                    Development
                    <i class="fas fa-chevron-down"></i>
                  </span>
                </div>
                <div class="dropdown-menu" id="menu2">
                  <div class="menu-card">
                    <div class="article">
                      <div
                        id="develope-card-left"
                        class="develope-card-left menu-card-left"
                      ></div>
                      <div class="develope-card-right"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="dropdown-link" id="link3">
                  <span>
                    Cloud & DevOps
                    <i class="fas fa-chevron-down"></i>
                  </span>
                </div>
                <div class="dropdown-menu" id="menu3">
                  <div class="menu-card">
                    <div class="article">
                      <div
                        id="cloudDevops-card-left"
                        class="cloudDevops-card-left menu-card-left"
                      ></div>
                      <div class="cloudDevops-card-right"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="dropdown-link" id="link4">
                  <span>
                    Data Services
                    <i class="fas fa-chevron-down"></i>
                  </span>
                </div>
                <div class="dropdown-menu" id="menu4">
                  <div class="menu-card">
                    <div class="article">
                      <div
                        id="dataServices-card-left"
                        class="dataServices-card-left menu-card-left"
                      ></div>
                      <div class="dataServices-card-right"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="dropdown-link" id="link5">
                  <span>
                    Digital Marketing
                    <i class="fas fa-chevron-down"></i>
                  </span>
                </div>
                <div class="dropdown-menu" id="menu5">
                  <div class="menu-card">
                    <div class="article">
                      <div
                        id="digital-card-left"
                        class="digital-card-left menu-card-left"
                      ></div>
                      <div class="digital-card-right"></div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <a href="./contact.html" class="nav-contact">
            <button type="button" class="submit">Contact Us</button>
          </a>
        </div>
      </article>
    </nav>

    <!-- <div class="container1">
      <article>
        <h2 class="gradient-text">Services that Drive Results</h2>
        <p>
          Digital business solutions to help your business grow and succeed
          online. Our services are designed to meet the unique needs of each
          client, and we pride ourselves on delivering high-quality solutions
          that exceed expectations.
        </p>
      </article>
    </div> -->

    <div class="section container2">
      <article>
        <div class="card section1">
          <div class="card-img">
            <img src="../../assets/services/img1.png" alt="" />
          </div>
          <div class="card-details">
            <h2>Design Services</h2>
            <p>
              Our Design Services team has years of experience in creating
              visually appealing designs that help businesses stand out online.
              From logos to websites, our team can create stunning visuals that
              are tailored to your business needs and goals.
            </p>
            <div id="dropdown">
              <div class="dropdown-card">
                <div class="card-header">
                  <h2>What is the process for designing a logo?</h2>
                  <i class="fas fa-chevron-down"></i>
                </div>
                <p>
                  Our team will work closely with you to understand your brand's
                  identity and vision. We'll create a few initial design
                  concepts for you to review, and then work with you to refine
                  and finalize the design until you are completely satisfied.
                </p>
              </div>
              <div class="dropdown-card">
                <div class="card-header">
                  <h2>How long does it take to design a website?</h2>
                  <i class="fas fa-chevron-down"></i>
                </div>
                <p>
                  Our team will work closely with you to understand your brand's
                  identity and vision. We'll create a few initial design
                  concepts for you to review, and then work with you to refine
                  and finalize the design until you are completely satisfied.
                </p>
              </div>
              <div class="dropdown-card">
                <div class="card-header">
                  <h2>
                    Can you design marketing materials other than brochures and
                    flyers?
                  </h2>
                  <i class="fas fa-chevron-down"></i>
                </div>
                <p class="card-content">
                  Our team will work closely with you to understand your brand's
                  identity and vision. We'll create a few initial design
                  concepts for you to review, and then work with you to refine
                  and finalize the design until you are completely satisfied.
                </p>
              </div>
              <div class="dropdown-card">
                <div class="card-header">
                  <h2>How involved will I be in the design process?</h2>
                  <i class="fas fa-chevron-down"></i>
                </div>
                <p>
                  Our team will work closely with you to understand your brand's
                  identity and vision. We'll create a few initial design
                  concepts for you to review, and then work with you to refine
                  and finalize the design until you are completely satisfied.
                </p>
              </div>
              <div class="dropdown-card">
                <div class="card-header">
                  <h2>
                    Can you help me update my existing logo or website design?
                  </h2>
                  <i class="fas fa-chevron-down"></i>
                </div>
                <p>
                  Our team will work closely with you to understand your brand's
                  identity and vision. We'll create a few initial design
                  concepts for you to review, and then work with you to refine
                  and finalize the design until you are completely satisfied.
                </p>
              </div>
            </div>
            <img src="../../assets/services/arrow1.png" alt="" class="Arrow1" />
          </div>
        </div>
        <div class="card section1">
          <div class="card-img">
            <img src="../../assets/services/img2.png" alt="" />
          </div>
          <div class="card-details">
            <h2>Development Services</h2>
            <p>
              Our Development Services team has extensive experience in building
              custom software solutions that are tailored to your business
              needs. We offer a wide range of development services, including
              desktop and mobile application development, web application
              development, and web3 application development.
            </p>
            <div id="dropdown">
              <div class="dropdown-card2">
                <div class="card-header">
                  <h2>What is the process for developing a web application?</h2>
                  <i class="fas fa-chevron-down"></i>
                </div>
                <p>
                  Our team will work closely with you to understand your
                  business needs and goals. We'll create a detailed project plan
                  that outlines the development process and timeline. We'll keep
                  you updated throughout the process and make sure the web
                  application meets your expectations.
                </p>
              </div>
              <div class="dropdown-card2">
                <div class="card-header">
                  <h2>
                    Can you integrate our existing software with the new
                    software solution?
                  </h2>
                  <i class="fas fa-chevron-down"></i>
                </div>
                <p>
                  Yes, our team can integrate your existing software with the
                  new software solution to ensure a seamless transition. Just
                  let us know what you need and we'll create a customized
                  solution that meets your specific requirements.
                </p>
              </div>
              <div class="dropdown-card2">
                <div class="card-header">
                  <h2>
                    How long does it take to develop a mobile or web
                    application?
                  </h2>
                  <i class="fas fa-chevron-down"></i>
                </div>
                <p>
                  The timeline for developing a mobile or web application can
                  vary depending on the complexity of the project. Our team will
                  work with you to understand your business needs and goals, and
                  we'll provide you with an estimated timeline for the project.
                </p>
              </div>
              <div class="dropdown-card2">
                <div class="card-header">
                  <h2>
                    How do you ensure the quality of the software you develop?
                  </h2>
                  <i class="fas fa-chevron-down"></i>
                </div>
                <p>
                  We follow a comprehensive testing and quality assurance
                  process to ensure that the software we develop meets our
                  clients' requirements and performs reliably. We use a
                  combination of manual and automated testing techniques to
                  identify and resolve issues early in the development process.
                  Our team also performs code reviews and uses the latest
                  development methodologies and technologies to ensure that our
                  software is of the highest quality.
                </p>
              </div>
              <div class="dropdown-card2">
                <div class="card-header">
                  <h2>
                    Do you provide ongoing maintenance and support for
                    applications?
                  </h2>
                  <i class="fas fa-chevron-down"></i>
                </div>
                <p>
                  Yes, we provide ongoing maintenance and support for all
                  applications we develop. We offer different levels of support
                  packages depending on your business needs and goals.
                </p>
              </div>
            </div>
            <img src="../../assets/services/arrow2.png" alt="" class="Arrow" />
          </div>
        </div>
        <div class="card section1">
          <div class="card-img">
            <img src="../../assets/services/img3.png" alt="" />
          </div>
          <div class="card-details">
            <h2>Digital Marketing Services</h2>
            <p>
              Our Marketing Services team has extensive experience in helping
              businesses reach their target audience and drive conversions
              through digital marketing. We offer a wide range of services
              including branding, content marketing, SEO, e-mail marketing,
              performance marketing, influencer marketing, social media
              marketing, and WhatsApp marketing.
            </p>
            <div id="dropdown">
              <div class="dropdown-card3">
                <div class="card-header">
                  <h2>How can social media marketing benefit my business?</h2>
                  <i class="fas fa-chevron-down"></i>
                </div>
                <p>
                  Social media marketing can help your business reach a wider
                  audience, engage with your customers, and drive conversions.
                  Our team will create a social media strategy that aligns with
                  your business goals and resonates with your target audience.
                </p>
              </div>
              <div class="dropdown-card3">
                <div class="card-header">
                  <h2>How long does it take to see results from SEO?</h2>
                  <i class="fas fa-chevron-down"></i>
                </div>
                <p>
                  The timeline for seeing results from SEO depends on a variety
                  of factors including the competitiveness of your industry and
                  the specific keywords you are targeting. Our team will provide
                  an estimated timeline at the beginning of the project and work
                  diligently to improve your website's ranking on search
                  engines.
                </p>
              </div>
              <div class="dropdown-card3">
                <div class="card-header">
                  <h2>
                    How can e-mail marketing help my business build customer
                    loyalty?
                  </h2>
                  <i class="fas fa-chevron-down"></i>
                </div>
                <p>
                  E-mail marketing can help you build relationships with your
                  customers by providing them with valuable information and
                  special offers. Our team will create an e-mail marketing
                  strategy that drives conversions and builds customer loyalty.
                </p>
              </div>
              <div class="dropdown-card3">
                <div class="card-header">
                  <h2>
                    How do you measure the success of digital marketing
                    campaigns?
                  </h2>
                  <i class="fas fa-chevron-down"></i>
                </div>
                <p>
                  We measure the success of digital marketing campaigns using a
                  variety of metrics, including website traffic, conversions,
                  engagement, and ROI. We provide our clients with regular
                  reports to track progress and identify areas for improvement.
                </p>
              </div>
              <div class="dropdown-card3">
                <div class="card-header">
                  <h2>
                    How do you determine the best digital marketing strategy for
                    my business?
                  </h2>
                  <i class="fas fa-chevron-down"></i>
                </div>
                <p>
                  We use a data-driven approach to determine the best digital
                  marketing strategy for your business. Our team will conduct
                  research and analysis to understand your target audience and
                  competition, and we'll develop a customized strategy that is
                  tailored to your unique business needs and goals.
                </p>
              </div>
            </div>
          </div>
          <!-- <img
            src="../assets/how it works/arrow1.png"
            alt=""
            class="arrow1-img" /> -->
        </div>
      </article>
    </div>

    <div>
      <article class="article">
        <div class="contact-banner">
          <h2>
            Contact us to learn more about how our Services can help your
            business succeed in the digital world.
          </h2>
          <img src="./assets/services/round-arrow.png" alt="" class="Arrow" />
          <div>
            <img
              src="../../assets/services/btn-top.png"
              alt=""
              class="btn-img"
            />
            <a href="./contact.html"
              ><button class="submit">Lets Talk</button></a
            >
            <img
              src="../../assets/services/btn-bottom.png "
              alt=""
              class="btn-img"
            />
          </div>
        </div>
      </article>
    </div>

    <footer>
      <div class="footer-bottom">
        <article>
          <div class="social">
            <a href="/" target="_blank" rel="noopener">
              <img src="./assets/logo.png" alt="" />
            </a>
            <div class="social-icon">
              <a
                href="https://www.facebook.com/profile.php?id=100069519107178"
                target="_blank"
                rel="noopener"
              >
                <i class="fa fa-facebook"></i>
              </a>
              <a
                href="https://in.linkedin.com/company/apton-works-private-limited"
                target="_blank"
                rel="noopener"
              >
                <i class="fa fa-linkedin-square"></i>
              </a>
              <a
                href="https://twitter.com/Aptonworks1"
                target="_blank"
                rel="noopener"
              >
                <i class="fa fa-twitter"></i>
              </a>
              <a
                href="https://www.instagram.com/aptonworks_official/"
                target="_blank"
                rel="noopener"
              >
                <i class="fa fa-instagram"></i>
              </a>
            </div>
          </div>
          <div class="footer-list">
            <div class="lists">
              <h6>About AptonWorks</h6>
              <ul>
                <li><a href="./about.html">About Us</a></li>
                <li>
                  <a href="./digital-solutions.html">Solutions</a>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li>
                  <a href="./industries.html">Industries</a>
                </li>
                <li>
                  <a href="./contact.html">Contact Us</a>
                </li>
                <li>
                  <a href="./abs/terms-and-conditions.html"
                    >Terms and conditions</a
                  >
                </li>
                <li>
                  <a href="./abs/privacy-policy.html">Privacy policy</a>
                </li>
              </ul>
            </div>
            <div class="lists">
              <h6>Services</h6>
              <ul>
                <li>
                  <a href="./design-services.html">Design Services</a>
                </li>
                <li>
                  <a href="./development-services.html">Development Services</a>
                </li>
                <li>
                  <a href="./cloud-and-devops-services.html"
                    >Cloud & DevOps Services</a
                  >
                </li>
                <li>
                  <a href="./data-services.html">Data Services</a>
                </li>
                <li>
                  <a href="./digital-services.html"
                    >Digital Marketing Services</a
                  >
                </li>
              </ul>
            </div>
            <div class="lists">
              <h6>Get weekly updates</h6>
              <div>
                <input
                  type="email"
                  placeholder="Email address"
                  id="subscribe-mail"
                  required
                />

                <button class="submit" button id="subscribe">
                  Subscribe Now
                </button>
              </div>
            </div>
          </div>
        </article>
      </div>
      <div class="copy-rights">
        <p>Copyright © 2023 Aptonworks. All Rights Reserved.</p>
      </div>
    </footer>

    <script src="js/index.js"></script>
    <script src="./js/default.js"></script>
    <script src="./js/services.js"></script>
  </body>
</html>