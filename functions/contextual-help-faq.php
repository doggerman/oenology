<?php
/**
 * FAQ Reference Help Tab Content
 */

$tabtext = '';
$tabtext .= '<h2>' . __( 'Answers to questions frequently (or not-so-frequently) asked.', 'oenology' ) . '</h2>';
$tabtext .= '<h3>So, how do I learn from Oenology?</h3>';
$tabtext .= '<p>Each Theme template file includes a considerable amount of inline documentation, explaining the code use. Also, each template file includes a function reference, that lists each function, hook, and tag used in the file, along with a WordPress Codex reference, an explanation of the function, and example usage.</p>';
$tabtext .= '<h3>What is the Code Reference?</h3>';
$tabtext .= '<p>The Code Reference is the master cross-reference file, that contains all of the functions, template tags, and hooks used in the Theme.</p>';
$tabtext .= '<h3>Why so many template files?</h3>';
$tabtext .= '<p>Oenology is likely broken down into more template parts than the average Theme. This deconstruction is by design, in order to facilitate easier Child-Theming.</p>';
$tabtext .= '<h3>What\'s in store for the future?</h3>';
$tabtext .= '<p>First and foremost, since Oenology is intended to be a learning tool, the inline and reference documentation will be a continual work-in-progress, based upon user feedback. This documentation is complete as of Oenology Version 1.0, but will continue to be updated and improved.</p>';
$tabtext .= '<p>Other features that may be added in the future, as determined by user feedback/demand, and changes to WordPress.</p>';
$tabtext .= '<h3>What About SEO?</h3>';
$tabtext .= '<p>I am a firm believer that the single, most important criterion for SEO is good content. That said, the Theme does take apply some SEO considerations:</p>';
$tabtext .= '<ol>';
$tabtext .= '<li>The Theme assumes that the H1 heading tag will only be applied to the Post Title, and not to any post-entry content. Accordingly, if you use an H1 heading in the post-entry content, you\'ll find that it is styled rather similarly to the H2 heading tag.</li>';
$tabtext .= '<li>The Theme template files ensure that the most important content - the post-entry content - is rendered as early as possible. The loop.php template file is called first, and the sidebar-left.php and sidebar-right.php files are called second.</li>';
$tabtext .= '<li>The Theme supplies a default breadcrumb navigation function.</li>';
$tabtext .= '<li>The Theme includes plug-and-play support for the following plugins: WP-Paginate, Yoast Breadcrumbs</li>';
$tabtext .= '</ol>';
$tabtext .= '<p>Most of the rest is really up to the user. The Theme is intended to be SEO-neutral: neither hurting your SEO, nor going out of its way (and adding considerable bloat that is better added via the many good plugins available) to improve it.</p>';
return $tabtext;
?>