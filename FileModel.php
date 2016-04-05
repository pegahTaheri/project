<?php
class File{
	private $file_number;
	private $patinet_id;
// 	private $file2_id;
// 	private $file3_id;
// 	private $file4_id;
// 	private $file5_id;
// 	private $file6_id;
// 	private $file7_id;
// 	private $file8_id;
// 	private $file9_id;
// 	private $file10_id;
// 	private $file11_id;
	private $dr_id;
	private $date;
	public $status;
}

class File2{//momkene chanta bashe
	private $file_number;
	private $patinet_id;
	private $distress;
	 private $sianoz;
	 private $apne;
	 private $zardi;
	 private $narasi;
	 private $jarahi;
	 private $govareshi;
	 private $ofoonat;
	 private $ghalbi_madarzadi;
	 private $metabolic;
	 private $other;
}

class File3{
	private $file_number;
	private $patinet_id;
	private $birthday;
	private $birth_hour;
	private $birth_age_in_weeks;
	private $birth_weight;
	private $birth_weight_percent;
	private $head_cm;
	private $head_cm_percent;
	private $height_birth;
	private $height_birth_percent;
	private $kind;
	private $reason_sezarian;
	private $apgar1;//int(2)
	private $apgar5;
	private $apgar20;
	private $ehya_birth;
	private $oxygen;
	private $ppv;
	private $heart_massage;
	private $medicine;
	private $mekoniom;
	private $vitamin_k;
	private $vaxan_hepatit;
	private $vaxan_bcg;
	private $vaxan_bolio;
	private $bastari_ghabli;
	private $masrafe_daroo;
	
}

class File4{
	private $file_number;
	private $patinet_id;
	private $L;
	private $Ab;
	private $P;
	private $G;
	private $BGRH;
	private $twin;
	private $deisease;
	private $medicine;
	private $avarez;
	private $nazayi;
	private $kise_ab;
	private $modat;
	private $maye;
	private $nama_janin;
	
	
}

class File5{
	private $file_number;
	private $patinet_id;
	private $family;
	private $relation;
	private $familiDisease;
	private $fote_farzande_ghabli;
	private $age;
	private $reason_death;
	
	
}
class File6{
	private $file_number;
	private $patinet_id;
	private $HR;
	private $RR;
	private $BP;
	private $T;
	
}

class File7{
	//tanafos:
	private $file_number;
	private $patinet_id;
	public $tanafos_tashkhis;
	public $pal;
	public $pal_no;
	public $rightL;
	public $leftL;
	public $chest_tube;
	public $cld;
	public $distress;
	public $rds;
	public $rds_seyr;
	public $cxr;
	public $cxr_seyr;
	public $abg;
	public $abg_seyr;
	public $o2;
	public $et1;
	public $et2;
	public $tanafos_komaki;
	public $soorfaktant;
	public $srfktnt_no;
	public $srfktnt_dafe;
	public $srfktnt_seyr;
	public $jarahi;
	public $jarahi_seyr;
	public $pathology;
	//ghalb:
	public $soofl;
	public $soofl_khos;
	public $hipotansion;
	public $hypertension;
	public $PDA;
	public $pda_balini;
	public $pda_shoro;
	public $echo;
	public $nsaid;
	public $ghalb_seyr;
	public $ghalb_darman;
	public $jarahi_ghalb;
	//zardi
	public $zard_shoro;
	public $zardi_foto;
	public $zardi_foto_bil;
	public $zardi_ex;
	public $zardi_ex_bil;
	public $zardi_text;
	public $kolestaz;
	public $kolestaz_barresi;
	public $kolestaz_nahayi;
	public $kolestaz_seyr;
	//govaresh:
	public $gi;
	public $gi_text;
	public $nec_stage;
	public $nec_text;
	public $ger;
	public $ger_text;
	public $gi_bleeding;
	public $gi_bl_text;
	public $govaresh_seyr;
	//sepsis
	public $balini;
	public $azmayeshgahi_text;
	public $darman_sepsis;
	public $darman_seyr;
	public $sayer_ofonat;
	public $azmayeshat_digar;
	//khooni
	public $khooni;
	public $anemi;
	public $anemi_tashkhis;
	public $anemi_darman;
	public $anemi_seyr;
	public $transfusion;
	//asabi
	public $sono_maghz;
	public $tasahnoj;
	public $maghz_tashkhis;
	public $lp;
	public $ca;
	public $bs;
	public $eeg;
	public $brainCT;
	public $torch;
	public $metabolic;
	public $darman_maghz;
	public $seyr_maghz;
	public $hipotony;

}

class File8{
	private $file_number;
	private $patinet_id;
	public $azmayeshgahi;
	public $imaging;
	
}
class File9{
	private $file_number;
	private $patinet_id;
	public $sayer;
	
}
class File10{
	private $file_number;
	private $patinet_id;
	public $moshavere;
	
}
class File11{
	private $file_number;
	private $patinet_id;
	public $saranjam;
	public $vaziate_tarkhis;
	public $dastoore_tarkhis;
	public $morajee;
	public $rop;
	public $abr;
	public $sono;
	public $maghz;
	public $heap;
	public $status;
	public $daroo;
	public $amozzesh;
	public $peygiri;
	public $tarikhe_fot;
	public $ellate_fot;
	public $tarikh;
	
}
?>