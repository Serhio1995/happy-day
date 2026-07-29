(() => {
  const page = document.querySelector('.hd-gallery-page');
  if (!page) return;

  const filters = [...page.querySelectorAll('.hd-gallery-filter')];
  const cards = [...page.querySelectorAll('.hd-gallery-card')];
  const grid = page.querySelector('.hd-gallery-grid');
  const visibleCount = page.querySelector('.hd-gallery-visible-count');
  const totalCount = page.querySelector('.hd-gallery-total-count');
  const empty = page.querySelector('.hd-gallery-empty');
  const moreWrap = page.querySelector('.hd-gallery-more-wrap');
  const moreButton = page.querySelector('.hd-gallery-more');
  const moreCount = page.querySelector('.hd-gallery-more-count');
  const dialog = page.querySelector('.hd-gallery-lightbox');
  const dialogImage = dialog?.querySelector('img');
  const dialogTitle = dialog?.querySelector('figcaption strong');
  const dialogEvent = dialog?.querySelector('figcaption small');
  let visibleButtons = [];
  let activeIndex = 0;
  let activeFilter = 'all';
  const initialCount = Math.max(1, Number.parseInt(grid?.dataset.initialCount || '9', 10));
  const loadCount = Math.max(1, Number.parseInt(grid?.dataset.loadCount || '6', 10));
  let allVisibleLimit = initialCount;

  const refreshVisibleButtons = () => {
    visibleButtons = cards
      .filter(card => !card.hidden)
      .map(card => card.querySelector('.hd-gallery-open'))
      .filter(Boolean);
  };

  const applyGalleryState = () => {
    const matchingCards = cards.filter(card => (
      activeFilter === 'all'
      || (card.dataset.categories || '').split(' ').includes(activeFilter)
    ));
    const shownCards = activeFilter === 'all'
      ? matchingCards.slice(0, allVisibleLimit)
      : matchingCards;
    const shownSet = new Set(shownCards);

    cards.forEach(card => {
      card.hidden = !shownSet.has(card);
    });

    const remaining = Math.max(0, matchingCards.length - shownCards.length);
    if (visibleCount) visibleCount.textContent = String(shownCards.length);
    if (totalCount) totalCount.textContent = String(matchingCards.length);
    if (empty) empty.hidden = matchingCards.length !== 0;
    if (moreWrap) moreWrap.hidden = activeFilter !== 'all' || remaining === 0;
    if (moreCount) moreCount.textContent = String(remaining);
    if (moreButton) {
      moreButton.setAttribute('aria-expanded', remaining === 0 ? 'true' : 'false');
    }
    refreshVisibleButtons();
  };

  filters.forEach(button => {
    button.addEventListener('click', () => {
      activeFilter = button.dataset.filter || 'all';
      if (activeFilter === 'all') allVisibleLimit = initialCount;

      filters.forEach(item => {
        const selected = item === button;
        item.classList.toggle('is-active', selected);
        item.setAttribute('aria-pressed', selected ? 'true' : 'false');
      });

      applyGalleryState();
    });
  });

  moreButton?.addEventListener('click', () => {
    allVisibleLimit += loadCount;
    applyGalleryState();
  });

  applyGalleryState();

  if (!dialog || !dialogImage || !dialogTitle || !dialogEvent) return;

  const renderDialog = index => {
    if (!visibleButtons.length) return;
    activeIndex = (index + visibleButtons.length) % visibleButtons.length;
    const button = visibleButtons[activeIndex];
    dialogImage.src = button.dataset.full || '';
    dialogImage.alt = button.dataset.title || '';
    dialogTitle.textContent = button.dataset.title || '';
    dialogEvent.textContent = button.dataset.event || '';
  };

  const openDialog = button => {
    refreshVisibleButtons();
    renderDialog(visibleButtons.indexOf(button));
    dialog.showModal();
    document.body.classList.add('hd-gallery-lightbox-open');
  };

  cards.forEach(card => {
    const button = card.querySelector('.hd-gallery-open');
    button?.addEventListener('click', () => openDialog(button));
  });

  const closeDialog = () => dialog.close();
  dialog.querySelector('.hd-gallery-lightbox-close')?.addEventListener('click', closeDialog);
  dialog.querySelector('.hd-gallery-lightbox-prev')?.addEventListener('click', () => renderDialog(activeIndex - 1));
  dialog.querySelector('.hd-gallery-lightbox-next')?.addEventListener('click', () => renderDialog(activeIndex + 1));
  dialog.addEventListener('click', event => {
    if (event.target === dialog) closeDialog();
  });
  dialog.addEventListener('close', () => {
    document.body.classList.remove('hd-gallery-lightbox-open');
    dialogImage.src = '';
  });
  dialog.addEventListener('keydown', event => {
    if (event.key === 'ArrowLeft') renderDialog(activeIndex - 1);
    if (event.key === 'ArrowRight') renderDialog(activeIndex + 1);
  });
})();
