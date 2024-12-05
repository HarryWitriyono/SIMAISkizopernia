<?php
class DataTraining{
	
	private $conn;
	private $table_name = "data_training";
	
	public $ia;
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
		
		$query = "insert into ".$this->table_name." values('',?,?,?,?,?,?,?,?,?,?,?,'','')";
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
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}
	
	function readAll(){

		$query = "SELECT * FROM ".$this->table_name;
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	
	
	function readKhusus(){

		$query = "SELECT * FROM data_training, data_uji";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	
	// used when filling up the update product form
	function readOne(){
		
		$query = "SELECT * FROM " . $this->table_name . " WHERE id_data_training=? LIMIT 0,1";

		$stmt = $this->conn->prepare( $query );
		$stmt->bindParam(1, $this->ia);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$this->ia = $row['id_data_training'];
		$this->aa = $row['nama'];
		$this->bb = $row['g1'];
		$this->cc = $row['g2'];
		$this->dd = $row['g3'];
		$this->ee = $row['g4'];
		$this->ff = $row['g5'];
		$this->gg = $row['g6'];
		$this->hh = $row['g7'];
		$this->ii = $row['g8'];
		$this->jj = $row['g9'];
		$this->kk = $row['diagnosa'];
	}
	
		
	function update(){

		$query = "UPDATE 
					" . $this->table_name." 
				SET 
					nama = :aa,
					g1 = :bb,
					g2 = :cc,
					g3 = :dd,
					g4 = :ee,
					g5 = :ff,
					g6 = :gg,
					g7 = :hh,
					g8 = :ii,
					g9 = :jj,
					diagnosa = :kk
				WHERE
					id_data_training = :ia";

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
		$stmt->bindParam(':ia', $this->ia);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
function readDataTraining($a){
		
		$query = "SELECT hasil FROM data_training WHERE id_data_training='$a' LIMIT 0,1";

		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		return $stmt;
	}
	
function hasilDataTraining(){

		$query = "UPDATE 
					data_training
				SET 
					hasil = :ll
				WHERE
					id_data_training = :ia";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':ll', $this->ll);
		$stmt->bindParam(':ia', $this->ia);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
		
	}

function readDataTrainingKategori($a){
		
		$query = "SELECT kategori FROM data_training WHERE id_data_training='$a' LIMIT 0,1";

		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		return $stmt;
	}
	
function hasilDataTrainingKategori(){

		$query = "UPDATE 
					data_training
				SET 
					kategori = :mm
				WHERE
					id_data_training = :ia";

		$stmt = $this->conn->prepare($query);
		
		$stmt->bindParam(':mm', $this->mm);
		$stmt->bindParam(':ia', $this->ia);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
		
	}
	
  function readRDataTraining($a){

		$query = "SELECT * FROM data_training where id_data_training='$a'";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	
function readDataUji($a){
		
		$query = "SELECT diagnosa FROM data_uji WHERE id_data_uji='$a' LIMIT 0,1";

		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		return $stmt;
	}
	
function hasilDataUji(){

		$query = "UPDATE 
					data_uji
				SET 
					diagnosa = :mm
				WHERE
					id_data_uji = :id";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':mm', $this->mm);
		$stmt->bindParam(':id', $this->id);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
		
	}
	
  function readRDataUji($a){

		$query = "SELECT * FROM data_uji where id_data_uji='$a'";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	
	
	// delete the product
function delete(){
	
		$query = "DELETE FROM " . $this->table_name . " WHERE id_data_training = ?";
		
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->ia);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}

	function readDiagnosa (){
		
		$query = "SELECT diagnosa AS h1 FROM data_training WHERE kategori = 'Ya' ORDER BY hasil ASC LIMIT 1;";
	
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		return $stmt;
	}
}
?>