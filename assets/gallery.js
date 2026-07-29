(() => {
  const page = document.querySelector('.hd-gallery-page');
  if (!page) return;

  const filters = [...page.querySelectorAll('.hd-gallery-filter')];
  const cards = [...page.querySelectorAll('.hd-gallery-card')];
  const count = page.querySelector('.hd-gallery-result-count strong');
  const empty = page.querySelector('.hd-gallery-empty');
  const dialog = page.querySelector('.hd-gallery-lightbox');
  const dialogImage = dialog?.querySelector('img');
  const dialogTitle = dialog?.querySelector('figcaption strong');
  const dialogEvent = dialog?.querySelector('figcaption small');
  let visibleButtons = [];
  let activeIndex = 0;

  const refreshVisibleButtons = () => {
    visibleButtons = cards
      .filter(card => !card.hidden)
      .map(card => card.querySelector('.hd-gallery-open'))
      .filter(Boolean);
  };

  filters.forEach(button => {
    button.addEventListener('click', () => {
      const filter = button.dataset.filter;
      filters.forEach(item => {
        const selected = item === button;
        item.classList.toggle('is-active', selected);
        item.setAttribute('aria-pressed', selected ? 'true' : 'false');
      });

      let shown = 0;
      cards.forEach(card => {
        const matches = filter === 'all' || (card.dataset.categories || '').split(' ').includes(filter);
        card.hidden = !matches;
        if (matches) shown += 1;
      });

      if (count) count.textContent = String(shown);
      if (empty) empty.hidden = shown !== 0;
      refreshVisibleButtons();
    });
  });

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

  refreshVisibleButtons();
})();
