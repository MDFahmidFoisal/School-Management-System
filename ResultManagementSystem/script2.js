document.getElementById("noticeForm").addEventListener("submit", function(event) {
    event.preventDefault();

    // Get input values
    const title = document.getElementById("noticeTitle").value;
    const description = document.getElementById("noticeDescription").value;

    // Create a new list item for the notice
    const newNotice = document.createElement("li");
    newNotice.innerHTML = `<strong>${title}:</strong> ${description}`;

    // Append the new notice to the notice list
    document.getElementById("noticeList").appendChild(newNotice);

    // Clear the form
    document.getElementById("noticeTitle").value = "";
    document.getElementById("noticeDescription").value = "";
});
