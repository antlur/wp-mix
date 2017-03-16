<?php

function set_uploads_path()
{
    $current_uploads_path = get_option('upload_url_path');
    $clean_uploads_path = content_url('uploads');
    if(empty($current_uploads_path) || $current_uploads_path !== $clean_uploads_path ){
        update_option('upload_url_path', $clean_uploads_path );
    }
}

set_uploads_path();
