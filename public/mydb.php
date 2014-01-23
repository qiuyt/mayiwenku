<?php
class MyDB{
    private $db;
	public function __construct(){
		try{
			$this->db = mysql_connect("localhost:3306","root","123456");
			mysql_select_db("mayiwenku",$this->db);
		}catch(Exception $e){
			echo "database connect ERROR:".$e;
		}
	}
	//插入数据，返回产生的ID
	public function insert($sql){
        mysql_query($sql,$this->db) or die("Insert Error:".mysql_error($this->db));
        return mysql_insert_id($this->db);
	}
	//查询
	public function query($sql){
		return mysql_query($sql,$this->db);
	}
}
?>