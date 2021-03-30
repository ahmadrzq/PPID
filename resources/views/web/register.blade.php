@extends('web/layouts/master')
@section('content')
<div class="content-box content-page" style="padding-top: 110px !important;">
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li><a href="http://ppid.kemendagri.go.id">Home</a></li>
                <li><a href="#">Pengguna</a></li>
                <li><a href="#">Pendaftaran</a></li>
            </ul>
        </div>
    </div>

    <section class="content-blank blue-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <form id="form-register" method="POST" action="http://ppid.kemendagri.go.id/register" xmlns:v-bind="http://www.w3.org/1999/xhtml" xmlns:v-on="http://www.w3.org/1999/xhtml"><input type="hidden" name="_token" value="phTZRSxVWUuhY1FW2mYMenlOMHJRU6Wft0gIiwNX">
                        <div class="card card-md">
                            <h5 class="text-capitalize head-title">Pendaftaran</h5>
                            <p class="head-sub-desc">Silahkan masukan informasi Anda</p>
                            <div class="d-flex align-items-center mt-3">
                                <div class="circle-mini">A</div>
                                <p class="text-default font-600 mb-0">Informasi Pribadi</p>
                            </div>
                            <hr>
                            <div class="mb-3">
                                <div class="form-group"><label for="">Nama Lengkap</label> <input type="text" maxlength="100" name="nama" value="" placeholder="" aria-describedby="helpId" class="form-control"></div>
                                <div class="form-group"><label for="">NIK (Nomor Induk Kependudukan)</label> <input type="text" maxlength="25" name="card_no" value="" placeholder="" aria-describedby="helpId" class="form-control"></div>
                                <div class="form-group"><label for="">Alamat</label> <textarea maxlength="255" name="alamat" id="" cols="30" rows="10" class="form-control"></textarea></div>
                                <div class="form-group"><label for="">Provinsi</label> <select name="provinsi" class="form-control">
                                        <option value="1">Bali</option>
                                        <option value="2">Banten</option>
                                        <option value="3">Bengkulu</option>
                                        <option value="4">D.I. Yogyakarta</option>
                                        <option value="5">DKI Jakarta</option>
                                        <option value="6">Gorontalo</option>
                                        <option value="7">Jambi</option>
                                        <option value="8">Jawa Barat</option>
                                        <option value="9">Jawa Tengah</option>
                                        <option value="10">Jawa Timur</option>
                                        <option value="11">Kalimantan Barat</option>
                                        <option value="12">Kalimantan Selatan</option>
                                        <option value="13">Kalimantan Tengah</option>
                                        <option value="14">Kalimantan Timur</option>
                                        <option value="15">Kepulauan Bangka Belitung</option>
                                        <option value="16">Kepulauan Riau</option>
                                        <option value="17">Lampung</option>
                                        <option value="18">Maluku Utara</option>
                                        <option value="19">Maluku</option>
                                        <option value="20">Nanggroe Aceh Darussalam</option>
                                        <option value="21">Nusa Tenggara Barat</option>
                                        <option value="22">Nusa Tenggara Timur</option>
                                        <option value="23">Papua Barat</option>
                                        <option value="24">Papua</option>
                                        <option value="25">Riau</option>
                                        <option value="26">Sulawesi Barat</option>
                                        <option value="27">Sulawesi Selatan</option>
                                        <option value="28">Sulawesi Tengah</option>
                                        <option value="29">Sulawesi Tenggara</option>
                                        <option value="30">Sulawesi Utara</option>
                                        <option value="31">Sumatera Barat</option>
                                        <option value="32">Sumatera Selatan</option>
                                        <option value="33">Sumatera Utara</option>
                                        <option value="34">Bangka Belitung</option>
                                        <option value="35">Kalimantan Utara</option>
                                        <option value="36">Luar Negeri</option>
                                    </select></div>
                                <div class="form-group"><label for="">Kota atau Kabupaten</label> <select name="kabkota" class="form-control"></select></div>
                                <div class="form-group"><label for="">No. Kontak</label> <input type="tel" maxlength="25" name="telepon" value="" placeholder="" aria-describedby="helpId" class="form-control"></div>
                            </div>
                            <div class="d-flex align-items-center w-100">
                                <div class="circle-mini">B</div>
                                <p class="text-default font-600 mb-0">Informasi Login</p>
                            </div>
                            <hr>
                            <div class="mb-3">
                                <div role="alert" class="alert alert-info">
                                    Untuk dapat menggunakan fitur PPID, Anda harus memiliki Email Aktif dan Password. Silakan tentukan Email
                                    Aktif dan password Anda
                                </div>
                                <div class="form-group"><label for="">Email Aktif</label> <input type="email" maxlength="225" name="reg_email" value="" placeholder="" aria-describedby="helpId" class="form-control"></div>
                                <div class="form-group"><label for="">Password</label> <input type="password" maxlength="100" name="reg_pass" value="" placeholder="" aria-describedby="helpId" class="form-control"></div>
                                <div class="form-group"><label for="">Konfirmasi Password</label> <input type="password" maxlength="100" name="reg_pass_confirmation" placeholder="" aria-describedby="helpId" class="form-control"></div>
                                <div class="form-group">
                                    <div style="width: 100%;"><a href="javascript: refreshCaptcha();" style="float: right;"><img src="http://ppid.kemendagri.go.id/images/refresh-circle-blue.png" class="icon-refresh"></a> <img id="captchaimg" src="http://ppid.kemendagri.go.id/ppid/captcha?rand=150124283" style="float: left;">
                                        <div style="clear: both;"></div>
                                    </div>
                                </div>
                                <div class="form-group"><label for="">Masukan Captcha Di Atas</label> <input type="text" name="captcha_code" placeholder="" aria-describedby="helpId" class="form-control"></div>
                            </div>
                            <div class="d-flex justify-content-end mt-3"><button type="submit" class="btn btn-primary">Daftarkan Akun</button></div>
                        </div>
                    </form>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-circle rgba-blue">
                            <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/avatar.png" class="img-fluid" alt="" width="20">
                        </div>
                        <p class="text-default font-600 mb-0">Ketentuan Pengguna</p>
                    </div>

                    <div class="accordion" id="QuestionAnswer">
                        <div class="mb-3">
                            <div id="KP1">
                                <div class="header-qa box w-100 rotate-icon-collapse d-flex align-items-center" data-toggle="collapse" data-target="#KP_Umum" aria-expanded="true" aria-controls="collapseOne">
                                    Umum
                                </div>
                            </div>

                            <div id="KP_Umum" class="col-body content-white collapse show" aria-labelledby="KP1" data-parent="#KP_Umum">
                                <ol class="list-numeric">
                                    <li>
                                        <p>Pengguna adalah siapa saja yang memanfaatkan layanan SIP PPID baik sebagai individu maupun
                                            lembaga.</p>
                                    </li>

                                    <li>
                                        <p>Dengan menggunakan Layanan ini Pengguna menyetujui sepenuhnya Persyaratan dan Ketentuan Layanan
                                            yang diuraikan di dalam dokumen ini. Jika Pengguna tidak menyetujui Persyaratan dan Ketentuan
                                            Layanan ini, harap jangan gunakan Layanan ini.</p>
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div id="KP2">
                                <div class="header-qa box w-100 rotate-icon-collapse d-flex align-items-center collapsed" data-toggle="collapse" data-target="#KP_KetentuanPenggunaan" aria-expanded="false" aria-controls="collapseOne">
                                    Ketentuan Pengguna
                                </div>
                            </div>

                            <div id="KP_KetentuanPenggunaan" class="col-body content-white collapse" aria-labelledby="KP2" data-parent="#KP_KetentuanPenggunaan">
                                <p>Seluruh sumber data dan informasi yang disimpan/direkam/diolah pada Layanan ini termasuk validasi dan verifikasi keabsahannya sepenuhnya menjadi tanggung jawab dari Pengguna Layanan.</p>
                                <p>Operasional pengelolaan seluruh data dan informasi mencakup pemutakhiran data dan informasi dimaksud sepenuhnya menjadi tanggung jawab dari Pengguna sesuai hak akses masing-masing.</p>
                                <p>Pengguna dilarang mendistribusikan data dan informasi dari Layanan ini kepada pihak ketiga kecuali telah mendapat ijin resmi dan tertulis dari Pengelola.</p>
                                <p>Pengguna berkewajiban memahami dan mematuhi Kebijakan Privasi Data dan Informasi dan Kebijakan Keamanan yang ditetapkan oleh pengelola.</p>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div id="KP3">
                                <div class="header-qa box w-100 rotate-icon-collapse d-flex align-items-center collapsed" data-toggle="collapse" data-target="#KP_KebijakanPrivasi" aria-expanded="false" aria-controls="collapseOne">
                                    Kebijakan Privasi Data &amp; Informasi
                                </div>
                            </div>

                            <div id="KP_KebijakanPrivasi" class="col-body content-white collapse" aria-labelledby="KP3" data-parent="#KP_KebijakanPrivasi">
                                <p>Pengelola akan mencatat informasi tentang semua aktifitas dari pengguna. Mencakup semua transaksi data dan informasi dari atau antar pengguna. Pengelola juga dapat mengumpulkan data dan informasi tentang pengguna dari pengguna lain. Hal ini untuk memberikan pengalaman yang lebih baik dalam Layanan untuk para pengguna.</p>
                                <p>Penggunaan Layanan dan isinya disediakan dan dikembangkan oleh Pengelola secara berkesinambungan untuk kemudahan pengelolaan data dan informasi sesuai kepentingan dan kebutuhan Pengguna. Oleh sebab itu, pengelolaan dan pemanfaatan data dan informasi yang tersedia merupakan sepenuhnya tanggung jawab dari Pengguna. Tersedia apa adanya dan sebagaimana tersedia, tanpa jaminan jenis apapun dari Pengelola.</p>
                                <p>Pengelola tidak akan dikenakan tanggung jawab atas kerusakan langsung, tidak langsung, tidak disengaja, khusus atau secara konsekuensi, kerugian atau gangguan yang timbul dari penggunaan atau kesalahan informasi yang diberikan oleh Pengguna.</p>
                                <p>Pengguna memahami sepenuhnya terhadap privasi data dan informasi yang mereka kelola. Pemanfaatan data dan informasi serta fasilitas pada Layanan ini sepenuhnya merupakan tanggung jawab pengguna.</p>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div id="KP4">
                                <div class="header-qa box w-100 rotate-icon-collapse d-flex align-items-center collapsed" data-toggle="collapse" data-target="#KP_PenggunaanAkun" aria-expanded="false" aria-controls="collapseOne">
                                    Ketentuan Penggunaan Akun
                                </div>
                            </div>

                            <div id="KP_PenggunaanAkun" class="col-body content-white collapse" aria-labelledby="KP4" data-parent="#KP_PenggunaanAkun">
                                <p>Untuk menggunakan Layanan, Pengguna akan diberikan sebuah akun tertentu sesuai dengan prosedur yang berlaku. Pengguna dilarang menggunakan akun milik pihak lain tanpa izin.</p>
                                <p>Pengelola akan mengakhiri akses akun Pengguna Layanan bila menurut pertimbangan Pengelola bahwa Pengguna telah melanggar Persyaratan dan Ketentuan Layanan.</p>
                                <p>Saat melakukan proses permintaan dan aktivasi akun, Pengguna harus memberikan informasi yang lengkap dan akurat. Pengguna secara sendiri bertanggung jawab atas aktivitas yang dilakukan akun miliknya, dan berkewajiban mengamankan kata sandi yang dimilikinya.</p>
                                <p>Pengguna berkewajiban segera melaporkan Pengelola apabila terjadi penyimpangan keamanan atau penggunaan tanpa izin atas akun miliknya.</p>
                                <p>Pengelola tidak dapat dimintakan pertanggungjawaban atas kerugian akibat penggunaan akun Pengguna oleh pihak lain. Pengguna bertanggung jawab penuh atas kerugian akibat penggunaan akun Pengguna oleh pihak lain.</p>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div id="KP5">
                                <div class="header-qa box w-100 rotate-icon-collapse d-flex align-items-center collapsed" data-toggle="collapse" data-target="#KP_PerubahanAturan" aria-expanded="false" aria-controls="collapseOne">
                                    Perubahan Aturan
                                </div>
                            </div>

                            <div id="KP_PerubahanAturan" class="col-body content-white collapse" aria-labelledby="KP5" data-parent="#KP_PerubahanAturan">
                                <p>Kebijakan Pengelola memainkan peranan penting dalam mempertahankan pengalaman positif bagi Pengguna. Harap patuhi kebijakan tersebut saat menggunakan Layanan ini. Saat Pengelola diberi tahu tentang kemungkinan pelanggaran kebijakan, kami dapat meninjau dan mengambil tindakan, termasuk membatasi atau menghentikan akses pengguna ke Layanan ini.</p>
                                <p>Pengelola dapat memperbaiki, menambah, atau mengurangi ketentuan ini setiap saat, dengan atau tanpa pemberitahuan sebelumnya. Pengguna diharapkan memantau Persyaratan dan Ketentuan Layanan ini sewaktu-waktu. Seluruh Pengguna terikat dan tunduk kepada ketentuan yang telah diperbaiki/ditambah/dikurangi oleh Pengelola.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection