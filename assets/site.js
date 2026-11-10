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

    nav.querySelectorAll('.menu-item-has-children').forEach(parentItem=>{
      const parentLink=parentItem.querySelector(':scope > a');
      if(!parentLink) return;
      parentLink.setAttribute('aria-expanded','false');
      parentLink.addEventListener('click',event=>{
        if(!mobile()) return;
        event.preventDefault();
        const expanded=parentItem.classList.toggle('services-open');
        parentLink.setAttribute('aria-expanded',expanded?'true':'false');
      });
    });

    nav.querySelectorAll('a').forEach(link=>link.addEventListener('click',()=>{
      if(mobile()&&!link.parentElement.classList.contains('menu-item-has-children'))setMenu(false);
    }));
  }

  // The service ribbon needs a second identical group for the seamless loop;
  // clone it at runtime so the markup carries each service link only once.
  const marqueeTrack=document.querySelector('.service-marquee-track');
  if(marqueeTrack&&marqueeTrack.children.length===1){
    const clone=marqueeTrack.firstElementChild.cloneNode(true);
    clone.setAttribute('aria-hidden','true');
    clone.querySelectorAll('a').forEach(link=>link.setAttribute('tabindex','-1'));
    marqueeTrack.appendChild(clone);
  }

  // Turnstile's challenge payload is ~1.7 MB, so the theme dequeues CF7's copy
  // and loads it only once a visitor nears or starts filling in a quote form.
  const turnstileForms=[...document.querySelectorAll('.cf-turnstile')].map(widget=>widget.closest('form')).filter(Boolean);
  if(turnstileForms.length){
    let turnstileRequested=false;
    const loadTurnstile=()=>{
      if(turnstileRequested) return;
      turnstileRequested=true;
      const script=document.createElement('script');
      script.src='https://challenges.cloudflare.com/turnstile/v0/api.js';
      script.async=true;
      document.head.appendChild(script);
    };
    turnstileForms.forEach(form=>['focusin','pointerdown'].forEach(type=>form.addEventListener(type,loadTurnstile,{once:true,passive:true})));
    if('IntersectionObserver' in window){
      const observer=new IntersectionObserver(entries=>{
        if(!entries.some(entry=>entry.isIntersecting)) return;
        observer.disconnect();
        loadTurnstile();
      },{rootMargin:'400px 0px'});
      turnstileForms.forEach(form=>observer.observe(form));
    }else{
      loadTurnstile();
    }
    document.addEventListener('wpcf7submit',()=>window.turnstile?.reset());
  }

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
