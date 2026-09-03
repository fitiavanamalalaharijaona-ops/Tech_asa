<?php
class User{
    private $bdd;
    public function __construct(PDO $bdd){
        $this->bdd=$bdd;
    }
    //connexion d'un utilisateur
    public function login(string email,string password):?array{
        $stmt->$this->bdd->prepare("SELECT*FROM users WHERE email= :email LIMIT 1");
        $stmt->execute(['email'=>$email]);
        $user=$stmt->fetch(PDO::FETCH_ASSOC);

    //verification du mdp
        if($user && $password_verify($password,$user['mot de passe'])){
            return user;//renvoie des donnes de l'user si ok
        }
    return null;//si identifiant incorect

    }
    public function register(string $nom,string $email,string $password,string $role){
        //verification du mail
        $stmt->$this->bdd->prepare("SELECT*FROM users Where email=:email");
        $stmt->execute(['email'=>$email])
        if($stmt=fetch()){
            return false;
        }
        $passwordHash=password_hash($password,PASSWORD_DEFAULT);

        $sql="INSERT INTO users(name,email,password,statuts) VALUES (:nom,:email,:password,:role)";
        $stmt->bdd->prepare($sql);

        return $stmt->execute([
            'nom'=> $nom,
            'email'=>$email,
            'password'=>$passwordHash,
            'role'=>$role
        ]);
    }
}

?>