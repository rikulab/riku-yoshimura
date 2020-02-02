<?php get_header(); ?>

<main class="top">
	<form action="./archive/" method="post">
		<a href=""><h1><i class="fas fa-lightbulb"></i>Ideas</h1></a>
		<input type="text" name="idea">
			 <input type="submit" name="" value="Memo">
	</form>
</main>



<a href="<?php bloginfo('url'); ?>/archive/">一覧ページ</a>

<?php get_footer(); ?>
