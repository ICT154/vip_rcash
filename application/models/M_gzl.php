<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */

defined('BASEPATH') or exit('No direct script access allowed');

class M_gzl extends CI_Model
{

    /* End of file M_gzl.php */
    function __construct()
    {
    }

    function format_tanggal_indonesia($tanggal)
    {
        // Ubah format tanggal menjadi timestamp
        $timestamp = strtotime($tanggal);

        // Buat array dengan nama bulan dalam bahasa Indonesia
        $nama_bulan = array(
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        );

        // Ambil nilai tanggal, bulan, dan tahun dari timestamp
        $hari = date('d', $timestamp);
        $bulan = $nama_bulan[date('n', $timestamp) - 1];
        $tahun = date('Y', $timestamp);

        // Buat string dengan format "tanggal bulan tahun"
        $tanggal_indonesia = $hari . ' ' . $bulan . ' ' . $tahun;

        return $tanggal_indonesia;
    }

    function is_numeric_value($input)
    {
        if (preg_match('/^[0-9,.]+$/', $input)) {
            return true;
        } else {
            return false;
        }
    }

    function filter_input_data($data)
    {
        // $CI = &get_instance();
        // $filtered_data = array();
        // foreach ($data as $key => $value) {
        //     if (is_array($value)) {
        //         $filtered_data[$key] = $this->filter_input_data($value);
        //     } else {
        //         $value = trim($value);
        //         $value = stripslashes($value);
        //         $value = htmlspecialchars($value);
        //         $value = $CI->db->escape_str($value);
        //         $filtered_data[$key] = $value;
        //     }
        // }
        return $this->db->escape_str(htmlspecialchars(stripslashes(trim($data))));
    }

    function format_tanggal($tanggal)
    {
        $tanggal_2 =  date('Y-m-d', strtotime($tanggal));
        $tanggal_3 = date("H:i:s", strtotime($tanggal));
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal_2);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0] . " (" . $tanggal_3 . ")";
        // $this->tgl_indo($tanggal_2);
    }

    function encode($text)
    {
        $ciphertext = $this->encryption->encrypt($text);
        $res = base64_encode($ciphertext);
        return $res;
    }
    function number_format($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',')
    {
        $negation = ($number < 0) ? (-1) : 1;
        $coefficient = 10 ** $decimals;
        $number = $negation * floor((string)(abs($number) * $coefficient)) / $coefficient;
        return number_format($number, $decimals, $decPoint, $thousandsSep);
    }
    function decode($text)
    {
        // $ciphertext = $this->encryption->encrypt($text);
        // $res = base64_encode($ciphertext);
        $r = base64_decode($text);
        return $this->encryption->decrypt($r);
    }


    function id_unik()
    {
        $tanggal = explode("-", date("Y-m-d"));
        // 'id_agenda' => "IDAGD" . $tanggal['0'] . "" . $tanggal['1'] . "" . $tanggal['2'] . "" . rand(),
        $string = "" . $tanggal['0'] . "" . $tanggal['1'] . "" . $tanggal['2'] . "" . rand() . "";
        return $string;
    }

    function tgl_indo($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    }


    public function enkrip($key)
    {
        return urlencode((base64_encode(base64_encode(base64_encode($key)))));
    }

    public function dekrip($key)
    {
        try {
            return base64_decode(base64_decode(base64_decode(urldecode($key))));
        } catch (\Exception $e) {
            // tangani pesan error atau exception
            return null; // atau kembalikan nilai lain sesuai kebutuhan
        }
    }

    public function convToObj($data = array())
    {
        $result = json_decode(json_encode($data), FALSE);
        return $result;
    }

    public function convDateTime($dt)
    {
        $out = date('d F Y H:i:s', strtotime($dt));
        return $out;
    }

    function array_remove_keys($array, $keys)
    {
        // array_diff_key() expected an associative array.
        $assocKeys = array();
        foreach ($keys as $key) {
            $assocKeys[$key] = true;
        }

        return array_diff_key($array, $assocKeys);
    }

    public function convDate($dt, $st = 1)
    {
        if ($st == 1) {
            $out = date('d F Y', strtotime($dt));
        } elseif ($st == 2) {
            $out = date('d M Y', strtotime($dt));
        } elseif ($st == 3) {
            $out = date('d-M-Y', strtotime($dt));
        } elseif ($st == 4) {
            $out = date('d m Y', strtotime($dt));
        } elseif ($st == 5) {
            $out = date('d-m-Y', strtotime($dt));
        } elseif ($st == 6) {
            $out = date('d/M/Y', strtotime($dt));
        } elseif ($st == 7) {
            $out = date('d/m/Y', strtotime($dt));
        } elseif ($st == 8) {
            $out = date('Y-m-d', strtotime($dt));
        }
        return $out;
    }

    function arrHari($h = '')
    {
        $hasil = '';
        $arr_hari = array("", "Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");
        $hasil = $arr_hari;
        if ($h != '') $hasil = $arr_hari[$h];
        return $hasil;
    }
    function arrHari2($h = '')
    {
        $hasil = '';
        $arr_hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");
        $hasil = $arr_hari;
        if ($h != '') $hasil = $arr_hari[$h];
        return $hasil;
    }
    public function getDayinDate($date)
    {
        $day = date('w', strtotime($date));
        $day = $this->arrHari($day);
        return $day;
    }
    public function getDayinDate2($date)
    {
        $day = date('w', strtotime($date));
        $day = $this->arrHari2($day);
        return $day;
    }

    public function arrBulan($b = '')
    {
        $hasil = '';
        $arr_bulan_nama = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
        $arr_bulan_angka = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
        $hasil = $arr_bulan_nama;
        if ($b != '') $hasil = $arr_bulan_nama[$b];
        return $hasil;
    }
    public function formatAngka($var, $set = 1)
    {
        if ($set == 1) {
            $out = number_format($var, 0, '.', ',');
        } elseif ($set == 2) {
            $out = number_format($var, 0, ',', '.');
        }
        return $out;
    }
    public function formatUang($var, $st = 1)
    {
        if ($st == 1) {
            $out = 'Rp. ' . number_format($var, 0, '.', ',');
        } elseif ($st == 2) {
            $out = number_format($var, 0, ',', '.');
        }
        return $out;
    }
    public function selisihHari($tgl1 = '', $tgl2 = '')
    {
        $hasil = date_diff(date_create($tgl1), date_create($tgl2));
        return $hasil->days;
    }
    public function selisihTanggal($tgl1 = '', $tgl2 = '')
    {
        $hasil = date_diff(date_create($tgl1), date_create($tgl2));
        return $hasil;
    }
    public function penyebut($nilai)
    {
        $nilai = abs($nilai);
        $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($nilai < 12) {
            $temp = " " . $huruf[$nilai];
        } else if ($nilai < 20) {
            $temp = $this->penyebut($nilai - 10) . " belas";
        } else if ($nilai < 100) {
            $temp = $this->penyebut($nilai / 10) . " puluh" . $this->penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $temp = " seratus" . $this->penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $temp = $this->penyebut($nilai / 100) . " ratus" . $this->penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $temp = " seribu" . $this->penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $temp = $this->penyebut($nilai / 1000) . " ribu" . $this->penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $temp = $this->penyebut($nilai / 1000000) . " juta" . $this->penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $temp = $this->penyebut($nilai / 1000000000) . " milyar" . $this->penyebut(fmod($nilai, 1000000000));
        } else if ($nilai < 1000000000000000) {
            $temp = $this->penyebut($nilai / 1000000000000) . " trilyun" . $this->penyebut(fmod($nilai, 1000000000000));
        }
        return $temp;
    }
    public function terbilang($nilai)
    {
        $bilang = $this->penyebut($nilai);
        if ($nilai < 0) {
            $hasil = "minus " . trim($bilang) . " rupiah";
        } elseif (strlen($nilai) > 15) {
            $hasil = "Nominal Diluar Nalar!";
        } else {
            $hasil = trim($bilang) . " rupiah";
        }
        return ucwords($hasil);
    }

    public function create_notran($prefix = '', $serial = '')
    {
        $notran = "";
        $prefix = $prefix == "" ? "TRN" : $prefix;
        $serial = $serial == "" ? date("my") : date("my", strtotime($serial));
        $index = "00001";
        $notran = $prefix . $serial . $index;
        $lastIndex = $this->sv->where("NTCode", $prefix . $serial)->get("NoTransaksi")->row();
        if (!empty($lastIndex)) {
            $index = $lastIndex->Nomor + 1;
            if (strlen($index) == 1) {
                $index = "0000" . $index;
            } elseif (strlen($index) == 2) {
                $index = "000" . $index;
            } elseif (strlen($index) == 3) {
                $index = "00" . $index;
            } elseif (strlen($index) == 4) {
                $index = "0" . $index;
            }
            $notran = $prefix . $serial . $index;
        }
        return $notran;
    }

    public function set_code($prefix, $nomor, $lncode = '00000000000')
    {
        $prefix = $prefix . substr($lncode, strlen($prefix), (strlen($lncode) - strlen($prefix)));
        $result = substr($prefix, 0, strlen($prefix) - strlen($nomor)) . $nomor;
        return $result;
    }
}
