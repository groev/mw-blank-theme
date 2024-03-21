<?php

// do the loop
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
