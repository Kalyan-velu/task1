<?php
class crud{
   private $db;
   
   function __construct($conn){
      $this->db=$conn;
   }

   public function insert($textinput,$numberinput,$file,$remarks){
      try {
         $sql="INSERT INTO `inputs`(`textinput`, `numberinput`, `file`, `remarks`) VALUES (:textinput,:numberinput,:file,:remarks)";
         $stmt=$this->db->prepare($sql);

         $stmt->bindparam(':textinput',$textinput);
         $stmt->bindparam(':numberinput',$numberinput);
         $stmt->bindparam(':file',$file);
         $stmt->bindparam(':remarks',$remarks);

         $stmt->execute();

         return true;
      } catch (\Throwable $th) {
         echo $th->getMessage();
         throw $th;

         return false;
      }
   }

   public function getInputs(){
      try {
         $sql="SELECT * FROM `inputs`";
         $result=$this->db->query($sql);
         return $result;
      } catch (\Throwable $th) {
         echo $th->getMessage();
         throw $th;
      }
   }
}
?>