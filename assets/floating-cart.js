(()=>{
  const getShell=target=>target?.closest?.('.hd-floating-cart-shell');
  const setOpen=(shell,open)=>{
    if(!shell){
      if(!open)document.documentElement.classList.remove('hd-mini-cart-open');
      return;
    }
    const trigger=shell.querySelector('.hd-floating-cart');
    const panel=shell.querySelector('.hd-mini-cart-panel');
    const backdrop=shell.querySelector('.hd-mini-cart-backdrop');
    if(shell.classList.contains('is-empty')){
      shell.classList.remove('is-open');
      trigger?.setAttribute('aria-expanded','false');
      if(panel)panel.hidden=true;
      if(backdrop)backdrop.hidden=true;
      document.documentElement.classList.remove('hd-mini-cart-open');
      return;
    }
    shell.classList.toggle('is-open',open);
    trigger?.setAttribute('aria-expanded',open?'true':'false');
    if(panel)panel.hidden=!open;
    if(backdrop)backdrop.hidden=!open;
    document.documentElement.classList.toggle('hd-mini-cart-open',open);
    if(open)setTimeout(()=>shell.querySelector('.hd-mini-cart-close')?.focus(),20);
    else trigger?.focus({preventScroll:true});
  };
  const replaceFragments=(fragments,reopen=false)=>{
    Object.entries(fragments||{}).forEach(([selector,html])=>{
      document.querySelectorAll(selector).forEach(current=>{
        const template=document.createElement('template');
        template.innerHTML=String(html).trim();
        const replacement=template.content.firstElementChild;
        if(replacement)current.replaceWith(replacement);
      });
    });
    const shell=document.querySelector('.hd-floating-cart-shell');
    if(!shell||shell.classList.contains('is-empty')){
      document.documentElement.classList.remove('hd-mini-cart-open');
      return;
    }
    if(reopen)setOpen(shell,true);
  };
  document.addEventListener('click',event=>{
    const trigger=event.target.closest('.hd-floating-cart');
    if(trigger){event.preventDefault();setOpen(getShell(trigger),true);return;}
    const close=event.target.closest('.hd-mini-cart-close,.hd-mini-cart-backdrop');
    if(close){event.preventDefault();setOpen(getShell(close),false);return;}
    const remove=event.target.closest('.hd-mini-cart-remove');
    if(!remove)return;
    const shell=getShell(remove);
    const endpoint=shell?.dataset.removeUrl;
    const key=remove.dataset.cartItemKey;
    if(!endpoint||!key)return;
    event.preventDefault();
    remove.classList.add('is-loading');
    remove.setAttribute('aria-disabled','true');
    fetch(endpoint,{method:'POST',credentials:'same-origin',headers:{'Content-Type':'application/x-www-form-urlencoded; charset=UTF-8'},body:new URLSearchParams({cart_item_key:key}).toString()})
      .then(response=>{if(!response.ok)throw new Error('Cart update failed');return response.json();})
      .then(data=>{replaceFragments(data.fragments,true);document.body.dispatchEvent(new CustomEvent('wc_fragments_refreshed'));})
      .catch(()=>{window.location.href=remove.href;});
  });
  document.addEventListener('keydown',event=>{
    if(event.key!=='Escape')return;
    const shell=document.querySelector('.hd-floating-cart-shell.is-open');
    if(shell)setOpen(shell,false);
  });
})();
