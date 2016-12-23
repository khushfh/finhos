<html>
<head>
<title>Financial Hospital</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta name="keywords" content="Financial Planning, Tax Planning in India,Retirement Planning in India ,Investment Planning, Retirement Planning, Specific Goal Planning, Tax Planning, Estate Planning, Planning & Wealth NRI in India, Investment Online, Corporate care, Financial planning in India, Best financial planning in India, Investment Planning in India, Cheap Financial Planning in India, House Property , Wealth Management in India, Business and Profession.">
<meta name ="description" content="You are the architect of your own destiny, not everyone is a good builder. Here at Financial Hospital we build a solid foundation for you to reach your desired destiny of financial stability through proper foundation and execution of financial goals as well as planning. ">
</head>
<body>
<?php 
function GenerateURN(){
	$this->result = $this->db->query("select * from amc_codes where amc_code_value like '%".$this->Sname."%' ");
	while($this->line = $this->db->fetchNextObject($this->result)){
		$this->return[] = array(
				'amc_code_value'=>$this->line->amc_code_value,
		);
	}
	return $this->return;
}

function GetTxnStatus(){
	$this->result = $this->db->query("select * from transaction_status where transaction_active_status = '1' ");
	while($this->line = $this->db->fetchNextObject($this->result)){
		$this->return[] = array(
				'transaction_status_id'=>$this->line->transaction_status_id,
				'transaction_txn_type_id'=>$this->line->transaction_txn_type_id,
				'transaction_status_desc'=>$this->line->transaction_status_desc,
		);
	}
	return $this->return;
}
?>
</body>
</html>