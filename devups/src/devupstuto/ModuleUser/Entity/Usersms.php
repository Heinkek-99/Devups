<?php 
        // user \dclass\devups\model\Model;
    /**
     * @Entity @Table(name="usersms")
     * */
    class Usersms extends Model implements JsonSerializable{

        /**
         * @Id @GeneratedValue @Column(type="integer")
         * @var int
         * */
        protected $id;
        /**
         * @Column(name="FirstName", type="string" , length=55 )
         * @var string
         **/
        protected $FirstName;
        /**
         * @Column(name="LastName", type="string" , length=55 )
         * @var string
         **/
        protected $LastName;
        /**
         * @Column(name="UserName", type="string" , length=55 )
         * @var string
         **/
        protected $UserName;
        /**
         * @Column(name="Email", type="string" , length=255 )
         * @var string
         **/
        protected $Email;
        /**
         * @Column(name="PhoneNumber", type="integer"  )
         * @var integer
         **/
        protected $PhoneNumber;
        /**
         * @Column(name="Password", type="string" , length=255 )
         * @var string
         **/
        protected $Password; 
        

        
        public function __construct($id = null){
            
            if( $id ) { $this->id = $id; }   
            
}

        public function getId() {
            return $this->id;
        }
        public function getFirstName() {
            return $this->FirstName;
        }

        public function setFirstName($FirstName) {
            $this->FirstName = $FirstName;
        }
        
        public function getLastName() {
            return $this->LastName;
        }

        public function setLastName($LastName) {
            $this->LastName = $LastName;
        }
        
        public function getUserName() {
            return $this->UserName;
        }

        public function setUserName($UserName) {
            $this->UserName = $UserName;
        }
        
        public function getEmail() {
            return $this->Email;
        }

        public function setEmail($Email) {
            $this->Email = $Email;
        }
        
        public function getPhoneNumber() {
            return $this->PhoneNumber;
        }

        public function setPhoneNumber($PhoneNumber) {
            $this->PhoneNumber = $PhoneNumber;
        }
        
        public function getPassword() {
            return $this->Password;
        }

        public function setPassword($Password) {
            $this->Password = $Password;
        }
        
        
        public function jsonSerialize() {
                return [
                    'id' => $this->id,
                    'FirstName' => $this->FirstName,
                    'LastName' => $this->LastName,
                    'UserName' => $this->UserName,
                    'Email' => $this->Email,
                    'PhoneNumber' => $this->PhoneNumber,
                    'Password' => $this->Password,
                ];
        }
        
}
