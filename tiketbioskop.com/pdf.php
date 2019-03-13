    <?php
    // Nilai ukuran point (1/72 dari inci )
    $ukuran_font = 72; // besar font 1 inci
    $Tinggi_Halaman = 612; // tinggi halaman 8.5 inci
    $Lebar_Halaman = 792; // lebar halaman 11 inci

    // Tampilkan pesan default jika berhasil
   // if (strlen(trim($_GET['pesan']))) {
    //$pesan = trim($_GET['pesan']);
    //} else {
    $pesan = 'Bikin File PDF!';
    //}

    // Buat dokumen pdf baru di memory
    $pdf = pdf_new();
    pdf_open_file($pdf, ”);

    // Tambah halaman dengan ukuran dokumen 11?x8.5?
    pdf_begin_page($pdf, $Lebar_Halaman, $Tinggi_Halaman);

    // Pilih jenis font Verdana dengan ukuran 72 point
    $font = pdf_findfont($pdf, “Verdana”, “winansi”, 0);
    pdf_setfont($pdf, $font, $ukuran_font);

    // Tampilkan pesan di tengah halaman
    pdf_show_boxed($pdf, $pesan, 0, ($Tinggi_Halaman-$ukuran_font)/2,
    $Lebar_Halaman, $ukuran_font, 'center');

    // Akhir dari dokumen dan halaman
    pdf_end_page($pdf);
    pdf_close($pdf);
    // Mengambil isi dari dokumen dan menghapusnya
    $pdf_dok = pdf_get_buffer($pdf);
    pdf_delete($pdf);

    // Kirim headers dan isi dari dokumen
    header('Content-Type: application/pdf');
    header('Content-Length: ' . strlen($pdf_dok));
    print $pdf_dok;
    ?>