<?php
	include_once('inc/header.php');
?>
			<div id="content" class="large-8 large-push-2 columns">
				<div class="callout panel" id="home1">
					<div class="image">
						<p>Our Beliefs</p>
					</div>
				</div>
				<div class="medium-6 columns leftnp">
					<div class="callout panel clickAble" id="home2" data-url="nominate.php">
						<div class="image">
							<p>Our<br>Heroes<br><span>Nominate</span></p>
						</div>
					</div>
				</div>
				<div class="medium-6 columns rightnp">
					<div class="callout panel clickAble" id="home3" data-url="winners-wall.php">
						<div class="image">
							<p>Winners<br>Wall</p>
						</div>
					</div>
				</div>
				<div class="medium-6 columns leftnp">
					<div>
						<div class="callout panel clickAble" data-url="redeem.php" id="home4">
							<div class="image">
								<p>Redeem</p>
							</div>
						</div>
						<div class="callout panel faq clickAble" data-url="faq.php">
							<p>FAQs <i class="icon-icons_question"></i></p>
						</div>
					</div>
				</div>
				<div class="medium-6 columns rightnp">
					<div class="callout panel clickAble" id="home5" data-url="passion-talks.php">
						<div class="image">
							<p>Passion Talks</p>
						</div>
					</div>
				</div>
			</div>
			<?php //print_r($_SESSION['user']); ?>
			<?php
	include_once('inc/footer.php');
?>