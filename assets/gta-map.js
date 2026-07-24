document.addEventListener('DOMContentLoaded',()=>{
  const section=document.querySelector('.service-gta-section .hd-wrap');
  if(!section||typeof L==='undefined')return;
  const shell=document.createElement('div');shell.className='gta-map-shell';
  shell.innerHTML='<div id="gta-service-map" aria-label="Interactive map of Happy Day Toronto service areas"></div><aside class="gta-map-sidebar"><h3>Service areas across the GTA</h3><p>An interactive overview of the communities we serve.</p><div class="gta-region-list"></div></aside>';
  section.append(shell);
  const regions={
    Toronto:{color:'#f17ca4',cities:[['Toronto',43.6532,-79.3832]]},
    York:{color:'#e95186',cities:[['Aurora',43.9999,-79.4663],['East Gwillimbury',44.1009,-79.4379],['Georgina',44.2963,-79.4362],['King',43.928,-79.5269],['Markham',43.8561,-79.337],['Newmarket',44.0592,-79.4613],['Richmond Hill',43.8828,-79.4403],['Vaughan',43.8361,-79.4983],['Whitchurch-Stouffville',43.9706,-79.2443]]},
    Peel:{color:'#8c5a91',cities:[['Brampton',43.7315,-79.7624],['Caledon',43.8668,-79.8663],['Mississauga',43.589,-79.6441]]},
    Halton:{color:'#d889aa',cities:[['Burlington',43.3255,-79.799],['Halton Hills',43.6469,-79.937],['Milton',43.5183,-79.8774],['Oakville',43.4675,-79.6877]]},
    Durham:{color:'#566da3',cities:[['Ajax',43.8509,-79.0204],['Brock',44.35,-79.1],['Clarington',43.935,-78.608],['Oshawa',43.8971,-78.8658],['Pickering',43.8384,-79.0868],['Scugog',44.105,-78.944],['Uxbridge',44.1094,-79.1205],['Whitby',43.8975,-78.9429]]}
  };
  const map=L.map('gta-service-map',{scrollWheelZoom:false,zoomControl:true}).setView([43.82,-79.42],9);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{maxZoom:18,attribution:'&copy; OpenStreetMap contributors'}).addTo(map);
  const bounds=[];const list=shell.querySelector('.gta-region-list');
  Object.entries(regions).forEach(([region,data])=>{
    const group=document.createElement('div');group.className='gta-region';
    const isSingleCity=region==='Toronto';
    if(isSingleCity)group.classList.add('gta-region-single');
    group.innerHTML=isSingleCity
      ?`<h4><i style="background:${data.color}"></i><button class="gta-region-heading-button" type="button">${region}</button></h4><div></div>`
      :`<h4><i style="background:${data.color}"></i>${region}</h4><div></div>`;
    const links=group.lastElementChild;
    data.cities.forEach(([name,lat,lng])=>{const marker=L.circleMarker([lat,lng],{radius:7,color:'#fff',weight:2,fillColor:data.color,fillOpacity:1}).addTo(map).bindTooltip(name,{direction:'top'});bounds.push([lat,lng]);const button=isSingleCity?group.querySelector('.gta-region-heading-button'):document.createElement('button');button.type='button';if(!isSingleCity)button.textContent=name;button.setAttribute('aria-label',`Show ${name} on the service area map`);button.addEventListener('click',()=>{map.flyTo([lat,lng],12,{duration:.8});marker.openTooltip()});if(!isSingleCity)links.append(button)});
    list.append(group);
  });
  map.fitBounds(bounds,{padding:[28,28]});setTimeout(()=>map.invalidateSize(),150);
});
