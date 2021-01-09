<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
$innov_settings = Innovation_Settings();
include('header.inc.php'); 
?>
<div class="col-12 col-md-12 p-3 p-md-5">
				<h3 class="text-center"><strong><a class="text-dark" href="<?php get_page_url(); ?>"><?php get_page_title(); ?></a></strong></h3>
				<nav class="breadcrumb justify-content-center bg-white">
  <ol class="breadcrumb bg-dark p-2 text-light">
			 <li class="breadcrumb-item">
				<a class="text-light" href="<?php get_site_url(); ?>">Home</a> </li>
				<li class="breadcrumb-item">
				<?php Innovation_Parent_Link(get_parent(FALSE)); ?> <b><?php get_page_clean_title(); ?></b>
				</li> 
				<li class="breadcrumb-item"><a class="text-light" href="<?php get_site_url(); ?>" id="logo" ><?php get_site_name(); ?></a></li>
			</ol></nav>
				<?php get_page_content(); ?>
</div>



<?php include('footer.inc.php'); ?>