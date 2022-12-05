<link rel="stylesheet" type="text/css" href="/css/styles.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100&display=swap" rel="stylesheet">

<body>
    <div class="bg-tosca">
        <div class="cust-container vh-center">
            <h1>{{ $jawaban->nama_penyakit }}</h1>
            {!! $jawaban->solusi !!}<br><br>
            <img src="image/G_Penyakit/G_{{$jawaban->id_penyakit}}.jpg" height="100px" width="100px"/>
            <div class="btn-grp">
                <button class="btn btn-primary" type="button" id="kembali" value="Kembali"></input>
                <script>
                    document.querySelector('#kembali').addEventListener('click', function(){
                        window.history.back();
                    });
                </script>
            
            </div>
        </div>
    </div>
</body>

</html>
