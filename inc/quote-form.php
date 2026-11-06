<?php
if(!defined('ABSPATH')) exit;

/**
 * The quote form's fields and notification email live here, not in the CF7
 * admin: the theme deploys through WP Pusher, the CF7 form is a database row,
 * and every page (home, contact, service and location pages) shares one form.
 * Edits made to the "Form" or "Mail" body tabs in CF7 are overridden by this
 * file; the recipient, sender, subject and headers still come from CF7.
 */
function hd_quote_response_time(){return 'We reply the same day.';}

function hd_quote_budget_ranges(){
  return ['Under $250','$250–$500','$500–$1,000','$1,000+','Not sure yet'];
}

function hd_quote_occasions(){
  return ['Birthday','Wedding','Baby Shower','Bridal Shower','Corporate Event','Engagement','Anniversary','Baptism','Graduation','Christmas Party','Halloween Party','Valentine’s Day','Bar Mitzvah','Backdrop Rental','Balloon Arch & Garland','Balloon Ceiling Decor','Balloon & Flower Decoration','Other'];
}

function hd_quote_cf7_options($values){
  return implode(' ',array_map(function($value){return '"'.str_replace('"','',$value).'"';},$values));
}

function hd_quote_form_template(){
  $occasions=hd_quote_cf7_options(hd_quote_occasions());
  $budgets=hd_quote_cf7_options(hd_quote_budget_ranges());
  $response=esc_html(hd_quote_response_time());
  return <<<CF7
<div class="hd-cf7-form-head">
<h3>Request Your Balloon Quote</h3>
<p>Share your event details and we’ll get back to you with availability and pricing.</p>
<p class="hd-cf7-response"><i class="fa-solid fa-clock" aria-hidden="true"></i> {$response}</p>
</div>
<div class="hd-cf7-grid">
<div class="hd-cf7-field"><label>Your Name [text* your-name autocomplete:name placeholder "Example: Sarah Johnson"]</label></div>
<div class="hd-cf7-field"><label>Phone Number [tel* your-phone autocomplete:tel placeholder "Example: 647-555-0123"]</label></div>
<div class="hd-cf7-field"><label>Email Address [email* your-email autocomplete:email placeholder "you@example.com"]</label></div>
<div class="hd-cf7-field"><label>Event Date [date* event-date]</label></div>
<div class="hd-cf7-field hd-cf7-full"><label>Venue / Full Address [text* venue-address autocomplete:street-address placeholder "Example: 123 Yonge St, Richmond Hill"]</label></div>
<div class="hd-cf7-field hd-cf7-full"><label>Occasion [select* event-type include_blank {$occasions}]</label></div>
<div class="hd-cf7-field"><label>Guest Count [number guest-count min:1 placeholder "Example: 30"]</label></div>
<div class="hd-cf7-field"><label>Budget Range [select* budget-range include_blank {$budgets}]</label></div>
<div class="hd-cf7-field hd-cf7-full"><label>Theme, Colours &amp; Ideas [textarea event-details maxlength:5000 placeholder "Example: Pink and ivory garland for a first birthday, with a backdrop"]</label></div>
<div class="hd-cf7-field hd-cf7-full hd-cf7-file"><label>Photo of the Setup Area <small>(optional)</small> [file setup-photo limit:10mb filetypes:jpg|jpeg|png|webp|heic]</label></div>
<div class="hd-cf7-full hd-cf7-submit-wrap"><button type="submit" class="hd-btn hd-cf7-submit">Send My Quote Request <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></button></div>
</div>
CF7;
}

function hd_quote_mail_body(){
  return <<<MAIL
New quote request from [your-name]

Phone: [your-phone]
Email: [your-email]
Event date: [event-date]
Venue / address: [venue-address]
Occasion: [event-type]
Guest count: [guest-count]
Budget range: [budget-range]

Theme, colours & ideas:
[event-details]

Setup area photo: attached if the customer uploaded one.

--
Sent from [_url]
MAIL;
}

function hd_quote_form_properties($properties,$contact_form){
  if((int)$contact_form->id()!==hd_quote_form_id()) return $properties;
  $properties['form']=hd_quote_form_template();
  $mail=is_array($properties['mail']??null)?$properties['mail']:[];
  $mail['body']=hd_quote_mail_body();
  $mail['attachments']='[setup-photo]';
  $mail['use_html']=false;
  $properties['mail']=$mail;
  return $properties;
}
add_filter('wpcf7_contact_form_properties','hd_quote_form_properties',10,2);
