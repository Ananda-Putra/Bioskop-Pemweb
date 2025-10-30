 const apiKey = "55f19ecd";
 
  const daftarFilm = [
    { id: "Film A", judul: "Naruto" },
    { id: "Film B", judul: "Joker" },
    { id: "Film C", judul: "Spider-Man" },
    { id: "Film D", judul: "Our Beloved Summer" }
  ];

  async function updateFilm() {
    const movieCards = document.querySelectorAll(".movie-card");

    for (let i = 0; i < daftarFilm.length; i++) {
      const card = movieCards[i];
      const film = daftarFilm[i];

      try {
        const res = await fetch(`https://www.omdbapi.com/?apikey=${apiKey}&t=${film.judul}`);
        const data = await res.json();

        if (data.Response === "True") {
          const img = card.querySelector("img");
          const title = card.querySelector("h3");

          // update poster dan judul sesuai data asli dari OMDb
          img.src = data.Poster !== "N/A" ? data.Poster : img.src;
          title.textContent = data.Title;
        }
      } catch (error) {
        console.error("Gagal memuat data film:", film.judul, error);
      }
    }
  }

  updateFilm();

