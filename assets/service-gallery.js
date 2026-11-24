(() => {
  const section = document.querySelector('.service-gallery-section');
  if (!section) return;

  const grid = section.querySelector('.service-gallery-grid');
  const dialog = section.querySelector('.hd-gallery-lightbox');
  const firstButtons = [...section.querySelectorAll('.service-gallery-card')];
  if (!grid || !firstButtons.length || !dialog) return;

  /* Photos beyond the first cards arrive as JSON (template-parts/service-gallery.php). */
  let moreItems = [];
  try {
    moreItems = JSON.parse(section.querySelector('.service-gallery-more-data')?.textContent || '[]');
  } catch (error) {
    moreItems = [];
  }

  /* One list for the lightbox, so prev/next walks through every photo. */
  const items = [
    ...firstButtons.map(button => ({
      full: button.dataset.full || '',
      title: button.dataset.title || '',
      event: button.dataset.event || ''
    })),
    ...moreItems
  ];

  const image = dialog.querySelector('figure img');
  const title = dialog.querySelector('figcaption strong');
  const event = dialog.querySelector('figcaption small');
  let activeIndex = 0;

  const render = index => {
    activeIndex = (index + items.length) % items.length;
    const item = items[activeIndex];
    image.src = item.full || '';
    image.alt = item.title || '';
    title.textContent = item.title || '';
    event.textContent = item.event || '';
  };

  const open = index => {
    render(index);
    dialog.showModal();
    document.body.classList.add('hd-gallery-lightbox-open');
  };

  firstButtons.forEach((button, index) => {
    button.addEventListener('click', () => open(index));
  });

  const buildCard = (item, index) => {
    const button = document.createElement('button');
    button.className = 'service-gallery-card';
    button.type = 'button';
    button.setAttribute('aria-label', 'View ' + (item.title || 'photo'));
    const img = document.createElement('img');
    img.src = item.thumb || item.full;
    img.alt = item.title || '';
    img.loading = 'lazy';
    img.decoding = 'async';
    if (item.w && item.h) {
      img.width = item.w;
      img.height = item.h;
    }
    const icon = document.createElement('span');
    icon.className = 'service-gallery-card-icon';
    icon.setAttribute('aria-hidden', 'true');
    icon.innerHTML = '<i class="fa-solid fa-expand"></i>';
    button.append(img, icon);
    button.addEventListener('click', () => open(index));
    return button;
  };

  const moreButton = section.querySelector('.service-gallery-more');
  let moreShown = false;
  moreButton?.addEventListener('click', () => {
    /* Build the extra cards once. The button is removed rather than hidden:
       .hd-btn sets its own display, which overrides the hidden attribute. */
    if (moreShown) return;
    moreShown = true;
    const fragment = document.createDocumentFragment();
    moreItems.forEach((item, offset) => {
      fragment.append(buildCard(item, firstButtons.length + offset));
    });
    const firstNew = fragment.firstElementChild;
    grid.append(fragment);
    firstNew?.focus();
    moreButton.remove();
  });

  const closeDialog = () => dialog.close();
  dialog.querySelector('.hd-gallery-lightbox-close')?.addEventListener('click', closeDialog);
  dialog.querySelector('.hd-gallery-lightbox-prev')?.addEventListener('click', () => render(activeIndex - 1));
  dialog.querySelector('.hd-gallery-lightbox-next')?.addEventListener('click', () => render(activeIndex + 1));
  dialog.addEventListener('click', domEvent => {
    if (domEvent.target === dialog) closeDialog();
  });
  dialog.addEventListener('close', () => {
    document.body.classList.remove('hd-gallery-lightbox-open');
    image.removeAttribute('src');
  });
  dialog.addEventListener('keydown', domEvent => {
    if (domEvent.key === 'ArrowLeft') render(activeIndex - 1);
    if (domEvent.key === 'ArrowRight') render(activeIndex + 1);
  });
})();
