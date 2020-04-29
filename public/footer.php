<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once($root.'private/Controllers/FooterController.php');
?>

</section>

<div id="footer">

	<div id="sponsors">
		<?php echo displaySponsors(); ?>
    </div>

    <div id="footNav">
        <button class="accordion">Navigation</button>
	    <div class="panel">
	        <ul>
		        <li><a href="/index.php">Home</a></li>
			    <li><a href="/public/events.php">Events</a></li>
			    <li><a href="/public/club.php">Club</a></li>
			    <li><a href="/public/contact.php">Contact us</a></li>
		    </ul>
	    </div>

	    <div class="footerSep"></div>

	    <button class="accordion">Our Policies</button>
	    <div class="panel">
            <ul>
                <?php echo displayPolicies(); ?>	
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
