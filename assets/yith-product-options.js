document.addEventListener('DOMContentLoaded',()=>{
  const palette=document.querySelector('#yith-wapo-addon-1');
  const customField=document.querySelector('#yith-wapo-addon-2');
  const inscriptionToggle=document.querySelector('#yith-wapo-addon-3 input[type="checkbox"]');
  const inscriptionField=document.querySelector('#yith-wapo-addon-4');
  if(!palette||!customField||!inscriptionToggle||!inscriptionField)return;

  const colours={
    'rose gold':['#b97878','#edc3b3'],'dusty rose':['#b9798d','#e8b5c2'],
    'navy blue':['#263d78','#7285b5'],'royal blue':['#315caa','#8eaddb'],
    'light blue':['#82b5d2','#d5ecf5'],'hot pink':['#e84383','#ff9fc1'],
    blush:['#dfa0b7','#f3ccd9'],ivory:['#efe4d5','#fffaf1'],sage:['#92a68d','#d7dfd2'],
    cream:['#e9dfc7','#fff9eb'],blue:['#769dbb','#cbdde9'],silver:['#aeb4bf','#e4e7eb'],
    lilac:['#a789bc','#ddd0e7'],pink:['#e690ad','#f7ccda'],red:['#d9435f','#ffb4c0'],
    burgundy:['#75263f','#c77a91'],maroon:['#702d43','#bd7b8f'],purple:['#76528f','#c5afd3'],
    lavender:['#aa94c7','#ded4ec'],white:['#f4f3f0','#ffffff'],black:['#202333','#74798a'],
    gold:['#c69b47','#f0d79b'],champagne:['#c8aa7b','#f0dfbf'],beige:['#c8b69e','#eee5d8'],
    brown:['#815f4c','#c7a58f'],orange:['#e47a38','#ffc08d'],yellow:['#e3b832','#ffe899'],
    green:['#4f8a65','#a9d0b5'],mint:['#80bca5','#c9ebdf'],teal:['#37898b','#a5d7d6'],
    turquoise:['#37a9aa','#a9e4e2'],grey:['#818796','#d2d5dc'],gray:['#818796','#d2d5dc'],
    peach:['#eaa387','#ffd2bf'],coral:['#e76f70','#f9b3ad'],bronze:['#9b6b42','#d5ad82'],
    rainbow:['#ef709d','#4b5da0'],custom:['#ef709d','#263d78']
  };
  const colourKeys=Object.keys(colours).sort((a,b)=>b.length-a.length);
  const findColour=part=>{
    const clean=part.toLowerCase().replace(/[^a-z\s-]/g,' ').replace(/\s+/g,' ').trim();
    const key=colourKeys.find(name=>clean===name||new RegExp(`(^|\\s)${name.replace(' ','\\s+')}($|\\s)`).test(clean));
    if(key)return colours[key];
    if(window.CSS?.supports?.('color',clean))return [clean,`color-mix(in srgb, ${clean} 40%, white)`];
    return null;
  };
  palette.querySelectorAll('.yith-wapo-option').forEach(option=>{
    const label=option.querySelector('.yith-wapo-label')?.textContent?.trim()||'';
    const parts=label.split(/\s*(?:&|\+|\/|,|\band\b)\s*/i).filter(Boolean);
    const found=parts.map(findColour).filter(Boolean);
    const first=found[0]||findColour(label)||colours.custom;
    const second=found[1]||first;
    const isMixedFallback=/\b(custom|rainbow)\b/i.test(label);
    option.style.setProperty('--swatch-a',first[0]);
    option.style.setProperty('--swatch-b',found[1]?second[0]:(isMixedFallback?first[1]:first[0]));
  });

  const setFieldState=(field,visible)=>{
    field.classList.toggle('hd-wapo-condition-visible',visible);
    field.setAttribute('aria-hidden',visible?'false':'true');
    field.querySelectorAll('input,select,textarea').forEach(control=>{
      control.disabled=!visible;
      control.required=visible;
      if(!visible&&control.value){
        control.value='';
        control.dispatchEvent(new Event('change',{bubbles:true}));
      }
    });
  };
  const sync=()=>{
    const customSelected=Boolean(palette.querySelector('#yith-wapo-1-4:checked'));
    setFieldState(customField,customSelected);
    setFieldState(inscriptionField,inscriptionToggle.checked);
  };
  palette.addEventListener('change',sync);
  inscriptionToggle.addEventListener('change',sync);
  sync();
});
