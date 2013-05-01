<?php
/**
 *function footerclass
 *crude hack to have the footer at the bottom of the page
 */
function footerclass(){
        if(is_page() || is_404()){
                return "very-bottom";
        }
}
function page_url($post_name, $returnable = false){
        $status = "publish";
        $type = "page";
        global $wpdb;
        //$wpdb->show_errors = true;
        $r = $wpdb->get_var("SELECT guid from ".$wpdb->posts. " WHERE post_type = '$type' AND post_name = '$post_name' AND post_status = '$status' LIMIT 1");
        //var_dump($r);
        if($returnable){
                return $r;
        } else {
                echo $r;
        }
}
/*
 *function shopping_cart
 *create a shopping cart thing to help mannage the purchase, stored in the wp_posts table with a custom post_type
 *@paramenter title; the unique id of the cart, also for managing sessions
 **/
function create_shopping_cart(){
        global $wpdb;
        $r = $wpdb->get_col("SELECT post_title from ".$wpdb->posts." WHERE post_type = 'cart'");
        $title = md5(sizeof($r)); // the title should be a unique md5 hash
        $time = current_time('mysql');
        $post_type = "cart"; //custom post type for the cart
        $post_status = "cold"; //status shows us if the owner completed the purchase or not, defaults to 'cold' ie not complete
        $wpdb->insert($wpdb->posts, array('post_title' => $title,
                                         'post_type' => $post_type,
                                         'post_status' => $post_status,
                                         'post_date' => $time,
                                         'post_date_gmt' => get_gmt_from_date($time) 
                        ), array("%s","%s","%s","%s"));
        return $title;
}
function activate_shopping_cart($title){
        global $wpdb;
        $wpdb->update($wpdb->posts, array('post_status' => "active"), array('post_title' => $title),array("%s"));
}
?>