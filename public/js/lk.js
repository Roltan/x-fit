document.getElementById("editProfile").addEventListener("click", function () {
    document.getElementById("editProfile").classList.add("hidden");
    document.querySelector(".profile-info").classList.add("hidden");
    document.querySelector(".edit-profile").classList.remove("hidden");
    document.getElementById("editName").value = "Иван Иванов";
    document.getElementById("editEmail").value = "ivan@example.com";
    document.getElementById("editPhone").value = "+7 (123) 456-78-90";
});

document.getElementById("cancelEdit").addEventListener("click", function () {
    document.getElementById("editProfile").classList.remove("hidden");
    document.querySelector(".profile-info").classList.remove("hidden");
    document.querySelector(".edit-profile").classList.add("hidden");
});

document.getElementById("saveProfile").addEventListener("click", function () {
    const newName = document.getElementById("editName").value;
    const newEmail = document.getElementById("editEmail").value;
    const newPhone = document.getElementById("editPhone").value;

    document.querySelector(
        ".profile-info p:nth-child(1)"
    ).textContent = `Имя: ${newName}`;

    document.querySelector(
        ".profile-info p:nth-child(2)"
    ).textContent = `Email: ${newEmail}`;

    document.querySelector(
        ".profile-info p:nth-child(3)"
    ).textContent = `Телефон: ${newPhone}`;

    document.getElementById("editProfile").classList.remove("hidden");
    document.querySelector(".profile-info").classList.remove("hidden");
    document.querySelector(".edit-profile").classList.add("hidden");
});
