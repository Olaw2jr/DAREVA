<?php
/* -- Creating a New Post Type -- */
add_action('init', 'clubs_register');  
   
function clubs_register() {  
    $args = array(  
        'label' => __('Clubs', 'dareva'),  
        'singular_label' => __('Club', 'dareva'),  
        'public' => true,  
        'show_ui' => true,  
        'capability_type' => 'post',  
        'hierarchical' => false,  
        'rewrite' => true,  
        'supports' => array('title', 'editor', 'thumbnail')  
       );  
   
    register_post_type( 'clubs' , $args );  
}


/* -- Creating the Custom Field Box -- */
add_action("admin_init", "clubs_meta_box");   
  
function clubs_meta_box(){  
    add_meta_box("clubInfo-meta", "Clubs Options", "clubs_meta_options", "clubs", "side", "low");  
}  
   
 
function clubs_meta_options(){  
        global $post;  
        if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
        $custom = get_post_custom($post->ID);  
        $coachName = $custom["coachName"][0]; 
        $playerName = $custom["playerName"][0]; 
        
?>  
	<label>Coach:</label><input name="coachName" value="<?php echo $coachName; ?>" /> 
    <label>Player:</label><input name="playerName" value="<?php echo $playerName; ?>" />  
<?php  
    }

/* -- Saving the Custom Data -- */
add_action('save_post', 'save_clubs_link'); 
   
function save_clubs_link(){  
    global $post;  
     
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){ 
        return $post_id;
    }else{
    	update_post_meta($post->ID, "coachName", $_POST["coachName"]);
        update_post_meta($post->ID, "playerName", $_POST["playerName"]);  
    } 
}

/* -- Customizing Admin Columns -- */
add_filter("manage_edit-clubs_columns", "clubs_edit_columns");   
   
function clubs_edit_columns($columns){  
        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => "Clubs List",  
            "coachName" => "Coach",  
            "playerName" => "Players",    
        );  
   
        return $columns;  
}  
 
add_action("manage_posts_custom_column",  "clubs_custom_columns"); 
   
function clubs_custom_columns($column){  
        global $post;  
        switch ($column)  
        {  
            case "coachName":
                echo $custom["coachName"][0];
                break;  
            case "playerName":  
                $custom = get_post_custom();  
                echo $custom["payerName"][0];  
                break;   
        }  
}
