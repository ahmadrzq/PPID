<html>

<head>
    <meta http-equiv=Content-Type content="text/html; charset=UTF-8">
    <style type="text/css">
        <!--
        span.cls_002 {
            font-family: "Calibri", serif;
            font-size: 11.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_002 {
            font-family: "Calibri", serif;
            font-size: 11.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_003 {
            font-family: "Calibri", serif;
            font-size: 14.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_003 {
            font-family: "Calibri", serif;
            font-size: 14.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_004 {
            font-family: "Calibri", serif;
            font-size: 12.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        div.cls_004 {
            font-family: "Calibri", serif;
            font-size: 12.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_006 {
            font-family: "Calibri", serif;
            font-size: 11.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: line-through
        }

        div.cls_006 {
            font-family: "Calibri", serif;
            font-size: 11.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }

        span.cls_005 {
            font-family: "Calibri Italic", serif;
            font-size: 10.0px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: italic;
            text-decoration: none
        }

        div.cls_005 {
            font-family: "Calibri Italic", serif;
            font-size: 10.0px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: italic;
            text-decoration: none
        }
        -->
    </style>
    <script type="text/javascript" src="035bc0f2-9f75-11eb-8b25-0cc47a792c0a_id_035bc0f2-9f75-11eb-8b25-0cc47a792c0a_files/wz_jsgraphics.js"></script>
</head>

<body>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:600px;height:841px;overflow:hidden">
        <div style="position:absolute;left:50px;top:70px">
            <img src="http://localhost/PPID/public/web/images/logokota.png" width=50 height=60>
        </div>
        <div style="position:absolute;left:113.90px;top:74.46px" class="cls_002"><span class="cls_002">PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI</span></div>
        <div style="position:absolute;left:113.90px;top:94.62px" class="cls_002"><span class="cls_002">KOTA PROBOLINGGO</span></div>
        <div style="position:absolute;left:113.90px;top:114.78px" class="cls_002"><span class="cls_002">Jl. Dr. Moch Saleh No. 5 Probolinggo</span></div>
        <div style="position:absolute;left:200.93px;top:160.38px" class="cls_003"><span class="cls_003">BUKTI PERMOHONAN INFORMASI</span></div>
        <div style="position:absolute;left:219.17px;top:178.86px" class="cls_004"><span class="cls_004">Nomor registrasi : {{$permohonan->kode}}</span></div>
        <div style="position:absolute;left:72.02px;top:217.14px" class="cls_002"><span class="cls_002">Nama Pemohon</span></div>
        <div style="position:absolute;left:216.05px;top:217.14px" class="cls_002"><span class="cls_002">: {{$permohonan->nama}}</span></div>
        <div style="position:absolute;left:72.02px;top:239.61px" class="cls_002"><span class="cls_002">Alamat</span></div>
        <div style="position:absolute;left:216.05px;top:239.61px" class="cls_002"><span class="cls_002">: {{$permohonan->alamat}}</span></div>
        <div style="position:absolute;left:72.02px;top:262.17px" class="cls_002"><span class="cls_002">Telepon</span></div>
        <div style="position:absolute;left:216.05px;top:262.17px" class="cls_002"><span class="cls_002">: {{$permohonan->telepon}}</span></div>
        <div style="position:absolute;left:72.02px;top:284.61px" class="cls_002"><span class="cls_002">Email</span></div>
        <div style="position:absolute;left:216.05px;top:284.61px" class="cls_002"><span class="cls_002">: {{$permohonan->email}}</span></div>
        <div style="position:absolute;left:72.02px;top:307.05px" class="cls_002"><span class="cls_002">Judul Informasi</span></div>
        <div style="position:absolute;left:216.05px;top:307.05px" class="cls_002"><span class="cls_002">: {{$permohonan->judul}}</span></div>
        <div style="position:absolute;left:72.02px;top:329.61px" class="cls_002"><span class="cls_002">Komponen Tujuan</span></div>
        <div style="position:absolute;left:216.05px;top:329.61px" class="cls_002"><span class="cls_002">: {{$permohonan->dinas->nama}}</span></div>
        <div style="position:absolute;left:72.02px;top:352.05px" class="cls_002"><span class="cls_002">Tujuan Penggunaan</span></div>
        <div style="position:absolute;left:216.05px;top:352.05px" class="cls_002"><span class="cls_002">: {{$permohonan->tujuanInformasi}}</span></div>
        <div style="position:absolute;left:72.02px;top:374.61px" class="cls_002"><span class="cls_002">Cara Memperoleh Informasi</span></div>
        <div style="position:absolute;left:216.05px;top:374.61px" class="cls_002"><span class="cls_002">:</span></div>
        <div style="position:absolute;left:223.97px;top:374.61px" class="cls_006"><span class="cls_006">1. Melihat/membaca/mendengarkan/mencatat</span></div>
        <div style="position:absolute;left:228.05px;top:397.05px" class="cls_002"><span class="cls_002">2. Mendapatkan salinan Informasi (Hardcopy / Sofcopy)</span></div>
        <div style="position:absolute;left:78.50px;top:476.75px" class="cls_002"><span class="cls_002">Petugas Pelayanan Informasi</span></div>
        <div style="position:absolute;left:376.39px;top:479.63px" class="cls_004"><span class="cls_004">Pemohon</span></div>
        <div style="position:absolute;left:376.39px;top:527.15px" class="cls_004"><span class="cls_004">{{$permohonan->nama}}</span></div>
        <div style="position:absolute;left:78.50px;top:530.87px" class="cls_004"><span class="cls_004">PPID Kota Probolinggo</span></div>
        <div style="position:absolute;left:182.21px;top:642.14px" class="cls_005"><span class="cls_005">Lembaran ini diterbitkan oleh PPID Kota Probolinggo dan dicetak pada sabtu, 20 Desember 2021</span></div>
    </div>

</body>

</html>