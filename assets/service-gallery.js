(() => {
  const section = document.querySelector('.service-gallery-section');
  if (!section) return;

  const buttons = [...section.querySelectorAll('.service-gallery-card')];
  const dialog = section.querySelector('.hd-gallery-lightbox');
  if (!buttons.length || !dialog) return;

  const moreButton = section.querySelector('.service-gallery-more');
  moreButton?.addEventListener('click', () => {
    const hiddenButtons = buttons.filter(button => button.hidden);
    hiddenButtons.forEach(button => { button.hidden = false; });
    moreButton.hidden = true;
    hiddenButtons[0]?.focus();
  });

  const image = dialog.querySelector('figure img');
  const title = dialog.querySelector('figcaption strong');
  const event = dialog.querySelector('figcaption small');
  let activeIndex = 0;

  const render = index => {
    activeIndex = (index + buttons.length) % buttons.length;
    const button = buttons[activeIndex];
    image.src = button.dataset.full || '';
    image.alt = button.dataset.title || '';
    title.textContent = button.dataset.title || '';
    event.textContent = button.dataset.event || '';
  };

  buttons.forEach((button, index) => {
    button.addEventListener('click', () => {
      render(index);
      dialog.showModal();
      document.body.classList.add('hd-gallery-lightbox-open');
    });
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
    image.src = '';
  });
  dialog.addEventListener('keydown', domEvent => {
    if (domEvent.key === 'ArrowLeft') render(activeIndex - 1);
    if (domEvent.key === 'ArrowRight') render(activeIndex + 1);
  });
})();
