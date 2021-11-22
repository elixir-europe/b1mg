<?php
   $title = "Accessibility | B1MG project";
   $description = "Beyond 1 Million Genomes (B1MG) supports the 1+MG Initiative and aims to make the benefits of personalised medicine available around Europe.";
   $section = "about";
   $page = "accessibility";
   include $_SERVER['DOCUMENT_ROOT']."/includes/header.inc";
?>
<section class="hero is-primary">
    <div class="hero-body py-5">
        <div class="container">
            <h1 class="title">
                Accessibility
            </h1>
        </div>
    </div>
</section>
<section class="section">
    <div class="container content has-text-grey-darker">
        <article>
            <p>We appreciate people have different preferences and abilities when using websites. We have tried to make the site easy to use and understand, no matter what technology or browsing method you are using. For example, you should be able to:</p>

            <ul>
                <li>change colours, contrast levels and fonts</li>
                <li>zoom in up to 300% without the text spilling off the screen</li>
                <li>navigate the website using just a keyboard</li>
                <li>listen to most of the website using a screen reader.</li>
            </ul>

            <p>We aim to conform to the to the ‘AA’ standard of the <a href="https://www.w3.org/TR/WCAG21/">Web Content Accessibility Guidelines (WCAG) 2.1</a>. This is not just a legal requirement in the European Union, but a best practice that will enable as many people as possible to use the site.</p>

            <h2 id="how-to-report-problems">How to report problems</h2>
            <p>If you have any difficulties or annoyances using the site, or feel that we are not meeting accessibility requirements, then please contact us (<a href="mailto:webmaster@elixir-europe.org">webmaster@elixir-europe.org</a>). We will do our best to make the site easier to use.</p>

            <h2 id="how-we-assess-the-accessibility-of-the-site">How we assess the accessibility of the site</h2>
            <p>The B1MG is a short-term, collaborative effort so unfortunately we do not have the resources to hire an accessibility expert. However, our community includes professional web developers, who assess the accessibility of the site using:</p>

            <ul>
                <li><a href="https://www.w3.org/WAI/test-evaluate/preliminary/">The W3C Web Accessibility Initiative checklist</a></li>
                <li><a href="https://www.gov.uk/government/publications/doing-a-basic-accessibility-check-if-you-cant-do-a-detailed-one/doing-a-basic-accessibility-check-if-you-cant-do-a-detailed-one">The British government accessibility checklist</a></li>
                <li><a href="https://www.w3.org/TR/WCAG21/">The Web Content Accessibility Guidelines</a></li>
                <li><a href="https://accessibilitytest.org/">Accessibilitytest.org</a>, which runs several accessibility checkers at once.</li>
            </ul>

            <p>The website was last assessed on 22 November 2021.</p>

            <h2 id="level-of-compliance">Level of compliance</h2>
            <p>This website is only partially compliant with the Web Content Accessibility Guidelines version 2.1 AA standard. Currently the non-compliant issues are:</p>

            <ul>
                <li>Low contrast on the red highlit link in the main menu, and in the red newsletter button (<a href="https://www.w3.org/WAI/WCAG21/Understanding/contrast-minimum.html">success criterion 1.4.3</a>). This red is a brand colour, which was developed before accessibility regulations came in force in the EU. Since these elements are not important to use the site we have decided to leave them for now, and seek further feedback.</li>
            </ul>

            <p>If you feel there are more issues to address, then please email (<a href="mailto:webmaster@elixir-europe.org">webmaster@elixir-europe.org</a>).</p>

        </article>
    </div>
</section>
<?php
   include $_SERVER['DOCUMENT_ROOT']."/includes/footer.inc";
?>
