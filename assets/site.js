document.addEventListener('DOMContentLoaded',()=>{
  const toggle=document.querySelector('.mobile-toggle');
  const nav=document.querySelector('.site-nav');
  const mobile=()=>window.matchMedia('(max-width: 900px)').matches;

  if(toggle&&nav){
    const label=toggle.querySelector('.screen-reader-text');
    const setMenu=open=>{
      nav.classList.toggle('open',open);
      document.body.classList.toggle('hd-menu-open',open);
      toggle.setAttribute('aria-expanded',open?'true':'false');
      toggle.setAttribute('aria-label',open?'Close menu':'Open menu');
      if(label) label.textContent=open?'Close menu':'Open menu';
      if(open) setTimeout(()=>nav.querySelector('.menu>li>a')?.focus(),220);
    };

    toggle.addEventListener('click',()=>setMenu(!nav.classList.contains('open')));
    document.addEventListener('keydown',event=>{if(event.key==='Escape'&&nav.classList.contains('open')){setMenu(false);toggle.focus();}});
    window.addEventListener('resize',()=>{if(!mobile()&&nav.classList.contains('open'))setMenu(false);});

    const serviceItem=nav.querySelector('.menu-item-has-children');
    const serviceLink=serviceItem?.querySelector(':scope > a');
    if(serviceItem&&serviceLink){
      serviceLink.setAttribute('aria-expanded','false');
      serviceLink.addEventListener('click',event=>{
        if(!mobile()) return;
        event.preventDefault();
        const expanded=serviceItem.classList.toggle('services-open');
        serviceLink.setAttribute('aria-expanded',expanded?'true':'false');
      });
    }

    nav.querySelectorAll('a').forEach(link=>link.addEventListener('click',()=>{
      if(mobile()&&!link.parentElement.classList.contains('menu-item-has-children'))setMenu(false);
    }));
  }

  const examples={name:'e.g. Sarah Johnson',phone:'e.g. 647-527-5505',email:'e.g. sarah@example.com',details:'e.g. Birthday on August 24 in Richmond Hill. Pink and ivory balloon arch for 30 guests.'};
  Object.entries(examples).forEach(([name,placeholder])=>{
    document.querySelectorAll(`[name="${name}"]`).forEach(field=>{if(!field.placeholder)field.placeholder=placeholder});
  });

  // Service pages share one CF7 form; keep the service's event type selected.
  const setQuoteEventTypes=()=>{
    document.querySelectorAll('.hd-cf7-shell[data-event-type]').forEach(shell=>{
      const requested=(shell.dataset.eventType||'').trim();
      const select=shell.querySelector('select[name="event-type"]');
      if(!requested||!select) return;
      const option=[...select.options].find(item=>item.value.toLowerCase()===requested.toLowerCase());
      if(option) select.value=option.value;
    });
  };
  setQuoteEventTypes();
  document.addEventListener('wpcf7reset',setQuoteEventTypes);
});
