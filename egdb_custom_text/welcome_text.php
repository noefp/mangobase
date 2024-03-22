<!-- <h1>Welcome to <?php// echo "$dbTitle";?> </h1> -->
  
<h1>Welcome to MangoBase</h1>
<h4 class="p_font18">
  This site is dedicated to mango genomics, and provides multiple bioinformatics tools to explore and download omics data related to <i>Mangifera indica</i>.
</h4>
<p style="text-align: justify">
Mango (<i>Mangifera indica</i> L.) (2n = 40) is a member of the Anacardiaceae family, which belong to Mangifera, a genus with between 31 and 69 species, of which 26 produce edible fruits. Mangoes are delicious fruits with great nutritional value. They are one of the major fruit crops worldwide, ranking fifth in terms of production among perennial fruit crops worldwide, and currently cultivated in more than 100 countries, with a production of more than 40 million tons in 2021 (FAO-STAT). India, China, Thailand, Indonesia, and Mexico are the main mango producing countries, although this crop is cultivated in tropical and subtropical regions of all continents but Antarctica, including regions far from the equator, such as the Mediterranean basin in the south of Europe, north of Africa and the Middle East. Mango was domesticated at least 4000 years ago in Asia, where two ecogeographic races of mango are distinguished: the Indian type, in subtropical regions, which produces monoembryonic seeds, and the Southeast Asian type, in tropical regions, which produces polyembryonic seeds.
</p>

<p style="pading-bottom:40px">
  Please, <a class="contact_link" onclick="contt()"> <i class="fa fa-envelope" style="font-size:24px;color:#007bff"></i> Contact us</a> if you have any question or request. <a class="contact_link" onclick="subscribe()"> <i class="fa fa-envelope" style="font-size:24px;color:#007bff"></i> Subscribe</a> to our distribution list to get and share information about mango research (Remember to change yourName in the subject by your name, EG: Dr. Smith). <a class="contact_link" onclick="unsubscribe()"><i class="fa fa-envelope" style="font-size:24px;color:#007bff"></i> Unsubscribe</a>
</p>


<center>
  <img src='<?php echo "$images_path/mango_fondo.jpg";?>' style="width:100%; max-width:460px" alt='mango2023 banner'>
</center>

<br>

<div class="card">
  <div class="card-body">
    <h4 class="card-title">News and Events</h4>
    <ul>
    <li class="card-text">
      Mazatlán, in Sinaloa, Mexico, was the chosen location for the XIV International Mango Symposium, which will take place in 2025.
    </li>
    <li class="card-text"><a href="https://en.mango2023.es/" target="blank">The XIII International Mango Symposium</a> took place in Málaga, Spain, from September 29th to October 3th, 2023 under the auspices of the International Society for Horticultural Science (ISHS).</p>
    <!-- <p class="card-text">Abtract submission is open until April 1st 2023.</p> -->
    <!-- <a href="https://en.mango2023.es/" target="blank">
      <img src='<?php //echo "$images_path/mango2023.jpeg";?>' style="width:100%; max-width:860px" alt='mango2023 banner'>
    </a> -->
    </li>
  </div>
</div>

<!-- <br> -->

<script>
  function contt() {
      var addr = "e_fernandez_pozo" + '>' + "csic_es";
      addr = addr.replace(/_/g, ".");
      addr = addr.replace(">", "@");
      //alert("addr: no"+addr);
      window.location.href='mailto:no'+addr+'?subject=MangoBase contact';
  }
  function subscribe() {
      window.location.href='mailto:sympa6@listas.csic.es?subject=subscribe MangoBase yourName';
  }
  function unsubscribe() {
      window.location.href='mailto:sympa6@listas.csic.es?subject=unsubscribe MangoBase ';
  }
</script>
<style>
  .contact_link {
    color: #007bff;
    cursor: pointer;
  }
</style>
