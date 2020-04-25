<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once($root.'/private/Sponsors.php');
    require_once($root.'/private/Policies.php');
?>


<div id="footer">

	<div id="sponsors">
		<?php
				$request = new Sponsors();
				$sponsors = $request->data;

				foreach ($sponsors->entries as $sponsor) {
					echo '<a href="'. $sponsor->URL. '"><img src="'. $sponsor->Image->path. '" alt="'. $sponsor->Name. ' logo"></a>';
				}
		?>
	</div>

	<div id="footNav">

		<button class="accordion">Navigation</button>
		<div class="panel">
			 <ul>
				<li><a href="/index.html">Home</a></li>
				<li><a href="/html/events.html">Events</a></li>
				<li><a href="/html/club.html">Club</a></li>
				<li><a href="/html/contact.html">Contact us</a></li>
			</ul>
		</div>

		<div class="footerSep"></div>

		<button class="accordion">Our Policies</button>
		<div class="panel">
			 <ul>
                <?php
                    $request = new Policies();
                    $policies = $request->data;
                    foreach ($policies as $name => $policy) {
                        echo '<li><a href="/html/policies.php?name='. $name. '">'. $name. '</a></li>';
                    }
                ?>	
			</ul>
		</div>

		<div class="footerSep"></div>
	</div>

	<div class="footSocial">
		<a href="https://www.facebook.com/LossiemouthFC"></a>
		<a href="https://twitter.com/lossiemouthfc"></a>
	</div>

	<footer> Copyright &copy; 2020 Lossiemouth FC. All rights reserved</footer>
</div>


</section>
</body>
</html>
