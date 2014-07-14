<?
	class database{
		function __construct(){
			$this->link = mysql_connect("localhost","root","12345") or die ("無法開啟資料庫!!");
			mysql_select_db("dogfood",$this->link) or die ("無法開啟!!");
			mysql_query("SET CHARACTER SET UTF8");
		}
		
		function selectSQL($id){
			if($id!='' || $id!=null){
				$this->sql = "SELECT * FROM memberdata WHERE id='".$id."'";
				return mysql_query($this->sql,$this->link);
			}else{
				$this->sql = "SELECT * FROM memberdata";
				return mysql_query($this->sql,$this->link);
			}
		}
		
		function insertSQL($array){
			foreach ($array as $key => $value){
				$$key = $value;
			}
			$this->sql = "INSERT INTO memberdata(memberID,memberPassword,memberName,memberSex,memberBirthday,memberMail,memberTEL,memberPhone,memberADD,JoinDate)VALUES('$memberID','$memberPassword','$memberName','$memberSex','$memberBirthday','$memberMail','$memberTEL','$memberPhone','$memberADD','".date("Y-m-d")."')";
			return mysql_query($this->sql,$this->link);
		}
		
		function delSQL($id){
			$this->sql = "DELETE FROM memberdata WHERE id='".$id."'";
			return mysql_query($this->sql,$this->link);
		}
		
		function updateSQL($array,$id){
			foreach ($array as $key => $value){
				$$key = $value;
			}
			$this->sql = "UPDATE memberdata SET memberBirthday='$memberBirthday',memberMail='$memberMail',memberTEL='$memberTEL',memberPhone='$memberPhone',memberADD='$memberADD' WHERE id='".$id."'";
			return mysql_query($this->sql,$this->link);
		}
		
	}
?>




