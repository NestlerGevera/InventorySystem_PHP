document.addEventListener("DOMContentLoaded", () => {
    const addStaffForm = document.getElementById("addStaffForm");
    const staffTableBody = document.querySelector("#staffTable tbody");

    const fetchStaff = () => {
        fetch("get_staff.php")
            .then(response => response.json())
            .then(data => {
                staffTableBody.innerHTML = "";
                data.forEach(staff => {
                    staffTableBody.innerHTML += `
                        <tr>
                            <td>${staff.id}</td>
                            <td>${staff.name}</td>
                            <td>${staff.email}</td>
                            <td>${staff.phone}</td>
                            <td>${staff.position}</td>
                            <td>
                                <button onclick="editStaff(${staff.id})">Edit</button>
                                <button onclick="deleteStaff(${staff.id})">Delete</button>
                            </td>
                        </tr>
                    `;
                });
            });
    };

    addStaffForm.addEventListener("submit", (e) => {
        e.preventDefault();
        const formData = new FormData(addStaffForm);
        fetch("add_staff.php", {
            method: "POST",
            body: formData
        }).then(response => response.text()).then(() => {
            addStaffForm.reset();
            fetchStaff();
        });
    });

    window.deleteStaff = (id) => {
        if (confirm("Are you sure you want to delete this staff?")) {
            fetch("delete_staff.php", {
                method: "POST",
                body: new URLSearchParams({ id })
            }).then(() => fetchStaff());
        }
    };

    fetchStaff();
});
