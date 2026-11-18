<?php
if(!defined('ABSPATH')) exit;

/**
 * Published starting prices (CAD), confirmed by the owner.
 *
 * Service pages, location FAQs and the price cards all read from here, so a
 * price changes in one place. Only add prices the owner has confirmed.
 */
function hd_prices(){
  return [
    'garland'  =>['group'=>'Decor','item'=>'Balloon garland','price'=>'From $250','covers'=>'Installation included. Delivery is priced by distance. We take everything down after the party.'],
    'backdrop' =>['group'=>'Decor','item'=>'Backdrop','price'=>'From $200','covers'=>'Installation included. Delivery is priced by distance. We take everything down after the party.'],
    'latex'    =>['group'=>'Balloons','item'=>'Latex balloons','price'=>'$6','unit'=>'each','covers'=>'Price per balloon. Delivery is priced by distance.'],
    'foil'     =>['group'=>'Balloons','item'=>'Foil balloons','price'=>'$8','unit'=>'each','covers'=>'Price per balloon. Delivery is priced by distance.'],
    'letters'  =>['group'=>'Rental','item'=>'Marquee letters','price'=>'$100','unit'=>'per letter','covers'=>'Light-up letters. Delivery is priced by distance. We collect them after the party.'],
    'numbers'  =>['group'=>'Rental','item'=>'4-ft marquee numbers','price'=>'From $100','covers'=>'Light-up numbers. Delivery is priced by distance. We collect them after the party.'],
  ];
}

/* Full price with its unit, e.g. "$6 each". */
function hd_price($key){
  $row=hd_prices()[$key] ?? null;
  if(!$row) return '';
  return trim($row['price'].' '.($row['unit'] ?? ''));
}

/* What the garland and backdrop starting prices cover. */
function hd_price_terms(){
  return 'Installation is included, delivery is priced by distance, and we take everything down after the party.';
}

/* What moves a quote above the starting price; shared by the cards and FAQs. */
function hd_price_factors(){
  return 'The final price depends on the size of the setup, whether a backdrop is added, the distance to your venue, and the setup time.';
}

/* One-paragraph answer for "How much does balloon decor cost?" FAQs. */
function hd_price_summary(){
  return sprintf(
    'Balloon garlands start %s and backdrops %s. %s Latex balloons are %s, foil balloons %s, and marquee letters %s.',
    lcfirst(hd_price('garland')),lcfirst(hd_price('backdrop')),hd_price_terms(),hd_price('latex'),hd_price('foil'),hd_price('letters')
  );
}

/* Price cards: item, starting price, what it covers. */
function hd_render_price_table($keys=null){
  $prices=hd_prices();
  $keys=$keys ?: array_keys($prices);
  echo '<ul class="hd-price-grid" role="list">';
  foreach($keys as $key){
    if(empty($prices[$key])) continue;
    $row=$prices[$key];
    printf(
      '<li class="hd-price-card"><span class="hd-price-group">%s</span><h3>%s</h3><p class="hd-price-amount">%s%s</p><p class="hd-price-covers">%s</p></li>',
      esc_html($row['group']),
      esc_html($row['item']),
      esc_html($row['price']),
      !empty($row['unit'])?' <small>'.esc_html($row['unit']).'</small>':'',
      esc_html($row['covers'])
    );
  }
  echo '</ul>';
}

/* Numeric starting price for a key ("From $250" -> 250). */
function hd_price_value($key){
  $row=hd_prices()[$key] ?? null;
  return $row?(int)preg_replace('/[^0-9]/','',$row['price']):0;
}

/* Sample combinations as till receipts, totals computed from hd_prices().
   $combos = [['title'=>'...','for'=>'...','items'=>[['garland',1,'Garland over the fireplace'], ...]], ...] */
function hd_render_price_combos($combos,$note=''){
  $prices=hd_prices();
  echo '<ul class="hd-combo-tickets" role="list">';
  foreach($combos as $combo){
    $total=0;$lines='';
    foreach($combo['items'] as $item){
      [$key,$qty]=$item;
      if(empty($prices[$key])) continue;
      $sum=hd_price_value($key)*$qty;$total+=$sum;
      $label=$item[2]??$prices[$key]['item'];
      $lines.=sprintf('<li><span>%s%s</span><span class="hd-combo-ticket-sum">$%s</span></li>',$qty>1?'<b>'.esc_html($qty).' ×</b> ':'',esc_html($label),esc_html(number_format($sum)));
    }
    echo '<li class="hd-combo-ticket"><div class="hd-combo-ticket-main">';
    printf('<h3>%s</h3>',esc_html($combo['title']));
    if(!empty($combo['for'])) printf('<p class="hd-combo-ticket-for">%s</p>',esc_html($combo['for']));
    printf('<ul class="hd-combo-ticket-lines" role="list">%s</ul></div>',$lines);
    printf('<div class="hd-combo-ticket-stub"><span>From</span><strong>$%s</strong><small>estimated</small></div>',esc_html(number_format($total)));
    echo '</li>';
  }
  echo '</ul>';
  if($note) printf('<p class="hd-combos-note">%s</p>',esc_html($note));
}
