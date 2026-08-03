document.addEventListener('DOMContentLoaded', function () {
  const dropdown = document.querySelector('.dropdown');
  const dropdownMenu = document.querySelector('.dropdown-content');
  const hamburger = document.querySelector('.hamburger');
  const navLinks = document.querySelector('.nav-links');

  if (dropdown && dropdownMenu) {
    dropdown.addEventListener('click', function (e) {
      e.stopPropagation();
      dropdownMenu.classList.toggle('show');
    });

    dropdown.addEventListener('mouseenter', function () {
      dropdownMenu.classList.add('show');
    });

    dropdown.addEventListener('mouseleave', function () {
      dropdownMenu.classList.remove('show');
    });
  }

  if (hamburger && navLinks) {
    hamburger.addEventListener('click', function () {
      hamburger.classList.toggle('active');
      navLinks.classList.toggle('active');
    });

    document.querySelectorAll('.nav-links a').forEach(function (link) {
      link.addEventListener('click', function () {
        navLinks.classList.remove('active');
        hamburger.classList.remove('active');
      });
    });
  }

  const toggleBtn = document.getElementById('btn');
  const moreInfoSection = document.getElementById('more');

  if (toggleBtn && moreInfoSection) {
    toggleBtn.addEventListener('click', function () {
      const isOpen = moreInfoSection.classList.contains('open');
      if (!isOpen) {
        moreInfoSection.style.display = 'block';
        moreInfoSection.classList.add('open');
        toggleBtn.textContent = 'Show Less';
      } else {
        const dbUrl = toggleBtn.dataset.dbUrl;
        if (dbUrl) {
          window.location.href = dbUrl;
        } else {
          moreInfoSection.style.display = 'none';
          moreInfoSection.classList.remove('open');
          toggleBtn.textContent = 'Show More';
        }
      }
    });
  }

  document.addEventListener('click', function (event) {
    if (!event.target.closest('.dropdown')) {
      document.querySelectorAll('.dropdown-content').forEach(function (menu) {
        menu.classList.remove('show');
      });
    }
  });
});

function openMap(city) {
  const mapUrl = 'https://www.google.com/maps/search/' + encodeURIComponent(city + ' India');
  window.open(mapUrl, '_blank');
}
