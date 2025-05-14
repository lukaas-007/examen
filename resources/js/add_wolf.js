const map = document.querySelector(".map");

const areaSelect = document.querySelector("#area");

// Get all provinves in the map
const mapAreas = map.querySelectorAll("path");

mapAreas.forEach(mapArea => {

    // We dont append it in the HTML.
    const option = document.createElement("option");
    option.value = mapArea.getAttribute("title");
    option.innerText = mapArea.getAttribute("title");
    areaSelect.appendChild(option);

    mapArea.addEventListener("click", (event) => {
        
        mapAreas.forEach(mapArea => {
            mapArea.classList.remove("selected");
        });
        mapArea.classList.add("selected");
        
        let area = mapArea.getAttribute("title")
        areaSelect.value = area;

        document.querySelector("#amount").focus();
    });
});