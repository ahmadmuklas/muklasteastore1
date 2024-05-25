<?php
 date_default_timezone_set("asia/jakarta"). '<br>';

 //fungsi hari indnesia
    function hari_ini($hari)
   {
    $seminggu = array('Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
    $hari_ini = $seminggu[$hari];
    return $hari_ini;
   }
 //fungsi bulan indonesia
    function bulan_indo($bln)
   {
    $bln = (int) $bln;
    $bulan = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
    return $bulan[$bln];
   }
 //fungsi tanggal indonesia
    function tgl_indo($tgl)
   {
    $tanggal = substr($tgl, 8,2);
    $bulan = bulan_indo(substr($tgl, 5, 2));
    $tahun = substr($tgl, 0, 4);
    return $tanggal.' '.$bulan.' '.$tahun;
   }

  $hari = date('w');
  $bulan = date('m');
  $tanggal = date('d-m-Y');

   echo "- <b>" . hari_ini($hari)."</b>";
   echo "- <b>" . tgl_indo(date('Y-m-d'))."</b>";
   echo "pukul <b>" . date ('g : i : s')."</b>";

?>