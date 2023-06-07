curl -X POST http://localhost:8000/post.php \
    -H 'Content-Type: application/x-www-form-urlencoded' \
    -d 'header=testowy%20header&paragraph=testowy%20paragraf&linkTekst=testowy%20link&href=www.example.org'

curl -X POST http://localhost:8000/post.php \
    -H 'Content-Type: application/x-www-form-urlencoded' \
    -d 'uploadPath=files&fileName=embed.mp4&poster=https%3A%2F%2Flf16-tiktok-common.ibytedtos.com%2Fobj%2Ftiktok-web-common-us%2Fdevelopers%2Fstatic%2Fimages%2Flogin-kit-c763a29a476a2563ccca9ff34e9b8907.jpg&header=testowy%20header&paragraph=testowy%20paragraf&linkTekst=testowy%20link&href=www.example.org'

curl 'http://localhost:8000/get.php?all=true' \
    -H 'Content-Type: application/x-www-form-urlencoded'

curl 'http://localhost:8000/get.php?entry=hjkhjkjkh' \
    -H 'Content-Type: application/x-www-form-urlencoded'

curl -X DELETE http://localhost:8000/delete.php \
    -H 'Content-Type: application/x-www-form-urlencoded' \
    -d id=hjkhjkjkh