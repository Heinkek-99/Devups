<?php 
        // user \dclass\devups\model\Model;
    /**
     * @Entity @Table(name="purchasehistory")
     * */
    class Purchasehistory extends Model implements JsonSerializable{

        /**
         * @Id @GeneratedValue @Column(type="integer")
         * @var int
         * */
        protected $id;
        /**
         * @Column(name="PackageName", type="string" , length=55 )
         * @var string
         **/
        protected $PackageName;
        /**
         * @Column(name="PackageType", type="string" , length=255 )
         * @var string
         **/
        protected $PackageType;
        /**
         * @Column(name="Number_f_sms", type="integer"  )
         * @var integer
         **/
        protected $Number_f_sms;
        /**
         * @Column(name="Price", type="integer"  )
         * @var integer
         **/
        protected $Price;
        /**
         * @Column(name="Validity_Date", type="datetime"  )
         * @var datetime
         **/
        protected $Validity_Date; 
        

        
        public function __construct($id = null){
            
            if( $id ) { $this->id = $id; }   
            
}

        public function getId() {
            return $this->id;
        }
        public function getPackageName() {
            return $this->PackageName;
        }

        public function setPackageName($PackageName) {
            $this->PackageName = $PackageName;
        }
        
        public function getPackageType() {
            return $this->PackageType;
        }

        public function setPackageType($PackageType) {
            $this->PackageType = $PackageType;
        }
        
        public function getNumber_f_sms() {
            return $this->Number_f_sms;
        }

        public function setNumber_f_sms($Number_f_sms) {
            $this->Number_f_sms = $Number_f_sms;
        }
        
        public function getPrice() {
            return $this->Price;
        }

        public function setPrice($Price) {
            $this->Price = $Price;
        }
        
        public function getValidity_Date() {
            return $this->Validity_Date;
        }

        public function setValidity_Date($Validity_Date) {
            $this->Validity_Date = $Validity_Date;
        }
        
        
        public function jsonSerialize() {
                return [
                    'id' => $this->id,
                    'PackageName' => $this->PackageName,
                    'PackageType' => $this->PackageType,
                    'Number_f_sms' => $this->Number_f_sms,
                    'Price' => $this->Price,
                    'Validity_Date' => $this->Validity_Date,
                ];
        }
        
}
