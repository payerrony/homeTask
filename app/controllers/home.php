<?php 


class Home extends Controller{


    protected $db;

    public function __construct() {
        $this->db = new Database();
    }
    
    public function index(){

            $con ='';
            $sale = $this->model('sale');

            if(isset($_POST['submit'])){

                if($_POST['fdate']!='' && $_POST['tdate']!=''){
                    $con .= ' and entry_at between "'.$_POST['fdate'].'" and "'.$_POST['tdate'].'"';
                }
                if($_POST['user']>0){
                    $con .= ' and  entry_by = '.$_POST['user'].'';
                }

            }



            $sql = "select * from sales where 1 ".$con."";

            $result = $this->db->conn->query($sql);

            //$data = $result->fetch_assoc();


         return $this->view('/home/index',$result);
    }


    public function entrypage(){

        return $this->view('/home/entry_page');

    }

    public function store(){

        


            if(!isset($_COOKIE['HOMETASK'])){

                $cookie_name = "HOMETASK";
                $cookie_value = "value";
                $expirationTime = time() + 24 * 60 * 60;
                setcookie($cookie_name, $cookie_value,$expirationTime);
            

                $salt = "payer_alam_rony";
                $hash = $salt . $_POST['receipt_id'];
                $hashed_password = hash('sha512', $hash);
                $buyer = $_POST['buyer'];
                $amount = $_POST['amount'];
                $receipt_id =$_POST['receipt_id'];
                $items = implode(' ,' , $_POST['item']);
                $buyer_email =$_POST['buyer_email'];
                $buyer_ip =$_SERVER['REMOTE_ADDR'];
                $note = $_POST['note'];
                $city = $_POST['city'];
                $phone = $_POST['phone'];
                $hash_key =$hashed_password;
                $entry_at = date('Y-m-d');
                $entry_by = $_POST['entry_by'];


                $insert_sql = 'INSERT INTO `sales`(`amount`, `buyer`, `receipt_id`, `items`, `buyer_email`, `buyer_ip`, `note`, `city`, `phone`, `hash_key`, `entry_at`, `entry_by`) 
                
                VALUES ("'.$amount.'","'.$buyer.'","'.$receipt_id.'","'.$items.'","'.$buyer_email.'","'.$buyer_ip.'","'.$note.'","'.$city.'","'.$phone.'","'.$hash_key.'","'.$entry_at.'","'.$entry_by.'")';

                $this->db->conn->query($insert_sql);
                
                $this->index();

            


            }
            else {
                echo '<script>alert("Can not  Submit form...")</script>';
            }
        


    }
}

?>