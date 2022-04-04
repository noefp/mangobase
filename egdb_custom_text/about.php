<p class="p_font18">
	MangoBase is a resource for Mango genomics. The site currently contains the reference genome for Mango "Tommy Atkins", which was sequenced by a consortium from the USA and Israel.
</p>
<p>
  Lorem ipsum dolor sit amet consectetur adipiscing elit mus nisi vel risus semper sagittis vitae, 
  luctus platea quisque cum nascetur sem ligula leo magnis cursus cubilia pulvinar. 
  Habitasse praesent platea nunc pharetra laoreet etiam congue proin, nostra vehicula nec quis iaculis molestie integer diam viverra, 
  primis nullam gravida massa tempor curae metus. Vitae vivamus nascetur eros mus viverra nostra fames sagittis faucibus donec, 
  cubilia interdum volutpat augue nisl libero fermentum proin quisque, mollis erat facilisi posuere rutrum luctus quis imperdiet pretium.
</p>
<p>
  Please, <a id="contact_link" onclick="contt()"> <i class="fa fa-envelope" style="font-size:24px;color:#007bff"></i> Contact us</a>
	if you have any question or request.
</p>

<script>
  function contt() {
      var addr = "e_fernandez_pozo" + '>' + "csic_es";
      addr = addr.replace(/_/g, ".");
      addr = addr.replace(">", "@");
      //alert("addr: no"+addr);
      window.location.href='mailto:no'+addr+'?subject=MangoBase contact';
  }
</script>
<style>
  #contact_link {
    color: #007bff;
    cursor: pointer;
  }
</style>