    <footer>
    <div class="container-fluid"> 
			<center><h5 style="color:white;">©  2021 WildEagles All right reserved. </h5></center>
            <div class="scroll"> <a href="#wrap" class="go-up"><i class="lnr lnr-arrow-up"></i></a> </div>
	
    </div>
  </footer>
    
   
</div>
<script src="<?= base_url(); ?>/assets/js/jquery-1.11.3.min.js"></script> 
<script src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script> 
<script src="<?= base_url(); ?>/assets/js/own-menu.js"></script> 
<script src="<?= base_url(); ?>/assets/js/jquery.lighter.js"></script> 
<script src="<?= base_url(); ?>/assets/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="<?= base_url(); ?>/assets/rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="<?= base_url(); ?>/assets/rs-plugin/js/jquery.tp.min.js"></script> 
<script src="<?= base_url(); ?>/assets/js/main.js"></script> 
<script src="<?= base_url(); ?>/assets/js/main.js"></script>
<script language="JavaScript">
document.addEventListener("contextmenu", function(e){
    e.preventDefault();
}, false);
</script>
<script>
     document.addEventListener("keyup", function (e) {
    var keyCode = e.keyCode ? e.keyCode : e.which;
            if (keyCode == 44) {
                stopPrntScr();
            }
        });
function stopPrntScr() {

            var inpFld = document.createElement("input");
            inpFld.setAttribute("value", ".");
            inpFld.setAttribute("width", "0");
            inpFld.style.height = "0px";
            inpFld.style.width = "0px";
            inpFld.style.border = "0px";
            document.body.appendChild(inpFld);
            inpFld.select();
            document.execCommand("copy");
            inpFld.remove(inpFld);
        }
       function AccessClipboardData() {
            try {
                window.clipboardData.setData('text', "Access   Restricted");
            } catch (err) {
            }
        }
        setInterval("AccessClipboardData()", 300);
</script>
<?php foreach (getAbout() as $about) : ?>
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "<?= $about->wa ?>", 
            call_to_action: "<?= $about->message ?>", 
            position: "<?= $about->position ?>", 
            text: "<?= $about->message ?>", 
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<?php endforeach ?>
</body>
</html>