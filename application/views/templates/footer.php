<!-- Copyright Footer -->
<footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-20">
	<div class="container">
		<div class="row">
			<div class="col-md-8 text-center text-md-left g-mb-10 g-mb-0--md">
				<div class="d-lg-flex">
					<small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">2018 &copy; All Rights Reserved.</small>
					<ul class="u-list-inline">
						<li class="list-inline-item">
							<a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Privacy Policy</a>
						</li>
						<li class="list-inline-item">
							<span>|</span>
						</li>
						<li class="list-inline-item">
							<a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Terms of Use</a>
						</li>
						<li class="list-inline-item">
							<span>|</span>
						</li>
						<li class="list-inline-item">
							<a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">License</a>
						</li>
						<li class="list-inline-item">
							<span>|</span>
						</li>
						<li class="list-inline-item">
							<a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Support</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-md-4 align-self-center">
				<ul class="list-inline text-center text-md-right mb-0">
					<li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Facebook">
						<a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
					<li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Skype">
						<a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
							<i class="fa fa-skype"></i>
						</a>
					</li>
						<li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Linkedin">
							<a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
							<i class="fa fa-linkedin"></i>
						</a>
					</li>
					<li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Pinterest">
						<a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
							<i class="fa fa-pinterest"></i>
						</a>
					</li>
					<li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Twitter">
						<a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
					<li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Dribbble">
						<a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
							<i class="fa fa-dribbble"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- End Copyright Footer -->

	<a class="js-go-to u-go-to-v1" href="#!" data-type="fixed" data-position='{
	"bottom": 15,
	"right": 15
	}' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
		<i class="hs-icon hs-icon-arrow-top"></i>
	</a>
</main>

<div class="u-outer-spaces-helper"></div>


<!-- JS Global Compulsory -->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/bootstrap.min.js"></script>


<!-- JS Implementing Plugins -->
<script src="<?php echo base_url(); ?>assets/vendor/appear.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/fancybox/jquery.fancybox.min.js"></script>

<!-- JS Unify -->
<script src="<?php echo base_url(); ?>assets/js/hs.core.js"></script>
<script src="<?php echo base_url(); ?>assets/js/components/hs.carousel.js"></script>
<script src="<?php echo base_url(); ?>assets/js/components/hs.header.js"></script>
<script src="<?php echo base_url(); ?>assets/js/helpers/hs.hamburgers.js"></script>
<script src="<?php echo base_url(); ?>assets/js/components/hs.tabs.js"></script>
<script src="<?php echo base_url(); ?>assets/js/components/hs.popup.js"></script>
<script src="<?php echo base_url(); ?>assets/js/components/hs.counter.js"></script>
<script src="<?php echo base_url(); ?>assets/js/components/hs.go-to.js"></script>

<!-- JS Customization -->
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

<!-- JS Plugins Init. -->
<script>
	$(document).on('ready', function () {
	    // initialization of carousel
	    $.HSCore.components.HSCarousel.init('.js-carousel');

	    // initialization of tabs
	    $.HSCore.components.HSTabs.init('[role="tablist"]');

	    // initialization of counters
	    var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');

	    // initialization of popups with media
	    $.HSCore.components.HSPopup.init('.js-fancybox-media', {
			helpers: {
				media: {},
				overlay: {
					css: {
						'background': 'rgba(255, 255, 255, .8)'
					}
				}
			}
	    });

	    // initialization of go to
	    $.HSCore.components.HSGoTo.init('.js-go-to');
	});

	$(window).on('load', function () {
	    // initialization of header
	    $.HSCore.components.HSHeader.init($('#js-header'));
	    $.HSCore.helpers.HSHamburgers.init('.hamburger');

	    // initialization of HSMegaMenu component
	    $('.js-mega-menu').HSMegaMenu({
	      event: 'hover',
	      pageContainer: $('.container'),
	      breakpoint: 991
	    });
	});

	$(window).on('resize', function () {
		setTimeout(function () {
			$.HSCore.components.HSTabs.init('[role="tablist"]');
		}, 200);
	});
</script>







</body>

</html>