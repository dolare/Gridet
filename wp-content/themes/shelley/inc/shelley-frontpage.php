<?php
/**
 * shelley theme frontpage setup
 */
?>
<?php  

	global $shelley_load_order_hero;
	global $shelley_load_order_intro;
	global $shelley_load_order_members;
	global $shelley_load_order_counters;
	global $shelley_load_order_portfolio;
	global $shelley_load_order_testimonials;
	global $shelley_load_order_services;
	global $shelley_load_order_actnow;
	get_template_part ('inc/shelley', 'variables' );
	get_template_part( 'inc/shelley/section', 'hero' ); 
	get_template_part( 'inc/shelley/section', 'intro' ); 
	get_template_part( 'inc/shelley/section', 'members' ); 
	get_template_part( 'inc/shelley/section', 'counters' ); 
	get_template_part( 'inc/shelley/section', 'portfolio' ); 
	get_template_part( 'inc/shelley/section', 'testimonials' ); 
	get_template_part( 'inc/shelley/section', 'services' ); 
	get_template_part( 'inc/shelley/section', 'actnow' ); 

?>

<?php 
	
$shelley_load_order = array(
	array("function" => "shelley_load_hero", "load_order" => $shelley_load_order_hero),
	array("function" => "shelley_load_intro", "load_order" => $shelley_load_order_intro),
	array("function" => "shelley_load_members", "load_order" => $shelley_load_order_members),
	array("function" => "shelley_load_services", "load_order" => $shelley_load_order_services),
	array("function" => "shelley_load_portfolio", "load_order" => $shelley_load_order_portfolio),
	array("function" => "shelley_load_testimonials", "load_order" => $shelley_load_order_testimonials),
	array("function" => "shelley_load_counters", "load_order" => $shelley_load_order_counters),
	array("function" => "shelley_load_actnow", "load_order" => $shelley_load_order_actnow)
);

function shelley_get_load_order($a, $b)  {
	return strnatcmp($a['load_order'], $b['load_order']);
}
	usort($shelley_load_order, 'shelley_get_load_order');

foreach($shelley_load_order as $key => $item){
	if ($item['load_order'] != 0) {
		$item['function']();
	}
}
?>