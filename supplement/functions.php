<?php include_once('variables.php') ?>
<?php
function get_usernames($etudiants){
    $usernames=[];
    foreach($etudiants as $etudiant){
        $usernames[]=$etudiant['username_etud'];

    }
    return $usernames;

}

function get_admins_usernames($administrateurs){
    $usernames_admins=[];
    foreach($administrateurs as $admin){
        $usernames_admins[]=$admin['username_admin'];
    }
    return $usernames_admins;



}

function get_id_etudiant($etudiants,$username){
    foreach($etudiants as $etudiant){
        if($etudiant['username_etud'] == $username)
            return  $etudiant['id_etudiant'];
    }
}


function get_emails($etudiants){
    $mails=[];
    foreach($etudiants as $etudiant){
        $mails[]=$etudiant['email'];

    }
    return $mails;

}
function get_password_by_email($etudiants,$email){
    foreach($etudiants as $etudiant){
        if($etudiant['email']==$email){
           return $etudiant['password_etud'];
        }

    }

}


function get_candidats_id($candidats){
    $ids=[];
    foreach($candidats as $candidat){
        $ids[]=$candidat['id_etudiant'];

    }
    return $ids;

}

function iscandidat($candidats,$etudiants,$username){
    foreach($etudiants as $etudiant){
        if($etudiant['username_etud'] == $username){
          $id_etudiant= $etudiant['id_etudiant'];
          if (isset($id_etudiant) && in_array($id_etudiant,get_candidats_id($candidats))) {
            return 1;}
          else
          return 0;


        }



    }
}





function get_password($etudiants,$username){
    foreach($etudiants as $etudiant){
       if($etudiant['username_etud'] === $username){
        $password= $etudiant['password_etud'];

       }


   }
   return $password;
}

function get_admin_password($administrateurs,$username){
    foreach($administrateurs as $admin){
       if($admin['username_admin'] === $username){
        $password= $admin['password_admin'];

       }


   }
   return $password;
}



function has_complete_inscription($candidats,$etudiants,$username,$candidats_inscription_en_cours){
if(iscandidat($candidats,$etudiants,$username) && in_array(get_id_etudiant($etudiants,$username),$candidats_inscription_en_cours))return true;

else return false;
}

function nbr_inscription_par_etudiant($id_etudiant,$nbr_ipe){
    foreach ($nbr_ipe as $nbr){
        if ($nbr['id_etudiant'] == $id_etudiant) return $nbr['nombre'];

    }
}

?>
