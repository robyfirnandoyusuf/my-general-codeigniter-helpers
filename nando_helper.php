<?php

/**
 * A Lorem Ipsum generator. You can generate sentences or paragraphs.
 */
if (!function_exists('LoremIpsum')) {
    function LoremIpsum($type = '', $num = '')
    {
        $lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac lacus lectus. Duis ultrices bibendum tristique. Etiam vel est porta turpis hendrerit placerat at non mauris. Maecenas augue odio, dapibus eget auctor sit amet, rutrum nec nisl. Praesent tincidunt adipiscing auctor. Sed sollicitudin lobortis arcu, sit amet malesuada mi auctor varius. Duis eleifend pretium felis quis lobortis. Nam posuere arcu quis magna vestibulum nec pellentesque enim imperdiet. Aenean nunc augue, sodales varius molestie faucibus, tincidunt a odio. Curabitur cursus ante metus. Fusce tristique ante id magna rhoncus lobortis a sit amet risus.';
        if ($type == 'sentence') {
            return 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.';
        } elseif ($type == 'paragraphs') {
            $return = '';
            if ($num == '') {
                $return .= "<p>$lorem</p>";
            } else {
                for ($i = 0; $i < $num; $i++) {
                    if ($num == $i) {
                        $return .= $lorem;
                    } else {
                        $return .= $lorem . ' <br />';
                    }
                }
            }
            return $return;
        } else {
            // return just a sentence if the type was undifined
            return 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.';
        }
    }
}

function rupiah($value, $rp = '')
{
    if ($value) {
        if (!$rp) {
            $formated = str_replace(',', '.', number_format($value));
            return $formated;
        } else {
            $formated = 'Rp ' . str_replace(',', '.', number_format($value));
            return $formated;
        }
    } else {
        return '-';
    }
}

if (!function_exists('asset_url')) {
    function asset_url($loc)
    {
        $CI =& get_instance();
        return base_url() . 'assets/' . $loc;
    }
}

if (!function_exists('google_analytics')) {
    function google_analytics($ua = '')
    {
        // Change UA-XXXXX-X to be your site's ID
        $out = "<!-- Google Webmaster Tools & Analytics -->\n";
        $out .= '<script type="text/javascript">';
        $out .= '    var _gaq = _gaq || [];';
        $out .= "    _gaq.push(['_setAccount', '$ua']);";
        $out .= "    _gaq.push(['_trackPageview']);";
        $out .= '    (function() {';
        $out .= "      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;";
        $out .= "      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';";
        $out .= "      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);";
        $out .= "    })();";
        $out .= "</script>";
        return $out;
    }
}