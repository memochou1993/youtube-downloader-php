<?php
function download($id) {
    $cmd = './bin/yt-dlp -x --audio-format mp3 -o "output/%(title)s.%(ext)s" '.$id;
    return shell_exec($cmd);
}

echo download('bu7nU9Mhpyo');
