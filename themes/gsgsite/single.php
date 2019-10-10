<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gsgsite
 */

get_header();
?>
<<<<<<< Updated upstream

<div class="blog">
    <header id="header" class="header" style="background: url(<?php echo site_url(); ?>/wp-content/themes/gsgsite/assets/images/archive_01.jpg) center center / cover">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="blog__borderblock"></div>
					<div class="blog__borderblock"><h2 class="header__title">
					    <?php echo the_title(); ?>
					</h2></div>
					<div class="blog__borderblock">
					    <img class="decorCircle" src="<?php echo site_url() ?>/wp-content/themes/gsgsite/assets/images/blogcirc.png" alt="blogcircle">
					</div>
				</div>
			</div>
		</div>
	</header> <!-- headerSection-->
	<section id="blogpage" class="blogpage">
		<div class="container">
			<h4 class="blogpage__title">איך מתמודדים עם דייר סרבן ?  תמ”א 38
				<span>מאת מעיין בכר
				</span>
			</h4>
			<div class="row d-flex no-gutters">
				<div class="col-md-6 col-sm-12">
					<div class="blogpage__wrap">
						<h6 class="blogpage__wrap_title">
							פרויקטים רבים מסוג תמ״א 38 (חיזוק ובניה) או פינוי בינוי, לא הצליחו להתרומם במשך שנים בשל דיירים סרבנים, אשר מנעו קידום הפרויקט. לעתים המניעים שהביאו את הדיירים הסרבנים למנוע קידום הפרויקט היו מניעים סחטניים וניסיון לקבל תמורה גבוהה יותר באופן בלתי מוצדק (ולעיתים מדובר בסירוב מוצדק). בשנת 2018 תוקן החוק באופן שמקל על הטיפול בדיירים סרבנים ואשר צפוי להביא להתחלות בניה רבות ולהנעת פרויקטים התקועים במשך שנים. אז מה ניתן לעשות כשיש בבניין דייר סרבן ? וכיצד נדע האם סרבנותו סבירה ומוצדקת או לא?
=======
>>>>>>> Stashed changes

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

<<<<<<< Updated upstream
							בפרויקט תמ״א 38 (חיזוק ובניה) - הכתובת לברור הסכסוך עם הדייר הסרבן היא  המפקח על הבתים המשותפים במשרד המשפטים, אשר בסמכותו לחייב את הדייר הסרבן להסכים (למעשה לכפות עליו הסכמה),וזאת אם מצא שסירובו אינו סביר. </br>
							במחצית 2018 תוקן חוק דייר סרבן, באופן שקבע כי לעומת המצב הישן בו תביעה כנגד דייר סרבן תהיה כספית לקבלת פיצוי, במצב החדש אחרי התיקון בית המשפט מוסמך לפסוק לא רק פיצוי כספי אלא גם פינוי של הדירה המוחזקת על ידי הדייר הסרבן. במקרה של סירוב שאינו סביר, יוכל בית המשפט להוציא צו פינוי לבעל הדירה ולמנות כונס שיהיה מורשה חתימה במקומו ויוכל להתקדם מול היזם בעסקה הפינוי-בינוי. התיקון האחרון מתייחס גם למתן פתרונות לאוכלוסיית הקשישים בפרויקטים (ביחס לדיירים קשישים בני למעלה מ 80 יש חובה ליתן דיור חלופי גם במקרה של פרויקט תמ״א הכולל חיזוק ובניה בלבד).
							</p>
							<p>
							התיקון לחוק בהחלט מסייע בידי דיירים ויזמים המבקשים לקדם פרויקט תמ״א 38 או פרויקט פינוי בינוי מצד אחד, ומצד שני מגן על דיירים קשישים אשר זקוקים להגנה ודיור חלופי בעת ביצוע עבודות בבניין הישן בו הם </p>
					</div>
				</div>
			</div>
			<div class="blog__nav">
				<a href="#">< לכתבה הקודמת</a><p class="blog__nav_text">חזרה לעמוד מגזין</p><a href="#">לכתבה הבאה ></a>
			</div>
		</div>
	</section>
	</div>
=======
			// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
>>>>>>> Stashed changes

<?php
get_sidebar();
get_footer();
