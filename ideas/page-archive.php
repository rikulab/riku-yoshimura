<?php
/*
Template Name: アーカイブ
*/?>

<?php
		global $wpdb;
		$idea = $_POST['idea'];
?>

<?php
		$wpdb->insert(
				'wp_ideas',array('idea' => $idea),
				array('%s')
		);
?> 

<?php get_header(); ?>
<body class="bg">


<main class="archive">

	<a href="<?php bloginfo('url'); ?>">
		<h1><i class="fas fa-lightbulb"></i>Ideas</h1>
	</a>

	<div class="box-wrap">
	<div class="box">
<?php
$results = $wpdb->get_results("SELECT idea FROM $wpdb->ideas");
foreach ($results as $value) {
print('<p>'.$value->idea.'</p>');
}
?>
	</div>
	</div>




</main>

<?php get_footer(); ?>
