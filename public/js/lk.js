document.getElementById("editProfile").addEventListener("click", function () {
    document.getElementById("editProfile").classList.add("hidden");
    document.querySelector(".profile-info").classList.add("hidden");
    document.querySelector(".edit-profile").classList.remove("hidden");
});

document.getElementById("cancelEdit").addEventListener("click", function () {
    document.getElementById("editProfile").classList.remove("hidden");
    document.querySelector(".profile-info").classList.remove("hidden");
    document.querySelector(".edit-profile").classList.add("hidden");
});

document
    .getElementById("edit")
    .addEventListener("submit", async function (event) {
        event.preventDefault(); // Предотвращаем стандартное поведение формы

        // Собираем данные формы
        const formData = new FormData(this);
        const data = Object.fromEntries(formData.entries());

        // Отправляем запрос на сервер
        const response = await fetch("/api/edit", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(data),
        });

        const result = await response.json();

        if (result.status == true) {
            // Успешная отправка
            window.location.reload();
        } else {
            // Обрабатываем ошибки валидации
            alert(result.message);
        }
    });
