<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description; ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <script src="/js/main.js"></script>
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/icofont.min.css">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-VM6TFC6X9N"></script> -->
        <script>
        // Load Google analytics
        if (localStorage.getItem("cookieAccepted") !== null) {
          let script = document.createElement('script');
	        script.setAttribute("src","https://www.googletagmanager.com/gtag/js?id=G-VM6TFC6X9N");
          script.setAttribute("async", "async");
	        let ref = document.querySelector('script');
	        ref.parentNode.insertBefore(script, ref);
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'G-VM6TFC6X9N');
        }
        </script>

      </head>
      <body>


        <nav class="navbar" role="navigation" aria-label="main navigation">
          <div class="container" id="nav-container">
            <div class="navbar-brand">
              <a href="https://b1mg-project.eu">
                <img src="/images/b1mg-logo.png" width="130" alt="B1MG logo" id="logo" />
              </a>
              <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="mainNavBar">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
              </a>
            </div>

            <div id="mainNavBar" class="navbar-menu">
              <div class="navbar-start">
                <a href="/" class="navbar-item px-4<?php echo ($section == 'home')? ' is-active' : ''; ?>">
                  Home
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                  <a href="/about/" class="navbar-link<?php echo ($section == 'about')? ' is-active' : ''; ?>">
                    About
                  </a>
                  <div class="navbar-dropdown">
                    <a href="/about/how-organised" class="navbar-item<?php echo ($page == 'how-organised')? ' is-active' : ''; ?>">
                      How the project is organised
                    </a>
                    <a href="/about/objectives" class="navbar-item<?php echo ($page == 'objectives')? ' is-active' : ''; ?>">
                      Objectives and key results
                    </a>
                    <a href="/about/participants" class="navbar-item">
                      Participants
                    </a>
                    <a href="/about/guide-science" class="navbar-item<?php echo ($page == 'guide-science')? ' is-active' : ''; ?>">
                      Simple guide to the science
                    </a>
                    <a href="/about/glossary" class="navbar-item<?php echo ($page == 'glossary')? ' is-active' : ''; ?>">
                      Glossary
                    </a>
                  </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                  <a href="/work-packages/" class="navbar-link<?php echo ($section == 'work-packages')? ' is-active' : ''; ?>">
                    Work Packages
                  </a>
                  <div class="navbar-dropdown">
                    <a href="/work-packages/wp1" class="navbar-item<?php echo ($page == 'wp1')? ' is-active' : ''; ?>">
                      WP1: Stakeholders engagement
                    </a>
                    <a href="/work-packages/wp2" class="navbar-item<?php echo ($page == 'wp2')? ' is-active' : ''; ?>">
                      WP2: Ethical, Legal and Social Issues
                    </a>
                    <a href="/work-packages/wp3" class="navbar-item<?php echo ($page == 'wp3')? ' is-active' : ''; ?>">
                      WP3: Standards and quality guidelines
                    </a>
                    <a href="/work-packages/wp4" class="navbar-item<?php echo ($page == 'wp4')? ' is-active' : ''; ?>">
                      WP4: Technical infrastructure
                    </a>
                    <a href="/work-packages/wp5" class="navbar-item<?php echo ($page == 'wp5')? ' is-active' : ''; ?>">
                      WP5: Personalised medicine and impact
                    </a>
                    <a href="/work-packages/wp6" class="navbar-item<?php echo ($page == 'wp6')? ' is-active' : ''; ?>">
                      WP6: Coordination Office
                    </a>
                      <a href="/work-packages/wp7" class="navbar-item<?php echo ($page == 'wp7')? ' is-active' : ''; ?>">
                          WP7: Support 1+MG Use Cases
                      </a>
                  </div>
               </div>
                <a href="/resources/" class="navbar-item px-4<?php echo ($section == 'resources')? ' is-active' : ''; ?>">
                  Resources
                </a>
                <a href="/news-events/" class="navbar-item px-4<?php echo ($section == 'news-events')? ' is-active' : ''; ?>">
                  News & events
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                <a href="/1mg/" class="navbar-link<?php echo ($section == '1mg')? ' is-active' : ''; ?>">
                  Support to 1+MG
                </a>
                <div class="navbar-dropdown">
                  <a href="/1mg/roadmap" class="navbar-item<?php echo ($page == 'roadmap')? ' is-active' : ''; ?>">
                    1+MG Roadmap
                  </a>
                  <a href="/1mg/partner-projects" class="navbar-item<?php echo ($page == 'partner-projects')? ' is-active' : ''; ?>">
                    Partner projects
                  </a>
                  <a href="/1mg/genome-europe" class="navbar-item<?php echo ($page == 'genome-europe')? ' is-active' : ''; ?>">
                    The Genome of Europe
                  </a>
                </div>
                </div>
              </div>
        </div>
      </nav>
