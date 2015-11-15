<?php

class Waitlisted_Shortcodes {
  public static function waitlist_cta ($attrs, $content) {

    if (is_array($attrs) && array_key_exists("form", $attrs)) {
      $form_id = $attrs["form"];
    }
    else {
      $form_id = "";
    }

    if (is_array($attrs) && array_key_exists("title", $attrs)) {
      $title = $attrs["title"];
    }
    else {
      $title = "";
    }
    $inner = "<button data-form='$form_id'>Join the Waitlist</button>";

    if (!empty($content)) {
      $inner = $content;
    }
    elseif (!empty($title)) {
      $inner = "<button data-form='$form_id'>$title</button>";
    }
    return "<a href=\"#waitlisted\" data-form='$form_id'>$inner</a>";
  }

}

add_shortcode('waitlisted', array( 'Waitlisted_Shortcodes', 'waitlist_cta' ) );
