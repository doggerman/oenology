 <?php if(is_archive()) { 
	$post = $posts[0]; // Hack. Set $post so that the_date() works.
	if (is_category()) { // If this is a category archive  ?>
		<div class="cat-subscribe-feed">
			<a href="<?php echo home_url(); ?>/category/<?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->category_nicename;?>/feed/">
				<img src="<?php echo get_template_directory_uri(); ?>/images/subscribewide.jpg" width="120px" height="29" alt="Subscribe to the <?php echo single_cat_title(); ?> category feed" />
				<?php echo single_cat_title(); ?> category feed</a>
		</div>
		<h2 class="pagetitle"><?php echo single_cat_title(); ?></h2>
		<div class="cat-description">
			<?php if ( category_description() ) { 
				echo category_description(); 
			} else { 
				echo 'Posts filed under ';
				echo single_cat_title(); 
			}?>
		</div>		
	<?php }  elseif (is_tag()) { // If this is a tag archive  ?>
		<div class="cat-subscribe-feed">
			<a href="<?php echo get_tag_feed_link( $wp_query->get( 'tag_id' ) ); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/subscribewide.jpg" width="120px" height="29" alt="Subscribe to the <?php echo single_tag_title(); ?> tag feed" />
				<?php echo single_tag_title(); ?> tag feed</a>					
		</div>
		<h2 class="pagetitle"><?php echo single_tag_title(); ?></h2>
			<div class="cat-description">
			<?php if ( tag_description() ) { 
				echo tag_description(); 
			} else { 
				echo 'Posts tagged as ';
				echo single_tag_title(); 
			}?>
			</div>		
	<?php }
} elseif ( is_search() ) { // If this is a search results page ?>
	<h2 class="pagetitle">Results for "<?php the_search_query(); ?>" Search</h2>
	<div class="cat-description">
		<strong>Search:</strong><em>to inquire, investigate, examine, or seek; conduct an examination or investigation.</em>Below are all posts and pages related to the indicated search query.
	</div>
<?php }  
/*
Reference:
=============================================================================
The following functions, tags, and hooks are used (or referenced) in this Theme template file:

***********************
bloginfo()
----------------------------------
bloginfo() is a WordPress template tag.  
Codex reference: http://codex.wordpress.org/Function_Reference/bloginfo

bloginfo() can be used to print several useful WordPress-related parameters. For example:

	template_directory = (url of the directory that contains the currently active theme)
	
For the full list of parameters returned by bloginfo(), see the Codex.

bloginfo() prints (displays/outputs) the data requested. To get, but not display/output the data, use get_bloginfo() instead.

***********************
category_description()
----------------------------------
category_description() is a WordPress template tag.
Codex reference: http://codex.wordpress.org/Function_Reference/category_description

category_description() is used to display the description for the current category.

category_description( $cat ) accepts one argument:
 - $cat: category (ID) for which to display the description. Defaults to current category.

 category_description() must be used within the Loop, unless given a category ID 
 using the $cat argument.

***********************
get_tag_feed_link()
----------------------------------
get_tag_feed_link() is a WordPress template tag.
Codex reference: N/A

get_tag_feed_link() returns the link for the RSS feed for the specified tag.

get_tag_feed_link( $tagid, $feed ) accepts two arguments:
 - $tagid: ID of the tag for which to display the RSS feed.
 - $feed: feed format ('rss', 'rss2', 'atom'). Defaults to user-defined default.

Example:
get_tag_feed_link( $wp_query->get( 'tag_id' ) ); returns the default RSS feed for the
current tag (e.g. when on a tag page).

get_tag_feed_link() must be used outside the Loop.

***********************
get_the_category()
----------------------------------
get_the_category() is a WordPress function.
Codex reference: http://codex.wordpress.org/Function_Reference/get_the_category

get_the_category() returns an array of categories for the current page. The returned 
array includes the following variables:
 - $cat[n]->cat_ID: the ID of category 'n'
 - $cat[n]->cat_name: the name of category 'n'
 - $cat[n]->category_nicename: the nicename (slug) of category 'n'
 - $cat[n]->category_description: the description of category 'n'
 - $cat[n]->category_parent: the name of the parent category of category 'n'
 - $cat[n]->category_count: the count of posts included in category 'n'

get_the_category( $id ) accepts one argument:
 - $id: post ID for which to return the category array. Defaults to current post ID.

Example:
<?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->category_nicename;?>
displays the nicename (slug) of the first category returned in the category array.

get_the_category() must be used inside the loop, unless a post ID is passed 
using the $id argument.

***********************
is_archive()
----------------------------------
is_archive() is a WordPress template conditional tag.
Codex reference: http://codex.wordpress.org/Function_Reference/is_archive

is_archive() is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
an archive page is currently displayed.

An archive page corresponds to the archive.php Theme template file in the
Theme hierarchy, and if the body_class() hook is used, the <body> tag of an
page will have class="archive".

***********************
is_category()
----------------------------------
is_category() is a WordPress template conditional tag.
Codex reference: http://codex.wordpress.org/Function_Reference/is_category

is_category() is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
a category page is currently displayed.

A category page corresponds to the category.php Theme template file in the
Theme hierarchy, and if the body_class() hook is used, the <body> tag of an
page will have class="category".

is_category( $category ) accepts one optional argument:
 - $category: category ID, slug, or nicename. If used, will return TRUE if the current
  page corresponds to the indicated category.

***********************
is_search()
----------------------------------
is_search() is a WordPress template conditional tag.
Codex reference: http://codex.wordpress.org/Function_Reference/is_search

is_search() is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
a search results page is currently displayed.

A search results page corresponds to the search.php Theme template file in the
Theme hierarchy, and if the body_class() hook is used, the <body> tag of an
page will have class="search".

***********************
is_tag()
----------------------------------
is_tag() is a WordPress template conditional tag.
Codex reference: http://codex.wordpress.org/Function_Reference/is_tag

is_tag() is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
a tag page is currently displayed.

A tag page corresponds to the tag.php Theme template file in the
Theme hierarchy, and if the body_class() hook is used, the <body> tag of an
page will have class="tag".

is_tag( $tag ) accepts one optional argument:
 - $tag: tag ID, slug, or nicename. If used, will return TRUE if the current
  page corresponds to the indicated tag.

***********************
single_cat_title()
----------------------------------
single_cat_title() is a WordPress template tag.
Codex reference: http://codex.wordpress.org/Function_Reference/single_cat_title

single_cat_title() is used to display the title for the current category when displaying
the category page.

single_cat_title( $prefix, $display ) accepts one argument:
 - $prefix: string to display before the category title. Defaults to 'null'
 - $display: boolean (TRUE or FALSE) display value. Defaults to 'true' (display)

single_cat_title() must be used outside the Loop.

***********************
single_tag_title()
----------------------------------
single_tag_title() is a WordPress template tag.
Codex reference: http://codex.wordpress.org/Function_Reference/single_tag_title

single_tag_title() is used to display the title for the current tag when displaying
the tag page.

single_tag_title( $prefix, $display ) accepts one argument:
 - $prefix: string to display before the category title. Defaults to 'null'
 - $display: boolean (TRUE or FALSE) display value. Defaults to 'true' (display)

single_tag_title() must be used outside the Loop.

***********************
tag_description()
----------------------------------
tag_description() is a WordPress template tag.
Codex reference: http://codex.wordpress.org/Function_Reference/tag_description

tag_description() is used to display the description for the current category.

tag_description( $tag ) accepts one argument:
 - $tag: category (ID) for which to display the description. Defaults to current category.

 tag_description() must be used within the Loop, unless given a tag ID 
 using the $tag argument.

***********************
the_search_query()
----------------------------------
the_search_query() is a WordPress template tag.
Codex reference: http://codex.wordpress.org/Function_Reference/the_search_query

the_search_query() displays the current search query entered via the search form.

the_search_query() accepts no arguments.

Example:
'Search results for "<?php the_search_query(); ?>" search' will display (assuming
the user entered 'lorem ipsum' as the search query): 'Search results for "lorem ipsum" search'

=============================================================================
*/ ?>