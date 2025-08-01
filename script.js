function openMap(city) {
      const mapUrl = `https://www.google.com/maps/search/${city}+Rajasthan`;
      window.open(mapUrl, "_blank");
    }
    
function openMap(city) {
      const mapUrl = `https://www.google.com/maps/search/${city}+Rajasthan`;
      window.open(mapUrl, "_blank");
    }

  const searchInput = document.getElementById("citySearch");

  searchInput.addEventListener("input", () => {
    const query = searchInput.value.toLowerCase();
    const cards = document.querySelectorAll(".city-card");

    cards.forEach(card => {
      const cityName = card.querySelector("h3").textContent.toLowerCase();
      card.style.display = cityName.includes(query) ? "block" : "none";
    });
  });