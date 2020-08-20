<?php 
	function dateIndoLengkap($date)
	{
		$tanggal = explode('-', $date);
		$bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
		$convert = $tanggal[2].' '.$bulan[$tanggal[1] - 1].' '.$tanggal[0];
		return $convert;
	}

?>