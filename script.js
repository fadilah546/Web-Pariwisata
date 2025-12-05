const uname = document.querySelector("#uname");
const pass = document.querySelector("#pass");
const btnContainer = document.querySelector(".btn-container");
const btn = document.querySelector("#login-btn");
const form = document.querySelector("form");
const msg = document.querySelector(".msg");
btn.disabled = true;

function shiftButton() {
    showMsg();
    const positions = [
        "shift-left",
        "shift-top",
        "shift-right",
        "shift-bottom",
    ];
    const currentPosition = positions.find((dir) =>
        btn.classList.contains(dir)
    );
    const nextPosition =
        positions[(positions.indexOf(currentPosition) + 1) % positions.length];
    btn.classList.remove(currentPosition);
    btn.classList.add(nextPosition);
}

function showMsg() {
    const isEmpty = uname.value === "" || pass.value === "";
    btn.classList.toggle("no-shift", !isEmpty);

    if (isEmpty) {
        btn.disabled = true;
        msg.style.color = "rgb(218 49 49)";
        msg.innerText = "Please fill the input fields before proceeding";
    } else {
        msg.innerText = "Great! Now you can proceed";
        msg.style.color = "#006100ff";
        btn.disabled = false;
        btn.classList.add("no-shift");
    }
}

btnContainer.addEventListener("mouseover", shiftButton);
btn.addEventListener("mouseover", shiftButton);
form.addEventListener("input", showMsg);
btn.addEventListener("touchstart", shiftButton);

const registerHTML = `
  <form class="centered-flex hidden" id="register-form">
    <div class="title">REGISTER</div>
    <div class="msg" id="reg-msg"></div>

    <div class="field">
      <input type="text" placeholder="Username" id="reg-uname" />
    </div>
    <div class="field">
      <input type="password" placeholder="Password" id="reg-pass" />
    </div>

    <div class="btn-container">
      <input type="submit" id="register-btn" value="Register" />
    </div>

    <div class="signup">
      Already have an Account? <a href="#" id="show-login">Login</a>
    </div>
  </form>
`;

document
  .querySelector(".form-container")
  .insertAdjacentHTML("beforeend", registerHTML);

const loginForm = document.querySelector("#login-form") || document.querySelector("form");
const registerForm = document.querySelector("#register-form");

const showRegisterLink = document.querySelector("#show-register");
const showLoginLink = document.querySelector("#show-login");
const regMsg = document.querySelector("#reg-msg");

// Jika link Sign Up ada, aktifkan toggle form
if (showRegisterLink && showLoginLink) {
    showRegisterLink.addEventListener("click", (e) => {
        e.preventDefault();
        loginForm.classList.add("hidden");
        registerForm.classList.remove("hidden");
        msg.innerText = "";
    });

    showLoginLink.addEventListener("click", (e) => {
        e.preventDefault();
        registerForm.classList.add("hidden");
        loginForm.classList.remove("hidden");
        regMsg.innerText = "";
    });
}

// === PROSES REGISTER ===
registerForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const regUname = document.querySelector("#reg-uname").value.trim();
    const regPass = document.querySelector("#reg-pass").value.trim();

    if (!regUname || !regPass) {
        regMsg.textContent = "Please fill in all fields!";
        regMsg.style.color = "red";
        return;
    }

    const users = JSON.parse(localStorage.getItem("users")) || {};
    if (users[regUname]) {
        regMsg.textContent = "Username already exists!";
        regMsg.style.color = "red";
        return;
    }

    users[regUname] = { password: regPass };
    localStorage.setItem("users", JSON.stringify(users));

    regMsg.textContent = "Registration successful! You can now login.";
    regMsg.style.color = "green";

    registerForm.reset();
});

form.addEventListener("submit", (e) => {
    e.preventDefault();
    const username = uname.value.trim();
    const password = pass.value.trim();

    const users = JSON.parse(localStorage.getItem("users")) || {};

    if (users[username] && users[username].password === password) {
        localStorage.setItem("loggedInUser", username);
        window.location.href = "profile.html";
    } else {
        msg.style.color = "red";
        msg.textContent = "Invalid username or password.";
    }
});
