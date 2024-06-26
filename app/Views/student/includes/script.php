<script src="<?=base_url()?>/assets/admin/design_assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?=base_url()?>/assets/admin/design_assets/vendor/libs/popper/popper.js"></script>
<script src="<?=base_url()?>/assets/cdn/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>/assets/admin/design_assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/cdn/js/bootbox.min.js"></script>
<script type="text/javascript">
          var baseUrl = "<?=base_url()?>";
</script>
<script src="<?=base_url()?>/assets/student/js/cart.js?v=1.0.0"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".dropdown-main").on('click',function(){
			$(this).closest('.dropdown').find(".dropdown-menu").toggleClass('show');
		});
	})
</script>       