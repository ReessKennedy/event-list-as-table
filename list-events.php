<style>
@media (max-width: 600px) {
    td {
        padding: 2px 0px 7px 3px !important;
        font-size: 10px !important;
        xpadding-bottom: 8px !important;
    }
}
</style>
<table>
<tr>
<th>DATE/TIME</th>
<th>ARTIST</th>
<th>VENUE</th>
<th>LOCATION</th>
</tr>

<?
$args = array( 
'orderby' => 'date',
'order' => 'DESC',
'post_type' => 'el_events',
'posts_per_page' => '400',
// 'booktype' => 'fiction',

);
$the_query = new WP_Query( $args );
?>
<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<?
$gigname = get_the_title();
$venue = get_the_content();
$date_start = get_post_meta( get_the_ID(), 'startdate', true );
$date_end = get_post_meta( get_the_ID(), 'enddate', true );
$location = get_post_meta( get_the_ID(), 'location', true );
?>
<tr>
<td><? if(! empty($date_start) ) { echo $date_start; } ?> <? if ($date_end != $date_start) { echo '- '.$date_end; } ?></td>
<td><?php echo $gigname; ?></td>
<td><?php echo $venue; ?></td>
<td><? echo $location; ?></td>
</tr>


<?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
<?php wp_reset_query(); ?>

</table>
<br>
<br>