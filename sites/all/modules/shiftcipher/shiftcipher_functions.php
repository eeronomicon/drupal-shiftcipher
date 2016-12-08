<?php

function element_validate_direction($element) {
    if (!($element['#value'] == "left" || $element['#value'] == "right")) {
        form_error($element, t('The only valid Direction choices are "left" and "right".'));
    }
}

function element_validate_shift_value($element) {
    if ($element['#value'] % 26 == 0) {
        form_error($element, t('The Shift Value cannot be a multiple of 26, as that will result in a zero shift!'));
    }
}

function element_validate_phrase($element) {
  if (preg_match("/[0-9\\\\~@#$%^&\*()_+={}|<>\/\`]/", $element['#value'])) {
        form_error($element, t('Only letters, spaces, and punctuation are allowed in the phrase.'));
  }
}

function shiftcipher_phrase($input_phrase, $shift, $direction) {
    $input_array = str_split($input_phrase);
    $output_array = array();
    foreach ($input_array as $input_letter) {
        if (preg_match("/[a-zA-Z]/", $input_letter)) {
            $output_array[] = shiftcipher_letter($input_letter, $shift, $direction);
        } else {
            $output_array[] = $input_letter;
        }
    }
    return join("", $output_array);
  }

function shiftcipher_letter($input_letter, $shift, $direction) {
    $alpha = " abcdefghijklmnopqrstuvwxyz";
    $shift = fmod(($direction == "right" ? $shift : -$shift), 26);
    $position_orig = stripos($alpha, strtolower($input_letter));
    $position_new = $position_orig + $shift;
    if ($position_new > 26) {
        $position_new -= 26;
    } elseif ($position_new < 1) {
        $position_new += 26;
    }
    return $alpha[(int)$position_new];
}

function shiftcipher_printspaces($input) {
    return str_replace(' ', '&nbsp', $input);
}

?>
