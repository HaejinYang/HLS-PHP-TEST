<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HLS client</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/hls.js@1"></script>
<video id="video" controls playsinline autoplay></video>
<script>
    const video = document.getElementById('video');
    const videoSrc = 'http://127.0.0.1:55511/src/meta.php';
    if (Hls.isSupported()) {
        const hls = new Hls();
        hls.loadSource(videoSrc);
        hls.attachMedia(video);
        hls.startLoad();
    }
    else if (video.canPlayType('application/vnd.apple.mpegurl')) {
        video.src = videoSrc;
    }
</script>
</body>
</html>