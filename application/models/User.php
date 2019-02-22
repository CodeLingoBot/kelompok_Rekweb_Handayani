<?php
Class User extends CI_Model
{
    var $details;


    function validate($table,$email,$password,$level,$where) {

        $this->db->from($table);
        $this->db->where('username',$email);
        $this->db->where('password', sha1($password));
        $this->db->where('level',$level);
        $login = $this->db->get()->result();

        if ( is_array($login) && count($login) == 1 ) {
            $this->details = $login[0];
            if ($level == "pasien"){
                $this->set_session_pasien();
            }else{
                $this->set_session();
            }
            

            return true;
        }

        return false;
    }

    function set_session_pasien() {
        $this->session->set_userdata( array(
                'id'=>$this->details->id_pasien,
                'nama'=>$this->details->nm_pasien,
                'level'=> $this->details->level,
                'isLoggedIn'=>true
            )
        );
    }

    function set_session() {
        $this->session->set_userdata( array(
                'id'=>$this->details->id,
                'nama'=>$this->details->nama,
                'level'=> $this->details->level,
                'isLoggedIn'=>true
            )
        );
    }




    


    

	
}
?>