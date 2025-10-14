document.getElementById("loginForm").addEventListener("submit", e => {
  e.preventDefault();
  const formData = new FormData(e.target);

  fetch("api/login.php", {
    method: "POST",
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    if (data.success) window.location.href = "dashboard.php";
    else alert(data.message || "Login failed!");
  });
});
