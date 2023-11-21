// Add button click event
document.getElementById('addButton').addEventListener('click', function () {
    const inputUrl = document.querySelector('.inputUrl');
    const urlValue = inputUrl.value.trim();

    if (urlValue !== '') {
        const table = document.querySelector('.tableCommon tbody');
        const newRow = table.insertRow();
        newRow.innerHTML = `
            <td>${urlValue}</td>
            <td><button class="deleteButton">Delete</button></td>
        `;

        inputUrl.value = ''; // Clear the input field
    }
});

// Delete button click event (event delegation)
document.querySelector('.tableCommon').addEventListener('click', function (e) {
    if (e.target.classList.contains('deleteButton')) {
        const row = e.target.closest('tr');
        if (row) {
            row.remove();
        }
    }
});