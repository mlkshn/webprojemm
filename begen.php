<?php  


  require("ayar.php");
  
  session_start();

 $data = [];

    
	if($_POST){
		
		if($_SESSION){
			
			 $id = $_POST["id"];
			 $ben = $_SESSION["id"];
			  
			$query = $db->prepare("select * from begeniler where begenen_id = ? and begenilen_id = ?"); 
            $query->execute([$ben,$id]);			
			$ok = $query->rowcount();  
			
			if($ok){
				
				$data["hata"] =  "bu konuyu daha once begendiniz..";
				
			}else {
				
				$ekle = $db->prepare("insert into begeniler set 
				
				  begenen_id = ?,
				  begenilen_id = ?
				
				");
			$ekle->execute([$ben,$id]); 
			 
			 $guncelle = $db->prepare("update kitap set begen = begen +1 where kitap_id = ?");
			 $guncelle->execute([$id]);
			$ok = $guncelle->rowCount(); 
			
			  if($ok){
				  
				  $data["ok"] = "konuyu begendiniz.."; 
				  
			  }else {
				  
				  $data["hata"] = "bir sorun olustu";
				  
			  }
			 
			 
			}
			
		}else {
			
			$data["hata"] = "uye girisi yapmanız gerekiyor..";
			
		}
		
		
	}
   
  


echo json_encode($data);

?>