<?php
   $title = "Partner projects | Beyond 1 Million Genomes (B1MG) project";
   $description = "Partner projects of the 1+MG initiative, which aim to help the 1+MG project make available 1 million human genomes by the  2022.";
   $section = "1mg";
   $page = "partner-projects";
   include $_SERVER['DOCUMENT_ROOT']."/includes/header.inc";
?>
<section class="hero is-primary">
    <div class="hero-body py-5">
        <div class="container">
            <h1 class="title">
                Partner projects
            </h1>
        </div>
    </div>
</section>
<section class="section pt-3">
    <div class="container content has-text-grey-darker">
      <p class="mt-6">1+MG Partner projects are committed supporting the implementation of <a href="roadmap">1+MG Roadmap</a> by delivering specific components during a specific timeframe. These components will come together to build the 1+MG infrastructure that will facilitate the transnational access to 1+MG genomes by the  2022. </p>
      <p>1+MG Partner Projects will be entitled to display the 1+MG logo on their websites. There is also the expectation that they will be actively involved in project discussion and meetings, according to their actual contribution to the 1+MG Roadmap. </p>
      <p><strong>Projects interested in applying can use <a href="https://docs.google.com/forms/d/e/1FAIpQLSchu8G8N8mFp41GYATgohaZwlFiaCwtzvneKPim0sPAJKa6qw/viewform">this form</a>.</strong></p>
      <button class="accordion single-line mt-5">
        CINECA
      </button>
      <div class="accordion-panel has-background-light">
        <div>
      <div class="columns mt-0 mb-0 is-vcentered">
        <div class="column mb-0">
          <div><span class="has-text-weight-bold">Coordinator:</span> Thomas Keane (EMBL-EBI)</div>
          <div><span class="has-text-weight-bold">Website:</span> <a href="https://www.cineca-project.eu/">www.cineca-project.eu</a></div>
        </div>
        <div>
          <img src="/images/cineca-logo.png" width="170"  class="mr-3 mb-1" />
        </div>
      </div>
          <table class="table is-bordered">
            <thead>
              <tr class="is-selected">
                <th>WG</th>
                <th class="percent-20">1+MG Infrastructure</th>
                <th>Contribution</th>
                <th>Next steps</th>
                <th>Timeline</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <td>5</td>
              <td>Data Discovery</td>
              <td>Federated discovery across registry services by Beacon</td>
              <td>Expand cohorts; Align with ELIXIR Beacon network and 1+MG (WG5)</td>
              <td> Q4 2021</td>
            </tr>
            <tr>
            <td>5</td>
              <td>Cohort harmonisation</td>
              <td>Minimal metadata model for international cohorts</td>
              <td>Cross querying (an)other EC project and IHCC</td>
              <td> Q4 2021</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Storage & Interfaces</td>
              <td>GA4GH interfaces for cohort data access</td>
              <td>Generating multiple synthetic cohort datasets that can be used to test infrastructure</td>
              <td> Q2 2021</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Data Access Mechanisms</td>
              <td>GA4GH researcher ID specifications implemented in ELIXIR and CanDIG AAI</td>
              <td>Demonstrate a Permissions API to enable data access; Implement in 1 site in the FEGA</td>
              <td> Q4 2021</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Federated Analysis</td>
              <td>Federated research and clinical applications</td>
              <td>Initial PoC for applications in 2021</td>
              <td> Q4 2022</td>
            </tr>
          </tbody>
          </table>
          <p>WG = Working Group</p>
        </div>
      </div>
      <button class="accordion single-line mt-3">
        EJP RD
      </button>
      <div class="accordion-panel has-background-light">
        <div>
      <div class="columns mt-0 mb-0 is-vcentered">
        <div class="column mb-0">
          <div><span class="has-text-weight-bold">Coordinator:</span> Daria Julkowska (INSERM)</div>
          <div><span class="has-text-weight-bold">Website:</span> <a href="https://www.ejprarediseases.org//">www.ejprarediseases.org</a></div>
        </div>
        <div>
          <img src="/images/ejp-rd-logo.png" width="200" class="mr-3"/>
        </div>
      </div>
          <table class="table is-bordered">
            <thead>
              <tr class="is-selected">
                <th>WG</th>
                <th class="percent-20">1+MG Infrastructure</th>
                <th>Contribution</th>
                <th>Next steps</th>
                <th>Timeline</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <td>5</td>
              <td>Data Discovery</td>
              <td>Record level querying via Beacon</td>
              <td>PoC for EJP RD needed by  year, align with the PoC for 1+MG (WG5)</td>
              <td> Q4 2021</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Data Reception</td>
              <td>Best practices in sharing and linking phenotypic and genetic data for RD</td>
              <td>Direct contribution by EJP RD experts on scoping papers (WG3, WG4)</td>
              <td> Q2 2021</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Storage & Interfaces</td>
              <td>EGA to RD-Connect connections</td>
              <td>Practical level discussion on tools that are needed (WG5)</td>
              <td> Q2 2021</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Data Access Mechanisms</td>
              <td>Distributed consent management</td>
              <td>EGA and CNAG will support GA4GH Passport, Visa and AAI specifications</td>
              <td> Q3 2021</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Processing</td>
              <td>RD-Connect GPAP in Virtual Platform for data analysis</td>
              <td>Practical level discussion on tools that are needed (WG5)</td>
              <td> Q2 2021</td>
            </tr>
          </tbody>
          </table>
          <p>WG = Working Group</p>
        </div>
      </div>
      <button class="accordion single-line mt-3">
        ELIXIR CONVERGE
      </button>
      <div class="accordion-panel has-background-light">
        <div>
      <div class="columns mt-0 mb-0 is-vcentered">
        <div class="column mb-0">
          <div><span class="has-text-weight-bold">Coordinator:</span> Niklas Blomberg (ELIXIR)</div>
          <div><span class="has-text-weight-bold">Website:</span> <a href="https://elixir-europe.org/about-us/how-funded/eu-projects/converge">elixir-europe.org/converge</a></div>
        </div>
        <div>
          <img src="/images/elixir-converge-logo.png" width="100" class="mr-3" />
        </div>
      </div>

          <table class="table is-bordered">
            <thead>
              <tr class="is-selected">
                <th>WG</th>
                <th class="percent-20">1+MG Infrastructure</th>
                <th>Contribution</th>
                <th>Next steps</th>
                <th>Timeline</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <td>5</td>
              <td>Data Discovery</td>
              <td>Data discovery with the ELIXIR Beacon Network </td>
              <td>Report of use-cases and architecture for the EGA federation</td>
              <td> Q2 2021</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Data Reception</td>
              <td>Minimal metadata model for infectious diseases (COVID-19) related datasets</td>
              <td>COVID-19 metadata mapping model across COVID-19 studies in FEGA</td>
              <td> Q2 2021</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Storage & Interfaces</td>
              <td>Driving the implementation of FEGA nodes, with a focus on infectious diseases use case</td>
              <td>Report of use-cases and architecture for the EGA federation</td>
              <td> Q2 2021</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Data Access Mechanisms</td>
              <td>Use ELIXIR AAI, which is aligned with the DURI Work Stream of GA4GH</td>
              <td>Report of use-cases and architecture for the EGA federation</td>
              <td> Q2 2021</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Processing</td>
              <td>Cross border data processing operations and processes for FEGA COVID-19 datasets</td>
              <td>Report operational processes across the FEGA network and data transfer with the European COVID-19 platform</td>
              <td> Q4 2021</td>
            </tr>
          </tbody>
          </table>
          <p>WG = Working Group</p>
</div>
</div>

          <h2 class="is-size-3 mb-2">Find out more</h2>
          <ul class="mt-0">
            <li><a href="/1mg/">Support to 1+MG</a></li>
              <li><a href="/1mg/roadmap">1+MG Roadmap</a></li>
              <li><a href="/1mg/genome-europe">The Genome of Europe</a></li>
          </ul>



    </div>
</section>
<?php
   include $_SERVER['DOCUMENT_ROOT']."/includes/footer.inc";
?>
