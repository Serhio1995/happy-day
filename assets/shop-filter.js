(()=>{
  const filter=document.querySelector('.hd-shop-category-filter');
  if(!filter||typeof hdShopFilter==='undefined') return;
  const shell=filter.closest('.woocommerce-shell')||document;
  let controller=null;

  const setActive=(selected)=>{
    filter.querySelectorAll('[data-category]').forEach(link=>{
      const active=link===selected;
      link.classList.toggle('is-active',active);
      link.setAttribute('aria-pressed',active?'true':'false');
    });
  };

  const load=async(link)=>{
    const currentProducts=shell.querySelector('ul.products,.hd-shop-filter-empty');
    if(!currentProducts) return;
    if(controller) controller.abort();
    controller=new AbortController();
    filter.classList.add('is-loading');
    currentProducts.classList.add('is-filtering');
    filter.setAttribute('aria-busy','true');
    const data=new FormData();
    data.append('action','hd_filter_shop_products');
    data.append('nonce',hdShopFilter.nonce);
    data.append('category',link.dataset.category||'');
    data.append('orderby',shell.querySelector('.woocommerce-ordering select[name="orderby"]')?.value||'menu_order');
    try{
      const response=await fetch(hdShopFilter.ajaxUrl,{method:'POST',body:data,credentials:'same-origin',signal:controller.signal});
      const payload=await response.json();
      if(!payload.success) throw new Error('Filter request failed');
      const holder=document.createElement('div');
      holder.innerHTML=payload.data.products.trim();
      const nextProducts=holder.firstElementChild;
      if(!nextProducts) throw new Error('No product markup returned');
      currentProducts.replaceWith(nextProducts);
      const oldPagination=shell.querySelector('.woocommerce-pagination');
      if(oldPagination) oldPagination.remove();
      if(payload.data.pagination){
        const paginationHolder=document.createElement('div');
        paginationHolder.innerHTML=payload.data.pagination.trim();
        const pagination=paginationHolder.firstElementChild;
        if(pagination) nextProducts.insertAdjacentElement('afterend',pagination);
      }
      const oldCount=shell.querySelector('.woocommerce-result-count');
      if(oldCount&&payload.data.count){
        const countHolder=document.createElement('div');
        countHolder.innerHTML=payload.data.count.trim();
        if(countHolder.firstElementChild) oldCount.replaceWith(countHolder.firstElementChild);
      }
      setActive(link);
      history.pushState({hdShopCategory:link.dataset.category||''},'',link.href);
      nextProducts.animate([{opacity:0,transform:'translateY(12px)'},{opacity:1,transform:'translateY(0)'}],{duration:320,easing:'ease-out'});
    }catch(error){
      if(error.name!=='AbortError') window.location.href=link.href;
    }finally{
      filter.classList.remove('is-loading');
      filter.removeAttribute('aria-busy');
      shell.querySelector('ul.products,.hd-shop-filter-empty')?.classList.remove('is-filtering');
    }
  };

  filter.addEventListener('click',event=>{
    const link=event.target.closest('a[data-category]');
    if(!link||event.metaKey||event.ctrlKey||event.shiftKey||event.altKey) return;
    event.preventDefault();
    if(link.classList.contains('is-active')) return;
    load(link);
  });

  window.addEventListener('popstate',()=>window.location.reload());
})();
