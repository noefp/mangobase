<div class="container my-5" style="max-width: 1000px; margin: 0 auto;">
  
  <div class="text-center mb-5">
    <h1 class="display-5 font-weight-bold" style="color: #ff6500; font-size: 32px;">About MangoBase</h1>
    <div style="width: 60px; height: 4px; background-color: #ff6500; margin: 15px auto 25px auto; border-radius: 2px;"></div>
    
    <p class="p_font18 text-muted mx-auto" style="max-width: 850px; line-height: 1.6;">
      MangoBase is an integrated, multi-omic digital platform dedicated exclusively to mango (<em>Mangifera indica</em>) genomics. The database hosts chromosome-level reference genome assemblies, structural annotations, and comparative analyses for critical agronomic cultivars including "Tommy Atkins", "Irwin", and "Alphonso".
    </p>
  </div>

  <div class="row justify-content-center mb-5">
    <div class="col-12 col-md-10 text-justify text-muted p_font16" style="line-height: 1.7;">
      <p>
        MangoBase equippes researchers and breeders with advanced web-based tools—such as expression atlases, metabolic pathway viewers, and genome browsers—tailored to unlock the genetic pathways.
    </div>
  </div>

  <div class="mb-5">
    <?php 
      if ( file_exists(realpath("$custom_text_path/db_citation.php")) && filesize(realpath("$custom_text_path/db_citation.php")) >0) {
        include_once realpath("$custom_text_path/db_citation.php");
      }
    ?>
  </div>

  <hr class="my-5" style="border-top: 1px solid #e2e8f0;">

  <div class="text-center p-4 rounded" style="border-left: 4px solid #ff6500 !important; background-color: rgba(255, 101, 0, 0.02);">
    <h3 class="h4 font-weight-bold mb-3" style="color: #1a1a1a;">Have questions or requests?</h3>
    <p class="text-muted mx-auto mb-4" style="max-width: 600px;">
      If you have any inquiries regarding data integration, collaboration opportunities, or feature requests, feel free to reach out to our team.
    </p>
    <button id="contact_link" onclick="contt()" class="btn btn-primary px-4 font-weight-bold shadow-sm mango-btn" style="background-color: #ff6500; border-color: #ff6500; border-radius: 20px;">
      <i class="fa fa-envelope mr-2"></i> Contact Us
    </button>
  </div>

</div>

<script>
  function contt() {
      var addr = "e_fernandez_pozo" + '>' + "csic_es";
      addr = addr.replace(/_/g, ".");
      addr = addr.replace(">", "@");
      window.location.href='mailto:no'+addr+'?subject=MangoBase contact';
  }
</script>

<style>
  .shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
  }
  .mango-btn:hover {
    background-color: #d45400 !important;
    border-color: #d45400 !important;
    transform: translateY(-1px);
    transition: all 0.2s ease;
  }
</style>