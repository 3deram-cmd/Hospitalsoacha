document.addEventListener("DOMContentLoaded", function () {

  const links = document.querySelectorAll(".auto-name");

  links.forEach(function (link) {

    let url = link.getAttribute("href");
    if (!url) return;

    let fileName = url.split("/").pop();
    fileName = decodeURIComponent(fileName);

    let extension = fileName.split(".").pop().toLowerCase();
    let cleanName = fileName.replace(/\.[^/.]+$/, "");

    let icon = "📄";

    if (extension === "pdf") icon = "📄";
    else if (["xlsx", "xls"].includes(extension)) icon = "📊";
    else if (["doc", "docx"].includes(extension)) icon = "📝";
    else if (["zip", "rar"].includes(extension)) icon = "🗜️";
    else if (["jpg", "png", "jpeg"].includes(extension)) icon = "🖼️";

    link.textContent = icon + " " + cleanName;

  });

});