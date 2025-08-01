const toggleBtn = document.getElementById('toggleMoreBtn');
    const moreInfo = document.getElementById('moreInfoSection');
    const img = document.getElementById('fatehpurImg');

    toggleBtn.addEventListener('click', () => {
      if (moreInfo.style.display === 'block') {
        moreInfo.style.display = 'none';
        toggleBtn.textContent = 'Show More';
        toggleBtn.setAttribute('aria-expanded', 'false');
        moreInfo.setAttribute('aria-hidden', 'true');
      } else {
        moreInfo.style.display = 'block';
        toggleBtn.textContent = 'Show Less';
        toggleBtn.setAttribute('aria-expanded', 'true');
        moreInfo.setAttribute('aria-hidden', 'false');
      }
    });

    img.addEventListener('click', () => {
      if (img.style.transform === 'scale(1.2)') {
        img.style.transform = 'scale(1)';
        img.style.cursor = 'zoom-in';
      } else {
        img.style.transform = 'scale(1.2)';
        img.style.cursor = 'zoom-out';
      }
    });