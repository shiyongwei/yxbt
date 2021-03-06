<script src="/public/js/application.manifest-4624a13ba71db1083d88bc4326b29962.js" type="text/javascript"></script>
<script type="text/javascript">

    if(window.onLibrariesLoad)
        window.onLibrariesLoad();

    $(document).ready(function() {
        ER.Layout.onDomLoad({
            loggedIn: false,
            widgetDateFormat: 'yy/mm/dd',
            current_language_code: 'zh',
            // href_languages: [{"language_code": "en", "language_route": "https://www.eaglerider.com/"}, {"language_code": "de", "language_route": "https://www.eaglerider.com/motorrad-mieten"}, {"language_code": "fr", "language_route": "https://www.eaglerider.com/location-moto"}, {"language_code": "es", "language_route": "https://www.eaglerider.com/alquiler-de-motos"}, {"language_code": "nl", "language_route": "https://www.eaglerider.com/motorverhuur"}, {"language_code": "it", "language_route": "https://www.eaglerider.com/noleggio-moto"}, {"language_code": "pt", "language_route": "https://www.eaglerider.com/aluguel-de-motos"}, {"language_code": "zh", "language_route": "https://www.eaglerider.cn/"}, {"language_code": "ru", "language_route": "https://www.eaglerider.com/ru"}, {"language_code": "ar", "language_route": "https://www.eaglerider.com/ar"}, {"language_code": "ko", "language_route": "https://www.eaglerider.com/ko"}, {"language_code": "sv", "language_route": "https://www.eaglerider.com/sv"}, {"language_code": "no", "language_route": "https://www.eaglerider.com/motorsykkelleie"}, {"language_code": "da", "language_route": "https://www.eaglerider.com/motorcykeludlejninger"}, {"language_code": "ja", "language_route": "https://www.eaglerider.com/ja"}],
            membership_enabled: false,
            has_operational_membership: false,
            errors: {
                something_went_wrong_while_contacting_server: 'Something went wrong while contacting server!'
            },
            enableCaptcha: true
        });

        if(window.onDomLoadFN)
        {
            window.onDomLoadFN();
        }


        ER.Layout.hideSpinner();
    });

    $(window).load(function() {
        ER.Layout.onWindowLoad();

        if(window.onPageLoadFN)
        {
            window.onPageLoadFN();
        }

    });

</script>

<div class="homeHelp needHelp ">
    <div class="container">
		<?php if(empty($_GET["lang"])): ?>
        <div class="row">
            <div class="span3 titleIt"><p class="anyQuestions"><?php echo $side[0]['title'] ?></p></div>
            <div class="needHelpContent span9">
                <div class="faq">
                    <a title="Frequent Questions" href="/index.php/Bottom_info" class="btn-highlight js-faqTrigger">
                        <span class="icn-faq"></span><?php echo $side[0]['head'] ?>
                    </a>
                </div>

                <div class="phones">
                    <a class="btn-highlight" href="tel:+1 310-321-3180"><span class="icn-phone"></span><?php echo $side[0]['foot'] ?></a>
                </div>
            </div>
        </div>
		<?php endif; ?>
		<?php if(isset($_GET["lang"])): ?>
            <div class="row">
                <div class="span3 titleIt"><p class="anyQuestions"><?php echo $side[0]['title_en'] ?></p></div>
                <div class="needHelpContent span9">
                    <div class="faq">
                        <a title="Frequent Questions" href="/index.php/Bottom_info" class="btn-highlight js-faqTrigger">
                            <span class="icn-faq"></span><?php echo $side[0]['head_en'] ?>
                        </a>
                    </div>

                    <div class="phones">
                        <a class="btn-highlight" href="tel:+1 310-321-3180"><span class="icn-phone"></span><?php echo $side[0]['foot_en'] ?></a>
                    </div>
                </div>
            </div>
		<?php endif; ?>

    </div>
</div>
<div class="harley_content js-harley-content-container"></div>

<div class='js-harley-content hidden'>
    <div class="row-fluid">
        <div class="span1">
            <img class="pull-right" src="/public/image/membership-ad-9112a9cffe4b39259dc87b286c0e1a0b.jpg">
        </div>
        <div class="span8">
            <h3>EagleRider is The Exclusive U.S. Provider of Rentals and Tours for Harley-Davidson</h3>
            <p> Harley-Davidson Motor Company has formed an exclusive alliance with EagleRider, the world&#x27;s largest motorcycle rental and tour company. Motorcycle enthusiasts and travelers are able to rent and tour on the most current Harley-Davidson Touring and Cruiser motorcycles at EagleRider locations around the country. Customers will also benefit from an expanded network of EagleRider pick-up and drop-off points, as many of them will be located in Harley-Davidson dealerships across the country. Customers nationwide will be able to pick up a motorcycle near their home, take their dream trip, and drop off the same motorcycle near their destination.</p>
        </div>
        <div class="span3">
            <a class="right closeHarley js-closeHarley"><span class="icons-x"></span></a>
            <a href="https://www.harley-davidson.com/" class="back-harley">Back to Harley-Davidson
            </a>
        </div>
    </div>
</div>
<footer class="globalFooter">

    <div class="footerLinks container">
        <div class="row-fluid">
			<?php if(isset($_GET["lang"])): ?>
            <div class="span2 footer-links-col">
                <p class="title">RENTALS</p>

                <div class="linksBox">
                    <ul class="navVertical">
						<?php foreach ($rent_list as $key=>$rent_lists): ?>
                        <li dir="ltr">
                            <a href="/index.php/Rent?id=<?php echo $rent_lists['brand_id']?>"><?php echo $rent_lists['product_brand_en']?></a>
                        </li>
						<?php endforeach; ?>
                    </ul>
                </div>
            </div>
			<?php endif; ?>
			<?php if(empty($_GET["lang"])): ?>
                <div class="span2 footer-links-col">
                    <p class="title">租赁</p>

                    <div class="linksBox">
                        <ul class="navVertical">
							<?php foreach ($rent_list as $key=>$rent_lists): ?>
                                <li dir="ltr">
                                    <a href="/index.php/Rent?id=<?php echo $rent_lists['brand_id']?>"><?php echo $rent_lists['product_brand']?></a>
                                </li>
							<?php endforeach; ?>
                        </ul>
                    </div>
                </div>
			<?php endif; ?>
            <!-- column -->
			<?php if(isset($_GET["lang"])): ?>
            <div class="span2 footer-links-col">
                <p class="title">TOURS</p>

                <div class="linksBox">
                    <ul class="navVertical">
                        <li>
                            <a href="trave?lang=en">Motorcycle tour</a>
                        </li>
                        <li>
                            <a href="team?lang=en">Motorcycle tour</a>
                        </li>
                        <li>
                            <a href="classify?lang=en">Motorcycle trip</a>
                        </li>
                        <li>
                            <a href="hot_trave?lang=en">
                                Popular motorcycle Tours
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
			<?php endif; ?>
			<?php if(empty($_GET["lang"])): ?>
                <div class="span2 footer-links-col">
                    <p class="title">摩托车旅游</p>

                    <div class="linksBox">
                        <ul class="navVertical">
                            <li>
                                <a href="trave">摩托车旅游</a>
                            </li>
                            <li>
                                <a href="team">摩托车团队游</a>
                            </li>
                            <li>
                                <a href="classify">摩托车自驾游</a>
                            </li>
                            <li>
                                <a href="hot_trave">
                                    热门摩托车旅行
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
			<?php endif; ?>
            <!-- column -->
			<?php if(isset($_GET["lang"])): ?>
            <div class="span2 footer-links-col">
                <p class="title">CITY</p>

                <div class="genericBox linksBox">
                    <ul class="navVertical">
						<?php foreach ($get_limit as $key=>$get_limits): ?>
                        <li>
                            <a href="#">
								<?php echo $get_limits['cit_name_en']?>
                            </a>
                        </li>
						<?php endforeach; ?>
                        <li>
                            <a href="City?lang=en">
								MORE CITY
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
			<?php endif; ?>
			<?php if(empty($_GET["lang"])): ?>
                <div class="span2 footer-links-col">
                    <p class="title">城市</p>

                    <div class="genericBox linksBox">
                        <ul class="navVertical">
							<?php foreach ($get_limit as $key=>$get_limits): ?>
                                <li>
                                    <a href="#">
										<?php echo $get_limits['cit_name']?>
                                    </a>
                                </li>
							<?php endforeach; ?>
                            <li>
                                <a href="City">
                                    更多城市
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
			<?php endif; ?>
			<?php if(isset($_GET["lang"])): ?>
            <div class="span3 footer-links-col">
                <p class="title">INFORMATION</p>

                <div class="genericBox linksBox">
                    <ul class="navVertical">
                        <li>
                            <a href="/index.php/Bottom_info?lang=en">
								<?php foreach ($bottom_info as $key=>$bottom_infos): ?>
									<?php echo $bottom_infos['title_en']?> <br>
								<?php endforeach; ?>
                                INFORMATION
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
			<?php endif; ?>
			<?php if(empty($_GET["lang"])): ?>
                <div class="span3 footer-links-col">
                    <p class="title">相关信息</p>

                    <div class="genericBox linksBox">
                        <ul class="navVertical">
                            <li>
                                <a href="/index.php/Bottom_info">
									<?php foreach ($bottom_info as $key=>$bottom_infos): ?>
										<?php echo $bottom_infos['title']?> <br>
									<?php endforeach; ?>
                                    更多信息
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>

			<?php endif; ?>
        </div><!-- row-fluid -->
    </div><!-- footer links -->
    <div style="display: none;"><?php echo $bottom_info_all[8]['text'];?></div>
    <div class="footerSummary">
        <div class="container">
            <div class="row-fluid">
                <div class="span2">
                    <a class="brand" href="Javascript:;">
                        <img src="<?php echo $bottom_info_all[7]['image']?>" style="width: 60px;">
                    </a>
                </div>

                <div class="span4 contacts">
                    <div class="footer_contacts_con">
						<?php if(isset($_GET["lang"])): ?>
                        <p class="cr">
							<?php echo $bottom_info_all[7]['title_en']?>
                        </p>
						<?php endif; ?>
						<?php if(empty($_GET["lang"])): ?>
                            <p class="cr">
								<?php echo $bottom_info_all[7]['title']?>
                            </p>
						<?php endif; ?>
                    </div>
                    <div class="gts_container" id="gts_container"></div>
                </div>
                <div class="clearfix"></div>


                <div class="clearfix"></div>
            </div>
        </div>
    </div><!-- footer summary -->
</footer>
</body>
<script src="/public/js/style.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".main-nav li.dropdown a").each(function(){
			$this = $(this).parents('.topp li.dropdown');
			if(this.href==window.location.href){
				$this.addClass("active").siblings().removeClass('active')
			}
		});
		$(".art_option a").each(function(){
			$this = $(this).parents('.art_option');
			if(this.href==window.location.href){
				$this.addClass("selected").siblings().removeClass('selected')
			}
		});
	});
</script>
</html>