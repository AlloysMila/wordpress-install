    <?php get_header(); ?>
    <?php
        $download_link;
        $uri = $_SERVER["REQUEST_URI"];
        $list = split("/", $uri);
        $the_ID = $list[sizeof($list) - 1];
        $error = "<div class='error'>Sorry an error must have occured!</div>";
        if(strlen($the_ID) == 32){
            global $wpdb;
            $query = "SELECT post_type from ".$wpdb->posts." WHERE post_title = '$the_ID' LIMIT 1";
            $r = $wpdb->get_var($query);
            if($r == null){ //no record of that ID exists
                echo $error;
            } else {
                //the ID is valid activate the download, now prepare a download link
                //activate the cart
                $wpdb->update($wpdb->posts,array('post_status' => 'active'),array('post_title' => $r),("%s"));
                // activatin complete
                $download_page = page_url("download",true);
                $download_link = $download_page."/".$the_ID."/".sha1($r);
            }
        } else {
            echo $error;
        }
    ?>
    <div id="my-body">
        
        <div id="content-thanks">
            <div id="congrats">Congrats on this great step you have taken, Your download is ready</div>
            <div id="download_link"><a href="<?php echo $download_link; ?>">Click Here To Download Your Copy</a></div>
        </div>
    </div>
    <?php get_footer(); ?>