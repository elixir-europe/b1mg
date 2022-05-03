<?php
$title = "Impact of the Beyond 1 Million Genomes (B1MG) project";
$description = "Key performance indicator for B1MG project";
$section = "impact";
$page = "impact";
include $_SERVER['DOCUMENT_ROOT']."/includes/header.inc";
?>
<section class="hero is-primary">
    <div class="hero-body py-5">
        <div class="container">
            <h1 class="title">
                B1MG social media live metrics
            </h1>
        </div>
    </div>
</section>
<section class="section pt-55">
    <div class="container content has-text-grey-darker">
        <div class="columns">

            <div class="column pr-5">
                <div class='tableauPlaceholder' id='viz1646748985923' style='position: relative'>
                    <object class='tableauViz'  style='display:none;'>
                        <param name='host_url' value='https://public.tableau.com/' />
                        <param name='embed_code_version' value='3' />
                        <param name='path' value='views&#47;ReviewingB1MGCommunicationsChannels&#47;Dashboard2?:language=en-GB&amp;:embed=true&amp;publish=yes' />
                        <param name='toolbar' value='yes' />
                        <param name='animate_transition' value='yes' />
                        <param name='display_static_image' value='yes' />
                        <param name='display_spinner' value='yes' />
                        <param name='display_overlay' value='yes' />
                        <param name='display_count' value='yes' />
                        <param name='language' value='en-GB' />
                        <param name='filter' value='publish=yes' />
                    </object>
                </div>
                <script type='text/javascript'>
                    var divElement = document.getElementById('viz1646748985923');
                    var vizElement = divElement.getElementsByTagName('object')[0];
                    if ( divElement.offsetWidth > 800 )
                    {
                        vizElement.style.width='1050px';
                        vizElement.style.height='1527px';
                    }
                    else if ( divElement.offsetWidth > 500 )
                    {
                        vizElement.style.width='1050px';
                        vizElement.style.height='1527px';
                    }
                    else
                    {
                        vizElement.style.width='100%';
                        vizElement.style.height='1227px';
                    }
                    var scriptElement = document.createElement('script');
                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                    vizElement.parentNode.insertBefore(scriptElement, vizElement);
                </script>
            </div>
<!--            <div class="column pr-3-desktop">
                <div class="border-grey"><a class="twitter-timeline" data-lang="en"  data-height="1200" href="https://twitter.com/B1MG_Project?ref_src=twsrc%5Etfw">Tweets by B1MG_Project</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>-->
        </div>

    </div>
</section>
<?php
include $_SERVER['DOCUMENT_ROOT']."/includes/footer.inc";
?>
