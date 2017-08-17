<!-- reference:http://www.myu-zin.com/webridge/archives/268.html -->

<?php
/*
Template Name: images_ForPhotoPage
*/
?>
<?php
	// initialize variable 変数の初期化
	$per_page =20;
	$per_row = 4;
	$max_width = 320;
	$max_height =315;
	/*
	$per_page = 10;
	$per_row = 2;
	$max_width = 200;
	$max_height = 150;
	*/
	// Get the number of Photos 画像の数を得る
	$sql = <<< HERE
	SELECT COUNT(a.ID) FROM $wpdb->posts a, $wpdb->posts p
	WHERE a.post_parent = p.ID
	AND a.post_mime_type LIKE 'image/%'
	AND a.post_type = 'attachment'
	AND p.post_status = 'publish'
HERE;
	$count = $wpdb->get_var($sql);
	// Calicurate the number of pages from the number of Photos 画像の数から全ページ数を求める
	$page_counts = ceil($count / $per_page);
	// Get Page No. from URL URLからページ番号を得る
	$page_no = intval($wp_query->get('paged'));
	if ($page_no < 1) {
		$page_no = 1;
	}
	else if ($page_no > $page_counts) {
		$page_no = $page_counts;
	}
	// Calicurate offset オフセットを求める
	$offset = ($page_no - 1) * $per_page;
	// Calicurate the number of the first picture and the last picture in a page ページ内の先頭と最後の画像の番号を求める
	$page_start = ($page_no - 1) * $per_page + 1;
	$page_end = $page_no * $per_page;
	if ($page_end > $count) {
		$page_end = $count;
	}
	// Load a picture 画像を読み込む
	$sql = <<< HERE
	SELECT a.* FROM $wpdb->posts a, $wpdb->posts p
	WHERE a.post_parent = p.ID
	AND a.post_mime_type LIKE 'image/%'
	AND a.post_type = 'attachment'
	AND p.post_status = 'publish'
	ORDER BY a.post_date DESC
	LIMIT $offset, $per_page
HERE;
	$attachments = $wpdb->get_results($sql);
?>

<?php get_header(); ?>
<?php get_template_part( 'sidebar-timeline' ); ?>

	<div id="listimage">

		<div id="contentimage" class="gallery  large-9 columns">

			<h3>Photo</h3>

			<?php
			$ctr = 0;
			// Print a picture in turn 画像を順に出力する
			foreach ($attachments as $attachment) :
				// Get the title and URL of the picture you uploaded 画像の貼り付け先投稿のタイトルとアドレスを得る
				$post = get_post($attachment->post_parent);
				setup_postdata($post);
				$attached_title = get_the_title($post->ID);
				$attached_url = get_permalink($post->ID);

				// Make an adress, title and brief summary of the picture 画像のアドレス／概要／タイトルを得る
				$post = $attachment;
				setup_postdata($post);
                                $url = wp_get_attachment_url($post->ID);
                                $alt = $post->post_content;
				$title = $post->post_excerpt;

				// Calicurate the width and height of the picture 画像の幅と高さを求める
				$at_data = wp_get_attachment_metadata($post->ID);
				$width = $at_data['width'];
				$height = $at_data['height'];
				if (!$width || !$height) {
					$width = $max_width;
					$height = $max_height;
				}

				// 画像の縦横比を維持したまま、
				// 幅が$max_width／高さが$max_heightに収まるように
				// サイズを計算しなおす
				if ($width > $max_width || $height > $max_height) {
					// 横長の画像の場合
					if ($width / $height >= $max_width / $max_height) {
						$rate = $max_width / $width;
						$width = $max_width;
						$height = $height * $rate;
					}
					// 縦長の画像の場合
					else {
						$rate = $max_height / $height;
						$width = $width * $rate;
						$height = $max_height;
					}
				}

				// 行の先頭／最後かどうかを、変数$row_first／$row_endに代入する
				$row_first = ($ctr % $per_row == 0);
				$row_end = ($ctr % $per_row == $per_row - 1);
			?>

<!-- For a picture 一枚分 -->
<div class="gallery-item">
	<p>
		<a href="<?php echo $url; ?>" class="thickbox" rel="prettyPhoto">
			<img src="<?php echo $url; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php echo $alt ?>" title="<?php echo $title ?>" />
		</a>
	</p>

	<!-- <span><a href="<?php echo $attached_url; ?>" title="<?php echo $attached_title; ?>jump to the image"><?php echo $attached_title; ?></a></span> -->
</div>

			<?php endforeach; ?>
			<?php if ($ctr % $per_row != 0) : while ($ctr % $per_row != 0) : ?>

<div class="gallery-item">&nbsp;</div>

			<?php $ctr++; endwhile; ?>

			<?php endif; ?>

<!-- A picture up to here  ここまで画像 -->
<div style="clear:both;"></div>

			<?php if ($page_counts > 1) : ?>
			<p class="page-list">
			<?php if ($page_no != 1) : ?>
				<span class="mark"><a href="<?php echo get_pagenum_link(1); ?>">Page 1</a></span>
				<span class="mark"><a href="<?php echo get_pagenum_link($page_no - 1); ?>"> &larr; Previous </a></span>
			<?php endif; ?>
			<?php for ($i = 1; $i <= $page_counts; $i++) : ?>
				<?php if ($i == $page_no) : ?>
				<span class="namber now"><?php echo $i; ?></span>
				<?php else : ?>
				<span class="namber"><a href="<?php echo get_pagenum_link($i); ?>"><?php echo $i; ?></a></span>
			<?php endif; ?>
			<?php endfor; ?>
			<?php if ($page_no != $page_counts) : ?>
				<span class="mark"><a href="<?php echo get_pagenum_link($page_no + 1); ?>">Next &rarr; </a></span>
				<span class="mark"><a href="<?php echo get_pagenum_link($page_counts); ?>">Last Page</a></span>
			<?php endif; ?>
			</p>
			<?php endif; ?>

</div>

<?php get_footer(); ?>