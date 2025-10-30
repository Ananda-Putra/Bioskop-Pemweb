const loginForm = document.querySelector("form");
if (loginForm && document.title.includes("Login")) {
  loginForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const username = document.getElementById("username")?.value;
    const password = document.getElementById("password")?.value;

    if (username && password) {
      alert(`Selamat datang kembali, ${username}!`);
      localStorage.setItem("currentUser", username);
      window.location.href = "dashboard.html"; 
    } else {
      alert("Username dan password harus diisi!");
    }
  });
}