<?php 
        // user \dclass\devups\model\Model;
    /**
     * @Entity @Table(name="sms")
     * */
    class Sms extends Model implements JsonSerializable{

        /**
         * @Id @GeneratedValue @Column(type="integer")
         * @var int
         * */
        protected $id;
        /**
         * @Column(name="SMSname", type="string" , length=255 )
         * @var string
         **/
        protected $SMSname;
        /**
         * @Column(name="SMSType", type="string" , length=255 )
         * @var string
         **/
        protected $SMSType;
        /**
         * @Column(name="SMSNumber", type="integer"  )
         * @var integer
         **/
        protected $SMSNumber;
        /**
         * @Column(name="SMSPrice", type="integer"  )
         * @var integer
         **/
        protected $SMSPrice;
        /**
         * @Column(name="Validation", type="string" , length=255 )
         * @var string
         **/
        protected $Validation; 
        

        
        public function __construct($id = null){
            
            if( $id ) { $this->id = $id; }   
            
}

        public function getId() {
            return $this->id;
        }
        public function getSMSname() {
            return $this->SMSname;
        }

        public function setSMSname($SMSname) {
            $this->SMSname = $SMSname;
        }
        
        public function getSMSType() {
            return $this->SMSType;
        }

        public function setSMSType($SMSType) {
            $this->SMSType = $SMSType;
        }
        
        public function getSMSNumber() {
            return $this->SMSNumber;
        }

        public function setSMSNumber($SMSNumber) {
            $this->SMSNumber = $SMSNumber;
        }
        
        public function getSMSPrice() {
            return $this->SMSPrice;
        }

        public function setSMSPrice($SMSPrice) {
            $this->SMSPrice = $SMSPrice;
        }
        
        public function getValidation() {
            return $this->Validation;
        }

        public function setValidation($Validation) {
            $this->Validation = $Validation;
        }
        
        
        public function jsonSerialize() {
                return [
                    'id' => $this->id,
                    'SMSname' => $this->SMSname,
                    'SMSType' => $this->SMSType,
                    'SMSNumber' => $this->SMSNumber,
                    'SMSPrice' => $this->SMSPrice,
                    'Validation' => $this->Validation,
                ];
        }
        
}
