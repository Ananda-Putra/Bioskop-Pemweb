// DEBUG: Cek bahwa file JS berhasil diload
console.log("✅ register.js loaded!");
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}
function toggle(btn, inputId) {
    const input = document.getElementById(inputId);
    if (!input) return;

    if (input.type === "password") {
        input.type = "text";
        btn.textContent = "🙈";
    } else {
        input.type = "password";
        btn.textContent = "👁️";
    }
}
// document.addEventListener("DOMContentLoaded", function () {
//     const registerForm = document.querySelector('form[action="register.php"]');
//     if (registerForm) {
//         console.log("🟦 Register form detected");
//         registerForm.addEventListener("submit", function (e) {
//             const username = document.querySelector('input[name="username"]').value;
//             const email = document.querySelector('input[name="email"]').value;
//             const password = document.getElementById("password").value;
//             const confirmPassword = document.getElementById("confirm_password").value;
//             if (!username || !email || !password || !confirmPassword) {
//                 alert("❌ Semua field wajib diisi!");
//                 e.preventDefault();
//                 return;
//             }
//             if (!validateEmail(email)) {
//                 alert("❌ Format email tidak valid!");
//                 e.preventDefault();
//                 return;
//             }
//             if (password !== confirmPassword) {
//                 alert("❌ Password dan konfirmasi password tidak sama!");
//                 e.preventDefault();
//                 return;
//             }
//             if (password.length < 6) {
//                 alert("❌ Password minimal 6 karakter!");
//                 e.preventDefault();
//                 return;
//             }
//             if (!confirm("Apakah Anda yakin ingin mendaftar?")) {
//                 e.preventDefault();
//             }
//         });
//         const pass = document.getElementById("password");
//         const conf = document.getElementById("confirm_password");

//         if (pass && conf) {
//             conf.addEventListener("input", function () {
//                 conf.style.borderColor =
//                     (conf.value && conf.value !== pass.value) ? "red" : "green";
//             });
//         }
//     }
//     const loginForm = document.querySelector('form[action=""]');
//     if (loginForm && !registerForm) {
//         console.log("🟧 Login form detected");
//         const inputs = loginForm.querySelectorAll("input");
//         inputs.forEach((input) => {
//             input.addEventListener("focus", () => {
//                 input.style.backgroundColor = "#222";
//                 input.style.color = "#ffcc00";
//             });
//             input.addEventListener("blur", () => {
//                 input.style.backgroundColor = "";
//                 input.style.color = "";
//             });
//         });
//     }
// });
