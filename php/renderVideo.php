<?php
function render($src, $placeholder, $height, $width, $minR, $minG, $minB, $maxR, $maxG, $maxB, $videoId, $instanceId, $preload)
{

    echo '<script>
        var loadProcessor = function(){
            processor.doLoad(' . $minR . ', ' . $minG . ', ' . $minB . ', ' . $maxR . ', ' . $maxG . ', ' . $maxB . ', ' . $instanceId . ');
        };
    </script>';


    echo '
    <div class="showPauseOnHover">
        <img id="chroma-placeholder-' . $instanceId . '" src="' . $placeholder . '"
             style="">
    ';

    echo '
            <a id="chroma-play-link-' . $instanceId . '"
           href="javascript:;"
           class="chroma-video-button"
           onclick="chromaStartVideo(' . $minR . ', ' . $minG . ', ' . $minB . ', ' . $maxR . ', ' . $maxG . ', ' . $maxB . ', ' . $instanceId . ')">
            <img src="' . plugin_dir_url(__FILE__) . '../img/play-button.png" style="width:96px;">
        </a>
        
        <a id="chroma-pause-link-' . $instanceId . '"
           href="javascript:;"
           class="chroma-video-button chroma-pause-button"
           style="display:none"
           onclick="chromaPauseVideo(' . $instanceId . ')">
            <img src="' . plugin_dir_url(__FILE__) . '../img/pause-button.png" style="width:96px;">
        </a>
        ';

    echo '  
        <video id="' . $videoId . '" 
               src="' . $src . '"
               style="display:none;"
               preload="' . $preload . '"></video >
        <canvas id = "c1-' . $instanceId . '" width = "' . $width . '" height = "' . $height . '" style = "display:none;" ></canvas >
        <canvas id = "c2-' . $instanceId . '" width = "' . $width . '" height = "' . $height . '" </canvas >
    </div >
';
}


?>