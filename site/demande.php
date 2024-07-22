<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$message = $_POST['message'] ; // Vérification si le champ 'message' est défini;
$pays=$_POST['pays'];
$ville=$_POST['ville'];

    $file=fopen('demadeformation.txt','a+');
    //recuperation de l'heure
    $heure =date('Y-d-m H:m:s');
    $data= "$nom | $prenom | $email | $ville |$pays |$message|$heure\n";
    //ecriture 
    fwrite($file,$data);
    fclose($file);
    header("Location: demandeformation.php");
    echo  "<script type='text/javascript'> alert('la demande est passé')</script>"
 ?>
 <?php if(isset($_FILES['myfile']) AND $_FILES['myfile']['error']==0){

$file_tmp = $_FILES['myfile']['tmp_name'];
$extension_file=pathinfo($_FILES['myfile']['name'],PATHINFO_EXTENSION);
$extensions_autorises=array('pdf');
if(in_array($extension_file,$extensions_autorises))
    {
move_uploaded_file($_FILES['myfile']['tmp_name'],'C:\xampp\htdocs\site\upload-'.date("Y-m-d-H-i-s").$_FILES['myfile']['name']);
       
}  else echo  "<script type='text/javascript'> alert('donner le cv sous format pdf !')</script>"     
} 

?>