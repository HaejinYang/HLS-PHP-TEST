<?php
require_once '../vendor/autoload.php';

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

use Streaming\FFMpeg;

$config = [
    'ffmpeg.binaries'  => '/usr/bin/ffmpeg',
    'ffprobe.binaries' => '/usr/bin/ffprobe',
    'timeout'          => 3600, // The timeout for the underlying process
    'ffmpeg.threads'   => 12,   // The number of threads that FFmpeg should use
];

$log = new Logger('FFmpeg_Streaming');
$log->pushHandler(new StreamHandler('../storage/log/ffmpeg-streaming.log')); // path to log file

$ffmpeg = FFMpeg::create($config, $log);

$video = $ffmpeg->open('../reference/BigBuckBunny.mp4');
$video->hls()
    ->x264()
    ->autoGenerateRepresentations([720, 360]) // You can limit the number of representatons
    ->save();