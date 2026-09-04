(()=>{
  const section=document.querySelector('.service-gta-section .hd-wrap');
  if(!section||typeof L==='undefined')return;
  const shell=document.createElement('div');shell.className='gta-map-shell';
  shell.innerHTML='<div id="gta-service-map" aria-label="Interactive map of Happy Day Toronto service areas"></div><aside class="gta-map-sidebar"><h3>Service areas across the GTA</h3><p>Our primary balloon decoration service area.</p><div class="gta-region-list gta-city-list"></div></aside>';
  section.append(shell);
  const cities=[
    ['Toronto',43.6532,-79.3832],
    ['North York',43.7615,-79.4111],
    ['Vaughan',43.8361,-79.4983],
    ['Richmond Hill',43.8828,-79.4403],
    ['King City',43.9280,-79.5269],
    ['Kleinburg',43.8432,-79.6271],
    ['Woodbridge',43.7766,-79.6090]
  ];
  const markerColor='#f17ca4';
  const map=L.map('gta-service-map',{scrollWheelZoom:false,zoomControl:true}).setView([43.82,-79.42],9);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{maxZoom:18,attribution:'&copy; OpenStreetMap contributors'}).addTo(map);
  const bounds=[];const list=shell.querySelector('.gta-region-list');
  cities.forEach(([name,lat,lng])=>{
    const marker=L.circleMarker([lat,lng],{radius:7,color:'#fff',weight:2,fillColor:markerColor,fillOpacity:1}).addTo(map).bindTooltip(name,{direction:'top'});
    bounds.push([lat,lng]);
    const button=document.createElement('button');
    button.type='button';
    button.innerHTML=`<i aria-hidden="true"></i><span>${name}</span><b aria-hidden="true">→</b>`;
    button.setAttribute('aria-label',`Show ${name} on the service area map`);
    button.addEventListener('click',()=>{map.flyTo([lat,lng],12,{duration:.8});marker.openTooltip()});
    list.append(button);
  });
  map.fitBounds(bounds,{padding:[28,28]});setTimeout(()=>map.invalidateSize(),150);
})();
