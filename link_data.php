<?php 
session_start(); 
if(!isset($_SESSION["nom"]))
{
	header('Location:index.php');
  exit();
}
else {
	$nom =  $_SESSION["nom"];
}
 
?>
<div class="names">
  <div id="first_name"></div>
  <div id="last_name"></div>
</div>


<div id="birth_date"></div>
<div id="card_number_s"></div>
<div id="compensation_choice"></div>
<div id="compensation_choice_source"></div>
<div id="contract_end_date_g"></div>
<div id="conversion_source_s"></div>
<div id="createdAt"></div>
<div id="current_balance_s"></div>
<div id="email"></div>

<div id="gender_s"></div>
<div id="home_club"></div>
<div id="home_club_id"></div>
<div id="id_g"></div>
<div id="is_friends_allowed"></div>
<div id="join_date_g"></div>
<div id="labels_country"></div>
<div id="language"></div>
<div id="mailing_city"></div>
<div id="mailing_country"></div>
<div id="mailing_house_number"></div>
<div id="mailing_street"></div>
<div id="member_account_s "></div>
<div id="membership_id_g"></div>
<div id="membership_name_g "></div>
<div id="membership_number_s"></div>
<div id="poste_code"></div>

<div id="visits"></div>
 
 
 

<script>
var el = '<?php echo "uploads/".$nom?>'; 
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

      var obj = JSON.parse(this.responseText);
      document.getElementById("birth_date").innerHTML =obj.member.birth_date;
      document.getElementById("card_number_s").innerHTML =obj.member.card_number_s;
      document.getElementById("compensation_choice").innerHTML =obj.member.compensation_choice;
      document.getElementById("compensation_choice_source").innerHTML =obj.member.compensation_choice_source;
      document.getElementById("contract_end_date_g").innerHTML =obj.member.contract_end_date_g;
      document.getElementById("conversion_source_s").innerHTML =obj.member.conversion_source_s;
      document.getElementById("createdAt").innerHTML =obj.member.createdAt;
      document.getElementById("current_balance_s").innerHTML =obj.member.current_balance_s;
      document.getElementById("email").innerHTML =obj.member.email;
      document.getElementById("first_name").innerHTML =obj.member.first_name;
      document.getElementById("last_name").innerHTML =obj.member.last_name;
      document.getElementById("gender_s").innerHTML =obj.member.gender_s;
      document.getElementById("home_club").innerHTML =obj.member.home_club;
      document.getElementById("home_club_id").innerHTML =obj.member.home_club_id;
      document.getElementById("id_g").innerHTML =obj.member.id_g;
      document.getElementById("is_friends_allowed").innerHTML =obj.member.is_friends_allowed;
      document.getElementById("join_date_g").innerHTML =obj.member.join_date_g;
      document.getElementById("labels_country").innerHTML =obj.member.labels_country;
      document.getElementById("language").innerHTML =obj.member.language;
      document.getElementById("mailing_city").innerHTML =obj.member.mailing_city;
      document.getElementById("mailing_country").innerHTML =obj.member.mailing_country;
      document.getElementById("mailing_house_number").innerHTML =obj.member.mailing_house_number;
      document.getElementById("mailing_street").innerHTML =obj.member.mailing_street ;
      document.getElementById("member_account_s ").innerHTML =obj.member.member_account_s;
      document.getElementById("membership_id_g").innerHTML =obj.member.membership_id_g ;
      document.getElementById("membership_name_g ").innerHTML =obj.member.membership_name_g;
      document.getElementById("membership_number_s").innerHTML =obj.member.membership_number_s;
      document.getElementById("poste_code").innerHTML =obj.member.poste_code;
      document.getElementById("visits").innerHTML =obj.visits.length;      
      console.log(obj);
  
    }
	};
	console.log(el);
  xhttp.open("GET",el+".json", true);
	xhttp.send();	

</script>


<!-- 
birth_date //
card_number_s
compensation_choice
compensation_choice_source
contract_end_date_g
conversion_source_s // type de souscription
createdAt // création de la carte basic
current_balance_s
email
first_name // ok
last_name // ok 
gender_s //sex 
home_club
home_club_id
id_g
is_friends_allowed // type de contrat 
join_date_g // date création 
labels_country // pays 
language // langue 
mailing_city
mailing_country 
mailing_house_number
mailing_street 
member_account_s 
membership_id_g
membership_name_g 
membership_number_s 
platform+browser
platform+platform
platform+source
platform+os
poste_code
updatedAt

-->