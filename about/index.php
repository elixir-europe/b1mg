<?php
   $title = "About the Beyond 1 Million Genomes (B1MG) project";
   $description = "What the B1MG project is, what it's goals are, and what its benefits will be to European citizens.";
   $section = "about";
   $page = "about";
   include $_SERVER['DOCUMENT_ROOT']."/includes/header.inc";
?>
<section class="hero is-primary">
    <div class="hero-body py-5">
        <div class="container">
            <h1 class="title">
                About B1MG
            </h1>
        </div>
    </div>
</section>
<section class="section pt-55">
    <div class="container content has-text-grey-darker">
        <p>The <strong>Beyond 1 Million Genomes (B1MG)</strong> project aims to make it easier to share human health data around Europe. It will support the European Union's <a href="https://ec.europa.eu/digital-single-market/en/european-1-million-genomes-initiative">1+ Million Genomes Initiative (1+MG)</a>, which aims to provide access to at least one million sequenced genomes in the EU by 2022. </p>
        <p>The B1MG project will support this initiative by creating the infrastructure, the legal guidance and the best practices to enable this access. It will  make it possible for scientists and clinicians to study the genotypic and phenotypic data from over one million people. This data will be linked, so the genetic data from one individual can be matched with their phenotypic data (like their weight, blood group and medical history).</p>
        <p>But the project will look 'beyond' the 1+MG Initiative and drive the development of a data sharing infrastructure that goes beyond the lifetime of 1+MG, and beyond 1 million genomes. </p>
        <div class="media grey px-3 pb-2 pt-3 my-55">
            <div class="media-left">
                <img src="/images/light-bulb.svg" width="30"  />
            </div>
            <p class="media-content mt-2">Not sure what 'genotype' and 'phenotype' mean? See the <a href="/about/guide-science">Simple guide to the science</a>. </p>
        </div>
        <p><strong>The overall goal is to help develop national data sharing networks and connect them into an international network, where the data remains stored locally but is accessible across Europe.</strong> Scientists and clinicians can then access the huge amounts of linked
            genotypic and phenotypic data across the 25 European countries in the project. This will:</p>
        <ul class="xxbp mt-4">
            <li><strong>Enable scientists to better understand diseases</strong>. This is particularly important for rare diseases, where a scientist working with only nationally-available data may not have enough data to study a particular rare disease.
                </li>
            <li><strong>Enable clinicians to give personalised medicine</strong>. Personalised medicine is an approach to diagnosing and treating patients based on the patient's particular genetic and phenotypic data. It leads to more accurate diagnoses and
                more targeted medicine. It will also allow clinicians to prescribe more targeted preventative medicine. It is predicted this will lead to a longer life expectancy and a better quality of life for European citizens.</li>
            <li><strong>Stimulate innovation and boost the European economy</strong>. Access to health data from a million citizens will spur innovation in the healthcare industries, and personalised preventative medicine will ease the strain on national
                health services.</li>
        </ul>
        <!--
        <h2 class="is-size-3">Project objectives and key results</h2>
        <p>For an overview of the Work Packages (WPs) mentioned here, see the <a href="/work-packages">Work Packages section</a>.</p>
        <button class="accordion">1. To work with regional, national and European stakeholders to define the requirements for cross-border access to genomics and personalised medicine data.</button>
        <div class="accordion-panel">
          <div>
            <p>To define the requirements for cross-border access to genomics and personalised medicine data, B1MG will establish a Stakeholder Coordination Group (SGC) to gather input at regular intervals from all relevant stakeholders. These requirements will be fed into Objectives 2 and 3. The group will include national-level representatives from the 1+MG initiative and beyond, experts from the public and private sectors, policy-makers, and patients and citizens more generally. </p>
            <p>Using personalised medicine Use Cases, we will outline the benefits that can be derived for patients. At least one open event - the ‘B1MG Summit’ - will be organised (in addition to the annual general assembly meeting), to ensure that all stakeholders have an opportunity to contribute and be informed about B1MG progress.</p>
            <h3 class="has-text-primary mb-0">Objective 1 key results</h3>
            <ol class="mt-2">
              <li>B1MG assembles key local, national, European and global actors in the field of personalised medicine within a B1MG Stakeholder Coordination Group (WP1) by November 2020.</li>
              <li>B1MG drives broad engagement around European access to personalised medicine data via the B1MG Stakeholder Coordination Portal (WP1) following the B1MG Communication Strategy (WP6) by May 2021.</li>
              <li>B1MG establishes awareness and dialogue with a broad set of societal actors via a continuously monitored and refined communications strategy (WP1, WP6) by May 2021, November 2021, May 2022 and November 2022.</li>
              <li>The open B1MG Summit (M18) engages and ensures that the views of all relevant stakeholders are captured in B1MG requirements and guidelines (WP1, WP6).
            </ol>
            <p>Addressed by WP1 and WP6.</p>
          </div>
        </div>
        <button class="accordion">2. To translate requirements for data quality, standards, technical infrastructure, and Ethical, Legal and Social Issues (ELSI) into technical specifications and implementation guidelines.</button>
        <div class="accordion-panel">
          <div>
            <p>To create a common framework to make genomic and health data findable, accessible, interoperable and reusable (FAIR), we will solve technical and infrastructure challenges regarding quality, data standards, interoperability and harmonisation, whilst developing privacy-preserving access procedures and computing. We will also need to solve legal and ethical challenges surrounding the use of genomics and healthcare data across borders – privacy and cross-border legal and ethical issues.</p>
            <h3 class="has-text-primary mb-3">Objective 2 Key Results</h3>
            <p class="my-0"><strong>Legal and ethical</strong></p>
            <ol class="mb-2 mt-3">
              <li>Establish relevant best practice in ethics of cross-border access to genome and phenotypic data (WP2) by May 2023.</li>
              <li>Analysis of legal framework and development of common minimum standard (WP2) by May 2023.</li>
              <li>Cross-border Data Access and Use Governance Toolkit Framework (WP2) by May 2023.</li>
            </ol>
            <p class="my-0"><strong>Technical:</strong></p>
            <ol start="4" class="my-2">
              <li>Quality metrics for sequencing (WP3) by May 2021.</li>
              <li>Best practices for Next Generation Sequencing (WP3) by May 2022.</li>
              <li>Phenotypic and clinical metadata framework (WP3) by May 2021, May 2022 and May 2023.</li>
              <li>Best practices in sharing and linking phenotypic and genetic data (WP3) by May 2021 and May 2022.</li>
              <li>Data analysis challenge (WP3) by M36.</li>
            </ol>
            <p class="my-0"><strong>Infrastructure</strong></p>
            <ol start="9" class="mt-2">
              <li>Secure cross-border data access roadmap (WP4) by May 2021 and May 2023.</li>
              <li>Secure cross-border data access demonstrator (WP4) by May 2022.</li>
            </ol>
            <p>Addressed by WP2, WP3 and WP4.</p>
          </div>
        </div>
        <button class="accordion">3. To drive adoption of this new infrastructure and to support long-term its operation by organisations at local, regional, national and European level. It will do this by providing guidance on development, and ways to evaluate economic impact.</button>
        <div class="accordion-panel">
          <div>
            <p>During the course of B1MG, we will propose the governance and models for engagement and participation (e.g. for accessing/giving access to data). We will consider training requirements for infrastructure users, risk management, IP models and sustainability. Continuous reflection on Use Cases (i.e. cancer and rare diseases) will ensure that the recommended infrastructure will have value and impact. </p>
            <p>It will be essential to map the maturity of healthcare system systems and develop a roadmap to implementation of genomic information in healthcare (considering the specificities of each country), using a stepwise framework and a B1MG maturity level model tool for healthcare systems. A harmonised methodology for economic evaluation of the cost and benefits of implementing Personalised Medicine, including a societal perspective, will be key for informing sustainability options, as well as the establishment of national mirror groups to coordinate implementation at a national level.</p>
            <h3 class="has-text-primary mb-0">Objective 3 Key Results</h3>
            <ol>
              <li>The B1MG maturity level model (WP5) by May 2021.</li>
              <li>Roadmap and guidance tools for countries for effective implementation of personalised medicine (WP5) by may 2023.</li>
              <li>Economic evaluation models for Personalised Medicine and case studies (WP5) by November 2022.</li>
              <li>Guidance principles for national mirror groups and cross-border personalised medicine governance (WP6) by November 2022.</li>
              <li>Long-term sustainability design and funding routes for cross-border Personalised Medicine delivery (WP6) by March 2023.</li>
            </ol>
            <p>Addressed by WP5 and WP6.</p>
          </div>
        </div> -->
        <h2 class="is-size-3 mb-2 mt-0">Find out more</h2>
        <ul class="mt-0">
          <li><a href="/about/how-organised">How the project is organised</a></li>
            <li><a href="/about/basic-science">The science behind the project</a></li>
            <li><a href="/about/how-organised">Work Packages</a></li>
            <li><a href="/about/objectives">Objectives and key results</a></li>
            <li><a href="/about/participants">Participants</a></li>
        </ul>
    </div>
</section>
<?php
   include $_SERVER['DOCUMENT_ROOT']."/includes/footer.inc";
?>
