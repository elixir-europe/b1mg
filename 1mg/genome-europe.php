<?php
   $title = "The Genome of Europe | Beyond 1 Million Genomes (B1MG) project";
   $description = "An outline of the The Genome of Europe initiative, which aims to make available the genome sequences of 500,000 European citizens by 2022.";
   $section = "1mg";
   $page = "genome-europe";
   include $_SERVER['DOCUMENT_ROOT']."/includes/header.inc";
?>
<section class="hero is-primary">
    <div class="hero-body py-5">
        <div class="container">
            <h1 class="title">
                The Genome of Europe
            </h1>
        </div>
    </div>
</section>
<section class="section pt-3">
    <div class="container content has-text-grey-darker">
      <div class="columns">
        <div class="column is-two-thirds">
          <p class="mt-6"><a href="/docs/genome-europe.pdf"><strong>The Genome of Europe</strong></a> initiative aims to build a European network of national genomic reference cohorts of at least 500,000 citizens. These reference cohorts will be selected to be representative of the European population. </p>
          <p>To achieve this, each country involved will establish a population cohort that reflects the genetic composition of its population, including both healthy and diseased individuals. The country will then connect this data into a European cohort, thus establishing a collective European reference dataset.</p>
          <p>The 500,000 sequenced genomes collected will contribute to the million genomes aimed for in the 1+MG initiative.</p>
          <h2 class="is-size-3 mb-2">Find out more</h2>
          <ul class="mt-0">
            <li><a href="/1mg/">Support to 1+MG</a></li>
              <li><a href="/1mg/roadmap">1+MG Roadmap</a></li>
              <li><a href="/1mg/partner-projects">1+MG Partner projects</a></li>
          </ul>
        </div>
        <div class="column">
          <a href="/docs/genome-europe.pdf"><img src="/images/genome-europe.jpg" width="300" alt="The cover of the Genome of Europe document" class="border-grey-double mt-6" title="Download the Genome of Europe document" /></a>
        </div>
      </div>


    </div>
</section>
<?php
   include $_SERVER['DOCUMENT_ROOT']."/includes/footer.inc";
?>
