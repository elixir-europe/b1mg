<?php
   $title = "Work Package 4 (WP4) | Beyond 1 Million Genomes (B1MG) project";
   $description = "This WP will describe the infrastructure needed for secure cross-border genomics data discovery and access in Europe.";
   $section = "work-packages";
   $page = "wp4";
   include $_SERVER['DOCUMENT_ROOT']."/includes/header.inc";
?>
<section class="hero is-primary">
    <div class="hero-body py-5">
        <div class="container">
            <h1 class="title">
                Work Package 4
            </h1>
        </div>
    </div>
</section>
<section class="section pt-3">
    <div class="container content has-text-grey-darker">
        <h2 class="has-text-grey-dark">Federated secure cross-border technical infrastructure</h2>

        <p class="mt-6">This work package focuses on the infrastructure needed for federated, secure, cross-border data discovery and access processes in Europe. </p>
        <p>It aims to enable and facilitate interoperability across the national genomic, clinical and phenotypic data. The data collected will be part of the 1+MG initiative Use Cases on rare diseases, cancer, and common/complex diseases. B1MG will be used to identify the infrastructure requirements. A consultation process will then ensure that all stakeholders will be able to contribute (see WP1) to the WP deliverables.</p>
        <p>WP4 will collect requirements from the partners and analyse gaps and inconsistencies on existing standards for interoperability (e.g. HL7/FHIR, Phenopackets, SNOMED-CT, ORDO, HPO, OIDC, DUO, ISO27k, FASTQ, BAM/ CRAM, VCF). WP4 provides coordination efforts across ongoing and funded initiatives with partners in leading roles (e.g. ELIXIR Federated Human Data, H2020 CINECA, EOSC-Life, EUCANCan, EJP RD or the work streams at GA4GH), and will re-use existing research infrastructure capacities from the European Open Science Cloud (EOSC) or the EuroHPC. </p>
        <p>WP4 will benefit from the experience of leading genome and healthcare data management implementations, such as Genomics England, and of those international standards that have been agreed jointly with WP3 and are compliant with the ELSI (WP2) requirements.</p>
        <p> One major activity includes organisation of workshops across Europe to engage with experts and stakeholders (partnering with WP1) that are already investigating similar requirements and implementations. Furthermore, this WP will facilitate a joint understanding of the security requirements for technical service components and build a catalogue of existing “synthetic” datasets that mimic a transnational cohort of at least 1M individuals. These synthetic data will be used for safe cross-border interoperability tests.</p>
        <h2 class="mb-2 mt-55">Objectives</h2>
        <ul class="mt-2 xbp">
          <li><strong>O4.1:</strong> Standards for interoperability (jointly with WP3) to facilitate interfaces for cross-border services supporting discovery and access of genome, phenotype and clinical sample descriptions. The goal is to identify cross-border pilots from existing initiatives that could provide minimum viable product(s) to support the 1+MG requirements. (Task 4.1, with input from Tasks 4.2. and 4.5)</li>
          <li><strong>O4.2:</strong> Facilitating security by design on the proposed shared service implementations. Synthetic datasets required for tests on technical service interoperability, data protection and scalability without the risk of data breach. (Task 4.4 with input from the Task 4.5)</li>
          <li><strong>O4.3:</strong> Promote global standards to provide authorised access on national data based on existing user identities, compliant with GDPR and national laws and regulations. (Task 4.5)</li>
          <li><strong>O4.4:</strong> Increase capacity across the European Member States (and beyond) with a support technical expert network and transparent knowledge exchange on best practices. (Task 4.1 and 4.5)</li>
        </ul>
        <h2 class="mb-2 mt-55">Tasks</h2>
        <button class="accordion"><strong>Task 4.1:</strong> Iterative roadmap document encompassing the standards for interoperability, data management operations, and proposals for potential cross-border service components.</button>
        <div class="accordion-panel">
          <div>
            <p>CSC will set up a secretariat for coordinating the partners, organise a kick-off event, provide a documentation platform for partners with a federated login, and operate a video conferencing service for WP meetings, in collaboration with WP6 (Task.6.4), where the consortium communication strategy is defined.</p>
            <p>The task analysis will be based on existing regional (such as Tryggve), H2020 funded projects (CINECA, EOSC- Life, EUCANCan, EJP RD, and ELIXIR-CONVERGE), IMI and ELIXIR-coordinated commissioned services (e.g.Federated Human Data). These projects already fund development of practical solutions for identifying researchers across the 1+MG signatories (and those that are not signatories) and science driven discovery processes for the national data sets and access to the underlying data for data custodian approved researchers. Furthermore, these initiatives are based on open-source projects applying standards developed internationally for this field (such as those in the GA4GH) and re-use existing research infrastructures (ELIXIR, BBMRI-ERIC) and infrastructures such as the European Open Science Cloud (EOSC) or the EuroHPC.</p>
            <p>By the end of the project, WP4 documentation is expected to include end-to-end pilot proposal solutions. Where possible, these solutions would have been piloted as part of the initiatives that funded the original work. For example, converting healthcare data to the suggested standard formats leveraging e.g. GA4GH Phenopackets, submission to a national facility using e.g. ELIXIR Federated EGA, using e.g. GA4GH Beacon API for discovery of federated data, granting access to data with e.g. GA4GH Passports, secure access to the data from a secure cloud infrastructure, or federated analysis with interfaces from national facilities.</p>
            <p><strong class="has-text-danger">Participants:</strong>  CSC (Tommi Nyrönen, Ilkka Lappalainen), all WP participants.</p>
            <p><strong class="has-text-danger">Participants' roles:</strong> CSC will coordinate this task with all WP participants contributing.</p>
          </div>
        </div>
        <button class="accordion single-line"><strong>Task 4.2:</strong> Mapping competence for adoption of interoperability standards.</button>
        <div class="accordion-panel">
          <div>
            <p>This task maps maturity level of implementation of different international standards (such as those proposed by GA4GH) across partners and European countries. The task includes:</p>
            <ul>
              <li>definition of a B1MG maturity level model (e.g. three or four tiers, PoC, emerging, mature, legacy) in collaboration with WP5</li>
              <li>producing a visual interoperability status of each standard in each country.</li>
            </ul>
            <p>The optimal outcome would be a visual "map" of e.g. tools and workflows specification, provision of computational and/or data resources, data access and policies using international standards across countries represented in the B1MG-OG. Example matrix of possible columns:  countries (aiming for the whole 28 in EU today); rows: standards promoting genome data infrastructure interoperability (GA4GH standards and other relevant standards e.g. ISO TC 215). </p>
            <p><strong class="has-text-danger">Participants:</strong>  EMBL-EBI (Thomas Keane) with contributions from several internal and external stakeholders.</p>
            <p><strong class="has-text-danger">Participants' roles:</strong> EMBL-EBI: coordinate the mapping of competences.</p>
          </div>
        </div>
        <button class="accordion single-line"><strong>Task 4.3:</strong> Gap analysis.</button>
        <div class="accordion-panel">
          <div>
             <p>Gap analysis of existing/emerging infrastructure components that enable the 1+MG initiative. This task analyses the workflow for federated data access from a regulatory viewpoint and from the technology angle. Which "arrows" in the flowchart can be implemented, and what is missing? The work will be carried out in consultation with existing European Research Infrastructures. The report will focus on what is missing from the current landscape of federated data management technologies.</p>
            <p><strong class="has-text-danger">Participants:</strong>  EMBL-EBI (Thomas Keane) with contributions from several internal and external stakeholders.</p>
            <p><strong class="has-text-danger">Participants' roles:</strong> UU and SU: coordinate the gap analysis exercise involving relevant RIs.</p>
          </div>
        </div>
        <button class="accordion single-line"><strong>Task 4.4:</strong> Synthetic dataset catalogue.</button>
        <div class="accordion-panel">
          <div>
             <p>Before exposing infrastructure components on real genomic and clinical data collected from the patients, the development versions of various applications, APIs and access management processes will be tested and validated on synthetic, real-like datasets. These datasets will be created using other funding sources (e.g. national, regional or H2020) but used for WP4 goals.</p>
             <p>Virtual realistic datasets are required to test technical service interoperability, data protection and scalability without fear of data breach. Optimally, synthetic clinical and genomic data would be managed just like real data, using existing tools such as the federated EGA or RD-Connect.</p>
             <p>The first synthetic datasets will be made available from the Nordics, Genomics England, the Netherlands, Spain, Estonia and Italy, but these data sets will be altered during the project based on the Use Case requirements and to ensure sex, gender, diversity and ethnics aspects are taken into account.</p>
            <p><strong class="has-text-danger">Participants:</strong>  UU (Bengt Persson), SU (Niclas Jareborg) with contributions from several internal and external Stakeholders. </p>
            <p><strong class="has-text-danger">Participants' roles:</strong> UU and SU: coordinate the definition of synthetic dataset catalogue.</p>
          </div>
        </div>
        <button class="accordion single-line"><strong>Task 4.5:</strong> European workshops on implementations of the standards, data management operations and security.</button>
        <div class="accordion-panel">
          <div>
            <p>This task will organise a number of thematic workshops across Europe (Sweden, Switzerland, France, Spain, Italy and Slovenia) to bring together thematic experts to produce materials, report progress on stakeholders, and provide written input for the technical roadmap (Task 4.1).</p>
            <p> The events will cover the following topics: Synthetic human datasets for safe cross-border testing; Security on federated data access processes; 1+MG: Synchronicity between regulation and technology; Identify the barriers: existing cross-border data discovery and access solutions; Interfaces for cross-border interoperable services; Healthcare and genomes – capacity building for Europe. </p>
            <p><strong class="has-text-danger">Participants:</strong>  CSC (Tommi Nyrönen, Ilkka Lappalainen), UU (Bengt Persson), EPFL (J ean-Pierre Hubaux), CNRS (David Salgado), CRG (Sergi Beltran), UMIL (Matteo Chiaro), UL (Brane Leskosek), UNILU (Venkata Satagopam), UT (Andres Metsplau), SU (Niclas Jareborg), CNR (Graziano Pesole)</p>
            <p><strong class="has-text-danger">Participants' roles:</strong> CSC: coordinate the workshop and the integration of the different outcomes; UU, EPFL, IFB, CRG, UNIL, UL, UNILU, UT, SU and CNR will organise the local workshops and produce the workshop report.</p>
          </div>
        </div>

        <h2 class="mb-0 mt-6">Deliverables</h2>
        <table class="table is-bordered mt-2">
          <thead>
          <tr class="is-selected is-size-5">
            <th>Name</th>
            <th>Description</th>
            <th class="percent-20">Due</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>D4.1</td>
            <td><strong><a href="https://zenodo.org/record/4889401#.YLYHHzZKhQY">Secure cross-border data access roadmap</a>.</strong> <br />
              A snapshot (v.1) of a dynamic roadmap document for secure cross-border data access.</td>
            <td>May 2021</td>
          </tr>
          <tr>
            <td>D4.2</td>
            <td><strong>Secure data access demonstrator.</strong>
              <br />Coordinating a demonstrator across existing initiatives projects for cross-border data access.</td>
            <td>May 2022</td>
          </tr>
          <tr>
            <td>D4.3</td>
            <td><strong>Secure cross-border data access roadmap updated.</strong><br />
               A snapshot (v.2) of a dynamic and evolving roadmap document for secure cross-border data access.</td>
            <td>October 2023</td>
          </tr>
        </tbody>
        </table>
        <h2 class="mb-2 mt-6">WP leaders</h2>
        <div class="columns profiles">
          <div class="column">
            <figure>
              <img src="/images/people/tommi-nyronen.jpg" alt="Ivo Gut" />
              <figcaption>Tommi Nyr&ouml;nen (CSC)</figcaption>
            </figure>
          </div>
          <div class="column">
            <figure>
              <img src="/images/people/ilkka-lappalainen.jpg" alt="Ilkka Lappalainen" />
              <figcaption>Ilkka Lappalainen (CSC)</figcaption>
            </figure>
          </div>
          <div class="column">
            <figure>
              <img src="/images/people/bengt-persson.jpg" alt="Bengt Persson" />
              <figcaption>Bengt Persson (Uppsala University)</figcaption>
            </figure>
          </div>
          <div class="column">
            <figure>
              <img src="/images/people/sergei-beltran.jpg" alt="Sergei Beltran" />
              <figcaption>Sergi Beltran (CNAG-CRG)</figcaption>
            </figure>
          </div>

        </div>
        <h2 class="mb-2 mt-55">Participants</h2>
        <p class="my-0"><strong>CSC</strong>, ELIXIR/EMBL/EBI, CRG, University of Luxembourg, Uppsala University, SU, University of Tartu, University of Milan CNR, CNRS, University of Ljubljana</p>

        <h2 class="is-size-4 mb-2 mt-6">See also:</h2>
        <ul class="mt-0">
          <li><a href="/work-packages">Work Packages</a></li>
            <li><a href="/about/how-organised">How the project is organised</a></li>
            <li><a href="/about/objectives">Objectives and key results</a></li>
              <li><a href="/about">About</a></li>
        </ul>
    </div>
</section>
<?php
   include $_SERVER['DOCUMENT_ROOT']."/includes/footer.inc";
?>
