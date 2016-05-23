<span id="socialmendia">
	<style>
		.icon {
		  position: relative;
		  overflow: hidden;
		  width: 32px;
		  height: 32px;
		  display: inline-block;
		  
		  margin: 10px 0 10px 10px;
		  border-radius: 5px;
		  color: #fff;
		  text-decoration: none;
		  text-align: center;
		  line-height: 50px;
		  font-size: 12px;
		  font-family: sans-serif;
		}




		.icon:after {
		  content: "";
		  position: absolute;
		  top: -110%;
		  left: -210%;
		  width: 200%;
		  height: 200%;
		  opacity: 0;
		  transform: rotate(30deg);
		  
		  background: rgba(255, 255, 255, 0.13);
		  background: linear-gradient(
			to right, 
			rgba(255, 255, 255, 0.13) 0%,
			rgba(255, 255, 255, 0.13) 77%,
			rgba(255, 255, 255, 0.5) 92%,
			rgba(255, 255, 255, 0.0) 100%
		  );
		}


		.icon:hover:after {
		  opacity: 1;
		  top: -30%;
		  left: -30%;
		  transition-property: left, top, opacity;
		  transition-duration: 0.7s, 0.7s, 0.15s;
		  transition-timing-function: ease;
		}


		.icon:active:after {
		  opacity: 0;
		}
		
		
	</style>

<div class="social-box">
	<a href="../html-link.htm" ">
	<a href="#" target="popup" onclick="window.open('<?php echo "https://www.facebook.com/share.php?u="."http:/".$_SERVER['REQUEST_URI']; ?>','Facebook','width=600,height=400')" class="icon"><img src="/social//facebook.png"/></a>
	<a href="#" target="popup" onclick="window.open('<?php echo "http://twitter.com/intent/tweet?text="."http:/".$_SERVER['REQUEST_URI']; ?>','Twitter','width=600,height=400')" class="icon"><img src="/social/twitter.png"/></a>
	<a href="#" target="popup" onclick="window.open('<?php echo "https://plus.google.com/share?url="."http:/".$_SERVER['REQUEST_URI']; ?>','Facebook','width=600,height=400')" class="icon"><img src="/social/google.png"/></a>
	<a id="mail"><img src="/social/email.png"/></a>
	<a href="javascript:window.print()"" class="icon"><img src="/social/print.png"/></a>
</div>

	<script>
		function mkMail(){
			var href= "mailto:?subject=" + document.title +"&amp;body=" + window.location.href;
			var finalMailTo= '<a href="'+ href +'" class="icon"><img src="/social/email.png"/></a>'
			return finalMailTo;
		}
		document.getElementById("mail").innerHTML = mkMail();
	</script>
</span>

