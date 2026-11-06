<?php
if(!defined('ABSPATH')) exit;

/**
 * Published starting prices (CAD), confirmed by the owner.
 *
 * Service pages, location FAQs and the price table all read from here, so a
 * price changes in one place. Only add prices the owner has confirmed.
 */
function hd_prices(){
  return [
    'garland'  =>['item'=>'Balloon garland','price'=>'From $250','covers'=>'Delivery and installation included. Takedown is quoted separately.'],
    'backdrop' =>['item'=>'Backdrop','price'=>'From $200','covers'=>'Delivery and installation included. Takedown is quoted separately.'],
    'latex'    =>['item'=>'Latex balloons','price'=>'$6 each','covers'=>'Price per balloon. Delivery is added based on distance.'],
    'foil'     =>['item'=>'Foil balloons','price'=>'$8 each','covers'=>'Price per balloon. Delivery is added based on distance.'],
    'letters'  =>['item'=>'Marquee letters','price'=>'$100 per letter','covers'=>'Rental. Delivery, setup and collection are confirmed in your quote.'],
    'numbers'  =>['item'=>'4-ft marquee numbers','price'=>'From $100','covers'=>'Rental. Delivery, setup and collection are confirmed in your quote.'],
  ];
}

function hd_price($key){return hd_prices()[$key]['price'] ?? '';}

/* What moves a quote above the starting price; shared by the table and FAQs. */
function hd_price_factors(){
  return 'The final price depends on the size of the setup, whether a backdrop is added, the distance to your venue, and the setup time.';
}

/* One-sentence answer for "How much does balloon decor cost?" FAQs. */
function hd_price_summary(){
  return sprintf(
    'Balloon garlands start %s and backdrops %s, both including delivery and installation, with takedown quoted separately. Latex balloons are %s, foil balloons %s, and marquee letters %s.',
    lcfirst(hd_price('garland')),lcfirst(hd_price('backdrop')),hd_price('latex'),hd_price('foil'),hd_price('letters')
  );
}

/* Item | Starting price | What it covers */
function hd_render_price_table($keys=null){
  $prices=hd_prices();
  $keys=$keys ?: array_keys($prices);
  echo '<div class="hd-price-table-wrap"><table class="hd-price-table"><thead><tr><th scope="col">Item</th><th scope="col">Starting price</th><th scope="col">What it covers</th></tr></thead><tbody>';
  foreach($keys as $key){
    if(empty($prices[$key])) continue;
    $row=$prices[$key];
    printf('<tr><th scope="row">%s</th><td>%s</td><td>%s</td></tr>',esc_html($row['item']),esc_html($row['price']),esc_html($row['covers']));
  }
  echo '</tbody></table></div>';
}
