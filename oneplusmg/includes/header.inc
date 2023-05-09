<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description; ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="/oneplusmg/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/oneplusmg/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/oneplusmg/favicon-16x16.png">
        <link rel="manifest" href="/oneplusmg/site.webmanifest">
        <script src="/oneplusmg/js/main.js"></script>
        <link rel="stylesheet" href="/oneplusmg/css/main.css">
        <link rel="stylesheet" href="/oneplusmg/css/icofont.min.css">
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
                <img src="/oneplusmg/images/1+MG_logo.png" width="130" alt="B1MG logo" id="logo" />
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
                  <a href="#" class="navbar-link<?php echo ($section == 'about')? ' is-active' : ''; ?>">
                    Menu Item 1
                  </a>
                  <div class="navbar-dropdown">
                    <a href="#" class="navbar-item<?php echo ($page == 'how-organised')? ' is-active' : ''; ?>">
                      Sub Menu 1
                    </a>
                    <a href="#" class="navbar-item<?php echo ($page == 'objectives')? ' is-active' : ''; ?>">
                        Sub Menu 2
                    </a>
                    <a href="#" class="navbar-item">
                        Sub Menu 3
                    </a>
                  </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                  <a href="#" class="navbar-link<?php echo ($section == 'work-packages')? ' is-active' : ''; ?>">
                    Menu Item 2
                  </a>
                  <div class="navbar-dropdown">
                    <a href="#" class="navbar-item<?php echo ($page == 'wp1')? ' is-active' : ''; ?>">
                        Sub Menu 1
                    </a>
                    <a href="#" class="navbar-item<?php echo ($page == 'wp2')? ' is-active' : ''; ?>">
                        Sub Menu 2
                    </a>
                    <a href="#" class="navbar-item<?php echo ($page == 'wp3')? ' is-active' : ''; ?>">
                        Sub Menu 3
                    </a>
                  </div>
               </div>
                <a href="#" class="navbar-item px-4<?php echo ($section == 'resources')? ' is-active' : ''; ?>">
                    Menu Item 3
                </a>
                <a href="#" class="navbar-item px-4<?php echo ($section == 'news-events')? ' is-active' : ''; ?>">
                    Menu Item 4
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                <a href="#" class="navbar-link<?php echo ($section == '1mg')? ' is-active' : ''; ?>">
                    Menu Item 5
                </a>
                <div class="navbar-dropdown">
                  <a href="#" class="navbar-item<?php echo ($page == 'roadmap')? ' is-active' : ''; ?>">
                      Sub Menu 1
                  </a>
                  <a href="#" class="navbar-item<?php echo ($page == 'partner-projects')? ' is-active' : ''; ?>">
                      Sub Menu 2
                  </a>
                  <a href="#" class="navbar-item<?php echo ($page == 'genome-europe')? ' is-active' : ''; ?>">
                      Sub Menu 3
                  </a>
                </div>
                </div>
              </div>
        </div>
      </nav>
