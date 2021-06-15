const setDisplay = () => {
    for (var i = 0; i < divIds.length; i++) {
        document.getElementById(divIds[i]).style.display = "none";
    }
};

const applydiv = (pid) => {
    setDisplay();
    document.getElementById(pid).style.backgroundColor = "#e8f0fe";
    document.getElementById(pid).style.color = "#1558d6";
    if (activeDiv && pid != activeDiv) {
        document.getElementById(activeDiv).style.backgroundColor = null;
        document.getElementById(activeDiv).style.color = null;
    }
    var divID = pid + "div";
    document.getElementById(divID).style.display = "block";
    document
        .getElementById(divID)
        .scrollIntoView({ behavior: "smooth", block: "center" });
    activeDiv = pid;
};