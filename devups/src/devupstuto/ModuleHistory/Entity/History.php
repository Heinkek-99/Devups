<?php 
        // user \dclass\devups\model\Model;
    /**
     * @Entity @Table(name="history")
     * */
    class History extends Model implements JsonSerializable{

        /**
         * @Id @GeneratedValue @Column(type="integer")
         * @var int
         * */
        protected $id;
        /**
         * @Column(name="SendNumber", type="integer"  )
         * @var integer
         **/
        protected $SendNumber;
        /**
         * @Column(name="Text", type="string" , length=255 )
         * @var string
         **/
        protected $Text;
        /**
         * @Column(name="DateTime", type="datetime"  )
         * @var datetime
         **/
        protected $DateTime; 
        

        
        public function __construct($id = null){
            
            if( $id ) { $this->id = $id; }   
            
}

        public function getId() {
            return $this->id;
        }
        public function getSendNumber() {
            return $this->SendNumber;
        }

        public function setSendNumber($SendNumber) {
            $this->SendNumber = $SendNumber;
        }
        
        public function getText() {
            return $this->Text;
        }

        public function setText($Text) {
            $this->Text = $Text;
        }
        
        public function getDateTime() {
            return $this->DateTime;
        }

        public function setDateTime($DateTime) {
            $this->DateTime = $DateTime;
        }
        
        
        public function jsonSerialize() {
                return [
                    'id' => $this->id,
                    'SendNumber' => $this->SendNumber,
                    'Text' => $this->Text,
                    'DateTime' => $this->DateTime,
                ];
        }
        
}
