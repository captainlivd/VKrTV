<?php
$channel = $_GET['vkr'];
header("Content-Type: application/vnd.apple.mpegurl");
echo "#EXTM3U\n";
echo "#EXT-X-VERSION:3\n";
echo "#EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=250000,RESOLUTION=426x240\n";
echo "https://corsvkr.up.railway.app/http://vijaykumar.gq/live.php?c=$channel&q=250&e=.m3u8\n";
echo "#EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=400000,RESOLUTION=640x360\n";
echo "https://corsvkr.up.railway.app/http://vijaykumar.gq/live.php?c=$channel&q=400&e=.m3u8\n";
echo "#EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=600000,RESOLUTION=842x480\n";
echo "https://corsvkr.up.railway.app/http://vijaykumar.gq/live.php?c=$channel&q=600&e=.m3u8\n";
echo "#EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=800000,RESOLUTION=1280x720\n";
echo "https://corsvkr.up.railway.app/http://vijaykumar.gq/live.php?c=$channel&q=800&e=.m3u8\n";
echo "#EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=1200000,RESOLUTION=1920x1080\n";
echo "https://corsvkr.up.railway.app/http://vijaykumar.gq/live.php?c=$channel&q=1200&e=.m3u8\n";
?>