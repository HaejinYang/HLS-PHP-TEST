## HLS-PHP-TEST
PHP 기반으로 HLS를 테스트 해본 레포지토리

## 필요한것
docker, composer가 설치되어 있어야함.

## 실행 방법
```
git clone https://github.com/HaejinYang/HLS-PHP-TEST.git
cd HLS-PHP-TEST
docker compose up -d --build

1. reference 디렉토리에 예제 영상을 넣는다.
2. src/index.php의 다음 코드의 이름을 변경해준다.
    $video = $ffmpeg->open('../reference/변경할이름.mp4');
3. 브라우저를 열고 127.0.0.1:55511/src/index.php에 접속
4. 파일들이 만들어지고 있는지 확인한다.
5. 안된다면 storage/log의 로그 확인
6. 다 만들어졌으면 meta.php에서 .m3u8파일의 경로와 이름을 변경
7. 브라우저에서 127.0.0.1:55511/src/client.php를 접속
```