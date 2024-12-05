<?php
class DataUji{
	
	private $conn;
	private $table_name = "data_uji";
	
	public $id;
	public $aa;
	public $bb;
	public $cc;
	public $dd;
	public $ee;
	public $ff;
	public $gg;
	public $hh;
	public $ii;
	public $jj;
	public $kk;
	public $ll;
	public $mm;
	
	public function __construct($db){
		$this->conn = $db;
	}
	
	function insert(){
		
		$query = "insert into ".$this->table_name." values('',?,?,?,?,?,?,?,?,?,?,?,?,'')";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->aa);
		$stmt->bindParam(2, $this->bb);
		$stmt->bindParam(3, $this->cc);
		$stmt->bindParam(4, $this->dd);
		$stmt->bindParam(5, $this->ee);
		$stmt->bindParam(6, $this->ff);
		$stmt->bindParam(7, $this->gg);
		$stmt->bindParam(8, $this->hh);
		$stmt->bindParam(9, $this->ii);
		$stmt->bindParam(10, $this->jj);
		$stmt->bindParam(11, $this->kk);
		$stmt->bindParam(12, $this->ll);
		
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}
	
	function readAll(){

		$query = "SELECT * FROM ".$this->table_name." ORDER BY nama1 ASC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	
	// used when filling up the update product form
	function readOne(){
		
		$query = "SELECT * FROM " . $this->table_name . " WHERE id_data_uji=? LIMIT 0,1";

		$stmt = $this->conn->prepare( $query );
		$stmt->bindParam(1, $this->id);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$this->id = $row['id_data_uji'];
		$this->aa = $row['nama1'];
		$this->bb = $row['jenis_kelamin'];
		$this->cc = $row['tanggal_lahir'];
		$this->dd = $row['g11'];
		$this->ee = $row['g22'];
		$this->ff = $row['g33'];
		$this->gg = $row['g44'];
		$this->hh = $row['g55'];
		$this->ii = $row['g66'];
		$this->jj = $row['g77'];
		$this->kk = $row['g88'];
		$this->ll = $row['g99'];
	}
	
	// update the product
	function update(){

		$query = "UPDATE 
					" . $this->table_name . " 
				SET 
					nama1 = :aa,
					jenis_kelamin = :bb,
					tanggal_lahir = :cc,
					g11 = :dd,
					g22 = :ee,
					g33 = :ff,
					g44 = :gg,
					g55 = :hh,
					g66 = :ii,
					g77 = :jj,
					g88 = :kk,
					g99 = :ll
				WHERE
					id_data_uji = :id";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':aa', $this->aa);
		$stmt->bindParam(':bb', $this->bb);
		$stmt->bindParam(':cc', $this->cc);
		$stmt->bindParam(':dd', $this->dd);
		$stmt->bindParam(':ee', $this->ee);
		$stmt->bindParam(':ff', $this->ff);
		$stmt->bindParam(':gg', $this->gg);
		$stmt->bindParam(':hh', $this->hh);
		$stmt->bindParam(':ii', $this->ii);
		$stmt->bindParam(':jj', $this->jj);
		$stmt->bindParam(':kk', $this->kk);
		$stmt->bindParam(':ll', $this->ll);
		$stmt->bindParam(':id', $this->id);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
	// delete the product
	function delete(){
	
		$query = "DELETE FROM " . $this->table_name . " WHERE id_data_uji = ?";
		
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
}
?>