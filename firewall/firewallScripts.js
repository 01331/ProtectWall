function toggleDropdown() {
    const select = document.getElementById("natConfiguration");
    select.style.display = select.style.display === "block" ? "none" : "block";
}

function selectOption() {
    const select = document.getElementById("natConfiguration");
    const selectedOption = select.options[select.selectedIndex].text;
    alert(`Selected NAT Configuration: ${selectedOption}`);
}