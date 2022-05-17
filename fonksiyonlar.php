<?php

function yaz($veri,$sitil=["",""]){
	echo $sitil[0].$veri.$sitil[1];
}

/*function VTBaglan($ip,$kadi,$ksfr,$vtadi,$karkum="UTF8"){
	$vt=new MYSQLI($ip,$kadi,$ksfr,$vtadi);
	if($vt->connect_error){
		yaz("Bağlantı Hatası: ".$vt->connect_error,["<h2>","</h2>"]);
		return false;
	}
	$vt->set_charset($karkum);
	return $vt;
}*/

function VTBaglan($ip,$kadi,$ksfr,$ad,$karlum="UTF8"){
		
		$vt=new MYSQLI($ip,$kadi,$ksfr,$ad);
		
		if($vt->connect_error){
		yaz("Bağlantı Hatası : ".$vt->connect_error,["<h3 style='color:red;'>","</h3>"]);
			return false;
		}
		
		$vt->set_charset($karlum);
		
		
		return $vt;
		
	}

/*function Sorgu($d,$sql,$par=[],$str=""){
		
		$hzr=$d->prepare($sql);
		if($d->error){
		yaz("Sorgu Hatası : ".$d->error,["<h3 style='color:red;'>","</h3>"]);
			return false;
		}
		
		if(count($par)>0)
			$hzr->bind_param($str,...$par);
		
		$hzr->execute();
	
	
		return $hzr;		
		
	}*/
	
function Sorgu($d,$sql,$par=[],$str=""){
		
		$hzr=$d->prepare($sql);
		if($d->error){
		yaz("Sorgu Hatası : ".$d->error,["<h3 style='color:red;'>","</h3>"]);
			return false;
		}
		
		if(count($par)>0)
			$hzr->bind_param($str,$par);
		
		$hzr->execute();
	
	
		return $hzr;		
		
	}
	
function DiziyeAktar($hzr)
	{
		$snc=$hzr->get_result();
		$tum=[];
		
		while($v=$snc->fetch_array())
			$tum[]=$v;
		
		return $tum;
		
	}

?>