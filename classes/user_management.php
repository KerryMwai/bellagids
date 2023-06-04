<?php
class User extends Database{
    private $image_name,$image_tmp, $full_name,$user_email,$pass;

    function __construct($user_email,$pass)
    {
        // $this->image_name=$image_name;
        // $this->image_tmp=$image_tmp;
        // $this->full_name=$full_name;
        $this->user_email=$user_email;
        $this->pass=$pass;
    }


    public function SignUpUser()
    {

        $sql10="SELECT * FROM users WHERE user_email=?";
        $stmt10=$this->Connect()->prepare($sql10);
        $stmt10->execute([$this->user_email]);
        $row=$stmt10->fetch();
        if($row){
            $failed="The user is already registered";
            header("location:../pages/signin.php ? error=$failed");
        }else{
                // $tm=md5(time());
                // $dstenation1="../user_images/".$tm.$this->image_name;
                // $dstenation2="../user_images/".$tm.$this->image_name;
                // move_uploaded_file($this->image_tmp, $dstenation2);
                $passed=password_hash($this->pass,PASSWORD_DEFAULT);
                $sql="INSERT INTO users(user_email,user_password,is_admin)
                    VALUES(?,?,?)";
                $stmt=$this->Connect()->prepare($sql);
                $stmt->execute([$this->user_email,$passed,0]);
                header("location:../pages/signin.php");
        }
    }

    public function SignIn()
    {
        $sql="SELECT * FROM users WHERE user_email=?";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$this->user_email]);
        $row=$stmt->fetch();

        if($row){
            $passed=password_verify($this->pass, $row['user_password']);

            if($passed){
                session_start();
                $_SESSION['id']=$row['id'];
                $_SESSION['user_email']=$row['user_email'];
                if($row['is_admin']==1){
                    header("location:../pages/admin_dashboard.php");
                }else{
                    header("location:../pages/users_dashboard.php");
                }
            }
        }
    }
}

?>