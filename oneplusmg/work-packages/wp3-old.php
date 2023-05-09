<?php
   $title = "Work Package 3 (WP3) | Beyond 1 Million Genomes (B1MG) project";
   $description = "This WP will address the legal and ethical issues surrounding accessing and transferring personal health data.";
   $section = "work-packages";
   $page = "wp3";
   include $_SERVER['DOCUMENT_ROOT']."/includes/header.inc";
?>
<section class="hero is-primary">
    <div class="hero-body py-5">
        <div class="container">
            <h1 class="title">
                Work Package 3
            </h1>
        </div>
    </div>
</section>
<section class="section pt-3">
    <div class="container content has-text-grey-darker">
        <h2 class="has-text-grey-dark">Standards and quality guidelines</h2>
        <p class="mt-6">Within large Europe-wide initiatives like the 1+MG initiative both germline and tumor sequencing data is generated at different sites and by different laboratories and in different contexts (research vs. clinical).</p>
        <p>No standards exist for sequencing and even the nomenclature of quality metrics and how they are applied across different laboratories. As well as that, sequencing of germline and tumour DNA are known to have both experimentally and bioinformatically profound differences and challenges. In contrast to most clinical tests that adhere to common standards and require repeated validation and accreditation of laboratories, similar procedures for Next Generation Sequencing (NGS) of human genomes or exomes are rare if not lacking.</p>
        <p> Similarly, the description of the phenotypic and clinical information is heterogeneous, mostly unstructured, and spread across multiple (often not integrated/linked) systems. It does not always capture the entire history of a patient, and is mostly recorded in the local language.</p>
        <p><strong>To facilitate cross-border searching, linking and analysis of genomic and health data, this WP will identify gaps and best practices. It will produce a set of recommendations and guidelines that cover the minimal requirements for the provenance of the samples, the generation of the whole genome sequencing (WGS) and whole-exome sequencing (WES) data.</strong> This will include bioinformatic analysis and the description of patient-specific phenotype and clinical data. Also, establishing and using standards and quality metrics for both sequencing and phenotypic and clinical data are, together with the ELSI standards, key elements in creating trust.</p>
        <p> This WP will work with other WPs of B1MG to coordinate with existing funded projects at regional/national level (e.g. Genomics England and the Dutch FAIRgenomes project) as well as international level (e.g. EJP RD, EUCANCan, EASI-Genomics, and the GA4GH).</p>
        </ul>
        <h2 class="mb-2 mt-55">Objectives</h2>
        <ul class="mt-2 xbp">
          <li><strong>O3.1:</strong>  Develop a salient set of quality metrics for the assessment of whole-genome and whole-exome sequencing, starting from the quality of the input material to sequencing and data analysis (Task 3.1).</li>
          <li><strong>O3.2:</strong> Develop a best practice protocol for the analysis of Next Generation Sequencing data (Task 3.2).</li>
          <li><strong>O3.3:</strong> Organise a B1MG data analysis challenge involving at least cross-border Next Generation Sequencing and accompanying phenotypic datasets (Task 3.3).</li>
          <li><strong>O3.4:</strong> Develop a framework for capturing and describing phenotypic and clinical data from patients in order to make genetic data useful in each clinical Use Case (Task 3.4).</li>
          <li><strong>O3.5:</strong> Investigate the extent to which phenotypic data can be captured across Europe (HPO, EHR, information specific for a disease, individual history, treatment history, vaccination records) and bring forward best practices showing the added value of linking additional, more detailed phenotypic and clinical data to genetic data (Task 3.5)</li>
        </ul>
        <h2 class="mb-2 mt-55">Tasks</h2>
        <button class="accordion single-line"><strong>Task 3.1:</strong> Quality metrics for whole genome sequencing (WGS) and whole-exome sequencing (WES).</button>
        <div class="accordion-panel">
          <div>
             <p>Sequencing human genomes and exomes combines several elements:</p>
             <ul>
               <li>the provenance of a sample (tissue, blood, plasma, or liquid biopsies)</li>
               <li>handling of a sample (fresh or subjected to fixation)</li>
               <li>the extraction of DNA</li>
               <li>the preparation of sequencing libraries (including the method for capturing DNA fragments in the case of whole exome sequencing)</li>
               <li>the sequencing chemistry</li>
               <li>bioinformatic analysis</li>
             </ul>
             <p>Each element contributes to the quality of the result. Even though NGS is applied in clinical practice, very few laboratories have an accreditation, and validated workflows and common standards are largely lacking. Quality measures, if existing, are applied differently in different laboratories.</p>
             <p> Here, we will establish a set of metrics, either for raw and processed sequencing data, that assures final data reaches an acceptable quality threshold for clinical purposes. Exceeding these thresholds would constitute Good Genomic Practice.</p>
             <p> Many measurements to estimate the quality of sequencing data exist, however, many of the measures are redundant. First, we will collect the quality measures that are recorded in the context of clinical diagnostics and research NGS in different countries across Europe. Based on this consultation and discussion, we will establish a non-redundant set of measures (may be indicators) that will be easy to capture by diagnostic NGS laboratories. The measures can also be computed post hoc to determine whether a legacy dataset is fit for purpose.</p>
            <p><strong class="has-text-danger">Participants:</strong> CRG (Ivo Gut), Nictiz (Pim Volkert), HMF (Edwin Cuppen), UiO (Eivind Hovig), KU Leuven (Gert Matthijs), KI (Valtteri Wirta), members from 1+MG mirror groups and international experts (part of each task in this WP, only listed here for simplicity)</p>
            <p><strong class="has-text-danger">Participants' roles:</strong> CRG: Lead and coordinate the task. Nictiz (NL): make available their expertise and (inter)national network in developing and managing information standards and medical terminology to enable the exchange of information and provide advice on their implementation. HMF: provide expertise in cancer WGS (tumor-normal) procedures and quality metrics. UiO, KU Leuven and KI: contribute to the definition of WGS and WES quality metrics. VUmc: link to FAIRgenomes, working towards NGS guidelines in the Netherlands. CUNI, NIO and TAI: contribute with their expertise in this task to facilitate cross-discipline interaction between our WP-tasks. Members from mirror groups and international experts will participate in the definition of standards, benchmarking, challenges, TCs and F2F meetings.</p>
          </div>
        </div>
        <button class="accordion single-line"><strong>Task 3.2:</strong> Best practice protocol for WGS and WES data analysis. </button>
        <div class="accordion-panel">
          <div>
            <p>Variants in the genome are determined using a series of bioinformatic procedures such as the elimination of low-quality sequences, alignment of a sequencing read to the human reference genome, the establishment of the confidence in the presence of a variant of a certain type based on a threshold, etc. The identification of a variant is followed by the annotation of the variant to predict its effect. In this task, we will establish a best practice protocol for data analysis for WGS and WES. It will be a recommended suite of software tools with settings that assure the results to surpass a required quality threshold.</p>
            <p><strong class="has-text-danger">Participants:</strong>   CRG (Ivo Gut), Nictiz (Pim Volkert), HMF (Edwin Cuppen), UiO (Eivind Hovig), KU Leuven (Gert Matthijs), KI (Valtteri Wirta), CUNI (Milan Macek), NIO (Attila Patocs), VUmc (Jerome Belien), TAI (Helen Lepa)</p>
            <p><strong class="has-text-danger">Participants' roles:</strong> CRG: Lead and coordinate the task. Nictiz (NL): make available their expertise and (inter)national network in developing and managing information standards and medical terminology to enable the exchange of information and provide advice on their implementation. VUmc: link to FAIRgenomes working towards NGS guidelines in the Netherlands. HMF: provide best practices for tumor-normal WGS somatic mutation analysis. UiO, KU Leuven and KI: contribute with their expertise in this area. CUNI, NIO and TAI: contribute with their expertise in this task to facilitate cross-discipline interaction between our WP-tasks.</p>
          </div>
        </div>
        <button class="accordion single-line"><strong>Task 3.3:</strong> B1MG data analysis challenge. </button>
        <div class="accordion-panel">
          <div>
            <p>Challenges are a good way to allow participants to establish how their procedures compare to those of others and relative to a bona fide set of results. We will provide data to the interested community of data analysts and run a challenge. The outcomes of and participation in Tasks 3.1, 3.2 and 3.3 will also be usable by clinical laboratories as interlaboratory comparisons and will serve their accreditation and certification processes. As part of the process sex, gender diversity and ethnics aspects will be considered.</p>
            <p><strong class="has-text-danger">Participants:</strong>  CRG (Ivo Gut), VUmc (Jeroen Belien)</p>
            <p><strong class="has-text-danger">Participants' roles:</strong> CRG and VUmc: coordinate and organise the B1MG challenge. VUmc: link to FAIRgenomes working towards NGS guidelines in the Netherlands. Nictiz: make available their expertise and (inter)national network in developing and managing information standards and medical terminology to enable the exchange of information and providing advice on their implementation. HMF: participate in the challenge, generate and analyse data.</p>
          </div>
        </div>
        <button class="accordion single-line"><strong>Task 3.4:</strong> Phenotypic and clinical metadata framework.</button>
        <div class="accordion-panel">
          <div>
            <p>Organise and coordinate meetings with experts in the field to establish a framework to: 1) agree on a minimum phenotype and clinical data set needed to run the cancer, rare disease and common and complex disease Use Cases and such that a stepping stone principal from minimal viable queries (to be provided by and in collaboration with the 1+MG WGs 8, 9 and 10) to scaling out to the most complex queries will be supported (and will be able to run on the infrastructure as designed by WP4 and fall within the ELSI policies as outcome of WP2); 2) gather and define quality measures in order to ensure high quality of provided clinical and phenotypic data, while at the same time providing a framework for feedback/evaluation on quality indicators applied to tagged/flagged data.</p>
            <p><strong class="has-text-danger">Participants:</strong>    VUmc (Jeroen Belien), Nictiz (Pim Volkert), CUNI ( Milan Macek), NIO (Attila Patocs), CRG (Sergi Beltran), HMF (Eivind Cuppen), KU Leuven, KI (Valtteri Wirta), UIO (Eivind Hovig)</p>
            <p><strong class="has-text-danger">Participants' roles:</strong> VUmc: lead and coordinate the task. Nictiz: make available their expertise and (inter)national network in developing and managing information standards and medical terminology to enable the exchange of information and provide advice on their implementation. CUNI: clinical expertise. NIO: clinical expertise. CRG: link to GA4GH and EJP RD. VUmc and CRG: Involve leadership of 1+MG WGs 8, 9 and 10 to provide the expected stepping stone to support their Use Cases from minimal viable queries to the most complex queries. UiO, KU Leuven and KI: contribute with their expertise in this task to facilitate cross-discipline interaction between our WP-tasks.</p>
          </div>
        </div>
        <button class="accordion single-line"><strong>Task 3.5:</strong> Best practises in sharing and linking phenotypic and genetic data.</button>
        <div class="accordion-panel">
          <div>
            <p>Organise and coordinate meetings with experts in the field to create an overview of best practice examples of the added value of linking additional, more detailed phenotypic and clinical patient information to the genetic data and material/ tissues. </p>
            <p><strong class="has-text-danger">Participants:</strong> VUmc (Jeroen Belien), Nictiz (Pim Volkert), CUNI (Milan Macek), NIO (Attila Patocs), CRG (Ivo Gut)</p>
            <p><strong class="has-text-danger">Participants' roles:</strong> VUmc: lead and coordinate the task, and link to FAIRgenomes working towards NGS guidelines in the Netherlands. Nictiz: make available their expertise and (inter)national network in developing and managing information standards and medical terminology to enable the exchange of information and provide advice on their implementation. CUNI: clinical expertise. CRG: link to GA4GH and EJP RD. NIO: clinical expertise. UiO, KU Leuven and KI: contribute with their expertise in this task to facilitate cross-discipline interaction between our WP-tasks.</p>
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
            <td>D3.1</td>
            <td><strong>Quality metrics for sequencing</strong><br />
               Establishment of a salient set of metrics to assess the quality of an NGS sequencing analysis.</td>
            <td>May 2021</td>
          </tr>
          <tr>
            <td>D3.2</td>
            <td><strong>Best practices for Next Generation Sequencing (NGS)</strong><br />
              Description of a best-in-class procedure to carry out an NGS analysis in a clinical setting, including sample quality, sample preparation, sequencing and data analysis and clinical interpretation.</td>
            <td>May 2022</td>
          </tr>
          <tr>
            <td>D3.3</td>
            <td><strong>The B1MG data analysis challenge</strong><br />
               Publication of the outcome of the B1MG data analysis challenge.</td>
            <td>October 2023</td>
          </tr>
          <tr>
            <td>D3.4</td>
            <td><strong>Phenotypic and clinical metadata framework</strong> <br />
              A dynamic and iterative roadmap as well as publication of an iterative document towards an established framework that can be used by the relevant 1+MG working groups to agree on a minimal phenotypic and clinical dataset to run chosen Use Cases.</td>
            <td>May 2021</td>
          </tr>
          <tr>
            <td>D3.5</td>
            <td><strong>Phenotypic and clinical metadata framework</strong><br />
              A dynamic and iterative roadmap as well as publication of an iterative document towards an established framework that can be used by the relevant 1+MG working groups to agree on a minimal phenotypic and clinical dataset to run chosen Use Cases.</td>
            <td>May 2022</td>
          </tr>
          <tr>
            <td>D3.6</td>
            <td><strong>Phenotypic and clinical metadata framework</strong><br />
              A dynamic and iterative roadmap as well as publication of an iterative document towards an established framework that can be used by the relevant 1+MG working groups to agree on a minimal phenotypic and clinical dataset to run chosen Use Cases.</td>
            <td>October 2023</td>
          </tr>
          <tr>
            <td>D3.7</td>
            <td><strong>Documented best practices in sharing and linking phenotypic and genetic data</strong><br />Publication of an iterative document on available best practices in sharing and linking phenotypic and genetic data.</td>
            <td>May 2021</td>
          </tr>
          <tr>
            <td>D3.8</td>
            <td><strong>Documented best practices in sharing and linking phenotypic and genetic data</strong><br />
              Publication of an iterative document on available best practices in sharing and linking phenotypic and genetic data.</td>
            <td>May 2022</td>
          </tr>
        </tbody>
        </table>
        <h2 class="mb-2 mt-6">WP leaders</h2>
        <div class="columns profiles percent-50">
          <div class="column">
            <figure>
              <img src="/images/people/ivo-gut.jpg" alt="Ivo Gut" />
              <figcaption>Ivo Gut (CRG)</figcaption>
            </figure>
          </div>
          <div class="column">
            <figure>
              <img src="/images/people/jeroen-belien.jpg" alt="Jeroen Beliën" />
              <figcaption>Jeroen Beliën (Vanderbilt University Medical Center)</figcaption>
            </figure>
          </div>

        </div>
        <h2 class="mb-2 mt-55">Participants</h2>
        <p class="my-0"><strong>CRG</strong>, CUNI, HMF, NIO,KU Leuven, NICTIZ, KI, UiO, VUmc, TAI</p>

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
