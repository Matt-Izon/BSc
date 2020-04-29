<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    $pageTitle = "Lossiemouth FC";
    require_once($root.'/private/Controllers/IndexController.php');
    include_once($root.'public/header.php');
?>
<h1 id="welcome">Home of the highland League Club</h1>

<div class="block">
    <h2 class="subheading"> Latest Fixtures & Results </h2>
    <div class="main-gallery">
        <?php echo displayFixtures(); ?>
	</div>
</div>

<div class="block" id="highlights">
    <h2 class="subheading"> Highlight of the week </h2>
    <?php echo displayHighlight(); ?>
	<a href="public/events.php" id="quicklink">Click to see all news</a>
</div>

<div class="block">
	<div id="tweetdeck">
		<a href="https://twitter.com/lossiemouthfc?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @lossiemouthfc</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <a class="twitter-timeline" data-height="400" data-theme="dark" href="https://twitter.com/lossiemouthfc?ref_src=twsrc%5Etfw">Tweets by lossiemouthfc</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	</div>
</div>

<?php include_once($root. 'public/footer.php'); ?>
