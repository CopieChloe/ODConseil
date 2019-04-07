<?php 
    require_once("inc/header.php");
?>

<?php

$errorAlert = '';
$errorAlertName = '';
$errorAlertMail = '';
$errorAlertMessage = '';
$red_border_name = '';
$red_border_mail = '';
$red_border_message = '';

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $messageFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "olivier.defretin@od-conseil.fr";
    $headers = "From: ".$messageFrom;
    $txt = "Vous avez reçu un message de ".$name.".\n\n".$message;   
   

    // Check name
    if (empty($name)) {
        $errorAlert .= 'error';
        $errorAlertName .= 'Veuillez saisir votre nom.';
        $red_border_name = '1px solid darkred';
    } 
    
    // Check email 
    if (empty($messageFrom) && filter_var  ($messageFrom, FILTER_VALIDATE_EMAIL) === false) {
        $errorAlert .= 'error';
        $errorAlertMail .= 'Veuillez saisir une adresse mail valide.';
        $red_border_mail = '1px solid darkred';
    }
    
    //Check message
    if (!$message) {
        $errorAlert .= 'error';
        $errorAlertMessage .= 'Veuillez saisir un message.';
        $red_border_message = '1px solid darkred';
    } 

if (!$errorAlert) {
    mail($mailTo, $subject, $txt, $headers);

echo '<div class="alert-success">Merci pour votre message.</div>';
} else {
echo '<div class="alert-danger">Une erreur est survenue lors de l\'envoi de votre message. Veuillez <a href="#contact_form" class="form_anchor">réessayer.</a></div>';
} 

} #fermeture de if (isset($_POST["submit"]))

?>

<main class="main_contact">

    <div class="page_title page_title_home page_title_contact">
        <div class="page_title_inner">
            <h1>Contact</h1>
        </div>
    </div>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="contact_form row" id="contact_form">
        <h5 class="titre_formulaire">Formulaire de contact</h4>

        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate" name="name">
          <label for="last_name">Votre nom</label>
        </div>

        <div class="input_alert col s12" style="color: red; max-height: 3vh; text-align: center; margin-bottom: 3vh;"><?php echo $errorAlertName;?></div>

        <div class="input-field col s12">
            <input id="email_inline" type="email" class="validate" name="email">
            <label for="email_inline">Email</label>
          </div>

        <div class="input_alert  col s12" style="color: red; max-height: 3vh; text-align: center; margin-bottom: 3vh;"><?php echo $errorAlertMail;?></div>

        <div class="input-field col s12">
            <input id="phone" type="tel" class="validate" name="phone">
            <label for="phone">Téléphone</label>
        </div>

        <div class="input-field col s12">
          <input id="subject" type="text" class="validate" name="subject">
          <label for="subject">Objet</label>
        </div>

        <div class="input-field col s12">
          <textarea id="message" class="materialize-textarea" name="message"></textarea>
          <label for="message">Votre message</label>
        </div>

        <div class="input_alert  col s12" style="color: red; max-height: 3vh; text-align: center; margin-bottom: 3vh;"><?php echo $errorAlertMessage;?></div>

        <div class="input_div button_div col s12 row">
            <button class="btn col s5 m4 l4 offset-s7 offset-m7 offset-l8" type="submit" name="submit" id="submit_btn_contact">ENVOYER</button>    
        </div>      
    </form>

    <div class="coordonnees row hide_on_large">
        <div class="col s5 contact_photo_div"><img class="contact_photo" src="img/mrdefretin.jpg" alt="monsieur defretin"></div>
        <div class="col s7 coordonnees_content">
            <p class="coordonnes_line coordonnees_title">OD Conseil</p>
            <p class="coordonnes_line">100, rue Sente a My</p>
            <p class="coordonnes_line">57000 Metz</p>
            <p class="coordonnes_line">
                <a class="contactcalltoaction" href="tel:+33675272597">
                    06.75.27.25.97
                </a>
            </p>
        </div>
    </div>

    <div class="contact_on_large row">
        <div class="coordonnees row col l5 offset-l1">
            <div class="col s5 contact_photo_div">
                <img class="contact_photo" src="img/mrdefretin.jpg" alt="monsieur defretin">
            </div>
            <div class="col s7 coordonnees_content">
                <p class="coordonnes_line coordonnees_title">OD Conseil</p>
                <p class="coordonnes_line">100, rue Sente a My</p>
                <p class="coordonnes_line">57000 Metz</p>
                <p class="coordonnes_line">
                    <a class="contactcalltoaction" href="tel:+33675272597">
                        06.75.27.25.97
                    </a>
                </p>
                <div class="networks show-on-large hide-on-med-and-down row">
                    <a href="https://www.facebook.com/odconseil57/" class="col l4"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://www.linkedin.com/company/od-conseil-57/" class="col l4"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>    

    <div class="fb_iframe_container">
        <div class="fb-page" data-href="https://www.facebook.com/odconseil57/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/odconseil57/" class="fb-xfbml-parse-ignore">
                <a href="https://www.facebook.com/odconseil57/">OD Conseil</a>
            </blockquote>
        </div>
    </div>

</main>

<?php 
    require_once("inc/up.php");
?>

<?php 
    require_once("inc/footer.php");
?>