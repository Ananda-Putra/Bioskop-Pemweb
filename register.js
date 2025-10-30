const registerForm = document.querySelector("form");
if (registerForm && document.title.includes("Register")) {
  registerForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const confirmSubmit = confirm("Apakah Anda yakin ingin mendaftar?");
    if (confirmSubmit) {
      alert("Pendaftaran berhasil! Selamat datang di CinemaGo!");
      registerForm.reset();
    }
  });
  
  const inputs = registerForm.querySelectorAll("input");
  inputs.forEach((input) => {
    input.addEventListener("focus", () => {
      input.style.backgroundColor = "#222";
      input.style.color = "#ffcc00";
    });
    input.addEventListener("blur", () => {
      input.style.backgroundColor = "";
      input.style.color = "";
    });
  });
}